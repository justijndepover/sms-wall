<template>
    <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg">
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Bericht
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Datum
                    </th>
                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <tr v-if="websocketReceived">
                    <td colspan="3" class="px-6 py-4 whitespace-no-wrap border border-teal-200 bg-teal-100">
                        <div class="flex align-items text-sm leading-5 text-teal-500 cursor-pointer" @click="paginate(1)">
                            <svg viewBox="0 0 20 20" fill="currentColor" strokeWidth="2" class="w-4 h-4 mr-4"><path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path></svg>
                            <span>Er is nieuwe data beschikbaar, klik om te refreshen</span>
                        </div>
                    </td>
                </tr>

                <tr v-if="paginationData" v-for="(message, key) in paginationData.data">
                    <td class="px-6 py-4 whitespace-no-wrap" :class="(key != paginationData.data.length - 1) ? 'border-b border-gray-200' : ''">
                        <div class="text-sm leading-5 text-gray-900">{{ message.author }}</div>
                        <div class="text-sm leading-5 text-gray-500">{{ message.message }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500" :class="(key != paginationData.data.length - 1) ? 'border-b border-gray-200' : ''">
                        {{ dateTime(message.created_at) }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium" :class="(key != paginationData.data.length - 1) ? 'border-b border-gray-200' : ''">
                        <a href="#" class="text-teal-600 hover:text-teal-900">Details</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <div v-if="paginationData" class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            <div class="flex-1 flex justify-between sm:hidden">
                <a href="#" @click="paginate(page - 1)"
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Previous
                </a>
                <a href="#" @click="paginate(page + 1)"
                    class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Next
                </a>
            </div>

            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm leading-5 text-gray-700">
                        Showing
                        <span class="font-medium">{{ paginationData.from }}</span>
                        to
                        <span class="font-medium">{{ paginationData.to }}</span>
                        of
                        <span class="font-medium">{{ paginationData.total }}</span>
                        results
                    </p>
                </div>

                <div>
                    <span class="relative z-0 inline-flex shadow-sm">
                        <button type="button" @click="paginate(page - 1)"
                            class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <input type="text" :value="page" @change="paginateInput"
                            class="-ml-px relative inline-flex items-center px-4 py-2 z-2 w-12 text-center border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" />

                        <span class="-ml-px relative inline-flex items-center px-4 py-2 z-1 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700">
                            {{ paginationData.last_page }}
                        </span>

                        <button type="button" @click="paginate(page + 1)"
                            class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { relativeDateTime } from '../helpers';

export default {
    data() {
        return {
            paginationData: null,
            page: 1,
            websocketReceived: false,
        }
    },
    created() {
        this.fetchMessages();

        Echo.channel('dashboard').listen('Application.MessageReceivedEvent', (e) => {
            this.websocketReceived = true;
        });
    },
    methods: {
        fetchMessages() {
            this.websocketReceived = false;
            axios.get('/api/messages?page=' + this.page)
                .then((response) => {
                    this.paginationData = response.data;
                })
        },
        paginateInput(value) {
            var page = parseInt(value.target.value);
            if (isNaN(page)) {
                page = this.page;
            }

            this.paginate(page);
        },
        paginate(page) {
            if (page <= 0) {
                return;
            }

            if (page > this.paginationData.last_page) {
                return;
            }

            this.page = page;

            this.fetchMessages();
        },
        dateTime(datetime) {
            return relativeDateTime(datetime);
        }
    }
}
</script>
