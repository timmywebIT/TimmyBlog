<template>
    <div>
        <multiselect
            v-model="selectedCategory"
            :options="categories"
            placeholder="Выберите категорию"
            label="title"
            track-by="id"
        />
        <!-- скрытые поля для отправки формы в Laravel -->

        <input type="hidden" name="category_id" :value="selectedCategory ? selectedCategory.id : ''">
        </div>
</template>


<script>
import Multiselect from 'vue-multiselect'
import 'vue-multiselect/dist/vue-multiselect.css'
import axios from 'axios'

export default {
    components: {Multiselect},
    data() {
        return {
            categories: [],           // список всех категорий из API
            selectedCategory: null    // один объект
        }
    },
    async created() {
        try {
            const response = await axios.get("/api/admin/categories")
            this.categories = response.data
        } catch (err) {
            console.error("Ошибка загрузки категорий:", err)
        }
    }
}
</script>


<style scoped>

</style>
