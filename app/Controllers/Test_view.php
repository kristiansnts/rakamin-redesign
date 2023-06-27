<?php
 
namespace App\Controllers;
 
class Test_view extends BaseController
{
    public function index()
    {
        $data['title']  = 'Niagahoster Tutorial';
        $data['msg1']    = 'Selamat datang di Niagahoster Tutorial';
        $data['msg2']    = 'Membuat aplikasi CRUD sederhana dengan CodeIgniter 4';
        echo view('test_view', $data);
    }
}
