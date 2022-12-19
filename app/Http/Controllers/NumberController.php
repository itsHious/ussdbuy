<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NumberList;
use Illuminate\Support\Facades\Validator;
class NumberController extends Controller
{
    public function addnumber(){
      return view('addnumber');
    }
    public function validateFieldsAccountCreation(){

      return [
        'name'=>'required|string',
        'number'=>'required|digits:10|unique:numberlist',
        'option'=>'required',

      ];

    }

    public function editvalidateFieldsAccountCreation(){

      return [
        'name'=>'required|string',
        'number'=>'required|digits:10',
        'option'=>'required',

      ];

    }

    public function dashboard(){
      $all = NumberList::latest()->take(6)->get();
      $countnumbers = NumberList::count();
      $countblack = NumberList::where('option','Blacklist')->count();
      $countwhite = NumberList::where('option','Whitelist')->count();
      $countapi = NumberList::sum('no_req');

      return view('dashboard',compact('all','countnumbers','countblack','countwhite','countapi'));
    }

    public function runValidationMsg(){
         return  [
           'name.alpha' => 'Only alphabets allowed',
           'name.required' => 'Name is required',
           'number.required' => 'Phone number is required',
           'number.digits' => 'Phone Number must be 10 digits',
           'number.unique' => 'Phone Number already taken',
           'option.required' => 'Please choose to whitelist or blacklist number',

            ];
    }

    public function addnumberpost(Request $r){
      $validate = Validator::make($r->all(), $this->validateFieldsAccountCreation(),$this->runValidationMsg());
if($validate->fails()){
  alert()->error($validate->errors()->first());
  return back();
}

    NumberList::create([
      'name'=>$r->name,
      'number'=>$r->number,
      'option'=>$r->option,
    ]);

    alert()->success('Number('.$r->number.') added to '.$r->option);
    return back();

    }

    public function managenumbers(){
      $all = NumberList::latest()->get();
      return view('managenumbers',compact('all'));

    }

    public function edit($id){
      $number = NumberList::where('id',$id)->first();
      if ($number !==null) {
        return view('edit',compact('number'));
      }else {
        alert()->error('Number details not found,Oops!');
        return back();
      }
    }

    public function update(Request $r,$id){
      $validate = Validator::make($r->all(), $this->editvalidateFieldsAccountCreation(),$this->runValidationMsg());
if($validate->fails()){
  alert()->error($validate->errors()->first());
  return back();
}

NumberList::where('id',$id)->update([
  'name'=>$r->name,
  'number'=>$r->number,
  'option'=>$r->option,
]);

alert()->success('Number('.$r->number.') updated and added to '.$r->option);
return redirect()->route('managenumbers');
    }

    public function delete($id){
      $number = NumberList::where('id',$id)->first();
      if ($number !==null) {
        $number->delete();
        alert()->success('Record Deleted!,Success');
        return back();
      }else {
        alert()->error('Number details not found,Oops!');
        return back();
      }
    }

    public function apireport(){
      $all = NumberList::latest()->get();
      return view('apireport',compact('all'));
    }
}
