@extends('layouts.app')

@section('content')
<div class="container">

  <p> <a href="{{ route('home') }}"> Home</a>/Detail Siswa</p>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Detail Siswa </div>
               			<table class="table table-bordered">
                    <tr>
                    <td> ID Siswa :</td>
                    <td> {{ $siswa->id }} </td>
                  </tr>
                  <br>
                  <tr>
                    <td> Nama :</td>
                    <td> {{ $siswa->nama }} </td>
                  </tr>
                  <br>
                  <tr>
                    <td> Nipd :</td>
                    <td> {{ $siswa->nipd }} </td>
                  </tr>
                  <br>
                  <tr>
                    <td> Jenis Kelamin :</td>
                    <td> {{ $siswa->jenis_kelamin }} </td>
                  </tr>
                  <br>
                  <tr>
                    <td>Tempat Lahir :</td>
                    <td>{{ $siswa->tempat_lahir}} </td>
                  </tr>
                  <br>
                  <tr>
                    <td>Nik :</td>
                    <td>{{ $siswa->nik}} </td>
                  </tr>
                  <br>
                  <tr>
                    <td>Agama :</td>
                    <td>{{ $siswa->agama}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Alamat :</td>
                    <td>{{ $siswa->alamat }}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>RW :</td>
                    <td>{{ $siswa->rw }}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Dusun :</td>
                    <td>{{ $siswa->dusun}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Kelurahan :</td>
                    <td>{{ $siswa->kelurahan}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Kecamatan :</td>
                    <td>{{ $siswa->kecamatan}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Kode Pos :</td>
                    <td>{{ $siswa->kode_pos}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Jenis Tinggal :</td>
                    <td>{{ $siswa->jenis_tinggal}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Alat Transportasi :</td>
                    <td>{{ $siswa->alat_transportasi}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Telepon :</td>
                    <td>{{ $siswa->telepon}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>HP :</td>
                    <td>{{ $siswa->hp}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Email :</td>
                    <td>{{ $siswa->email}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>SKHUN :</td>
                    <td>{{ $siswa->skhun}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Penerima KPS :</td>
                    <td>{{ $siswa->penerima_kps}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Nomor KPS :</td>
                    <td>{{ $siswa->nomor_kps}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Nama Ayah :</td>
                    <td>{{ $siswa->nama_ayah}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Tahun Lahir :</td>
                    <td>{{ $siswa->tahun_lahir}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Jenjang Pendidikan :</td>
                    <td>{{ $siswa->jenjang_pendidikan}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Pekerjaan Ayah :</td>
                    <td>{{ $siswa->pekerjaan}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>NIK Ayah :</td>
                    <td>{{ $siswa->nik_ayah}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Nama Ibu :</td>
                    <td>{{ $siswa->nama_ibu}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Tahun Lahir :</td>
                    <td>{{ $siswa->tahun_lahir_ibu}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Jenjang Pendidikan Ibu :</td>
                    <td>{{ $siswa->jenjang_pendidikan_ibu}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Pekerjaan Ibu :</td>
                    <td>{{ $siswa->pekerjaan_ibu}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Penghasilan Ibu :</td>
                    <td>{{ $siswa->penghasilan_ibu}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>NIK Ibu:</td>
                    <td>{{ $siswa->nik_ibu}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Nama Wali :</td>
                    <td>{{ $siswa->nama_wali}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Tahun Lahir Wali :</td>
                    <td>{{ $siswa->tahun_lahir_wali}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Jenjang Pendidikan Wali :</td>
                    <td>{{ $siswa->jenjang_pendidikan_wali}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Pekerjaan Wali :</td>
                    <td>{{ $siswa->pekerjaan_wali}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>Penghasilan Wali :</td>
                    <td>{{ $siswa->penghasilan_wali}}</td>
                  </tr>
                  <br>
                  <tr>
                    <td>NIK Wali :</td>
                    <td>{{ $siswa->nik_wali}}</td>
                  </tr>  
                    </table>
                </div>
                <div class="card-footer">
               			<a class="right" href="{{ route('home')}}"> <button class="btn btn-primary"> Kembali </button> </a>
               		</div>
            </div>
        </div>
    </div>
</div>
@endsection
