<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category-> name = "Programowanie";
        $category->save();
        
        $category = new Category();
        $category-> name = "Bazy danych";
        $category->save();
        
        $category = new Category();
        $category-> name = "Grafika komputerowa";
        $category->save();
        
        $category = new Category();
        $category-> name = "Systemy operacyjne";
        $category->save();
        
        $category = new Category();
        $category-> name = "Inne";
        $category->save();
    }
}
