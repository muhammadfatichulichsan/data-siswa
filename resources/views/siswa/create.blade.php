@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Siswa | <a href="{{ route('import.excel') }}"> Import File (.xls)</a></div>


                <div class="card-body">
                   <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                <div>
                    <label>Nama</label>
                    <input type="text" class="form-control {{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="nama siswa" name="nama" value="{{ old('nama') }}">
                     @if ($errors->has('nama'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <label>Nipd</label>
                    <input type="text" class="form-control" name="nipd" value="{{ old('nipd')}}">
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
                    <input type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir')}}">
                </div>

                <div>
                <label>NIK</label>
                    <input type="text" class="form-control" name="nik" value="{{ old('nik')}}">
                </div>

                <div>
                <label>Agama</label>
                    <input type="text" class="form-control" name="agama" value="{{ old('agama')}}">
                </div>

                <div>
                <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ old('alamat')}}">
                </div>

                <div>
                <label>RW</label>
                    <input type="text" class="form-control" name="rw" value="{{ old('rw')}}">
                </div>

                <div>
                <label>Dusun</label>
                    <input type="text" class="form-control" name="dusun" value="{{ old('dusun')}}">
                </div>

                <div>
                <label>kelurahan</label>
                    <input type="text" class="form-control" name="kelurahan" value="{{ old('kelurahan')}}">
                </div>

                <div>
                <label>Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" value="{{ old('kecamatan')}}">
                </div>

                <div>
                <label>Kode Pos</label>
                    <input type="text" class="form-control" name="kode_pos" value="{{ old('kode_pos')}}">
                </div>

                <div>
                <label>Jenis Tinggal</label>
                    <input type="text" class="form-control" name="jenis_tinggal" value="{{ old('jenis_tinggal')}}">
                </div>

                <div>
                <label>Alat Transportasi</label>
                    <input type="text" class="form-control" name="alat_transportasi" value="{{ old('alat_transportasi')}}">
                </div>

                <div>
                <label>Telepon</label>
                    <input type="text" class="form-control" name="telepon" value="{{ old('telepon')}}">
                </div>

                <div>
                <label>HP</label>
                    <input type="text" class="form-control" name="hp" value="{{ old('hp')}}">
                </div>

                <div>
                <label>email</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email')}}">
                </div>

                <div>
                <label>SKHUN</label>
                    <input type="text" class="form-control" name="skhun" value="{{ old('skhun')}}">
                </div>

                <div>
                <label>Penerima KPS</label>
                    <input type="text" class="form-control" name="penerima_kps" value="{{ old('penerima_kps')}}">
                </div>

                <div>
                <label>NO. KPS</label>
                    <input type="text" class="form-control" name="nomor_kps" value="{{ old('nomor_kps')}}">
                </div>

                <div>
                <label>Nama Ayah</label>
                    <input type="text" class="form-control" name="nama_ayah" value="{{ old('nama_ayah')}}">
                </div>

                <div>
                <label>Tahun Lahir Ayah</label>
                    <input type="text" class="form-control" name="tahun_lahir" value="{{ old('tahun_lahir')}}">
                </div>

                <div>
                <label>Jenjang Pendidikan Ayah</label>
                    <input type="text" class="form-control" name="jenjang_pendidikan" value="{{ old('jenjang_pendidikan')}}">
                </div>

                <div>
                <label>Pekerjaan Ayah</label>
                    <input type="text" class="form-control" name="pekerjaan" value="{{ old('pekerjaan')}}">
                </div>

                <div>
                <label>Penghasilan Ayah</label>
                    <input type="text" class="form-control" name="penghasilan" value="{{ old('penghasilan')}}">
                </div>
                
                <div>
                <label>NIK Ayah</label>
                    <input type="text" class="form-control" name="nik_ayah" value="{{ old('nik_ayah')}}">
                </div>
                
                <div>
                <label>Nama Ibu</label>
                    <input type="text" class="form-control" name="nama_ibu" value="{{ old('nama_ibu')}}">
                </div>
                <div>

                <label>Tahun Lahir Ibu</label>
                    <input type="text" class="form-control" name="tahun_lahir_ibu" value="{{ old('tahun_lahir_ibu')}}">
                </div>

                <div>
                    <label>Jenjang Pendidikan Ibu</label>
                    <input type="text" class="form-control" name="jenjang_pendidikan_ibu" value="{{ old('jenjang_pendidikan_ibu')}}">
                </div>
                
                <div>
                    
                <label>Pekerjaan Ibu</label>
                    <input type="text" class="form-control" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu')}}">
                </div>

                <div>
                    <label>Penghasilan</label>
                    <input type="text" class="form-control" name="penghasilan_ibu" value="{{ old('penghasilan_ibu')}}">
                </div>
                
                <div>
                <label>NIK Ibu</label>
                    <input type="text" class="form-control" name="nik_ibu" value="{{ old('nik_ibu')}}">
                </div>
                
                <div>
                <label>Nama Wali</label>
                    <input type="text" class="form-control" name="nama_wali" value="{{ old('nama_wali')}}">
                </div>
                
                <div>
                <label>tahun lahir wali</label>
                    <input type="text" class="form-control" name="tahun_lahir_wali" value="{{ old('tahun_lahir_wali')}}">
                </div>
                
                <div>
                <label>jenjang pendidikan wali</label>
                    <input type="text" class="form-control" name="jenjang_pendidikan_wali" value="{{ old('jenjang_pendidikan_wali')}}">
                </div>
                
                <div>
                <label>pekrjaan wali</label>
                    <input type="text" class="form-control" name="pekerjaan_wali" value="{{ old('pekerjaan_wali')}}">
                </div>
                
                <div>
                <label>Penghasilan Wali</label>
                    <input type="text" class="form-control" name="penghasilan_wali" value="{{ old('penghasilan_wali')}}">
                </div>
                
                <div>
                <label>nik wali</label>
                    <input type="text" class="form-control" name="nik_wali" value="{{ old('nik_wali')}}">
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