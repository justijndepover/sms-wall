<template>
    <div class="p-16 text-center">
        <p class="text-4xl" v-if="messages.length == 0">...</p>
        <div v-if="messages.length > 0">
            <p class="text-4xl">{{ messages[0] }}</p>
        </div>
    </div>
</template>

<script>
import moment from 'moment';

export default {
    data() {
        return {
            messages: [],
            displayingSince: moment(),
        }
    },
    created() {
        setInterval(this.processQueue, 1000);

        Echo.channel('dashboard').listen('Application.MessageReceivedEvent', (e) => {
            if (this.messages.length == 0) {
                this.displayingSince = moment();
            }

            this.messages.push(e.message);
        });
    },
    methods: {
        processQueue() {
            if (this.messages.length <= 0) {
                return;
            }

            if (moment().diff(this.displayingSince, 'seconds') < 10) {
                return;
            }

            this.messages.shift();
            this.displayingSince = moment();
        }
    },
}
</script>