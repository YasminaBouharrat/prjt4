<?php

namespace Database\Seeders;
use App\Models\personne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class personneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        personne::factory(10)->create();
    }
}
