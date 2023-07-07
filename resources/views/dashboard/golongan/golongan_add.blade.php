@extends('dashboard.template')

@section('content')
    <div class="col-md-9">
        <div class="card">
        <div class="card-header">
            Input Data Golongan
        </div>
        <div class="card-body">
                <form action="/golongan/store" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputNama">Nama Golongan</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Nama Golongan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Golongan</label>
                        <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kode Golongan">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection