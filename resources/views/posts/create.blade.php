@extends('layouts.admin')

@section('style')

  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

@endsection

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12" style="padding-top: 10px;">
        <h1>New Post</h1>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <form class="form-horizontal" action="{{ url('posts') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
          <div class="form-group col-lg-12">
            <h4>Title</h4> <input type="text" name="title" id="title" class="form-control form-control-lg" required maxlength="30"> <br>
            <h4>Description</h4> <br>
            <textarea name="description" id="description" class="form-control my-editor" required> </textarea> <br>
            {{-- <div class="form-row">
              <div class="form-group col-lg-6">
                <h4>Category</h4>
                  <select name="category_id" class="form-control form-control-lg">
                    @foreach ($categories as $item)
                      <option value="{{ $item->id }}">{{ $item->category }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group col-lg-6">
                <h4>Tags</h4>
                  <input type="text" name="tags" id="tags" class="form-control form-control-lg">
              </div>
            </div> --}}
            {{-- <div class="form-row">
              <div class="form-group col-lg-8">
                <h4>Publishing Status</h4>
                <select name="publishing_status" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select> 
              </div>
              <div class="form-group col-lg-4 pull-right">
                <h4>Image</h4> <input type="file" name="image" id="image" value="image" class="form-control-file">
              </div>
            </div> --}}
            {{csrf_field()}}
            <div class="form-group col-lg-12">
              <input type="submit" value="Save" class="btn btn-primary">
              <a href="{{ url('/admin/articles') }}" class="btn btn-default">Back to Articles Settings</a>
            </div>
          </div>
        </form>
      </div>
    </div>
      
    </div>
@endsection

@section('script')
  <script>
    var editor_config = {
        path_absolute : "/",
        selector: "textarea.my-editor",
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }

          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
          });
        }
      };

    tinymce.init(editor_config);
  </script>
@endsection