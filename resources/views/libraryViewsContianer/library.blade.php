 @extends('master')
  
  @section('content')
  <div class="container" style="opacity:0.9">
  <div class="row">


<!--Reading Fro, Database-->
    @foreach($sections as $section)
      <div class="col-md-3">
        <div class="thumbnail">
        <img src="/images/{{$section->image_name}}">
        <h1><a class="btn btn-primary">{{$section->section_name}}</a></h1>
        </div>
      </div>
      @endforeach

<!--
    <div class="row">
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="{{asset('images/Electrical Engineering.png')}}">
          <h1><a class="btn btn-primary"> هندسة كهربائية</a></h1>
        </div>
      </div>
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="{{asset('images/JQuery.png')}}">
          <h1><a class="btn btn-primary"> حاســـوب</a></h1>
        </div>
      </div>
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="{{asset('images/Digital Funda.png')}}">
          <h1><a class="btn btn-primary"> الكترونيات </a></h1>
       </div>
      </div>
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="{{asset('images/Civil Eng.png')}}">
          <h1><a class="btn btn-primary"> هندية مدنية</a></h1>
        </div>
      </div>
     </div>

    <div class="row">
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="{{asset('images/Linux Programming.png')}}">
          <h1><a class="btn btn-primary"> نظم تشغيل</a></h1>
        </div>
      </div>
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="{{asset('images/Science.png')}}">
          <h1><a class="btn btn-primary"> علـوم فيزياء </a></h1>
        </div>
      </div>
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="{{asset('images/Philosophy.png')}}">
          <h1><a class="btn btn-primary"> فلســـفة</a></h1>
        </div>
      </div>
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="{{asset('images/Art.png')}}">
          <h1><a class="btn btn-primary"> فنــــون </a></h1>
        </div>
      </div>
     </div>
    </div>
-->
  </div>
</div>
  @stop