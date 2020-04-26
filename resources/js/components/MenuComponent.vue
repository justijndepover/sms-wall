<template>
    <div v-if="isOpen" class="md:hidden">
        <div class="px-2 pt-2 pb-3 sm:px-3">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-teal-900 focus:outline-none focus:text-white focus:bg-teal-700">Home</a>
            <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-teal-700 focus:outline-none focus:text-white focus:bg-teal-700">Geschiedenis</a>
        </div>

        <div class="pt-4 pb-3 border-t border-teal-700">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                </div>

                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-white">{{ user.name }}</div>
                    <div class="mt-1 text-sm font-medium leading-none text-gray-400">{{ user.email }}</div>
                </div>
            </div>

            <div class="mt-3 px-2">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-teal-700 focus:outline-none focus:text-white focus:bg-teal-700">Jouw profiel</a>
                <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-teal-700 focus:outline-none focus:text-white focus:bg-teal-700">Instellingen</a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-teal-700 focus:outline-none focus:text-white focus:bg-teal-700">Uitloggen</a>
            </div>
        </div>
    </div>
</template>

<script>
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
}
</script>
