import {defineStore} from 'pinia'
import axios from "axios";
import {useRoute} from "vue-router";

export const useTagStore = defineStore('tags', {
    state: () => ({
        tags: [],
        tag: {
            title: ''
        }
    }),

    getters: {},

    actions: {
        async getTags() {
            try {
                const res = await axios.get('/api/v1/tags');
                this.tags = res.data.data;
            } catch (error) {
                console.error(error);
            }
        },
        async storeTag() {
            try {
                await axios.post('/api/v1/tags', this.tag);
                this.tag.title = '';
                await this.getTags();
            } catch (error) {
                console.error(error);
            }
        }
    },
})
