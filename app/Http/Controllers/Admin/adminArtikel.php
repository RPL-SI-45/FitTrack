<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class adminArtikel extends Controller
{
    protected $categories = ['Makanan', 'Minuman', 'Obat'];

    public function index(Request $request)
    {
        $query = Artikel::query();

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

        return view('admin.artikel.index', compact('articles', 'categories'));
    }

    public function create()
    {
        $categories = $this->categories;
        return view('admin.artikel.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'year' => 'required|integer',
            'category' => 'required|string',
        ]);

        Artikel::create($request->all());

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel Berhasil di Buat.');
    }

    public function edit($id)
    {
        $article = Artikel::find($id);
        $categories = $this->categories;
        return view('admin.artikel.edit', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'year' => 'required|integer',
            'category' => 'required|string',
        ]);

        $article = Artikel::find($id);
        $article->update($request->all());

        return redirect()->route('admin.artikel.index')->with('success', 'Article updated successfully.');
    }

    public function destroy($id)
    {
        $article = Artikel::find($id);

        // Periksa apakah artikel ditemukan sebelum menghapus
        if ($article) {
            $article->delete();
            return redirect()->route('admin.artikel.index')->with('success', 'Article deleted successfully.');
        } else {
            return redirect()->route('admin.artikel.index')->with('error', 'Article not found.');
        }
    }
  }
