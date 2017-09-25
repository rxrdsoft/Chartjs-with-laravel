<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PersonaController extends Controller
{
    public function index()
    {

        $persona=DB::table('empleado2')->get();

        return view('personas.lista',['datos'=>$persona]);
    }




    public function ventas()
    {
        $ventas=DB::table('ventas')->get();
       // dd($ventas);
        return response()->json($ventas);
    }
}
