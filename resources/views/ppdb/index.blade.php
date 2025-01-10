@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Data PPDB') }}</div>

                <div class="card-body">

                     @if (session('success'))
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>

                     @endif

                    <a href="{{route('ppdb.create')}}" class="btn btn-primary">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama lengkap</th>
                            <th scope="col">Jenis kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Asal sekolah</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($ppdb as $data)
                            <tr>
                            <th scope="row">{{ $no++}}</th>
                            <td>{{$data->nama_lengkap}}</td>
                            <td>{{$data->jenis_kelamin}}</td>
                            <td>{{$data->agama}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->telepon}}</td>
                            <td>{{$data->asal_sekolah}}</td>
                            <td>

                            <form action="{{ route('ppdb.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('ppdb.edit', $data->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{ route('ppdb.show', $data->id)}}" class="btn btn-warning">Show</a>

                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yalin?')">Delete</button>

                            </form>

                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
