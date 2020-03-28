<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            // nombre de la categoría por ejemplo título, capítulo sección
            $table->text('name');
            // en las leyes revisadas hasta ahora cada categoría va acompañada de un breve título
            // que se refiera al tema tratado en dicha categoría
            $table->text('subject')->nullable();
            // esta tabla tiene una referencia a sí mismo, con el fin de organizar a las categorías
            // de manera jerárquica, TODO: encontrar una mejor forma de modelar jerarquías
            $table->smallInteger('parent_id')->default(null);
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
        Schema::dropIfExists('categories');
    }
}
