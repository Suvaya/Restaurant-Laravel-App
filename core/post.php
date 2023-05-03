<?php

    class Post{
        private $conn;
        private $table = 'Products';

        //properties
        public $id;
        public $category_id;
        public $category_name;
        public $product_name;
        public $description;
        public $seller;
        public $create_at;

        public function __construct($db){
            $this->conn = $db;
        }

        public function read(){
            $query = 'SELECT 
            c.name as category_name, 
            p.id,
            p.category_id,
            p.name,
            p.description,
            p.seller,
            p.create_at FROM
            '.$this->table .' p LEFT JOIN
                    categories c ON p.category_id = c.id ORDERED BY p.created DESC';

            //prepare statement
            $stmt = $this->conn->prepare($query);
            //execute


        }


    }
