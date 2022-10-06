<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class WikiLaravelController extends Controller
{
    public function index(){
        return view('wikilaravel.index');
    }

    public function content(){
        return view('wikilaravel.content');
    }

    public function contact(){
        return view('wikilaravel.contact');
    }

    public function store(Request $request){
        Contacto::create([
            'nombre' => $request['nombre'],
            'apellidos' => $request['apellidos'],
            'email' => $request['email'],
            'comentario' => $request['comentario']
        ]);

        return view('wikilaravel.contact');
    }
}
