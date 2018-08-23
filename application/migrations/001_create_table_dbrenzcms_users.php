<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_table_dbrenzcms_users extends CI_Migration {

  public function __construct()
  {
    $this->load->dbforge();
    $this->load->database();
  }

  public function up() {
    $field = array(
      'id'  => [
        'type'            =>  'INT',
        'constraint'      =>  '11',
        'auto_increament' =>  TRUE,
        'unsigned'        =>  TRUE,
        'null'            =>  FALSE
      ],
      'id_group'  =>  [
        'type'        =>  'INT',
        'constraint'  =>  '11',
        'unsigned'    =>  TRUE,
        'null'        =>  TRUE
      ],
      'username'  =>  [
        'type'        =>  'VARCHAR',
        'constraint'  =>  '255',
        'unique'      =>  TRUE,
        'null'        =>  TRUE,
      ],
      'email'   =>  [
        'type'        =>  'VARCHAR',
        'constraint'  =>  '255',
        'unique'      =>  TRUE
        'null'        =>  TRUE,
      ],
      'password'  =>  [
        'type'        =>  'VARCHAR',
        'constraint'  =>  '255',
        'null'        =>  TRUE,
      ],

      'firstname' => [
        'type'        =>  'VARCHAR',
        'constraint'  =>  '255',
        'null'        =>  TRUE,
      ],
      'lastname'  => [
        'type'        =>  'VARCHAR',
        'constraint'  =>  '255',
        'null'        =>  TRUE,
      ],
      'photo'   => [
        'type'        =>  'VARCHAR',
        'constraint'  =>  '255',
        'null'        =>  TRUE,
      ],
      'activation_code' => [
        'type'        =>  'VARCHAR',
        'constraint'  =>  '255',
        'null'        =>  TRUE,
      ],
      'forgotten_password_code' => [
        'type'        =>  'VARCHAR',
        'constraint'  =>  '255',
        'null'        =>  TRUE,
      ],
      'forgotten_password_time' => [
        'type'        =>  'INT',
        'constraint'  =>  '11',
        'null'        =>  TRUE,
      ],
      'remember_code' => [
        'type'        =>  'VARCHAR',
        'constraint'  =>  '255',
        'null'        =>  TRUE,
      ],
      'actived' => [
        'type'        =>  'tinyint',
        'constraint'  =>  '1',
        'null'        =>  TRUE,
      ],
      'last_login'  => [
        'type'  => 'DATETIME',
      ],
      'created_by'  =>  [
        'type'        =>  'INT',
        'constraint'  =>  '11',
      ],
      'updated_by'  =>  [
        'type'        =>  'INT',
        'constraint'  =>  '11',
      ],
      'created_at'  =>  [
        'type'  =>  'TIMESTAMP',
      ],
      'updated_at'  =>  [
        'type'  =>  'TIMESTAMP',
      ]
    );
  }

  public function down() {
    
  }

}

/* End of file 001_create_table_dbrenzcms_users.php */
/* Location: ./application/migrations/001_create_table_dbrenzcms_users.php */