<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Select;

class SelectController extends Controller
{
    public function selecttest(Request $request)
    { 
      $ielts = $request->ielts_name;
      $pte = $request->pte_name;

      $ielts_writing = $request->ielts_writing;
      $ielts_speaking = $request->ielts_speaking;
      $pte_writing = $request->pte_writing;
      $pte_speaking = $request->pte_speaking;

      if(!$ielts == '' or !$pte == '' ){
        if($ielts){
          if($ielts_writing == ''){
            return redirect()->back()->with(['msg'=>'IELTS Written Can\'t be Empty']);
          }
          else if($ielts_speaking == ''){
            return redirect()->back()->with(['msg'=>'IELTS Speaking Can\'t be Empty']);
          } else {
            return redirect()->back()->with(['msg'=>'ok']);
          }
        }
        if($pte){
          if($pte_writing == ''){
            return redirect()->back()->with(['msg'=>'pte Written Can\'t be Empty']);
          }
          else if($pte_speaking == ''){
            return redirect()->back()->with(['msg'=>'pte Speaking Can\'t be Empty']);
          } else {
            return redirect()->back()->with(['msg'=>'ok']);
          }
        }
      } else {
        return redirect()->back()->with(['msg'=>'ielts or pte Can\'t be Empty']);
      }


      
      // return $request->all();
      // $student = new Select;  
      // $student->ielts_writing = $request->ielts_writing;
      // $student->ielts_speaking = $request->ielts_speaking;
      // $student->pte_writing = $request->pte_writing;
      // $student->pte_speaking = $request->pte_speaking;
      // $student->save();
      // return redirect()->route('home')->with('status', 'Successfully created!');
    }
}
