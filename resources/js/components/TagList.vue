<template>
    <div>
        <!-- Форма создания -->
        <form @submit.prevent="submitTag" class="mb-4 flex gap-2">
            <input v-model="title" placeholder="Введите тег" class="border p-2 rounded w-64"/>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Создать</button>
        </form>

        <div class="mb-2">
            <p v-if="error" class="error-msg">{{ error }}</p>
        </div>
        <!-- Список -->
        <div v-for="tag in tags" :key="tag.id" class="flex justify-items-center">
            <span>{{ tag.title }}</span>
            <svg @click="deleteTag(tag.id)" type="button" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">>
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </div>
    </div>
</template>

<script>
import axios from "axios"

export default {
    data() {
        return {
            title: "",
            success: false,
            error: null,
            tags: []
        }
    },
    async created() {
        try {
            const response = await axios.get("/api/admin/tags")
            this.tags = response.data
        } catch (err) {
            console.error("Ошибка загрузки тегов:", err)
        }
    },
    methods: {
        async submitTag() {
            this.success = false
            this.error = null
            try {
                const response = await axios.post("/api/admin/tags", {title: this.title})
                this.tags.push(response.data.tag) // добавляем новый тег сразу
                this.success = true
                this.title = ""
            } catch (err) {
                if (err.response && err.response.data.errors) {
                    this.error = "Поле тег не может быть пустым";
                } else {
                    this.error = "Произошла ошибка"
                }
            }
        },
        async deleteTag(tagID) {
            try {
                await axios.delete(`/api/admin/tags/${tagID}`);
                this.tags = this.tags.filter(tag => tag.id !== tagID)
            } catch (err) {
                console.error('Ошибка при удалении', err);
            }
        }
    }
}
</script>

<style scoped>
input {
    background-color: black;
    color: white;
}

button {
    background-color: black;
}

</style>
