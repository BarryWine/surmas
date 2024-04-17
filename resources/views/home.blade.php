@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    Disposisi Surat
                    <form method="POST" action="{{ url('/simpan') }}">
                        @csrf
                        <div class="form-group">
                            <label>Asal Surat</label>
                            <input type="text" name="dari" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Tujuan Surat</label>
                            <input type="text" name="tujuan" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" name="keterangan"></textarea>
                        </div>
                        <input type="submit" value="SIMPAN" class="btn btn-primary w-100 mt-3" />
                    </form>
                    <table class="table table-bordered mt-4">
                        <thead>
                            <th>No</th>
                            <th>Asal Surat</th>
                            <th>Tujuan Surat</th>
                            <th>Keterangan</th>
                            <th>Hapus</th>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->dari }}</td>
                                    <td>{{ $data->tujuan }}</td>
                                    <td>{{ $data->keterangan }}</td>
                                    <td>
                                        <a href="{{ url('/hapus/' . $data->id) }}" class="btn btn-danger">Hapus</a>
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
