<template>
    <div class="flex gap-4">
        <AdminLayout></AdminLayout>
        <div class="p-5 mt-4">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Название поста
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Действие
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="post in postStore.posts" :key="post.id"
                        class="border-gray-700 border-b dark:bg-gray-800 dark:border-gray-700 ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ post.title }}
                        </th>
                        <td class="px-6 py-4">
                            <div @click="postStore.deletePost(post)" class="cursor-pointer">
                                Удалить
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <router-link :to="{name: 'admin.posts.create' }">
            <div class="bg-gray-700 w-1/2 mt-3 border-2 border-solid border-gray-900 text-center text-white rounded-md  ">
                Создать пост
            </div>
            </router-link>
        </div>
    </div>
</template>

<script setup>
import AdminLayout from "../../../../layouts/AdminLayout.vue";
import {usePostStore} from "../../../../stores/post.js";
import {onMounted} from "vue"

defineOptions({
    name: 'Index',
})

onMounted(() => {
    postStore.getPosts()
})

const postStore = usePostStore();

</script>

<style scoped>

</style>
