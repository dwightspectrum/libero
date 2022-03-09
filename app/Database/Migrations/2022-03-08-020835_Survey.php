<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Survey extends Migration
{
    protected $DBGroup = 'default';

    public function up()
    {
        $this->forge->addField([
            'survey_id'           => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'postcode'          => ['type' => 'varchar', 'constraint' => 50],
            'survey_choice'          => ['type' => 'varchar', 'constraint' => 100, 'default' => 'no'],
            'email'   => ['type' => 'varchar', 'constraint' => 100],
            'mobile_number'    => ['type' => 'varchar', 'constraint' => 100],
            'created_at'        => ['type' => 'datetime', 'timestamp' => true],
            'deleted_at'        => ['type' => 'datetime', 'timestamp' => true],
        ]);

        $this->forge->addKey('survey_id');
        $this->forge->createTable('survey');
    }
    

    public function down()
    {
        $this->forge->dropTable('survey');
    }
}
