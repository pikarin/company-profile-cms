<script lang="ts" setup>
import { PropType } from 'vue'

defineProps({
    type: {
        type: String as PropType<'submit' | 'button' | 'reset'>,
        default: 'submit',
    },
})
</script>

<template>
    <button
        :type="type"
        class="focus:shadow-outline-gray inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:border-gray-900 focus:outline-none active:bg-gray-900"
    >
        <slot />
    </button>
</template>
