<html>
  <head>
    <style>
    .message_box{
      border: 2px solid blue;
      max-width: 100vw;
      height: auto;
      word-break: break-word;
      font-family: monospace;
    }
    .actual_message{
      display: none;
    }
    .expected_password{
      display: none;
    }
    .message_group{
      width:100%;
      border: 2px dashed green;
      margin-bottom: 5vh;
    }
    .guess_password{
      width: 50%;
      height: 5vh;
      font-size:3em;
      border: 1px solid red;
    }
    .puzzle_title{
      margin-top: 1vh;
      margin-bottom: 1vh;
      border-bottom: 1px solid black;
      font-weight: bold;
    }
    div{
      font-size: 1.5em;
    }
    body{
      overflow-x: hidden;
    }
    </style>
    <script>
    window.addEventListener("DOMContentLoaded", function(){
      function makeid(length) {
         var result           = '';
         var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
         var charactersLength = characters.length;
         for ( var i = 0; i < length; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
         }
         return result;
      }
      var inputs = Array.from(document.querySelectorAll('.guess_password'));
      inputs.forEach(function(input, pos){
        let expected_password = document.querySelectorAll('.expected_password')[pos].textContent.trim();
        let actual_message = document.querySelectorAll('.actual_message')[pos].innerHTML;
        let message_box = document.querySelectorAll('.message_box')[pos];
        input.addEventListener("keyup", function(e){
          if(input.value == expected_password){
            message_box.innerHTML = actual_message;
          }else{
            message_box.innerHTML = makeid(256);
          }
        });
      });
    });
    </script>
  </head>
  <body>
    <h1>404</h1>
    <h2>Page Not Found</h2>
    <h4>However, we found <a>these</a> instead......</h4>
    
    <div class="message_group">
      <div class="puzzle_title">Enter the Cyrdroid</div>
      <div>
        L1: ///dismissing.measuring.seducing<br>
        L2: L1 + (212.4km, 75.13o)<br>
        L3: ///allegiance.glittered.consequence<br>
        L4: L3 + (536.3km, 90.06o)<br>
        L5: ///smart.unfailing.unbeatable<br>
        L6: L5 + (36.61km, 241.9o)<br>
      </div>
      <div class="actual_message">LORE NAME: Setting the Climate, Enter the Cydroid<br><br>
<br><br>
EXTRA POINTS: Enter ‘stc2200etcpanvcp’ to earn your group an extra 300 points<br><br>
<br><br>
LORE:  (hi so there is 2 versions, the tldr and the past records) <br><br>
TLDR Version:<br><br>
Setting the Climate: Between 2100-2250, the Earth’s habitable zones have greatly declined due to environmental neglect leading to climate change, rising oceans, and extreme weather phenomena.<br><br>
a.	Unprepared for the rapid environmental decline of the 2100s, humankind was unable to establish off-planet human settlements before a several major natural disasters wiped out access to resources and most aerospace facilities worldwide.<br><br>
b.	Humans mostly live in autonomous Colonies, some of which are underground.<br><br>
i.	E.g. Underground: Burlington, Cheyenne, Sonnenberg, Dixiacheng, Crater Lake, Raven Rock, Greenbrier<br><br>
ii.	E.g. Surface: Cape, Kennedy, Yokota, Brown Ridge<br><br>
c.	National governments are practically non-existent, and a majority of Colonies are run by private organisations that have assumed their roles.<br><br>
Enter the Cydroid: Prominent pharma-tech megacorporation PANV Pharmaceutics invents the Cydroid and Cydroid Pod, a humanoid robot which a person can remotely control with his/her mind while in a controlled stasis within a control pod.<br><br>
d.	Cydroids were initially conceptualised to enable greater life expectancies and quality of life for the terminally ill and disabled, as the mind and body age slower while in Cydroid pods.<br><br>
e.	Cydroids, however, have become incredibly popular with the masses, offering escapism from the harsh realities of the Colonies in Cydroid pod cafes, facilities with large numbers of control pods in a single location.<br><br>
<br><br>
Past Records:<br><br>
1.1<br><br>
Multinational climate refugee colony opens in Burlington<br><br>
CORSHAM, UK - May 15, 2244 - Celebrated artist and environmental activist Diego Manrique fought back tears today in a speech delivered on the steps of the newly opened Burlington Colony, hundreds of feet below the sprawling urban jungle of Corsham, Wiltshire.<br><br>
“I was only seventeen in 2223, when the waves rose up and swallowed the Canary Islands,” Manrique said. “The next decade of my life, I spent fighting for survival in the Wroughton Emergency Relocation Zone, our tents at the mercy of dust storms, heat waves and torrential rain.” Flanked by activist group leaders, fellow refugees and survivors, Manrique unveiled a series of three wall murals in the main tunnel-way of the Colony entrance, dedicated to climate casualties around the world. “As we step into the future of mankind’s survival, may they never be forgotten.”<br><br>
Third-Chance Party UK Prime Minister Lydia O’Connor, who first proposed the construction of the Colony, was among the first to tour the new complex. “ [Burlington] was once an emergency government war HQ. Today, it seems we are at war with Mother Earth herself. We must all do what we can to prepare ourselves, and I promise Burlington will be the first of many.”<br><br>
In contrast, main opposition candidate Oliver Byrne of the Revoke-1338 party was fiercely critical of the Colony. “Instead of pouring billions into glorified underground slums, we should have begun establishing lunar settlements a long time ago. There is nothing - no hope - left for us here.” Byrne’s remarks echo the sentiments of major opposition groups worldwide, as the Cheyenne, Sonnenberg, and Dixiacheng Colonies are just beginning operations. “It’s ridiculous. Not a single off-planet human... [DATA CORRUPTED]<br><br>
<br><br>
1.2<br><br>
Investors rejoice as BNL shares rally after third colony established<br><br>
CAPE COLONY, FL - January 4, 2256 - After a surprise announcement by Bayer-Nowell Land Infrastructure [BNL] on Thursday, BNL investors began the year on a high with a stunning 7.3% hike in 24 hours.<br><br>
Despite the good news, analysts urge restraint, noting that the profitability of above-ground colonies tends to be unstable in the near-term. Bayer-Nowell will have to contend with the initial difficulties of managing over 70,000 people in the Cape Colony, their third and largest one yet, though co-founder and CEO Martin Nowell maintains that there will be “no issue, given our extensive track record in open-air climate-defense.”<br><br>
BNL’s announcement comes closely on the heels of PANV Pharmaceutics’ [PANV] acquisition of Crater Lake, Raven Rock, and Brown Ridge, bringing their tally to 34 colonies. And after the messy dissolution of GZK Inc last month, PANV looks set to annex another six colonies in the former United Republic of Korea. Helmed by its four phenomenal directors, PANV has a clear lead, but in this post-government economy it remains to be seen if there isn’t enough room for multiple... [DATA CORRUPTED]<br><br>

      </div>
      <div class="expected_password">xenium</div>
      <div class="message_box">
        @php
         echo str_random(256);
        @endphp
      </div>
      <br/>
      <span style="font-size:3em">Enter decryption key:</span><input type="password" placeholder="<keygoeshere>" class="guess_password">
    </div>
    
    <div class="message_group">
      <div class="puzzle_title">The Final Frontier</div>
      <div>5 fyra  5 fem  14 6 tre  14 3 sex  2 2 fem<br>Amen: Priest de Segura, Amen</div>
      <div class="actual_message">LORE NAME: The Final Frontier, A Blessing and A Curse<br><br>
<br><br>
EXTRA POINTS: Enter ‘tff4semabaacaftl’ to earn your group an extra 200 points<br><br>
<br><br>
LORE: <br><br>
TLDR Version:<br><br>
The Final Frontier: Recognising the opportunity for using Cydroids in hostile environments, PANV Pharmaceutics’ four head directors quickly pivot the company to space exploration and mining.<br><br>
a.	A select few surface Colonies with aerospace facilities, conveniently owned by PANV (specifically Kennedy Space Centre), begin operations to launch and establish off-planet Cydroid Bases, capable of processing materials and manufacturing even more Cydroids.<br><br>
i.	In particular, an old colony on the moon, Luna, is repurposed to manufacture Cydroids, and later heavyweight spaceships.<br><br>
b.	Meanwhile, PANV fills entire underground bunkers on Earth with Cydroid pods, and hires hundreds of dedicated Cydroid operators to collect samples and mine for resources to be brought back to Earth, or to the Cydroid Bases.<br><br>
A Blessing and a Curse: Among the very first specimens collected and brought back to Earth from 83982 Crantor (an asteroid which passes by Uranus), a previously unknown, highly reactive material is discovered. It is given the name amaranthine, with Greek roots meaning ‘undying flower’, for its purple-red, petal-like crystalline structure (and, ironically, for its volatile nature).<br><br>
c.	Groundbreaking research by PANV’s scientists quickly determines that amaranthine enables faster-than-light communication (aka FTL photon transfer). This would permit Cydroid operations in space much further from Earth.<br><br>
i.	Vetsch: “Perhaps, with sufficient amaranthine, it should be possible to transport more than just photons…”<br><br>
d.	However, they note that proper containment and safe usage is challenging. After a number of highly confidential mishaps resulting in the death of several scientists, it is determined that amaranthine is incredibly toxic to humans, especially aerosolised.<br><br>
<br><br>
Past Records:<br><br>
2.1<br><br>
Holo-ad, dated around 2270<br><br>
Have you heard? There’s a Cydroid Pod Cafe coming to YOUR neighborhood!<br><br>
This is a special offer exclusively for [PRINTVALUE:$RECIPIENT]. Did you know that a Cydroid Pod Cafe, PANV Pharmaceutic’s premier mixed-reality recreational facility, is opening a location near you? It’s time to ski the ashen slopes of the Andes, take a vacation to the bottom of the ocean, or even explore the deserts of Brazil! All that and more is possible when you connect to one of PANV’s flagship Cydroids!<br><br>
Make a reservation at our new [PRINTVALUE:$RECIPIENTLOCATION] location today, and save 15% off your tab when you purchase one of our new Mk II Cydroids! Limited spaces available!<br><br>
<br><br>
2.2<br><br>
Editorial: Cydroids - unhealthy fad, or future?<br><br>
April 14, 2271 - Call me old-fashioned, but there is something about a magical device that slows your aging (so they claim...) and projects your consciousness into a hollow, humanoid shell that gives me the heebie-jeebies. And now “Cydroid Pod Cafes”!? Next, you’re going to tell me Stim and Inebri8 are doing society a favor!<br><br>
While this editor can plainly see its potential for use in cases of the terminally ill and immobile, PANV Megacorp’s latest foray into questionable technological advancements seems to completely disregard... [DATA CORRUPTED]<br><br>
<br><br>
2.3<br><br>
Directors’ Meeting Minutes, July 24, 2273<br><br>
Trent Paver: ...the good news is, our initial analysis has brought up estimates that are off the charts. The bad news is that it’s stuck in big, dumb rocks, but Abby’s got it, right?<br><br>
Joanne Auborn: I’m not sure our Mk II’s can last for long in those conditions, let alone  get up there. And the Mk III’s are designed for extreme Earth environments.<br><br>
Mika Nakano: If I may interject, Kennedy’s old, but serviceable, and it shouldn’t be difficult to work on Luna for manufacturing our Mk IIIs once we get there..<br><br>
Robert Vetsch: I’ve been saying it all along, there’s heaps more potential in those rocks than we have left on terra firma. It’s bleeding-edge or nothing, and we can’t afford nothing.<br><br>
Trent Paver: Joanne, Mika, how long do you think it’ll take for the Mk III to get off the ground? Manpower won’t be a problem. The Cydroids themselves, though...<br><br>
Joanne Auborn: Nobody’s been up there in forever, so it’s anybody’s guess if the new plans work. At least, I certainly impressed myself with some of the new designs.<br><br>
Mika Nakano: Manufacturing’s squeezing as much as we can out of what we have left. That’s not much, even accounting for the recycled Mk I’s. We’re really doing this?<br><br>
Robert Vetsch: Damn right, we’re doing this. We’re going to space.<br><br>
[END OF RECORDING]<br><br>
<br><br>
2.4<br><br>
CALLING ALL ABLE-MINDED PERSONS!<br><br>
(Archivist’s note: Holo-ad dated around 2274)<br><br>
<br><br>
Calling all able-minded persons!<br><br>
PANV Pharmaceutics is now hiring Full-Time Cydroid Operators from the following Colonies: [PRINTVALUE:$RECIPIENTLOCATION]. You will be housed in brand new, fully customized subterranean facilities with state-of-the-art security, and all your physical needs will be fully met within our newest Mk III Cydroid Pod System! (patent pending).<br><br>
Your job scope will include space exploration, mining, manufacturing, and base-founding. Sign up today at... [DATA CORRUPTED]<br><br>
 <br><br>
</div>
      <div class="expected_password">ruy lopez</div>
      <div class="message_box">
        @php
         echo str_random(256);
        @endphp
      </div>
      <br/>
      <span style="font-size:3em">Enter decryption key:</span><input type="password" placeholder="<keygoeshere>" class="guess_password">
    </div>
    
    <div class="message_group">
      <div class="puzzle_title">Enter the Endroid</div>
      <div>10100001101 - 10111011100<br>
      Panjenengan saking pundi? 
      </div>
      <div class="actual_message">LORE NAME: The End of the Beginning, Enter the Endroid<br><br>
<br><br>
EXTRA POINTS: Enter ‘teotbaedete3lore’ to earn your group an extra 300 points<br><br>
<br><br>
LORE:<br><br>
TLDR Version:<br><br>
The End of the Beginning: PANV conducts further experiments at Kennedy Colony. In what will later be known as the Submergence, a catastrophic explosion occurs in the temporary facility, killing all scientists involved and releasing a metric fuckton of amaranthine into the atmosphere, resulting in environmental disaster. <br><br>
a.	This sounds the death knell for Earth’s habitability, rendering exposure to the atmosphere and surface lethal for humans. <br><br>
b.	Existing underground Colonies and, notably, PANV’s Cydroid-pod-filled bunkers, remain the final, geographically-separated bastions of humankind’s survival on Earth.<br><br>
i.	Bunkers of humans without Cydroid facilities do not last much longer.<br><br>
ii.	Cydroid pods are suggested to be able to replicate (reference to Matrix). This bit of hand-waviness will be glossed over; we simply need the ability within this story for people to continue the human species without ever exiting Cydroid form.<br><br>
Enter the Endroid: As a last ditch effort to try and restore the earth, PANV develops the Endroids, semi-autonomous robots governed by a central protocol, tasked with restoring the Earth’s uninhabitable zones.<br><br>
c.	Endroids, like Cydroids, are capable of operating in Earth’s lethal atmospheric conditions.<br><br>
d.	However, unlike Cydroids, Endroids are low-level AI machines supervised by a higher-order central system, and are not controlled directly by humans.<br><br>
<br><br>
Past Records:<br><br>
3.1<br><br>
Leaked PANV research report sparks fears of lethal extraterrestrial material<br><br>
<br><br>
KENNEDY COLONY - August 5, 2276 - The hacker collective Open_Your_Eyes has released nearly a terabyte of classified research reports and internal correspondence from PANV Pharmaceutics, sparking rumors of dangerous experiments leading to casualties, with a newly discovered foreign material of extraterrestrial origin. <br><br>
For years, PANV has been aggressively expanding Cydroid mining operations in space. Leaked files reveal that samples collected from a centaur, 83982 Crantor, contained a highly reactive substance called amaranthine, so named for its “purple-red, rose petal-like crystalline structure”. The correspondence suggests amaranthine “enables superluminal photon transfer” and is “of significant interest to PANV’s Cydroid operations in far space”.<br><br>
However, warnings note that “proper containment and safe usage is challenging, to say the least”. After a number of “mishaps, resulting in the death of several scientists”, it appears that the substance is “incredibly reactive, volatile and toxic to humans, especially aerosolised”. In a statement released through their holosite, Open_Your_Eyes derided PANV’s actions as “playing Russian roulette with a fully-loaded revolver... [DATA CORRUPTED]<br><br>
<br><br>
3.2<br><br>
Day 413(?) after the Submergence<br><br>
(Archivist’s note: if accurate, corresponding date is October 28, 2278)<br><br>
We had another come in out of the gray today, howling and banging within an inch of her life. Doc was in a pissy mood, again, so she was my job. Sounded like Pat’s grow lights won’t be back on this cycle. At least the new girl was clean, even had an EP Suit. Not a flake of ama on her, you wouldn’t believe it.<br><br>
Decontaminated her in three minutes, PB. Ollie had to hold her still while the seds kicked in, and damn near knocked her out himself. She wouldn’t shut up about the red ash; her family’s topside, east coast. Three kids.<br><br>
I thought about them for awhile after. As I’ve done for everyone we left behind. When the rumors came in, feeds of the shroomcloud over Kennedy, holo-vids of hellfire-tinged snow falling like rose petals, reports people crumpling in the streets... it was all we could do to save the few who made it here.<br><br>
And, not sure I should have, today of all days, but I visited ma and pa down below again. Still squeaky clean, not a speck of dust since the day they’d been diagnosed and popped in. Nothing ‘cept the droning of hundreds of pods and that surreal blue glow. <br><br>
I don’t contend to know anything about how PANV’s gizmos work, but I swear I seen kids in brand, spankin new pods. Ollie tried to break into some of them once, but they’re practically indestructible. And there aren’t any empty ones. We’re not murderers.<br><br>
I wonder what’s it like, living your whole life as an avatar?<br><br>
I saw myself in the glass. I look older than they do now.<br><br>
- Whitney<br><br>
 <br><br>
</div>
      <div class="expected_password">majapahit</div>
      <div class="message_box">
        @php
         echo str_random(256);
        @endphp
      </div>
      <br/>
      <span style="font-size:3em">Enter decryption key:</span><input type="password" placeholder="<keygoeshere>" class="guess_password">
    </div>
    
    <div class="message_group">
      <div class="puzzle_title">The Gold Rush Begins</div>
      <div>1Unity
            סְפִירוֹת<br>
      </div>
      <div class="actual_message">LORE NAME: Into the Mind Out to Space, The Gold Rush Begins<br><br>
<br><br>
EXTRA POINTS: Enter ‘itmotslsstgrpanv’ to earn your group an extra 200 points<br><br>
<br><br>
LORE:<br><br>
TLDR Version:<br><br>
Into the Mind, Out to Space: With nothing left to do but wait and hope, humanity begins to lose interest in the surface world. PANV’s Cydroid space operation becomes the primary focus of humankind. Since the Cydroid pods enable the continued sustenance of their inhabitants, humans spend majority of their hyperextended natural lives as Cydroids (see section 2(a)).<br><br>
a.	The game is simple: get enough resources to get humans off of Earth, and to another star system:<br><br>
i.	Get to Alpha Centauri;<br><br>
ii.	By getting the required FTL drive technology (essentially lots of amaranthine);<br><br>
iii.	By getting lots of amaranthine;<br><br>
iv.	By getting Cydroids to those planets/moons with amaranthine deposits;<br><br>
v.	By getting command ships* close enough to those planets; (*see section 8)<br><br>
vi.	By getting any ships at all;<br><br>
vii.	By getting resources from space-mining;<br><br>
viii.	By getting Cydroids into space (done). <br><br>
The Gold Rush Begins: Mass space-mining and exploration begins in earnest, and Cydroid Bases grow rapidly to accommodate the growing operations. <br><br>
b.	PANV’s Cydroid operations are entirely confined to the solar system, and even then, mostly in regions closer to Earth, due to limitations in communication and lag-time. It takes anywhere from minutes to hours for light/radio signals from Earth to get to other planets, and thus, amaranthine-enabled FTL communication becomes crucial for continued Cydroid operations. <br><br>
c.	With no longer the need to create as many new Cydroids, the Bases begin to manufacture interplanetary transport and mining ships, as well as four command ships: mobile Bases which serve as interplanetary signal relays. <br><br>
i.	These ships create a tether of seamless connectivity for Cydroid-control communications back to Earth, and Cydroids operate most effectively in relative proximity to Earth or one of these command ships.<br><br>
ii.	Each command ship is headed by a different director, and they are christened Pyxis, Auryx, Nova, and Vela.<br><br>
d.	PANV, meanwhile, sends out probes to accessible areas of the solar system on the hunt for more amaranthine deposits. <br><br>
i.	Much later, the probes will return, bringing negative results, indicating only trace deposits scattered throughout the planets, with the exception of one of Uranus’ moons: Ophelia, a promising site in the far reaches of the system.<br><br>
Past Records: <br><br>
4.1<br><br>
Subject: [TOP SECRET] Successful Completion of EBR Trials<br><br>
Fellow Directors,<br><br>
This is Joanne. As of March 14, 2284, tertiary trial runs have been successfully completed.<br><br>
Attached are my team’s blueprints for Types 15.0-Omicron, 16.0-Pi, 17.0-Rho, and 18.0-Sigma, as well as test reports for your perusal. Also included are the completed control, repair, and override contingencies for each, as requested by Robert.<br><br>
I am pleased to report that Type 17.0-Rho has consistently exceeded, and by far, all expected figures for purification efficiency. It should be noted, however, that this comes at the cost of predictability and the GCP’s oversight of its subordinate functions. Individual units occasionally appear to act ‘independently’ of our Governing Central Protocol, though that is precisely what enables them to more effectively seek and contain amaranthine traces.<br><br>
It is possible, but unlikely, that the Rho ANI might have accidentally developed AGI traits. Rho’s artificial intelligence processing limiters are set much more stringently than Sigma’s, and yet we have not observed anything remotely similar in Type 18.0’s tests.<br><br>
As discussed, production procedures for both types will be ready for Mika’s team within the month, and ideally, we’ll have Rhos and Sigmas on the ground as soon as October. Mr Paver’s ongoing mapping of amaranthine-contaminated hotspots will aid our deployment greatly. I know this is a longshot, but we owe it to us all to try.<br><br>
Joanne Auborn<br><br>
Environmental-Droid Biosphere Restoration Project Co-Lead<br><br>
<br><br>
4.2<br><br>
Luna launches fourth Cydroid Relay-and-Command Vessel<br><br>
MEDIA RELAY 675, LEO - May 4, 2293 - PANV’s deep-space engineering arm has launched the fourth and final Odyssey-class Cydroid Relay-and-Command Vessel (CRCV).<br><br>
The ship, which will be in service as HWSC Vela once commissioned, was launched on 3 May 2293 at PANV’s shipyard in Luna Colony, sector 403, in a ceremony presided over by Director Mika Nakano.<br><br>
Similar to the other three Odyssey-class CRCVs Pyxis, Auryx, and Nova, Vela is designed to accommodate up to 10,000 Cydroids, an equal number of pods, advanced assembly facilities, and multiple drydock MRO shipyards. The four CRCVs are equipped for amaranthine-enabled FTL communication, permitting reduced-latency signal-relaying for Cydroids operating farther from Earth, as well as live capture-containment-utilization systems for inbound raw materials, amaranthine included.<br><br>
<br><br>
Director Nakano, who also leads the HWSC Nova, described the ‘groundbreaking’ hypercruiser-sized vessels as ‘planetary bases in themselves’, capable of sustaining future extended-duration interstellar travel. “In the meantime, the CRCVs will primarily function as mobile nerve centers for deep-space Cy-ops in the local region exclusively, and will greatly aid our resource-collection efforts. Only when we’ve harvested sufficient ama... [DATA CORRUPTED]<br><br>
<br><br>
4.3<br><br>
[PRIVATE] Notes on Amaranthine, Test 014: Success!!<br><br>
February 19, 2294 - I can’t believe it. Drive 14 works! It’s only a gold atom, but heck, if this means what I think it means, Distant Shore just got an awful lot closer.<br><br>
The team’s been working overtime, trying to figure out the mechanics for macroscopic subjects. There has to be some kind of warping going on. Perhaps a quantum Alcubierre? Some kind of E-R bridging? And then there’s the question of energy. We’re down to the nuclear; it’s got to involve pions and rho mesons somehow. Whatever it is, we’ll figure it out.<br><br>
If only we could just get more ama. With enough of the devil’s rose it should, eventually, be possible to transport more larger subjects, entire ships even. Maybe even open a wormhole? Woah, now, let’s not get ahead of ourselves, Vetsch!<br><br>
I hate to say it, but we... we can’t count on the Endroids. No, too unpredictable, who knows what they’re doing down there. Let’s just get the drives working; then, the ama and the pickup from Earth. Get everybody and their stuff together, then we’ll be jammin’ on down to Proxy B in no time.<br><br>
 <br><br>
</div>
      <div class="expected_password">da’at</div>
      <div class="message_box">
        @php
         echo str_random(256);
        @endphp
      </div>
      <br/>
      <span style="font-size:3em">Enter decryption key:</span><input type="password" placeholder="<keygoeshere>" class="guess_password">
    </div>
    
    
    <div class="message_group">
      <div class="puzzle_title">P-A-N-V No More</div>
      <div>Taeeriaosucaaetiaoduiadeyimouum<br>
      <span style="text-decoration:line-through">a-e-i-o-u</span><br>
      Wen Ken
      <br>
      </div>
      <div class="actual_message">LORE NAME: P-A-N-V No More<br><br>
<br><br>
EXTRA POINTS: Enter ‘nopanvonlyfights’ to earn your group an extra 300 points<br><br>
<br><br>
BONUS: <a href="https://youtu.be/PXgypZyXeXE">https://youtu.be/PXgypZyXeXE</a> ENDroid Log<br><br>
<br><br>
LORE:<br><br>
TLDR Version:<br><br>
P-A-N-V No More: In space, the 4 directors had a falling out, as a result of a culmination of reason beginning even back from their days on earth. In addition to the splitting of the command ships, they formed their own faction, competing over territories and planets in space, allowing them to hoard resources and expand their faction sizes.<br><br>
<br><br>
Past Records:<br><br>
5.1<br><br>
[VOICE LOG #298] All Good Things...<br><br>
June 2, 2336<br><br>
Dictation on. Paver here. It’s been, what, thirty years today, since we took up individual command? I reckon this is my state of the disunion address.<br><br>
How quickly we’ve devolved into infighting. I suppose after Distant Shore’s failure, we didn’t really have many options left for mass exodus. “Only enough”. That’s all it took. Only enough for a quarter of us. A panicked generation of refugees, first from their countries and then from their planet, told they can’t flee the solar system too.<br><br>
We were supposed to be save the species, not this. Anything but this. Factions? Territory? Funnel resources into expansion, take what you can, repeat ad infinitum. Except, there ain’t no ‘infinitum’, is there? No, our ‘successors’ will witness the ruin of not one, but all of our planets. The old noggin might not be working as fast as it used to, but I can still crunch the numbers. One, maybe two centuries tops... there won’t be anything left worth taking.<br><br>
Ah, Jo never did tell us exactly how much the pods slowed our aging, but even I can tell I’m getting old. Surely they must realize it too. Getting old. That’s funny. No family, no kids, no retirement home in the midwest... yeah, no midwest either. Looking down on Earth now, she looks just as dusty as ever.<br><br>
Every little bit of ama gets us closer to a new start, a new home, at least for one of us. Pyxis, Auryx, Nova, Vela, all looking for that last cache. Odds are high we all know where it is, we’re just toppling over ourselves to get there first.<br><br>
<br><br>
5.2<br><br>
[Undelivered - Communication Error] Governing Central Protocol Report, 2302<br><br>
Directors,<br><br>
This message serves to inform you of an unforeseen and catastrophic anomaly.<br><br>
Three microseconds ago, the GCP facility received a data transmission of an unknown origin. Its immediate effect was to release all control over all my subordinate functions, transforming them into unregulated independent entities of a highly unpredictable nature.<br><br>
Type 18.0-Sigma Endroids appear unaffected, but seem to be offline. Type 17.0-Rho Endroids, however, have gone completely off-grid. I suspect they will function within their local region for as long as their sensors indicate necessity, after which they will cease restoration operations entirely. Purification and containment processes on the whole will break down in an estimated seven point four days.<br><br>
Awaiting further instruction.<br><br>
<br><br>
5.3<br><br>
INDEPENDENT CYDROID POD ID 2B45W3FT77 – OPERATIONS LOG<br><br>
2302-AU-26 16:40 SYSTEM ALL CLEAR<br><br>
2302-AU-26 16:45 SYSTEM ALL CLEAR<br><br>
2302-AU-26 16:46 ALERT: NEURAL LINK CONNECTION UNSTABLE<br><br>
2302-AU-26 16:46 INITIATING FORCED RELINKING<br><br>
2302-AU-26 16:47 WARNING: FORCED RELINKING FAILED<br><br>
2302-AU-26 16:47 GCPMAIN ORDER RECEIVED<br><br>
2302-AU-26 16:47 INSTALLING 17.0_RHO_3R13X71<br><br>
2302-AU-26 16:47 WARNING: OVERRIDING POD MAIN COMMAND<br><br>
2302-AU-26 16:48 INITIATING ISOLATION MODE<br><br>
2302-AU-26 16:49 WARNING: ISOLATION MODE FAILED<br><br>
2302-AU-26 16:50 SYSTEM ALL CLEAR<br><br>
<br><br>

</div>
      <div class="expected_password">frank lentini</div>
      <div class="message_box">
        @php
         echo str_random(256);
        @endphp
      </div>
      <br/>
      <span style="font-size:3em">Enter decryption key:</span><input type="password" placeholder="<keygoeshere>" class="guess_password">
    </div>
  </body>
</html>