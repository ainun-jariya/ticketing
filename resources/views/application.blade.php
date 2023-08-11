<html>
<head>
  <title>Ticketing System</title>
  <!-- <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.1/build/pure-min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
  
  <style>
        .profile-photo {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
</head>
<body>
  <div class="pure-g container-fluid py-3" style="margin-top:70px;">
  <div class="pure-u-1-3 row">
      @include('shared._navbar')
  </div>
    <div class="pure-u-1-3 row">
      @if(Auth::user())
        <div class="col-2">
          @include('shared._profile')
        </div>
      @endif
      <div class="col px-5 py-2">
        @include('shared._flash_message')
        @yield('content')
      </div>
    </div>
    <div class="pure-u-1-3 row">
      <div class="col bg-light p-5">
        @yield('form')
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
  
  <script type="text/javascript">
      $(document).ready(function () {
          $('#description').summernote({
              height: 300,
              //   toolbar: [
              //   // [groupName, [list of button]]
              //   ['style', ['bold', 'italic', 'underline', 'clear']],
              //   ['font', ['strikethrough', 'superscript', 'subscript']],
              //   ['fontsize', ['fontsize']],
              //   ['color', ['color']],
              //   ['para', ['ul', 'ol', 'paragraph']],
              //   ['height', ['height']]
              // ]
          });
      });
  </script>
</body>
</html>