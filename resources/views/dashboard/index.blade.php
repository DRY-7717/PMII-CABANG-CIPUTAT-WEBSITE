@extends('layout.main')



@section('section')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Members</h4>
                            </div>
                            <div class="card-body">
                                {{ $members->count() ? $members->count()-1 : '0' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Programs</h4>
                            </div>
                            <div class="card-body">
                                {{ $programs->count() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>News</h4>
                            </div>
                            <div class="card-body">
                                {{ $news->count() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-medal"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Achievement</h4>
                            </div>
                            <div class="card-body">
                                {{ $awards->count() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (session('message'))
            {!! session('message') !!}
            @endif
            <div class="card shadow rounded-lg">
                <div class="card-header flex justify-content-between">
                    <h4>Organization Member</h4>
                    <a href="/dashboard/anggota/create" class="btn btn-primary px-3 py-1" style="font-size: 14px"><i
                            class="fas fa-file-excel"></i> Import Excel</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>

                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Fakultas</th>
                                    <th>Jurusan</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>No.hp</th>
                                    <th>Angkatan</th>
                                    <th>Minat Bakat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members->skip(1) as $member)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>{{ $member->nama }}</td>
                                    <td>
                                        {{ $member->tgl_lahir }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $member->fakultas }}
                                    </td>
                                    <td>
                                        {{ $member->jurusan }}
                                    </td>
                                    <td>
                                        {{ $member->alamat }}
                                    </td>
                                    <td>
                                        {{ $member->jk }}
                                    </td>
                                    <td>
                                        {{ $member->email }}
                                    </td>
                                    <td>
                                        {{ $member->telp }}
                                    </td>
                                    <td>
                                        {{ $member->angkatan }}
                                    </td>
                                    <td>
                                        {{ $member->minat_bakat }}
                                    </td>
                                    <td class="d-flex">
                                        <form action="/allaward/award/destroy/{{ $member->slug }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-danger border-0 mx-1 rounded-full"
                                                onclick="return confirm('Are you sure ?')"><i
                                                    class="fas fa-trash-alt"></i>
                                            </button>
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
    </section>
</div>
@endsection