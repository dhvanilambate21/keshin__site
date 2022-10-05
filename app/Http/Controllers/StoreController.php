<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class StoreController extends Controller
{
    function store(Request $req)
    {
        $validated = $req->validate([
            'name' => 'required|unique:contacts|max:255',
            'email' => 'required',
            'companyname' => 'required',
            'complateddate' => 'required',
            'intrest' => 'required',
            'budget' => 'required',
            'description' => 'required',
            'file' => 'required',
        ]);

        $contact = new contact;
        $contact->name=$req->input('name');
        $contact->email=$req->input('email');
        $contact->companyname=$req->input('companyname');
        $contact->complateddate=$req->input('complateddate');

        $contact->intrest=$req->input('intrest');
        $contact->budget=$req->input('budget');
        $contact->description=$req->input('description');

        if($req->hasfile('file'))
        {
            $file = $req->file('file');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('frontend/uploads/',$filename);
            $contact->file=$filename;
        }
        $contact->save();     
        // dd($req);
        // dd($req->all());
        // exit();

        $data= [
        'name'=>$req->name,
        'email'=>$req->email,
        'companyname'=>$req->companyname,
        'complateddate'=>$req->complateddate,
        'intrest'=>$req->intrest,
        'budget'=>$req->budget,
        'description'=>$req->description,
        ];


        Mail::to($data['email'])->send(new ContactMail($data));
        $req=session()->flash('msg',"Sent Email Successfully");
        return redirect('contact');
    }
}
