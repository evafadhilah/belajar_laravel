@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Siswa') }}</div>

                <div class="card-body">
                    <form action="{{ route ('ppdb.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label>Nama Lengkap</label>
                          <input type="text" class="form-control" name="nama_lengkap"><br>
                        </div>
                          <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">perempuan
                          </div>
                          <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" name="agama">
                                  <option value="Islam">Islam</option>
                                  <option value="Kristen">Kristen</option>
                                  <option value="Budha">Budha</option>
                            </select><br>
                          </div>
                          <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat"><br>
                          </div>
                          <div class="form-group">
                            <label>Telepon</label>
                            <input type="number" class="form-control" name="telepon"><br>
                          </div>
                          <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal_sekolah"><br>
                          </div>

                        <button type="submit" class="btn btn-primary">save</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
