<template>
    <div class="modal-shadow" @click.self="$emit('close')">
        <div @click.stop>
            <slot />
        </div>
        </div>
</template>

<script setup>
</script>

<style scoped>
.modal-shadow {
    z-index: 1000;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
}

</style>
