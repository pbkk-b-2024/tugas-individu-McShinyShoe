<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index($category, $id)
    {
        $article = Article::findOrFail($id);
        return view('template.edit.' . $category, compact('article'), ['category' => $category]);
    }

    public function update(Request $request, $category, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer',
            'link' => 'required|url',
        ]);

        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect("/home/edit/$category/$id")->with('success', 'Article updated successfully.');
    }

    public function destroy($category, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect("/home/view/$category")->with('success', 'Article deleted successfully.');
    }
}
