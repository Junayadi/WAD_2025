<?php

namespace Database\Seeders;
use App\Models\Ekskul;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EkskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ekskul::create(['nama' => 'Basket', 'pembina' => 'Pak Budi']);
        Ekskul::create(['nama' => 'Pramuka', 'pembina' => 'Bu Sari']);
    }
}
