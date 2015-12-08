<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel 5 Image Application</title>

    <!-- Bootstrap Core CSS -->
    <link href={{url("css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Custom CSS -->
    <link href={{url("css/simple-sidebar.css")}} rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Effects Menu
                    </a>
                </li>

                <li>
                    <div id="MainMenu">
                      <div class="list-group panel">
                        <a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Brightness Effect</a>
                        <div class="collapse" id="demo3">
                          <a href="showbright" class="list-group-item">Show Me</a>
                          <a href="savebright" class="list-group-item">Save with Brightness</a>
                        </div>
                      </div>
                    </div>
                </li>

                <li>
                    <div id="MainMenu">
                      <div class="list-group panel">
                        <a href="#demo2" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Darkness Effect</a>
                        <div class="collapse" id="demo2">
                          <a href="showdark" class="list-group-item">Show Me</a>
                          <a href="savedark" class="list-group-item">Save with Darkness</a>
                        </div>
                      </div>
                    </div>
                </li>

                <li>
                    <div id="MainMenu">
                      <div class="list-group panel">
                        <a href="#demo1" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Invert Effect</a>
                        <div class="collapse" id="demo1">
                          <a href="showinvert" class="list-group-item">Show Me</a>
                          <a href="saveinvert" class="list-group-item">Save with Invert</a>
                        </div>
                      </div>
                    </div>
                </li>

                <li>
                    <div id="MainMenu">
                      <div class="list-group panel">
                        <a href="#demo0" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Low Gamma Effect</a>
                        <div class="collapse" id="demo0">
                          <a href="showgamma" class="list-group-item">Show Me</a>
                          <a href="savegamma" class="list-group-item">Save with Low Gamma</a>
                        </div>
                      </div>
                    </div>
                </li>

                <li>
                    <div id="MainMenu">
                      <div class="list-group panel">
                        <a href="#demo5" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Sharpness Effect</a>
                        <div class="collapse" id="demo5">
                          <a href="showsharp" class="list-group-item">Show Me</a>
                          <a href="savesharp" class="list-group-item">Save with Sharpness</a>
                        </div>
                      </div>
                    </div>
                </li>

                <li>
                    <div id="MainMenu">
                      <div class="list-group panel">
                        <a href="#demo7" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Greyscale Effect</a>
                        <div class="collapse" id="demo7">
                          <a href="showgray" class="list-group-item">Show Me</a>
                          <a href="savegray" class="list-group-item">Save with Greyscale</a>
                        </div>
                      </div>
                    </div>
                </li>

                <li>
                    <div id="MainMenu">
                      <div class="list-group panel">
                        <a href="#demo8" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Mirror Effect</a>
                        <div class="collapse" id="demo8">
                          <a href="showmirror" class="list-group-item">Show Me</a>
                          <a href="savemirror" class="list-group-item">Save with Mirror</a>
                        </div>
                      </div>
                    </div>
                </li>

                <li>
                    <div id="MainMenu">
                      <div class="list-group panel">
                        <a href="#demo6" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Rotation Effect</a>
                        <div class="collapse" id="demo6">
                          <a href="showrotate" class="list-group-item">Show Me</a>
                          <a href="saverotate" class="list-group-item">Save with Rotation</a>
                        </div>
                      </div>
                    </div>
                </li>

                <li>
                    <div id="MainMenu">
                      <div class="list-group panel">
                        <a href="#demo10" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Lightblue Effect</a>
                        <div class="collapse" id="demo10">
                          <a href="showblue" class="list-group-item">Show Me</a>
                          <a href="saveblue" class="list-group-item">Save with Lightblue</a>
                        </div>
                      </div>
                    </div>
                </li>

                <li>
                    <div id="MainMenu">
                      <div class="list-group panel">
                        <a href="#demo9" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Lightred Effect</a>
                        <div class="collapse" id="demo9">
                          <a href="showred" class="list-group-item">Show Me</a>
                          <a href="savered" class="list-group-item">Save with Lightred</a>
                        </div>
                      </div>
                    </div>
                </li>

                <li>
                    <div id="MainMenu">
                      <div class="list-group panel">
                        <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Blur Effect</a>
                        <div class="collapse" id="demo4">
                          <a href="showblur" class="list-group-item">Show Me</a>
                          <a href="saveblur" class="list-group-item">Save with Blur</a>
                        </div>
                      </div>
                    </div>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Your Image</h1>
                        <div class="twobuttons">
                            <p>
                                <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>
                                <a href="download" class="btn btn-success" id="menu-toggle">Download Your Image</a>
                            </p>
                        </div>


                        <?php
                        $img = Image::make(public_path('uploads/theimage.jpg'));
                        $img->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                        });
                        $img->encode('png');
                        $type = 'png';
                        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
                        ?>
                        <img src="{!! $base64 !!}">
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src={{url("js/jquery.js")}}></script>

    <!-- Bootstrap Core JavaScript -->
    <script src={{url("js/bootstrap.min.js")}}></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
