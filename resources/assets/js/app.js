
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

try {
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

window.Frameset = require('./frameset/Frameset.js');
window.Board = require('./components/board/board_index.js');

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