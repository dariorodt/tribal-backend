<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Julio Contreras',
                'email' => 'juliocontreras@example.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Milena Trujillo',
                'email' => 'milenatrujillo@example.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Consuelo Hartman',
                'email' => 'consuelohartman@example.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Guillermo Cortéz',
                'email' => 'guillermocortez@example.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Catalina Moreno',
                'email' => 'catalinamoreno@example.com',
                'password' => Hash::make('12345678'),
            ],
        ]);
    }
}
