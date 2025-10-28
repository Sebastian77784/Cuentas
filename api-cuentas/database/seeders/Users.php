<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class Users extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([ 
            'name'=>'Sergio Sebastian',
            'email'=>'sebastainnn231@gmail.com',
            'password'=> Hash::make('123'),
            'img'=>'default.jpg',
            'created_at'=>date('Y-m-d h:m:s')
        ]);
    }
}
