<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;


class Transaccions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('transactions')->insert([
            'ammount'=>199.99,
            'type' => 'gasto',
            'description' =>'hola mundo',
            'user_id' => 1,
            'category_id' => 1,
            'account_id' => 1,
            'created_at'=>date('Y-m-d h:m:s')
        ]);
    }
}
