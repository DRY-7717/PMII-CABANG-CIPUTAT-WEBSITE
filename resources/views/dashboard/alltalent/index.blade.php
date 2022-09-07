@extends('layout.main')


@section('section')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>All Talent</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @if (session('message'))
                    {!! session('message') !!}
                    @endif
                    <div class="card shadow rounded-lg">
                        <div class="card-header flex justify-content-between">
                            <h4>All Talent</h4>
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
                                            <th>Category</th>
                                            <th>Produsen</th>
                                            <th>No Telp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($talents as $talent)
                                        <tr>
                                            <td class="align-middle">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>{{ $talent->title }}</td>
                                            <td class="align-middle">
                                                {{ $talent->categoryproduct->name }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $talent->produsen }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $talent->telp }}
                                            </td>


                                            <td class="d-flex">
                                                <a href="/alltalent/product/{{ $talent->slug }}"
                                                    class="btn btn-info mx-1"><i class="fas fa-eye"></i></a>
                                                <form action="/alltalent/product/{{ $talent->slug }}" method="post"
                                                    class="d-inline">
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
            </div>
        </div>
    </section>
</div>
@endsection