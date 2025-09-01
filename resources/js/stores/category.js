import {defineStore} from 'pinia'
import axios from "axios";
import {useRoute} from "vue-router";

export const useCategoryStore = defineStore('categories', {
    state: () => ({
        categories: [],
        category: {
            id: null,
            title: ''
        },
        newCategory: {
            title: ''
        },
        isModelOpen: false,
    }),

    getters: {},

    actions: {
        async getCategories() {
            try {
                const res = await axios.get('/api/v1/categories');
                this.categories = res.data.data;
            } catch (error) {
                console.error(error);
            }
        },
        async storeCategory() {
            try {
                await axios.post('/api/v1/tags', this.newCategory);
                this.newCategory.title = '';
                await this.getCategories();
            } catch (error) {
                console.error(error);
            }
        },
        async updateCategory() {
            try {
                await axios.patch(`/api/v1/tags/${this.category.id}`, this.category);
                await this.getCategories();
                this.isModelOpen = false;
            } catch (error) {
                console.error(error);
            }
        },
        async deleteCategory(category) {
            try {
               await axios.delete(`/api/v1/tags/${category.id}`)
                this.categories = this.categories.filter(category => category.id !== category.id)
            } catch (error) {
                console.error(error)
            }
        },
        editCategory(category) {
            this.category = { ...category }
            this.isModelOpen = true;
        },
    },
})
