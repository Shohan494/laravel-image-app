<!--app/views/form.blade.php-->
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>
   Welcome!
  </title>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <style type="text/css">
    body { 
    background: url(http://40.media.tumblr.com/783048876553dd03b7d2db2dc7561112/tumblr_nwmxn1blI41ted1sho1_1280.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
  </style>

 </head>
 <body>
<div class="container-fluid">
<div class="about-section">
   <div class="text-content">
     <div class="span7 offset1">
        @if(Session::has('success'))
          <div class="alert-box success">
          <h2>{!! Session::get('success') !!}</h2>
          </div>
        @endif
        <div class="secure" style="font-size: 30px; font-family: comic sans ms; color: rgb(29, 37, 124); font-weight: 600;">Upload Your Image!</div>
        <br>
        {!! Form::open(array('url'=>'uploadimage','method'=>'POST', 'files'=>true)) !!}
         <div class="control-group">
          <div class="controls">
          <input type="file" name="image" style="font-family: comic sans ms; font-size: 18px; font-weight: 600; color: rgb(82, 82, 82); border-style: solid; border-width: 5px; border-color: indigo;">
    <p class="errors" style="font-family: comic sans ms; font-size: 18px; font-weight: 600; color: #A8001C;">{!!$errors->first('image')!!}</p>
  @if(Session::has('error'))
  <p class="errors">{!! Session::get('error') !!}</p>
  @endif
        </div>
        </div>
        <div id="success"> </div>
      <input class="send-btn" type="submit" value="Submit" style="border-style: solid; border-width: 5px; font-family: comic sans ms; font-weight: 600; border-color: indigo; font-size: 17px;">
      {!! Form::close() !!}
      </div>
   </div>
</div>
</div>
 </body>
</html>