<template>
    <div>
        <button @click="isOpen = true" class="rounded-lg px-6 py-3 mr-3 rounded-lg text-blue-300 bg-blue-100 hover:bg-blue-500 hover:text-blue-100 focus:outline-none focus:bg-blue-500 focus:text-blue-100 active:bg-blue-700 transition duration-150 ease-in-out">
            <span class="text-xs leading-5 font-semibold uppercase tracking-wide">Voeg bericht toe</span>
        </button>

        <button @click="isOpen = false" v-if="isOpen" tabindex="-1" class="z-10 fixed inset-0 h-full w-full bg-black opacity-25 cursor-default"></button>

        <div v-if="isOpen" class="card fixed z-20 transform transition-all w-full sm:max-w-lg p-4 sm:p-0" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white rounded-lg overflow-hidden shadow-xl">
                <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="text-center sm:text-left">
                        <h3 class="text-xl leading-6 font-semibold text-blue-400" id="modal-headline">
                            Bericht
                        </h3>

                        <div class="mt-2">
                            <textarea name="message" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md h-32 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 text-sm leading-5" placeholder="Begin te typen..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-blue-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Verstuur
                        </button>
                    </span>

                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button @click="isOpen = false" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Annuleer
                        </button>
                    </span>
                </div>
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
    },
}
</script>

<style lang="css" scoped>
    .card {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
