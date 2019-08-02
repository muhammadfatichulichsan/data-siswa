@extends('layouts.app')
@section('content')
<div class="container">
     <p> <a href="{{ route('home') }}"> Home</a>/Edit Data</p>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Siswa</div>

                   <div class="card-body">
                   <form action="{{ route('siswa.update',$siswa) }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{ method_field('PATCH') }}
                    <input type="hidden" value="{{csrf_token()}}" name="_token">

                <div>
                    <label>Nama</label>
                    <input type="text" class="form-control {{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="nama siswa" name="nama" value="{{ $siswa->nama }}">
                     @if ($errors->has('nama'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <label>Nipd</label>
                    <input type="text" class="form-control"  name="nipd" value="{{ $siswa->nipd }}">
                </div>

                <div class="form-group">
                <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control">
                            <option value="Laki-laki"> Laki-laki </option>
                            <option value="Perempuan"> Perempuan </option>
                </select>
                </div>

                <div>   
                <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}">
                </div>

                <div>
                <label>NIK</label>
                    <input type="text" class="form-control" name="nik" value="{{ $siswa->nik }}">
                </div>

                <div>
                <label>Agama</label>
                    <input type="text" class="form-control" name="agama" value="{{ $siswa->agama }}">
                </div>

                <div>
                <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $siswa->alamat }}">
                </div>

                <div>
                <label>RW</label>
                    <input type="text" class="form-control" name="rw" value="{{ $siswa->rw }}">
                </div>

                <div>
                <label>Dusun</label>
                    <input type="text" class="form-control" name="dusun" value="{{ $siswa->dusun }}">
                </div>

                <div>
                <label>kelurahan</label>
                    <input type="text" class="form-control" name="kelurahan" value="{{ $siswa->kelurahan }}">
                </div>

                <div>
                <label>Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" value="{{ $siswa->kecamatan }}">
                </div>

                <div>
                <label>Kode Pos</label>
                    <input type="text" class="form-control" name="kode_pos" value="{{ $siswa->kode_pos }}">
                </div>

                <div class="form-group">
                <label for="">Jenis Tinggal</label>
                    <select name="jenis_tinggal" id="" class="form-control">
                            <option value=" Bersama Orang Tua"> Bersama Orang Tua </option>
                            <option value="Ikut Kakek / Nenek"> Ikut Kakek / Nenek </option>
                            <option value="Panti Asuhan "> Panti Asuhan </option>
                            <option value="Sendiri"> Sendiri </option>
                </select>
                </div>

                <div class="form-group">
                <label for="">Alat Transportasi</label>
                    <select name="alat_transportasi" id="" class="form-control">
                            <option value=" Sepeda Motor">Sepeda Motor </option>
                            <option value="Mobil"> Mobil /  </option>
                            <option value="Jalan Kaki"> Jalan Kaki </option>
                </select>
                </div>

                <div>
                <label>Telepon</label>
                    <input type="text" class="form-control" name="telepon" value="{{ $siswa->telepon }}">
                </div>

                <div>
                <label>HP</label>
                    <input type="text" class="form-control" name="hp" value="{{ $siswa->hp }}">
                </div>

                <div>
                <label>email</label>
                    <input type="text" class="form-control" name="email" value="{{ $siswa->email }}">
                </div>

                <div>
                <label>SKHUN</label>
                    <input type="text" class="form-control" name="skhun" value="{{ $siswa->skhun }}">
                </div>

                <div class="form-group">
                <label for="">Penerima KPS</label>
                    <select name="penerima_kps" id="" class="form-control">
                            <option value=" YA">YA </option>
                            <option value="TIDAK"> TIDAK</option>
                </select>
                </div>

                <div>
                <label>NO. KPS</label>
                    <input type="text" class="form-control" name="nomor_kps" value="{{ $siswa->nomor_kps }}">
                </div>

                <div>
                <label>Nama Ayah</label>
                    <input type="text" class="form-control" name="nama_ayah" value="{{ $siswa->nama_ayah }}">
                </div>

                <div>
                <label>Tahun Lahir Ayah</label>
                    <input type="text" class="form-control" name="tahun_lahir" value="{{ $siswa->tahun_lahir }}">
                </div>

                <div>
                <label>Jenjang Pendidikan Ayah</label>
                    <input type="text" class="form-control" name="jenjang_pendidikan" value="{{ $siswa->jenjang_pendidikan }}">
                </div>

                <div>
                <label>Pekerjaan Ayah</label>
                    <input type="text" class="form-control" name="pekerjaan" value="{{ $siswa->pekerjaan }}">
                </div>

                <div>
                <label>Penghasilan Ayah</label>
                    <input type="text" class="form-control" name="penghasilan" value="{{ $siswa->penghasilan }}">
                </div>
                
                <div>
                <label>NIK Ayah</label>
                    <input type="text" class="form-control" name="nik_ayah" value="{{ $siswa->nik_ayah }}">
                </div>
                
                <div>
                <label>Nama Ibu</label>
                    <input type="text" class="form-control" name="nama_ibu" value="{{ $siswa->nama_ibu }}">
                </div>
                <div>

                <label>Tahun Lahir Ibu</label>
                    <input type="text" class="form-control" name="tahun_lahir_ibu" value="{{ $siswa->tahun_lahir_ibu }}">
                </div>

                <div>
                    <label>Jenjang Pendidikan Ibu</label>
                    <input type="text" class="form-control" name="jenjang_pendidikan_ibu" value="{{ $siswa->jenjang_pendidikan_ibu }}">
                </div>
                
                <div>
                    
                <label>Pekerjaan Ibu</label>
                    <input type="text" class="form-control" name="pekerjaan_ibu" value="{{ $siswa->pekerjaan_ibu }}">
                </div>

                <div>
                    <label>Penghasilan</label>
                    <input type="text" class="form-control" name="penghasilan_ibu" value="{{ $siswa->penghasilan_ibu }}">
                </div>
                
                <div>
                <label>NIK Ibu</label>
                    <input type="text" class="form-control" name="nik_ibu" value="{{ $siswa->nik_ibu }}}">
                </div>
                
                <div>
                <label>Nama Wali</label>
                    <input type="text" class="form-control" name="nama_wali" value="{{ $siswa->nama_wali }}">
                </div>
                
                <div>
                <label>tahun lahir wali</label>
                    <input type="text" class="form-control" name="tahun_lahir_wali" value="{{ $siswa->tahun_lahir_wali }}">
                </div>
                
                <div>
                <label>jenjang pendidikan wali</label>
                    <input type="text" class="form-control" name="jenjang_pendidikan_wali" value="jenjang_pendidikan_wali">
                </div>
                
                <div>
                <label>pekrjaan wali</label>
                    <input type="text" class="form-control" name="pekerjaan_wali" value="{{ $siswa->pekerjaan_wali }}">
                </div>
                
                <div>
                <label>Penghasilan Wali</label>
                    <input type="text" class="form-control" name="penghasilan_wali" value="{{ $siswa->penghasilan_wali }}">
                </div>
                
                <div>
                <label>nik wali</label>
                    <input type="text" class="form-control" name="nik_wali" value="{{ $siswa->nik_wali }}">
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection