<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produk'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_produk'    => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at'        => [
                'type'          => 'DATETIME'
            ],
            'updated_at'        => [
                'type'          => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id_produk', true);
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
