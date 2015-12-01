<?php namespace App\Http\Controllers;
use Input;
use Validator;
use Redirect;
use Request;
use Session;
use Response;
class ApplyController extends Controller {
public function upload() {
  // getting all of the post data
  $file = array('image' => Input::file('image'));
  
  // setting up rules
  $rules = array('image' => 'mimes:jpeg,jpg,png|required|max:10000'); //mimes:jpeg,bmp,png and for max size max:10000
  
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
  
  // send back to the page with the input data and errors
    return Redirect::to('/')->withInput()->withErrors($validator);
  }
  else {
  // checking file is valid.
    if (Input::file('image')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
      $fileName = 'theimage'.'.'.$extension; // renameing image
      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('options');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('uploads');
    }
  }
}

public function options()
{
    return view("pages.options");
}

public function downloadImage(){
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/uploads/theimage.jpg";
        $headers = array(
              'Content-Type: Image File',
            );
        return Response::download($file, 'editedimage.jpg', $headers);
}

}