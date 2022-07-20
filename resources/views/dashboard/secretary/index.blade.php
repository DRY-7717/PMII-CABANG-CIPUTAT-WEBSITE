@extends('layout.main')


@section('section')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>All Mail</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @if (session('message'))
                        {!! session('message') !!}
                    @endif
                    <div class="card shadow rounded-lg">
                        <div class="card-header flex justify-content-between">
                            <h4>Mails</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            
                                            <th class="text-center">
                                                #
                                            </th>

                                            <th>Title</th>
                                            <th>User</th>
                                            <th>Description</th>
                                            <th>Published</th>
                                            <th>Download</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($secretaries as $secretary)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>{{ $secretary->title }}</td>
                                            <td class="align-middle">
                                                {{ $secretary->user->name }}
                                            </td>
                                            <td>
                                                {{ $secretary->description }}
                                            </td>
                                            <td>
                                                {{ $secretary->published_at }}
                                            </td>
                                            <td >
                                                <a href="/mail/secretary/download/{{ $secretary->slug }}"
                                                    class="btn btn-success mx-1 d-flex justify-content-center"><i class="fas fa-download"></i></a>
                                            </td>

                                            <td class="d-flex">
                                                <a href="/dashboard/secretary/{{ $secretary->slug }}"
                                                    class="btn btn-info mx-1"><i class="fas fa-eye"></i></a>

                                                <a href="/dashboard/secretary/{{ $secretary->slug }}/edit" class="btn btn-primary mx-1"><i class="fas fa-edit"></i></a>

                                                <form action="/dashboard/secretary/{{ $secretary->slug }}" method="post" class="d-inline" >
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger border-0 mx-1"><i
                                                        class="fas fa-trash-alt" onclick="return confirm('Are you sure ?')"></i></button>

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
        </div>
    </section>
</div>
@endsection



