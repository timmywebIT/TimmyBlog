<template>
    <div class="flex gap-4">
        <AdminLayout></AdminLayout>
        <div class="p-5 mt-4">
            <table class="">
                <thead>
                <tr class="tr">
                    <th>Заголовок поста</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="post in postStore.posts" :key="post.id">
                    <td>
                        {{post.title }}
                    </td>
                    <td>
                        <div>
                            Посмотреть
                        </div>
                        <div>
                            Удалить
                        </div>
                        <div>
                            Изменить
                        </div>
                    </td>
                    <td>
                    </td>
                </tr>
                </tbody>
            </table>
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
table td,
table th {
    padding: 0.75em 2em; /* сверху/снизу и слева/справа */
}

</style>
