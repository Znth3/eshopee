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

        $transaksis = Transaksi::factory(5)->create();
        $barangs = Barang::factory(5)->create();

        foreach ($transaksis as $transaksi){
            foreach ($barangs as $barang){
                TransaksiDetil::factory(5)->create([
                    'barang_id' => $barang->id
                    , 'transaksi_id' => $transaksi->id
                ]);
            }
        }


    }
}
