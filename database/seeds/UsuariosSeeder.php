<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nombre' => 'Juan Carlos',
            'apaterno' => 'Sánchez',
            'amaterno' => 'Ramírez',
            'usuario' => 'juan',
            'password' => bcrypt('juan'),
            'permisos' => 1
        ]);
    }
}
