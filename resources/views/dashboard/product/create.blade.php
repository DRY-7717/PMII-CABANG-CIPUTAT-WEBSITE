@extends('layout.main')


@section('section')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Create Talent</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card  shadow" style="border-radius: 15px; background-color:rgb(230, 232, 255);">
                        <div class="card-header">
                            <h4>Pour your thoughts here</h4>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/product" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            name="title" id="title" value="{{ old('title') }}">

                                        @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror "
                                            name="slug" id="slug" value="{{ old('slug') }}">
                                        @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Produsen</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('produsen') is-invalid @enderror "
                                            name="produsen" id="produsen" value="{{ old('produsen') }}">
                                        @error('produsen')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Instagram</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('instagram') is-invalid @enderror "
                                            name="instagram" id="instagram" value="{{ old('instagram') }}">
                                        @error('instagram')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Facebook</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('facebook') is-invalid @enderror "
                                            name="facebook" id="facebook" value="{{ old('facebook') }}">
                                        @error('facebook')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Hp / Wa</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control @error('telp') is-invalid @enderror "
                                            name="telp" id="telp" value="{{ old('telp') }}">
                                        @error('telp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"
                                        id="category">Category</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="categoryproduct_id" id="category">
                                            @foreach ($categories as $category)
                                            @if (old('categoryproduct_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image Profile</label>
                                    <div class="col-sm-12 col-md-7">
                                        <img class="img-preview  img-fluid mb-2 d-none">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="image_produsen"
                                                onchange="previewImage()" >
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contoh Produk 1</label>
                                    <div class="col-sm-12 col-md-7">
                                        <img class="img-preview  img-fluid mb-2 d-none">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="contoh1"
                                                onchange="previewImage()" >
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contoh Produk 2</label>
                                    <div class="col-sm-12 col-md-7">
                                        <img class="img-preview  img-fluid mb-2 d-none">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="contoh2"
                                                onchange="previewImage()" >
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contoh Produk 3</label>
                                    <div class="col-sm-12 col-md-7">
                                        <img class="img-preview  img-fluid mb-2 d-none">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="contoh3"
                                                onchange="previewImage()" >
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contoh Produk 4</label>
                                    <div class="col-sm-12 col-md-7">
                                        <img class="img-preview  img-fluid mb-2 d-none">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="contoh4"
                                                onchange="previewImage()" >
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contoh Produk 5</label>
                                    <div class="col-sm-12 col-md-7">
                                        <img class="img-preview  img-fluid mb-2 d-none">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="contoh5"
                                                onchange="previewImage()" >
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contoh Produk 6</label>
                                    <div class="col-sm-12 col-md-7">
                                        <img class="img-preview  img-fluid mb-2 d-none">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="contoh6"
                                                onchange="previewImage()" >
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                               
                                
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                                    <div class="col-sm-12 col-md-7">
                                        <img class="img-preview  img-fluid mb-2 d-none">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="image"
                                                onchange="previewImage()" >
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                        @error('body')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <textarea class="summernote" name="body">{{ old('body') }}</textarea>

                                    </div>

                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary" type="submit">Publish</button>
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

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change',function () {  
        fetch('/dashboard/product/checkslug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })


    
</script>

@endsection

