/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');


window.$ = require("jquery");

import anime from 'animejs';

window.aos = require("aos");
window.anime = anime;

// import ScrollMagic from "scrollmagic";

window.start = function() {
    console.log("hello world!")
    let $ = window.$;
    window.aos.init();
    $("content").removeClass("loading");
    //$("content").css("opacity",0);
    document.querySelector("svg.globe").querySelectorAll("line, polyline, path, polygon").forEach(function(elem) {
        elem.setAttribute("data-length", elem.getTotalLength());
        elem.style.strokeDasharray = elem.getTotalLength();
        elem.style.strokeDashoffset = elem.getTotalLength();
    });
    var tl = anime.timeline({
        easing: "linear"
    }).add({
        targets: ".backgrounds",
        opacity: [0, 1],
        duration: 500,
        endDelay: 500,
    }).add({
        targets: "#logosection",
        opacity: [0, 1],
        delay: 100,
        duration: 1500,
        endDelay: 500
    }).add({
        targets: document.querySelector("svg.globe").querySelectorAll("line, polyline, path, polygon"),
        easing: "linear",
        strokeDashoffset: 0,
        delay: -2000,
        duration: 2500,
    }).add({
        targets: "#logosection",
        translateX: [-100, 0],
        easing: "easeOutExpo",
        duration: 1500,
        complete: function(anim) {
            tl2.play();
            redrawGlobe();
        }
    }).add({
        targets: ".frame:nth-child(1) .subframe:nth-child(1)",
        opacity: [0, 1],
        translateY: [-100, 0],
        easing: "easeOutExpo",
        duration: 1500,
    }, "-=1500").add({
        targets: ".frame:nth-child(1) .subframe:nth-child(1) .subtitle",
        opacity: [0, 1],
        translateY: [-75, 0],
        easing: "easeOutExpo",
        duration: 1500,
    });
    tl.play();
    var tl2 = anime({
        targets: $("svg.globe")[0],
        easing: "linear",
        rotate: "+=360",
        duration: 25000,
        loop: true,
        autoplay: false
    });
    var redrawGlobe = function() {
        anime({
            targets: document.querySelector("svg.globe").querySelectorAll("line, polyline, path, polygon"),
            strokeDashoffset: function(t, i, il) {
                //console.log(t.style.strokeDashoffset);
                if (t.style.strokeDashoffset != 0) {
                    return 0;
                } else {
                    return Math.random() * 2 * t.getAttribute("data-length");
                }
            },
            easing: "linear",
            duration: 3000,
            complete: redrawGlobe
        });
    }
    /*
    var controller = new ScrollMagic.Controller();
    // create a scene
    new ScrollMagic.Scene({
            duration: window.innerHeight * 0.5, // the scene should last for a scroll distance of 100px
        })
        .on("progress", function(event) {
            //to be added
        })
        .setPin(".frame:nth-of-type(1)", {
            pushFollowers: true
        }) // pins the element for the the scene's duration
        .addTo(controller); // assign the scene to the controller
    */
    let $backgrounds = $(".backgrounds");
    let waiting = false
    window.addEventListener("scroll", function(e) {
        if (waiting) {
            return;
        } else if (window.scrollY > window.innerHeight) {
            return
        }
        waiting = true;
        let blur = function() {
            let blurAmt = 4 * Math.min(window.scrollY / window.innerHeight, 1);
            let opacityAmt = 1 - Math.min(window.scrollY / window.innerHeight, 1) + 0.75;
            $backgrounds.css("filter", "blur(" + blurAmt + "px)");
            $backgrounds.css("opacity", opacityAmt);
        }
        blur()
        setTimeout(function() {
            waiting = false;
        }, 100);
        setTimeout(blur, 200);
    });
    document.body.addEventListener("mousemove", function(e) {
        let x = (e.screenX / window.innerWidth) - 1;
        let y = (e.screenY / window.innerHeight) - 1;
        let xShift = 50 * x;
        let yShift = 50 * y;
        $(".backgrounds img").first().css("transform", "translate(" + xShift + "px," + yShift + "px)");
    });
    delete window.start;
}