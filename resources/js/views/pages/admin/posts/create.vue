<template>
    <div class="flex gap-4">
        <AdminLayout></AdminLayout>
        <div class="p-5 mt-4">
            <PostModel></PostModel>
        </div>
    </div>
</template>

<script setup>
import AdminLayout from "../../../../layouts/AdminLayout.vue";
import {usePostStore} from "../../../../stores/post.js";
import {onMounted} from "vue";
import PostModel from "./components/PostModel.vue";

defineOptions({
    name: 'Create',
})

onMounted(() => {
    postStore.storePost()
})

const postStore = usePostStore();

</script>

<style scoped>

</style>
