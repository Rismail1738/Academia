<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\invoices;
use App\Models\submissions;
use App\Models\assignments;

class ParentController extends Controller
{

        public function pay_invoice($id){
        $data = invoices::find($id);
        $data->status='Paid';
        $data->save();
        return redirect()->back();
    }

        public function add_submission(Request $request){
        $submissions = new submissions;
        $file = \Request::file('pdf_path');
        $destination = 'pdf';
        $ext= $file->getClientOriginalExtension();
        $mainFilename = Str::random(40).date('h-i-s').".".$ext;
        $file->move($destination, $mainFilename);
        $aid = $request->input('aid');
        $status = 'Not Graded';
        $result_explode = explode(",", $aid);
        $asid = $result_explode[0];
        $teach = $result_explode[1];               
        $name = $request->input('name');        
        $par = $request->input('par');              
        
        $submissions->pdf_path=$mainFilename;
        $submissions->parent_id=$par;              
        $submissions->assignment_id=$asid;
        $submissions->status=$status;
        $submissions->name=$name; 
        $submissions->teacher=$teach;                

        $submissions->save();

        return redirect()->back();
    }

        public function delete_submission($id){
        $data = submissions::find($id);
        $data->delete();
        return redirect()->back();
    }

}
