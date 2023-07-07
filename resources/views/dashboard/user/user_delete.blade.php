@extends('dashboard.template')

@section('content')
    <div class="col-md-9">
        <div class="card">
        <div class="card-header">
            Edit Data User
        </div>
        <div class="card-body">
                <form action="/user/destroy" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $user->id }}" readonly>

                    <div class="form-group">
                        <label for="exampleInputNama">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Nama" value="{{ $user->name }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email" value="{{ $user->email }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputAlamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleInputAlamat" readonly>{{ $user->alamat }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputhp">No. Handphone</label>
                        <input name="no_hp" type="number" class="form-control" id="exampleInputhp" aria-describedby="emailHelp" placeholder="Masukkan No. Handphone" value="{{ $user->no_hp }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPos">Posisi</label>
                        <input name="posisi" type="text" class="form-control" id="exampleInputPos" aria-describedby="emailHelp" placeholder="Masukkan Posisi" value="{{ $user->pos }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputRole">Role</label>
                        <select name="role" class="form-control" id="exampleInputRole" aria-describedby="emailHelp" disabled>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputStatus">Status</label>
                        <select name="status" class="form-control" id="exampleInputStatus" aria-describedby="emailHelp" disabled>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-danger mt-2">delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection