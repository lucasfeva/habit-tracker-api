<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habits = [
            "Manter uma alimentação saudável",
            "Exercitar-se regularmente",
            "Ler diariamente",
            "Organizar a rotina",
            "Dormir bem",
            "Meditar",
            "Aprender algo novo",
            "Cuidar da saúde mental",
            "Manter contato com a família",
            "Economizar dinheiro",
            "Praticar gratidão",
            "Ser pontual",
            "Estudar novas tecnologias",
            "Evitar a procrastinação",
            "Hidratar-se adequadamente",
            "Planejar o dia",
            "Manter a casa organizada",
            "Praticar um hobby",
            "Fazer networking",
            "Cultivar a empatia"
        ];

        return [
            "user_id" => User::factory(),
            "uuid" => fake()->uuid(),
            "title" => fake()->randomElement($habits)
        ];
    }
}
