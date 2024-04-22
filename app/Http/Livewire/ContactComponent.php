<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $comment;

    public function sendMessage()
    {
        $contact = new Contact;
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->comment = $this->comment;
        $contact->save();
        session()->flash('message', 'You feedback has been sended successfully');
    }

    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');;
    }
}
