<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LMS</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    
    <link rel="stylesheet" href="{{asset('/dt/datatables.min.css')}}">
  <script src={{asset('/js/app.js')}}></script>

<script src={{asset('/dt/datatables.min.js')}}></script>
<script src={{asset('/dt/report_js/vfs_fonts.js')}}></script>

<script src={{asset('/dt/report_js/jquery.dataTables.min.js')}}></script>
<script src={{asset('/dt/report_js/dataTables.buttons.min.js')}}></script>
<script src={{asset('/dt/report_js/jszip.min.js')}}></script>
<script src={{asset('/dt/report_js/pdfmake.min.js')}}></script>

<script src={{asset('/dt/report_js/buttons.html5.min.js')}}></script>
  </head>

  <body class="bgrd">


      <header>
      <nav class="navbar navbar-inverse" style="z-index: 1;">

      <div class="container-fluid">

        <a class="navbar-brand" id="logo" href="/home">LMS</a>
        @if (Auth::check() )
          <ul>
            <li class="nav navbar-nav navbar-right"><a href="{{asset('/logout')}}" type="button" class="btn btn-danger">
               Logout</a></li>
          </ul>
          @elseif (Auth::check()) 
          <ul>
            <li class="nav navbar-nav navbar-right"><a href="{{asset('/index.php/logout')}}" type="button" class="btn btn-danger">
               Logout</a></li>
          </ul>
          @else
        @endif
        
      </div>

      </nav>
      </header>


        @if(Session::has('message'))
          <div class="well container" style="text-align:center">
            <div class="message">
          <div class="alert">
            {{Session::get('message')}}
          </div></div></div>
        @endif

        @if(Session::has('error'))
          <div class="well container" style="text-align:center">
            <div class="error">
          <div class="alert alert-danger">
            {{Session::get('error')}}
          </div></div></div>
        @endif

      </div>


    @if (Auth::check() && Auth::user()->role==0)
      <div class="row">
      <div class="col-md-2 col-xs-2">
      @include('inc.sidebar') 
      </div>

    <div class="col-md-10 col-xs-10" style="overflow-x:hidden; padding-right:5%;">
      @yield('content')
    </div>

      <div style="height:50px"></div>
      <footer>
      <div style="margin-top:20%">&nbsp;</div>
        <div class="row">
     {{-- <p style="text-align:center;padding-top:5%"> BMC &copy;{{date('Y')}} | Powered by BMC IT team </p> --}}
      </div></div>
      </footer>


  @else
  <div class="container">
  @yield('content')
  </div>
  
  <footer>
  <div style="margin-top:20%">&nbsp;</div> 
  <hr style="border:0.5px solid #c0c0c0"> 
  {{--<p style="text-align:center"> BMC &copy;{{date('Y')}} | Powered by BMC IT team </p>--}}
  </footer>
</div></div>
    @endif








  </body>

</html>
