<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    #Mostrar una lista del recurso.
    public function index()
    {
        //
    }

    #Almacene un recurso recién creado en el almacenamiento.
    public function store(Request $request)
    {
        //
    }

    #Muestra el recurso especificado.
    public function show(Post $post)
    {
        return $post;
    }

    #Actualice el recurso especificado en el almacenamiento.
    public function update(Request $request, Post $post)
    {
        //
    }

    #Elimine el recurso especificado del almacenamiento.
    public function destroy(Post $post)
    {
        //
    }
}
