<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([
        //     'name' => 'Daffa Arkantaqqy',
        //     'email' => 'daffaarkantaqqy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Wildan Nasrulloh',
        //     'email' => 'wildannasrulloh@gmail.com',
        //     'password' => bcrypt('54321')
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
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi non quidem enim corporis eveniet! Consectetur, in facilis perferendis rerum est ex impedit laborum placeat.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi non quidem enim corporis eveniet! Consectetur, in facilis perferendis rerum est ex impedit laborum placeat, sit, reprehenderit necessitatibus dignissimos. Eaque repellat error provident, possimus asperiores temporibus, fugiat ex, tempore accusamus hic aliquam sit dolores! Quis, eos. Nostrum explicabo quis placeat recusandae fuga facere saepe aperiam a dolorem tenetur doloremque ipsum sapiente rerum sequi est, quas nam harum voluptatibus numquam! Consequatur ea voluptatibus unde, voluptates voluptas eum, error voluptate quidem quod, corporis necessitatibus dolorum a ullam harum praesentium officia ipsum provident porro maxime ad totam sequi optio dolorem vitae! Doloremque adipisci magnam dolorum facilis voluptatum fuga quod quibusdam quas totam quaerat omnis, corporis fugiat nemo est suscipit a error beatae, exercitationem odit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi non quidem enim corporis eveniet! Consectetur, in facilis perferendis rerum est ex impedit laborum placeat.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi non quidem enim corporis eveniet! Consectetur, in facilis perferendis rerum est ex impedit laborum placeat, sit, reprehenderit necessitatibus dignissimos. Eaque repellat error provident, possimus asperiores temporibus, fugiat ex, tempore accusamus hic aliquam sit dolores! Quis, eos. Nostrum explicabo quis placeat recusandae fuga facere saepe aperiam a dolorem tenetur doloremque ipsum sapiente rerum sequi est, quas nam harum voluptatibus numquam! Consequatur ea voluptatibus unde, voluptates voluptas eum, error voluptate quidem quod, corporis necessitatibus dolorum a ullam harum praesentium officia ipsum provident porro maxime ad totam sequi optio dolorem vitae! Doloremque adipisci magnam dolorum facilis voluptatum fuga quod quibusdam quas totam quaerat omnis, corporis fugiat nemo est suscipit a error beatae, exercitationem odit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi non quidem enim corporis eveniet! Consectetur, in facilis perferendis rerum est ex impedit laborum placeat.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi non quidem enim corporis eveniet! Consectetur, in facilis perferendis rerum est ex impedit laborum placeat, sit, reprehenderit necessitatibus dignissimos. Eaque repellat error provident, possimus asperiores temporibus, fugiat ex, tempore accusamus hic aliquam sit dolores! Quis, eos. Nostrum explicabo quis placeat recusandae fuga facere saepe aperiam a dolorem tenetur doloremque ipsum sapiente rerum sequi est, quas nam harum voluptatibus numquam! Consequatur ea voluptatibus unde, voluptates voluptas eum, error voluptate quidem quod, corporis necessitatibus dolorum a ullam harum praesentium officia ipsum provident porro maxime ad totam sequi optio dolorem vitae! Doloremque adipisci magnam dolorum facilis voluptatum fuga quod quibusdam quas totam quaerat omnis, corporis fugiat nemo est suscipit a error beatae, exercitationem odit.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi non quidem enim corporis eveniet! Consectetur, in facilis perferendis rerum est ex impedit laborum placeat.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi non quidem enim corporis eveniet! Consectetur, in facilis perferendis rerum est ex impedit laborum placeat, sit, reprehenderit necessitatibus dignissimos. Eaque repellat error provident, possimus asperiores temporibus, fugiat ex, tempore accusamus hic aliquam sit dolores! Quis, eos. Nostrum explicabo quis placeat recusandae fuga facere saepe aperiam a dolorem tenetur doloremque ipsum sapiente rerum sequi est, quas nam harum voluptatibus numquam! Consequatur ea voluptatibus unde, voluptates voluptas eum, error voluptate quidem quod, corporis necessitatibus dolorum a ullam harum praesentium officia ipsum provident porro maxime ad totam sequi optio dolorem vitae! Doloremque adipisci magnam dolorum facilis voluptatum fuga quod quibusdam quas totam quaerat omnis, corporis fugiat nemo est suscipit a error beatae, exercitationem odit.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
