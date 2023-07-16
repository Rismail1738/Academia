<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\invoices;
use App\Models\subjects;
use App\Models\reports;
use App\Models\announcements;
use App\Models\submissions;
use App\Models\assignments;

class HomeController extends Controller
{
    public function redirect(){


        if (Auth::id()) {

            $id = Auth::user()->id;
            $name = Auth::user()->name;

        if (Auth::user()->user_type=='2') {
                        $announcement_store = announcements::all();
                        $student_store = User::where('parent_id',$id)->get();
                        $report_store = reports::where('parent_id',$id)->get();
                        $submission_store = submissions::where('parent_id',$id)->get(); 
                        $assignment_store = assignments::all(); 
                        $invoice_store = invoices::where('parent_id',$id)->get();                                           
                    return view('parent.home', compact('announcement_store','student_store','report_store','submission_store','assignment_store','invoice_store'));
                    }else if (Auth::user()->user_type=='3') {
                        $announcement_store = announcements::where('teacher',$name)->get();
                        $subject_store = subjects::all();
                        $student_store = User::where('user_type','0')->get();
                        $report_store = reports::where('teacher',$name)->get();
                        $submission_store = submissions::where('teacher',$id)->get(); 
                        $assignment_store = assignments::where('teacher',$id)->get();                          
                    return view('teacher.home', compact('announcement_store','student_store','report_store','submission_store','assignment_store'));
                    }
            else if (Auth::user()->user_type=='1') {
                        // $userid = Auth::user()->id;
                        $administrator_store = User::where('user_type','1')->get();
                        $student_store = User::where('user_type','0')->get();
                        $teacher_store = User::where('user_type','3')->get();
                        $parent_store = User::where('user_type','2')->get();
                        $subject_store = subjects::all();
                        $invoice_store = invoices::all();
                        return view('admin.home', compact('administrator_store','student_store','teacher_store','parent_store','subject_store','invoice_store'));
                    }else{
                   return view('users.home');
            }        
        }else{
            return redirect->back();
        }

    }

        public function index(){
        return view('users.home');
    }
    
}
