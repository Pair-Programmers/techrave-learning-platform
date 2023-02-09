<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('public/images/users');
        Storage::makeDirectory('public/images/blogs');

        BlogCategory::create([
            'name'=>'General',
            'slug'=>'general',
        ]);

        BlogCategory::create([
            'name'=>'Web Development',
            'slug'=>'web-development',
        ]);

        BlogCategory::create([
            'name'=>'IT',
            'slug'=>'it',
        ]);

        User::create([
            'name'=>'Yasir',
            'email'=>'yasirhussainasghar@gmail.com',
            'role'=>'Admin',
            'password'=>Hash::make('admin123'),
        ]);

        // \App\Models\User::factory(10)->create();
        // $this->call([
        //     BlogCategorySeeder::class,
        //     BlogSeeder::class
        // ]);
    }
}
