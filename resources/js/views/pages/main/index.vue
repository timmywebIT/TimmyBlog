<template>
    <div class="p-5">
        <div class="p-5">
            <h1 class="w-full text-center font-bold font-ariel title">👋 Hello, it`s my blog</h1>
        </div>
        <div class="p-5">
            <h3 class="title-post">Posts</h3>
        </div>
            <div class="post-card cursor-pointer">
                <div class="ml-3" v-for="post in posts" :key="post.id">
                    <router-link :to="{name: 'index.show', params:{id: post.id }}">
                    <img :src="getImageURL(post.main_image)" alt="Картинка поста" class="w-full h-auto rounded shadow"/>
                    <h2 class="post-cart-title">{{ post.title }}</h2>
                    </router-link>
                </div>
            </div>
        <div>
        </div>
    </div>
</template>

<script setup>
import axios from "axios";
import {onMounted, ref} from "vue";

defineOptions({
    name: "Index",
})

onMounted(() => {
    getPosts()
})

const posts = ref([])
const getImageURL = function (image) {
    return `/storage/${image}`
}

const getPosts = async () => {
    try {
        const res = await axios.get("/api/v1/posts")
        posts.value = res.data.data
    } catch (error) {
        console.log(error);
    }
}
</script>

<style>
.post-card {
    width: 22em;
    height: 20em;
    border-radius: 5px;
}

.post-cart-title {
    margin-top: 1.5em;
    font-size: 20px;
    font-weight: bold;
}

.post-cart-title:hover {
    text-decoration: underline;
}

.title {
    font-size: 50px;
}

.title-post {
    font-size: 30px;
    font-weight: bold;

}
</style>
