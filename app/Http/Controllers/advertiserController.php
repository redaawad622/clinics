<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;
use Auth;
use DB;
use Mail;

class advertiserController extends Controller
{
    public function getAdvertisement()
    {
        $advertisements= Advertisement::where('user_id',Auth::user()->id)->get();

        return view('advertiser', compact('advertisements') );

    }
    public function addAd()
    {
        request()->validate([

            'url'   => 'required|image',
            'body'   => 'required|string',
        ]);
        $img_name=time().'.'.request('url')->getClientOriginalExtension();
       $ad=new Advertisement();
       $ad->url=$img_name;
       $ad->body=\request('body');
       $ad->user_id=Auth::user()->id;
       $ad->save();
        \request('url')->move(public_path('image'),$img_name);

        return back();
    }
    public function deleteAd($id)
    {
        Advertisement::where('id',$id)->delete();
        return back();

    }
    public function modifyAd()
    {
        DB::table('advertisements')
        ->where('id', \request('id'))
        ->update(['body' => \request('body')]);
        return back();


    }
    public function sendFeed()
    {
        /*send mail*/
        Mail::raw(\request('feed'),function ($message){
            $message->to('redaawad622@gmail.com')->subject('Feedback From '.\request('name'));
            $message->from(\request('email'));
        });
        return back();


    }
}
