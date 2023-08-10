<html>
<head>
  <title>Ticketing System</title>
  <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.1/build/pure-min.css">
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
<div class="pure-g" style="justify-content: center;">
  <div class="pure-u-1-3">
    @include('shared._flash_message')
    @yield('content')
  </div>
</div>
</body>
</html>