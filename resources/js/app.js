require('./bootstrap');

import Vue from 'vue';
import SmsWall from './components/SmsWall';
import Dropdown from './components/Dropdown';

new Vue({
    el: '#app',

    components: {
        SmsWall,
        Dropdown,
    },
})