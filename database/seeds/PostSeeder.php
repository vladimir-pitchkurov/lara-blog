<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * php artisan db:seed --class=UserSeeder
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO posts (id, title, category_id, user_id, description, is_new, is_recommended, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [
            1,'title - 1','1','2','admin created this post', 1, 1, 1
        ]);

        DB::insert("INSERT INTO posts (id, title, category_id, user_id, description, is_new, is_recommended, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [
            2,'title - 2','1','2','admin 2 created this post', 1, 1, 1
        ]);

        DB::insert("INSERT INTO posts (id, title, category_id, user_id, description, is_new, is_recommended, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [
            3,'title - 3','1','2','admin 3created this post', 1, 1, 1
        ]);

        DB::insert("INSERT INTO posts (id, title, category_id, user_id, description, is_new, is_recommended, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [
            4,'title - 4','1','2','admin 4 created this post', 1, 1, 1
        ]);

        DB::insert("INSERT INTO posts (id, title, category_id, user_id, description, is_new, is_recommended, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [
            5,'title - 5','1','2','admin 5 created this post', 1, 1, 1
        ]);

    }


}
