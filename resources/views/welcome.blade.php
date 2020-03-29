<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/css/uikit.min.css" />

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
        <div class="uk-child-width-1-2 uk-child-width-1-4@s uk-grid-match" uk-grid>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-fade">
                    <p class="uk-text-center">Fade</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
                    <p class="uk-text-center">Scale Up</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down">
                    <p class="uk-text-center">Scale Down</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-shake">
                    <p class="uk-text-center">Shake</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-slide-left">
                    <p class="uk-text-center">Left</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-slide-top">
                    <p class="uk-text-center">Top</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom">
                    <p class="uk-text-center">Bottom</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-slide-right">
                    <p class="uk-text-center">Right</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-slide-left-small">
                    <p class="uk-text-center">Left Small</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-slide-top-small">
                    <p class="uk-text-center">Top Small</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom-small">
                    <p class="uk-text-center">Bottom Small</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-slide-right-small">
                    <p class="uk-text-center">Right Small</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-slide-left-medium">
                    <p class="uk-text-center">Left Medium</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-slide-top-medium">
                    <p class="uk-text-center">Top Medium</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom-medium">
                    <p class="uk-text-center">Bottom Medium</p>
                </div>
            </div>
            <div class="uk-animation-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-slide-right-medium">
                    <p class="uk-text-center">Right Medium</p>
                </div>
            </div>
        </div>
    </div>
  <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
