<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Role_has_permissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // ADMIN SEEDER
        for ($i = 1; $i<=34; $i++)
        {
            $idRole = (DB::table('roles')->where('title','=','admin')->get('id_role'))[0]->id_role;
            $idPermissions = (DB::table('permissions')->where('title','=','SFx'.$i)->get('id_permission'))[0]->id_permission;
            DB::table('roles_has_permissions')->insert(['roles_id_role' => $idRole, 'permissions_id_permission' => $idPermissions]);
        } 

        // TUTEUR SEEDER
        for ($i = 1; $i<=12; $i++)
        {
            $idRole = (DB::table('roles')->where('title','=','tuteur')->get('id_role'))[0]->id_role;
            $idPermissions = (DB::table('permissions')->where('title','=','SFx'.$i)->get('id_permission'))[0]->id_permission;
            DB::table('roles_has_permissions')->insert(['roles_id_role' => $idRole, 'permissions_id_permission' => $idPermissions]);
        }

        for ($i = 17; $i<=26; $i++)
        {
            $idRole = (DB::table('roles')->where('title','=','tuteur')->get('id_role'))[0]->id_role;
            $idPermissions = (DB::table('permissions')->where('title','=','SFx'.$i)->get('id_permission'))[0]->id_permission;
            DB::table('roles_has_permissions')->insert(['roles_id_role' => $idRole, 'permissions_id_permission' => $idPermissions]);
        }

        for ($i = 32; $i<=33; $i++)
        {
            $idRole = (DB::table('roles')->where('title','=','tuteur')->get('id_role'))[0]->id_role;
            $idPermissions = (DB::table('permissions')->where('title','=','SFx'.$i)->get('id_permission'))[0]->id_permission;
            DB::table('roles_has_permissions')->insert(['roles_id_role' => $idRole, 'permissions_id_permission' => $idPermissions]);
        }

        // ELEVE SEEDER
        for ($i = 1; $i<=2; $i++)
        {
            $idRole = (DB::table('roles')->where('title','=','eleve')->get('id_role'))[0]->id_role;
            $idPermissions = (DB::table('permissions')->where('title','=','SFx'.$i)->get('id_permission'))[0]->id_permission;
            DB::table('roles_has_permissions')->insert(['roles_id_role' => $idRole, 'permissions_id_permission' => $idPermissions]);
        }

        $idRole = (DB::table('roles')->where('title','=','eleve')->get('id_role'))[0]->id_role;
        $idPermissions = (DB::table('permissions')->where('title','=','SFx5')->get('id_permission'))[0]->id_permission;
        DB::table('roles_has_permissions')->insert(['roles_id_role' => $idRole, 'permissions_id_permission' => $idPermissions]);

        for ($i = 7; $i<=8; $i++)
        {
            $idRole = (DB::table('roles')->where('title','=','eleve')->get('id_role'))[0]->id_role;
            $idPermissions = (DB::table('permissions')->where('title','=','SFx'.$i)->get('id_permission'))[0]->id_permission;
            DB::table('roles_has_permissions')->insert(['roles_id_role' => $idRole, 'permissions_id_permission' => $idPermissions]);
        }

        $idRole = (DB::table('roles')->where('title','=','eleve')->get('id_role'))[0]->id_role;
        $idPermissions = (DB::table('permissions')->where('title','=','SFx12')->get('id_permission'))[0]->id_permission;
        DB::table('roles_has_permissions')->insert(['roles_id_role' => $idRole, 'permissions_id_permission' => $idPermissions]);

        for ($i = 27; $i<=31; $i++)
        {
            $idRole = (DB::table('roles')->where('title','=','eleve')->get('id_role'))[0]->id_role;
            $idPermissions = (DB::table('permissions')->where('title','=','SFx'.$i)->get('id_permission'))[0]->id_permission;
            DB::table('roles_has_permissions')->insert(['roles_id_role' => $idRole, 'permissions_id_permission' => $idPermissions]);
        }

        $idRole = (DB::table('roles')->where('title','=','eleve')->get('id_role'))[0]->id_role;
        $idPermissions = (DB::table('permissions')->where('title','=','SFx34')->get('id_permission'))[0]->id_permission;
        DB::table('roles_has_permissions')->insert(['roles_id_role' => $idRole, 'permissions_id_permission' => $idPermissions]);
    }
}
