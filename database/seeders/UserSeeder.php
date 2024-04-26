<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>"Alex",
            'email'=>'Alex@mail.ru',
            'password'=> Hash::make(00000000),
            'is_admin'=> 1
        ]);

        User::create([
            'name'=>"Olya",
            'email'=>'Olya@mail.ru',
            'password'=> Hash::make(11111111)
        ]);

        User::create([
            'name'=>"Max",
            'email'=>'Max@mail.ru',
            'password'=> Hash::make(22222222)
        ]);

    }
}
