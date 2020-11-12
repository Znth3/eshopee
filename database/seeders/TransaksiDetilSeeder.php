<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\TransaksiDetil;
use Illuminate\Database\Seeder;

class TransaksiDetilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = Transaksi::factory(10)->create();
        $barangs = Barang::factory(10)->create();

        foreach ($transaksis as $transaksi){
            TransaksiDetil::factory(10)->create(['transaksi_id' => $transaksi->id]);
        }

        foreach ($barangs as $barang){
            TransaksiDetil::factory(10)->create(['barang_id' => $barang->id]);
        }
    }
}
