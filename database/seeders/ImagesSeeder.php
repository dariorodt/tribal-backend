<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            // restaurant #1
            [
                'name' => 'Salón',
                'description' => 'Nuestro salon principal alberga 40 mesas de 10 puestos',
                'url' => 'salon.png',
                'restaurant_id' => '1',
            ],
            [
                'name' => 'Terraza',
                'description' => 'Nuestros espacios al aire libre',
                'url' => 'terraza.png',
                'restaurant_id' => '1',
            ],
            [
                'name' => 'Nuestro equipo',
                'description' => 'Somos un equipo instenso y apasionado',
                'url' => 'equipo.png',
                'restaurant_id' => '1',
            ],
            [
                'name' => 'Cosina',
                'description' => 'Nuestras instalacdiones cumplen con los más altos estándares de calidad',
                'url' => 'cosina.png',
                'restaurant_id' => '1',
            ],
            // restaurant #2
            [
                'name' => 'Salón',
                'description' => 'Nuestro salon principal alberga 40 mesas de 10 puestos',
                'url' => 'salon.png',
                'restaurant_id' => '2',
            ],
            [
                'name' => 'Terraza',
                'description' => 'Nuestros espacios al aire libre',
                'url' => 'terraza.png',
                'restaurant_id' => '2',
            ],
            [
                'name' => 'Nuestro equipo',
                'description' => 'Somos un equipo instenso y apasionado',
                'url' => 'equipo.png',
                'restaurant_id' => '2',
            ],
            [
                'name' => 'Cosina',
                'description' => 'Nuestras instalacdiones cumplen con los más altos estándares de calidad',
                'url' => 'cosina.png',
                'restaurant_id' => '2',
            ],
            // restaurant #3
            [
                'name' => 'Salón',
                'description' => 'Nuestro salon principal alberga 40 mesas de 10 puestos',
                'url' => 'salon.png',
                'restaurant_id' => '3',
            ],
            [
                'name' => 'Terraza',
                'description' => 'Nuestros espacios al aire libre',
                'url' => 'terraza.png',
                'restaurant_id' => '3',
            ],
            [
                'name' => 'Nuestro equipo',
                'description' => 'Somos un equipo instenso y apasionado',
                'url' => 'equipo.png',
                'restaurant_id' => '3',
            ],
            [
                'name' => 'Cosina',
                'description' => 'Nuestras instalacdiones cumplen con los más altos estándares de calidad',
                'url' => 'cosina.png',
                'restaurant_id' => '3',
            ],
            // restaurant #4
            [
                'name' => 'Salón',
                'description' => 'Nuestro salon principal alberga 40 mesas de 10 puestos',
                'url' => 'salon.png',
                'restaurant_id' => '4',
            ],
            [
                'name' => 'Terraza',
                'description' => 'Nuestros espacios al aire libre',
                'url' => 'terraza.png',
                'restaurant_id' => '4',
            ],
            [
                'name' => 'Nuestro equipo',
                'description' => 'Somos un equipo instenso y apasionado',
                'url' => 'equipo.png',
                'restaurant_id' => '4',
            ],
            [
                'name' => 'Cosina',
                'description' => 'Nuestras instalacdiones cumplen con los más altos estándares de calidad',
                'url' => 'cosina.png',
                'restaurant_id' => '4',
            ],
            // restaurant #5
            [
                'name' => 'Salón',
                'description' => 'Nuestro salon principal alberga 40 mesas de 10 puestos',
                'url' => 'salon.png',
                'restaurant_id' => '5',
            ],
            [
                'name' => 'Terraza',
                'description' => 'Nuestros espacios al aire libre',
                'url' => 'terraza.png',
                'restaurant_id' => '5',
            ],
            [
                'name' => 'Nuestro equipo',
                'description' => 'Somos un equipo instenso y apasionado',
                'url' => 'equipo.png',
                'restaurant_id' => '5',
            ],
            [
                'name' => 'Cosina',
                'description' => 'Nuestras instalacdiones cumplen con los más altos estándares de calidad',
                'url' => 'cosina.png',
                'restaurant_id' => '5',
            ],
            // restaurant #6
            [
                'name' => 'Salón',
                'description' => 'Nuestro salon principal alberga 40 mesas de 10 puestos',
                'url' => 'salon.png',
                'restaurant_id' => '6',
            ],
            [
                'name' => 'Terraza',
                'description' => 'Nuestros espacios al aire libre',
                'url' => 'terraza.png',
                'restaurant_id' => '6',
            ],
            [
                'name' => 'Nuestro equipo',
                'description' => 'Somos un equipo instenso y apasionado',
                'url' => 'equipo.png',
                'restaurant_id' => '6',
            ],
            [
                'name' => 'Cosina',
                'description' => 'Nuestras instalacdiones cumplen con los más altos estándares de calidad',
                'url' => 'cosina.png',
                'restaurant_id' => '6',
            ],
        ]);
    }
}
