<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(12);
        return view('blog', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            abort(404);
        }
        $titre = $blog->titre;
        $description = $blog->contenu;
        $images = $blog->images;
        return view('blog-details', compact('blog'));
    }
}
