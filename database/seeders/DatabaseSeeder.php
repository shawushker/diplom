<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Good::factory(20)->create();
        \App\Models\Image::factory(60)->create();
        \App\Models\Thumbnail::factory(20)->create();
        \App\Models\AdminUser::factory(1)->create([
            "name" => "Кирилл Котляров",
            "email" => "admin@admin.com",
            "password" => bcrypt("123456"),
        ]);
    }
}
