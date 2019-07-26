<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>File Upload</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.min.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.min.css') }}"/>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Bulky File Upload Solution</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>

  <!-- Page Content -->
  <div class="container mb-5">
      <div class="row">
          <div class="content mt-4">
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link {{ $current_page == 'page1' ? 'active' : '' }}" href="/">Page 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $current_page == 'page2' ? 'active' : '' }}" href="/page2">Page 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $current_page == 'page3' ? 'active' : '' }}" href="/page3">Page 3</a>
              </li>
            </ul>
          </div>
      </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

  <div class="container">
      <div class="row">
          <div class="col-md-12">

              @yield('content')

          </div>
      </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

  <!-- Footer -->
<!--   <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; UgBankers 2019</p>
    </div>
  </footer> -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>

  <script type="text/javascript">
    $(function(){

        $('#myTable').DataTable();
    });
  </script>

</body>

</html>
