<?php

class Product_model extends CI_Model {

    public $tableName = "products";
    public function __construct()
    {
        parent::__construct();

    }
    /*Bütün qeydləri mənə gətirəcək olan metoddur*/
    public function get_all(){
    return $this->db->get($this->tableName)->result();
    }

}