<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Account;


class Accounts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('accounts')->insert([
            'name' => 'IJNhun',
            'ammount' => 158.25,
            'status' => 'active',
            'user_id'=> 1,
            'created_at'=>date('Y-m-d h:m:s')
        ]);
    }
}
