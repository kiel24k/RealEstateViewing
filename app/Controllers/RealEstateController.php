<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Dasma;
use CodeIgniter\HTTP\ResponseInterface;


class RealEstateController extends BaseController
{
    public function index()
    {
        $realestate = new Dasma();
        $data['realestate'] = $realestate->findAll();
        return view("Dasma/index", $data);
    }
    public function add_data_view()
    {
        return view("Dasma/create");
    }
    public function add_data()
    {


        $validation = \Config\Services::validation();
        if (!$this->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'mime_in[image,image/jpg,image/jpeg,image/gif,image/png] |max_size[image,3000]'
        ])) {
            $errors = array(
                'error' => $validation->listErrors()
            );
            session()->setFlashdata($errors);
            return redirect()->back();
        } else {
            $realestate = new Dasma();
            $file = $this->request->getFile('image');
            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $file->move('uploads/', $imageName);
            }
            $data = [
                'name'  => $this->request->getPost('name'),
                'description' => $this->request->getPost('description'),
                'image' => $imageName
            ];
            $realestate->save($data);
            return redirect()->to('/')->with('status', 'Product Data saved');
        }
    }


    public function delete($id)
    {
        $data = new Dasma();
        $data->delete($id);
        return redirect()->to(base_url('/'))->with('status', 'Delete Succesfull');
    }

    public function update_view($id)
    {
        $realestate = new Dasma();
        $data['realestate'] = $realestate->find($id);
        return view("Dasma/update", $data);
    }

    public function update($id)
    {

        $validation = \Config\Services::validation();
        if (!$this->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'mime_in[image,image/jpg,image/jpeg,image/gif,image/png] |max_size[image,3000]'
        ])) {
            $errors = array(
                'error' => $validation->listErrors()
            );
            session()->setFlashdata($errors);
            return redirect()->back();
        } else{
            $realestate = new Dasma();
            $datas = $realestate->find($id);
            $file = $this->request->getFile('image');
            $old_image = $datas['image'];
    
            if ($file->isValid() && !$file->hasMoved()) {
    
                if (file_exists("uploads/" . $old_image)) {
                    unlink("uploads/" . $old_image);
                }
                $imageName = $file->getRandomName();
                $file->move('uploads/', $imageName);
            } else {
                $imageName = $old_image;
            }
            $data = [
                'name'  => $this->request->getPost('name'),
                'description' => $this->request->getPost('description'),
                'image' => $imageName
            ];
            $realestate->update($id, $data);
            return redirect()->to('/')->with('status', 'Product Data updated');
            

        }


       
    }
}
