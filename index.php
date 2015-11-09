<?php


include_once('class-anno.php');

$anno = new Anno();


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php"><img class="the-logo" style="top: -3px; position:relative;" src="img/anno_logo.png" height="30"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.php?page=settings">Settings</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <?php

    if($anno->page=='explore'){



        ?>

        <section id="services">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="track-con">
                            <div class="thumb-con">
                                <i class="fa fa-music"></i>
                            </div>

                            <div class="track-overflow">

                                <div>00:00 / 03:00</div>
                                <div class="track-preview"></div>

                                <div class="track-meta">
                                <h3><a href="index.php?page=track&track_id=1">Title</a></h3>
                                <h5>Authors</h5>
                                </div>
                                <div class="tracks-tags-con">
                                    <div class="tag">#code</div>
                                    <div class="tag">#creative</div>
                                    <div class="tag">#tremors</div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>


                        <div class="track-con">
                            <div class="thumb-con">
                                <i class="fa fa-music"></i>
                            </div>

                            <div class="track-overflow">

                                <div>00:00 / 03:00</div>
                                <div class="track-preview"></div>

                                <h3><a href="index.php?page=track&track_id=1">Title</a></h3>
                                <h5>Authors</h5>
                            </div>
                        </div>

                        <div class="track-con">
                            <div class="thumb-con">
                                <i class="fa fa-music"></i>
                            </div>

                            <div class="track-overflow">

                                <div>00:00 / 03:00</div>
                                <div class="track-preview"></div>

                                <h3><a href="index.php?page=track&track_id=1">Title</a></h3>
                                <h5>Authors</h5>
                            </div>
                        </div>

                        <div class="track-con">
                            <div class="thumb-con">
                                <i class="fa fa-music"></i>
                            </div>

                            <div class="track-overflow">

                                <div>00:00 / 03:00</div>
                                <div class="track-preview"></div>

                                <h3><a href="index.php?page=track&track_id=1">Title</a></h3>
                                <h5>Authors</h5>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>

        <section>

            <div class="container"><div class="row">
                    <div class="col-md-12">

                        <div style="max-width: 400px;">
                        <h2>Add new Track</h2>

                        <br>
                        <h4>Track title</h4>
                        <input class="form-control" type="text" name="title"/>
                            <br>
                        <h4>Track MP3</h4>
                            <div style="float:right; margin-left: 10px;">

                                <button class="btn-info">Upload</button>
                            </div>
                            <div style="overflow: hidden;">

                                <input class="form-control" type="text" name="source"/>
                            </div>
                            <div class="clear"></div>

                            <br>

                            <h4>Track OGG</h4>
                            <div style="float:right; margin-left: 10px;">

                                <button class="btn-info">Upload</button>
                            </div>
                            <div style="overflow: hidden;">

                                <input class="form-control" type="text" name="source_ogg"/>
                            </div>
                            <div class="clear"></div>


                        </div>
                    </div>
                </div>

            </div>
        </section>


    <?php
    }



    if($anno->page=='track'){

        ?>

        <section id="services">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="track-con">
                            <div class="thumb-con">
                                <i class="fa fa-music"></i>
                            </div>

                            <div class="track-overflow">

                                <div>00:00 / 03:00</div>
                                <div class="track-preview"></div>

                                <div class="track-meta">
                                    <h3><a href="index.php?page=track&track_id=1">Title</a></h3>
                                    <h5>Authors</h5>
                                </div>
                                <div class="tracks-tags-con">
                                    <div class="tag">#code</div>
                                    <div class="tag">#creative</div>
                                    <div class="tag">#tremors</div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-6">

                        <h3>Location</h3>

                        <br>
                        <iframe
                            width="100%"
                            height="350"
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/view?key=AIzaSyAbL5Ski0Bl-Uy6MSYkCE_m1IRMv1wZnmU&center=-33.8569,151.2152&zoom=12&maptype=satellite" allowfullscreen>
                        </iframe>

                    </div>

                    <div class="col-md-6">

                        <h3>Other Data</h3>

                        <br>

                        <h6>Contributing Artists</h6>
                        <p>Rihanna, Lil Wayne</p>

                        <h6>Attached Photos</h6>
                        <p>

                            <img src="http://lorempixel.com/200/200/animals"/>

                            <img src="http://lorempixel.com/200/200/sports"/>
                        </p>


                        <h6>Video Clips</h6>
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/Ps8aUmaOGQ4" frameborder="0" allowfullscreen></iframe>


                    </div>
                </div>

            </div>
        </section>


        <section>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h2><a class="btn-danger" href="#" class="btn-edit-for-track">Edit</a></h2>


                        <div class="edit-track-con" style="max-width: 400px;">

                            <br>
                            <h4>Track title</h4>
                            <input class="form-control" type="text" name="title"/>
                            <br>
                            <h4>Track MP3</h4>
                            <div style="float:right; margin-left: 10px;">

                                <button class="btn-info">Upload</button>
                            </div>
                            <div style="overflow: hidden;">

                                <input class="form-control" type="text" name="source"/>
                            </div>
                            <div class="clear"></div>

                            <br>

                            <h4>Track OGG</h4>
                            <div style="float:right; margin-left: 10px;">

                                <button class="btn-info">Upload</button>
                            </div>
                            <div style="overflow: hidden;">

                                <input class="form-control" type="text" name="source_ogg"/>
                            </div>
                            <div class="clear"></div>


                            <br>
                            <h4>Location Coordinates</h4>
                            <input class="form-control" type="text" name="title"/>
                            <br>
                        </div>
                    </div>
                </div>




            </div>
        </section>



    <?php

    }



    if($anno->page=='settings'){

        ?>

        <section id="settings">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">


                        <h4>Google Maps API KEY</h4>
                        <input class="form-control" type="text" name="title"/>
                        <br>

                        <a href="#" class="btn-primary">Export Data JSON</a>

                    </div>
                </div>



            </div>
        </section>






        <?php

    }


    ?>





    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Anno</h2>
            </div>
        </div>
    </aside>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
