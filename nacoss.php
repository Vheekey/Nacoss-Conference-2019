<!DOCTYPE html>
<html>
    <head>
        <!-- css files -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mdb.css">
        <link rel="stylesheet" href="css/mdb.min.css">

        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:800|Open+Sans:600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Asap|Open+Sans:800&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- js files -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mdb.js"></script>
        <script src="js/mdb.min.js"></script>
        <script src="js/popper.min.js"></script>
    </head>
    
    <style>

        
        .firstRow{
            background-image: url('images/firstRow.png');
            color:white;
            font-family: 'Nunito', sans-serif;
            padding-bottom: 17%;
            /* font-family: 'Open Sans', sans-serif; */
        }

        .capitals{    
            font-family: 'Open Sans', sans-serif;
            /* font-family: 'Asap', sans-serif; */
        }

        .colo{
            font-family: 'Nunito', sans-serif;
            /* font-family: 'Open Sans', sans-serif; */
            color: white;
        }

        #rcorners2 {
            border-radius: 25px;
            border: 2px solid #5B86E5;
            padding: 2px 22px 2px 22px;
            width: 150%;
        }

        #title{
            margin-top: 3%;
            padding-top: 10%;
            text-align: center;
            font-weight: 900;
            font-family: 'Asap', sans-serif;
            font-family: 'Open Sans', sans-serif;
            
        }

        #roles{
            font-size: 30px; 
            font-weight: 500; 
            text-align: center; 
            margin-bottom: 3%;
        }

        .colora{
            color: #5B86E5;
            font-size: 30px;
        }

        #signing {
            border-radius: 25px;
            border: 2px solid #5B86E5;
            background: linear-gradient(-180deg, #36d1dc 0%, #5b86e5 100%);
            padding: 4px 40px 4px 40px;
            font-size: 25px;
            text-align: center;
            height:40px;
            /* margin-left: 100px; */
        }

        .secondRow{
            padding-top: 7%;
            margin-bottom: 5%;
            font-family: 'Nunito', sans-serif;
            scroll-behavior: smooth;
            /* font-family: 'Open Sans', sans-serif; */
        }

        .prow{
            font-size: 1.5em; 
            font-weight: bold;
            font-family: 'Nunito', sans-serif;
            /* font-family: 'Open Sans', sans-serif; */
        }

        #thirdRow{
            background-image: url('images/third.png');
            color:white;
            font-family: 'Nunito', sans-serif;
            scroll-behavior: smooth;
            /* font-family: 'Open Sans', sans-serif; */
        }

        #about{
            padding-top: 15%;
            padding-bottom: 20%;
        }

        #benefits{
            padding-top: 10%;
            padding-bottom: 15%;
        }

        .fourthRow{
            padding-top: 7%;
            padding-bottom: 14%;
            font-family: 'Nunito', sans-serif;
            /* font-family: 'Open Sans', sans-serif; */
        }
        .sixthRow{
            padding-top: 15%;
            padding-bottom: 20%;
            font-family: 'Nunito', sans-serif;
            scroll-behavior: smooth;
            /* font-family: 'Open Sans', sans-serif; */
        }

        #fifthRow{
            background-image: url('images/second.png');
            color:white;
            font-family: 'Nunito', sans-serif;
            /* font-family: 'Open Sans', sans-serif; */
        }

        ul li::before {
            content: "\2022";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
            color: #5B86E5;; /* Change the color */
            font-weight: 900; /* If you want it to be bold */
            display: inline-block; /* Needed to add space between the bullet and the text */
            font-size: 2.5em;
            width: 1.5em; /* Also needed for space (tweak if needed) */
            margin-left: -1em; /* Also needed for space (tweak if needed) */
            
        }

        ul {
            list-style: none;
        }

        .open{
            display: block;
        }

        #timing{
            z-index:1; 
            position:fixed;
            text-align: center;
            padding-left: 2%;
            padding-right:2%;
        }

        /* .nav-item{
            background-color: solid black !important;
            z-index: 1;
        } */

        @media screen and (min-width: 0px) and (max-width: 900px) {
            #mobileNav { position: absolute; z-index: 1; }  /* show it on small screens */
            #pcNav { display: none; }  /* show it on small screens */
            .navbar-toggler {  display: flex; }
            #home{ padding-top: 2%;}
            #title{ padding-top: 15%;}
            #mobileNav .navbar{ z-index: 1; position: fixed; }
            /* .nav-item{ margin-top: -20%; } */
            .nav-item{ margin-top: 0px; }
            #timing{
            z-index:1; 
            position:fixed;
            text-align: center;
            /* padding-left: 2%;
            padding-right:2%; */
            width:100%;
            /* height:10px; */
        }
        }
        @media screen and (min-width: 901px) and (max-width: 1000px) {
            .container #title { padding-top: 25%; }
            #prizes { padding-top: 10%; }
            #how-to-participate { padding-top: 10%; }
            .nav-item{ margin-top: 0px; }
            #timing{
            z-index:1; 
            position:fixed;
            text-align: center;
            /* padding-left: 2%;
            padding-right:2%; */
            /* width:100%; */
            /* height:10px; */
        }
        }

        @media screen and (min-width: 901px) and (max-width: 1024px) {
            #mobileNav { display: none; }   /* hide it elsewhere */
            #pcNav { display: inline-block; }   /* hide it elsewhere */
            #timing{
            z-index:1; 
            position:fixed;
            text-align: center;}
        }
    </style>
    <body>
        <div id="home" class="colo firstRow">
            <div id="pcNav" class="container-fluid">
                <nav class="navbar nav-dark bg-dark text-white navbar-expand-lg fixed-top">
                        <a class="navbar-brand" href="https://www.voguepay.com"><img src="images/voguepayLogo-white.png" width="50%"></a>
                        <div class="my-2 my-lg-0 ml-auto ">
                            <a href="#home" class="my-2 my-sm-0 ml-3 colo scroll">Home</a>
                            <a href="#prizes" class="my-2 my-sm-0 ml-5 colo scroll">Prizes</a>
                            <a href="#about" class="my-2 my-sm-0 ml-5 colo scroll">About</a>
                            <a href="#how-to-participate" class="my-2 my-sm-0 ml-5 colo scroll">How to participate</a>
                            <a href="#benefits" class="my-2 my-sm-0 ml-5 colo scroll">Benefits</a>
                            <a href="#contact" class="my-2 my-sm-0 ml-5 colo scroll">Contact</a>
                            <a data-toggle="modal" data-target="#registrationType" class="my-2 my-sm-0 ml-5 colo scroll" id="rcorners2">Sign Up</a>
                        </div>
                </nav>
            </div>

            <div id="mobileNav">
                <nav class="navbar navbar-dark bg-dark navbar-1 dark " >
                    <!-- <a class="navbar-brand" href="https://www.voguepay.com"><img src="images/voguepayLogo-white.png" width="50%"></a> -->

                        <!-- Collapse button -->
                    <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent15"
                    aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation" ><span class="navbar-toggler-icon"></span></button>
                <!--Navbar-->
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent15">
                
                    <!-- Links -->
                    <ul class="navbar-nav mr-auto droppy" style="background-color: black;" >
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prizes">Prizes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how-to-participate">How to participate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#benefits">Benefits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#registrationType" >Sign Up</a>
                    </li>
                    </ul>
                    <!-- Links -->
                
                </div>
                <!-- Collapsible content -->
                </nav>
            </div>
            
            <div class="container" style="">
                <div id="title">
                    <h1 style="font-size: 2.5em; font-weight:900; text-shadow: 1px 0 #888888; letter-spacing:1px; color: #5B86E5;" class="capitals">
                        CONTEMPORARY TECHNOLOGY ECOSYSTEM: </h1>
                </div>

                <div id="roles"> Role of Student Developers</div>

                <div class="row text-center" style="padding-bottom: 5%;">
                    <div class="col-md-3">
                        <span class="colora">Date</span>
                        <span class="colo"><h4> 28th-31st August, 2019 </h4></span>
                    </div>
                    <div class="col-md-1 hidden-xs" style="border-left:1px solid white; height:40px"></div>
                    <div class="col-md-4">
                        <span class="colora">Venue</span>
                        <span class="colo"><h4> Baze University, Abuja. FCT. </h4></span>
                    </div>
                    <div class="col-md-1 hidden-xs" style="border-right:1px solid white; height:40px"></div>
                    <div class="col-md-3">
                        <span class="colora">Time</span>
                        <span class="colo"><h4> 10am </h4></span>
                    </div>
                </div>

                   
                <div class="col-sm-12" style="text-align: center">
                    <a data-toggle="modal" data-target="#registrationType" style="color:white;"><span id="signing" >Sign Up</span></a>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-12 offset-md-7" id="timing" style="font-size: 150%; font-weight:900; height:100%; text-shadow: 1px 0 #888888; letter-spacing:1px; color: white;  background-color: black;" class="capitals"> </div>
                </div>
               

                <!-- <div class="row d-flex justify-content-center mx-auto" style="padding-bottom: 17%;">
                    <span id="" class="col-md-4"></span>
                    <a data-toggle="modal" data-target="#registrationType" style="color:white;"><span id="signing" class="col-md-3 mx-auto pl-5">Sign Up</span></a>
                    <span id="" class="col-md-5"></span>
                </div> -->
            </div>
        </div>
        <div id="prizes" class="secondRow animated fadeIn">
            <div class="container justify-content-center" id="">
                <div style="font-size: 2.5em; font-weight:900; text-shadow: 2px 0 #888888; letter-spacing:1px; padding-bottom: 2%;" class="text-center text-dark"> 
                    Why Sign Up? 
                </div>

                <div class="text-center text-dark prow" >
                    Showcase your business idea, software and IT prowess and <br>
                     stand a chance to win amazing prices
                </div>

                <div class="row" style="margin-top:3%">
                    <div class="col-md-4 text-center justify-content-center" style="margin-top:5%;">
                        <span class="text-center text-dark prow" style="margin-bottom: 1%"> <h2> 2nd Prize </h2> </span>
                        <div class="card mx-auto" style="width:80%;" >
                                <div class="card-body">
                            <img class="img-fuid mx-auto d-block" src="images/second-prize.png" alt="second prize" width="150"  >
                            <h2 class="card-title prow">N75,000</h2>
                            
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 text-center justify-content-center">
                            <span class="text-center text-dark prow" style="margin-bottom: 1%"> <h2> 1st Prize </h2> </span>
                            <div class="card mx-auto" style="width:95%;" >
                                    <div class="card-body">
                                <img class="img-fuid mx-auto d-block" src="images/first-prize.png" alt="first prize" width="100%"  >
                                <h2 class="card-title prow">N100,000</h2>
                                <span style="line-height: 2em;"> with Startup <br> concept and <br> investment possibility</span>                                    
                                </div>
                            </div>
                    </div>

                    <div class="col-md-4 text-center justify-content-center" style="margin-top:5%;">
                            <span class="text-center text-dark prow" style="margin-bottom: 1%"> <h2> 3rd Prize </h2> </span>
                            <div class="card mx-auto" style="width:80%;" >
                                    <div class="card-body">
                                <img class="img-fuid mx-auto d-block" src="images/third-prize.png" alt="third prize" width="150"  >
                                <h2 class="card-title prow">N50,000</h2>
                                                                 
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div id="thirdRow">
            <div class="container text-center animated fadeIn" id="about">
                <h3 style="font-size: 3em; font-weight:900; color:#5B86E5;" class="mt-4 mb-3" >About Software Exhibition</h3>
                <p></p>
                <span style="line-height: 2em; font-size: 22px; font-weight: bold;" class="">This contest is designed to showcase and unleash the entrepreneurial skills of Computer Science <br> Students in Nigeria 
                    as part of Voguepay and estore's corporate social responsibility, in partnership <br>
                    with National Association of Computer Science Students (NACOSS).</span>
            </div>
        
        </div>
        <div id="how-to-participate" class="fourthRow">
            <div class="container">
                <div style="font-size: 3em; font-weight:900; text-shadow: 2px 0 #888888; letter-spacing:1px; padding-bottom: 2%;" class="text-center text-dark"> 
                        How to Participate 
                    </div>
                <div class="row text-center justify-content-center" >
                    <div class="col-md-4 mx-auto">
                        <img src="images/Problem-Identity-Icon.png" alt="identify problem"/>
                        <p style="margin-top:5%; margin-bottom: 7%">
                            <span style="font-weight: 900; font-size: 25px;"> <strong> Problem <br> Identity </strong></span>
                        </p>
                        <p> <span style="line-height: 1.5em; font-size: 20px;"> State the problem you <br> want to solve </span></p>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <img src="images/Research-Methodology-Icon.png" alt="Research Methodology"/>
                        <p style="margin-top:5%; margin-bottom: 7%">
                            <span style="font-weight: 900; font-size: 25px;"> <strong> The <br> Methodology </strong></span>
                        </p>
                        <p> <span style="line-height: 1.5em; font-size: 20px;"> Show the approach you <br> are using to solve the <br> problem </span></p>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <img src="images//Revenue-Generation-Icon.png" alt="Revenue Generation"/>
                        <p style="margin-top:5%; margin-bottom: 7%">
                            <span style="font-weight: 900; font-size: 25px;"> <strong> Revenue <br> Generation </strong></span>
                        </p>
                        <p> <span style="line-height: 1.5em; font-size: 20px;"> Indicate how your solution <br> will generate revenue </span></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="fifthRow">
            <div class="container text-center" id="benefits">
                <h3 style="font-size: 3em; font-weight:900; color:#5B86E5;" class="mt-4 mb-3" class="capitals">Benefits</h3>
                <p></p>
                <span style="line-height: 2em; font-size: 18px;" class="">Solutions built on VoguePay & eStore payment API will enjoy <br>
                    additional benefits which include</span>
                
                    <div class="row" style="margin-top:3%;">
                        <div class="col-md-4 mx-auto">
                            <span style="line-height: 1.5em; font-size: 1.2em;">
                                <ul>
                                    <li><span class="text-center"> Earn 30% commission on <br> every transaction when <br> deployed. </span></li>
                                </ul>
                            </span>
                        </div>
                        <div class="col-md-4 mx-auto">
                            <span style="line-height: 1.5em; font-size: 1.2em;">
                                <ul>
                                    <li><span class="text-center"> Listing VoguePay official <br> developer directory. </span></li>
                                </ul>
                            </span>
                        </div>
                        <div class="col-md-4 mx-auto">
                            <span style="line-height: 1.5em; font-size: 1.2em;">
                                <ul>
                                    <li><span class="text-center"> Free press coverage & other <br> media announcements. </span></li>
                                </ul>
                            </span>
                        </div>
                    </div>
                
            </div>
        </div>
        <div id="contact" class="sixthRow">
            <div class="row text-center" >
                <div class="col-md-4"></div>
                <div class="col-md-4">
                        <img src="images/Voguepay-homeB.png" class="img-fluid" alt="voguepay logo" width="50%">
                        <span class="hidden-xs ml-2 mr-4" style="border-right:2px solid gray; height:40%; position: absolute;"></span>
                        <img src="images/estore-logo.png" class="img-fluid" alt="estore logo" width="30%" style="margin-left: 7%;">
                        <p></p>
                        <span style="line-height: 1.5em; font-size: 1.2em; margin-top: 10%;">
                            33A, Abba Johnson Crescent, Akora Estate, <br>
                            Off Adeniyi Jones, Ikeja, <br>
                            Lagos State. Nigeria.
                        </span>
                        
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>



        <div class="container">
            <!-- Choose Registration Type Modal -->
            <div class="modal fade" id="registrationType" tabindex="-1" role="dialog" aria-labelledby="regLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content justify-content-center text-center">
                <div class="modal-header">
                <h4 class="modal-title w-100 capitals text-primary" id="regLabel" style="font-size: 1.5em; font-weight:bold;">Software Exhibition Hack 2019</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body" style="font-family: 'Nunito', sans-serif;">
                    <h4 style="line-height: 1.5em; font-size: 1.2em; margin-top: 2%; margin-bottom: 3%;"> Choose Registration type </h4> 
                    <p>
                        <button class="btn btn-lg" data-toggle="modal" data-target="#fullHeightModalRight">Individual</button>
                        <button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#teamMpdal">Team</button>
                    </p>
                </div>
                <div class="modal-footer">
                
                </div>
            </div>
            </div>
            </div>
            <!-- closing -->

            

            <!-- Team Modal -->
            <div class="modal fade" id="teamMpdal" tabindex="-1" role="dialog" aria-labelledby="teamLab"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content justify-content-center text-center mxauto ml-2 mr-2 pl-5 pr-5">
                <div class="modal-header">
                <h4 class="modal-title w-100 capitals text-primary" id="teamLab" style="font-size: 1.5em; font-weight:bold;">Create A Team</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body" style="font-family: 'Nunito', sans-serif;">
                    <h4 style="line-height: 1.5em; font-size: 1.2em; margin-top: 2%; margin-bottom: 3%;"> Team Name </h4> 
                    <form action="" method="post">
                        <div class="md-form">
                            <input type="text" id="teamName" class="form-control validate" placeholder="Input Team Name" required>
                        </div>
                        <input type="submit" value="Create" class="btn btn-lg btn-dark" name=createTeam>
                    </form>
                    Already in team? <a id="teamSign" data-toggle="modal" data-target="#fullHeightModalRight" class="text-primary" id="rcorners2">Sign Up here</a>
                </div>
                <div class="modal-footer">
                
                </div>
            </div>
            </div>
            </div>
            <!-- closing -->

            <!-- Individual Modal -->
            <div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-full-height modal-right modal-lg" role="document">

                <div class="modal-content mxauto justify-content-center ml-2 mr-2 pl-5 pr-5">
                    <div class="modal-header">
                    <h4 class="modal-title w-100 text-primary" id="myModalLabel" style="font-size: 2em; font-weight:bold;">
                        Software Exhibition Registration
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body" style="line-height: 1.5em; font-size: 1.2em; margin-top: 2%; margin-bottom: 3%; font-family: 'Nunito', sans-serif;">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-2"> <label for="">Team Name</label> </div>
                                <div class="col-md-10">
                                        <input type="text" name="teamName" id="teamName" class="form-control validate" placeholder="Team Name (if you are part of a team else type None)" value="None">     
                                </div>
                            </div>
                                <!-- <label for="">Team Name</label> -->
                                <!-- <div class="md-form mb-5">
                                    <i class="fa fa-users prefix grey-text"></i>
                                    <input type="text" id="teamName" class="form-control validate" placeholder="Team Name (if you are part of a team)" value="None">
                            </div> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" id="paName" name="paName" class="form-control validate" placeholder="Name Of Participant" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-envelope prefix grey-text"></i>
                                        <input type="email" name="paEmail" id="paEmail" class="form-control validate" placeholder="Your Email Address" required>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-mobile prefix grey-text"></i>
                                        <input type="number" name="paPhone" id="paPhone" class="form-control validate" placeholder="Your Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-user-circle-o prefix grey-text"></i>
                                        <input type="number" name="paAge" id="paAge" class="form-control validate" placeholder="Your Age" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-form mb-5">
                                        <select class="browser-default custom-select" name="gend" required>
                                            <option value="">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="md-form mb-5">
                                <i class="fa fa-graduation-cap prefix grey-text"></i>
                                <input type="text" name="paSchool" id="paSchool" class="form-control validate" placeholder="Your School" required>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-certificate prefix grey-text"></i>
                                        <input type="text" name="paCourse" id="paCourse" class="form-control validate" placeholder="Your Field of Study" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="md-form mb-5">
                                        <select class="browser-default custom-select" name="level" required>
                                            <option value="">Choose Level</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500">500</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Type Of Project</label>
                                    <div class="md-form mb-5">
                                        <select class="browser-default custom-select" name="project" required>
                                            <option value="New">New</option>
                                            <option value="Existing">Existing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Select Category</label>
                                    <div class="md-form mb-5">
                                        <select class="browser-default custom-select" required onchange="changecat(this.value);" name="cat" id="cat">
                                            <option value=""></option>
                                            <option value="A">Category A (MOBILE TECHNOLOGY APPLICATIONS AND SOLUTIONS)</option>
                                            <option value="B">Category B (LAND REFORM & CADSTRAL APPLICATIONS SOLUTIONS)</option>
                                            <option value="C">Category C (EDUCATIONAL SOLUTIONS)</option>
                                            <option value="D">Category D (BUSINESS SOLUTIONS)</option>
                                            <option value="E">Category E (PUBLIC SECTOR SOLUTIONS)</option>
                                            <option value="F">Category F (WEB SOLUTIONS)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Select Subcategory</label>
                                    <div class="md-form mb-5">
                                        <select class="browser-default custom-select" required name="subcat" id="subcat">
                                            <option value="" disabled selected></option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-tasks prefix grey-text"></i>
                                        <input type="text" name="paTitle" id="paTitle" class="form-control validate" placeholder="Title of Project" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-link prefix grey-text"></i>
                                        <input type="text" id="paLink" name="paLink" class="form-control validate" placeholder="Useful link if any">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-eye prefix grey-text"></i>
                                        <input type="text" id="paProblem" name="paProblem" class="form-control validate" placeholder="Problem identified" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-wrench prefix grey-text"></i>
                                        <input type="text" id="paIdentified" name="paIdentified" class="form-control validate" placeholder="Solution proferred" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description">Project Description (In not more than 500 words)</label>
                                <textarea class="form-control" name="description" id="description" rows="5" required></textarea>
                              </div>
                            
                            <input type="submit" name="regButton" value="Register" class="btn btn-md btn-primary float-right">
                        </form>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-md btn-dark float-right" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
                </div>
            <!-- Full Height Modal Right -->
            
        </div>

        <script>
            $(document).ready(function(){
                let scroll_link = $('.scroll');

                //smooth scrolling -----------------------
                scroll_link.click(function(e){
                    e.preventDefault();
                    let url = $('body').find($(this).attr('href')).offset().top;
                    $('html, body').animate({
                        scrollTop : url
                    },700);
                    $(this).parent().addClass('active');
                    $(this).parent().siblings().removeClass('active');
                    return false;	
                });

                // $("#teamSign").click(function(){
                //     $('#teamMpdal').modal('hide');
                //     $('#fullHeightModalRight').modal('show');
                // });

                $(document).click(function(e) {
                    if (!$(e.target).is('.droppy')) {
                        $('.collapse').collapse('hide');	    
                    }
                });
            });

                window.onload = countDate("2019-08-28 00:00:00", "timing");
                function countDate(dateq, id) {
                    var countDownDate = new Date(dateq).getTime();        // Update the count down every 1 second
                    var x = setInterval(function () {            // Get todays date and time
                        var now = new Date().getTime();            // Find the distance between now an the count down date
                        var distance = countDownDate - now;            // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);            // Display the result in the element with id="demo"
                        document.getElementById(id).innerHTML = "<span class='text-center'><i class='fa fa-clock-o'></i>" + " " + days + "Days: " + hours + "Hrs: "
                            + minutes + "Min: " + seconds + "Sec </span>";            // If the count down is finished, write some text
                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementById(id).innerHTML = "EXPIRED";
                            // $('#box'+id).removeClass('bg-green');
                            // $('#box'+id).addClass('bg-red');
                            // $('#draw'+id).show();
                //                document.getElementById('box'+id).style.backgroundColor = "red";
                        }
                    }, 1000);
                }

                

                // $('.navbar-toggler').hover(function(){
                //     $("navbar-toggler").css({
                //         'border':'1px solid cyan'
                //      });
                //      $(".droppy").addClass("open");
                // });
                var selectCategory = {
                                        A: ["m-Agriculture", "m-Government", "m-Learning", "m-Entertainment"],
                                        B: ["National Database Application For Land and Distribution", "e-Agriculture, e-Farming and Food Security Solutions"],
                                        C: ["Edutainment, Tourism and Multimedia Solutions.", "e-Campus Solutions", "Nigerian Lessons and Online Solutions", "e-Learning – Digital Tour Solutions"],
                                        D: ["Business Intelligence Solutions", "e-Project Management", "e-Workflow & Document Management", "Nigerian Games On-line Solutions", "Games and Entertainment Solutions"],
                                        E: ["National Security Database Solution", "JuiClimate Change & Green Tech. Solutions", "Nigerian Food Database Solutions", "State and Community CERT Solutions", 
                                            "Nigerian Local Language Translator Solution","e-Elections Solutions","State e-Government Portal Solutions","e-Health Information Management Solutions","Airport Database and Security Solutions",
                                            "Environmental Modeling Solutions","Digital Entertainment Solutions","Justice & Court Proceedings Applications", "Public Building Development & Regulation Applications"],
                                        F: ["e-Commerce Solutions", "Online Collaboration Services", "Online Helpdesk Solutions", "LAMP Server Based Solutions", 
                                            "Virtual Learning Environments", "Online Survey Solutions","Online Recruitment Solutions","Online File Sharing Solutions",
                                            "Cloud Solutions","Online Communication Solutions","Online Tools (Any Kind of Online Service Tool)"]
                                    }
                function changecat(value) {
                    alert('grrr');
                    if (value.length == 0) document.getElementById("subcat").innerHTML = "<option></option>";
                    else {
                        var catOptions = "";
                        for (var categoryId in selectCategory[value]) {
                            catOptions += "<option>" + selectCategory[value][categoryId] + "</option>";
                        }
                        document.getElementById("subcat").innerHTML = catOptions;
                    }
                }
                
        </script>
    </body>
</html>