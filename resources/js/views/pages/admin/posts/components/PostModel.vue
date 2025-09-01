<template>
    <div class="p-4">
        <div>
            <input v-model="postStore.title" type="text" placeholder="Название поста" class=" border-solid rounded-lg mb-4">
        </div>
        <div class="mb-4">
            <textarea v-model="postStore.content" class="" placeholder="Контент" ></textarea>
        </div>
        <div class="mb-4">
            <PostImage @file-selected="postStore.image = $event"></PostImage>
        </div>
        <div class="mb-4">
            <h3>Выберите категорию</h3>
            <PostCategoriesList @selected="postStore.categoryID = $event" />
        </div>
        <div>
            <h3>Выберите тег</h3>
            <PostTagList @selected="postStore.tagIds = $event" ></PostTagList>
        </div>
        <div>
        <ButtonAccept @click="postStore.createPost">Создать пост</ButtonAccept>
        </div>
    </div>

</template>

<script setup>
import PostImage from "./PostImage.vue";
import PostCategoriesList from "./PostCategoriesList.vue";
import ButtonAccept from "./../../../../../components/Buttons/ButtonAccept.vue"
import PostTagList from "./PostTagList.vue";
import { usePostStore } from "../../../../../stores/post.js";

const postStore = usePostStore()

</script>

<style scoped>

</style>
