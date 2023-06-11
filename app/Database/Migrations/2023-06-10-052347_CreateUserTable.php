<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'       => [
                'type'           => 'int',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'email'    => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'password' => [
                'type'       => 'text',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}