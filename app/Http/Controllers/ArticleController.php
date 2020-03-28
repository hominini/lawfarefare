<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\StoreArticle;
use App\Http\Requests\UpdateArticle;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ArticleRepository $art_repo)
    {
        $articles = $art_repo->index();
        // dd($articles);
        return response()->json( $articles, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticle  $request
     * @param  \App\Repositories\ArticleRepository  $article_repository
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $request, ArticleRepository $article_repository)
    {
        $article = $article_repository->store($request);
        
        return response()->json( ['article' => $article], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return response()->json(['article' => $article],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \App\Http\Requests\UpdateArticle
     */
    public function update(UpdateArticle $request, Article $article, ArticleRepository $article_repository)
    {
        $article = $article_repository->update($article, $request);
        
        return response()->json( ['article' => $article], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article, ArticleRepository $article_repository)
    {
        $article_repository->destroy($article);
        
        return response()->json([], 204);
    }
}
