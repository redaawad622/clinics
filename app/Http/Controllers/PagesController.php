<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Crt;
use App\cv;
use App\Department;
use App\Doctor;
use App\Mail\sendMail;
use App\Question;
use App\Rate;
use App\Replay;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Role;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Advertisement;


class PagesController extends Controller
{
    public function getAll()
    {
        $depts=Department::all();
        $contactCompany=DB::table('contact-company')->get();
        $contactDev=DB::table('contact-dev')->get();
        $carousals=DB::table('carousal')->get();
        $advertisements= Advertisement::all();

        return view('english',compact('depts','contactCompany','contactDev','carousals','advertisements'));
    }

    public function getProfile($id)
    {
        $depts=Department::all();
        $contactCompany=DB::table('contact-company')->get();
        $contactDev=DB::table('contact-dev')->get();
        $doctor = DB::table('doctors')->where('user_id', $id)->first();
        $user = DB::table('users')->where('id', $id)->first();
        $cvs = DB::table('cvs')->where('doctor_id', $doctor->id)->get();
        $certs = DB::table('crts')->where('doctor_id', $doctor->id)->get();
        $rates = DB::table('rates')->where('doctor_id', $doctor->id)->get();
        return view('profile',compact('depts','contactCompany','contactDev','doctor','user','cvs','certs','rates'));
    }
    public function register()
    {
        $depts=Department::all();
        $contactCompany=DB::table('contact-company')->get();
        $contactDev=DB::table('contact-dev')->get();
        $validator = Validator::make(request()->all(), [
            'name' => 'required|min:3|max:25|string',
            'email' => 'required|email|unique:users',

            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
            'phone_num'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }
        else
        {
            $user=new User();
            $user->name=\request('name');
            $user->email=\request('email');
            $user->password=bcrypt(request('password'));
            $user->phone_num=\request('phone_num');
            $user->active=0;
            $user->save();




            if(request('type')=='patient')
            {
                $message_en='Congratulation ! You are register as a Patient  Successfully Please Check Your email to Confirmation Your Register';
                $message_ar='لقد تم التسجيل بنجاح كمريض من فضلك راجع ايميلك لتأكيد التسجيل';
                $type='patient';
                //add role

                $user->roles()->attach(Role::where('name','user')->first());

                auth()->login($user);
                /*send mail*/
                Mail::send(new sendMail($user->id));

                return view('confirmation',compact('message_en','message_ar','type','depts','contactCompany','contactDev'));


            }
            if(request('type')=='doctor')
            {
                $doctors=new Doctor();

                $doctors->jop_title	='here is your job title';
                $doctors->gov='here is your governate';
                $doctors->city='here is your city';
                $doctors->area='here is your area';
                $doctors->address='here is your clinic address';
                $doctors->time_start='here is clinic time start';
                $doctors->time_end='here is clinic time end';
                $doctors->vacation='here is vacation day';
                $doctors->user_id=$user->id;
                $doctors->department_id=\request('department_id');
                $doctors->job_career='here is your job career';

                $doctors->cr_body='here is your  certification body';


                $doctors->save();
                $cv=new cv();
                $cv->edu_start='ex:2016';
                $cv->edu_end='ex:2017';
                $cv->edu_body='here is your education or certification';
                $cv->save();


                $message_en='Congratulation ! You are register as a doctor Successfully  Please Check Your email to Confirmation Your Register';
                $message_ar='لقد تم التسجيل بنجاح كطبيب من فضلك راجع ايميلك لتأكيد التسجيل';
                $type='doctor';
                //add role


                $user->roles()->attach(Role::where('name','doctor')->first());
                /*send mail*/

                Mail::send(new sendMail());


                return view('confirmation',compact('message_en','message_ar','type','depts','contactCompany','contactDev'));

            }
            if(request('type')=='advertiser')
            {
                $message_en='Congratulation ! You are register as an advertiser Successfully  Please Check Your email to Confirmation Your Register';
                $message_ar='لقد تم التسجيل بنجاح كمعلن من فضلك راجع ايميلك لتأكيد التسجيل';
                $type='advertiser';
                //add role

                $user->roles()->attach(Role::where('name','advertiser')->first());
                /*send mail*/
                Mail::send(new sendMail($user->id));


                return view('confirmation',compact('message_en','message_ar','type','depts','contactCompany','contactDev'));

            }

        }


    }
    public  function verify($id)
    {
        $depts=Department::all();
        $contactCompany=DB::table('contact-company')->get();
        $contactDev=DB::table('contact-dev')->get();
        DB::table('users')
            ->where('id', $id)
            ->update(['active' => 1]);
        return view('verify',compact('depts','contactCompany','contactDev'));
    }


    public function search()
    {
        $depts=Department::all();
        $contactCompany=DB::table('contact-company')->get();
        $contactDev=DB::table('contact-dev')->get();
        if(count(\request('city')>1&&count(\request('area'))==0))
        {
            $doctors=DB::table('doctors')->where('gov',\request('gov'))
                ->where('city',\request('city'))
                ->where('department_id',\request('id'))->get();
        }
        elseif(count(\request('city')==0))
        {
            $doctors=DB::table('doctors')->where('gov',\request('gov'))
                ->where('department_id',\request('id'))->get();


        }
        else
        {
            $doctors=DB::table('doctors')->where('gov',\request('gov'))
                ->where('city',\request('city'))
                ->where('area',\request('area'))
                ->where('department_id',\request('id'))->get();

        }

        return view('search',compact('depts','contactCompany','contactDev','doctors'));
    }
 public function getSearch()
    {
        $depts=Department::all();
        $contactCompany=DB::table('contact-company')->get();
        $contactDev=DB::table('contact-dev')->get();
        $doctors=null;


        return view('search',compact('depts','contactCompany','contactDev','doctors'));
    }


    public function dept($id)
    {
        $depts=Department::all();
        $departs=Department::find($id);
        $contactCompany=DB::table('contact-company')->get();
        $contactDev=DB::table('contact-dev')->get();
        $allQuestions=Question::where('department_id',$id)->get();

        return view('depart',compact('depts','departs','contactCompany','contactDev','allQuestions'));
    }

    public function typeQuestion()
    {
        $validator = Validator::make(request()->all(), [
            'body' => 'required|string',

        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        else {
            $question = new Question();
            $question->body = \request('body');
            $question->department_id = \request('department_id');
            $question->user_id = Auth::user()->id;
            $question->name = Auth::user()->name;

            $question->save();
        }
        $depts=Department::all();
        $contactCompany=DB::table('contact-company')->get();
        $contactDev=DB::table('contact-dev')->get();
        $user=User::find(Auth::user()->id);
        $replays= DB::table('users')
            ->join('replays', 'users.id', '=', 'replays.user_id')
            ->where('question_id',$question->id)
            ->get();
        return view('question',compact('depts','contactCompany','contactDev','question','user','replays'));

    }

    public function getQuestion($id)
    {
        $depts=Department::all();
        $contactCompany=DB::table('contact-company')->get();
        $contactDev=DB::table('contact-dev')->get();
        $question = Question::find($id);
        $user=User::find($question->user_id);
        $replays= DB::table('users')
            ->join('replays', 'users.id', '=', 'replays.user_id')
            ->where('question_id',$id)
            ->get();
        return view('question',compact('depts','departs','contactCompany','contactDev','question','user','replays'));
    }
    public function replay()
    {

        $validator = Validator::make(request()->all(), [
            'body' => 'required|string',

        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        else {
            $replay = new Replay();
            $replay->body = \request('body');
            $replay->question_id = \request('question_id');
            $replay->user_id = Auth::user()->id;

            $replay->save();
        }
        $user=User::find(Auth::user()->id);
        return back();

    }

    public function editProfile()
    {
        DB::table('doctors')
            ->where('user_id', Auth::user()->id)
            ->update(['address' => \request('address'),'city' => \request('city'),'gov' => \request('gov'),'time_start' => \request('time_start'),'time_end' => \request('time_end')]);
        return back();

    }
    public function editCareer()
    {
        DB::table('doctors')
            ->where('user_id', Auth::user()->id)
            ->update(['job_career' => \request('job_career')]);
        return back();

    }
    public function addEdu()
    {
       $cv=new cv();
       $cv->edu_start=\request('edu_start');
       $cv->edu_end=\request('edu_end');
       $cv->edu_body=\request('edu_body');
       $cv->doctor_id=\request('id');
       $cv->save();
        return back();

    }
    public function addCert()
    {
       $crt=new Crt();
       $crt->cr_url=\request('cr_url');
       $crt->cr_body=\request('cr_body');
       $crt->doctor_id=\request('id');
       $crt->save();
        return back();

    }
    public function editPic()
    {
        $img_name=time().'.'.request('url')->getClientOriginalExtension();

        DB::table('doctors')
            ->where('user_id', Auth::user()->id)
            ->update(['url' => $img_name]);
        \request('url')->move(public_path('image'),$img_name);

        return back();

    }
    public function addBooking()
    {
        $validator = Validator::make(request()->all(), [
            'fname' => 'required|string',
            'lname' => 'required|string',
            'age' => 'required|numeric',

            'email' => 'email',


        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        else {
            $book = new Booking();
            $book->fname = \request('fname');
            $book->lname = \request('lname');
            $book->age = \request('age');
            $book->email = \request('email');
            $book->phone = \request('phone');
            $book->account = \request('account');
            $book->pass = \request('pass');
            $book->balance = \request('balance');

            $book->user_id = Auth::user()->id;
            $book->doctor_id = \request('id');

            $book->save();
        }
        $user=User::find(Auth::user()->id);
        return back();


    } public function addRate()
    {
        $validator = Validator::make(request()->all(), [
            'body' => 'required|string',


        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        else {
            $rate = new Rate();
            $rate->body = \request('body');


            $rate->user_name = Auth::user()->name;
            $rate->doctor_id = \request('id');

            $rate->save();
        }
        return back();


    }
}
