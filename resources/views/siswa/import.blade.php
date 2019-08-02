@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Import Data</div>


                <div class="card-body">
                   <form action="{{ route('tambah.excel') }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                
                <div>
                    <input type="file" class="form-control {{ $errors->has('excel') ? ' is-invalid' : '' }}"  name="file">
                    @if ($errors->has('excel'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('excel') }}</strong>
                        </span>
                    @endif
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
