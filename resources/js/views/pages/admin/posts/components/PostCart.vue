<template>
    <div class="p-5">
        <div class="p-5">
            <h3 class="title-post">Posts</h3>
        </div>
        <div class="post-card cursor-pointer">
            <div class="ml-3" v-for="post in postStore.posts" :key="post.id">
                <router-link :to="{name: 'main.show', params:{id: post.id }}">
                    <img :src="getImageURL(post.main_image)" alt="Картинка поста" class="w-full h-auto rounded shadow"/>
                    <h2 class="post-cart-title">{{ post.title }}</h2>
                </router-link>
                <div v-for="tag in post.tags" :key="tag.id" class="tag">
                    {{ tag.title }}
                </div>
            </div>
        </div>
        <div>
        </div>
    </div>
</template>

<script setup>
import {usePostStore} from "../../../../../stores/post.js";
import {onMounted} from "vue";

defineOptions({
    name: 'PostCart',
})

onMounted(() => {
    postStore.getPosts()
})

const getImageURL = function (image) {
    return `/storage/${image}`
}

const postStore = usePostStore()
</script>

<style scoped>
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

.title-post {
    font-size: 30px;
    font-weight: bold;

}
</style>
