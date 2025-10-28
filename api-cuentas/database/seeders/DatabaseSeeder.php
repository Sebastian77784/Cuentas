<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(Users::class);
       $this->call(Accounts::class);
        $this->call(CategorySeeder::class);
        $this->call(Transaccions::class);
    }
}
