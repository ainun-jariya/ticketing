<html>
<head>
  <title>Ticketing System</title>
  <!-- <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.1/build/pure-min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
        background: url(https://source.unsplash.com/random);
        background-repeat: no-repeat;
        background-size: cover;
    </style>
</head>
<body>
  <div class="bg-light" style="justify-content: center;margin-top:70px;">
    <div class="pure-u-1-3 row">
        @include('shared._navbar')
    </div>
    <div class="pure-u-1-3 row">
      <div class="col px-5 py-2">
        @include('shared._flash_message')
        @yield('content')
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>

</body>
</html>