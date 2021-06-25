<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Mauricio',
            'email' => 'email@admin.com',
            'password' => bcrypt('123456')
        ]);

        factory(App\Post::class, 15)->create();
    }
}