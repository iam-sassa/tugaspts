<?php

namespace OOP\App\Controller;
use OOP\App\Core\View;
use OOP\App\Core\Router;
use OOP\App\Model\Collaboration;

class CollaborationController {

    public function __construct() {    
        $this->header = new Collaboration();
    }
    public function index(){
        print_r($this->header->all());
    }

    public function add()
    {
        $insert = [
            'name' =>'PT IQ Edukasi',
            'address' => 'Colearn Headquarter, GoWork Millenium Centennial Center Lt. 42 Jl Jendral Sudirman Kav.25 Jakarta Selatan 12920',
            'email' => 'info@colearn.id',
            'phone' => '+62 817 2352 357',
            'created_at' => date('Y-m-d H:i:s'),
        ];
        
        $this->header->insert($insert);
        Router::redirect('showcollaboration');
    }

     public function delete($id)
    {
       $this->header->delete($id);
       Router::redirect('showcollaboration');
    }

    public function update($id){
        $update = [
            'name' =>'PT Mantappu Berkat Digital',
            'address' => 'Millennium Centennial Center, Jl. Jenderal Sudirman No. Kav. 25, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12920',
            'email' => 'info@colearn.id',
            'phone' => '+62 817 2352 357',
            'updated_at' => date('Y-m-d H:i:s')
    ];
        $this->header->update($update, $id);
        Router::redirect('showcollaboration');
    }

  
}