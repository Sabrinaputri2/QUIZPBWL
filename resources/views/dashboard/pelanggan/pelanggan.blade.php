@extends('dashboard.template')

@section('content')
    <div class="col-md-9">
        <div class="card">
        <div class="card-header">
            Table Pelanggan
            <a href="/pelanggan/add"><button class="btn btn-success" style="float: right">Tambah</button></a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Id Users</th>
                    <th scope="col">Id Golongan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">KTP Pelanggan</th>
                    <th scope="col">Seri </th>
                    <th scope="col">Meteran </th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach ($listPelanggan as $pel)
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td>{{ $pel->pel_nama }}</td>
                        <td>{{ $pel->user_id }}</td>
                        <td>{{ $pel->golongan_id }}</td>
                        <td>{{ $pel->pel_alamat }}</td>
                        <td>{{ $pel->pel_hp }}</td>
                        <td>{{ $pel->pel_ktp }}</td>
                        <td>{{ $pel->pel_seri }}</td>
                        <td>{{ $pel->pel_meteran }}</td>
                        <td>{{ $pel->pel_aktif }}</td>
                        <td>
                            <a href="/pelanggan/detail/{{ $pel->id }}"><button class="btn btn-info">Detail</button></a>
                            <a href="/pelanggan/edit/{{ $pel->id }}"><button class="btn btn-success">Edit</button></a>
                            <a href="/pelanggan/delete/{{ $pel->id }}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr> 
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection