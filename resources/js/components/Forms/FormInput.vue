<template>
    <input
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        :type="type"
        :placeholder="placeholder"
        class="mb-3 rounded-sm"
    />
</template>

<script setup>
defineProps({
    modelValue: String,
    type: {type: String, default: 'text'},
    placeholder: {type: String, default: ''}
})
defineEmits(['update:modelValue'])
</script>

<style scoped>

</style>
