<?php

Route::get('/', function() {
  return View::make('pages.upload');
});

Route::post('uploadimage', 'ApplyController@upload');

Route::get("options", "ApplyController@options");

Route::get('gray', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->greyscale();
  $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('mirror', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->flip("h");
   $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('blue', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->colorize(-100, 0, 100);
   $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('combo', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->greyscale()->flip("h")->colorize(-100, 0, 100);
   $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('download', 'ApplyController@downloadImage');

