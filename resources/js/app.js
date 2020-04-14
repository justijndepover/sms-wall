require('./bootstrap');

import Vue from 'vue';
import SmsWall from './components/SmsWall';

new Vue({
    el: '#app',

    components: {
        SmsWall,
    },
})