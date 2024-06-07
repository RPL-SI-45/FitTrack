<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel as Article;

class ArtikelController extends Controller
{

    protected $categories = ['Makanan', 'Minuman', 'Obat'];

    public function index(Request $request)
    {
        $query = Article::query();

        if ($request->has('query')) {
            $search = $request->input('query');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%")
                    ->orWhere('author', 'like', "%{$search}%")
                    ->orWhere('year', 'like', "%{$search}%");
            });
        }

        if ($request->has('category') && $request->input('category') != '') {
            $query->where('category', $request->input('category'));
        }

        $articles = $query->get();
        $categories = $this->categories;

        return view('content.artikel.index', compact('articles', 'categories'));
    }
}
