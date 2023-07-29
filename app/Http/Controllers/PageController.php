<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {   
        //return view('welcome');
        return view("home");
    }

    public function blog()
    {  
        /*$posts = [
            ['id'=> 1, 'title' => 'PHP', 'slug' => 'php'],
            ['id'=> 2, 'title' => 'Laravel', 'slug' => 'laravel']
        ];*/

        //$posts = Post::get(); //Trae todos los registros de la tabla
        //$post = Post::first(); //Trae el primer registro de la tabla
        //$post = Post::find(20); // Busca por id

        $posts = Post::latest()->paginate(); // para traer todos los registros orden desendente con paginado

        //Imprime información de una varibale
        //dd($posts);
    
        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        //return view('welcome');
        //return "Listado de publicaciones: " . $slug;

        //$post = $slug;

        return view('post', ['post' => $post]);
    }
}
