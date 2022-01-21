<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                "role_name" => "Engineer"
            ],
            [
                "role_name" => "Project Manager"
            ]
        ];
        foreach ($arr as $value) {
            Role::create($value);
        }
    }
}
