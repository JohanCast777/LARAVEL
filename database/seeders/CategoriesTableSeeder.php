<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; 

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1=new Category;
        $category1->name="Deportes";
        $category1->description="The sprots are many, but the most played is soocer";
        $category1->active=true;
        $category1->save();

        $category2=new Category;
        $category2->name="Action";
        $category2->description="This is one of my favorites gender";
        $category2->active=true;
        $category2->save();

        $category3=new Category;
        $category3->name="Aventurs";
        $category3->description="The aventures are awesomes and more, if you are with youy mom";
        $category3->active=true;
        $category3->save();

        $category4=new Category;
        $category4->name="RPG";
        $category4->description="Category about rolgame";
        $category4->active=true;
        $category4->save();

        $category5=new Category;
        $category5->name="Fights";
        $category5->description="Category about Fight";
        $category5->active=true;
        $category5->save();
    }
}
