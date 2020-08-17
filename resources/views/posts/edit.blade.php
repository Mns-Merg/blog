<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>EDIT POST</h1>

    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}
    @csrf

        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            
            {!! Form::text('title', null, ['class'=>'form-control'])!!}
        </div>        
            {!! Form::submit('Update Post',['class'=>'btn btn-primary'] )!!}    

    {!! Form::close()!!}

    {!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy',$post->id]]) !!}

        {!! Form::submit('Delete Post',['class'=>'btn btn-danger'] )!!}  

    {!! Form::close()!!}

     {{-- <form method="post" action="/posts/{{$post->id}}">
    //     @csrf

    //     <input type="hidden" name="_method" value="PUT">
    //     <input type ="text" name="title" placeholder = "Enter title" value="{{$post->title}}">
        
    //     <input type = "submit" name = "UPDATE">
        
    // </form>
    
    // <form method="post" action="/posts/{{$post->id}}">
    //     @csrf

    //     <input type="hidden" name="_method" value="DELETE">

    //     <input type="submit" value="DELETE">
    
    // </form> --}}
</body>
</html>