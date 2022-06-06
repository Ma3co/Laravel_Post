<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Thomasjohnkane\Snooze\Traits\SnoozeNotifiable;

class HomeController extends Controller
{
    use Notifiable, SnoozeNotifiable;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $users = User::all();
        // foreach($users as $user){

        //     $user->notifyAt(new NextWeekNotification, Carbon::now()->addDays(7));

        //       //  Notification::route('mail', $user->email)->notify(new RegUser());
        //     }

        return view('home');


    }
}
