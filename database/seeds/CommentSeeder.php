<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO comments (id, title, post_id, user_id, description, status) VALUES (?, ?, ?, ?, ?, ?)", [
            1,'title - 1','1', 1,'admin created this comment', 1
        ]);

        DB::insert("INSERT INTO comments (id, title, post_id, user_id, description, status) VALUES (?, ?, ?, ?, ?, ?)", [
            2,'title - 2','1', 1, 'admin 2 created this comment', 1
        ]);

        DB::insert("INSERT INTO comments (id, title, post_id, user_id, description, status) VALUES (?, ?, ?, ?, ?, ?)", [
            3,'title - 3','2',2,'admin 3 created this comment', 1
        ]);

        DB::insert("INSERT INTO comments (id, title, post_id, user_id, description, status) VALUES (?, ?, ?, ?, ?, ?)", [
            4,'title - 4','1', 2, 'admin 4 created this comment', 1
        ]);

        DB::insert("INSERT INTO comments (id, title, post_id, user_id, description, status) VALUES (?, ?, ?, ?, ?, ?)", [
            5,'title - 5','3', 3, 'admin 5 created this comment', 1
        ]);
    }
}
