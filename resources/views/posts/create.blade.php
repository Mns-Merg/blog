<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Post</h1>

    {{-- <form method="post" action="/posts"> --}}
        {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store']) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class'=>'form-control'])!!}
        </div>        
            {!! Form::submit('Create Post',['class'=>'btn btn-primary'] )!!}       
        {!! Form::close()!!}
    @if(count($errors)> 0)
        <div class="alert alert-danger">

            <ul>
                @foreach($errors->all() as $error)
                   <li> {{$error}}
                   </li>
                @endforeach
            </ul>
        </div>

    @endif
</body>
</html>