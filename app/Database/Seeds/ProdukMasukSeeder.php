<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class ProdukMasukSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id_produk'         => 1,
            'tanggal_masuk'    => Time::now(),
            'jumlah'            => 10,
            'created_at'        => Time::now(),
            'updated_at'        => Time::now(),
        ];

        // Using Query Builder
        $this->db->table('produk_masuk')->insert($data);
    }
}
