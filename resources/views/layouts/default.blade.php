<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    @include("partials.the_header")

    <main class="main-container">
        @yield('content')
    </main>

    @include("partials.the_footer")

    <div class="social-container">
        <div class="social-section">
            <button type="button"><a href="#sign-up">SIGN-UP NOW!</a></button>
            <div class="social-icons">
                <a href="#" class="follow">FOLLOW US</a>
                <img src="/img/footer-facebook.png" alt="facebook">
                <img src="/img/footer-twitter.png" alt="twitter">
                <img src="/img/footer-youtube.png" alt="youtube">
                <img src="/img/footer-pinterest.png" alt="pinterest">
                <img src="/img/footer-periscope.png" alt="periscope">
            </div>
        </div>
    </div>
</body>
</html>