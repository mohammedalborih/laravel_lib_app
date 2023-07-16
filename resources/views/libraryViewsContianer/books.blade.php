  @extends('master_admin')
  
  @section('content')
  <div class="container">
    <h1>{{$section->section_name}}</h1> <br />
    <table class="table">
      {!! Form::open(["url"=>"books"]) !!}
      {!! Form::hidden("section_id",$section->id) !!}
      <tr>
        <td> Enter the title of the Book </td>
      <td>{!! Form::text("book_title") !!}</td>
      </tr>
      <tr>
      <td> Enter the edition of the Book </td>
      <td>{!! Form::text("book_edition") !!}</td>
      </tr>
      <tr>
      <td> Enter the description of the Book </td>
      <td>{!! Form::textarea("book_description") !!}</td>
      </tr>
      <tr>
        <td>{!! Form::submit("Add",["class"=>"btn btn-info"]) !!}</td>
      </tr>
      {!! Form::close() !!}
    </table>
    <table class="table">
    <tr>
      <th><h3>Book Title</h3></th>
      <th><h3>Book Edition</h3></th>
      <th><h3>Book Description</h3></th>
      <th></th>
      <th></th>
    </tr>
    @foreach($all_books as $book)
      <tr>
        {!! Form::open(["url"=>"books/$book->id","method"=>"patch"]) !!}
        {!! Form::hidden("section_id",$section->id) !!}
        <td>{{ Form::text("book_title",$book->book_title) }}</td>
        <td>{{ Form::text("book_edition",$book->book_edition) }}</td>
        <td>{{ Form::textarea("book_description",$book->book_description) }}</td>
        <td>{{ Form::submit("Update",["class"=>"btn btn-success"]) }}</td>
            {{ Form::close() }}
        <td>
            {!! Form::open(["url"=>"books/$book->id","method"=>"DELETE"]) !!}
            {!! Form::hidden("section_id",$section->id) !!}
            {{ Form::submit("Delete",["class"=>"btn btn-danger"]) }}
            {{ Form::close() }}
        </td>
      </tr>
    @endforeach
</table>
</div>
  @stop