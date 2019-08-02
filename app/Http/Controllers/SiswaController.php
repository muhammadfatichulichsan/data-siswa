<?php
namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use DB;

use Excel;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new Siswa;
        $tambah->user_id = auth()->user()->id;
        $tambah->nama = request('nama');
        $tambah->nipd = request('nipd');
        $tambah->jenis_kelamin = request('jenis_kelamin');
        $tambah->tempat_lahir = request('tempat_lahir');
        $tambah->nik = request('nik');
        $tambah->agama = request('agama'); 
        $tambah->alamat = request('alamat');
        $tambah->rw = request('rw');
        $tambah->dusun = request('dusun');
        $tambah->kelurahan = request('kelurahan');
        $tambah->kecamatan = request('kecamatan');
        $tambah->kode_pos = request('kode_pos');
        $tambah->jenis_tinggal = request('jenis_tinggal');
        $tambah->alat_transportasi = request('alat_transportasi');  
        $tambah->telepon = request('telepon');  
        $tambah->hp = request('hp');  
        $tambah->email = request('email');  
        $tambah->skhun = request('skhun');  
        $tambah->penerima_kps = request('penerima_kps');  
        $tambah->nomor_kps = request('nomor_kps');  
        $tambah->nama_ayah = request('nama_ayah');  
        $tambah->tahun_lahir = request('tahun_lahir');  
        $tambah->jenjang_pendidikan = request('jenjang_pendidikan');  
        $tambah->pekerjaan = request('pekerjaan');
        $tambah->penghasilan = request('penghasilan');
        $tambah->nik_ayah = request('nik_ayah');
        $tambah->nama_ibu = request('nama_ibu');
        $tambah->tahun_lahir_ibu = request('tahun_lahir_ibu');
        $tambah->jenjang_pendidikan_ibu = request('jenjang_pendidikan_ibu');
        $tambah->pekerjaan_ibu= request('pekerjaan_ibu');
        $tambah->penghasilan_ibu= request('penghasilan_ibu');
        $tambah->nik_ibu= request('nik_ibu');
        $tambah->nama_wali= request('nama_wali');
        $tambah->tahun_lahir_wali= request('tahun_lahir_wali');
        $tambah->jenjang_pendidikan_wali= request('jenjang_pendidikan_wali');
        $tambah->pekerjaan_wali= request('pekerjaan_wali');
        $tambah->penghasilan_wali= request('penghasilan_wali');
        $tambah->nik_wali= request('nik_wali');
        $tambah->save();
   
        return redirect('/home')->withSuccess('Data Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($siswa)
    {
        $siswa=Siswa::where('nama',$siswa)->first();

        return view('siswa/show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa/edit' , compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $siswa->user_id = auth()->user()->id;
        $siswa->nama = request('nama');
        $siswa->nipd = request('nipd');
        $siswa->jenis_kelamin = request('jenis_kelamin');
        $siswa->tempat_lahir = request('tempat_lahir');
        $siswa->nik = request('nik');
        $siswa->agama = request('agama'); 
        $siswa->alamat = request('alamat');
        $siswa->rw = request('rw');
        $siswa->dusun = request('dusun');
        $siswa->kelurahan = request('kelurahan');
        $siswa->kecamatan = request('kecamatan');
        $siswa->kode_pos = request('kode_pos');
        $siswa->jenis_tinggal = request('jenis_tinggal');
        $siswa->alat_transportasi = request('alat_transportasi');  
        $siswa->telepon = request('telepon');  
        $siswa->hp = request('hp');  
        $siswa->email = request('email');  
        $siswa->skhun = request('skhun');  
        $siswa->penerima_kps = request('penerima_kps');  
        $siswa->nomor_kps = request('nomor_kps');  
        $siswa->nama_ayah = request('nama_ayah');  
        $siswa->tahun_lahir = request('tahun_lahir');  
        $siswa->jenjang_pendidikan = request('jenjang_pendidikan');  
        $siswa->pekerjaan = request('pekerjaan');
        $siswa->penghasilan = request('penghasilan');
        $siswa->nik_ayah = request('nik_ayah');
        $siswa->nama_ibu = request('nama_ibu');
        $siswa->tahun_lahir_ibu = request('tahun_lahir_ibu');
        $siswa->jenjang_pendidikan_ibu = request('jenjang_pendidikan_ibu');
        $siswa->pekerjaan_ibu= request('pekerjaan_ibu');
        $siswa->penghasilan_ibu= request('penghasilan_ibu');
        $siswa->nik_ibu= request('nik_ibu');
        $siswa->nama_wali= request('nama_wali');
        $siswa->tahun_lahir_wali= request('tahun_lahir_wali');
        $siswa->jenjang_pendidikan_wali= request('jenjang_pendidikan_wali');
        $siswa->pekerjaan_wali= request('pekerjaan_wali');
        $siswa->penghasilan_wali= request('penghasilan_wali');
        $siswa->nik_wali= request('nik_wali');
        $siswa->save();   

        return redirect('/home')->withInfo('Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect('/home')->withDanger('Data Berhasil Di Hapus');
    }
        public function search(Request $request)
    {
        $data = $request->kata;
        $hasil = Siswa::where('nama', 'LIKE', '%' . $data . '%')->get();
        
        if (!$data) {
            return back()->withInfo('Masukkan Kata Kunci Dulu');
        };

        return view('/layouts/hasil', compact('hasil', 'data'));
    }

    public function export()
    {
        $siswa = Siswa::select('nama','nipd','jenis_kelamin','tempat_lahir','nik','agama','alamat','rw','dusun','kelurahan','kecamatan','kode_pos','jenis_tinggal','alat_transportasi','telepon','hp','email','skhun','penerima_kps','nomor_kps','nama_ayah','tahun_lahir','jenjang_pendidikan','pekerjaan','penghasilan','nik_ayah','nama_ibu','tahun_lahir_ibu','jenjang_pendidikan_ibu','pekerjaan_ibu','penghasilan_ibu','nik_ibu','nama_wali','tahun_lahir_wali','jenjang_pendidikan_wali','pekerjaan_wali','penghasilan_wali','nik_wali')->where('user_id',auth()->user()->id)->get();
        return Excel::create('data_siswa' ,function($excel) use($siswa)
            {
                $excel->sheet('mysheet',function($sheet) use($siswa)
                {
                    $sheet->fromArray($siswa);
                });
            })->download('xls');
    }
    public function upload()
    {
        return view('siswa/import');   
    }

    public function import(Request $request)
    {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path,function($reader){})->get();
            if (!empty($data) && $data->count()) 
            {
               foreach ($data as $key => $value) {
                    $siswa = new Siswa();
                   $siswa->user_id = auth()->user()->id;
                   $siswa->nama = $value->nama;
                   $siswa->nipd = $value->nipd;
                   $siswa->jenis_kelamin = $value->jenis_kelamin;
                   $siswa->tempat_lahir = $value->tempat_lahir;
                   $siswa->nik = $value->nik;
                   $siswa->agama = $value->agama;
                   $siswa->alamat = $value->alamat;
                   $siswa->rw = $value->rw;
                   $siswa->dusun = $value->dusun;
                   $siswa->kelurahan = $value->kelurahan;
                   $siswa->kecamatan = $value->kecamatan;
                   $siswa->kode_pos = $value->kode_pos;
                   $siswa->jenis_tinggal = $value->jenis_tinggal;
                   $siswa->alat_transportasi = $value->alat_transportasi;
                   $siswa->telepon = $value->telepon;
                   $siswa->hp = $value->hp;
                   $siswa->email = $value->email;
                   $siswa->skhun = $value->skhun;
                   $siswa->penerima_kps = $value->penerima_kps;
                   $siswa->nomor_kps = $value->nomor_kps;
                   $siswa->nama_ayah = $value->nama_ayah;
                   $siswa->tahun_lahir= $value->tahun_lahir;
                   $siswa->jenjang_pendidikan= $value->jenjang_pendidikan;
                   $siswa->pekerjaan= $value->pekerjaan;
                   $siswa->penghasilan= $value->penghasilan;
                   $siswa->nik_ayah= $value->nik_ayah;
                   $siswa->nama_ibu= $value->nama_ibu;
                   $siswa->tahun_lahir_ibu= $value->tahun_lahir_ibu;
                   $siswa->jenjang_pendidikan_ibu= $value->jenjang_pendidikan_ibu;
                   $siswa->pekerjaan_ibu= $value->pekerjaan_ibu;
                   $siswa->penghasilan_ibu= $value->penghasilan_ibu;
                   $siswa->nik_ibu= $value->nik_ibu;
                   $siswa->nama_wali= $value->nama_wali;
                   $siswa->tahun_lahir_wali= $value->tahun_lahir_wali;
                   $siswa->jenjang_pendidikan_wali= $value->jenjang_pendidikan_wali;
                   $siswa->pekerjaan_wali= $value->pekerjaan_wali;
                   $siswa->penghasilan_ibu= $value->penghasilan_wali;
                   $siswa->nik_wali= $value->nik_wali;
                   $siswa->save();
               }
            }
        }
        return redirect('/home')->withSuccess('Data Berhasil Di Masukkan');
    }

    public function truncate()
    {
        $data = DB::table('siswas')->where('user_id')->truncate();

        if(!$data)
        {
            return back()->withInfo('Data tidak ada yang Dihapus ');
        }
        else
        {
            return redirect('/home')->withDanger('Data Berhasil Dihapus');
        }
    }

}
