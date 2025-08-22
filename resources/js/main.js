import { createApp } from 'vue'
// import App from './App.vue'

//Vueform и vueformConfig — подключение библиотеки Vueform с конфигом (локали, тема и т.д.).
import Vueform from '@vueform/vueform'
import vueformConfig from './vueform.config'
//стили Vueform
import '@vueform/vueform/dist/vueform.css'
//core-js
import 'core-js/stable'
import 'regenerator-runtime/runtime'

import MultiSelect from './components/MultiSelect.vue'
import SelectImage from './components/SelectImage.vue'
import CreateTag from './components/CreateTag.vue'
import TagList from './components/TagList.vue'
import CategoriesList from './components/CategoriesList.vue'
import MultiSelectCategory from './components/MultiSelectCategory.vue'
import LikeButton from './components/LikeButton.vue'


createApp(TagList).mount('#tag-list-app')

// Создание тега
createApp(CreateTag).mount('#create-tag-app')

// Multiselect
createApp(MultiSelect).mount('#multiselect-container')

createApp(CategoriesList).mount('#list-categories')

createApp(MultiSelectCategory).mount('#multi-select-category')



document.querySelectorAll('.like-button-container').forEach(el => {
    createApp(LikeButton, {
        postId: Number(el.dataset.postId),
        initialLiked: el.dataset.initialLiked === 'true',
        initialCount: Number(el.dataset.initialCount)
    }).mount(el);
});

const imageApp = createApp(SelectImage)
imageApp.use(Vueform, vueformConfig) // нужно только для Vueform
imageApp.mount('#selectimage-container')

// регистрируем Vueform с конфигом

