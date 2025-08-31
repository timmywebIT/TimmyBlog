import {defineStore} from 'pinia'
import axios from "axios";
import {useRoute} from "vue-router";

export const useTagStore = defineStore('tags', {
    state: () => ({
        tags: []
    }),

    getters: {

    },

    actions: {
        async getTags(){
            try {
                const res = await axios.get('/api/v1/tags');
                this.tags = res.data.data;
                console.log('Привет')

            } catch (error) {
                console.error(error);
            }
        }
    },
})
