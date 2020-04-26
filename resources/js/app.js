require('./bootstrap');

import Vue from 'vue';
import SmsWall from './components/SmsWall';
import Dropdown from './components/Dropdown';
import Menubutton from './components/Menubutton';
import MenuComponent from './components/MenuComponent';

new Vue({
    el: '#app',

    components: {
        SmsWall,
        Dropdown,
        Menubutton,
        MenuComponent,
    },
})