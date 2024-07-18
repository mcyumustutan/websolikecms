<?php

namespace Database\Factories;

use App\Enums\Language;
use App\Enums\TemplateType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence;
        return [
            'url' => Str::slug($title),
            'title' => $title,
            'content_primary' => $this->faker->paragraphs(3, true),
            'display_date' => $this->faker->dateTimeBetween('-1 days', 'now'),
            'template_type' => TemplateType::News,
            'lang' => Language::tr,
        ];
    }
}
