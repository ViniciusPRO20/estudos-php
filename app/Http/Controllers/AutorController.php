<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\models\Autor;

class AutorController extends Controller
{
    public function index() {

        $autores = Autor::all();
        
        return view("autor.index", ["autores"=> $autores]);
    }
    public function create() {
        return view("autor.create");
    }
    public function store(Request $request) {
        Autor::create($request->all());
        return redirect()->route('autores-index');
    }
}
