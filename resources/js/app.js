require('./bootstrap');
window.Vue = require('vue');
import moment from 'moment';
import { Form, HasError, AlertError } from 'vform';
import  VueProgressBar from 'vue-progressbar';
import  swal from 'sweetalert2';
Vue.component('pagination', require('laravel-vue-pagination'));

const options = {
    color: '#bffaf3',
    failedColor: '#874b4b',
    thickness: '5px',
    transition: {
      speed: '0.2s',
      opacity: '0.6s',
      termination: 300
    },
    autoRevert: true,
    location: 'left',
    inverse: false
  }
  Vue.use(VueProgressBar, options);
   
const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
window.toast = toast;

let Fire = new Vue();
window.Fire = Fire;

window.swal = swal;
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


import VueRouter from 'vue-router';
Vue.use(VueRouter);

let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue') },
    // { path: '/profile',  component: require('./components/Profile.vue') },
    // { path: '/users',  component: require('./components/Users.vue').default },
    // { path: '/professors',  component: require('./components/Professors.vue').default },
    // { path: '/students',  component: require('./components/Students.vue').default },
    // { path: '/courseYears',  component: require('./components/CourseYears.vue').default },
    // { path: '/courseGroups',  component: require('./components/CourseGroups.vue').default },
    // { path: '/courseSections',  component: require('./components/courseSections.vue').default },
    // { path: '/exams',  component: require('./components/Exams.vue').default },
    // { path: '/developer',  component: require('./components/Developer.vue').default },
    // { path: '/getStudents',  component: require('./components/CourseYears.vue') },
];

const router = new VueRouter({
    routes
})

Vue.filter('capitalize', function(text) {
    return text[0].toUpperCase() + text.slice(1);
});

Vue.filter('capitals', function(text) {
    return text.toUpperCase()+ text.slice(1);
});

Vue.filter('myDate', function(created){
    return moment(created).format('YYYY');
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});