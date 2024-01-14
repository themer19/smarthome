<?php

namespace App\Http\Controllers;

use App\Models\Eq;
use App\Models\Rec;
use App\Models\Tech;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function equipement()
    {
        $eq=Eq::all();
        return view ('client.Equipement',compact('eq'));
    } 
    public function techniciens()
    {
     $tech=Tech::all();
      return view ('client.technicien',compact('tech'));
    }
    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $posts = Post::query()

            ->where('title', 'like', "%{$key}%")
            ->orWhere('content', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();

        $categories = Category::all();

        $tags = Tag::all();

        $recent_posts = Post::query()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('search', [
            'key' => $key,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ]);
    }
    public function reclamation(){
       
        return view ('reclamation');

    }
  
    
}
