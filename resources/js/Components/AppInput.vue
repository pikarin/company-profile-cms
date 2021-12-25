<script setup>
import { ref } from 'vue'

const emit = defineEmits(['update:modelValue'])

defineProps({
    modelValue: String
})

const input = ref(null)

const focus = () => { // eslint-disable-line
    input.value.focus()
}
</script>

<template>
<input ref="input" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="modelValue" @input="emit('update:modelValue', $event.target.value)">
</template>
