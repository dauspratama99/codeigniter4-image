<?php

namespace App\Controllers;

use App\Models\Image;

use App\Controllers\BaseController;

class ImageController extends BaseController
{

    public function index()
    {
        $db   = \Config\Database::connect();

        $model = new Image;
        $data['image'] = $model->getAll()->getresult();
        return view ('page/view-data', $data);
    }

    public function add(){
        return view ('page/add');
    }

    public function save()
    {
        $db   = \Config\Database::connect();

        $dataBerkas = $this->request->getFile('image');
        $fileName = $dataBerkas->getRandomName();
       
        $data = [
            'foto' => $fileName,
        ];
        
        $dataBerkas->move('uploads/berkas/', $fileName);

        $db->table('tb_image')->insert($data);

        if($db == TRUE){
            return redirect()->to('/');
        } else {
            return redirect()->to('/add-image');
        }
    }
}