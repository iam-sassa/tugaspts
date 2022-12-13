<?php

namespace OOP\App\Controller;
use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Admin;

class AdminController {

    public function __construct() {    
        $this->header = new Admin();
    }
    public function index(){
        print_r($this->header->index());
        // View::render("body", $this->header->index());
    }

    public function add()
    {
        $insert = [
            'name' =>'Lilianne Mather',
            'username' => 'liliyy',
            'password' => '39020',
            'email' => 'lilianne@gmail.com',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        
        $this->header->insert($insert);
        Router::redirect('showadmin');
    }

     public function delete($id)
    {
        $this->header->delete($id);
        Router::redirect('showadmin');
    }

    public function update($id){
        $update = [
            'name' => 'James Potter',
            'username' => 'pronks',
            'password' => '310681',
            'email' => 'choosenone@gmail.com',
            'updated_at' => date('Y-m-d H:i:s')
    ];
        $this->header->update($update, $id);
         Router::redirect('showadmin');
    }

  
}