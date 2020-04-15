<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a class="btn btn-primary" href="{{(route('admin.flats.create'))}}">Crea un nuovo appartamento</a>
    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>User Id</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th colspan="3"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($flats as $flat)
          <tr>
            <td>{{$flat->title}}</td>
            <td>{{$flat->address}}</td>
          <td><a class="btn btn-primary" href="{{(route('admin.flats.show', $flat->slug))}}">View</a> </td>
            <td><a class="btn btn-primary" href="">Edit</a> </td>
            <td>
            </tr>
            @endforeach
        </tbody>
    </thead>
  


    
</body>
</html>