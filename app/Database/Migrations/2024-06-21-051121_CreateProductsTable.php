<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'unit_price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'unit_type' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'stock_level' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'category_id' => [
                'type' => 'INT',
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true, // Allow null for default value
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true, // Allow null for default value
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('category_id', 'categories', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
