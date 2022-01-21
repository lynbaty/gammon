<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $arr = array(
        //     0 =>
        //     array(
        //         'first_name' => 'John',
        //         'last_name' => 'Smith',
        //         'address' => 'LA',
        //         'phone'=> '01234567890',
        //         'status' => 'Approved',
        //         'password' => 'abc123',
        //         'name' => 'John',
        //         'email' => 'johnsmith@gmail.com',
        //     ),
        //     1 =>
        //     array(
        //         'name' => 'Neil',
        //         'email' => 'neilirani@gmail.com',
        //     ),
        //     2 =>
        //     array(
        // 'name' => 'Liam',
        // 'email' => 'liamhoward@gmail.com',
        //     ),
        //     3 =>
        //     array(
        //         'name' => 'Elijah',
        //         'email' => 'elijahmorgan@gmail.com',
        //     ),
        //     4 =>
        //     array(
        //         'name' => 'Jacob',
        //         'email' => 'jacobandeson@gmail.com',
        //     ),
        //     5 =>
        //     array(
        //         'name' => 'Aiden',
        //         'email' => 'aidenmiles@gmail.com',
        //     ),
        // );
        $arr = [
            'firstname' => 'An',
            'lastname' => 'Bui Thien',
            'address' => 'DN',
            'phone' => '01234567890',
            'status' => 'active',
            'password' => Hash::make('abc123'),
            'name' => 'An',
            'email' => 'boanku@gmail.com',
        ];

        User::create($arr);
    }
}
