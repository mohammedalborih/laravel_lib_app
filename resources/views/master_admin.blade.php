<!DOCTYPE html>
<head>
  <title>Library</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <style type=text/css>
    body{
      background-color:#6534;
      /*background: url("{{asset('images/back_.JPG')}}");
        background-size: 100% auto;*/
    }
      header{opacity: 0.7;}
      footer{background-color:#8736;opacity:0.9;text-align:center;}
  
    </style>
  </head>
  <body>

  <header class="container">
  <div align="right">
      <a href="/library"> <b>Home</b></a><br />
      <a href="/admin"> <b>Admin</b></a><br />
      <a href="/register"> <b>Registration</b></a>
     </div>
      <div class="col-md-2">
      Date : {{$date}} <br /> Time : {{$time}}
      </div>

  </header>


  @yield('content')

  <footer class="container">
جميع الحقوق محفوظة  للمعهد التقني الصناعي - الحوبان - قسم تقنية معلومات
  </footer>

</body>
</html>
