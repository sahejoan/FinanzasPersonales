<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name'=>'Joaquin Saez',
            'email'=>'sahejoan@gmail.com',
            'password'=>Hash::make('15100387')
        ]);

        Categoria::create(['nombre'=>'Alimentacion','tipo'=>'gasto']);
        Categoria::create(['nombre'=>'Transporte','tipo'=>'gasto']);
        Categoria::create(['nombre'=>'Salud','tipo'=>'gasto']);
        Categoria::create(['nombre'=>'Entretenimiento','tipo'=>'gasto']);
        Categoria::create(['nombre'=>'Sueldos','tipo'=>'ingreso']);
        Categoria::create(['nombre'=>'Inversiones','tipo'=>'ingreso']);
        Categoria::create(['nombre'=>'Otros','tipo'=>'gasto']);
        Categoria::create(['nombre'=>'Ahorros','tipo'=>'gasto']);
        Categoria::create(['nombre'=>'Otros Ingresos','tipo'=>'ingreso']);
        Categoria::create(['nombre'=>'Otros Gastos','tipo'=>'gasto']);
    }
}
