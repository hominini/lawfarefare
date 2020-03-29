<?php

namespace App\Repositories;

use App\Category;

class CategoryRepository
{
    /**
     * Guarda el recurso en la base de datos
     * 
     * @param object $categoryData
     * @return App\Category
     */
    public function store($categoryData)
    {
        $category = new Category();
        $category->name = $categoryData->name;
        $category->subject = $categoryData->subject;
        $category->parent_id = $categoryData->parent_id ?: null;
        
        $category->save();
    }

    /**
     * Actualiza el recurso en la base de datos
     * 
     * @param App\Category $old_category
     * @param Request $new_data
     * @return void
     */
    public function update($old_category, $new_data)
    {   
        $old_category->name = $new_data->name ?: $old_category->name;
        $old_category->subject = $new_data->subject ?: $old_category->subject;
        $old_category->parent_id = $new_data->parent_id ?: $old_category->parent_id;
        
        $old_category->save();
    }

    /**
     * Elimina el recurso en la base de datos
     * 
     * @param \App\Category $category
     * @return void
     */
    public function destroy($category)
    {   
        $category->delete();
    }

    /**
     * Elimina el recurso en la base de datos
     * 
     * @param \App\Category $category
     * @return void
     */
    public function index()
    {   
        return Category::all();
    }
}