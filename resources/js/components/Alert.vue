<template>
    <div class="mb-6" v-show="show">
        <div class="p-4 bg-green-200 rounded-lg flex justify-between items-center w-full">
            <span class="text-sm text-green-800">{{ message }}</span>

            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer" @click="close">
                <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
</template>

<script>
import { EventBus } from '../event-bus.js';

export default {
    data() {
        return {
            message: '',
            show: false,
        }
    },
    created() {
        EventBus.$on('alert', (data) => {
            this.message = data;
            this.show = true;
        });
    },
    methods: {
        close() {
            this.show = false;
        }
    },
    watch: {
        show(newValue, oldValue) {
            if (newValue) {
                window.setTimeout(() => {
                    this.show = false;
                }, 5000);
            }
        }
    }
}
</script>
