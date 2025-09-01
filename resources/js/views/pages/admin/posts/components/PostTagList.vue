<template>
    <div>
        <multiselect
            v-model="tagStore.selectedTags"
            :options="tagStore.tags"
            :multiple="true"
            label="title"
            track-by="id"
            placeholder="Выбрать теги"
        ></multiselect>
    </div>
</template>

<script setup>
import { onMounted } from 'vue'
import {useTagStore} from "../../../../../stores/tag.js";
import Multiselect from 'vue-multiselect';

onMounted(() => {
    tagStore.getTags()
})

const tagStore = useTagStore();

</script>

<style scoped>

</style>
