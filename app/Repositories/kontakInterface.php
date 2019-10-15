<?php

namespace App\Repositories;
use App\kontakModel;

interface kontakInterface{
    
    public function create($nama ,$telepon, $email , $alamat);
    public function getAll();
    public function getId(int $id);
    public function update($id, $nama , $telepon,  $email , $alamat);
    public function delete(int $id);
    
}