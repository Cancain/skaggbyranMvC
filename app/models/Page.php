<?php
class Page {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getContentByName($name){
        $this->db->query('SELECT * FROM content
                            WHERE name = :name ');
        $this->db->bind('name', $name);

        $data = $this->db->single();

        return $data;
    }

    public function updateContentByName($data){
        $this->db->query('UPDATE content
                            SET headLine = :headLine, text = :text 
                            WHERE name = :name');
        $this->db->bind('headLine', $data['headLine']);
        $this->db->bind('text', $data['text']);
        $this->db->bind('name', $data['name']);

        $this->db->execute();
    }


    
}