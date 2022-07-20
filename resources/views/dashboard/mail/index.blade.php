@extends('layout.main')


@section('section')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>All  Mail</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @if (session('message'))
                        {!! session('message') !!}
                    @endif
                    <div class="card shadow rounded-lg">
                        <div class="card-header flex justify-content-between">
                            <h4>My Mails</h4>
                            <a href="/mail/secretary/create" class="btn btn-primary px-3 py-1" style="font-size: 14px"><i class="fas fa-plus"></i> Create new  Mail</a>
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
                                            <th>Description</th>
                                            <th>Published</th>
                                            <th>Download</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mails as $mail)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>{{ $mail->title }}</td>
                                            <td>
                                                {{ $mail->description }}
                                            </td>
                                            <td>
                                                {{ $mail->published_at }}
                                            </td>
                                            <td >
                                                <a href="/mail/secretary/download/{{ $mail->slug }}"
                                                    class="btn btn-success mx-1 d-flex justify-content-center"><i class="fas fa-download"></i></a>
                                            </td>

                                            <td class="d-flex">
                                                <a href="/mail/secretary/{{ $mail->slug }}"
                                                    class="btn btn-info mx-1"><i class="fas fa-eye"></i></a>

                                                <a href="/mail/secretary/{{ $mail->slug }}/edit" class="btn btn-primary mx-1"><i class="fas fa-edit"></i></a>

                                                <form action="/mail/secretary/{{ $mail->slug }}" method="post" class="d-inline" >
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger border-0 mx-1" onclick="return confirm('Are you sure ?')"><i
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
            </div>
        </div>
    </section>
</div>
@endsection



