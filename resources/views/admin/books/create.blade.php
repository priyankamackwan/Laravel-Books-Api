@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.book.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.books.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.book.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="category_id">{{ trans('cruds.book.fields.category') }}</label>
                <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id" required>
                    @foreach($categories as $id => $entry)
                        <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="file" class="required">{{ trans('cruds.book.fields.file') }}</label>
                <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="file-dropzone">
                </div>
                @if($errors->has('file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.file_helper') }}</span>
                <span class="text-danger" id="reqfile" style="display:none;">The File is required</span>
            </div>
            <div class="form-group">
                <label for="cover_image" class="required">{{ trans('cruds.book.fields.cover_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('cover_image') ? 'is-invalid' : '' }}" id="cover_image-dropzone">
                </div>
                @if($errors->has('cover_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cover_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.cover_image_helper') }}</span>
                <span class="text-danger" id="reqcover" style="display:none;">The File is required</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" id="btn-submit" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    var isFileUpload = false;
    var myDropzone1 = new Dropzone('#file-dropzone',{
        url: '{{ route('admin.books.storeMedia') }}',
    maxFilesize: 2, // MB
    maxFiles: 1,
    acceptedFiles: '.docx,.pdf',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
        isFileUpload = true;
        $('#reqfile').css('display','none');
        myDropzone1.disable();
      $('form').find('input[name="file"]').remove()
      $('form').append('<input type="hidden" name="file" value="' + response.name + '" required="required">')
    },
    removedfile: function (file) {
        isFileUpload = false;
        myDropzone1.enable();
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($book) && $book->file)
      var file = {!! json_encode($book->file) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="file" value="' + file.file_name + '" required="required" >')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
    });
</script>
<script>
    var isPictureUpload = false;
    var myDropzone2 = new Dropzone('#cover_image-dropzone',{
        url: '{{ route('admin.books.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif,.docx,.pdf',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
        isPictureUpload = true;
        $('#reqcover').css('display','none');
        myDropzone2.disable();
      $('form').find('input[name="cover_image"]').remove()
      $('form').append('<input type="hidden" name="cover_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
        isPictureUpload = false;
        myDropzone2.enable();
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="cover_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($book) && $book->cover_image)
      var file = {!! json_encode($book->cover_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="cover_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
    });

    $( document ).ready(function() {
    $('#btn-submit').click(function(){
        if(isPictureUpload == true && isFileUpload == true){
            myDropzone1.autoDiscover = false;
            myDropzone2.autoDiscover = false;
            return true;
        }
        else if(isPictureUpload == true || isFileUpload == true){
            if(isFileUpload == true){
                myDropzone1.autoDiscover = false;
            }
            else{
                $('#reqfile').css('display','block');
                return false;
            }
            if(isPictureUpload == true){
                myDropzone2.autoDiscover = false;
            }
            else{
                $('#reqcover').css('display','block');
                return false;
            }
        }
        else{
            $('#reqfile').css('display','block');
            $('#reqcover').css('display','block');
            return false;
        }
        
        
    });
});
</script>
@endsection