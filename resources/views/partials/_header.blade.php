  <header id="header"> <!-- style="border-bottom: 2px solid white;" -->
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="{{ url('/') }}" class="typed"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('about/') }}">About Me</a></li>
          <li><a href="{{ url('posts/') }}">My Writing</a></li>
          <li><a href="{{ url('contact/') }}">Contact Me</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->