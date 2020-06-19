<template>
    <div v-if="isOpen" class="md:hidden">
        <div class="px-2 pt-2 pb-3 sm:px-3">
            <slot></slot>
        </div>

        <div class="pt-4 pb-3 border-t border-blue-700">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" :src="gravatar()" alt="" />
                </div>

                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-white">{{ user.name }}</div>
                    <div class="mt-1 text-sm font-medium leading-none text-gray-400">{{ user.email }}</div>
                </div>
            </div>

            <div class="mt-3 px-2">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-blue-700 focus:outline-none focus:text-white focus:bg-blue-700">Jouw profiel</a>
                <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-blue-700 focus:outline-none focus:text-white focus:bg-blue-700">Instellingen</a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-blue-700 focus:outline-none focus:text-white focus:bg-blue-700">Uitloggen</a>
            </div>
        </div>
    </div>
</template>

<script>
var md5 = require('md5');

export default {
    props: ['user'],
    data () {
        return {
            isOpen: false,
        }
    },
    mounted() {
        this.$root.$on('menu-action', (data) => {
            this.isOpen = data;
        });
    },
    methods: {
        gravatar() {
            var gravatarId = md5(this.user.email.trim().toLowerCase());
            return 'https://gravatar.com/avatar/' + gravatarId + '?s=240';
        }
    }
}
</script>
