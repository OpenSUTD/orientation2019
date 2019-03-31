document.addEventListener("DOMContentLoaded", function() {
    var total = document.images.length;
    var current = 0;
    //initialise preloader
    var circle = document.querySelector('.loaderRingCircle');
    var radius = circle.r.baseVal.value;
    var circumference = radius * 2 * Math.PI;
    circle.style.strokeDasharray = `${circumference} ${circumference}`;
    circle.style.strokeDashoffset = `${circumference}`;
    //count cached items
    current = Array.from(document.querySelectorAll("content *")).reduce((sum, elem) =>
        sum + ((elem.complete && elem.naturalHeight !== 0) ? 1 : 0),0);
    document.querySelectorAll("content *").forEach(function(elem, i) {
        elem.addEventListener("load", function() {
            console.log("loaded");
            current++;
            var charElems = Array.from(document.querySelectorAll(".loaderText span"))
            var chars = charElems.slice(0, Math.ceil(charElems.length * current / total));
            chars.forEach(function(elem, i) {
                elem.classList.remove("loading")
                elem.classList.add("loaded")
                void elem.offsetWidth;
            });
            circle.style.strokeDashoffset = circumference * (1 - Math.min(current / total, 1));
        });
    });
    window.addEventListener("load", function() {
        var loaderTexts = document.querySelectorAll('.loaderText span');
        var delays = Array.from({
            length: loaderTexts.length
        }, () => Math.floor(Math.random() * 1000));
        loaderTexts.forEach(function(elem, i) {
            elem.classList.remove("loaded");
            elem.classList.add("ready");
            var readyString = "Ready";
            window.setTimeout(function() {
                elem.innerHTML = (i >= readyString.length ? "" : readyString[i]);
                if (delays[i] == delays.reduce((max, cur) => cur >= max ? cur : max, 0)) {
                    window.setTimeout(function() {
                        document.querySelector("loader").addEventListener("animationend", function(e) {
                            if (e.animationName == "loaderTextStartAnimation") {
                                var startEvent = function(e) {
                                    if (e.animationName == "loaderExitAnimation") {
                                        if (window.start) {
                                            window.start();
                                        }
                                    }
                                };
                                document.querySelector("loader").addEventListener("animationend", startEvent);
                                document.querySelector("loader").classList.add("exit");
                            }
                        });
                        loaderTexts.forEach(function(elem, i) {
                            elem.classList.remove("ready")
                            elem.classList.add("start")
                        });
                    }, 500);
                }
            }, delays[i]);
        });
        circle.style.stroke = "blue";
        circle.parentElement.classList.add("ready");
    });
    console.log("Delegation complete");
}, {
    once: true
})