/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');


window.$ = require("jquery");

window.start = function() {
    console.log("hello world!")
    let $ = window.$;
    $("content").removeClass("loading");
    delete window.start;
}
