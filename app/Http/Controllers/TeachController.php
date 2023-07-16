<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\reports;
use App\Models\assignments;
use App\Models\submissions;
use App\Models\announcements;

class TeachController extends Controller
{

    public function grade_submission($id){
        $data = submissions::find($id);
        $data->status='Graded';
        $data->save();      
        return redirect()->back();
    }

        public function complete_assignment($id){
        $data1 = assignments::find($id);
        $data1->status='Completed';
        $data1->save();        
        return redirect()->back();
    }

        public function add_report(Request $request){
        $reports = new reports;
        $file = \Request::file('pdf');
        $destination = 'pdf';
        $ext= $file->getClientOriginalExtension();
        $mainFilename = Str::random(40).date('h-i-s').".".$ext;
        $file->move($destination, $mainFilename);

        $name = $request->input('name');
        $teacher = $request->input('teacher');
        $par = $request->input('par'); 
        $subject = $request->input('subject');                       

        $reports->pdf_path=$mainFilename;
        $reports->name=$name;
        $reports->parent_id=$par;        
        $reports->teacher=$teacher;
        $reports->subject=$subject;        

        $reports->save();

        return redirect()->back();
    }

        public function add_assignment(Request $request){
        $assignments = new assignments;
        $file = \Request::file('pdf');
        $destination = 'pdf';
        $ext= $file->getClientOriginalExtension();
        $mainFilename = Str::random(40).date('h-i-s').".".$ext;
        $file->move($destination, $mainFilename);

        $name = $request->input('name');
        $teacher = $request->input('teacher');
        $subject = $request->input('subject');  
        $day = $request->input('day');  
                        

        $assignments->pdf_path=$mainFilename;
        $assignments->name=$name;       
        $assignments->teacher=$teacher;
        $assignments->subject=$subject; 
        $assignments->date_due=$day;
       
        $assignments->status='Assigned';               

        $assignments->save();

        return redirect()->back();
    }

        public function send_announcement(Request $request){
        $announcements = new announcements;

        $name = $request->input('teacher');
        $title = $request->input('title');
        $message = $request->input('message');
        $subject = $request->input('subject');

        $announcements->teacher=$name;
        $announcements->title=$title;
        $announcements->message=$message;
        $announcements->subject=$subject;

        $announcements->save();

        return redirect()->back();
    }

    public function delete_report($id){
        $data = reports::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function delete_announcement($id){
        $data = announcements::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function delete_assignment($id){
        $data = assignments::find($id);
        $data->delete();
        return redirect()->back();
    }

}
