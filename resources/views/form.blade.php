
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
 <form action="{{url('/')}}/userinfo" method="POST">   
  @csrf
<div class="container">
  <x-input type='text' name='name' lable='enter name'/>
  <x-input type='email' name='email' lable='enter email'/>
<x-input type='text' name='address2' lable='address'/>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>