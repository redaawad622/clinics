<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/english-Askquation.css')}}" rel="stylesheet">
    <link href="{{asset('css/master.css')}}" rel="stylesheet">
    <link href="{{asset('css/englishmedia-Askquation.css')}}" rel="stylesheet">
    <!-- [if lt IE9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.js"></script>
     <!--[end if]-->
</head>
<body>


@extends('master')
@section('content')
<section class="main-section">

<div class="container">

    <section class="comment-list">
        <!-- First Comment -->


            <div>
                <i class="fa fa-arrow-up hidden-lg hidden-md hidden-sm"></i>
                <div class="panel panel-default arrow left"  style="border: none;">
                    <div class="panel-body">
                        <header class="text-left">
                            <div class="comment-user"><i class="fa fa-user"></i> <h2>{{$user->name}}</h2></div>
                            <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i>{{date('M d, Y',strtotime($question->created_at))}}</time>
                        </header>
                        <div class="comment-post">
                            <p>
                                {{$question->body}}
                            </p>
                        </div>



                    </div>
                </div>
            </div>

    </section>

      <h2 class="page-header">Comments</h2>
        <section class="comment-list">
          <!-- First Comment -->
            @foreach($replays as $replay)

            <article class="row">
            <div class="col-md-2 col-sm-2">
              <figure class="thumbnail text-center">
                
                <i class="fa fa-user-circle fa-5x" aria-hidden="true"></i><br>{{$replay->name}}
              </figure>
            </div>

            <div class="col-md-10 col-sm-10">
            <i class="fa fa-arrow-up hidden-lg hidden-md hidden-sm"></i>
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  <header class="text-left">
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> {{date('M d, Y',strtotime($replay->created_at))}}</time>
                  </header>
                  <div class="comment-post">
                    <p>
                        {{$replay->body}}
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </article>
            @endforeach

        </section>
          </div>

    <div class="container rep">

        <form role="form" action="/replay" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label style="color:#111; font-size: 16px" class="label">Replay</label>
                <textarea name="body" class="form-control" rows="6" required style="max-width:600px ;border: 1px solid  #000"></textarea>
            </div>
            <input name="question_id" type="hidden" value="{{$question->id}}">
            <button  type="submit" id="eee" class="btn btn-primary'" >Submit</button>
        </form>
    </div>


    
</section>    
        
@stop