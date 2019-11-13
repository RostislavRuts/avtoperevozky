<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $reviews = Testimonial::all();
        $i = 1;
    	return view ('home.main', compact('reviews', 'i'));
    }

    public function checkAdmin()
    {
    	return view('forms.formAdmin');
    }

    public function isAdmin(Request $request)
    {
    	$request->session()->forget('admin');

    	if($request->email == 'rosadmin@gmail.com' && $request->pass == 'strongpass') {
    		session(['admin' => 'enter']);

    		return redirect('/admin');
    	} 
    	else {
    		return back();
    	}

    }
    public function logout(Request $request)
    {
        $request->session()->forget('admin');
        return redirect('/');
    }

    public function callback(Request $request)
    {
        $token = "950554333:AAFgFwGVA3FLVrRSbhBLF2JJ6WtX7-P0giI";
        $chat_id = "487043525";
        $arr = array(
            'Имя' => $request->name,
            'Телефон' => $request->phone,
        );
        $txt = '';
        foreach($arr as $key => $value) {
            $txt .= "<b>".$key."</b> ".$value."%0A";
        };
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
        
        return redirect('/');
    }

    public function reviewForm()
    {
        return view('forms.formReview');
    }

    public function saveNewReview(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'comment'=>'required',
            'status' => 'required',

        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->email = $request->email;
        $testimonial->comment = $request->comment;
        $testimonial->status = $request->status;
        
        $testimonial->save();
        return redirect('/#review');
    }


    /*public function dataSave(Request $request)
    {
       \Storage::disk('files')->put('home/'.$request->to.'.blade.php', $request->data);
    }*/
}
