<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        $image = $this->faker->image(public_path('storage/images/blogs'), 750, 440, null, false);
        $thumbnail = $this->faker->image(public_path('storage/images/blogs'), 350, 236, null, false);
        return [
            'title' => $title,
            'author_name' => $this->faker->name(),
            'summary' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'slug' => Str::slug($title),
            'image' =>  $image ? $image : null,
            'thumbnail' => $thumbnail ? $thumbnail : null,
            'meta_tag_title' => $this->faker->sentence(),
            'meta_tag_keywords' => $this->faker->sentence(),
            'meta_tag_description' => $this->faker->paragraph(),
            'is_active' => $this->faker->randomElement([true, false]),
            'publish_date' => $this->faker->date(),
            'blog_category_id' => BlogCategory::pluck('id')->random(),
            'user_id' => User::pluck('id')->random(),
        ];
    }
}
