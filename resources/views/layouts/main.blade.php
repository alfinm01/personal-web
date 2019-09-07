<!DOCTYPE html>

<html lang="en">

<head>

  @include('partials._head')

</head>

<body>

  @yield('content')
  
  	  <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade
      </div>
      <div class="copyright">
        <a href="{{ url('admin/') }}">Are you the admin?</a>
      </div>
    </div>

  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  @include('partials._javascript')

</body>

</html>
