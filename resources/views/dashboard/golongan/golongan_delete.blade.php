@extends('dashboard.template')

@section('content')
    <div class="col-md-9">
        <div class="card">
        <div class="card-header">
            Edit Data Golongan
        </div>
        <div class="card-body">
                <form action="/golongan/destroy" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $gol->id }}">

                    <div class="form-group">
                        <label for="exampleInputNama">Kode Golongan</label>
                        <input name="kode_gol" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Kode Golongan" value="{{ $gol->kode }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Nama Golongan</label>
                        <input name="nama_gol" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Nama Golongan" value="{{ $gol->nama }}" readonly>
                    </div>

                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection