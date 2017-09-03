<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nona Glow Mobile Spray Tanning</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/glyphicons-social.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
        ]) !!};
    </script>
</head>

<body>

    <div id="app" class="site-wrapper">

        <div class="site-wrapper-inner">

            <div class="cover-container">

                <div class="masthead clearfix">
                    <div class="inner">
                        <h3 class="masthead-brand"><img id="logo" src="{{ asset('img/Nona-Glow-Logo-White.png') }}" alt=""> Nona Glow</h3>
                    </div>
                </div>

                <div class="inner cover">
                    <h1 class="cover-heading">We are nearly complete!</h1>
                    <p class="lead">We know it is taking a long time, subscribe below and we will let you know when we are live.</p>
                    <flash message="{{ session('flash') }}"></flash>
                    <form id="subscribe" class="form-inline" action="/join" method="post">
                        {{ csrf_field() }}
                        <label class="sr-only" for="email">Email</label>
                        <input type="email" name="email" class="form-control mb-2 mr-sm-2 mb-sm-0" id="email" placeholder="Your Email">

                        <button type="submit" class="btn btn-primary">Subscribe</button>

                        @if (count($errors))
                               <ul class="alert alert-danger">
                                   @foreach ($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                   @endforeach
                               </ul>
                        @endif
                    </form>
                    <p class="social-leads">
                        <a href="https://www.facebook.com/people/Nona-Glow/100013389963910"><i class="social social-facebook"></i></a>
                        <a href="https://www.instagram.com/lakenonaglow/"><i class="social social-instagram"></i></a>
                    </p>
                    <p>You may also call us at <a href="tel:407-674-9280">+1 (407) 674-9280</a></p>
                </div>

                <div class="mastfoot">
                    <div class="inner">
                        <p>&copy; Nona Glow</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
