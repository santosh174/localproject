<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
        <a name="" id="" class="btn btn-primary" href="{{route('customer.view')}}" role=" class="btn"">Add</a>
        <thead>
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>Address</th>
                <th>Action</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userinfos as $userinfo)
                
            
            <tr>
                <td scope="row">{{$userinfo->name}}</td>
                <td>{{$userinfo->email}}</td>
                <td>{{$userinfo->address2}}</td>
                <td><a href="{{route('customer.delete',['id'=>$userinfo->id])}}"><button class="btn btn-danger">Delete</button></a></td>
                <td><a href="{{route('customer.edit',['id'=>$userinfo->id])}}"><button class="btn btn-primary">Edit</button></a></td>
                </tr>
            @endforeach
           
        </tbody>
    </table>  
      </body>
</html>