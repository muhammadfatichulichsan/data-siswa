@extends('layouts.app')

@section('content')
<div class="container">

	<p> <a href="{{ route('home') }}"> Home</a>/Hasil Pencarian</p>
	
    <div class="row justify-content-center">

    	@forelse($hasil as $data)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                	<tr>
               			<td> ID Siswa </td>
               			<td> {{ $data->id }} </td>
               		</tr>
               		<br>
               		<tr>
               			<td> Nama :</td>
               			<td> {{ $data->nama }} </td>
               		</tr>
               		<br>
               		<tr>
               			<td> Kelas :</td>
               			<td> {{ $data->kelas }} </td>
               		</tr>
               		<br>
               		<tr>
               			<td> Jurusan :</td>
               			<td> {{ $data->jurusan }} </td>
               		</tr>
                </div>
            </div>
        </div>

        @empty
        <h1>Data Tidak Ada</h1>
        @endforelse
    </div>
</div>
@endsection