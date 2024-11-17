<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(5),
            'description' => '<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Contato</title>
</head>
<body>
    <h1>Entre em Contato</h1>
    <form>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email">
        
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem"></textarea>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>',
            'ends_at' => fake()->dateTimeBetween('now', '+3 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(['nodejs', 'react', 'javascript', 'vite', 'nextjs'], random_int(1, 5)),
            'created_by' => User::factory()
        ];
    }
}
