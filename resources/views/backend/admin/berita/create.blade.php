@extends('layouts.backend.main')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Tulis Berita Baru</h2>
            </div>
            <form class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Judul">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="">kategori 1</option>
                                <option value="">kategori 2</option>
                                <option value="">kategori 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="customFile" class="col-sm-2 col-form-label">Custom File</label>
                        
                        <div class="custom-file col-sm-10">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <textarea name="isi" id="summernote"></textarea>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Sign in</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </section>
</div>
@endsection


@push('script')

<script>
    $(function () {
            // Summernote
            $('#summernote').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['fullscreen','help']],
                    ],
            })
        })
</script>
@endpush