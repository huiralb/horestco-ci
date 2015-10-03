<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_products_table extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'slug' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'description' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			),
			'sku' => array(
				'type' => 'VARCHAR',
				'constraint' => '11',
				'null' => FALSE,
			),
			'is_enabled' => array(
				'type' => 'TINYINT',
				'constraint' => '1'
			)
		));

		$this->dbforge->add_key('id', TRUE);

		$this->dbforge->create_table('hrc_products');
	}

	public function down()
	{
		$this->dbforge->drop_table('hrc_products');
	}
}