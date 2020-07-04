/* @preserve
    _____ __ _     __                _
   / ___// /(_)___/ /___  ____      (_)___
  / (_ // // // _  // -_)/ __/_    / /(_-<
  \___//_//_/ \_,_/ \__//_/  (_)__/ //___/
                              |___/

  Version: 1.7.3
  Author: Nick Piscitelli (pickykneee)
  Website: https://nickpiscitelli.com
  Documentation: http://nickpiscitelli.github.io/Glider.js
  License: MIT License
  Release Date: October 25th, 2018

*/
function homeFillText(){const e=document.querySelector(".homeBanner__btn"),t=document.querySelector(".homeBanner__textFill");e.addEventListener("mouseenter",(function(){t.classList.add("js-show")})),e.addEventListener("mouseleave",(function(){t.classList.remove("js-show")}))}!function(e){"function"==typeof define&&define.amd?define(e):"object"==typeof exports?module.exports=e():e()}((function(){var e="undefined"!=typeof window?window:this,t=e.Glider=function(t,i){var r=this;if(t._glider)return t._glider;if(r.ele=t,r.ele.classList.add("glider"),(r.ele._glider=r).opt=Object.assign({},{slidesToScroll:1,slidesToShow:1,resizeLock:!0,duration:.5,easing:function(e,t,i,r,n){return r*(t/=n)*t+i}},i),r.animate_id=r.page=r.slide=0,r.arrows={},r._opt=r.opt,r.opt.skipTrack)r.track=r.ele.children[0];else for(r.track=document.createElement("div"),r.ele.appendChild(r.track);1!==r.ele.children.length;)r.track.appendChild(r.ele.children[0]);r.track.classList.add("glider-track"),r.init(),r.resize=r.init.bind(r,!0),r.event(r.ele,"add",{scroll:r.updateControls.bind(r)}),r.event(e,"add",{resize:r.resize})},i=t.prototype;return i.init=function(e,t){var i=this,r=0,n=0;i.slides=i.track.children,[].forEach.call(i.slides,(function(e){e.classList.add("glider-slide")})),i.containerWidth=i.ele.clientWidth;var s=i.settingsBreakpoint();if(t=t||s,"auto"===i.opt.slidesToShow||void 0!==i.opt._autoSlide){var o=i.containerWidth/i.opt.itemWidth;i.opt._autoSlide=i.opt.slidesToShow=i.opt.exactWidth?o:Math.floor(o)}"auto"===i.opt.slidesToScroll&&(i.opt.slidesToScroll=Math.floor(i.opt.slidesToShow)),i.itemWidth=i.opt.exactWidth?i.opt.itemWidth:i.containerWidth/i.opt.slidesToShow,[].forEach.call(i.slides,(function(e){e.style.height="auto",e.style.width=i.itemWidth+"px",r+=i.itemWidth,n=Math.max(e.offsetHeight,n)})),i.track.style.width=r+"px",i.trackWidth=r,i.isDrag=!1,i.preventClick=!1,i.opt.resizeLock&&i.scrollTo(i.slide*i.itemWidth,0),(s||t)&&(i.bindArrows(),i.buildDots(),i.bindDrag()),i.updateControls(),i.emit(e?"refresh":"loaded")},i.bindDrag=function(){var e=this;function t(){e.mouseDown=void 0,e.ele.classList.remove("drag"),e.isDrag&&(e.preventClick=!0),e.isDrag=!1}e.mouse=e.mouse||e.handleMouse.bind(e);var i={mouseup:t,mouseleave:t,mousedown:function(t){t.preventDefault(),t.stopPropagation(),e.mouseDown=t.clientX,e.ele.classList.add("drag")},mousemove:e.mouse,click:function(t){e.preventClick&&(t.preventDefault(),t.stopPropagation()),e.preventClick=!1}};e.ele.classList.toggle("draggable",!0===e.opt.draggable),e.event(e.ele,"remove",i),e.opt.draggable&&e.event(e.ele,"add",i)},i.buildDots=function(){var e=this;if(e.opt.dots){if("string"==typeof e.opt.dots?e.dots=document.querySelector(e.opt.dots):e.dots=e.opt.dots,e.dots){e.dots.innerHTML="",e.dots.classList.add("glider-dots");for(var t=0;t<Math.ceil(e.slides.length/e.opt.slidesToShow);++t){var i=document.createElement("button");i.dataset.index=t,i.setAttribute("aria-label","Page "+(t+1)),i.className="glider-dot "+(t?"":"active"),e.event(i,"add",{click:e.scrollItem.bind(e,t,!0)}),e.dots.appendChild(i)}}}else e.dots&&(e.dots.innerHTML="")},i.bindArrows=function(){var e=this;e.opt.arrows?["prev","next"].forEach((function(t){var i=e.opt.arrows[t];i&&("string"==typeof i&&(i=document.querySelector(i)),i._func=i._func||e.scrollItem.bind(e,t),e.event(i,"remove",{click:i._func}),e.event(i,"add",{click:i._func}),e.arrows[t]=i)})):Object.keys(e.arrows).forEach((function(t){var i=e.arrows[t];e.event(i,"remove",{click:i._func})}))},i.updateControls=function(e){var t=this;e&&!t.opt.scrollPropagate&&e.stopPropagation();var i=t.containerWidth>=t.trackWidth;t.opt.rewind||(t.arrows.prev&&t.arrows.prev.classList.toggle("disabled",t.ele.scrollLeft<=0||i),t.arrows.next&&t.arrows.next.classList.toggle("disabled",Math.ceil(t.ele.scrollLeft+t.containerWidth)>=Math.floor(t.trackWidth)||i)),t.slide=Math.round(t.ele.scrollLeft/t.itemWidth),t.page=Math.round(t.ele.scrollLeft/t.containerWidth);var r=t.slide+Math.floor(Math.floor(t.opt.slidesToShow)/2),n=Math.floor(t.opt.slidesToShow)%2?0:r+1;1===Math.floor(t.opt.slidesToShow)&&(n=0),t.ele.scrollLeft+t.containerWidth>=Math.floor(t.trackWidth)&&(t.page=t.dots?t.dots.children.length-1:0),[].forEach.call(t.slides,(function(e,i){var s=e.classList,o=s.contains("visible"),l=t.ele.scrollLeft,a=t.ele.scrollLeft+t.containerWidth,c=t.itemWidth*i,d=c+t.itemWidth;[].forEach.call(s,(function(e){/^left|right/.test(e)&&s.remove(e)})),s.toggle("active",t.slide===i),r===i||n&&n===i?s.add("center"):(s.remove("center"),s.add([i<r?"left":"right",Math.abs(i-(i<r?r:n||r))].join("-")));var h=Math.ceil(c)>=l&&Math.floor(d)<=a;s.toggle("visible",h),h!==o&&t.emit("slide-"+(h?"visible":"hidden"),{slide:i})})),t.dots&&[].forEach.call(t.dots.children,(function(e,i){e.classList.toggle("active",t.page===i)})),e&&t.opt.scrollLock&&(clearTimeout(t.scrollLock),t.scrollLock=setTimeout((function(){clearTimeout(t.scrollLock),.02<Math.abs(t.ele.scrollLeft/t.itemWidth-t.slide)&&(t.mouseDown||t.scrollItem(t.round(t.ele.scrollLeft/t.itemWidth)))}),t.opt.scrollLockDelay||250))},i.scrollItem=function(e,t,i){i&&i.preventDefault();var r=this,n=e;if(++r.animate_id,!0===t)e*=r.containerWidth,e=Math.round(e/r.itemWidth)*r.itemWidth;else{if("string"==typeof e){var s="prev"===e;if(e=r.opt.slidesToScroll%1||r.opt.slidesToShow%1?r.round(r.ele.scrollLeft/r.itemWidth):r.slide,s?e-=r.opt.slidesToScroll:e+=r.opt.slidesToScroll,r.opt.rewind){var o=r.ele.scrollLeft;e=s&&!o?r.slides.length:!s&&o+r.containerWidth>=Math.floor(r.trackWidth)?0:e}}e=Math.max(Math.min(e,r.slides.length),0),r.slide=e,e=r.itemWidth*e}return r.scrollTo(e,r.opt.duration*Math.abs(r.ele.scrollLeft-e),(function(){r.updateControls(),r.emit("animated",{value:n,type:"string"==typeof n?"arrow":t?"dot":"slide"})})),!1},i.settingsBreakpoint=function(){var t=this,i=t._opt.responsive;if(i){i.sort((function(e,t){return t.breakpoint-e.breakpoint}));for(var r=0;r<i.length;++r){var n=i[r];if(e.innerWidth>=n.breakpoint)return t.breakpoint!==n.breakpoint&&(t.opt=Object.assign({},t._opt,n.settings),t.breakpoint=n.breakpoint,!0)}}var s=0!==t.breakpoint;return t.opt=Object.assign({},t._opt),t.breakpoint=0,s},i.scrollTo=function(t,i,r){var n=this,s=(new Date).getTime(),o=n.animate_id,l=function(){var a=(new Date).getTime()-s;n.ele.scrollLeft=n.ele.scrollLeft+(t-n.ele.scrollLeft)*n.opt.easing(0,a,0,1,i),a<i&&o===n.animate_id?e.requestAnimationFrame(l):(n.ele.scrollLeft=t,r&&r.call(n))};e.requestAnimationFrame(l)},i.removeItem=function(e){var t=this;t.slides.length&&(t.track.removeChild(t.slides[e]),t.refresh(!0),t.emit("remove"))},i.addItem=function(e){this.track.appendChild(e),this.refresh(!0),this.emit("add")},i.handleMouse=function(e){var t=this;t.mouseDown&&(t.isDrag=!0,t.ele.scrollLeft+=(t.mouseDown-e.clientX)*(t.opt.dragVelocity||3.3),t.mouseDown=e.clientX)},i.round=function(e){var t=1/(this.opt.slidesToScroll%1||1);return Math.round(e*t)/t},i.refresh=function(e){this.init(!0,e)},i.setOption=function(e,t){var i=this;i.breakpoint&&!t?i._opt.responsive.forEach((function(t){t.breakpoint===i.breakpoint&&(t.settings=Object.assign({},t.settings,e))})):i._opt=Object.assign({},i._opt,e),i.breakpoint=0,i.settingsBreakpoint()},i.destroy=function(){function t(e){e.removeAttribute("style"),[].forEach.call(e.classList,(function(t){/^glider/.test(t)&&e.classList.remove(t)}))}var i=this,r=i.ele.cloneNode(!0);r.children[0].outerHTML=r.children[0].innerHTML,t(r),[].forEach.call(r.getElementsByTagName("*"),t),i.ele.parentNode.replaceChild(r,i.ele),i.event(e,"remove",{resize:i.resize}),i.emit("destroy")},i.emit=function(t,i){var r=new e.CustomEvent("glider-"+t,{bubbles:!this.opt.eventPropagate,detail:i});this.ele.dispatchEvent(r)},i.event=function(e,t,i){var r=e[t+"EventListener"].bind(e);Object.keys(i).forEach((function(e){r(e,i[e])}))},t})),function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define("Siema",[],t):"object"==typeof exports?exports.Siema=t():e.Siema=t()}("undefined"!=typeof self?self:this,(function(){return function(e){function t(r){if(i[r])return i[r].exports;var n=i[r]={i:r,l:!1,exports:{}};return e[r].call(n.exports,n,n.exports,t),n.l=!0,n.exports}var i={};return t.m=e,t.c=i,t.d=function(e,i,r){t.o(e,i)||Object.defineProperty(e,i,{configurable:!1,enumerable:!0,get:r})},t.n=function(e){var i=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(i,"a",i),i},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=0)}([function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},n=function(){function e(e,t){for(var i=0;i<t.length;i++){var r=t[i];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}return function(t,i,r){return i&&e(t.prototype,i),r&&e(t,r),t}}(),s=function(){function e(t){var i=this;if(function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.config=e.mergeSettings(t),this.selector="string"==typeof this.config.selector?document.querySelector(this.config.selector):this.config.selector,null===this.selector)throw new Error("Something wrong with your selector 😭");this.resolveSlidesNumber(),this.selectorWidth=this.selector.offsetWidth,this.innerElements=[].slice.call(this.selector.children),this.currentSlide=this.config.loop?this.config.startIndex%this.innerElements.length:Math.max(0,Math.min(this.config.startIndex,this.innerElements.length-this.perPage)),this.transformProperty=e.webkitOrNot(),["resizeHandler","touchstartHandler","touchendHandler","touchmoveHandler","mousedownHandler","mouseupHandler","mouseleaveHandler","mousemoveHandler","clickHandler"].forEach((function(e){i[e]=i[e].bind(i)})),this.init()}return n(e,[{key:"attachEvents",value:function(){window.addEventListener("resize",this.resizeHandler),this.config.draggable&&(this.pointerDown=!1,this.drag={startX:0,endX:0,startY:0,letItGo:null,preventClick:!1},this.selector.addEventListener("touchstart",this.touchstartHandler),this.selector.addEventListener("touchend",this.touchendHandler),this.selector.addEventListener("touchmove",this.touchmoveHandler),this.selector.addEventListener("mousedown",this.mousedownHandler),this.selector.addEventListener("mouseup",this.mouseupHandler),this.selector.addEventListener("mouseleave",this.mouseleaveHandler),this.selector.addEventListener("mousemove",this.mousemoveHandler),this.selector.addEventListener("click",this.clickHandler))}},{key:"detachEvents",value:function(){window.removeEventListener("resize",this.resizeHandler),this.selector.removeEventListener("touchstart",this.touchstartHandler),this.selector.removeEventListener("touchend",this.touchendHandler),this.selector.removeEventListener("touchmove",this.touchmoveHandler),this.selector.removeEventListener("mousedown",this.mousedownHandler),this.selector.removeEventListener("mouseup",this.mouseupHandler),this.selector.removeEventListener("mouseleave",this.mouseleaveHandler),this.selector.removeEventListener("mousemove",this.mousemoveHandler),this.selector.removeEventListener("click",this.clickHandler)}},{key:"init",value:function(){this.attachEvents(),this.selector.style.overflow="hidden",this.selector.style.direction=this.config.rtl?"rtl":"ltr",this.buildSliderFrame(),this.config.onInit.call(this)}},{key:"buildSliderFrame",value:function(){var e=this.selectorWidth/this.perPage,t=this.config.loop?this.innerElements.length+2*this.perPage:this.innerElements.length;this.sliderFrame=document.createElement("div"),this.sliderFrame.style.width=e*t+"px",this.enableTransition(),this.config.draggable&&(this.selector.style.cursor="-webkit-grab");var i=document.createDocumentFragment();if(this.config.loop)for(var r=this.innerElements.length-this.perPage;r<this.innerElements.length;r++){var n=this.buildSliderFrameItem(this.innerElements[r].cloneNode(!0));i.appendChild(n)}for(var s=0;s<this.innerElements.length;s++){var o=this.buildSliderFrameItem(this.innerElements[s]);i.appendChild(o)}if(this.config.loop)for(var l=0;l<this.perPage;l++){var a=this.buildSliderFrameItem(this.innerElements[l].cloneNode(!0));i.appendChild(a)}this.sliderFrame.appendChild(i),this.selector.innerHTML="",this.selector.appendChild(this.sliderFrame),this.slideToCurrent()}},{key:"buildSliderFrameItem",value:function(e){var t=document.createElement("div");return t.style.cssFloat=this.config.rtl?"right":"left",t.style.float=this.config.rtl?"right":"left",t.style.width=(this.config.loop?100/(this.innerElements.length+2*this.perPage):100/this.innerElements.length)+"%",t.appendChild(e),t}},{key:"resolveSlidesNumber",value:function(){if("number"==typeof this.config.perPage)this.perPage=this.config.perPage;else if("object"===r(this.config.perPage))for(var e in this.perPage=1,this.config.perPage)window.innerWidth>=e&&(this.perPage=this.config.perPage[e])}},{key:"prev",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,t=arguments[1];if(!(this.innerElements.length<=this.perPage)){var i=this.currentSlide;if(this.config.loop)if(this.currentSlide-e<0){this.disableTransition();var r=this.currentSlide+this.innerElements.length,n=this.perPage,s=r+n,o=(this.config.rtl?1:-1)*s*(this.selectorWidth/this.perPage),l=this.config.draggable?this.drag.endX-this.drag.startX:0;this.sliderFrame.style[this.transformProperty]="translate3d("+(o+l)+"px, 0, 0)",this.currentSlide=r-e}else this.currentSlide=this.currentSlide-e;else this.currentSlide=Math.max(this.currentSlide-e,0);i!==this.currentSlide&&(this.slideToCurrent(this.config.loop),this.config.onChange.call(this),t&&t.call(this))}}},{key:"next",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,t=arguments[1];if(!(this.innerElements.length<=this.perPage)){var i=this.currentSlide;if(this.config.loop)if(this.currentSlide+e>this.innerElements.length-this.perPage){this.disableTransition();var r=this.currentSlide-this.innerElements.length,n=this.perPage,s=r+n,o=(this.config.rtl?1:-1)*s*(this.selectorWidth/this.perPage),l=this.config.draggable?this.drag.endX-this.drag.startX:0;this.sliderFrame.style[this.transformProperty]="translate3d("+(o+l)+"px, 0, 0)",this.currentSlide=r+e}else this.currentSlide=this.currentSlide+e;else this.currentSlide=Math.min(this.currentSlide+e,this.innerElements.length-this.perPage);i!==this.currentSlide&&(this.slideToCurrent(this.config.loop),this.config.onChange.call(this),t&&t.call(this))}}},{key:"disableTransition",value:function(){this.sliderFrame.style.webkitTransition="all 0ms "+this.config.easing,this.sliderFrame.style.transition="all 0ms "+this.config.easing}},{key:"enableTransition",value:function(){this.sliderFrame.style.webkitTransition="all "+this.config.duration+"ms "+this.config.easing,this.sliderFrame.style.transition="all "+this.config.duration+"ms "+this.config.easing}},{key:"goTo",value:function(e,t){if(!(this.innerElements.length<=this.perPage)){var i=this.currentSlide;this.currentSlide=this.config.loop?e%this.innerElements.length:Math.min(Math.max(e,0),this.innerElements.length-this.perPage),i!==this.currentSlide&&(this.slideToCurrent(),this.config.onChange.call(this),t&&t.call(this))}}},{key:"slideToCurrent",value:function(e){var t=this,i=this.config.loop?this.currentSlide+this.perPage:this.currentSlide,r=(this.config.rtl?1:-1)*i*(this.selectorWidth/this.perPage);e?requestAnimationFrame((function(){requestAnimationFrame((function(){t.enableTransition(),t.sliderFrame.style[t.transformProperty]="translate3d("+r+"px, 0, 0)"}))})):this.sliderFrame.style[this.transformProperty]="translate3d("+r+"px, 0, 0)"}},{key:"updateAfterDrag",value:function(){var e=(this.config.rtl?-1:1)*(this.drag.endX-this.drag.startX),t=Math.abs(e),i=this.config.multipleDrag?Math.ceil(t/(this.selectorWidth/this.perPage)):1,r=e>0&&this.currentSlide-i<0,n=e<0&&this.currentSlide+i>this.innerElements.length-this.perPage;e>0&&t>this.config.threshold&&this.innerElements.length>this.perPage?this.prev(i):e<0&&t>this.config.threshold&&this.innerElements.length>this.perPage&&this.next(i),this.slideToCurrent(r||n)}},{key:"resizeHandler",value:function(){this.resolveSlidesNumber(),this.currentSlide+this.perPage>this.innerElements.length&&(this.currentSlide=this.innerElements.length<=this.perPage?0:this.innerElements.length-this.perPage),this.selectorWidth=this.selector.offsetWidth,this.buildSliderFrame()}},{key:"clearDrag",value:function(){this.drag={startX:0,endX:0,startY:0,letItGo:null,preventClick:this.drag.preventClick}}},{key:"touchstartHandler",value:function(e){-1!==["TEXTAREA","OPTION","INPUT","SELECT"].indexOf(e.target.nodeName)||(e.stopPropagation(),this.pointerDown=!0,this.drag.startX=e.touches[0].pageX,this.drag.startY=e.touches[0].pageY)}},{key:"touchendHandler",value:function(e){e.stopPropagation(),this.pointerDown=!1,this.enableTransition(),this.drag.endX&&this.updateAfterDrag(),this.clearDrag()}},{key:"touchmoveHandler",value:function(e){if(e.stopPropagation(),null===this.drag.letItGo&&(this.drag.letItGo=Math.abs(this.drag.startY-e.touches[0].pageY)<Math.abs(this.drag.startX-e.touches[0].pageX)),this.pointerDown&&this.drag.letItGo){e.preventDefault(),this.drag.endX=e.touches[0].pageX,this.sliderFrame.style.webkitTransition="all 0ms "+this.config.easing,this.sliderFrame.style.transition="all 0ms "+this.config.easing;var t=(this.config.loop?this.currentSlide+this.perPage:this.currentSlide)*(this.selectorWidth/this.perPage),i=this.drag.endX-this.drag.startX,r=this.config.rtl?t+i:t-i;this.sliderFrame.style[this.transformProperty]="translate3d("+(this.config.rtl?1:-1)*r+"px, 0, 0)"}}},{key:"mousedownHandler",value:function(e){-1!==["TEXTAREA","OPTION","INPUT","SELECT"].indexOf(e.target.nodeName)||(e.preventDefault(),e.stopPropagation(),this.pointerDown=!0,this.drag.startX=e.pageX)}},{key:"mouseupHandler",value:function(e){e.stopPropagation(),this.pointerDown=!1,this.selector.style.cursor="-webkit-grab",this.enableTransition(),this.drag.endX&&this.updateAfterDrag(),this.clearDrag()}},{key:"mousemoveHandler",value:function(e){if(e.preventDefault(),this.pointerDown){"A"===e.target.nodeName&&(this.drag.preventClick=!0),this.drag.endX=e.pageX,this.selector.style.cursor="-webkit-grabbing",this.sliderFrame.style.webkitTransition="all 0ms "+this.config.easing,this.sliderFrame.style.transition="all 0ms "+this.config.easing;var t=(this.config.loop?this.currentSlide+this.perPage:this.currentSlide)*(this.selectorWidth/this.perPage),i=this.drag.endX-this.drag.startX,r=this.config.rtl?t+i:t-i;this.sliderFrame.style[this.transformProperty]="translate3d("+(this.config.rtl?1:-1)*r+"px, 0, 0)"}}},{key:"mouseleaveHandler",value:function(e){this.pointerDown&&(this.pointerDown=!1,this.selector.style.cursor="-webkit-grab",this.drag.endX=e.pageX,this.drag.preventClick=!1,this.enableTransition(),this.updateAfterDrag(),this.clearDrag())}},{key:"clickHandler",value:function(e){this.drag.preventClick&&e.preventDefault(),this.drag.preventClick=!1}},{key:"remove",value:function(e,t){if(e<0||e>=this.innerElements.length)throw new Error("Item to remove doesn't exist 😭");var i=e<this.currentSlide,r=this.currentSlide+this.perPage-1===e;(i||r)&&this.currentSlide--,this.innerElements.splice(e,1),this.buildSliderFrame(),t&&t.call(this)}},{key:"insert",value:function(e,t,i){if(t<0||t>this.innerElements.length+1)throw new Error("Unable to inset it at this index 😭");if(-1!==this.innerElements.indexOf(e))throw new Error("The same item in a carousel? Really? Nope 😭");var r=t<=this.currentSlide>0&&this.innerElements.length;this.currentSlide=r?this.currentSlide+1:this.currentSlide,this.innerElements.splice(t,0,e),this.buildSliderFrame(),i&&i.call(this)}},{key:"prepend",value:function(e,t){this.insert(e,0),t&&t.call(this)}},{key:"append",value:function(e,t){this.insert(e,this.innerElements.length+1),t&&t.call(this)}},{key:"destroy",value:function(){var e=arguments.length>0&&void 0!==arguments[0]&&arguments[0],t=arguments[1];if(this.detachEvents(),this.selector.style.cursor="auto",e){for(var i=document.createDocumentFragment(),r=0;r<this.innerElements.length;r++)i.appendChild(this.innerElements[r]);this.selector.innerHTML="",this.selector.appendChild(i),this.selector.removeAttribute("style")}t&&t.call(this)}}],[{key:"mergeSettings",value:function(e){var t={selector:".siema",duration:200,easing:"ease-out",perPage:1,startIndex:0,draggable:!0,multipleDrag:!0,threshold:20,loop:!1,rtl:!1,onInit:function(){},onChange:function(){}},i=e;for(var r in i)t[r]=i[r];return t}},{key:"webkitOrNot",value:function(){return"string"==typeof document.documentElement.style.transform?"transform":"WebkitTransform"}}]),e}();t.default=s,e.exports=t.default}])})),document.querySelector(".homeBanner__btn")&&homeFillText();const menuLinks=Array.from(document.querySelectorAll(".menuLinks"));function menuClickedLinks(){for(let e=0;e<menuLinks.length;e++)menuLinks[e].addEventListener("click",(function(e){e.preventDefault(),console.log("clicked")}))}document.querySelector(".menus")&&menuClickedLinks(),barba.init({views:[{namespace:"home",beforeEnter(){homeFillText()},beforeLeave(){homeFillText.destroy()}},{namespace:"about",beforeEnter(){},beforeLeave(){}},{namespace:"menus",beforeEnter(){document.querySelector(".glider")&&document.querySelector(".gliderMenus")&&new Glider(document.querySelector(".glider")&&document.querySelector(".gliderMenus"),{slidesToShow:1,draggable:!1,loop:!0,scrollLock:!1,duration:1.5,slidesToScroll:1,arrows:{prev:".glider-prev",next:".glider-next"},responsive:[{breakpoint:960,settings:{slidesToShow:2}}]})},beforeLeave(){glider.refresh(!0)}},{namespace:"mealPrep"},{namespace:"cakes",beforeEnter(){document.querySelector(".glider")&&document.querySelector(".gliderCakes")&&new Glider(document.querySelector(".glider")&&document.querySelector(".gliderCakes"),{slidesToShow:1,draggable:!1,loop:!0,scrollLock:!1,duration:1.5,slidesToScroll:1,dots:"#dots",arrows:{prev:".glider-prev",next:".glider-next"},responsive:[{breakpoint:960,settings:{slidesToShow:2}}]})},beforeLeave(){glider.refresh(!0)}},{namespace:"contact"}],transitions:[{leave({current:e,next:t}){let i=this.async();const r=gsap.timeline({defaults:{ease:"power2.inOut"}});r.fromTo(e.container,1,{opacity:1},{opacity:0}),r.fromTo(".pageTransition",1,{y:"100%",opacity:"0"},{y:"0",opacity:"1",onComplete:i},"<"),r.to(burger,1,{y:0}),r.to(".line1",1,{rotate:"0",y:0,background:"#f2f2f2"},"<"),r.to(".line2",1,{rotate:"0",y:0,background:"#f2f2f2",width:"80%"},"<"),r.to(".line3",1,{opacity:"1"},"<"),r.to(".siteHeader__nav",1,{x:"100%"},"<"),r.to(".logoColor",1,{fill:"#f2f2f2"},"<"),r.to(".siteHeader__socialIcon",1,{y:0,fill:"#f2f2f2",clearProps:"all"},"<"),body.classList.remove("scrollHidden")},enter({current:e,next:t}){let i=this.async();window.scrollTo(0,0);const r=gsap.timeline({defaults:{ease:"power2.inOut"}},"<");document.querySelector(".siteHeader__burgerButton").classList.remove("active"),r.fromTo(".pageTransition",1.4,{y:"0"},{y:"-100%"}),r.fromTo(t.container,.5,{opacity:0},{opacity:1,onComplete:i},"-=0.5")}}]});const burger=document.querySelector(".siteHeader__burgerButton"),body=document.querySelector("body");function toggleNavBurger(e){e.preventDefault(),e.target.classList.contains("active")?(e.target.classList.remove("active"),gsap.to(burger,.5,{y:0}),gsap.to(".line1",.5,{rotate:"0",y:0,background:"#f2f2f2"}),gsap.to(".line2",.5,{rotate:"0",y:0,background:"#f2f2f2",width:"80%"}),gsap.to(".line3",.5,{opacity:"1"},"<"),gsap.fromTo(".siteHeader__nav",1,{x:"0"},{x:"100%"}),gsap.to(".logoColor",1,{fill:"#f2f2f2"}),gsap.to(".siteHeader__socialIcon",1,{y:0,fill:"#f2f2f2",clearProps:"all"},"<"),body.classList.remove("scrollHidden")):(e.target.classList.add("active"),gsap.to(burger,.5,{y:"5"}),gsap.to(".line1",.5,{rotate:"45",y:4,background:"black"}),gsap.to(".line2",.5,{rotate:"-45",y:-4,background:"black",width:"100%"}),gsap.to(".line3",.5,{opacity:"0"},"<"),gsap.fromTo(".siteHeader__nav",1,{x:"100%"},{x:"0"}),gsap.to(".logoColor",1,{fill:"black"},"<"),gsap.to(".siteHeader__socialIcon",.1,{fill:"black"},"-=1"),body.classList.add("scrollHidden"))}burger.addEventListener("click",toggleNavBurger);