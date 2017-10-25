/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/app.js":
/***/ (function(module, exports, __webpack_require__) {


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');
// import VueRouter from 'vue-router';
//
// Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.Frameset = __webpack_require__("./resources/assets/js/frameset/Frameset.js");

// Vue.component('faq-topic-item', require('./components/ExampleComponent.vue'));

// Vue.component('faq-category-item', require('./components/faq/FaqCategoryItem.vue'));
//
// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const Foo = { template: '<div>foo</div>' };
// const Bar = { template: '<div>bar</div>' };
//
// const routes = [
//     { path: '/foo', component: Foo },
//     { path: '/bar', component: Bar }
// ];
//
// const router = new VueRouter({
//     routes // kurz für 'routes: routes'
// });
//
//
window.onload = function () {
  // const app7 = new Vue({
  //     el: '#app7'
  // });

  // const app7 = new Vue({
  //     router
  // }).$mount('#app7')
};

/***/ }),

/***/ "./resources/assets/js/frameset/Frameset.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony export (immutable) */ __webpack_exports__["initClassicFrameset"] = initClassicFrameset;
/* harmony export (immutable) */ __webpack_exports__["initAdvancedFrameset"] = initAdvancedFrameset;
function initClassicFrameset() {
    interact('.threadViewContainer').resizable({
        edges: { bottom: true }
    }).on('resizemove', function (event) {
        var target = event.target;
        var x = parseFloat(target.getAttribute('data-x')) || 0;
        var y = parseFloat(target.getAttribute('data-y')) || 0;
        var postContainerEl = document.querySelectorAll('.postContainer');
        var postTreeContainerEl = document.querySelectorAll('.postTreeContainer')[0];
        var threadViewHeight = calculateElementHeightPercent(event.rect.height);

        var postHeightPxNum = parseInt(getComputedStyle(postContainerEl[0])['height'].replace('px', ''));
        var postHeight = calculateElementHeightPercent(postHeightPxNum);
        var postTreeHeight = 100 - threadViewHeight - postHeight;

        if (postTreeHeight < 1 || threadViewHeight < 1) return;

        // update the element's style
        // target.style.width  = event.rect.width + 'px';
        target.style.height = threadViewHeight + 'vh';
        postTreeContainerEl.style.height = postTreeHeight + 'vh';

        // translate when resizing from top or left edges
        x += event.deltaRect.left;
        y += event.deltaRect.top;

        target.style.webkitTransform = target.style.transform = 'translate(' + x + 'px,' + y + 'px)';

        target.setAttribute('data-x', x);
        target.setAttribute('data-y', y);
        // target.textContent = Math.round(event.rect.width) + '×' + Math.round(event.rect.height);
    });

    interact('.postContainer').resizable({
        edges: { top: true }
    }).on('resizemove', function (event) {
        var target = event.target;
        var x = parseFloat(target.getAttribute('data-x')) || 0;
        var y = parseFloat(target.getAttribute('data-y')) || 0;
        var threadViewContainerEl = document.querySelectorAll('.threadViewContainer');
        var postTreeContainerEl = document.querySelectorAll('.postTreeContainer')[0];
        var postViewHeight = calculateElementHeightPercent(event.rect.height);

        var threadHeightPxNum = parseInt(getComputedStyle(threadViewContainerEl[0])['height'].replace('px', ''));
        var threadHeight = calculateElementHeightPercent(threadHeightPxNum);
        var postTreeHeight = 100 - postViewHeight - threadHeight;

        if (postTreeHeight < 1 || postViewHeight < 1) return;

        // update the element's style
        // target.style.width  = event.rect.width + 'px';
        target.style.height = postViewHeight + 'vh';
        postTreeContainerEl.style.height = postTreeHeight + 'vh';

        // translate when resizing from top or left edges
        x += event.deltaRect.left;
        y += event.deltaRect.top;

        // target.style.webkitTransform = target.style.transform =
        //     'translate(' + x + 'px,' + y + 'px)';


        target.setAttribute('data-x', x);
        target.setAttribute('data-y', y);
        // target.textContent = Math.round(event.rect.width) + '×' + Math.round(event.rect.height);
    });

    function calculateElementHeightPercent(elHeightPxNum) {
        var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

        return Math.round(Math.round(elHeightPxNum) * 100 / h);
    }
}

function initAdvancedFrameset() {}

/***/ }),

/***/ "./resources/assets/sass/app.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./resources/assets/js/app.js");
module.exports = __webpack_require__("./resources/assets/sass/app.scss");


/***/ })

/******/ });