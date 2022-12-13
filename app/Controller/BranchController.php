<?php

namespace OOP\App\Controller;
use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Branch;

class BranchController {

    public function __construct() {    
        $this->header = new Branch();
    }
    public function index(){
        print_r($this->header->all());
    }

    public function add()
    {
        $insert = [
            'name' =>'Barista training',
            'category' => 'Food and Beverages',
            'founded_year' => 2002,
            'address' => 'Huangdon Square, Jl Lima Perkara, Pasuruan, Jawa Timur',
            'collab_id' => 1,
            'available_seats' => 5,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        
        $this->header->insert($insert);
        Router::redirect('showbranch');
    }

     public function delete($id)
    {
       $this->header->delete($id);
       Router::redirect('showbranch');
    }

    public function update($id){
        $update = [
            'name' =>'English Mentor',
            'category' => 'Education',
            'founded_year' => 1900,
            'address' => 'Liamnim flatter, Jl Lavender, Kabupaten Ponorogo, Jawa Timur',
            'collab_id' => 2,
            'available_seats' => 10,
            'updated_at' => date('Y-m-d H:i:s')
    ];
        $this->header->update($update, $id);
        Router::redirect('showbranch');
    }

  
}