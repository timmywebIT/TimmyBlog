<template>
    <div>
        <!-- Форма создания -->
        <form @submit.prevent="submitCategory" class="mb-4 flex gap-2">
            <input v-model="title" placeholder="Введите категорию" class="border p-2 rounded w-64"/>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Создать</button>
        </form>

        <div class="mb-2">
            <p v-if="error" class="error-msg">{{ error }}</p>
        </div>
        <!-- Список -->
        <div v-for="cat in category" :key="cat.id" class="flex justify-items-center">
            <span>{{ cat.title }}</span>
            <svg @click="deleteCategory(cat.id)" type="button" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">>
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
            category: []
        }
    },
    async created() {
        try {
            const response = await axios.get("/api/admin/categories")
            this.category = response.data
        } catch (err) {
            console.error("Ошибка загрузки категории:", err)
        }
    },
    methods: {
        async submitCategory() {
            this.success = false
            this.error = null
            try {
                const response = await axios.post("/api/admin/categories", {title: this.title})
                this.category.push(response.data.category) // добавляем новую категорию сразу
                this.success = true
                this.title = ""
            } catch (err) {
                if (err.response && err.response.data.errors) {
                    this.error = "Поле категория не может быть пустым";
                } else {
                    this.error = "Произошла ошибка"
                }
            }
        },
        async deleteCategory(categoryID) {
            try {
                await axios.delete(`/api/admin/categories/${categoryID}`);
                this.category = this.category.filter(tag => tag.id !== categoryID)
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
