<template>
    <div class="flex gap-4">
        <AdminLayout></AdminLayout>
        <div class="p-5 mt-4">
           <div v-for="tag in tagStore.tags">
               {{ tag.title}}
           </div>
            <div class="bg-gray-700 w-1/2 mt-3 border-2 border-solid border-gray-900 text-center text-white rounded-md  ">
                Создать Тег
            </div>
        </div>
    </div>
</template>

<script setup>
import AdminLayout from "../../../../layouts/AdminLayout.vue";
import {useTagStore} from "../../../../stores/tag.js";
import {onMounted} from "vue"

defineOptions({
    name: 'Index',
})

onMounted(() => {
    tagStore.getTags()
})

const tagStore = useTagStore();

</script>

<style scoped>

</style>
