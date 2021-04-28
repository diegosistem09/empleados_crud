<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;
use App\Models\Cargo;

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
        // $empleado = new Empleado();

        // $empleado->identidad ='987654';
        // $empleado->nombres ='July Carolina';
        // $empleado->apellidos ='Cardenas Lozano';
        // $empleado->direccion ='Calle 5 /02';
        // $empleado->telefono ='328837489';
        // $empleado->ciudad ='Chia';
        
        // $empleado->save();

        

        
        $cargo = new Cargo();

        $cargo->nombre_area ='Mantenimiento';
        $cargo->Ubicacion ='Planta 2';
        $cargo->id_empleado ='2';
        
        
        $cargo->save();

        
        
    }
}
