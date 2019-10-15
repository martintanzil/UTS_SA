<?php 

namespace App\Repositories;
use App\kontakModel;

class kontakRepository implements kontakInterface{
    
    public function create($nama ,$telepon, $email , $alamat){
        $newKontak = new kontakModel();
        $newKontak->nama = $nama;
        $newKontak->telepon = $telepon;
        $newKontak->email = $email;
        $newKontak->alamat =$alamat;
        $newKontak->save();
    }   

    public function getAll(){
        return kontakModel::all();
    }
    
    public function getId(int $id){
        return kontakModel::find($id);
    }

    public function update( $id,$nama ,$telepon, $email , $alamat){
        //kontakModel::find($id)->update(['nama'=>$nama, 'telepon'=>$telepon, 'email'=>$email, 'alamat'=>$alamat]);
        $newKontak = kontakModel::findOrFail($id);
        $newKontak->nama = $nama;
        $newKontak->telepon = $telepon;
        $newKontak->email = $email;
        $newKontak->alamat =$alamat;
        $newKontak->save();
    }

    public function delete (int $id){
        kontakModel::find($id)->delete();   
    }

}