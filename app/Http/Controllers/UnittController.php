<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UnittController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts =DB::table('unitts')
        ->select('id','Waktu','Harga')
        ->get();
$view_data = [
'posts' => $posts
];
return view('navbar.transaksi' , $view_data);
    }
    public function index2()
    {
        $posts =DB::table('unitts')
        ->select('id','Jenis','Gambar')
        ->get();
$view_data = [
'posts' => $posts
];
return view('navbar.unityangdisewa' , $view_data);
    }
    public function index3()
    {
        $posts =DB::table('unitts')
        ->select('id','Nama_Penyewa','Kontak_Penyewa','KTP_Penyewa')
        ->get();
$view_data = [
'posts' => $posts
];
return view('navbar.datapenyewa' , $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('navbar.Sewa');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Jenis = $request->input('Jenis');
        $Gambar = $request->input('Gambar');
        $Waktu = $request->input('Waktu');
        $Harga = $request->input('Harga');
        $Nama_Penyewa = $request->input('Nama_Penyewa');
        $Kontak_Penyewa = $request->input('Kontak_Penyewa');
        $KTP_Penyewa = $request->input('KTP_Penyewa');

        DB::table('unitts')->insert([
            'Jenis' => $Jenis,
            'Gambar' => $Gambar,
            'Waktu' => $Waktu,
            'Harga' => $Harga,
            'Nama_Penyewa' => $Nama_Penyewa,
            'Kontak_Penyewa' => $Kontak_Penyewa,
            'KTP_Penyewa' => $KTP_Penyewa,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect('/dashboard');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = DB::table('unitts')
        ->select('id','Waktu','Harga')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('navbar.transaksiEdit' , $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Waktu = $request->input('Waktu');
        $Harga = $request->input('Harga');
        DB::table('unitts') 
        ->where('id', $id)
        ->update([
            'Waktu' => $Waktu, 
            'Harga' => $Harga
        ]);
        return redirect("/dashboard/admin");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        DB::table('unitts')
        ->where('id', $id)
        ->delete();

    return redirect("/transaksi");
    }
    public function edit1(string $id)
    {
        $post = DB::table('unitts')
        ->select('id','Nama_Penyewa','Kontak_Penyewa','KTP_Penyewa')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'post' => $post
        ];
        return view('navbar.datapenyewaEdit' , $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update1(Request $request, string $id)
    {
        $Nama_Penyewa = $request->input('Nama_Penyewa');
        $Kontak_Penyewa = $request->input('Kontak_Penyewa');
        $KTP_Penyewa = $request->input('KTP_Penyewa');
        DB::table('unitts') 
        ->where('id', $id)
        ->update([
            'Nama_Penyewa' => $Nama_Penyewa, 
            'Kontak_Penyewa' => $Kontak_Penyewa,
            'KTP_Penyewa' => $KTP_Penyewa
        ]);
        return redirect("/dashboard/admin");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy1(string $id)
    {

        DB::table('unitts')
        ->where('id', $id)
        ->delete();

    return redirect("/datapenyewa");
    }
}