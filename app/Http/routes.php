<?php

Route::get('/', function() {
  return View::make('pages.upload');
});

Route::post('uploadimage', 'ApplyController@upload');

Route::get("options", "ApplyController@options");

Route::get('showblur', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->blur(100);
  return $img->response();
});

Route::get('saveblur', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->blur(100);
  $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('showbright', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->brightness(25);
  return $img->response();
});

Route::get('savebright', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->brightness(25);
  $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('showdark', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->brightness(-50);
  return $img->response();
});

Route::get('savedark', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->brightness(-50);
  $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('showinvert', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->invert();
  return $img->response();
});

Route::get('saveinvert', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->invert();
  $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('showgamma', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->gamma(.3);
  return $img->response();
});

Route::get('savegamma', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->gamma(.3);
  $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('showsharp', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->sharpen(100);
  return $img->response();
});

Route::get('savesharp', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->sharpen(100);
  $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('showrotate', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->rotate(-45);
  return $img->response();
});

Route::get('saverotate', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->rotate(-45);
  $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('showgray', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->greyscale();
  return $img->response();
});

Route::get('savegray', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->greyscale();
  $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('showmirror', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->flip("h");
  return $img->response();
});

Route::get('savemirror', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->flip("h");
   $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('showred', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->colorize(100, 0, 0);
  return $img->response();
});

Route::get('savered', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->colorize(100, 0, 0);
   $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('showblue', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->colorize(0, 0, 100);
  return $img->response();
});

Route::get('saveblue', function(){
  $img = Image::make(public_path('uploads/theimage.jpg'))->colorize(0, 0, 100);
   $img->save((public_path('uploads/theimage.jpg')));
  return Redirect::to("options");
});

Route::get('download', 'ApplyController@downloadImage');

