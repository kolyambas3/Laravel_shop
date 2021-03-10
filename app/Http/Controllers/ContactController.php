<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
        {
            $contact = new Contact();
            $contact->name = $req->input('name');
            $contact->email = $req->input('email');
            $contact->subject = $req->input('subject');
            $contact->message = $req->input('message');

            $contact->save();

            return redirect()->route('home')->with('success', 'Message was created');
        }

    public function AllData()
    {
        $contact = new Contact();
        return view('messages', ['data' => $contact->orderBy('id','asc')->get()]);
    }

    public function showMessage($id)
    {
        $contact = new Contact();
        return view('one-message', ['data' => $contact->find($id)]);
    }

    public function editMessage($id)
    {
        $contact = new Contact();
        return view('one-message-edit', ['data' => $contact->find($id)]);
    }

    public function editMessageSubmit($id, ContactRequest $req)
    {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-message', $id)->with('success', 'Message was updated');
    }

    public function deleteMessage($id)
    {
        Contact::find($id)->delete();

        return redirect()->route('contact-data')->with('success', 'Message was delete');
    }
}
