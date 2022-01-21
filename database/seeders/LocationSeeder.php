<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = array(
            0 =>
            array(
                'location_name' => 'Culver City, California',
            ),
            1 =>
            array(
                'location_name' => 'Nogales, Arizona',
            ),
            2 =>
            array(
                'location_name' => 'Dallas',
            ),
            3 =>
            array(
                'location_name' => 'Lakebay, Washington',
            ),
            4 =>
            array(
                'location_name' => 'Saint Paul, Minnesota',
            ),
            5 =>
            array(
                'location_name' => 'Des Moines',
            ),
        );
        foreach ($arr as $value) {
            Location::create($value);
        }
    }
}
