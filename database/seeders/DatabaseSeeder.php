<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        // User::create([
        //     'name' => 'Fajar',
        //     'email' => 'fajar@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Abdi',
        //     'email' => 'Abdi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'It is a receptor that converts energy.',
        //     'body' => 'It is a receptor that converts energy. Although the lamp is commonly known as a unified object, the truth is that it can be divided into two parts:</p><p>on one side is the luminary (which is the device that serves as a support) and the proper lamp which is the device that produces the light (bulb).Although originally the lamps only have the function of lighting a room or sector of the home, there are lamps of all kinds and a great classification can be made according to their age, their price, their durability, their style, etc.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'It is a receptor that converts energy.',
        //     'body' => 'It is a receptor that converts energy. Although the lamp is commonly known as a unified object, the truth is that it can be divided into two parts:</p><p>on one side is the luminary (which is the device that serves as a support) and the proper lamp which is the device that produces the light (bulb).Although originally the lamps only have the function of lighting a room or sector of the home, there are lamps of all kinds and a great classification can be made according to their age, their price, their durability, their style, etc.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'It is a receptor that converts energy.',
        //     'body' => 'It is a receptor that converts energy. Although the lamp is commonly known as a unified object, the truth is that it can be divided into two parts:</p><p>on one side is the luminary (which is the device that serves as a support) and the proper lamp which is the device that produces the light (bulb).Although originally the lamps only have the function of lighting a room or sector of the home, there are lamps of all kinds and a great classification can be made according to their age, their price, their durability, their style, etc.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'It is a receptor that converts energy.',
        //     'body' => 'It is a receptor that converts energy. Although the lamp is commonly known as a unified object, the truth is that it can be divided into two parts:</p><p>on one side is the luminary (which is the device that serves as a support) and the proper lamp which is the device that produces the light (bulb).Although originally the lamps only have the function of lighting a room or sector of the home, there are lamps of all kinds and a great classification can be made according to their age, their price, their durability, their style, etc.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }

}
