<?php

namespace OOP\App\Controller;
use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Client;

class ClientController {

    public function __construct() {    
        $this->header = new Client();
    }
    public function index(){
        print_r($this->header->all());
    }

    public function add()
    {
        $insert = [
            'name' =>'Sasa',
            'phone' => '+628 5940 3737 00',
            'email' => 'sasaa@gmail.com',
            'address' => 'Kebayoran Arcade 2, Bintaro, Tangerang Selatan, Banten',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        
        $this->header->insert($insert);
        Router::redirect('showclient');
    }

     public function delete($id)
    {
       $this->header->delete($id);
       Router::redirect('showclient');
    }

    public function update($id){
        $update = [
            'name' =>'Alaste Arche',
            'phone' => '+62 5647 6778 009',
            'email' => 'aleasst@gmail.com',
            'address' => 'Grown of Meiion, Kota Tangerang Selatan, Banten ',
            'updated_at' => date('Y-m-d H:i:s')
    ];
        $this->header->update($update, $id);
        Router::redirect('showclient');
    }

  
}