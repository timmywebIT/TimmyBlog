<template>
 <h1 class="text-black"></h1>
    <p>{{postStore.post.content}}</p>

</template>
<script setup>
import {onMounted} from "vue"
import {usePostStore} from "../../../stores/post.js";
import { useRoute } from 'vue-router';

defineOptions({
    name: "Show",
})

const route = useRoute()

onMounted(() => {
    postStore.getPost()
})

const postStore = usePostStore()

</script>

<style scoped>

</style>
