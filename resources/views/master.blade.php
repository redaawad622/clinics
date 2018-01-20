<div class="main-login">
    <div class="login">
        <div style="width: 100%; text-align: right; color: #066aab;">
            <i id="login-close" style="margin: 7px;" class="fa fa-close"></i>

        </div>
        <h2>Login</h2>
        <div class="img-brand-form">
            <img src="{{asset('image/TheClinics-en.png')}}">

        </div>
        <form method="post" action="/login">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group ">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="invalid-feedback">
                @if($errors->any())
                    {{$errors->first()}}
                @endif
            </div>


            <div class="checkbox">
                <label>
                    <input name="checked" type="checkbox"> Check me out
                </label>
            </div>
            <button type="submit" class="btn btn-default">Login</button>
        </form>

    </div>
</div>

<section class="header">
    <div class="container">

        <div class="row">
            <div class="col-sm-5 col-xs-12 hidden-sm hidden-xs">
                <a class="img1" href="english.blade.php"> <img src="{{asset('image/english.png')}}"></a>
                <a class="img_ar" href="index_So.html"><img src="{{asset('image/aribic.png')}}"></a>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
            </div>

            <div class="col-sm-7 col-xs-12 hidden-sm hidden-xs ">
                <div class="depart">


                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Departments
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            @foreach($depts as $dept)
                                <li><a href="/dept/{{$dept->id}}">{{$dept->dept_name}}</a></li>
                                <li role="separator" class="divider"></li>
                                @endforeach


                        </ul>
                    </div>
                    <div class="link1"><a href="#offers"> offers</a></div>
                    @if(Auth::check())
                        <div class="link1"><a href="/logout"> Logout</a></div>
                        @else
                        <div class="link1 log-in"><a href="#"> Login</a></div>


                    @endif
                    @if(Auth::check()&& Auth::user()->hasRole('admin'))

                        <div class="link1 "><a href="/control"> Admin</a></div>



                    @endif
                </div>
            </div>



        </div>
    </div>
    <section class="internalheader">
        <div class="container">


            <div class="row">
                <div class="seheader">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="search">
                            <input class="search-input"type="text" placeholder="find doctor">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>

                    <div class="col-md-4 div-img hidden-sm hidden-xs">
                        <div style="padding-left:100px;">
                            <img src="{{asset('image/TheClinics-en.png')}}">
                        </div>

                            @if($errors->any() && $errors->first()=='error')
                            <div class="alert alert-danger" style="margin: 10px;" role="alert">
                                @foreach($errors->all() as $error)
                                    {{$error}}
                                    @endforeach
                            </div>
                            @endif



                    </div>
                    <div class="col-md-4 first hidden-sm hidden-xs">
                        <div class="icon">
                            @if(Auth::check()&& Auth::user()->hasRole('doctor'))
                            <a href="/profile/{{Auth::user()->id}}"> <i class="fa fa-user-circle-o" aria-hidden="true"></i>@if(Auth::check()){{Auth::user()->name}} @else {{'name'}} @endif </a>
                            @endif
                            <a href=""> <i class="fa fa-heart" aria-hidden="true"></i><?php  if(Auth::check()){$em=explode('@',Auth::user()->email); echo '@'. $em[0];}else {echo 'email';} ?> </a>
                            <a href=""> <i class="fa fa-external-link" aria-hidden="true"></i>booking </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
</section>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header first-nav">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home<span class="sr-only">(current)</span></a></li>
                <li>
                    <div class="dropdown drop-nav">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Departments
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            @foreach($depts as $dept)
                                <li><a href="/dept/{{$dept->id}}">{{$dept->dept_name}}</a></li>
                                <li role="separator" class="divider"></li>
                            @endforeach

                        </ul>
                    </div>
                </li>
                @if(!Auth::check())
                <li><a href="#registered">Register</a></li>
                @endif
                <li><a href="#Advertisement">Advertisements</a></li>
                <li><a href="#offers"> offers</a></li>


                <li><a href="#footer">Contect us</a></li>

                @if(Auth::check())
                    <li><a href="/logout">Logout</a></li>

                @else
                    <li class="log-in"><a href="#">Log In</a></li>

                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


@yield('content')

<div class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class=" col-sm-6 col-xs-12">
                <div class="div-m">
                    <div class="div-d">
                        <div class="div-h">

                            <h1>contect us</h1>
                            <div class="d">
                                <span></span>
                            </div>
                        </div>
                    </div>

                </div>
                <div>

                    <div class="row features">

                        <div class="col-md-6 col-sm-12 ">
                            <h6>Company contact</h6>

                            <div class="row" id="company">

                                <div class=" col-sm-12 text-email">
                                    <div class="text-footer"><a href="#"><i class="fa fa-phone icon-footer"></i>{{$contactCompany[0]->num}}</a></div>
                                    <div class="text-footer"><a href="#"><i class="fa fa-envelope icon-footer"></i>{{$contactCompany[0]->email}}</a></div>
                                    <div class="text-footer"><a href="#"><i class="fa fa-file-text icon-footer"></i>{{$contactCompany[0]->others}}</a></div>
                                    @if(Auth::check()&&Auth::user()->hasRole('admin'))

                                        <button class="btn btn-danger" id="btn-edit-company">edit</button>
                                    @endif

                                </div>



                            </div>

                            <div class="row" id="company-edit">


                                <div class="col-sm-12 text-email">
                                    <form method="post" action="/companyEdit">
                                        {{csrf_field()}}
                                        <div class="text-footer"><i class="fa fa-phone icon-footer"></i><input name="num" type="text" class="form-control" value="{{old('num', $contactCompany[0]->num)}}" ></div>
                                        <div class="text-footer"><i class="fa fa-envelope icon-footer"></i><input name="email" type="text" class="form-control" value="{{old('email', $contactCompany[0]->email)}}" ></div>
                                        <div class="text-footer"><i class="fa fa-file-text icon-footer"></i><input name="others" type="text" class="form-control" value="{{old('others', $contactCompany[0]->others)}}" ></div>
                                        <input type="hidden" name="id" value="{{$contactCompany[0]->id}}">

                                        <button  type="submit"  class="btn btn-primary">Update</button>
                                        <input type="button" class="btn btn-danger" id="btn-cancel-company" value="Cancel">


                                    </form>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 ">
                            <h6>Developer contact</h6>
                            <div class="row" id="dev">

                                <div class="col-sm-12 text-email">
                                    <div class="text-footer"><a href="#"><i class="fa fa-phone icon-footer"></i>{{$contactDev[0]->num}}</a></div>
                                    <div class="text-footer"><a href="#"><i class="fa fa-envelope icon-footer"></i>{{$contactDev[0]->email}}</a></div>
                                    <div class="text-footer"><a href="#"><i class="fa fa-file-text icon-footer"></i>{{$contactDev[0]->others}}</a></div>
                                    @if(Auth::check()&&Auth::user()->hasRole('admin'))

                                        <button class="btn btn-danger" id="btn-edit-dev">edit</button>
                                    @endif

                                </div>
                            </div>
                            <div class="row" id="dev-edit">

                                <div class="col-sm-12 text-email">
                                    <form action="/devEdit" method="post">
                                        {{csrf_field()}}
                                        <div class="text-footer"><i class="fa fa-phone icon-footer"></i><input name="num"  type="text" class="form-control" value="{{old('num', $contactDev[0]->num)}}"></div>
                                        <div class="text-footer"><i class="fa fa-envelope icon-footer"></i><input name="email" type="text" class="form-control" value="{{old('email', $contactDev[0]->email)}}"></div>
                                        <div class="text-footer"><i class="fa fa-file-text icon-footer"></i><input  name="others" type="text" class="form-control" value="{{old('others', $contactDev[0]->others)}}"></div>
                                        <input type="hidden" name="id" value="{{$contactDev[0]->id}}">
                                        <button  type="submit"  class="btn btn-primary">Update</button>
                                        <input type="button" class="btn btn-danger" id="btn-cancel-dev" value="Cancel">


                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="div-m">
                    <div class="div-d">
                        <div class="div-h">

                            <h1>features links</h1>
                            <div class="d">
                                <span></span>
                            </div>
                        </div>
                    </div>

                </div>
                <div>
                    <ul>
                        <li class="list-footer"><a href="#"> contect us</a></li>
                        <li  class="list-footer"><a href="#">news</a></li>
                        <li class="list-footer"><a href="#">Departments</a></li>
                        <li class="list-footer"><a href="#">articls</a></li>
                        <li class="list-footer"><a href="#">Bafore and After</a></li>

                    </ul>

                </div>
            </div>

            <div class="col-sm-3 col-xs-12 ">
                <div class="div-m">
                    <div class="div-d">
                        <div class="div-h">

                            <h1>patients care</h1>
                            <div class="d">
                                <span></span>
                            </div>
                        </div>
                    </div>

                </div>
                <div>
                    <ul>
                        <li class="list-footer"><a href="#"> Booking and appointment</a></li>
                        <li class="list-footer"><a href="#">Ask Doctors</a></li>
                        <li class="list-footer"><a href="#">Patient complaints</a></li>
                        <li class="list-footer"><a href="#">Quation And Answer</a></li>
                        <li class="list-footer"><a href="#">offer</a></li>

                    </ul>

                </div>
            </div>
        </div>
        <hr style="background:#3f4243;margin-top:50px;">
        <div class="text-center copy">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-tumblr"></i>
            <i class="fa fa-twitter"></i>
            <p>Copyright 2016 &#64;<a href="/">The Clinics</a>. All Rights Reserved</p>
            <p>powered By software engineering team</p>
        </div>
    </div>



</div>
<!--
<section class="overlo">
    <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</section>
-->


<script src="{{asset('js/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('js/software.js')}}"></script>
<script src="{{asset('js/profile.js')}}"></script>
<script src="{{asset('js/master.js')}}"></script>

<script src="{{asset('js/wow.min.js')}}"></script>
<script > new WOW().init();</script>
</body>
</html>


