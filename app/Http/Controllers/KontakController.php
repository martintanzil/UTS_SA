<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\kontakModel;
use App\Repositories\kontakRepository;

class KontakController extends Controller
{
    public function __construct()
    {
        $this->kontakRepo = new kontakRepository;
    }

    public function index(){
        $kontakList = $this->kontakRepo->getAll();
        return view('kontak.index' , ['kontak'=>$kontakList]);
    }

    public function new(){
        return view('kontak.new');
    }

    public function add(Request $request){
        $this->kontakRepo->create($request->nama,$request->telepon,$request->email,$request->alamat);
        // $newKontak = new KontakModel;
        // $newKontak ->nama = $request->nama;
        // $newKontak ->telepon = $request->telepon;
        // $newKontak ->email = $request->email;
        // $newKontak ->telepon = $request->telepon;
        // $newKontak->save();
        return redirect()->route('home');
    }

    public function edit($id){
        $kontak = $this->kontakRepo->getId($id);
        return view('kontak.edit' , ['kontak' => $kontak]);
    }

    // public function update(Request $request){
    //     $this->kontakRepo->update($request->id ,$request->namaBaru,$request->teleponBaru,$request->emailBaru,$request->alamatBaru);
    //     return redirect()->route("home");
    // }

    public function update(Request $request){
        $this->kontakRepo->update($request->id, $request->nama, $request->telepon , $request->email , $request->alamat);
        return redirect()->route("home");
        //return $request->all();
    }

    public function delete($id){
        $this->kontakRepo->delete($id);
        return back();
    }

    public function search(Request $request)
    {
        $kontak = kontakModel::when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->keyword}%");})->get();
        return view('kontak.index', ['kontak'=>$kontak]);
    }   

}
