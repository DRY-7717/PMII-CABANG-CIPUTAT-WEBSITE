@extends('layout.main')



@section('section')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Import Data Member</h1>
        </div>
        <div class="section-body">
            @if (session('message'))
            {!! session('message') !!}
            @endif
            <div class="card shadow rounded-lg">
                <div class="card-header flex justify-content-between">
                    <h4>Organization Member</h4>
                    <div class="d-flex">
                        <a href="/import/anggotas/import" class="btn btn-primary px-3 py-1 mx-2"
                            style="font-size: 14px"><i class="fas fa-file-excel "></i> Import Excel</a>
                        <a href="/import/anggotas/create" class="btn btn-primary px-3 py-1" style="font-size: 14px">
                            <i class="fas fa-plus"></i>
                            Create data member</a>

                    </div>
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
                                    <td >
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

                                        <a href="/import/anggotas/{{ $member->id }}/edit" class="btn btn-primary mx-1"><i
                                                class="fas fa-edit"></i></a>

                                       
                                        <form action="/import/anggotas/{{ $member->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger border-0 mx-1"
                                                onclick="return confirm('Are you sure ?')"><i
                                                    class="fas fa-trash-alt"></i></button>

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