@extends('dashboard.template')

@section('content')
    <div class="col-md-9">
        <div class="card">
        <div class="card-header">
            Input Data Pelanggan
        </div>
        <div class="card-body">
                <form action="/pelanggan/store" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputNama">Nama Pelanggan</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Nama Pelanggan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">No. Pelanggan</label>
                        <input name="pel_no" type="number" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Nomor Pelanggan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Golongan Pelanggan</label>
                        <select name="golongan_id" class="form-control" id="exampleInputNama" aria-describedby="emailHelp">
                            @foreach ($golongans as $golongan)
                                <option value="{{ $golongan->id }}">{{ $golongan->nama }}</option>    
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Alamat Pelanggan</label>
                        <input name="pel_alamat" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Alat Pelanggan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">No. Handphone Pelanggan</label>
                        <input name="pel_hp" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan No. Handphone Pelanggan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">KTP Pelanggan</label>
                        <input name="pel_ktp" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan KTP Pelanggan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Seri Pelanggan</label>
                        <input name="pel_seri" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Seri Pelanggan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Meteran Pelanggan</label>
                        <input name="pel_meteran" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Meteran Pelanggan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Status</label>
                        <select name="pel_aktif" class="form-control" id="exampleInputNama" aria-describedby="emailHelp">
                            <option value="1">Aktif</option>
                            <option value="2">Tidak Aktif</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection