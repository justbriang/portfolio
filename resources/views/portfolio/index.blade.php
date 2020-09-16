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
                <li class="navigation__item"><a href="#" class="navigation__link">Home</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link">About</a></li>
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
                <span class="heading-primary--main">Designing</span>
                <span class="heading-primary--sub">while exploring the world...</span>
            </h1>

            <a href="#section-tours" class="btn btn--white btn--animated">Get in touch</a>
        </div>
    </header>

    <main>
        <section class="section-about">


            <div class="row">
                <div class="col-1-of-2">
                    <h2 class="heading-secondary u-margin-bottom-small">
                        About

                    </h2>
                </div>

                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">You're going to fall in love with nature</h3>
                    <p class="paragraph">
                        What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen
                        book it has?
                    </p>


                    \
                    <a href="#" class="btn-text">Learn more &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                        <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">

                    </div>
                </div>
            </div>
        </section>

        <section class="section-features">
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
                            I have experience in the React front end frame work and Laravel blade templating
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-map"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">API Development</h3>
                        <p class="feature-box__text">
                            I have immense knowledge in the laravel framework, in designing both APIs and wholesome websites. I have some knowlegde in the nodeJS runtime for
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-heart"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Live a healthier life</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="section-tours" id="section-tours">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Projects
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">The Commuter</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>3 day tours</li>
                                    <li>Up to 30 people</li>
                                    <li>2 tour guides</li>
                                    <li>Sleep in cozy hotels</li>
                                    <li>Difficulty: easy</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$297</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Book now!</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">The Forest Hiker</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>7 day tours</li>
                                    <li>Up to 40 people</li>
                                    <li>6 tour guides</li>
                                    <li>Sleep in provided tents</li>
                                    <li>Difficulty: medium</li>
                                </ul>
                            </div>

                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$497</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Book now!</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">The Snow Adventurer</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>5 day tours</li>
                                    <li>Up to 15 people</li>
                                    <li>3 tour guides</li>
                                    <li>Sleep in provided tents</li>
                                    <li>Difficulty: hard</li>
                                </ul>
                            </div>

                        </div>
                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$897</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Book now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="u-center-text u-margin-top-huge">
                <a href="#" class="btn btn--green">Discover all tours</a>
            </div>
        </section> -->
        <section class="homes">
        @if(count($projects)>0)

            @foreach($projects as $project)

            <div class="home">
                <img src='{{ $project->imgUrl }}' alt="House 1" class="home__img">
                <svg class="home__like">
                    <use xlink:href="img/sprite.svg#icon-heart-full"></use>
                </svg>
                <h5 class="home__name">{{ $project->title }}</h5>
                <div class="home__location">
                    <svg>
                        <use xlink:href="img/sprite.svg#icon-map-pin"></use>
                    </svg>
                    <p><strong>Description: </strong>{{ $project->description }}</p>
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
                    <p><strong>Tech_stack: </strong>{{ $project->tech_stack }}</p>
                </div>
                <button class="btn-imgbtn home__btn">Contact realtor</button>
            </div>


        @endforeach
        @endif
    </section>
    <div class="row no-gutters block-9">
        <div class="col-md-6 order-md-last d-flex">

        @if(Session::has('success'))
 <div class="alert alert-success">
   {{ Session::get('success') }}
 </div>
@endif

<div class="bg-light p-4 p-md-5 contact-form">

{!! Form::open(['route'=>'contact-us.store']) !!}
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('Name:') !!}
{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Email:') !!}
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>
<div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
{!! Form::label('Subject:') !!}
{!! Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Enter Subject']) !!}
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>
<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::label('Message:') !!}
{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>
<div class="form-group">
<button class="btn btn-primary py-3 px-5">Contact US!</button>
</div>
{!! Form::close() !!}
</div>

<!--
          <form action="/contact-us" method= "post" class="bg-light p-4 p-md-5 contact-form">
          {{csrf_field()}}
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
              <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7"  name="message" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" name="send" class="btn btn-primary py-3 px-5">
            </div>
          </form> -->

        </div>

        <div class="col-md-6 d-flex">
            <div class="img" style="background-image: url(/img/about.jpg);"></div>

        </div>
      </div>

                    <img src="assets/img/gallery/sin.png" alt="">
    </div>
  </section>
    </main>

    {{-- <footer class="footer">
        <div class="footer__logo-box">
            <img src="img/logo-green-2x.png" alt="Full logo" class="footer__logo">
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Carrers</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1-of-2">
                <p class="footer__copyright">
                    Built by <a href="#" class="footer__link">Jonas Schmedtmann</a> for his online course <a href="#" class="footer__link">Advanced CSS and Sass</a>. Copyright &copy; by Jonas Schmedtmann. You are 100% allowed to use this webpage for both
                    personal and commercial use, but NOT to claim it as your own design. A credit to the original author, Jonas Schmedtmann, is of course highly appreciated!
                </p>
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
    </div> --}}

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

</body>

</html>
