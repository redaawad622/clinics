<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Advertisement Control</title>
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
                        <div class="brand-text"><span>Advertisements </span><strong>Control</strong></div>
                        <div class=""><strong>AC</strong></div>
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
            <p>the advertiser</p>
        </div>

    </div>
    <span>Main</span>


    <ul class="list-unstyled">
        <li > <a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li  class="active-li" id="pic"> <a style="font-size: 12px;" href="#"><i class="fa fa-file-picture-o"></i>Add A New Advertisement</a></li>
        <li > <a href="#" id="dept"><i class="fa fa-object-group" aria-hidden="true"></i>
                </i> Modify & Remove </a></li>

        <li > <a href="#" id="user"><i class="fa fa-users"></i>Send Feedback</a></li>


    </ul>
</div>
<div class="right">
    <div class="container">
<div class="row">

<div class="col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1">

<div class="div carousel-img">
    <h3>Add A New Advertisement</h3>
    <form action="/addAd" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <label for="exampleInputFile">Body</label>
            <input type="text" name="body" class="form-control" id="exampleInputFile" required>

        </div>
        <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <input type="file" name="url" id="exampleInputFile" required>
            <p class="help-block">Please Choose Image with good resolution.</p>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>

</div>

</div>
    <div class="col-xs-12">

<div class="div department mod">
    <h3 style="color: #2f3538; margin-bottom: 40px">Delete & Modify Your Advertisements</h3>
    <div class="row">
        @foreach($advertisements as $key=>$advertisement)
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="ad-image">
                <img src="image/{{$advertisement->url}}">
                <form action="/modifyAd" method="post">
                    {{csrf_field()}}

                <p id="body-modify{{$key}}">{{$advertisement->body}}</p>
                    <input id="input-modfiy{{$key}}" name="body" class="form-control" value="{{old('body',$advertisement->body)}}" style="display: none">
                    <input type="hidden" value="{{$advertisement->id}}" name="id">
                <a class="btn btn-danger" href="/deleteAd/{{$advertisement->id}}">Delete</a>

                <input type="button" id="modfiyAd{{$key}}"  class="btn btn-primary" value="Modify">
                <input type="submit" id="submit-modfiy{{$key}}"  style="display: none;"  class="btn btn-primary" value="Modify">
                <input type="button" id="cancel-modfiy{{$key}}"  style="display: none;" class="btn btn-primary" href="#" value="Cancel">


                </form>

            </div>

        </div>
        @endforeach


    </div>

</div>

</div>
    <div class="  col-sm-offset-1 col-sm-10 col-xs-12  col-sm-offset-1">
        <div class="div All-users">
            <h3>Send Feedback</h3>

            <form action="/sendFeed" method="post">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="exampleInputFile">Your Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputFile" required>

                </div><div class="form-group">
                    <label for="exampleInputFile">Your Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputFile" required>

                </div><div class="form-group">
                    <label for="exampleInputFile">Your Feedback</label>
                    <textarea rows="3" name="feed" class="form-control" id="exampleInputFile" required></textarea>

                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>

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
    @foreach($advertisements as $key=>$advertisement)

    /*ad*/
    $('#modfiyAd{{$key}}').click(function () {
        $('#modfiyAd{{$key}}').hide();
        $('#input-modfiy{{$key}}').show();
        $('#submit-modfiy{{$key}}').show();
        $('#cancel-modfiy{{$key}}').show();
        $('#body-modify{{$key}}').hide()
    });
    $('#cancel-modfiy{{$key}}').click(function () {
        $('#modfiyAd{{$key}}').show();
        $('#input-modfiy{{$key}}').hide();
        $('#submit-modfiy{{$key}}').hide();
        $('#cancel-modfiy{{$key}}').hide();
        $('#body-modify{{$key}}').show();

    });

    @endforeach
</script>

</body>
</html>