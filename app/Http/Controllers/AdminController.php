<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(){
		return view('admin.index');
	}

	public function indexgudang(){
		return view('admin.gudang.index');
	}

	public function addgudang(){
		return view('admin.gudang.add');
	}

	public function savegudang(Request $r){
		$b = new \App\Gudang;
		$b->alamat = $r->input('alamat');
		$b->kapasitas = $r->input('kapasitas');
		$b->pic = $r->input('pic');
		$b->save();
		return redirect(url('admin/gudang'));
	}

	public function editgudang($id){
		$gudang = \App\Gudang::find($id);
		return view('admin.gudang.edit')->with('gudang',$gudang);
	}

	public function updategudang(Request $r){
		$b = \App\Gudang::find($r->input('id'));
		$b->alamat = $r->input('alamat');
		$b->kapasitas = $r->input('kapasitas');
		$b->pic = $r->input('pic');
		$b->save();
		return redirect(url('admin/gudang'));
	}

	public function deletegudang($id){
		$gudang = \App\Gudang::find($id);
		$gudang->delete();
		return redirect(url('admin/gudang'));
	}

	public function indexbarang(){
		return view('admin.barang.index');
	}

	public function addbarang(){
		return view('admin.barang.add');
	}

	public function savebarang(Request $r){
		$b = new \App\Barang;
		$b->gudangs_id = $r->input('gudang_id');
		$b->nama = $r->input('nama');
		$b->berat = $r->input('berat');
		$b->save();
		return redirect(url('admin/barang'));
	}

	public function editbarang($id){
		$barang = \App\Barang::find($id);
		return view('admin.barang.edit')->with('barang',$barang);
	}
	
	public function updatebarang(Request $r){
		$b = \App\Barang::find($r->input('id'));
		$b->nama = $r->input('nama');
		$b->berat = $r->input('berat');
		$b->save();
		return redirect(url('admin/barang'));	
	}

	public function deletebarang($id){
		$barang = \App\Barang::find($id);
		$barang->delete();
		return redirect(url('admin/barang'));
	}
}