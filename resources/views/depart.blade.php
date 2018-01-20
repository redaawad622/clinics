<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$departs->dept_name}}</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/depart.css')}}" rel="stylesheet">
    <link href="{{asset('css/master.css')}}" rel="stylesheet">
        <link href="{{asset('css/englishmedia-profil.css')}}" rel="stylesheet">
    <!-- [if lt IE9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.js"></script>
     <!--[end if]-->
</head>
<body>
@extends('master')
@section('content')


<!--start body-->
    
        <section class="main-section">
            <div class="container-fluid">
                <h2 style="text-align: center">{{$departs->dept_name}}</h2>
                <div class="row text-center">
                <div class="col-md-3 col-sm-6 col-xs-12">
                     <img src="{{asset('image/1.jpg')}}">
                    <p style="font-weight: bolder;">Dr:Ahmed </p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptatem assumenda praesentium ut deserunt.</p>

                    <span class="fa fa-star "></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>

                 <span class="fa fa-star checked"></span>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12"><img src="{{asset('image/3.jpg')}}">  <p style="font-weight: bolder;">Dr:Mohamed </p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptatem assumenda praesentium ut deserunt.</p>

                 <span class="fa fa-star"></span>
                 <span class="fa fa-star"></span>
                   <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                        </div>
                    
                <div class="col-md-3 col-sm-6 col-xs-12"><img src="{{asset('image/3.jpg')}}">  <p style="font-weight: bolder;">Dr:Mohamed </p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptatem assumenda praesentium ut deserunt.</p>

                 <span class="fa fa-star"></span>
                 <span class="fa fa-star"></span>
                   <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                        </div>
                      <div class="col-md-3 col-sm-6 col-xs-12"><img src="{{asset('image/4.png')}}">  <p style="font-weight: bolder;">Dr:Assmaa </p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptatem assumenda praesentium ut deserunt.</p>

                 <span class="fa fa-star"></span>
                  <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                         </div>
                </div>
                <hr>
                
                
                
                
                
                </div>
            
            <div class="container">
            <div class="row">
               
             <div class="col-md-6 col-sm-12">
                <h3 class="text-center">find Doctor:</h3>
                 <div class="internal">
                 <form action="/search" method="post">
                     {{csrf_field()}}
                    <label class="governorate">Select governorate</label> 
                    <input list="governorate" name="gov" class="governorate form-control input-md" placeholder="Governorate" required>
                      <datalist id="governorate">
                         <option value="اسوان" title="اسوان" id="aswan">اسوان</option>
                          <option value="اسيوط" title="اسيوط">اسيوط</option>
                          <option value="الاسكندريه" title="الاسكندريه">الاسكندريه</option>
                          <option value="الاسماعيلية" title="الاسماعيلية">الاسماعيلية</option>
                          <option value="الاقصـر" title="الاقصـر">الاقصـر</option>
                          <option value="البحر الاحمر" title="البحر الاحمر">البحر الاحمر</option>
                          <option value="البحيرة" title="البحيرة">البحيرة</option>
                          <option value="الجيزه" title="الجيزه">الجيزه</option>
                          <option value="الدقهلية" title="الدقهلية" >الدقهلية</option>
                          <option value="السويس" title="السويس" >السويس</option>
                          <option value="الشرقيه" title="الشرقيه" >الشرقيه</option>
                          <option value="الغربيه" title="الغربيه" >الغربيه</option>
                          <option value="الفيوم" title="الفيوم" >الفيوم</option>
                          <option value="القاهره" title="القاهره" >القاهره</option>
                          <option value="القليوبيه" title="القليوبيه" >القليوبيه</option>
                          <option value="المنوفيه" title="المنوفيه" >المنوفيه</option>
                          <option value="المنيا" title="المنيا" >المنيا</option>
                          <option value="الوادى الجديد" title="الوادى الجديد" >الوادى الجديد</option>
                          <option value="بنى سويف" title="بنى سويف" >بنى سويف</option>
                          <option value="بورسعيد" title="بورسعيد" >بورسعيد</option>
                          <option value="جنوب سيناء" title="جنوب سيناء" >جنوب سيناء</option>
                          <option value="دمياط" title="دمياط" >دمياط</option>
                          <option value="سوهاج" title="سوهاج" >سوهاج</option>
                          <option value="سيناء" title="سيناء" >سيناء</option>
                          <option value="شمال سيناء" title="شمال سيناء" >شمال سيناء</option>
                          <option value="قنــا" title="قنــا" >قنــا</option>
                          <option value="كفرالشيخ" title="كفرالشيخ" >كفرالشيخ</option>
                          <option value="مرسى مطروح" title="مرسى مطروح" >مرسى مطروح</option>

                          
                     
                      </datalist>
                      <label class="city">Select city</label> 
                    <input type="text" name="city"  class="city form-control input-md" placeholder="city" id="input-city">

                     <label class="governorate">Select Area</label> 
                    <input type="text" name="area" class="governorate form-control input-md" placeholder="Area"  id="input-area" readonly>
                    <input type="hidden" name="id" value="{{$departs->id}}">

                 
                       <input  class="submit btn btn-primary form-control input-md" type="submit">
                 
                 </form>
                 
                </div>
            </div>
                 
         <div class="col-md-6 col-sm-12"> 
            <div class="row">

             <h3 class="text-center"> Ask Question:</h3>
                <form role="form" action="/typeQuestion" method="post">
                    {{csrf_field()}}
                <div class="form-group">
                  <textarea class="form-control" name="body" @if(!Auth::check()) {{'readonly'}}@endif></textarea>
                </div>
                    <input type="hidden" name="department_id" value="{{$departs->id}}">
                <button  id="eee" type="submit" class="btn btn-primary" >Submit</button>
              </form>
                
             </div>
            </div>
        </div> 
    </div>    

       <div class="container">
           <div class="row ">
               <div class="col-md-12 col-xs-12">
            <h1 class="text-center">All Questions</h1>

                   @foreach($allQuestions as $question)
                

               <div class="quation">
                   <div>
                   <i class="fa fa-user-circle" aria-hidden="true"><p>
                           {{$question->name}}
                       </p></i>
                   <i class="fa fa-clock-o" aria-hidden="true"><p>{{date('h:i a',strtotime($question->created_at))}}</p> </i>
                   <i class="fa fa-calendar" aria-hidden="true"><p>{{date('F/d',strtotime($question->created_at))}}</p> </i>
                   </div>
                   <div class="text">
                      <div class="div-pragr"> <p>{{$question->body}}</p></div>
                       @if(Auth::check() && Auth::user()->hasRole('admin'))
                       <a href="/RemoveQ/{{$question->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                           @endif

                   </div>
                   <div class="div-bottom-i">
                      <a href="/question/{{$question->id}}"><i class="fa fa-reply" aria-hidden="true">reply</i></a>
                   </div>
               </div>
                       @endforeach


           </div>
        </div>
    </div>
</section>
    
    

    

<!--end body-->

    @stop
