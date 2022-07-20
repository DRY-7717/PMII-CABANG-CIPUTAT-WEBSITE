@extends('layout.main')


@section('section')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Create Data Member</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card  shadow" style="border-radius: 15px; background-color:rgb(230, 232, 255);">
                        <div class="card-header">
                            <h4>Pour your thoughts here</h4>
                        </div>
                        <div class="card-body">
                            <form action="/import/anggotas/{{ $member->id }}" method="post" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama" id="nama" value="{{ old('nama',$member->nama) }}">

                                        @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat-Tanggal-Lahir</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror"
                                            name="tgl_lahir" id="tgl_lahir"
                                            value="{{ old('tgl_lahir',$member->tgl_lahir) }}">

                                        @error('tgl_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fakultas</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('fakultas') is-invalid @enderror"
                                            name="fakultas" id="fakultas"
                                            value="{{ old('fakultas',$member->fakultas) }}">

                                        @error('fakultas')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jurusan</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror"
                                            name="jurusan" id="jurusan" value="{{ old('jurusan',$member->jurusan) }}">

                                        @error('jurusan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                            name="alamat" id="alamat" value="{{ old('alamat',$member->alamat) }}">

                                        @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis
                                        Kelamin</label>
                                    <div class="col-sm-12 col-md-7">

                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="jk" name="jk" class="custom-control-input"
                                                value="Laki-laki" {{ $member->jk == 'Laki-laki' ? 'checked' : false }} >
                                            <label class="custom-control-label" for="jk">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="jk2" name="jk" class="custom-control-input"
                                                value="Perempuan" {{ $member->jk == 'Perempuan' ? 'checked' : false }}>
                                            <label class="custom-control-label" for="jk2">Perempuan</label>
                                        </div>
                                        @error('jk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" value="{{ old('email',$member->email) }}">

                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No.telp/Hp</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('telp') is-invalid @enderror"
                                            name="telp" id="telp" value="{{ old('telp',$member->telp) }}">

                                        @error('telp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Angkatan</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('angkatan') is-invalid @enderror"
                                            name="angkatan" id="angkatan" value="{{ old('angkatan',$member->angkatan) }}">

                                        @error('angkatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Minat
                                        Bakat</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text"
                                            class="form-control @error('minat_bakat') is-invalid @enderror"
                                            name="minat_bakat" id="minat_bakat" value="{{ old('minat_bakat',$member->minat_bakat) }}">

                                        @error('minat_bakat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>


@endsection