<?php
class Portfolio{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getPortfolio(){
        $this->db->query('SELECT * FROM portfolio
                            ORDER BY createdAt DESC');
        $data = $this->db->resultSet();
        return $data;
    }

    public function removeById($id){
        $this->db->query('DELETE FROM portfolio 
                            WHERE id = :id');

        $this->db->bind('id', $id);
        $this->db->execute();
    }

    public function add($data){
        //Setting up the query
        $this->db->query('INSERT INTO portfolio (title, body)
                            VALUES (:title, :body) ');

        //bind parameters
        $this->db->bind('title', $data['title']);
        $this->db->bind('body', $data['body']);

        //Execute the SQL
        $this->db->execute();
    }

    public function getPortfolioById($id){
        //Setting up the query
        $this->db->query('SELECT * FROM portfolio
                        WHERE id = :id');
        
        //Bind parameters
        $this->db->bind('id', $id);

        //fetch the found portfolio and add to array
        $data = $this->db->single();
        
        if($data){
            return $data;
        } else {
            return false;
        }
    }

    public function editPortfolioById($id){
        $this->db->query('')
    }

    
}