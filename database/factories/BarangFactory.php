<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Barang::class;
    public function definition(): array
    {
        return [
            'barcode' => $this->faker->unique()->numerify('####-####-####'),
            'nama' => $this->faker->word,
            'departmen' => $this->faker->word,
            'uom' => $this->faker->word,
            'stok' => $this->faker->numberBetween(1, 100),
        ];
    }
}