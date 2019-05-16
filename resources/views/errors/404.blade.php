<html>
  <head>
    <link href="{{asset('css/404.css')}}" rel="stylesheet"/>
    <script src="{{asset('js/404.js')}}"></script>
  </head>
  <body>
    <h1>404</h1>
    <h2>Page Not Found</h2>
    <h4>However, we found <a>these</a> instead......</h4>
    <!--
    No more cheating :)
    !-->
    @foreach(App\Puzzle::all() as $puzzle)
    <div class="message_group">
      <div class="puzzle_title">{{$puzzle->name}}</div>
      <div>{!!$puzzle->hint!!}</div>
      <div class="message_box">
        @php
         echo str_random(256);
        @endphp
      </div>
      <br/>
      <span style="font-size:3em">Enter decryption key:</span><input type="password" placeholder="<keygoeshere>" class="guess_password"><input type="submit" class="guess_password_btn">
    </div>
    @endforeach
  </body>
</html>