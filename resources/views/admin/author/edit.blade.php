 @extends('admin.layout', ['title' => 'create new author'])
 {{-- this is a view! we need to extend it to the place where the section info can be yielded --}}
 {{-- extends means wrap me in something bigger, include just means include something smaller here --}}

@section('headline')
  Learning with 
@endsection

@section('content')
  Add a new author!
@endsection 


@section('form')
  @if($author->id !== null) 
    <form action= "{{ action('AuthorController@update', ['id' =>$author->id] ) }}" method="post"> 
      @method('put') {{-- we are preteding that this is a put request so we can still have the browser deal with it --}}
      
  @else 
    <form action="{{ action('AuthorController@store')}} " method="post"> 
      {{-- finds controller and action in PHP --}}
  @endif

      @csrf 
      <div class="form-group">
        <label for=" ">Name</label>
          <input type="text" name="name" value="{{$author->name}}"> 

        <label for=" ">Nationality</label>
          <input type="text" name="nationality" value="{{$author->nationality}}"> 
      </div>

      <div class="form-submit">
        <input type="submit">
      </div>
    
  </form>
@endsection