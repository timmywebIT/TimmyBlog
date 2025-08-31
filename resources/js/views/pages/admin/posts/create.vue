<template>
    <div class="flex gap-4">
        <AdminLayout></AdminLayout>
        <div class="p-5 mt-4">
            <div>
                <div>
                    <input placeholder="Введите пост"/>
                </div>
                <div>
                    <textarea placeholder="Введи контент"></textarea>
                </div>
                <div>
                    <input type="file">
                </div>
                <div>
                    Категории
                </div>
                <div>

                </div>
                <div>
                    Создать пост
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import AdminLayout from "../../../../layouts/AdminLayout.vue";
import MultiSelect from "../../../../components/MultiSelect.vue";
import {usePostStore} from "../../../../stores/post.js";
import {onMounted} from "vue";

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
