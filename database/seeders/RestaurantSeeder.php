<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                'name' => 'La Gracia De Dios',
                'description' => 'La comida casera rica... como en casa.',
                'logo' => 'la-gracia-de-dios.png',
            ],
            [
                'name' => 'Martin Durand',
                'description' => 'Comida francesa y mediteránea.',
                'logo' => 'martin-durand.png',
            ],
            [
                'name' => 'El Mesón de Pablo',
                'description' => 'Las mejores tapas para disfrutar la fiesta.',
                'logo' => 'el-meson-de-pablo.png',
            ],
            [
                'name' => 'La Esquina Rosa',
                'description' => 'Lo bueno, ¡mejor...!',
                'logo' => 'la-esquina-de-rosa.png',
            ],
            [
                'name' => 'Amundarain Beef',
                'description' => 'Los mejores platos de ternera.',
                'logo' => 'amundarain-beef.png',
            ],
            [
                'name' => 'Nana María',
                'description' => 'Empanadas, pasteles y tartas.',
                'logo' => 'nana-maria.png',
            ],
        ]);
    }
}
