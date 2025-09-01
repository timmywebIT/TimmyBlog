<template>
    <div class="modal-shadow" @click.self="$emit('close')">
        <div @click.stop>
            <InputForm v-if="tagStore.tag" v-model="tagStore.tag.title" placeholder="Название тега" />
            <ButtonAccept @click="tagStore.updateTag">Обновить тэг</ButtonAccept>
        </div>
        </div>
</template>

<script setup>
import InputForm from "./InputForm.vue";
import ButtonAccept from "../Buttons/ButtonAccept.vue"
import {useTagStore} from "../../stores/tag.js";



const tagStore = useTagStore();

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
