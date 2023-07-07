@extends('dashboard.template')

@section('content')
    <div class="col-md-9">
        <div class="card">
        <div class="card-header">
            Edit Data Pelanggan
        </div>
        <div class="card-body">
                <form action="/pelanggan/destroy" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ $pel->id }}" name="id">
                    <div class="form-group">
                        <label for="exampleInputNama">Nama Pelanggan</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Nama Pelanggan" value="{{ $pel->pel_nama }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">No. Pelanggan</label>
                        <input name="pel_no" type="number" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Nomor Pelanggan" value="{{ $pel->pel_no }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Golongan Pelanggan</label>
                        <select name="golongan_id" class="form-control" id="exampleInputNama" aria-describedby="emailHelp">
                            <option value="{{ $pel->golongan->id }}">{{ $pel->golongan_id }}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Alamat Pelanggan</label>
                        <input name="pel_alamat" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Alamat Pelanggan" value="{{ $pel->pel_alamat }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">No. Handphone Pelanggan</label>
                        <input name="pel_hp" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan No. Handphone Pelanggan" value="{{ $pel->pel_hp }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">KTP Pelanggan</label>
                        <input name="pel_ktp" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan KTP Pelanggan" value="{{ $pel->pel_ktp }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Seri Pelanggan</label>
                        <input name="pel_seri" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Seri Pelanggan" value="{{ $pel->pel_seri }}" readonly>
                    </div>

                    <div class="form-group">pel_meteran
                        <label for="exampleInputNama">Meteran Pelanggan</label>
                        <input name="pel_meteran" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Meteran Pelanggan" value="{{ $pel->pel_meteran }}" readonly>
                    </div>

                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection