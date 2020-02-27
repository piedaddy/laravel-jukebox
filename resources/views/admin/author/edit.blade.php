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

  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  @if(Session::has('success_message'))
    <div class="alert alert-success">
        {{ Session::get('success_message') }}
    </div>
  @endif


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
        {{-- @if ($errors->has('name'))
          <ul>
            @foreach($errors->get('name') as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        @endif --}}
          <input type="text" name="name" value="{{ old('name', $author->name) }}"> 
                                {{-- if i did "author[name]" this will make an array of authors with the key name and the valuue as the value --}}
                                {{-- when validation fails and user is sent back main page, all the values that were submitted get sent togther and will reappear if using functin OLD, which takes name of request and a backup value --}}
                                {{-- always be comparing with old!!! --}}
        <label for=" ">Nationality</label>
          <input type="text" name="nationality" value="{{$author->nationality}}"> 
      </div>

      <div class="form-submit">
        <input type="submit">
      </div>
    
  </form>
@endsection