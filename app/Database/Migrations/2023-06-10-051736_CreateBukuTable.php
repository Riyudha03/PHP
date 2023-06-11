<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBukuTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'bigint',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'penulis' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'penerbit' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'tahun_terbit' => [
                'type'       => 'year',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}