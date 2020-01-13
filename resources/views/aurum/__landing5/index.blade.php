<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FlipperFlip</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('__landing5/css/style.css') }}">
    <link rel="shortcut icon" href="/img/favicon.png">
</head>
<body>


<header>
    <div class="container">
        <div class="row">
            <div class="col-6" class="logo-div">
                <a href="https://flipperflip.com/{{ $getParams }}"><img src="/storage/{{ $fields['logo'] }}" alt=""></a>
                <div class="dropdown language-select">
                    <button class="btn btn-secondary dropdown-toggle" style="text-transform: capitalize" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ (\App\Http\Middleware\LocaleMiddleware::getLocale() ? \App\Http\Middleware\LocaleMiddleware::getLocale() : \App\Http\Middleware\LocaleMiddleware::$mainLanguage) }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach(\App\Http\Middleware\LocaleMiddleware::loadLanguages() as $lang)
                            <a style="text-transform: capitalize;" class="dropdown-item" href="{{ route('setlocale', ['lang' => $lang->slug]) }}{{ $getParams }}">{{ $lang->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="{{ $fields['button_href_text_1_section'] }}{{ $getParams }}" class="btn btn-sign-up">
                    {{ $fields['signup_button_text'] }}
                </a>
            </div>
        </div>
    </div>
</header>
<section class="first-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{!! $fields['first_heading'] !!}</h1>

                <p>{!! $fields['subheading_1_section'] !!}</p>
                <a style="text-decoration: none;" href="{{ $fields['button_href_text_1_section'] }}{{ $getParams }}" class="btn btn-orange">
                   {!! $fields['button_text_1_section'] !!}
                </a>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 sm-d-flex col-lg-6 col-sm-12 col-md-8">
                <a href="https://flipperflip.com/{{ $getParams }}">
                    <img src="{{ asset('__landing5/img/logo.png') }}" alt=""></a>
                <div class="social_icons">
                    <a href="https://twitter.com/FlipperFlip4" class="icon-item">
                        <img src="{{ asset('__landing5/img/twitter.png') }}" alt="">
                    </a>
                    <a href="https://www.facebook.com/flipperflip.co/?modal=admin_todo_tour" class="icon-item">
                        <img src="{{ asset('__landing5/img/facebook.png') }}" alt="">
                    </a>
                    <a href="https://www.instagram.com/flipper_flip_/" class="icon-item">
                        <img src="{{ asset('__landing5/img/instagram.png') }}" alt="">
                    </a>
                </div>

            </div>
            <div class="col-12 col-xl-6 col-lg-6 col-md-4 col-sm-12 d-flex justify-content-end sm-start-flex">
                <a href="{{ $fields['terms_url'] }}{{ $getParams }}" style="text-decoration: none;" class="btn btn-sign-up">
                    {!! $fields['terms_text'] !!}
                </a>
                <div class="dropdown language-select sm-block">
                    <button class="btn btn-secondary dropdown-toggle" type="button" style="text-transform: capitalize;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ \App\Http\Middleware\LocaleMiddleware::getLocale() }}
                    </button>
                   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                       @foreach(\App\Http\Middleware\LocaleMiddleware::loadLanguages() as $lang)
                           <a style="text-transform: capitalize;" class="dropdown-item" href="{{ route('setlocale', ['lang' => $lang->slug]) }}{{ $getParams }}">{{ $lang->name }}</a>
                       @endforeach
                    </div>
                </div>

            </div>
            <div class="col-12">
                <div class="payments">
                    <img src="{{ asset('__landing5/img/payments/image_2.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image_2_2.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image_3.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image_4.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image_5.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image_6.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image_7.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image_8.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image_9.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image_10.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image_12.1.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image_13.1.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image_14.1.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image-1.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image_8.1.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/payments/image.png') }}" alt="">
                </div>
                <p>
                    {!! $fields['text_after_payments'] !!}
                </p>
                <div class="payments">
                    <img src="{{ asset('__landing5/img/partners/image_2.1.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_2.2.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_3.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_6.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_7.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_8.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_10.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_11.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_12.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_13.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_14.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_15.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_16.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_17.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_18.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_19.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_20.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_21.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_22.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_23.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_24.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_25.png') }}" alt="">
                    <img src="{{ asset('__landing5/img/partners/image_26.png') }}" alt="">
                </div>
                <p>
                    {!! $fields['text_after_partners'] !!}
                </p>
            </div>
        </div>
    </div>
</footer>
<style media="screen">
  a:hover {
    color: white;
  }
</style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
@include('aurum.vendors.scripts')
</body>
</html>
