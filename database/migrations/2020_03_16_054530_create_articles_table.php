<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            // numero del articulo, unsigned small integer permite 65535 numeros enteros
            $table->unsignedSmallInteger('article_number');
            // el cuerpo del artículo al momento es text, pero talvez se deba moverlo a otra tabla cuando
            // se tenga mejor idea de la estructura que tiene el contenido del cuerpo de un articulo.
            $table->text('article_body');
            // id de la categoria a la que pertenece el articulo, esta tiene que ser un nodo terminal
            // en el arbol de categorias.
            $table->unsignedSmallInteger('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
