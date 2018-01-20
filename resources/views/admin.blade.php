<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- [if lt IE9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.js"></script>
     <!--[end if]-->
</head>

<body>
<header class="header">
    <nav class="navbar">

        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <!-- Navbar Header-->
                <div class="navbar-header">
                    <!-- Navbar Brand -->
                    <a href="#" class="navbar-brand">
                        <div class="brand-text"><span>My </span><strong>Admin</strong></div>
                        <div class=""><strong>AD</strong></div>
                    </a>
                    <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><i class="fa fa-toggle-on" aria-hidden="true"></i>
                    </a>
                    <a id="toggle-btn" href="#" class="menu-btn passive"><i class="fa fa-toggle-off" aria-hidden="true"></i>
                    </a>
                </div>
                <!-- Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center custom-ul">

                    <!-- Logout    -->
                    <li class="nav-item"><a  href="/logout" class="nav-link logout">Logout <i class="fa fa-sign-out"></i></a></li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="all">


    
<div class="left">
    <div class="head">
        <div class="img">
            <img src="image/1.jpg">

        </div>
        <div class="title">
            <h4>Reda awad</h4>
            <p>the admin</p>
        </div>

    </div>
    <span>Main</span>


    <ul class="list-unstyled">
        <li > <a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li  class="active-li" id="pic"> <a href="#"><i class="fa fa-file-picture-o"></i>Chang carousel image</a></li>
        <li > <a href="#" id="dept"><i class="fa fa-object-group" aria-hidden="true"></i>
                </i>Add Department</a></li>

        <li > <a href="#" id="user"><i class="fa fa-users"></i>Edit Users</a></li>


    </ul>
</div>
<div class="right">
    <div class="container">
<div class="row">

<div class="col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1">

<div class="div carousel-img">
    <h3>Add A New Picture</h3>
    <form action="/addCarousal" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" name="url" id="exampleInputFile">
            <p class="help-block">Please Choose Image with good resolution.</p>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>

</div>

</div>
    <div class="col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1">

<div class="div department">
    <h3>Add A New Department</h3>
    <form method="post" action="/addDepartment">
{{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputFile">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputFile">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>

</div>

</div>
    <div class="  col-sm-offset-1 col-sm-10 col-xs-12  col-sm-offset-1">
        <div class="div All-users">
            <h3>Add A New Picture</h3>
            <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr class="he-color">
                    <th>Name</th>
                    <th>email</th>
                    <th>phone-num</th>
                    <th>type</th>
                    <th>Admin Type</th>
                    <th>User Type</th>
                    <th>Remove user</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <form method="post" action="/changeRole">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$user->id}}">
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone_num}}</td>

                    <td style="color: @if($user->hasRole('admin')){{'red !important;'}} @else {{'black'}} @endif">
                        @if($user->hasRole('user') ){{'Patient'}} @elseif($user->hasRole('doctor')){{'doctor'}} @elseif($user->hasRole('advertiser')){{'advertiser'}}@elseif($user->hasRole('admin')){{'admin'}} @endif
                    </td>
                    <td><input onchange="this.form.submit()" name="role" type="checkbox" @if($user->hasRole('admin')){{'checked'}} @endif></td>
                    <td><input  onchange="this.form.submit()" name="role-user" type="checkbox" @if($user->hasRole('user')){{'checked'}} @endif></td>
                    <td><a href="/removeUser/{{$user->id}}"><i class="fa fa-trash-o"></i></a></td>

                </tr>
                    </form>
                @endforeach

                </tbody>
            </table>
            </div>

        </div>
    </div>
</div>
    </div>
</div>
</div>



<script src="{{asset('js/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('js/admin.js')}}"></script>
<script>

</script>
</body>
</html>