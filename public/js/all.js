$(window).on("scroll",function(){$(window).scrollTop()>=50?$(".sticky").addClass("stickyadd"):$(".sticky").removeClass("stickyadd")}),$(".navbar-nav a, .scroll_down a").on("click",function(e){var t=$(this);$("html, body").stop().animate({scrollTop:$(t.attr("href")).offset().top-0},1500,"easeInOutExpo"),e.preventDefault()}),$("#navbarCollapse").scrollspy({offset:20});var a=0;$(window).on("scroll",function(){var e=$("#counter").offset().top-window.innerHeight;0==a&&$(window).scrollTop()>e&&($(".lan_fun_value").each(function(){var e=$(this),t=e.attr("data-count");$({countNum:e.text()}).animate({countNum:t},{duration:2e3,easing:"swing",step:function(){e.text(Math.floor(this.countNum))},complete:function(){e.text(this.countNum)}})}),a=1)}),$(window).on("load",function(){var e=$(".work-filter"),t=$("#menu-filter");e.isotope({filter:"*",layoutMode:"masonry",animationOptions:{duration:750,easing:"linear"}}),t.find("a").on("click",function(){var o=$(this).attr("data-filter");return t.find("a").removeClass("active"),$(this).addClass("active"),e.isotope({filter:o,animationOptions:{animationDuration:750,easing:"linear",queue:!1}}),!1})}),$(".img-zoom").magnificPopup({type:"image",closeOnContentClick:!0,mainClass:"mfp-fade",gallery:{enabled:!0,navigateByImgClick:!0,preload:[0,1]}}),$("#owl-demo").owlCarousel({autoPlay:7e3,stopOnHover:!0,navigation:!1,paginationSpeed:1e3,goToFirstSpeed:2e3,singleItem:!0,autoHeight:!0}),$(".blog_play").magnificPopup({disableOn:700,type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!1,fixedContentPos:!1}),$(window).on("scroll",function(){$(this).scrollTop()>100?$(".back_top").fadeIn():$(".back_top").fadeOut()}),$(".back_top").click(function(){return $("html, body").animate({scrollTop:0},1e3),!1}),$(".element").each(function(){var e=$(this);e.typed({strings:e.attr("data-elements").split(","),typeSpeed:100,backDelay:3e3})}),$("body").bind("cut copy paste",function(e){e.preventDefault()}),window.onload=function(){function e(e){return e.stopPropagation?e.stopPropagation():window.event&&(window.event.cancelBubble=!0),e.preventDefault(),!1}document.addEventListener("contextmenu",function(e){e.preventDefault()},!1),document.addEventListener("keydown",function(t){t.ctrlKey&&t.shiftKey&&73==t.keyCode&&e(t),t.ctrlKey&&t.shiftKey&&74==t.keyCode&&e(t),83==t.keyCode&&(navigator.platform.match("Mac")?t.metaKey:t.ctrlKey)&&e(t),t.ctrlKey&&85==t.keyCode&&e(t),123==event.keyCode&&e(t)},!1)};
!function(t,e){t.fn.extend({scrollspy:function(n){var a={namespace:"scrollspy",activeClass:"active",animate:!1,offset:0,container:e};n=t.extend({},a,n);var o=function(t,e){return parseInt(t,10)+parseInt(e,10)},r=function(e){for(var n=[],a=0;a<e.length;a++){var o=e[a],r=t(o).attr("href"),f=t(r);if(f.length>0){var s=Math.floor(f.offset().top),i=s+Math.floor(f.outerHeight());n.push({element:f,hash:r,top:s,bottom:i})}}return n},f=function(e,n){for(var a=0;a<e.length;a++){var o=t(e[a]);if(o.attr("href")===n)return o}},s=function(e){for(var a=0;a<e.length;a++){var o=t(e[a]);o.parent().removeClass(n.activeClass)}};return this.each(function(){for(var a=this,i=t(n.container),l=t(a).find("a"),c=0;c<l.length;c++){var h=l[c];t(h).on("click",function(a){var r=t(this).attr("href"),f=t(r);if(f.length>0){var s=o(f.offset().top,n.offset);n.animate?t("html, body").animate({scrollTop:s},1e3):e.scrollTo(0,s),a.preventDefault()}})}var v=r(l);i.bind("scroll."+n.namespace,function(){for(var e,r={top:o(t(this).scrollTop(),Math.abs(n.offset)),left:t(this).scrollLeft()},i=0;i<v.length;i++){var c=v[i];if(r.top>=c.top&&r.top<c.bottom){var h=c.hash;if(e=f(l,h)){n.onChange&&n.onChange(c.element,t(a),r),s(l),e.parent().addClass(n.activeClass);break}}}!e&&n.onExit&&n.onExit(t(a),r)})})}})}(jQuery,window,document,void 0);
// The MIT License (MIT)

// Typed.js | Copyright (c) 2014 Matt Boldt | www.mattboldt.com

// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:

// The above copyright notice and this permission notice shall be included in
// all copies or substantial portions of the Software.

// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
// THE SOFTWARE.




!function($){

    "use strict";

    var Typed = function(el, options){

        // chosen element to manipulate text
        this.el = $(el);

        // options
        this.options = $.extend({}, $.fn.typed.defaults, options);

        // text content of element
        this.baseText = this.el.text() || this.el.attr('placeholder') || '';

        // typing speed
        this.typeSpeed = this.options.typeSpeed;

        // add a delay before typing starts
        this.startDelay = this.options.startDelay;

        // backspacing speed
        this.backSpeed = this.options.backSpeed;

        // amount of time to wait before backspacing
        this.backDelay = this.options.backDelay;

        // input strings of text
        this.strings = this.options.strings;

        // character number position of current string
        this.strPos = 0;

        // current array position
        this.arrayPos = 0;

        // number to stop backspacing on.
        // default 0, can change depending on how many chars
        // you want to remove at the time
        this.stopNum = 0;

        // Looping logic
        this.loop = this.options.loop;
        this.loopCount = this.options.loopCount;
        this.curLoop = 0;

        // for stopping
        this.stop = false;

        // show cursor
        this.showCursor = this.isInput ? false : this.options.showCursor;

        // custom cursor
        this.cursorChar = this.options.cursorChar;

        // attribute to type
        this.isInput = this.el.is('input');
        this.attr = this.options.attr || (this.isInput ? 'placeholder' : null);

        // All systems go!
        this.build();
    };

    Typed.prototype =  {

        constructor: Typed

        , init: function(){
            // begin the loop w/ first current string (global self.string)
            // current string will be passed as an argument each time after this
            var self = this;
            self.timeout = setTimeout(function() {
                // Start typing
                self.typewrite(self.strings[self.arrayPos], self.strPos);
            }, self.startDelay);
        }

        , build: function(){
            // Insert cursor
            if (this.showCursor === true){
                this.cursor = $("<span class=\"typed-cursor\">" + this.cursorChar + "</span>");
                this.el.after(this.cursor);
            }
            this.init();
        }

        // pass current string state to each function, types 1 char per call
        , typewrite: function(curString, curStrPos){
            // exit when stopped
            if(this.stop === true)
                return;

            // varying values for setTimeout during typing
            // can't be global since number changes each time loop is executed
            var humanize = Math.round(Math.random() * (100 - 30)) + this.typeSpeed;
            var self = this;

            // ------------- optional ------------- //
            // backpaces a certain string faster
            // ------------------------------------ //
            // if (self.arrayPos == 1){
            //  self.backDelay = 50;
            // }
            // else{ self.backDelay = 500; }

            // contain typing function in a timeout humanize'd delay
            self.timeout = setTimeout(function() {
                // check for an escape character before a pause value
                // format: \^\d+ .. eg: ^1000 .. should be able to print the ^ too using ^^
                // single ^ are removed from string
                var charPause = 0;
                var substr = curString.substr(curStrPos);
                if (substr.charAt(0) === '^') {
                    var skip = 1;  // skip atleast 1
                    if(/^\^\d+/.test(substr)) {
                        substr = /\d+/.exec(substr)[0];
                        skip += substr.length;
                        charPause = parseInt(substr);
                    }

                    // strip out the escape character and pause value so they're not printed
                    curString = curString.substring(0,curStrPos)+curString.substring(curStrPos+skip);
                }

                // timeout for any pause after a character
                self.timeout = setTimeout(function() {
                    if(curStrPos === curString.length) {
                        // fires callback function
                        self.options.onStringTyped(self.arrayPos);

                        // is this the final string
                        if(self.arrayPos === self.strings.length-1) {
                            // animation that occurs on the last typed string
                            self.options.callback();

                            self.curLoop++;

                            // quit if we wont loop back
                            if(self.loop === false || self.curLoop === self.loopCount)
                                return;
                        }

                        self.timeout = setTimeout(function(){
                            self.backspace(curString, curStrPos);
                        }, self.backDelay);
                    } else {

                        /* call before functions if applicable */
                        if(curStrPos === 0)
                            self.options.preStringTyped(self.arrayPos);

                        // start typing each new char into existing string
                        // curString: arg, self.baseText: original text inside element
                        var nextString = self.baseText + curString.substr(0, curStrPos+1);
                        if (self.attr) {
                            self.el.attr(self.attr, nextString);
                        } else {
                            self.el.text(nextString);
                        }

                        // add characters one by one
                        curStrPos++;
                        // loop the function
                        self.typewrite(curString, curStrPos);
                    }
                    // end of character pause
                }, charPause);

                // humanized value for typing
            }, humanize);

        }

        , backspace: function(curString, curStrPos){
            // exit when stopped
            if (this.stop === true) {
                return;
            }

            // varying values for setTimeout during typing
            // can't be global since number changes each time loop is executed
            var humanize = Math.round(Math.random() * (100 - 30)) + this.backSpeed;
            var self = this;

            self.timeout = setTimeout(function() {

                // ----- this part is optional ----- //
                // check string array position
                // on the first string, only delete one word
                // the stopNum actually represents the amount of chars to
                // keep in the current string. In my case it's 14.
                // if (self.arrayPos == 1){
                //  self.stopNum = 14;
                // }
                //every other time, delete the whole typed string
                // else{
                //  self.stopNum = 0;
                // }

                // ----- continue important stuff ----- //
                // replace text with base text + typed characters
                var nextString = self.baseText + curString.substr(0, curStrPos);
                if (self.attr) {
                    self.el.attr(self.attr, nextString);
                } else {
                    self.el.text(nextString);
                }

                // if the number (id of character in current string) is
                // less than the stop number, keep going
                if (curStrPos > self.stopNum){
                    // subtract characters one by one
                    curStrPos--;
                    // loop the function
                    self.backspace(curString, curStrPos);
                }
                // if the stop number has been reached, increase
                // array position to next string
                else if (curStrPos <= self.stopNum) {
                    self.arrayPos++;

                    if(self.arrayPos === self.strings.length) {
                        self.arrayPos = 0;
                        self.init();
                    } else
                        self.typewrite(self.strings[self.arrayPos], curStrPos);
                }

                // humanized value for typing
            }, humanize);

        }

        // Start & Stop currently not working

        // , stop: function() {
        //     var self = this;

        //     self.stop = true;
        //     clearInterval(self.timeout);
        // }

        // , start: function() {
        //     var self = this;
        //     if(self.stop === false)
        //        return;

        //     this.stop = false;
        //     this.init();
        // }

        // Reset and rebuild the element
        , reset: function(){
            var self = this;
            clearInterval(self.timeout);
            var id = this.el.attr('id');
            this.el.after('<span id="' + id + '"/>')
            this.el.remove();
            this.cursor.remove();
            // Send the callback
            self.options.resetCallback();
        }

    };

    $.fn.typed = function (option) {
        return this.each(function () {
            var $this = $(this)
                , data = $this.data('typed')
                , options = typeof option == 'object' && option;
            if (!data) $this.data('typed', (data = new Typed(this, options)));
            if (typeof option == 'string') data[option]();
        });
    };

    $.fn.typed.defaults = {
        strings: ["These are the default values...", "You know what you should do?", "Use your own!", "Have a great day!"],
        // typing speed
        typeSpeed: 0,
        // time before typing starts
        startDelay: 0,
        // backspacing speed
        backSpeed: 0,
        // time before backspacing
        backDelay: 1500,
        // loop
        loop: true,
        // false = infinite
        loopCount: false,
        // show cursor
        showCursor: true,
        // character for cursor
        cursorChar: "|",
        // attribute to type (null == text)
        attr: null,
        // call when done callback function
        callback: function() {},
        // starting callback function before each string
        preStringTyped: function() {},
        //callback for every typed string
        onStringTyped: function() {},
        // callback for reset
        resetCallback: function() {}
    };


}(window.jQuery);