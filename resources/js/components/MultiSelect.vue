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
        <div v-for="tagId in selectedIds" :key="tagId">
            <input type="hidden" name="tag_ids[]" :value="tagId" />
        </div>
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

    computed: {
        selectedIds() {
            return this.selected.map(tag => tag.id) //Преобразует каждый объект в его id
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
