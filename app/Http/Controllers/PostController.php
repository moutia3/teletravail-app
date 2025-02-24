<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return response()->json(['message' => 'Liste des posts']);
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        return response()->json(['message' => 'Post créé avec succès'], 201);
    }

 
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'sometimes|string',
            'content' => 'sometimes|string',
        ]);

        return response()->json(['message' => 'Post mis à jour avec succès']);
    }
}