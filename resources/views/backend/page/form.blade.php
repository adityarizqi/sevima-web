@extends('backend.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
                <div class="row mb-4">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-l2">
                            <div class="mb-4">
                                <label for="title">Judul</label>
                                <input type="title" class="form-control" id="title" value="{{ isset($blog) ? $blog->title : '' }}" name="title" placeholder="eg. Cara belajar efektif" required>
                            </div>
                            <div class="my-4">
                                <label for="formFile" class="form-label">Gambar</label>
                                <input class="form-control" type="file" name="image" accept="image/png, image/jpeg, image/jpg" @if ($action == 'create') required @endif>
                            </div>
                            <div class="mb-4">
                                <label class="my-1 me-2" for="status">Status Publikasi</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="draft" @if (isset($blog) && $blog->status == 'draft') selected @endif>Draft</option>
                                    <option value="publish" @if (isset($blog) && $blog->status == 'publish') selected @endif>Publish</option>
                                </select>
                            </div>
                            <div class="my-4">
                                <label for="textarea">Deskripsi</label>
                                <textarea class="form-control" name="content" id="content" rows="5" required>{{ isset($blog) ? $blog->content : '' }}</textarea>
                            </div>
                            @include('backend.partials.form-button', ['delete_btn' => true])
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
</script>
@endsection
