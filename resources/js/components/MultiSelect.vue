<template>
    <div>
        <multiselect
            v-model="selected"
            :options="options"
            :multiple="true"
            :close-on-select="false"
            :clear-on-select="false"
            placeholder="Выберите теги"
            label="title"
            track-by="id"
        />
    </div>
</template>

<script>
import Multiselect from 'vue-multiselect'
import 'vue-multiselect/dist/vue-multiselect.css'
import axios from 'axios'

export default {
    components: { Multiselect },
    data () {
        return {
            selected: [],
            options: []
        }
    },
    async created() {
        try {
            const responce = await axios.get('/api/admin/tags') //Получаем все тэги которые из БД
            this.options = responce.data
        } catch (err) {
            console.error('Ошибка загрузки', err)
        }
    }
}
</script>
