<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/icon-font.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/app.css" />
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="css/lightbox.min.css" rel="stylesheet" />
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <title>Where it all goes down</title>
</head>

<body>
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="#header" class="navigation__link">Home</a></li>
                <li class="navigation__item"><a href="#features" class="navigation__link">About</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link">Education</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link">Projects</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link">Contacts</a></li>
            </ul>
        </nav>
    </div>

    <header class="header">

        <div class="header__logo-box">
            <img src="img/logo-white.png" alt="Logo" class="header__logo">
        </div>

        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Hi!</span><br>
                <span class="heading-primary--main">i'm Brian</span><br>
                <span class="heading-primary--sub">what do i do,and what's in it for you?</span>
            </h1>

            <a href="#about" class="btn btn--white btn--animated">Find Out</a>
        </div>
    </header>

    <main>

        <section class="section-about" id="about">

            <div class="row">
                <div class="col-1-of-2">
                    <h2 class="heading-secondary u-margin-bottom-small slowmo">
                        About

                    </h2>
                </div>

                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small slowmo">Hi! My name is Brian Karanja
                    </h3>
                    <p class="paragraph slowmo">
                        I am currently pursuing a Bachelor in Informatics and Computer Science.
                        My core competencies lie in mobile application development both native Android
                        and cross-platform in Flutter, web development using the Laravel framework.
                        In addition, I also have vast knowlegde in the React front-end framework and the Nodejs runtime.
                        I also have experience in using both SQL and NoSQL databases such as mySql, heroku postgres Web
                        Research and mongodb.
                        There is more to that as I am still learning and I am confident that I can do anything related
                        to computers,I just need
                        a little bit of guidance to get started.
                    </p>
                    <p class="paragraph slowmo"><strong>Contact me</strong></p>

                    <ul class="list basic_info slowmo u-margin-bottom-small">


                        <li><a href="#"><i class="lnr lnr-phone-handset"></i> +254 702 635 515</a></li>
                        <li><a href="#"><i class="lnr lnr-envelope"></i> gichukxb@gmail.com</a></li>
                        <li><a href="#"><i class="lnr lnr-home"></i> Nairobi, Kenya</a></li>
                    </ul>


                    <a href="#" class="btn-text slowmo">Learn more &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <img src="img/img13.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                        <img src="img/img14.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">

                    </div>
                </div>
            </div>
        </section>
        <!--================My Tabs Area =================-->
        <section class="mytabs_area p_120">
            <div class="container">
                <div class="tabs_inner">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">My Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">My Experiences</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <ul class="list">
                                <li>
                                    <span></span>
                                    <div class="media">
                                        <div class="d-flex">
                                            <p>July 2018 to present</p>
                                        </div>
                                        <div class="media-body">
                                            <h4>Strathmore University</h4>
                                            <p>Informatics and Computer Science <br />Nairobi, Kenya</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <ul class="list">
                                <li>
                                    <span></span>
                                    <div class="media">
                                        <div class="d-flex">
                                            <p>Novemeber 2019 to<br> September</p>
                                        </div>
                                        <div class="media-body">
                                            <h4>Omni HealthCare Staffing</h4>
                                            <p>Contract for Development of a system, built on Nodejs and Flutter.
                                                <br />Worcester, Massachusetts, United States</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <span></span>
                                    <div class="media">
                                        <div class="d-flex">
                                            <p>January 2020 to April <br> 2020</p>
                                        </div>
                                        <div class="media-body">
                                            <h4>Tigoni Level 4 Hospital</h4>
                                            <p>System Support Volunteer<br />Limuru, Kenya</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Technology Stack
                </h2>
            </div>


            <div class="row">
                <div class="col-1-of-2">
                    <div class="welcome_text">
                        <p><b>KEY SKILLS</b><br>

                            <p>Through what I've learnt in school and personal practice I have managed to gain the
                                following skills:<br><br>


                                <i>Programming Languages:</i><br><br>

                                Most experienced with: CSS, Java, JavaScript,XML<br>
                                Some experience with: PHP, PL/SQL, Python, SQL<br>
                                Dabbled in: C, C++, C#<br><br>

                                <i>Databases:</i><br><br>

                                Microsoft SQL Server, MySQL, Oracle 9i through 11g<br><br>
                                <i>Frameworks:</i><br><br>
                                Frameworks: ASP.NET MVC jQuery, jQuery UI<br><br>


                    </div>
                </div>
                <div class="col-1-of-2">
                    <div class="tools_expert">
                        <div class="skill_main">
                            <div class="skill_item">
                                <p><b>TOOLS</b><br>
                                    <h4>Laravel<span class="counter">85</span>%</h4>
                                    <div class="progress_br">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="85"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                            </div>
                            <div class="skill_item">
                                <h4>Nodejs <span class="counter">70</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>Android <span class="counter">80</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>Reactjs <span class="counter">65</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="65"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>Flutter <span class="counter">70</span>%</h4>
                                <div class="progress_br">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="section-features" id="features">

            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Skills
                </h2>
            </div>
            <div class="row">
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <span class=" feature-box__icon material-icons">
                            android
                        </span>
                        <h3 class="heading-tertiary u-margin-bottom-small">Mobile App development</h3>
                        <p class="feature-box__text">
                            I have experience in native android Application development, using the MVVM. In
                            addition, I have some experience in cross platform mobile application development using
                            Flutter
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <span class=" feature-box__icon material-icons">
                            language
                        </span>

                        <h3 class="heading-tertiary u-margin-bottom-small">Web design</h3>
                        <p class="feature-box__text">
                            I have experience in the use of the full stack laravel framework and the Reactjs front end
                            framework coupled with concepts such as Redux in the design and development of fast and
                            realiable websites
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">

                        <span class="feature-box__icon material-icons">
                            api
                        </span>
                        <h3 class="heading-tertiary u-margin-bottom-small">API Development</h3>
                        <p class="feature-box__text">
                            I have knowledge in the development of monolithic Restful APIs,in facilitating
                            communication of two or more systems over HTTP.I can develop APIs using Laravel framework
                            and/or the nodejs runtime
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-heart"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Git and Github</h3>
                        <p class="feature-box__text">
                            I am comfortable with advanced version control concepts like branching and merging. In
                            addition, I have a good understanding of use of the github
                            tool,for version control both on the command line and using GUI.
                        </p>

                    </div>
                </div>
            </div>



        </section>
        <section class="btns">
            <div class="row  ">
                <div class="col-1-of-4">
                    <button class="btn1-imgbtn " onclick="myFunction('android')">android</button>
                </div>
                <div class="col-1-of-4">
                    <button class="btn1-imgbtn" onclick="myFunction('laravel')">laravel</button>
                </div>
                <div class="col-1-of-4">
                    <button class="btn1-imgbtn " onclick="myFunction('nodejs')">node js</button>
                </div>
                <div class="col-1-of-4">
                    <button class="btn1-imgbtn" onclick="myFunction('reactjs')">react js</button>
                </div>
            </div>
        </section>
        <section id="project">
            <section class="homes">

                @if(count($projects)>0)

                @foreach($projects as $project)
                <div class="container">
                    <div class="box">
                        <div class="imgbox">
                            <a href='{{ $project->imgUrl}}' data-lightbox="rods"
                                data-title="{{ $project->description }}"><img src='{{ $project->imgUrl}}' alt="House 1"
                                    class="imgp">

                            </a>
                            {{-- <img src='{{ $project->imgUrl}}' alt="House 1" class="imgp "> --}}
                        </div>
                        <div class="details">
                            <div class="content">
                                <h5 class="heading">{{ $project->title }}</h5>
                                <p class="desc">{{ $project->description }}</p>



                            </div>
                        </div>
                    </div>
                </div>




                @endforeach
                @endif

            </section>


        </section>
        <div class="u-center-text u-margin-top-small u-margin-bottom-medium">
        
                <button class="btn1-imgbtn u-center-text" onclick="myFunction('android')">See More</button>
          
        </div>
      
        <section class="contact" id="contact">
            <div class="u-center-text u-margin-top-small u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    Get in touch
                </h2>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    {!! Form::open(['route'=>'contact-us.store']) !!}
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
                                {!! Form::label('Name:') !!}
                                {!! Form::text('firstname', old('firstname'), ['class'=>'form-control',
                                'placeholder'=>'Enter
                                Firstname']) !!}
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                {!! Form::label('Name:') !!}
                                {!! Form::text('lastname', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter
                                Lastname']) !!}
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('Email:') !!}
                        {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email'])
                        !!}
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                        {!! Form::label('Subject:') !!}
                        {!! Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Enter
                        Subject']) !!}
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        {!! Form::label('Message:') !!}
                        {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter
                        Message']) !!}
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary py-3 px-5">Contact US!</button>
                    </div>
                    {!! Form::close() !!}
                </div>

                <div class="col-1-of-2 ">
                    <div class="imge"
                        style="background-image: url(/img/about.jpg); background-size: cover;background-repeat: no-repeat;background-position: center center; ">
                    </div>

                </div>

            </div>
        </section>

    </main>

    <footer class="footer">

        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <ul class="list basic_info">
                            <li><a href="#"><i class="lnr lnr-calendar-full"></i> 31st December, 1992</a></li>
                            <li><a href="#"><i class="lnr lnr-phone-handset"></i> 44 (012) 6954 783</a></li>
                            <li><a href="#"><i class="lnr lnr-envelope"></i> businessplan@donald</a></li>
                            <li><a href="#"><i class="lnr lnr-home"></i> Santa monica bullevard</a></li>
                        </ul>

                    </ul>
                </div>
            </div>
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <p>try try</p>
                </div>
            </div>
        </div>
    </footer>



    <!--
        <section class="grid-test">
            <div class="row">
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-2-of-3">
                    Col 2 of 3
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-2-of-4">
                    Col 2 of 4
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-3-of-4">
                    Col 3 of 4
                </div>
            </div>
        </section>
        -->

    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script>
        function myFunction(category) {
    // document.getElementById("demo").style.color = "red";
    switch(category){
        case "android":
            document.getElementById("project").innerHTML = ""; 
            document.getElementById("project").innerHTML =`<section class="homes">
            @if(count($projects)>0)
            @foreach($projects as $project)
            @if($project->tech_stack=='android')
            <div class="container">
                <div class="box">
                    <div class="imgbox">
                    <img src='{{ $project->imgUrl}}' alt="House 1" class="imgp "> 
                    </div>
                    <div class="details">
                        <div class="content">
                        <h5 class="heading">{{ $project->title }}</h5>
                    <p class="desc">{{ $project->description }}</p> 
                    
                        <p>+</p>
                    </div>
                </div>
                </div>
            </div>

@endif
@endforeach
@endif
</section>`;
        break;
        case "reactjs":
            document.getElementById("project").innerHTML = ""; 
        console.log("reactjs clicked");
        document.getElementById("project").innerHTML =`<section class="homes">
            @if(count($projects)>0)
            
            @foreach($projects as $project)
   @if($project->tech_stack=='reactjs')
   <div class="container">
                <div class="box">
                    <div class="imgbox">
                    <img src='{{ $project->imgUrl}}' alt="House 1" class="imgp "> 
                    </div>
                    <div class="details">
                        <div class="content">
                        <h5 class="heading">{{ $project->title }}</h5>
                    <p class="desc">{{ $project->description }}</p> 
                    
                        <p>+</p>
                    </div>
                </div>
                </div>
            </div>
@endif

@endforeach
@endif
</section>`
;
        break;
        case "nodejs":
            document.getElementById("project").innerHTML = ""; 
            document.getElementById("project").innerHTML = ""; 
            document.getElementById("project").innerHTML =`<section class="homes">
            @if(count($projects)>0)
            @foreach($projects as $project)
            @if($project->tech_stack=='nodejs')
            <div class="container">
                <div class="box">
                    <div class="imgbox">
                    <img src='{{ $project->imgUrl}}' alt="House 1" class="imgp "> 
                    </div>
                    <div class="details">
                        <div class="content">
                        <h5 class="heading">{{ $project->title }}</h5>
                    <p class="desc">{{ $project->description }}</p> 
                    
                        <p>+</p>
                    </div>
                </div>
                </div>
            </div>

@endif
@endforeach
@endif
</section>`;
        break;
        case "laravel":
            document.getElementById("project").innerHTML = ""; 
        console.log("reactjs clicked");
        document.getElementById("project").innerHTML =`<section class="homes">
            @if(count($projects)>0)
            
            @foreach($projects as $project)
   @if($project->tech_stack=='laravel')
   <div class="container">
                <div class="box">
                    <div class="imgbox">
                    <img src='{{ $project->imgUrl}}' alt="House 1" class="imgp "> 
                    </div>
                    <div class="details">
                        <div class="content">
                        <h5 class="heading">{{ $project->title }}</h5>
                    <p class="desc">{{ $project->description }}</p> 
                    
                        <p>+</p>
                    </div>
                </div>
                </div>
            </div>
@endif

@endforeach
@endif
</section>`
;
        console.log("nodejs clicked");
        break;
        default:
        document.getElementById("project").innerHTML = ""; 
   
        console.log("reactjs clicked");
        document.getElementById("project").innerHTML =`<section class="homes">
            @if(count($projects)>0)
            
            @foreach($projects as $project)

            <div class="container">
                <div class="box">
                    <div class="imgbox">
                    <img src='{{ $project->imgUrl}}' alt="House 1" class="imgp "> 
                    </div>
                    <div class="details">
                        <div class="content">
                        <h5 class="heading">{{ $project->title }}</h5>
                    <p class="desc">{{ $project->description }}</p> 
                    
                        <p>+</p>
                    </div>
                </div>
                </div>
            </div>


@endforeach
@endif
</section>`
;
        console.log("laravel clicked");
        break;

    }


}
    </script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
    <script src="path/to/lightbox.js"></script>
</body>

</html>