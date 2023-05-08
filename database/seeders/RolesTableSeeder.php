<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'nombre_rol' => 'Administrador',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'nombre_rol' => 'Editor',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'nombre_rol' => 'Usuario',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];


        DB::table('roles')->insert($roles);
    }
}
