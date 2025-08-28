<template>
    <div class="p-5">
        <div class="p-5">
            <h1 class="w-full text-center text-2xl font-bold font-ariel">👋 Hello, it`s my blog</h1>
        </div>
        <div class="p-5">
            <h3 class="text-xl">Posts</h3>
        </div>
        <div class="flex">
            <div class="ml-3" v-for="post in posts" :key="post.id">
                <h4>{{ post.title }}</h4>
                <p>{{post.content}}</p>
                <div v-if="post.categories">
                    <h5>Категория:</h5>
                    <span>{{ post.categories.title }}</span>
                </div>
                <div v-if="post.tags && post.tags.length">
                    <h5>Теги:</h5>
                    <div v-for="tag in post.tags" :key="tag.id">
                        {{ tag.title }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import axios from "axios";
import {onMounted, ref} from "vue";

const posts = ref([])

onMounted(() => {
    getPosts()
})

const getPosts = async () => {
    try {
        const res = await axios.get("/api/v1/posts")
        posts.value = res.data.data
        console.log(posts.value)
    } catch (error) {
        console.log(error);
    }
}

</script>

<style>


</style>
