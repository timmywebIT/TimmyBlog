<template>
    <input type="file" @change="onFileChange" />
</template>

<script setup lang="ts">
const emit = defineEmits(['file-selected'])

function onFileChange(event: Event) {
    const target = event.target as HTMLInputElement
    const file = target.files?.[0]
    if (file) {
        emit('file-selected', file)
    }
}
</script>

<style scoped>
input[type="file"] {
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 6px;
}
</style>
