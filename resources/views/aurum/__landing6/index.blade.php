<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aurum Palace</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('__landing6/css/style.css?v=8421.4') }}">
</head>
<body>


<header>
    <div class="container">
        <div class="row">
            <div class="col-6" class="logo-div">
                <a href="/"><img src="/storage/{{ $fields['logo'] }}" alt=""></a>
                <div class="dropdown language-select">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        En
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Norway</a>
                        <a class="dropdown-item" href="#">Spain</a>
                        <a class="dropdown-item" href="#">France</a>
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <button class="btn btn-sign-up">
                    {{ $fields['signup_button_text'] }}
                </button>
            </div>
        </div>
    </div>
</header>
<section class="first-section">
    <div class="roulette">
        <img src="{{ asset('__landing6/img/roulette.png') }}" alt="">
    </div>
    <div class="boat">
        <img src="{{ asset('__landing6/img/boat.png') }}" alt="">
    </div>
    <div class="wave">
        <img src="{{ asset('__landing6/img/wave.png') }}" class="hide-560" alt="">
        <img src="{{ asset('__landing6/img/mobile_wave.png') }}" class="show-560" alt="">
        <div class="bubbles bubbles-1"></div>
        <div class="bubbles bubbles-2"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{!! $fields['first_heading'] !!}</h1>

                <p>{!! $fields['subheading_1_section'] !!}</p>
                <a style="text-decoration: none;" href="{{ $fields['button_href_text_1_section'] }}<?php if($fields['open_register'] === "on") { echo '?aff_lb=1'; } ?>" class="btn btn-orange">
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
                <a href="/">
                    <img src="{{ asset('__landing6/img/logo.png') }}" alt=""></a>
                <div class="social_icons">
                    <a href="/" class="icon-item">
                        <img src="{{ asset('__landing6/img/twitter.png') }}" alt="">
                    </a>
                    <a href="/" class="icon-item">
                        <img src="{{ asset('__landing6/img/facebook.png') }}" alt="">
                    </a>
                    <a href="/" class="icon-item">
                        <img src="{{ asset('__landing6/img/instagram.png') }}" alt="">
                    </a>
                </div>

            </div>
            <div class="col-12 col-xl-6 col-lg-6 col-md-4 col-sm-12 d-flex justify-content-end sm-start-flex">
                <a href="{{ $fields['terms_url'] }}" style="text-decoration: none;" class="btn btn-sign-up">
                    {!! $fields['terms_text'] !!}
                </a>
                <div class="dropdown language-select sm-block">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        En
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Norway</a>
                        <a class="dropdown-item" href="#">Spain</a>
                        <a class="dropdown-item" href="#">France</a>
                    </div>
                </div>

            </div>
            <div class="col-12">
                <div class="payments">
                    <img src="{{ asset('__landing6/img/payments/image_2.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image_2_2.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image_3.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image_4.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image_5.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image_6.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image_7.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image_8.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image_9.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image_10.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image_12.1.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image_13.1.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image_14.1.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image-1.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image_8.1.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/payments/image.png') }}" alt="">
                </div>
                <p>
                    {!! $fields['text_after_payments'] !!}
                </p>
                <div class="payments">
                    <img src="{{ asset('__landing6/img/partners/image_2.1.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_2.2.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_3.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_6.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_7.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_8.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_10.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_11.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_12.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_13.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_14.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_15.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_16.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_17.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_18.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_19.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_20.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_21.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_22.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_23.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_24.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_25.png') }}" alt="">
                    <img src="{{ asset('__landing6/img/partners/image_26.png') }}" alt="">
                </div>
                <p>
                    {!! $fields['text_after_partners'] !!}
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>


<script>
    // bubbles

    function bubbles(el) {
        let $bubbles = el;
        const min_bubble_count = 10;
        const max_bubble_count = 25;
        const min_bubble_size = 2;
        const max_bubble_size = 25;
        let bubbleCount = min_bubble_count + Math.floor(Math.random() * (max_bubble_count + 1));

        for (let i = 0; i < bubbleCount; i++) {

            let container = document.createElement('div');

            container.className = 'bubble-container';

            let bubble = document.createElement('div');

            bubble.className = 'bubble';

            $(container).append($(bubble));

            $bubbles.append(container);
        }

        $($bubbles).find('.bubble-container').each(function(){
            let pos_rand = Math.floor(Math.random() * 101);

            let size_rand = min_bubble_size + Math.floor(Math.random() * (max_bubble_size + 1));

            let delay_rand = Math.floor(Math.random() * 16);

            let speed_rand = 3 + Math.floor(Math.random() * 20);

            let blur_rand = Math.floor(Math.random() * 1);

            let $this = $(this);
            $this.css({
                'left' : pos_rand + '%',
                '-webkit-animation-duration' : speed_rand + 's',
                '-moz-animation-duration' : speed_rand + 's',
                '-ms-animation-duration' : speed_rand + 's',
                'animation-duration' : speed_rand + 's',
                '-webkit-animation-delay' : delay_rand + 's',
                '-moz-animation-delay' : delay_rand + 's',
                '-ms-animation-delay' : delay_rand + 's',
                'animation-delay' : delay_rand + 's',
                '-webkit-filter' : 'blur(' + blur_rand  + 'px)',
                '-moz-filter' : 'blur(' + blur_rand  + 'px)',
                '-ms-filter' : 'blur(' + blur_rand  + 'px)',
                'filter' : 'blur(' + blur_rand  + 'px)',
            });

            $this.children('.bubble').css({
                'width' : size_rand + 'px',
                'height' : size_rand + 'px'
            });

        });
    }


    $(document).ready(function() {
        bubbles(document.getElementsByClassName('bubbles-1')[0]);
        bubbles(document.getElementsByClassName('bubbles-2')[0]);
    });

</script>
</body>
</html>
