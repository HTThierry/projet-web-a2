<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert(['title' => 'SFx1', 'description' => 'Authentifier', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);

        DB::table('permissions')->insert(['title' => 'SFx2', 'description' => 'Rechercher une entreprise', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx3', 'description' => 'Créer une entreprise', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx4', 'description' => 'Modifier une entreprise', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx5', 'description' => 'Evaluer une entreprise', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx6', 'description' => 'Supprimer une entreprise', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx7', 'description' => 'Consulter les stats des entreprises', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);

        DB::table('permissions')->insert(['title' => 'SFx8', 'description' => 'Rechercher une offre', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx9', 'description' => 'Créer une offre', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx10', 'description' => 'Modifier une offre', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx11', 'description' => 'Supprimer une offre', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx12', 'description' => 'Consulter les stats des offres', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);

        DB::table('permissions')->insert(['title' => 'SFx13', 'description' => 'Rechercher un compte pilote', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx14', 'description' => 'Créer un compte pilote', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx15', 'description' => 'Modifier un compte pilote', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx16', 'description' => 'Supprimer un compte pilote', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);

        DB::table('permissions')->insert(['title' => 'SFx17', 'description' => 'Rechercher un compte délégué', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx18', 'description' => 'Créer un compte délégué', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx19', 'description' => 'Modifier un compte délégué', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx20', 'description' => 'Supprimer un compte délégué', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx21', 'description' => 'Assigner des droits à un délégué', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);

        DB::table('permissions')->insert(['title' => 'SFx22', 'description' => 'Rechercher un compte étudiant', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx23', 'description' => 'Créer un compte étudiant', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx24', 'description' => 'Modifier un compte étudiant', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx25', 'description' => 'Supprimer un compte étudiant', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx26', 'description' => 'Consulter les stats des étudiants', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);

        DB::table('permissions')->insert(['title' => 'SFx27', 'description' => 'Ajouter une offre à la wish-list', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx28', 'description' => 'Retirer une offre à la wish-list', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx29', 'description' => 'Postuler à une offre', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx30', 'description' => 'Informer le système de l\'avancement de la candidature step 1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx31', 'description' => 'Informer le système de l\'avancement de la candidature step 2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx32', 'description' => 'Informer le système de l\'avancement de la candidature step 3', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx33', 'description' => 'Informer le système de l\'avancement de la candidature step 4', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        DB::table('permissions')->insert(['title' => 'SFx34', 'description' => 'Informer le système de l\'avancement de la candidature step 5', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
    }
}
