<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Request;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\invoices;
use App\Models\subjects;

class AdminController extends Controller
{
     public function add_user(Request $request){
        $user = new user;
        $file = \Request::file('image');
        $destination = 'images';
        $ext= $file->getClientOriginalExtension();
        $mainFilename = Str::random(40).date('h-i-s').".".$ext;
        $file->move($destination, $mainFilename);

        $name = $request->input('fname');
        $phone_number = $request->input('phone');
        $user_type = $request->input('user_type');
        $email = $request->input('email');
        $par = $request->input('par');
        $subject = $request->input('subject');
        // $password = bcrypt($request->input('password'));
        $password=Hash::make($request->input('password'));

        $user->profile_photo_path=$mainFilename;
        $user->name=$name;
        $user->phone_number=$phone_number;
        $user->user_type=$user_type;
        $user->email=$email;
        $user->parent_id=$par;
        $user->subject=$subject;
        $user->password=$password;
        // $user->password=Hash::make($request->password);

        $user->save();

        return redirect()->back();
    }

        public function add_subject(Request $request){
        $subjects = new subjects;

        $name = $request->input('name');
        $code = $request->input('code');
        $year = $request->input('year');
        $status = $request->input('status');

        $subjects->name=$name;
        $subjects->code=$code;
        $subjects->year=$year;
        $subjects->status=$status;

        $subjects->save();

        return redirect()->back();
    }

        public function add_invoice(Request $request){
        $invoice = new invoices;

        $par = $request->input('par');
        $amount = $request->input('amount');
        $day = $request->input('day');
        $stat = 'Pending';

        $invoice->parent_id=$par;
        $invoice->amount=$amount;
        $invoice->due_date=$day;
        $invoice->status=$stat;        

        $invoice->save();

        return redirect()->back();
    }

    public function delete_user($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function delete_invoice($id){
        $data = invoices::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function delete_subject($id){
        $data = subjects::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_invoice($id){
        $data = invoices::find($id);
        $data->status='Paid and Confirmed';
        $data->save();
        return redirect()->back();
    }
}