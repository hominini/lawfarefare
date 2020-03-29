<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    /** @test */
    public function storeCategory()
    {
        // $this->withoutExceptionHandling();

        // preparar los datos
        $data = [
            'name' => 'TITULO 1', 
            'subject' => 'elmentos constitutivos del estado',
            // 'parent_id' => 1,
        ];

        // desencadenar la acción
        $response = $this->post('/categories', $data);

        // metodos para depurar
        // $response->dumpHeaders();
        // $response->dump();

        // valorar resultados
        $response->assertStatus(201);
        $this->assertDatabaseHas('categories', ['name' => $data['name']]);
    }

    /** @test */
    public function updateCategory()
    {
        // $this->withoutExceptionHandling();

        // preparar los datos
        $prev_category = factory(\App\Category::class)->create();
        
        $new_data = [
            'name' => 'TITULO 1', 
            'subject' => 'elmentos constitutivos del estado',
            // 'parent_id' => 1,
        ];

        // desencadenar la acción
        $response = $this->put('/categories/' . $prev_category->id, $new_data);

        // metodos para depurar
        // $response->dumpHeaders();
        // $response->dump();

        // valorar resultados
        $response->assertStatus(200);
        $this->assertDatabaseHas('categories', [
            'name' => $new_data['name'],
            'subject' => $new_data['subject'],
            'parent_id' => $prev_category->parent_id,
            ]);
    }

    /** @test */
    public function deleteCategory()
    {
        // $this->withoutExceptionHandling();

        // preparar los datos
        $category = factory(\App\Category::class)->create();
        
        // desencadenar la acción
        $response = $this->delete('/categories/' . $category->id);

        // metodos para depurar
        // $response->dumpHeaders();
        // $response->dump();

        // valorar resultados
        $response->assertStatus(204);
        $this->assertDatabaseMissing('categories', [
            'name' => $category->name,
            ]);
    }

    /** @test */
    public function viewCategory()
    {
        // $this->withoutExceptionHandling();

        // preparar los datos
        $category = factory(\App\Category::class)->create();
        
        // desencadenar la acción
        $response = $this->get('/categories/' . $category->id);

        // metodos para depurar
        // $response->dumpHeaders();
        // $response->dump();

        // valorar resultados
        $response->assertStatus(200)
            ->assertJson([
                'category' => [
                    'name' => $category->name,
                    'subject' => $category->subject,
                ],
            ]);
    }

    /** @test */
    public function viewAllCategories()
    {
        // $this->withoutExceptionHandling();

        // preparar los datos
        $categories = factory(\App\Category::class, 15)->create();
        
        // desencadenar la acción
        $response = $this->get('/categories/');

        // metodos para depurar
        // $response->dumpHeaders();
        // $response->dump();

        // valorar resultados
        $response->assertStatus(200)
            ->assertJsonFragment([
                'name' => $categories[0]->name,
                'subject' => $categories[0]->subject,
            ])
            ;
    }

    protected function tearDown(): void
    {
        // eliminar todos los registros creados
        \App\Category::truncate();
    }
}
