<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OLETHROS</title>
        <meta name="description" content="SUTD Orientation 2019 – Coming 16th May 2019">
        <link rel="shortcut icon" type="image/png" href="{{asset('img/olethros.png')}}"/>
        <meta property="og:title" content="OLETHROS"/>
        <meta property="og:type" content="website"/>
        <meta property="og:description" content="SUTD Orientation 2019 – Coming 16th May 2019"/>
        <meta property="og:image" content="{{asset('img/preview_logo.png')}}"/>
        <meta property="og:site_name" content="OLETHROS"/>
        <meta property="org:url" content="{{url('/')}}"/>
        <link href="{{asset('css/preloader.css')}}" rel="stylesheet"/>
        <script src="{{asset('js/preloader.js')}}"></script>
    </head>
    <body>
      @if(env("APP_ENV") == "staging")
        @include("staging_warning")
      @endif
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
        <svg class="loaderRing" viewBox="0 0 30 30">
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
        <div class="frames">
          <div class="frame flex full">
            <div style="" class="subframe">
              <div class="title">
                <span> OLETHROS </span>
              </div>
              <div class="subtitle">
                <span>SUTD Orientation Camp 2019</span>
              </div>
            </div>
            <div style="" class="subframe">
              <div id="logosection">
                <img defer id="logo" src="{{asset('img/olethros.png')}}">
                <span class="globeParent">@include("globe")</span>
              </div>
            </div>
          </div>
          <div class="frame full">
            <div class="content_frame">
              <div class="subframe" style="width:100%">
                <div class="frame-title" style="clear:both">STORY</div>
              </div>
              <div class="frame-subtitle" style="margin-top:5%">
                Olethros is set in a time of inter-galactic exploration, featuring 4 factions at war for rapidly depleting resources left in the local galaxy. Compete with your fellow faction comrades against others in exciting challenges to emerge as the last faction standing. Beware, there may be external dangers infiltrating the faction ranks, determined to destroy every human completely... May the strongest faction prevail in the age of resource scarcity.
                <div style="font-size:1.5em;margin-top:5%">Audio Teaser</div>
                <audio controls>
                  <source src="{{asset('embeds/teaser.mp3')}}" type="audio/mpeg">
                Your browser does not support the audio element.
                </audio>
              </div>
            </div>
          </div>
          <div class="frame">
            <div class="content_frame">
              <div class="frame-title">
                FACTIONS
              </div>
              <div class="frame-subtitle">
                A pharma-tech company (PANV Pharmaceutics) created pseudo-sentient android technology in order to bring the human race to greater heights, citing greater life expectancies and overall improvement to the standard of living. Upon this momentous breakthrough, the directors of PANV Pharmaceutics soon realised the tremendous implications of such technology, and the various ways it could be exploited. They had a falling out, as each of them had different designs for the technology.
              </div>
            </div>
            <div class="content_frame house_frame" data-aos="fade-right">
              <div class="house_name_frame">
                <div class="house_names" style="color:#ffd100" data-aos="fade-up">NOVA</div>
                <div class="house_nicknames" data-aos="fade-up">the scavengers</div>
              </div>
              <div class="house_logo_frame">
                <img defer src="{{asset('img/nova.svg')}}" class="house_logo" data-aos="fade-right">
                <p class="house_logo_lore"><em>The gunblade, forgable from any abundant metal in the universe.</em></p>
              </div>
              <div class="house_lore">
                <p>They are the material gatherers.</p>
                <p>In the days leading up to the breakthrough technology developed by PANV, the team of engineers under the current leader of Nova (one of the directors in PANV) managed to develop and rapidly advance the state of cybernetics, using the limited resources left on Earth.</p>
                <p>Post falling out, Nova became known infamously as the ‘salvagers’, as they could turn even scraps into useful materials to be used for their faction expansion.</p>
              </div>
            </div>
            <div class="content_frame house_frame" data-aos="fade-right">
              <div class="house_name_frame">
                <div class="house_names" style="color:#6fcfeb" data-aos="fade-up">VELA</div>
                <div class="house_nicknames" data-aos="fade-up">the visionaries</div>
              </div>
              <div class="house_logo_frame">
                <img defer src="{{asset('img/vela.svg')}}" class="house_logo" data-aos="fade-right">
                <p class="house_logo_lore"><em>The compound bow, with a range further than what one would expect.</em></p>
              </div>
              <div class="house_lore">
                <p>They are the visionaries.</p>
                <p>While their technical skills are not subpar, their interpersonal skills are formidable. They are the ones who first saw the dire need for new forms of technology in pharmaceutics, and actively gathered the top minds to develop what became the breakthrough technology. The leader of Vela was always thought to be able to read the minds of others, initiating plans and seizing opportunities even before others have reacted.</p>
                <p>Post falling out, Vela is known to be the ‘initiators’, actively sourcing out new resource-rich planets before other factions.</p>
              </div>
            </div>
            <div class="content_frame house_frame" data-aos="fade-right">
              <div class="house_name_frame">
                <div class="house_names" style="color:#b6b8dd" data-aos="fade-up">PYXIS</div>
                <div class="house_nicknames" data-aos="fade-up">the analysts</div>
              </div>
              <div class="house_logo_frame">
                <img defer src="{{asset('img/pyxis.svg')}}" class="house_logo" data-aos="fade-right">
                <p class="house_logo_lore"><em>The naginata, boasting a large angle of attack protecting its users from ambush</em></p>
              </div>
              <div class="house_lore">
                <p>They are the analysts.</p>
                <p>Much of the success of the breakthrough technology should be attributed to those in Pyxis, who performed countless rounds of experiments and collected vast libraries of data for analysis. In the early stages of development, the leader (past director) of Pyxis was known to be extremely meticulous, hence creating new forms of data analytics in order to ensure a reliable report of effectiveness rate among potential users.</p>
                <p>Post falling out, Pyxis is often called to be ‘the hawk’, being able to analyse everything down to the smallest detail that nothing escapes them.</p>
              </div>
            </div>
            <div class="content_frame house_frame" data-aos="fade-right">
              <div class="house_name_frame">
                <div class="house_names" style="color:#fdc173" data-aos="fade-up">AURYX</div>
                <div class="house_nicknames" data-aos="fade-up">the experimenters</div>
              </div>
              <div class="house_logo_frame">
                <img defer src="{{asset('img/auryx.svg')}}" class="house_logo" data-aos="fade-right">
                <p class="house_logo_lore"><em>The mystic staff, dangerous to both the wielders and their enemies.</em></p>
              </div>
              <div class="house_lore">
                <p>They are the experimenters.</p>
                <p>The very idea of the breakthrough technology should be credited to Auryx, who combine both creativity and scientific knowledge to design technology never been seen before, yet could be the panacea to all problems humans face. Auryx cares little about limitations, opting to be open minded to all possibilities that one thing can be utilised.</p>
                <p>Auryx post falling out is known as the mystic, developing fresh technologies and weapons, making it hard for all the other faction to come up with a counterplan.</p>
              </div>
            </div>
          </div>
          <div class="frame" style="overflow:hidden">
            <div class="content_frame" style="margin-bottom:0%">
              <div class="frame-title">THE PROVING GROUNDS</div>
              <div class="frame-subtitle">
                With resources nearing exhaustion in the local galaxy cluster, the four factions have decided to settle their differences in a free-for-all on their home planet – planet Earth, right at the very facility that tore humanity apart...
              </div>
              <div class="contact-info">
                Singapore University of Technology and Design
                <br>8 Somapah Road
                <br>Singapore 487372
                <br><br>16th May 2019
              </div>
              <div id="maps" data-aos="fade-left">
                <iframe frameborder="0" style="border:0"
                  src="https://www.google.com/maps/embed/v1/place?key={{env('GMAPS_API_KEY')}}&q=SUTD" allowfullscreen>
                </iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="backgrounds">
          <img defer src="{{asset('img/frame_1.jpg')}}">
        </div>
      </content>
      
      <script defer async src="{{asset('js/app.js')}}"></script>
      <link href="{{asset('css/app.css')}}" rel="stylesheet" defer async/>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" defer async>
    </body>
</html>
