<?php

namespace Magna\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Magna\Contact\Mail\ContactMailable;
use Magna\Contact\Models\Contact;
use function config;
use function redirect;
use function route;
use function view;

class ContactController extends Controller {

    public function index() {
        return view('contact::contact');
    }

    public function send(Request $request) {
        Mail::to(config('contact.send_email_to'))
                ->send(new ContactMailable(
                                $request->message,
                                $request->name,
                                $request->email
        ));

        Mail::to(config('contact.send_email_to2'))
                ->send(new ContactMailable(
                                $request->message,
                                $request->name,
                                $request->email
        ));

        Contact::create($request->all()); // full data set to db
        // return $request->all();
        return redirect(route('contact'))->with('status', 'EMAIL and data OK!');
    }

}
