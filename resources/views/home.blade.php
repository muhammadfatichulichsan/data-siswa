@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header"> Jumlah Siswa : {{ $data }} | <a href="{{ route('export.excel')}}">Export Excel</a>
                  <form action="{{ route('cari')}}">
                    <div class="form-group"> 
                      <input type="text" name="kata" class="form-control" placeholder="Ketik Nama Untuk Mencari Kemudian Tekan Enter">
                    </div>
                  </form>
                </div>
                        
        <div class="table-responsive">
            <table class="table table-bordered" style="text-align: center">
                        <tr>
                            <th rowspan="2">NO</th>
                            <th rowspan="2">NAMA</th>
                            <th rowspan="2">NIPD</th>
                            <th rowspan="2">JK</th>
                            <th rowspan="2">TEMPAT LAHIR</th>
                            <th rowspan="2">NIK</th>
                            <th rowspan="2">AGAMA</th>
                            <th rowspan="2">ALAMAT</th>
                            <th rowspan="2">RW</th>
                            <th rowspan="2">DUSUN</th>
                            <th rowspan="2">KELURAHAN</th>
                            <th rowspan="2">KECAMATAN</th>
                            <th rowspan="2">KODE POS</th>
                            <th rowspan="2">JENIS TINGGAL</th>
                            <th rowspan="2">ALAT TRANSPORTASI</th>
                            <th rowspan="2">TELEPON</th>
                            <th rowspan="2">HP</th>
                            <th rowspan="2">EMAIL</th>
                            <th rowspan="2">SKHUN</th>
                            <th rowspan="2">PENERIMA KPS</th>
                            <th rowspan="2">NOMOR KPS</th>
                            <th colspan="5">DATA AYAH</th>
                            <th colspan="6">DATA IBU</th>
                            <th colspan="7">DATA WALI</th>
                            <th rowspan="2">DETAIL</th>
                            <th rowspan="2">EDIT</th>
                            <th rowspan="2">HAPUS</th>
                        </tr>
                        <tr>
                            <th>NAMA</th>
                            <th>TAHUN LAHIR</th>
                            <th>PEKERJAAN</th>
                            <th>PENGHASILAN</th>
                            <th>NIK</th>
                            <th>NAMA</th>
                            <th>TAHUN LAHIR</th>
                            <th>TEMPAT LAHIR</th>
                            <th>JENJANG PENDIDIKAN</th>
                            <th>PEKERJAAN</th>
                            <th>PENGHASILAN</th>
                            <th>NIK</th>
                            <th>NAMA</th>
                            <th>TAHUN LAHIR</th>
                            <th>JENJANG PENDIDIKAN</th>
                            <th>PEKERJAAN</th>
                            <th>PENGHASILAN</th>
                            <th>NIK</th>
                        </tr>
                            @forelse($siswa as $siswa)
                                <tbody>
                                    <tr>
                                        
                                        <td>{{$siswa->id}}</th>
                                        <td>{{$siswa->nama}}</th>
                                        <td>{{$siswa->nipd}}</th>
                                        <td>{{$siswa->jenis_kelamin}}</th>
                                        <td>{{$siswa->tempat_lahir}}</th>
                                        <td>{{$siswa->nik}}</th>
                                        <td>{{$siswa->agama}}</th>
                                        <td>{{$siswa->alamat}}</th>
                                        <td>{{$siswa->rw}}</th>
                                        <td>{{$siswa->dusun}}</th>
                                        <td>{{$siswa->kelurahan}}</th>
                                        <td>{{$siswa->kecamatan}}</th>
                                        <td>{{$siswa->kode_pos}}</th>
                                        <td>{{$siswa->jenis_tinggal}}</th>
                                        <td>{{$siswa->alat_transportasi}}</th>
                                        <td>{{$siswa->telepon}}</th>
                                        <td>{{$siswa->hp}}</th>
                                        <td>{{$siswa->email}}</th>
                                        <td>{{$siswa->skhun}}</th>
                                        <td>{{$siswa->penerima_kps}}</th>
                                        <td>{{$siswa->nomor_kps}}</th>
                                        <td>{{$siswa->nama_ayah}}</th>
                                        <td>{{$siswa->tahun_lahir}}</th>
                                        <td>{{$siswa->jenjang_pendidikan}}</th>
                                        <td>{{$siswa->pekerjaan}}</th>
                                        <td>{{$siswa->penghasilan}}</th>
                                        <td>{{$siswa->nik_ayah}}</th>
                                        <td>{{$siswa->nama_ibu}}</th>
                                        <td>{{$siswa->tahun_lahir_ibu}}</th>
                                        <td>{{$siswa->jenjang_pendidikan_ibu}}</th>
                                        <td>{{$siswa->pekerjaan_ibu}}</th>
                                        <td>{{$siswa->penghasilan_ibu}}</th>
                                        <td>{{$siswa->nik_ibu}}</th>
                                        <td>{{$siswa->nama_wali}}</th>
                                        <td>{{$siswa->tahun_lahir_wali}}</th>
                                        <td>{{$siswa->jenjang_pendidikan_wali}}</th>
                                        <td>{{$siswa->pekerjaan_wali}}</th>
                                        <td>{{$siswa->penghasilan_wali}}</th>
                                        <td>{{$siswa->nik_wali}}</th>
                                        <td> 
                              <a href="{{ route('siswa.show', $siswa->nama) }}"> <button class="btn btn-sm btn-info">Detail </button> </a>
                             </td>
                             <td>
                              <a href="{{ route('siswa.edit',$siswa->id) }}"> <button class="btn btn-sm btn-dark"> Edit </button> </a></td>
                              <td>
                                <form class="" action="{{ route('siswa.destroy', $siswa) }}" method="post">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                 <input type="submit" class="btn btn-sm btn-danger" value="Hapus">
                              </form>
                              </td>
                                       
                        </tr>
                                </tbody>                                                
                            @empty
                        <tr>
                          <td colspan="41"> <center> DATA KOSONG / DATA TIDAK ADA </center> </td>
                        </tr>
                        @endforelse
                    </tbody>
                   </table>
                </div>
                <div class="card-footer">
                  <center> <p> &copy SMKN 1 DLANGGU {{ date('Y')}}</p> </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
