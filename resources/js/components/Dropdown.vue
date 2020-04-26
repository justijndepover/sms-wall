<template>
    <div class="ml-3 relative">
        <div>
            <button @click="isOpen = !isOpen" class="relative z-20 max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true">
                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
            </button>
        </div>

        <button @click="isOpen = false" v-if="isOpen" tabindex="-1" class="z-10 fixed inset-0 h-full w-full bg-black opacity-25 cursor-default"></button>

        <div v-if="isOpen" class="origin-top-right absolute z-20 right-0 mt-2 w-48 rounded-md shadow-lg">
            <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Jouw profiel</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Instellingen</a>
                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Uitloggen</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
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
    }
}
</script>
