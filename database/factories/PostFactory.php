<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        $titulo = $this->faker->sentence(); //Genero el título antes de setearlo, asi el slug y el titulo son iguales
        return [
            'titulo' => $titulo,
            'slug' => Str::of($titulo)->slug('-'),
            'descripcion' => $this->faker->paragraph(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
