<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

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
  
    <header class="header" >
    
        <div class="header__logo-box">
            <img src="img/logo-white.png" alt="Logo" class="header__logo">
        </div>

        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Designing</span>
                <span class="heading-primary--sub">while exploring the world...</span>
            </h1>

            <a href="#features" class="btn btn--white btn--animated">Get in touch</a>
        </div>
    </header>

    <main>
     
        <section class="section-about">

            <div class="row">
                <div class="col-1-of-2">
                    <h2 class="heading-secondary u-margin-bottom-small slowmo">
                        About

                    </h2>
                </div>

                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small slowmo">You're going to fall in love with nature</h3>
                    <p class="paragraph slowmo">
                        What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen
                        book it has?
                    </p>


                    <ul class="list basic_info slowmo u-margin-bottom-small">
                        <li><a href="#"><i class="lnr lnr-calendar-full"></i> 31st December, 1992</a></li>
                        <li><a href="#"><i class="lnr lnr-phone-handset"></i> 44 (012) 6954 783</a></li>
                        <li><a href="#"><i class="lnr lnr-envelope"></i> businessplan@donald</a></li>
                        <li><a href="#"><i class="lnr lnr-home"></i> Santa monica bullevard</a></li>
                    </ul>
                    <ul class="list personal_social u-margin-bottom-small">
                        <li><a href="#"><i class="fa fa-camera-retro"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                   
                    <a href="#" class="btn-text slowmo">Learn more &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                        <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">

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
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Experiences</a>
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
                                        <p>Contract for Development of a system, built on Nodejs and Flutter. <br/>Worcester, Massachusetts, United States</p>
                                    </div>
                                </div>
                            </li>
                            
                            <li>
                                <span></span>
                                <div class="media">
                                    <div class="d-flex">
                                        <p>January 2020 to April <br>  2020</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>Tigoni Level 4 Hospital</h4>
                                        <p>System Support Volunteer<br/>Limuru, Kenya</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
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
                        <i class="feature-box__icon icon-basic-world"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Mobile App development</h3>
                        <p class="feature-box__text">
                            I have experience in native android App development, using pattern such as MVVM. In addition, I have some experience in cross platform mobile application developmetg
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-compass"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Web design</h3>
                        <p class="feature-box__text">
                        I have experience in native android App development, using pattern such as MVVM. In addition, I have some experience in cross platform mobile application developmetg
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-map"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">API Development</h3>
                        <p class="feature-box__text">
                        I have experience in native android App development, using pattern such as MVVM. In addition, I have some experience in cross platform mobile application developmetg
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-heart"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Live a healthier life</h3>
                        <p class="feature-box__text">
                        I have experience in native android App development, using pattern such as MVVM. In addition, I have some experience in cross platform mobile application developmetg
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
        <section class="homes" >
           
            <?php if(count($projects)>0): ?>
            
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="container">
                <div class="box">
                    <div class="imgbox">
                    <img src='<?php echo e($project->imgUrl); ?>' alt="House 1" class="imgp "> 
                    </div>
                    <div class="details">
                        <div class="content">
                        <h5 class="heading"><?php echo e($project->title); ?></h5>
                    <p> 1class="desc"><?php echo e($project->description); ?></p> 
                    
            <a href='' class="btn btn--white btn--animated">Get in touch</a>
                    </div>
                </div>
                </div>
            </div>

        <!-- <div class="home">
            
        <img src='<?php echo e($project->imgUrl); ?>' alt="House 1" class="home__img "> 
        
      
        <h5 class="home__name"><?php echo e($project->title); ?></h5>
        </div> -->
        <!-- <div class="home__location">
          
            <p><strong>Description: </strong><?php echo e($project->description); ?></p>
        </div>

      
        <div class="home__price">
           <p><strong>Tech_stack: </strong><?php echo e($project->tech_stack); ?></p>
        </div>
        <button class="btn1-imgbtn home__btn">Repository</button> -->
    



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

</section>
</section>  
    
    
<section class="contact">
    <div class="u-center-text u-margin-top-small u-margin-bottom-medium">
        <h2 class="heading-secondary">
            Skills
        </h2>
    </div>
<div class="row">
<div class="col-1-of-2">

<?php echo Form::open(['route'=>'contact-us.store']); ?>

        <div class="form-row">
                <div class="col">
                    <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                        <?php echo Form::label('Name:'); ?>

                        <?php echo Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']); ?>

                        
                        </div>
                </div>
                <div class="col">
                    <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                        <?php echo Form::label('Name:'); ?>

                        <?php echo Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']); ?>

                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                        </div>
                </div>
            </div>
<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
<?php echo Form::label('Name:'); ?>

<?php echo Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']); ?>

<span class="text-danger"><?php echo e($errors->first('name')); ?></span>
</div>
<div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
<?php echo Form::label('Email:'); ?>

<?php echo Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']); ?>

<span class="text-danger"><?php echo e($errors->first('email')); ?></span>
</div>
<div class="form-group <?php echo e($errors->has('subject') ? 'has-error' : ''); ?>">
<?php echo Form::label('Subject:'); ?>

<?php echo Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Enter Subject']); ?>

<span class="text-danger"><?php echo e($errors->first('name')); ?></span>
</div>
<div class="form-group <?php echo e($errors->has('message') ? 'has-error' : ''); ?>">
<?php echo Form::label('Message:'); ?>

<?php echo Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']); ?>

<span class="text-danger"><?php echo e($errors->first('message')); ?></span>
</div>
<div class="form-group">
<button class="btn btn-primary py-3 px-5">Contact US!</button>
</div>
<?php echo Form::close(); ?>

</div>

<div class="col-1-of-2">
            <div class="imge"></div>

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

    <div class="popup" id="popup">
        <div class="popup__content">
            <div class="popup__left">
                <img src="img/nat-8.jpg" alt="Tour photo" class="popup__img">
                <img src="img/nat-9.jpg" alt="Tour photo" class="popup__img">
            </div>
            <div class="popup__right">
                <a href="#section-tours" class="popup__close">&times;</a>
                <h2 class="heading-secondary u-margin-bottom-small">Start booking now</h2>
                <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms before booking</h3>
                <p class="popup__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed sed risus pretium quam. Aliquam sem et tortor consequat id. Volutpat odio facilisis mauris sit amet massa vitae. Mi bibendum
                    neque egestas congue. Placerat orci nulla pellentesque dignissim enim sit. Vitae semper quis lectus nulla at volutpat diam ut venenatis. Malesuada pellentesque elit eget gravida cum sociis natoque penatibus et. Proin fermentum leo
                    vel orci porta non pulvinar neque laoreet. Gravida neque convallis a cras semper. Molestie at elementum eu facilisis sed odio morbi quis. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget. Nam libero justo laoreet sit.
                    Amet massa vitae tortor condimentum lacinia quis vel eros donec. Sit amet facilisis magna etiam. Imperdiet sed euismod nisi porta.
                </p>
                <a href="#" class="btn btn--green">Book now</a>
            </div>
        </div>
    </div>

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
        <script>
function myFunction(category) {
    // document.getElementById("demo").style.color = "red";
    switch(category){
        case "android":
            document.getElementById("project").innerHTML = ""; 
            document.getElementById("project").innerHTML =`<section class="homes">
            <?php if(count($projects)>0): ?>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($project->tech_stack=='android'): ?>
        <div class="home">
         <img src='<?php echo e($project->imgUrl); ?>' alt="House 1" class="home__img">
        
        <svg class="home__like">
            <use xlink:href="img/sprite.svg#icon-heart-full"></use>
        </svg>
        <h5 class="home__name"><?php echo e($project->title); ?></h5>
        <div class="home__location">
            <svg>
                <use xlink:href="img/sprite.svg#icon-map-pin"></use>
            </svg>
            <p><strong>Description: </strong><?php echo e($project->description); ?></p>
        </div>

        <div class="home__area">
            <svg>
                <use xlink:href="img/sprite.svg#icon-expand"></use>
            </svg>
            <p></p>
        </div>
        <div class="home__price">
            <svg>
                <use xlink:href="img/sprite.svg#icon-key"></use>
            </svg>
            <p><strong>Tech_stack: </strong><?php echo e($project->tech_stack); ?></p>
        </div>
        <button class="btn-imgbtn home__btn">Contact realtor</button>
    </div>

<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</section>`;
        break;
        case "reactjs":
            document.getElementById("project").innerHTML = ""; 
        console.log("reactjs clicked");
        document.getElementById("project").innerHTML =`<section class="homes">
            <?php if(count($projects)>0): ?>
            
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <?php if($project->tech_stack=='reactjs'): ?>
        <div class="home">
        <img src='<?php echo e($project->imgUrl); ?>' alt="House 1" class="home__img"> 
        
        <svg class="home__like">
            <use xlink:href="img/sprite.svg#icon-heart-full"></use>
        </svg>
        <h5 class="home__name"><?php echo e($project->title); ?></h5>
        <div class="home__location">
            <svg>
                <use xlink:href="img/sprite.svg#icon-map-pin"></use>
            </svg>
            <p><strong>Description: </strong><?php echo e($project->description); ?></p>
        </div>

        <div class="home__area">
            <svg>
                <use xlink:href="img/sprite.svg#icon-expand"></use>
            </svg>
            <p></p>
        </div>
        <div class="home__price">
            <svg>
                <use xlink:href="img/sprite.svg#icon-key"></use>
            </svg>
            <p><strong>Tech_stack: </strong><?php echo e($project->tech_stack); ?></p>
        </div>
        <button class="btn-imgbtn home__btn">Contact realtor</button>
    </div>
<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</section>`
;
        break;
        case "nodejs":
            document.getElementById("project").innerHTML = ""; 
            document.getElementById("project").innerHTML = ""; 
            document.getElementById("project").innerHTML =`<section class="homes">
            <?php if(count($projects)>0): ?>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($project->tech_stack=='nodejs'): ?>
        <div class="home">
         <img src='<?php echo e($project->imgUrl); ?>' alt="House 1" class="home__img">
        
        <svg class="home__like">
            <use xlink:href="img/sprite.svg#icon-heart-full"></use>
        </svg>
        <h5 class="home__name"><?php echo e($project->title); ?></h5>
        <div class="home__location">
            <svg>
                <use xlink:href="img/sprite.svg#icon-map-pin"></use>
            </svg>
            <p><strong>Description: </strong><?php echo e($project->description); ?></p>
        </div>

        <div class="home__area">
            <svg>
                <use xlink:href="img/sprite.svg#icon-expand"></use>
            </svg>
            <p></p>
        </div>
        <div class="home__price">
            <svg>
                <use xlink:href="img/sprite.svg#icon-key"></use>
            </svg>
            <p><strong>Tech_stack: </strong><?php echo e($project->tech_stack); ?></p>
        </div>
        <button class="btn-imgbtn home__btn">Contact realtor</button>
    </div>

<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</section>`;
        break;
        case "laravel":
            document.getElementById("project").innerHTML = ""; 
        console.log("reactjs clicked");
        document.getElementById("project").innerHTML =`<section class="homes">
            <?php if(count($projects)>0): ?>
            
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <?php if($project->tech_stack=='laravel'): ?>
        <div class="home">
        <img src='<?php echo e($project->imgUrl); ?>' alt="House 1" class="home__img"> 
        
        <svg class="home__like">
            <use xlink:href="img/sprite.svg#icon-heart-full"></use>
        </svg>
        <h5 class="home__name"><?php echo e($project->title); ?></h5>
        <div class="home__location">
            <svg>
                <use xlink:href="img/sprite.svg#icon-map-pin"></use>
            </svg>
            <p><strong>Description: </strong><?php echo e($project->description); ?></p>
        </div>

        <div class="home__area">
            <svg>
                <use xlink:href="img/sprite.svg#icon-expand"></use>
            </svg>
            <p></p>
        </div>
        <div class="home__price">
            <svg>
                <use xlink:href="img/sprite.svg#icon-key"></use>
            </svg>
            <p><strong>Tech_stack: </strong><?php echo e($project->tech_stack); ?></p>
        </div>
        <button class="btn-imgbtn home__btn">Contact realtor</button>
    </div>
<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</section>`
;
        console.log("nodejs clicked");
        break;
        default:
        document.getElementById("project").innerHTML = ""; 
   
        console.log("reactjs clicked");
        document.getElementById("project").innerHTML =`<section class="homes">
            <?php if(count($projects)>0): ?>
            
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="home">
        <img src='<?php echo e($project->imgUrl); ?>' alt="House 1" class="home__img"> 
        
        <svg class="home__like">
            <use xlink:href="img/sprite.svg#icon-heart-full"></use>
        </svg>
        <h5 class="home__name"><?php echo e($project->title); ?></h5>
        <div class="home__location">
            <svg>
                <use xlink:href="img/sprite.svg#icon-map-pin"></use>
            </svg>
            <p><strong>Description: </strong><?php echo e($project->description); ?></p>
        </div>

        <div class="home__area">
            <svg>
                <use xlink:href="img/sprite.svg#icon-expand"></use>
            </svg>
            <p></p>
        </div>
        <div class="home__price">
            <svg>
                <use xlink:href="img/sprite.svg#icon-key"></use>
            </svg>
            <p><strong>Tech_stack: </strong><?php echo e($project->tech_stack); ?></p>
        </div>
        <button class="btn-imgbtn home__btn">Contact realtor</button>
    </div>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
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
</body>

</html>
<?php /**PATH C:\xampp\htdocs\portfolio\resources\views/portfolio/index.blade.php ENDPATH**/ ?>