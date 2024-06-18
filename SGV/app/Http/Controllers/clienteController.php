<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class clienteController extends Controller
{
    public function index(Request $request){

        $client = DB::select("SELECT p.id_personas, p.nombre, p.apellido, p.cedula, p.telefono, p.email, p.dirección, cl.id_clientes, g.genero FROM personas AS p 
        JOIN clientes cl ON cl.personas_id_personas = p.id_personas
        JOIN genero g ON g.id_genero = p.genero_id_genero;");
            return view("clientes", ['cliente' => $client]); 
    }
    public function create(Request $request){
        try{
            $sql = DB::insert("INSERT INTO `personas`(`nombre`, `apellido`, `cedula`, `telefono`, `email`, `dirección`, `genero_id_genero`) VALUES ('?,?,?,?,?,?,?')",
            [
              $request->nombre,
              $request->apellido,
              $request->cedula,
              $request->telefono,
              $request->email,
              $request->direccion,
              $request->sexo

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
