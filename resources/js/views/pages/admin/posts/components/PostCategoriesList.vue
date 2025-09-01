<template>
    <select v-model="selecValue">
        <option v-for="category in categoryStore.categories">
            {{ category.title }}
        </option>
    </select>
</template>


<script setup>
import { onMounted } from 'vue'
import {useCategoryStore} from "../../../../../stores/category.js";

onMounted(() => {
    categoryStore.getCategories()
})

const categoryStore = useCategoryStore();


</script>

<style scoped>

</style>
