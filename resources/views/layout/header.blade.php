<!doctype html>
<html lang="en">
  <head>
    @stack('title')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="navId">
      <li class="nav-item">
        <a href="{{url('/')}}" class="nav-link active">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#tab2Id">Action</a>
          <a class="dropdown-item" href="#tab3Id">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#tab4Id">Action</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="{{url('/customer/view')}}" class="nav-link">Customer view</a>
      </li>
      <li class="nav-item">
        <a href="{{url('/userinfo')}}" class="nav-link">Userinfo</a>
      </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
      <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
      <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
      <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
      <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>
    
    <script>
      $('#navId a').click(e => {
        e.preventDefault();
        $(this).tab('show');
      });
    </script>
    <h1>heaeretest</h1>
      
    