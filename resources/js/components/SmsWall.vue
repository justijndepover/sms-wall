<template>
    <div class="">
        <p v-if="messages.length == 0">Stuur een berichtje naar: 0499 99 99 99</p>
        <div v-if="messages.length > 0">
            <p v-for="message in messages">{{ message}}</p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            messages: [

            ],
        }
    },
    created() {
        Echo.channel('dashboard').listen('Application.MessageReceivedEvent', (e) => {
            this.messages.push(e.message);
        });
    },
    methods: {
    },
}
</script>