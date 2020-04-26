<template>
    <div class="ml-3 relative">
        <div>
            <button @click="isOpen = !isOpen" class="relative z-20 max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true">
                <img class="h-8 w-8 rounded-full" :src="gravatar()" alt="" />
            </button>
        </div>

        <button @click="isOpen = false" v-if="isOpen" tabindex="-1" class="z-10 fixed inset-0 h-full w-full bg-black opacity-25 cursor-default"></button>

        <div v-if="isOpen" class="origin-top-right absolute z-20 right-0 mt-2 w-48 rounded-md shadow-lg">
            <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
var md5 = require('md5');

export default {
    props: ['user'],
    data() {
        return {
            isOpen: false,
        }
    },
    created () {
        const handleEscape = (e) => {
            if (e.key === 'Esc' || e.key === 'Escape') {
                this.isOpen = false;
            }
        }

        document.addEventListener('keydown', handleEscape)
        this.$once('hook:beforeDestroy', () => {
            document.removeEventListener('keydown', handleEscape);
        })
    },
    methods: {
        gravatar() {
            var gravatarId = md5(this.user.email.trim().toLowerCase());
            return 'https://gravatar.com/avatar/' + gravatarId + '?s=240';
        }
    }
}
</script>
