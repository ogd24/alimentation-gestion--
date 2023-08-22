<?php

namespace Database\Seeders;

use App\Models\categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        categorie::create(['name' => 'Electronique']);
        categorie::create(['name' => 'Mode et Vêtement']);
        categorie::create(['name' => 'Art']);
        categorie::create(['name' => 'Boisson']);
        categorie::create(['name' => 'Maison et Jardin']);
        categorie::create(['name' => 'Beauté']);
    }
    }


