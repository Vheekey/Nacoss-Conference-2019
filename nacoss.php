<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- css files -->
        <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="[webpath]css/mdb.css">
        <link rel="stylesheet" href="[webpath]css/mdb.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.css">

        <!-- font -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:800|Open+Sans:600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Asap|Open+Sans:800&display=swap" rel="stylesheet"> -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- js files -->
        <script src="[webpath]js/jquery-3.4.1.min.js"></script>
        <!-- <script src="js/bootstrap.js"></script> -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="[webpath]js/mdb.js"></script>
        <script src="[webpath]js/mdb.min.js"></script>
        <script src="[webpath]js/popper.min.js"></script>
        <script src="[webpath]js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
        <title>Software Exhibition</title>

    </head>
    
    <style>

        @font-face {
        font-family: "Futura";
        src: url("fonts/Futura_Heavy_font.ttf");
        }

        @font-face {
            font-family: 'Futura LT Bold';
            src: url("fonts/FuturaLT-Bold.ttf")
        }
        
        .firstRow{
            background-image: url('[webpath]images/firstRow.png');
            color:white;
            font-family: 'Futura', sans-serif;
            padding-bottom: 10%;
        }

        .capitals{    
            font-family: 'Futura LT Bold';
        }

        .colo{
            font-family: 'Futura', sans-serif;
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
            font-family: 'Futura', sans-serif;            
        }

        #roles{
            font-size: 30px; 
            font-weight: 500; 
            text-align: center; 
            margin-bottom: 3%;
        }

        .colora{
            color: #36D1DC;
            font-size: 30px;
        }

        #signing {
            border-radius: 25px;
            background: linear-gradient(-180deg, #36d1dc 0%, #5b86e5 100%);
            padding: 4px 40px 4px 40px;
            font-size: 25px;
            text-align: center;
            height:40px;
        }

        .secondRow{
            padding-top: 7%;
            margin-bottom: 5%;
            font-family: 'Futura', sans-serif;
            scroll-behavior: smooth;
        }

        .prow{
            font-size: 1.5em; 
            font-weight: normal;
            font-family: 'Futura', sans-serif;
        }

        #thirdRow{
            background-image: url('[webpath]images/third.png');
            color:white;
            font-family: 'Futura', sans-serif;
            scroll-behavior: smooth;
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
            font-family: 'Futura', sans-serif;
        }

        .sixthRow{
            padding-top: 5%;
            padding-bottom: 10%;
            font-family: 'Futura', sans-serif;
            scroll-behavior: smooth;
        }

        #fifthRow{
            background-image: url('[webpath]images/second.png');
            color:white;
            font-family: 'Futura', sans-serif;
        }

       

        ul {
            list-style: none;
        }

        .open{
            display: block;
        }

        

        #hidden_div {
                display: none;
            }

       

        @media screen and (min-width: 0px) and (max-width: 1000px) {
            #mobileNav { position: absolute; z-index: 500;}  /* show it on small screens */
            #pcNav { display: none; }  /* show it on small screens */
            .navbar-toggler {  display: flex; }
            #home{ padding-top: 2%;}
            #title{ padding-top: 15%; }
            .heading{ font-size: 2em!important;}
            #mobileNav .navbar{ z-index: 1; position: fixed; }
            #timing{
            color: white !important;
           
            width:100% !important;
            text-align: right !important;
        }

            .scrolling {
            white-space: nowrap;
            overflow-x: auto; 
            -webkit-overflow-scrolling: touch;
            }

            #hidden_div {
                display: none;
            }

            .scrollable-menu {
                height: auto;
                /* max-height: 500px; */
                overflow-x: hidden;
            }
            
            .sixthRow{
                padding-bottom : 20%;
            }

            #stylus{
            font-size: 1em; text-align: right; position: relative;
            position: relative !important;
            top: -680px !important;
            right: 1px !important;
        }
        }
        
            @media screen and (min-width: 1000px) and (max-width: 1000px) {
                .container #title { padding-top: 25%; }
                #prizes { padding-top: 10%; }
                #how-to-participate { padding-top: 10%; }
                .nav-item{ margin-top: 0px; }
                
       
        }

        @media screen and (min-width: 1000px){
            #mobileNav { display: none; }   /* hide it elsewhere */
            .mobiletime { display: none; }   /* hide it elsewhere */
            #pcNav { display: inline-block; }   /* hide it elsewhere */
            #timing{
            z-index: 500 !important; 
            position:fixed !important;
            text-align: right !important;
            bottom: 1px !important;
            right: 5px !important;
            font-size: 1em !important; 
            font-weight:bold !important; 
            text-shadow: 1px 0 #888888 !important; 
            letter-spacing:1px;
            color: #36D1DC;
            padding:15px !important;
        }

        #stylus{
            font-size: 1.5em !important; text-align: right !important; z-index: 1 !important; position: fixed !important;
        }
    }
    </style>
    <body>
        <div id="home" class="colo firstRow">
            <div id="pcNav" class="container-fluid">
                <nav class="navbar nav-dark bg-dark text-white navbar-expand-lg fixed-top" class=".d-md-none .d-lg-block">
                        <a class="navbar-brand" href="https://www.voguepay.com"><img src="[webpath]images/voguepayLogo-white.png" width="70%"></a>
                        <div class="my-2 my-lg-0 ml-auto ">
                            <a href="#home" class="my-2 my-sm-0 ml-4 colo scroll">Home</a>
                            <a href="#prizes" class="my-2 my-sm-0 ml-4 colo scroll">Prizes</a>
                            <a href="#about" class="my-2 my-sm-0 ml-4 colo scroll">About Exhibition</a>
                            <a href="#how-to-participate" class="my-2 my-sm-0 ml-4 colo scroll">How to participate</a>
                            <a href="#benefits" class="my-2 my-sm-0 ml-4 colo scroll">Benefits</a>
                            <a href="#gallery" class="my-2 my-sm-0 ml-4 colo scroll">Gallery</a>
                            <a href="#contact" class="my-2 my-sm-0 ml-4 colo scroll">Contact</a>
                            <a data-toggle="modal" data-target="#fullHeightModalRight" class="my-2 my-sm-0 ml-4 colo scroll" id="rcorners2">Register</a>
                        </div>
                </nav>
            </div>

            <div id="mobileNav">
                <nav class="navbar navbar-dark bg-dark navbar-1 dark scrolling" >
                    <!-- <a class="navbar-brand" href="https://www.voguepay.com"><img src="[webpath]images/voguepayLogo-white.png" width="50%"></a> -->

                        <!-- Collapse button -->
                    <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent15"
                    aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation" ><span class="navbar-toggler-icon"></span></button>
                <!--Navbar-->
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent15">
                
                    <!-- Links -->
                    <ul class="navbar-nav mr-auto droppy scrollable-menu" role="menu" id="droppy" style="background-color: black;" >
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.voguepay.com">About Voguepay</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prizes">Prizes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Exhibition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how-to-participate">How to participate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#benefits">Benefits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#fullHeightModalRight" >Register</a>
                    </li>
                    </ul>
                    <!-- Links -->
                
                </div>
                <!-- Collapsible content -->
                </nav>
            </div>
            
            <div class="container" style="">
                <div class="row">
                        <!-- <div id="timing" class="rounded-pill bg-transparent mobiletime" style="font-size: 1.2em; font-weight:bold; text-shadow: 1px 0 #888888; letter-spacing:1px; color: white; padding:15px;" class="capitals"> </div> -->
                    </div>
                    <div id="title">
                    <h1 style="font-size: 2.5em; font-weight:900; text-shadow: 1px 0 #888888; letter-spacing:1px; color: #36D1DC;" class="capitals heading">
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

                   
                <div class="col-sm-12" style="text-align: center; padding-bottom: 10%;">
                    <a data-toggle="modal" data-target="#fullHeightModalRight" style="color:white;"><span id="signing" >Register</span></a>
                </div>

                <div class="row" id="stylus">
                    <div id="timing" class="rounded-pill bg-transparent text-primary float-right" style="" class="capitals"> </div>
                </div>
            </div>
        </div>
        <div id="prizes" class="secondRow animated fadeIn">
            <div class="container justify-content-center" id="">
                <div style="font-size: 2.5em; font-weight:bold; letter-spacing:1px; padding-bottom: 2%; font-family: 'Futura';" class="text-center text-dark"> 
                    Why Register? 
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
                            <img class="img-fuid mx-auto d-block" src="[webpath]images/second-prize.png" alt="second prize" width="150"  >
                            <h2 class="card-title prow">N75,000</h2>                                
                            </div>
                        </div>
                        <br>
                    </div>
                    
                    <div class="col-md-4 text-center justify-content-center">
                            <span class="text-center text-dark prow" style="margin-bottom: 1%"> <h2> 1st Prize </h2> </span>
                            <div class="card mx-auto" style="width:95%;" >
                                    <div class="card-body">
                                <img class="img-fuid mx-auto d-block" src="[webpath]images/first-prize.png" alt="first prize" width="100%"  >
                                <h2 class="card-title prow">N100,000</h2>
                                <span style="line-height: 2em;"> with Startup <br> concept and <br> investment possibility</span>                                    
                                </div>
                            </div>
                    </div>

                    <div class="col-md-4 text-center justify-content-center" style="margin-top:5%;">
                            <span class="text-center text-dark prow" style="margin-bottom: 1%"> <h2> 3rd Prize </h2> </span>
                            <div class="card mx-auto" style="width:80%;" >
                                    <div class="card-body">
                                <img class="img-fuid mx-auto d-block" src="[webpath]images/third-prize.png" alt="third prize" width="150"  >
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
                <div style="line-height: 2em; font-size: 1.2em; font-size: normal; font-family: 'Futura', sans-serif;" class="">This contest is designed to showcase and unleash the entrepreneurial skills of Computer Science <br> Students in Nigeria 
                    as part of <a href="https://www.voguepay.com" style="color:white">Voguepay</a> and <a href="https://www.estoresms.com" style="color:white">estore's</a> corporate social responsibility, in partnership <br>
                    with National Association of Computer Science Students (NACOSS).</div>
            </div>
        
        </div>
        <div id="how-to-participate" class="fourthRow">
            <div class="container">
                <div style="font-size: 3em; font-weight:900; text-shadow: 2px 0 #888888; letter-spacing:1px; padding-bottom: 2%;" class="text-center text-dark"> 
                        How to Participate 
                    </div>
                <div class="row text-center justify-content-center" >
                    <div class="col-md-4 mx-auto">
                        <img src="[webpath]images/Problem-Identity-Icon.png" alt="identify problem"/>
                        <p style="margin-top:5%; margin-bottom: 7%">
                            <span style="font-weight: 900; font-size: 25px;"> <strong> Problem <br> Identity </strong></span>
                        </p>
                        <p> <span style="line-height: 1.5em; font-size: 20px;"> State the problem you <br> want to solve </span></p>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <img src="[webpath]images/Research-Methodology-Icon.png" alt="Research Methodology"/>
                        <p style="margin-top:5%; margin-bottom: 7%">
                            <span style="font-weight: 900; font-size: 25px;"> <strong> The <br> Methodology </strong></span>
                        </p>
                        <p> <span style="line-height: 1.5em; font-size: 20px;"> Show the approach you <br> are using to solve the <br> problem </span></p>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <img src="[webpath]images//Revenue-Generation-Icon.png" alt="Revenue Generation"/>
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
                                    <li><span class="text-center"> <i class="fa fa-circle" style="color: #5B86E5; margin-right:10px;"></i> Earn 30% commission on <br> every transaction when <br> deployed. </span></li>
                                </ul>
                            </span>
                        </div>
                        <div class="col-md-4 mx-auto">
                            <span style="line-height: 1.5em; font-size: 1.2em;">
                                <ul>
                                    <li><span class="text-center"> <i class="fa fa-circle" style="color: #5B86E5; margin-right:10px;"></i> Listing VoguePay official <br> developer directory. </span></li>
                                </ul>
                            </span>
                        </div>
                        <div class="col-md-4 mx-auto">
                            <span style="line-height: 1.5em; font-size: 1.2em;">
                                <ul>
                                    <li><span class="text-center"> <i class="fa fa-circle" style="color: #5B86E5; margin-right:10px;"></i> Free press coverage & other <br> media announcements. </span></li>
                                </ul>
                            </span>
                        </div>
                    </div>
                
            </div>
        </div>

        <div id="gallery" class="fourthRow">
            <div class="container">
                    <h3 style="font-size: 3em; font-weight:900; color:black;" class="mt-4 mb-3 text-center" class="capitals">Gallery of Past Events</h3>
                    <p></p>
                <!-- CardOne -->
                <div class="card" style="padding-left: 10%; padding-right: 10%; padding-top: 5%; padding-bottom: 5%; border-radius: 50px 50px 50px 50px">
                        <!-- Card content -->
                            <div class="row">
                                <div class="col-md-3">
                                        <img src="images/Third.png" class="img-fluid img-center" alt="Oso project image"><br>
                                        <h3 class="text-center"><strong>Femi Ayodeji</strong></h3>
                                        <div style="text-align: center"> <small class="" ><em>2018 Winner </em> </small> </div>
                                        
                                </div>
                                <div class="col-md-9" style="margin-top: 5%;">
                                    <h3 class="text-primary"> The Project </h3> <br>
                                    <div style="margin-top:-15px;"> <h5> Oso is a personal assistant chatbot that helps in exams revision </h5> </div>

                                   <small> Oso provides questions both in subjective and objective format that helps users in preparing for examinations and tests. With 
                                    questions from various courses in the University and subjects spanning through various examination bodies including Jamb 
                                    and Tertiary Institution Examination, the bot informs you whether your answer is correct or wrong. This project has a futuristic 
                                    functionality to take question from a user and supply the accurate answer. </small>
                                </div>
                            </div>
                            
                    
                </div>
                    <!-- Card -->

                <!-- CardTwo -->
                <div class="card" style="padding-left: 10%; padding-right: 10%; padding-top: 5%; padding-bottom: 5%; border-radius: 50px 50px 50px 50px; margin-top: 5%">
                        <!-- Card content -->
                            <div class="row">
                                <div class="col-md-9" style="margin-top: 5%; text-align: right">
                                    <h3 class="text-primary"> The Project </h3> <br>
                                    <div style="margin-top:-15px;"> <h5> An m-voting platform for students elections on campus </h5> </div>

                                   <small> The first runner up position went to a team of 2 developers from Ebonyi state university. The team was led by Prince Sunday. <br> 
                                    The solution they presented was an election voting system using an app which replaces normal voting system which is ballot
                                    paper. It manages the entire process of collecting nomination form, screening of candidates and voting.</small>
                                </div>
                                <div class="col-md-3">
                                        <img src="images/Second.png" class="img-fluid img-center" alt="Voting project image"><br>
                                        <h5 class="text-center"><strong>Sunday & Uchenna</strong></h5>
                                        <div style="text-align: center"> <small class="" ><em>1st runner-up </em> </small> </div>
                                        
                                </div>
                            </div>
                            
                    
                </div>
                    <!-- Card -->

                <!-- CardThree -->
                <div class="card" style="padding-left: 10%; padding-right: 10%; padding-top: 5%; padding-bottom: 5%; border-radius: 50px 50px 50px 50px; margin-top: 5%">
                        <!-- Card content -->
                            <div class="row"> 
                                <div class="col-md-3">
                                        <img src="images/First.png" class="img-fluid img-center" alt="Deaf & Dumb project image"><br>
                                        <h5 class="text-center"><strong>Owolabi Abiodun</strong></h5>
                                        <div style="text-align: center"> <small class="" ><em>2nd runner-up </em> </small> </div>
                                        
                                </div>
                                <div class="col-md-9" style="margin-top: 5%;">
                                        <h3 class="text-primary"> The Project </h3> <br>
                                        <div style="margin-top:-15px;"> <h5> A smart communication aid for deaf and dumb people </h5> </div>
    
                                       <small> A smart communication aid that uses micro controller to process gestures to text form. The project will enable persons
                                            hearing disabilities to communicate better in the society, because it is sad for most people with these disabilities to relate and
                                            pass information to others community.</small>
                                </div>
                            </div>
                            
                    
                </div>
                    <!-- Card -->

                <!-- CardFour -->
                <div class="card" style="padding-left: 10%; padding-right: 10%; padding-top: 5%; padding-bottom: 5%; border-radius: 50px 50px 50px 50px; margin-top: 5%">
                        <!-- Card content -->
                            <div class="row">
                                <div class="col-md-6" style="">
                                    <img src="images/Audience.png" class="img-fluid img-center" alt="audience" style="object-fit: cover; width: 100%;">
                                </div>
                                <div class="col-md-6">
                                        <img src="images/HighTable.png" class="img-fluid img-center" alt="Judges" style="width: 100%;">
                                        
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6" style="">
                                    <img src="images/listening.png" class="img-fluid img-center" alt="judges" style="width: 100%;">
                                </div>
                                <div class="col-md-6">
                                        <img src="images/Judges2.png" class="img-fluid img-center" alt="Judges" style="width: 100%;">
                                        
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                        <img src="images/Judges.png" class="img-fluid" alt="Judges" style="object-fit:cover cover; width: 100%;">
                                </div>              
                            </div>
                                                
                </div>
                    <!-- Card -->

               
            </div>
        </div>
        <div id="contact" class="sixthRow">
            <div class="row text-center" >
                <div class="col-md-4"></div>
                <div class="col-md-4">
                        <a href="https://www.voguepay.com"> <img src="[webpath]images/Voguepay-homeB.png" class="img-fluid" alt="voguepay logo" width="50%"> </a> 
                        <span class="hidden-xs ml-2 mr-4" style="border-right:2px solid gray; height:40%; position: absolute;"></span>
                        <a href="https://www.estoresms.com"> <img src="[webpath]images/estore-logo.png" class="img-fluid" alt="estore logo" width="30%" style="margin-left: 7%;"> </a>
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

            

            <!-- Individual Modal -->
            <div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-full-height modal-right modal-lg" role="document" style="max-width:700px !important">

                <div class="modal-content ml-2 mr-2 pl-5 pr-5">
                    <div class="modal-body mxauto justify-content-center" style="line-height: 1.5em; font-size: 1.2em; margin-top: 2%; margin-bottom: 3%; font-family: 'Futura', sans-serif;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title w-100 text-center text-primary" id="myModalLabel" style="font-size: 1.5em; font-weight:bold; margin-bottom:5%;">
                            Software Exhibition Registration
                        </h4>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12"> 
                                    <label for="">Registration Type</label>
                                    <div class="md-form mb-5">
                                        <select class="browser-default custom-select" name="RegType" onchange="showDiv('hidden_div', this);" required>
                                            <option value="Individual">Individual</option>
                                            <option value="Team">Team </option>
                                        </select>
                                    </div>
                                    </div>
                            </div>
                                <div id="hidden_div" class="row">
                                    <div class="col-md-8">
                                                <div class="md-form mb-5">
                                                    <i class="fa fa-users prefix grey-text"></i>
                                                    <input type="text" name="teamName" id="teamName" class="form-control validate" placeholder="Enter Team Name" style="text-transform:uppercase" value="<?php if(isset($_SESSION['teamName'])){ echo $_SESSION['teamName']; }?>">
                                                </div>
                                        </div>
                                        <div class="col-md-4"> <span> or  <button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#teamMpdal">Create Team</button> </span> </div>
                                </div>
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
                                        <input type="text" name="paPhone" id="paPhone" class="form-control validate" placeholder="Phone Number" required pattern="[0-9]{11}" minlength="11" maxlength="12" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-user-circle-o prefix grey-text"></i>
                                        <input type="text" name="paAge" id="paAge" class="form-control validate" placeholder="Age" pattern="[0-9]{2}"  minlength="2" maxlength="2" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57">
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
                                    <label for="">Select <br> Category</label>
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
                                        <input type="url" id="paLink" name="paLink" class="form-control validate" placeholder="Useful link if any">
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
                            
                           <div class='text-center' style="font-size: 2em;"> <input type="submit" name="regButton" value="Register" class="btn btn-md btn-primary rounded-pill w-50"> </div> 
                        </form>
                    </div>

                </div>
                </div>
                </div>
            <!-- Full Height Modal Right -->

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
                <div class="modal-body" style="font-family: 'Futura', sans-serif;">
                    <h4 style="line-height: 1.5em; font-size: 1.2em; margin-top: 2%; margin-bottom: 3%;"> Team Name </h4> 
                    <form action="" method="post">
                        <div class="md-form">
                            <input type="text" id="teamName" name="teamName" class="form-control validate" placeholder="Input Team Name" style="text-transform:uppercase" required>
                        </div>
                        <input type="submit" value="Create" class="btn btn-lg btn-dark" name=createTeam>
                    </form>
                    <!-- Already in team? <a id="teamSign" data-toggle="modal" data-target="#fullHeightModalRight" class="text-primary" id="rcorners2">Register here</a> -->
                </div>
                <div class="modal-footer">
                
                </div>
            </div>
            </div>
            </div>
            <!-- closing -->

            <!-- Success Modal -->
            <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="regLabel"
            aria-hidden="true" >
            <div class="modal-dialog" role="document" >
            <div class="modal-content justify-content-center text-center" style="background: #8bc34a;">
               
                <div class="modal-body" style="font-family: 'Futura', sans-serif; background: #8bc34a; color: white; line-height: 1.5em; font-size: 1.2em;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    <p>
                        <?php echo $successMessage; ?>                    
                    </p>
                </div>
       
            </div>
            </div>
            </div>
            <!-- closing -->

            <!-- Failure Modal -->
            <div class="modal fade" id="failureModal" tabindex="-1" role="dialog" aria-labelledby="regLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content justify-content-center text-center" style="background: #f44336; color: white; line-height: 1.5em; font-size: 1.2em;">
 
                <div class="modal-body" style="font-family: 'Futura', sans-serif; background: #f44336; color: white;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    <p>
                        <?php echo $failureMessage; ?>                    
                    </p>
                </div>
            </div>
            </div>
            </div>
            <!-- closing -->
            
        </div>

    <?php if(isset($successMessage)){
    ?>
      <script> $('#successModal').modal('show'); </script> 
    <?php 
      } 
    
    if(isset($failureMessage)){
    ?>
      <script> $('#failureModal').modal('show'); </script> 
    <?php } ?>
 
        
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

                $(document).click(function(e) {
                    if (!$(e.target).is('.droppy')) {
                        $('.collapse').collapse('hide');	    
                    }
                });

            });


            function showDiv(divId, element)
                {
                    document.getElementById(divId).style.display = element.value == 'Team' ? 'block' : 'none';
                }

                window.onload = countDate("2019/08/27 00:00:00", "timing");
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
                            document.getElementById(id).innerHTML = "<span class='text-center text-danger'>EXPIRED</span>";
                        }
                    }, 1000);
                }

                
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
                    // alert('grrr');
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
    

