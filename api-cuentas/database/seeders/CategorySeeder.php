<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('categories')->insert([
            'name' => 'Comida',
            'type' => 'gasto',
            'user_id'=>1,
            'created_at'=>date('Y-m-d h:m:s')
        ]);
    }
}