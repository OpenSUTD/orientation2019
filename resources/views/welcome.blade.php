<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OLEROS</title>
        <link href="{{asset('css/preloader.css')}}" rel="stylesheet"/>
        <script src="{{asset('js/preloader.js')}}"></script>
        <script defer src="{{asset('js/app.js')}}"></script>
    </head>
    <body>
      <loader>
        <h1 class="loaderText">
          <span class="loading">L</span>
          <span class="loading">o</span>
          <span class="loading">a</span>
          <span class="loading">d</span>
          <span class="loading">i</span>
          <span class="loading">n</span>
          <span class="loading">g</span>
          <span class="loading"></span>
          <span class="loading"></span>
          <span class="loading"></span>
          <span class="loading"></span>
        </h1>
        <svg class="loaderRing" viewBox="0 0 100 100">
          <circle
            class="loaderRingCircle"
            stroke="white"
            stroke-width="0.5"
            fill="transparent"
            cx="50%"
            cy="50%"
            r="7.5"/>
        </svg>
      </loader>
      <content class="loading">
        <div id="logosection">
          @include("globe")
        </div>
        <img src="https://c2.staticflickr.com/8/7872/46343981674_c825302cf5_o.jpg">
        <img src="https://i.redd.it/zku2zx4dk9g21.jpg">
        <img src="https://i.redd.it/5hv4l3032bc01.jpg">
        <img src="https://i.redd.it/9d9w6pkirihz.jpg">
        <img src="https://i.redd.it/4itnc1ff4us01.jpg">
      </content>
    </body>
</html>
