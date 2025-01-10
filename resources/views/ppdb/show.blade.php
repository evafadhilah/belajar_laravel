@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mengedit Data Siswa') }}</div>

                <div class="card-body">
                    <form action="{{ route ('ppdb.update', $ppdb->id ) }}" method="post">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                          <label>Nama Lengkap</label>
                          <input type="text" class="form-control" value="{{ $ppdb->nama_lengkap }}" name="nama_lengkap" ><br>
                        </div>

                          <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki" >Laki-Laki
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" >perempuan
                            </div>

                          <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" value="{{ $ppdb->agama}}" name="agama" selected >
                                  <option value="Islam">Islam</option>
                                  <option value="Kristen">Kristen</option>
                                  <option value="Budha">Budha</option>
                            </select><br>
                          </div>

                          <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" value="{{ $ppdb->alamat }}" name="alamat" ><br>
                          </div>

                          <div class="form-group">
                            <label>Telepon</label>
                            <input type="number" class="form-control" value="{{ $ppdb->telepon }}" name="telepon" ><br>
                          </div>

                          <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" value="{{ $ppdb->asal_sekolah }}" name="asal_sekolah" ><br>
                          </div>

                          <a href="{{ route('ppdb.index')}}" class="btn btn-primary">Back</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
