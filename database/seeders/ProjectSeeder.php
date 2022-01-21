<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
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
                "project_name" => "National Headquarters Renovation",
            ],
            [
                "project_name" => "Case Inlet Retreat",
            ],
            [
                "project_name" => "CHS Field",
            ],
            [
                "project_name" => "Mariposa Land Port of Entry Expansion and Modernization",
            ],
            [
                "project_name" => "Perot Museum of Nature and Science",
            ],
            [
                "project_name" => "Pterodactyl",
            ]
        ];

        foreach ($arr as $value) {
            Project::create($value);
        }
    }
}
