<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.centers
     *
     * @return void
     */
    public function run()
    {
        DB::table('centers')->insert(['title' => 'CESI Pau Orbigny', 'city' => 'Pau', 'address' => '8 Rue des Frères Charles et Alcide d\'Orbigny', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('centers')->insert(['title' => 'CESI Toulouse', 'city' => 'Labège', 'address' => '16 Rue Magellan Bâtiment Alpha', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('centers')->insert(['title' => 'CESI Bordeaux', 'city' => 'Bordeaux', 'address' => '264 Bd Godard', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('centers')->insert(['title' => 'CESI Strasbourg', 'city' => 'Lingolsheim', 'address' => 'Parc des Tanneries, 2 All. des Foulons', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('centers')->insert(['title' => 'CESI Lille', 'city' => 'Lille', 'address' => '8 Bd Louis XIV', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
    }
}
