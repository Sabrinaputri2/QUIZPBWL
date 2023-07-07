@extends('dashboard.template')

@section('content')
    <div class="col-md-9">
        <div class="card">
        <div class="card-header">
            Table User
            <a href="/user/add"><button class="btn btn-success" style="float: right">Tambah</button></a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach ($listUser as $user)
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->alamat }}</td>
                        <td>{{ $user->no_hp }}</td>
                        <td>{{ $user->pos }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->user_aktif }}</td>
                        <td>
                            <a href="/user/edit/{{ $user->id }}"><button class="btn btn-success">Edit</button></a>
                            <a href="/user/delete/{{ $user->id }}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr> 
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection