<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\DummyData;

class ArticleTest extends TestCase
{

    /** @test */
    public function storeArticle()
    {
        // $this->withoutExceptionHandling();

        $dummy_data = new DummyData();
        // preparar los datos
        $data = [
            'article_number' => 1, 
            'article_body' => $dummy_data->articulo,
            'category_id' => 1,
        ];

        // desencadenar la acción
        $response = $this->post('/articles', $data);

        // metodos para depurar
        // $response->dumpHeaders();
        // $response->dump();

        // valorar resultados
        $response->assertStatus(201);
        $this->assertDatabaseHas('articles', ['article_number' => 1]);
    }

    /** @test */
    public function updateArticle()
    {
        // $this->withoutExceptionHandling();
        $dummy_data = new DummyData();

        // preparar los datos
        $prev_article = factory(\App\Article::class)->create();
        
        $new_data = [
            'article_number' => 1, 
            'article_body' => $dummy_data->articulo,
            // 'category_id' => 1,
        ];

        // desencadenar la acción
        $response = $this->put('/articles/' . $prev_article->id, $new_data);

        // metodos para depurar
        // $response->dumpHeaders();
        // $response->dump();

        // valorar resultados
        $response->assertStatus(200);
        $this->assertDatabaseHas('articles', [
            'article_number' => 1,
            'category_id' => $prev_article->category_id,
            ]);
    }

    /** @test */
    public function deleteArticle()
    {
        // $this->withoutExceptionHandling();

        // preparar los datos
        $prev_article = factory(\App\Article::class)->create();
        
        // desencadenar la acción
        $response = $this->delete('/articles/' . $prev_article->id);

        // metodos para depurar
        // $response->dumpHeaders();
        // $response->dump();

        // valorar resultados
        $response->assertStatus(204);
        $this->assertDatabaseMissing('articles', [
            'article_number' => $prev_article->article_number,
            ]);
    }

    /** @test */
    public function viewArticle()
    {
        // $this->withoutExceptionHandling();

        // preparar los datos
        $article = factory(\App\Article::class)->create();
        
        // desencadenar la acción
        $response = $this->get('/articles/' . $article->id);

        // metodos para depurar
        // $response->dumpHeaders();
        // $response->dump();

        // valorar resultados
        $response->assertStatus(200)
            ->assertJson([
                'article' => [
                    'article_number' => $article->article_number,
                    'article_body' => $article->article_body,
                ],
            ]);
    }

    /** @test */
    public function viewAllArticles()
    {
        // $this->withoutExceptionHandling();

        // preparar los datos
        $articles = factory(\App\Article::class, 15)->create();
        
        // desencadenar la acción
        $response = $this->get('/articles/');

        // metodos para depurar
        // $response->dumpHeaders();
        // $response->dump();

        // valorar resultados
        $response->assertStatus(200)
            ->assertJsonFragment([
                'article_number' => $articles[0]->article_number,
                'article_body' => $articles[0]->article_body,
            ])
            ;
    }

    protected function tearDown(): void
    {
        // eliminar todos los registros creados
        \App\Article::truncate();
    }
}
