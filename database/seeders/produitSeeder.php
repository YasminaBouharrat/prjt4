<?php

namespace Database\Seeders;

use App\Models\produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        produit::factory(10)->create();
    }
}
