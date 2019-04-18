<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pick;
use App\Character;
use Illuminate\Support\Str;

class HomeController extends Controller
{
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
        $picks = Pick::where('user_id', auth()->id())->get();
        $picks = $picks->toArray();
        return view('home')->with('picks', $picks);
    }

    /**
     * Show the form page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function form()
    {
        $picks = Pick::where('user_id', auth()->id())->get();
        $picks = $picks->toArray();
        if(count($picks) == 27) {
            return redirect('home');
        }
        return view('form')
            ->with('picks', $picks)
            ->with('characters', Character::all());
    }

    /**
     * Form submit
     */
    public function submit(Request $request)
    {
        $input = $request->all();
        foreach ($input as $i => $value){
            if (Str::startsWith($i, 'c')){
                $cid = str_replace('c', '', $i);
                $pick = new Pick;
                $pick->user_id = auth()->id();
                $pick->character_id = $cid;
                $pick->pick = $value;
                $pick->ww = $request->get('ww'.$cid, 0);
                $pick->save();
            }
        }
        return redirect('home');
    }
}
