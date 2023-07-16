  @extends('master_admin')
  
  @section('content')
  <div class="container">
      <div class="panel panel-default">
        <!-- Default Panel Content   -->
        <div class="panel-heading">Managing Sections</div>
       <div class="panel-body">
        <h2><br />Creaing new section</h2><hr />

        <!-- Creating New Section  -->

        <form action="library" method="POST" enctype="multipart/form-data">
          {!! csrf_field()  !!}
          <b>Enter the name of the section :</b> <input type="text" name="section_name" /> <br />
          <b>Upload an image :</b> <input type="file" name="image" /> <br />
          <button class="btn btn-default" type="submit" style="background-color:#eee;color:#CA3C3C">
          <img src="{{asset('/images/ico.png')}}" width="30px" hieght="30px" /><h5><b>Create</b></h5>
          </button>
          </form>
        </div>
        
        @if($sections != null)
        <table class="table">
          <tr>
            <th><h4>Section Name</h4></th>
            <th><h4>Total Books</h4></th>
            <th><h4>Update</h4></th>
            <th><h4>Delete</h4></th>
            <th></th>
            <th></th>
          </tr>
        
        @foreach($sections as $section)
        @if($section -> trashed())
        <tr style="background-color:#CA3C3C">
        @else
   
        @endif

        <form action= "library/{{$section->id}}/" method ="POST">
          {!! csrf_field()  !!}
          <!--<input type="hidden" name="_token" value="<php echo csrf_token(); ?>" />-->
          <input type="hidden" name="_method" value="PATCH" />
          <td> <input type="text" name="section_name" value="{{$section->section_name}}" /></td>
          <td> <span class="label label-default">{{$section->books_total}}</span></td>
          <!--<td><img src="{{asset('/images/update.png')}}" height="25px" width="25px" onclick="submit()"/></td>-->
          <td><button class="btn btn-default" type="submit" style="background-color:#0f0">Update</button></td>
        </form>

        @if($section -> trashed())
          <td>
          <form action= "library/delete-forever/{{$section->id}}/" method ="POST">
          {!! csrf_field()  !!}
          <!--<img src="{{asset('/images/ico.png')}}" height="25px" width="25px" onclick="submit()"/>-->
          <button class="btn btn-default" type="submit" style="background-color:#f00;color:#fff">Delete Forever</button>
          </form>
          </td>
          @else

          <td>
          <form action= "library/{{$section->id}}/" method ="POST">
          {!! csrf_field()  !!}
          <input type="hidden" name="_method" value="DELETE" />
          <!--<img src="{{asset('/images/delete.png')}}" height="25px" width="25px" onclick="submit()"/>-->
          <button class="btn btn-default" type="submit" value="Delete" style="background-color:#f00;color:#fff">Delete</button>
          </form>
          </td>
          @endif
          @if($section -> trashed())
          <td>
          <form action= "library/restore/{{$section->id}}/" method ="POST">
          {!! csrf_field()  !!}
          <!--<img src="{{asset('/images/ico.png')}}" height="25px" width="25px" onclick="submit()"/>-->
          <button class="btn btn-default" type="submit" style="background-color:#00f;color:#fff">Restore</button>
          </form>
          </td>

          @endif
          <td>
          <a href="library/{{$section->id}}" style="btn btn default"> <b>Show</b> </a>
            </td>
        </tr>
        @endforeach
         </table>
        @endif
      </div>
    </div>
  @stop