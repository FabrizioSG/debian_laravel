<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::factory(1)->create();
        $personal = \App\Models\Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);
        $family =\App\Models\Category::create([
            'name'=>'Family',
            'slug'=>'family'
        ]);
        $work = \App\Models\Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);
        \App\Models\Post::create([
            'user_id' => '1',
            'category_id'=>'2',
            'title'=>'My Family Post',
            'slug'=>'my-family-post',
            'excerpt'=>'Lorem ipsum dolor sit amet',
            'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        \App\Models\Post::create([
            'user_id' => '1',
            'category_id'=>'3',
            'title'=>'My Work Post',
            'slug'=>'my-work-post',
            'excerpt'=>'Lorem ipsum dolor sit amet',
            'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);

    }
}
