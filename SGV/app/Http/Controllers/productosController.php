<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productosController extends Controller
{
   public function index(Request $request){

    $prod = DB::select("SELECT * FROM `productos` WHERE 1");
    $serial = DB::select("SELECT * FROM `serial` WHERE `productos_id_productos`=?" ,[$request->idproduc]);
        return view("productos", ['produc' => $prod] ,['ser' => $serial]); 
}
public function create(Request $request){
    try{
       $sql=DB::insert("INSERT INTO `productos`( `productos`, `descripcion`, `precio`, `marca`) VALUES(?,?,?,?)",
       [
         $request->produc,
         $request->descr,
         $request->prec,
         $request->mar
       ]);
    }catch(\Throwable $th){
        $sql = 0;
     }
      if($sql == true){
        return back()->with("añadido","evaluación añadida correctamente");
      }else{
        return back()->with("error","Error al añadir la evaluación");
      }
}
public function update(Request $request){
  try{
    $sql = DB::update("UPDATE `productos` SET `productos`=?, `descripcion`=?, `precio`=?, `marca`=? WHERE `id_productos`=?",
    [
     $request->produc,
     $request->descr,
     $request->prec,
     $request->mar,
     $request->id
    ]);
  }catch(\Throwable $th){
      $sql = 0;
   }
    if($sql == true){
      return back()->with("añadido","evaluación añadida correctamente");
    }else{
      return back()->with("error","Error al añadir la evaluación");
    }
}
public function mandar(Request $request){
  try{
     $serial=DB::select("SELECT `id_serial`, `serial`  FROM `serial` WHERE `productos_id_productos`=?",
     [
       $request->idproduc
     ]);
     $cantidad=DB::select("SELECT COUNT(*) as  cantidad  FROM `serial` WHERE `productos_id_productos` = ?", [$request->idproduc]);

     $xqJson = json_encode($cantidad);
     
     return view("seriales",[
      'ser' => $serial,
      'xq' => $xqJson,
       'producto' => $request->produc,
        'identificador' => $request->id,
        
      ]); 
  }catch(\Throwable $th){
      $sql = 0;
   }
    if($sql == true){
      return back()->with("añadido","evaluación añadida correctamente");
    }else{
      return back()->with("error","Error al añadir la evaluación");
    }
}
public function añadirSerial(Request $request){
  try{
     $sql=DB::insert("INSERT INTO `serial`( `serial`, `productos_id_productos`) VALUES (?,?)",
     [
       $request->serial,
       $request->idproduc,
    
     ]);
  }catch(\Throwable $th){
      $sql = 0;
   }
    if($sql == true){
      return back()->with("añadido","evaluación añadida correctamente");
    }else{
      return back()->with("error","Error al añadir la evaluación");
    }
}
}