<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class menuController extends Controller {
    /**
     *  Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */

    public function daftarMenu(){
        $menu = DB::table('program_paw')->get(); 
        return view('menu.daftarMenu', ['menu' => $menu]);
    }

    public function detailMenu($id){
        $menu = DB::table('program_paw')->where('id', $id)->first();
        return view('menu.detailMenu', compact('menu'));
    }

    function index(){
        return view('home');
    }

    public function add(){
        return view('menu.addMenu');
    }

    public function addProcess(Request $request){
        $request->validate([
            'id'=>'required|min:2',
            'nama_menu'=>'required',
            'jenis_menu'=>'required'
        ], [
            'id.required' => 'ID tidak boleh kosong!',
            'nama_menu.required' => 'Nama menu tidak boleh kosong!',
            'jenis_menu.required' => 'Jenis menu tidak boleh kosong!'
        ]);

        DB::table('program_paw')->insert([
            'id' => $request->id,
            'nama_menu' => $request->nama_menu,
            'bahan_baku' => $request->bahan_baku,
            'jenis_menu' => $request->jenis_menu
        ]);
        return redirect('menu')->with('status', 'Menu baru berhasil ditambahkan');
    }

    public function edit($id){
        $menu = DB::table('program_paw')->where('id', $id)->first();
        return view('menu/editMenu', compact('menu'));
    }
    

    public function editProcess(Request $request, $id){
        $request->validate([
            'id' => 'required|min:2',
            'nama_menu' => 'required',
            'jenis_menu' => 'required'
        ]);
    
        DB::table('program_paw')->where('id', $id)
        ->update([
            'id' => $request->id,
            'nama_menu' => $request->nama_menu, 
            'bahan_baku' => $request->bahan_baku,
            'jenis_menu' => $request->jenis_menu
        ]);
    
        return redirect('menu')->with('status', 'Menu berhasil diubah');
    }      

    public function delete($id){
        DB::table('program_paw')->where('id','$id')->delete();
        return redirect('menu')->with('status', 'Menu berhasil dihapus');
    }

}
