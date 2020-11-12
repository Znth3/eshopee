<?php

namespace Database\Factories;

use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\TransaksiDetil;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiDetilFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TransaksiDetil::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'transaksi_id' => Transaksi::factory(),
            'barang_id' => Barang::factory(),
            'harga_beli' => $this->faker->randomNumber(),
            'jumlah' => $this->faker->numberBetween(1, 1000),
            'discount' => 0
        ];
    }
}
