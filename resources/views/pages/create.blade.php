@extends('layout.master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Insert Mahasiswa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required
                           placeholder="nama mahasiswa">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nilai Quiz</label>
                    <input type="number" class="form-control" name="nilai_quiz" id="nilai_quiz" value="{{ old('nilai') }}" required
                           placeholder="nilai quiz">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nilai Tugas</label>
                    <input type="number" class="form-control" name="nilai_tugas" id="nilai_tugas" value="{{ old('nilai') }}" required
                           placeholder="nilai tugas">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nilai Absensi</label>
                    <input type="number" class="form-control" name="nilai_absensi" id="nilai_absensi" value="{{ old('nilai') }}" required
                           placeholder="nilai absensi">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nilai Prakter</label>
                    <input type="number" class="form-control" name="nilai_praktek" id="nilai_praktek" value="{{ old('nilai') }}" required
                           placeholder="nilai praktek">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nilai UAS</label>
                    <input type="number" class="form-control" name="nilai_uas" id="nilai_uas" value="{{ old('nilai') }}" required
                           placeholder="nilai uas">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection

