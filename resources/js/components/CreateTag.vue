<template>
    <div class="create-tag">
        <input
            v-model="title"
            type="text"
            placeholder="Название тэга"
            class="tag-input"
        >
        <button @click="submitTag" class="tag-button">Создать тег</button>

        <p v-if="success" class="success-msg">Тэг успешно создан!</p>
        <p v-if="error" class="error-msg">{{ error }}</p>

    </div>
</template>
<script>
import axios from 'axios'

export default {
    data() {
        return {
            title: '',
            success: false,
            error: null
        }
    },
    methods: {
        async submitTag() {
            this.success = false
            this.error = null
            try {
                const response = await axios.post('/api/admin/tags', { title: this.title })
                this.success = true
                this.title = ''
            } catch (err) {
                if (err.response && err.response.data.errors) {
                    this.error = err.response.data.errors.title[0]
                } else {
                    this.error = 'Произошла ошибка'
                }
            }
        }
    }
}
</script>


<style>
</style>
