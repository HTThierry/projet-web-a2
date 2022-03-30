<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idRole = (DB::table('roles')->where('title','=','admin')->get('id_role'))[0]->id_role;
        DB::table('users')->insert(['first_name' => 'ADMIN','last_name' =>'ADMIN','email'=>'admin@cesi.fr','phone_number'=>'0000000000','login'=>'admin','password'=>'admin', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), 'roles_id_role'=>$idRole]);
    }
}
