<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Http\Livewire\ContactFormMailable

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public function submitForm()
    {
        $contact = $request -> validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Mail::to('paul@cynosurenetworx.com')->send(new ContactFormMailable($contact));

        return back()->with('success_message', 'We received your message successfully and will get back to you shortly');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }


}
