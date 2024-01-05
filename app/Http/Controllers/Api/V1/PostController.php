<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    #Mostrar una lista del recurso.
    public function index()
    {
        return PostResource::collection(Post::latest()->paginate());
    }

    #Almacene un recurso recién creado en el almacenamiento.
    public function store(Request $request)
    {
        //
    }

    #Muestra el recurso especificado.
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    #Actualice el recurso especificado en el almacenamiento.
    public function update(Request $request, Post $post)
    {
        //
    }

    #Elimine el recurso especificado del almacenamiento.
    public function destroy(Post $post)
    {
        //Response()->json
    }
}
