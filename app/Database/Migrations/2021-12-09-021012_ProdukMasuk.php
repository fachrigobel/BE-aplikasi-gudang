<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdukMasuk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                 => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_produk'          => [
                'type'           => 'INT',
                'constraint'     => 5
            ],
            'tanggal_masuk'    => [
                'type'          => 'DATETIME',
            ],
            'jumlah'            => [
                'type'          => 'INT',
                'constraint'    => 5
            ],
            'created_at'        => [
                'type'          => 'DATETIME'
            ],
            'updated_at'        => [
                'type'          => 'DATETIME'
            ]

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('produk_masuk');
    }

    public function down()
    {
        $this->forge->dropTable('produk_masuk');
    }
}
