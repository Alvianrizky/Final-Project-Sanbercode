@extends('layouts.template')

@push('style')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container">
            <div class="row my-2 justify-content-center">

                <div class="col-8">

                    <!-- ini bagian judul pertanyaan -->
                    <h1 class="ml-3 text-dark">Maya Python: Button always at the center of the window</h1>

                </div>


            </div>
        </div>
    </div>
    
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="card">
                        <div class="card-body">

                            <!-- ini bagian isi pertanyaan -->
                            <p class="card-text text-justify">I'm starting experimenting with Maya python, and
                                I'm trying to do some UI. I came across to a really strange problem, I can't get
                                a button to stay in the center of the windows. I've tried different . . .</p>

                            <div class="row">
                                <div class="col-8">
                                    <div class="form-inline">

                                        <!-- ini bagian looping list tag -->
                                        <span class="badge badge-info px-2 py-2 mr-1 mt-1">PHP</span>
                                        <!-- ini bagian end looping list tag -->

                                    </div>



                                    <div class="user-block mt-4">
                                        <img class="img-circle img-bordered-sm"
                                        src="{{ asset('adminlte/images/1.png') }}" alt="user image">

                                        <!-- ini bagian nama user -->
                                        <span class="username">
                                            Jonathan Burke Jr.
                                        </span>

                                        <!-- ini bagian total reputasi user -->
                                        <span class="description">1 reputasi</span>

                                    </div>

                                </div>
                                <div class="col-4">
                                    <div class="row justify-content-center mx-2">
                                        <div class="form-group text-center mr-5 mt-3">

                                            <!-- ini bagian total vote -->
                                            <label class="mb-n2">
                                                <h2>0</h2>
                                            </label>
                                            <p>votes</p>


                                        </div>
                                        <div class="form-group text-center mt-3">

                                            <!-- ini bagian total jawaban -->
                                            <label class="mb-n2">
                                                <h2>0</h2>
                                            </label>
                                            <p>answers</p>


                                        </div>
                                    </div>
                                </div>

                                <!-- ini bagian action button jika pertanyaan milik user -->
                                <div class="col-6" style="display: flex;">
                                    <a href="/form" class="btn btn-dark btn-sm">edit</a>
                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete" class="btn btn-danger btn-sm mx-1">
                                    </form>
                                </div>
                                <!-- end -->


                                <div class="col-12">
                                    <ul class="list-group list-group-flush">
                                        <hr>

                                        <!-- ini bagian looping komentar -->
                                        <li class="list-group-item">
                                            yes you are right i want to access the user meta data of user-edit.php and
                                            get that in theme folder in order to show user lists. - 
                                            <!-- ini bagian nama user komentar -->
                                            <span class="text-blue"> Alvianrizky</span>

                                        </li>
                                        <!-- end -->

                                        <hr>
                                    </ul>

                                    <!-- ini bagian form komentar-->
                                    <form action="" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="komentar">Komentar</label>
                                            <input type="text" name="komentar" class="form-control" id="komentar">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm">komentar</button>
                                    </form>
                                    <!-- end -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ini bagian total jawaban -->
                    <h4 class="mb-4">2 Answer</h4>


                    <!-- ini bagian lopping jawaban berdasarkan id pertnyaan -->
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text text-justify">I'm starting experimenting with Maya python, and
                                I'm trying to do some UI. I came across to a really strange problem, I can't get
                                a button to stay in the center of the windows. I've tried different . . .</p>
                            <div class="row">
                                <div class="col-8">
                                    <div class="user-block mt-4">
                                        <img class="img-circle img-bordered-sm"
                                            src="{{ asset('adminlte/images/1.png') }}" alt="user image">
                                        <span class="username">
                                            Jonathan Burke Jr.
                                        </span>
                                        <span class="description">1 reputasi</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row justify-content-center mx-2">
                                        <div class="form-group text-center mr-5 mt-3">
                                            <label class="mb-n2">
                                                <h2>0</h2>
                                            </label>
                                            <p>votes</p>
                                        </div>
                                        <div class="form-group text-center mt-3">
                                            <label class="mb-n2">
                                                <h2>0</h2>
                                            </label>
                                            <p>answers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <form action="" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="komentar">Komentar</label>
                                            <input type="text" name="komentar" class="form-control" id="komentar">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm">komentar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end -->

                    <!-- ini bagian form jawaban -->
                    <div class="card mt-5">
                        <form action="" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="content">Jawaban Anda</label>
                                    <textarea name="content" id="content" class="form-control my-editor"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Posting Jawaban Anda</button>
                            </div>
                        </form>
                    </div>
                    <!-- end -->

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

@endsection

@push('script')
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
@endpush
