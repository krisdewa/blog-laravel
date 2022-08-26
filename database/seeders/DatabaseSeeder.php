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
        User::factory(3)->create();
        
        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Krisna Dewa Pratama',
        //     'email' => 'krisnadp23@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // User::create([
        //     'name' => 'Farhan Ario',
        //     'email' => 'hantukenting@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
