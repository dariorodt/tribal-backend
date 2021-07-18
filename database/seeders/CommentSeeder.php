<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            // usuario #1
            [
                'text' => 'Morbi lobortis purus quam, quis ornare justo vehicula a. Morbi interdum, ligula quis vestibulum elementum, sem felis pellentesque lorem, id vehicula risus augue ac nisl. Proin dapibus imperdiet nibh, ac commodo purus tristique et. Phasellus facilisis finibus risus a accumsan. Duis elit ante, malesuada at nunc id, auctor convallis lectus.',
                'user_id' => '1',
                'restaurant_id' => '2',
                'created_at' => '2021/05/20 15:00',
            ],
            [
                'text' => 'Aliquam vitae auctor turpis, nec tempor arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.',
                'user_id' => '1',
                'restaurant_id' => '1',
                'created_at' => '2021/03/12 16:30',
            ],
            [
                'text' => 'Praesent sed sem pellentesque, consequat ante non, hendrerit nisi. Curabitur feugiat, dolor ac molestie ornare, nunc arcu dapibus diam, interdum porttitor metus urna nec tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.',
                'user_id' => '1',
                'restaurant_id' => '6',
                'created_at' => '2021/01/30 18:50',
            ],
            [
                'text' => 'Aliquam eget turpis sed lacus tincidunt lacinia eget vel odio. In hac habitasse platea dictumst. Donec feugiat sem vitae porttitor maximus. Curabitur congue arcu porttitor, pharetra ligula in, tincidunt tortor. Suspendisse elementum ante vitae nisl vulputate, eu ullamcorper nunc rutrum.',
                'user_id' => '1',
                'restaurant_id' => '4',
                'created_at' => '2021/04/20 19:13',
            ],
            // usuario #2
            [
                'text' => 'Duis pharetra at enim volutpat congue. Sed vel auctor neque. Aliquam malesuada volutpat massa. Nullam magna turpis, cursus sed rutrum quis, fringilla eu lectus. Maecenas ex augue, tempor vel ullamcorper nec, tempor in nulla. Nunc quis scelerisque nisi, nec egestas tortor.',
                'user_id' => '2',
                'restaurant_id' => '2',
                'created_at' => '2021/03/10 13:00',
            ],
            [
                'text' => 'Curabitur consequat, risus at vestibulum placerat, mi nunc egestas tellus, non tristique orci risus quis orci. Duis dapibus quam nec purus pharetra varius. Nullam orci velit, faucibus eu diam in, feugiat dignissim erat. Pellentesque libero velit, finibus non nibh quis, pretium mollis erat.',
                'user_id' => '2',
                'restaurant_id' => '1',
                'created_at' => '2021/04/05 19:30',
            ],
            [
                'text' => 'Donec posuere eros vitae mauris sagittis dignissim. Donec nibh purus, vehicula consequat ex posuere, sagittis cursus lorem. Curabitur vel dui leo. Aliquam placerat tincidunt scelerisque. Curabitur commodo velit sem, ut interdum ex suscipit et. Praesent volutpat, eros sit amet accumsan tincidunt, lorem felis imperdiet risus, eget imperdiet nisi nisl quis ex. Sed ultricies justo quis velit dignissim tincidunt. Aliquam suscipit porta neque vitae iaculis.',
                'user_id' => '2',
                'restaurant_id' => '4',
                'created_at' => '2020/12/14 17:30',
            ],
            // usuario #3
            [
                'text' => 'Pellentesque at magna a sem pulvinar fermentum ac sit amet odio. Nullam pulvinar augue eget mi efficitur, commodo ultricies quam lacinia. Nulla libero nibh, tempus quis libero sollicitudin, vestibulum molestie erat. Quisque hendrerit fringilla ligula, aliquet aliquam urna volutpat ut.',
                'user_id' => '3',
                'restaurant_id' => '6',
                'created_at' => '2021/02/05 17:00',
            ],
            [
                'text' => 'Donec porta, urna eget dictum efficitur, odio ex ultricies purus, vel vulputate purus justo aliquam augue. Vestibulum vestibulum sollicitudin mi, a tempus dui fermentum quis. Mauris viverra hendrerit ligula, eu venenatis justo gravida vitae. Nulla pulvinar ante molestie pretium ultricies. Nullam ac malesuada elit, quis imperdiet mi. Nam non hendrerit nibh. Morbi cursus pulvinar leo, suscipit varius arcu ullamcorper non.',
                'user_id' => '3',
                'restaurant_id' => '4',
                'created_at' => '2021/03/10 20:00',
            ],
            [
                'text' => 'In hac habitasse platea dictumst. Nunc accumsan in ligula in dictum. In gravida lacinia orci, non venenatis ex cursus ut. Aliquam ut aliquam tortor, in lacinia lorem. Vestibulum metus magna, pulvinar sed elit in, tempus cursus augue. Cras eu consequat sapien, ut dictum sem. Donec sit amet laoreet lacus. Aenean sollicitudin sapien at cursus auctor.',
                'user_id' => '3',
                'restaurant_id' => '1',
                'created_at' => '2021/04/07 16:30',
            ],
            [
                'text' => 'Proin ornare pharetra orci, quis hendrerit nibh venenatis sed. Duis at diam nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam quis odio commodo, vulputate sapien in, placerat arcu. Nam sollicitudin eleifend venenatis.',
                'user_id' => '3',
                'restaurant_id' => '2',
                'created_at' => '2021/03/14 17:30',
            ],
            // usuario #4
            [
                'text' => 'Curabitur vitae faucibus massa. Duis sollicitudin aliquam ornare. Ut congue, eros id luctus consectetur, magna eros faucibus tellus, a mattis enim nisi id odio. Sed consectetur pulvinar tempus.',
                'user_id' => '4',
                'restaurant_id' => '6',
                'created_at' => '2021/02/05 17:00',
            ],
            [
                'text' => 'Vestibulum eros dui, venenatis vitae efficitur at, luctus a lorem. Sed tincidunt, dui imperdiet bibendum vulputate, massa odio lobortis lorem, id molestie nunc lectus et eros. Donec imperdiet, lacus nec ultrices laoreet, lacus enim bibendum enim, quis dictum nisi dui quis erat.',
                'user_id' => '4',
                'restaurant_id' => '3',
                'created_at' => '2021/02/05 17:00',
            ],
            [
                'text' => 'Phasellus interdum ultricies sem, quis egestas massa consectetur non. Donec mattis sapien nisl, a euismod lacus auctor euismod.',
                'user_id' => '4',
                'restaurant_id' => '4',
                'created_at' => '2021/06/18 19:20',
            ],
            [
                'text' => 'Praesent convallis sed eros a congue. Phasellus in urna tincidunt, cursus leo a, consectetur nulla. Aliquam sit amet facilisis dolor. Proin in vulputate diam. Mauris eu nulla consequat lacus rhoncus aliquam condimentum quis tortor.',
                'user_id' => '4',
                'restaurant_id' => '1',
                'created_at' => '2021/02/19 19:08',
            ],
            [
                'text' => 'Etiam congue mauris a scelerisque malesuada. Nulla facilisi. Duis velit libero, consectetur ac neque sit amet, porttitor luctus nunc. Cras placerat posuere eros nec dictum. Curabitur eu est tortor. Ut a congue lorem. Donec feugiat mauris nec felis pulvinar vulputate. Proin et mollis augue.',
                'user_id' => '4',
                'restaurant_id' => '2',
                'created_at' => '2021/01/18 14:20',
            ],
            // usuario #5
            [
                'text' => 'Vestibulum ex libero, gravida et dignissim scelerisque, tristique eu dolor. Phasellus sit amet ex lobortis ligula vulputate suscipit at et diam. Donec vestibulum est quis nunc gravida, non mattis tellus interdum. Curabitur id bibendum dolor.',
                'user_id' => '5',
                'restaurant_id' => '5',
                'created_at' => '2021/02/25 21:08',
            ],
            [
                'text' => 'Mauris justo metus, sodales eget bibendum ut, fringilla id ante. Quisque in turpis nec sem hendrerit tempor non quis quam. Fusce eget dolor augue.',
                'user_id' => '5',
                'restaurant_id' => '3',
                'created_at' => '2021/07/05 15:28',
            ],
        ]);
    }
}
