<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnSelf;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $articles = Article::all();

        return view("pages.articles.index",[
            "articles" => $articles
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.articles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = new Article();

        // Dillerin listesini al
        $languages = config('languages');

        // Her dil için başlık ve içeriği işle
        foreach ($languages as $langCode => $langName) {
            if ($request->has("title.$langCode")) {
                $article->setTranslation('title', $langCode, $request->input("title.$langCode"));
            }
            if ($request->has("content.$langCode")) {
                $article->setTranslation('content', $langCode, $request->input("content.$langCode"));
            }
        }

        $article->save();

        // Makalenin başarıyla kaydedildiğini belirten bir yanıt döndür
        return redirect()->route('articles.index')->with('success', 'Article saved successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::findOrFail($id);
        return view('pages.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function switch($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
