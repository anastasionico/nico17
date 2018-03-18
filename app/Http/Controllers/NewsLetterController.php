<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsLetterController extends Controller
{
	
	public function subscribe(Request $request)
	{
		$email = request()->validate([
            "email" => "required|email"
        ]);
        
		if (!Newsletter::isSubscribed($email['email'])){
        	Newsletter::subscribePending($email['email']);

        	$message = "<br>
					You’re almost done!
					<br><br>
					Before you can receive your free updates,
					you need to confirm your email right now.
					<br><br>
					(It’s easy)
					<br><br>
					<b>Step 1:</b> Check your inbox for an email from me.
					<br>
					<b>Step 2:</b> Click on the “Yes, subscribe me to this list” button in the email.";

			\Session::flash("success",$message);
	        
	        return back();

        } else {
        	$message = "<br>
					Your email is already subscribed
					<br><br>
					If you do not receive my free updates please contact me using the form below.";


        	\Session::flash("danger",$message);
	        return back();
        }
	}

	public function getMembers()
	{
		$members = Newsletter::getMembers();
		$membersList = $members['members'];
		
		return view('admin/newsletter/index', compact('membersList'));
	}
	
	public function isSubscribed(Request $request)
	{
		
		$email = $request->email;
		if(Newsletter::isSubscribed($email)){
			\Session::flash("success", "$email is subscribed");
		    return back();
		} else {
			\Session::flash("danger", "$email is not subscribed");
		    return back();
		}
	}

	public function unsubscribe($email='')
	{
		if (!Newsletter::isSubscribed($email)){
        	
        	\Session::flash("danger", "$email is not subscribed");
	        return back();

        } else {
        	Newsletter::unsubscribe($email);
        	\Session::flash("success", "$email has now been deleted");
	        return back();
        }
	}
}
