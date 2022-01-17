<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Funcion que muestra la página principal de los posts
     */
    public function index()
    {
        // return "Bienvenido a la página posts";
        $posts = Post::paginate();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required'
        ]);


        $post = new Post();
        $titulo = $request->titulo;
        $post->titulo = $titulo;
        $post->descripcion = $request->descripcion;
        $post->slug = Str::of($titulo)->slug('-');

        $post->save();
    }

    /**
     * Funcion que muestra un post específico
     */
    public function show($post)
    {
        // return "Bienvenido al post: $post";
        //compact('post') <=> ['post' => $post]

        $post = Post::where('slug', '=', $post)->first();

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    /**
     * Función que redirecciona a la página de búsquedas
     */
    public function browse(Request $request)
    {
        $search = $request['search'];
        //La busqueda de posts se hace segun el titulo y descripcion, luego se pagina para mostrar de a 15 posts
        $posts = Post::where('titulo', 'like', '%' . $search . '%')->orwhere('descripcion', 'like', '%' . $search . '%')->get();
        return view('posts.browse', compact('posts'));
    }
}
