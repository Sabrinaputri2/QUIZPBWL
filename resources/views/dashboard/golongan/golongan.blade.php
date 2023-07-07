@extends('dashboard.template')

@section('content')
    <div class="col-md-9">
        <div class="card">
        <div class="card-header">
            Table Golongan
            <a href="/golongan/add"><button class="btn btn-success" style="float: right">Tambah</button></a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Golongan</th>
                    <th scope="col">Nama Golongan</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach ($listGol as $gol)
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td>{{ $gol->kode }}</td>
                        <td>{{ $gol->nama }}</td>
                        <td>
                            <a href="/golongan/edit/{{ $gol->id }}"><button class="btn btn-success">Edit</button></a>
                            <a href="/golongan/delete/{{ $gol->id }}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr> 
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection