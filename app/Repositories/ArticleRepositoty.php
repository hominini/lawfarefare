<?php

namespace App\Repositories;

use App\Article;

class ArticleRepository
{
    /**
     * Guarda el recurso en la base de datos
     * 
     * @param object $articleData
     * @return App\Article
     */
    public function store($articleData)
    {
        $article = new Article();
        $article->article_number = $articleData->article_number;
        $article->article_body = $articleData->article_body;
        $article->category_id = $articleData->category_id;
        
        $article->save();
    }

    /**
     * Actualiza el recurso en la base de datos
     * 
     * @param App\Article $old_article
     * @param Request $new_data
     * @return void
     */
    public function update($old_article, $new_data)
    {   
        $old_article->article_number = $new_data->article_number ?: $old_article->article_number;
        $old_article->article_body = $new_data->article_body ?: $old_article->article_body;
        $old_article->category_id = $new_data->category_id ?: $old_article->category_id;
        
        $old_article->save();
    }

    /**
     * Elimina el recurso en la base de datos
     * 
     * @param \App\Article $article
     * @return void
     */
    public function destroy($article)
    {   
        $article->delete();
    }

    /**
     * Elimina el recurso en la base de datos
     * 
     * @param \App\Article $article
     * @return void
     */
    public function index()
    {   
        return Article::all();
    }
}