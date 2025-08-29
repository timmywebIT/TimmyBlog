<template>
    <div class="container">
        <div>
            <h1 class="show-title">{{ postStore.post.title }}</h1>
        </div>
        <div>
            <router-link :to="{name: 'main.home'}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            </router-link>
        </div>
        <div class="show-p">
            <p>{{postStore.post.content}}</p>
        </div>
    </div>
</template>
<script setup>
import {onMounted} from "vue"
import {usePostStore} from "../../../stores/post.js";

defineOptions({
    name: "Show",
})

onMounted(() => {
    postStore.getPost()
})

const postStore = usePostStore()

</script>

<style scoped>

.container {
    text-align: center;
}

.show-title {
    font-size: 2em;
    font-weight: bold;
    margin-top: 3em;
}
.show-p {
    margin-top: 2em;
    font-size: 20px;
}


</style>
