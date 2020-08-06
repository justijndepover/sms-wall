require('./bootstrap');

import Vue from 'vue';
import SmsWall from './components/SmsWall';
import Dropdown from './components/Dropdown';
import DropdownItem from './components/DropdownItem';
import Menubutton from './components/Menubutton';
import MenuComponent from './components/MenuComponent';
import MenuComponentItem from './components/MenuComponentItem';
import MessagesTable from './components/MessagesTable';
import MessagePopupButton from './components/MessagePopupButton';
import Alert from './components/Alert';

new Vue({
    el: '#app',

    components: {
        SmsWall,
        Dropdown,
        DropdownItem,
        Menubutton,
        MenuComponent,
        MenuComponentItem,
        MessagesTable,
        MessagePopupButton,
        Alert,
    },
})