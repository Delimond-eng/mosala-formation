<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Domaine;
use App\Models\Formateur;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $domaines = [
            ["libelle"=>"Finances", "user_id"=>1],
            ["libelle"=>"Nouvelles Technologies","user_id"=>1],
            ["libelle"=>"Informatique des objets", "user_id"=>1],
            ["libelle"=>"Agriculture", "user_id"=>1],
        ];

        $formateurs = [
            ["name"=>"Nawej","nickname"=>"Lionnel","gender"=>"Homme","email"=>"lionnelnawej@gmail.com","phone"=>"0815238800","photo"=>"", "user_id"=>1 ],
            ["name"=>"Mabuki","nickname"=>"Isaac","gender"=>"Homme","email"=>"isaacmabuki@gmail.com","phone"=>"0815238820","photo"=>"", "user_id"=>1 ],
            ["name"=>"Herman","nickname"=>"Beni","gender"=>"Homme","email"=>"beniherman@gmail.com","phone"=>"0845452266","photo"=>"", "user_id"=>1 ],
        ];

         \App\Models\User::updateOrCreate(
            ["id"=>1],
            [
            'name' => 'Gaston Delimond',
            'email' => 'admin@gmail.com',
            'password' => bcrypt("12345"),
            'role'=>'ADMIN'
         ]);

         foreach($domaines as $domaine){
            Domaine::updateOrCreate(
                ["libelle"=>$domaine["libelle"]],
                $domaine
            );
         }

         foreach($formateurs as $formateur){
            Formateur::updateOrCreate(
                ["name"=>$formateur["name"]],
                $formateur
            );
         }

    }
}
