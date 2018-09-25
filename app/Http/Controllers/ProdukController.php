<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;

use Redirect;
//stlh CRUD slesai akan mengarahkan lngsung ke index

class ProdukController extends Controller
{
    protected $pesan = array(
            'nama.required' => 'Isi Nama Produk',
            'kategori.required' => 'Pilih Kategori',
            'harga.required' => 'Isi Harga Jual',
    );

    protected $aturan = array(
        'nama' => 'required',
        'kategori' => 'required',
        'harga' => 'required',
    );
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listItems($batas){
        $produk = new Produk();
        $produk = $produk->limit($batas)->get();
        $data = array(
            'produk' => $produk,
        );
        return $data;
    }

    public function index(Request $request)
    {
        $batas=5;
        $produk = new Produk();
        $page_number = $request->page;
        $offset = ($page_number - 1)*$batas;
        $page = round((($produk->count())/$batas)+1);
        $produk = $produk->limit($batas)->offset($offset)->get();
        $data = array(
            'produk' => $produk,
            'page' => $page,
            'offset' => $offset,
            
        );
        return view('produk.indexx', $data);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        // $data = array(
        //     'kategori' => $kategori,
        // );
        return view('produk.create', compact('kategori'));
        // return view('produk.create', $data);
        // return view('produk.create', $kategori);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate digunakan utk memastikan data yg d input sdh valid
        $this->validate($request, $this->aturan, $this->pesan);

        $produk = new Produk;
        $produk->nama_produk = $request['nama'];
        $produk->id_kategori = $request['kategori'];
        $produk->harga_jual = $request['harga'];
        $produk->save();

        // return Redirect::route('produk.indexx');
        return Redirect::to('/produk');
        // return view('produk.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $produk = Produk::find($id);
        return view('produk.edit', compact('kategori', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, $this->aturan, $this->pesan);

        $produk = Produk::find($id);
        $produk->nama_produk = $request['nama'];
        $produk->id_kategori = $request['kategori'];
        $produk->harga_jual = $request['harga'];
        $produk->update();

        return Redirect::to('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();

        return Redirect::to('/produk');
    }
}
    