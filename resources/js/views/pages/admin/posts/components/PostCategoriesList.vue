<template>
    <select v-model="selectedId" @change="emitSelected">
        <option disabled value="">Выберите категорию</option>
        <option v-for="category in categoryStore.categories" :key="category.id" :value="category.id">
            {{ category.title }}
        </option>
    </select>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { useCategoryStore } from '../../../../../stores/category.js'

const emit = defineEmits(['selected'])
const props = defineProps({
    selected: {
        type: [String, Number],
        default: ''
    }
})
const selectedId = ref(props.selected)

const categoryStore = useCategoryStore()

onMounted(() => {
    categoryStore.getCategories()
})

function emitSelected() {
    emit('selected', Number(selectedId.value))
}
</script>
