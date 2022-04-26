<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->save();

        $role_recruteur = new Role();
        $role_recruteur->name = 'recruteur';
        $role_recruteur->save();

        $role_candidat = new Role();
        $role_candidat->name = 'candidat';
        $role_candidat->save();

        $role_entreprise = new Role();
        $role_entreprise->name = 'entreprise';
        $role_entreprise->save();
    }
}
