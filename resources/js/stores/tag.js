import {defineStore} from 'pinia'
import axios from "axios";
import {useRoute} from "vue-router";

export const useTagStore = defineStore('tags', {
    state: () => ({
        tags: [],
        tag: {
            id: null,
            title: ''
        },
        newTag: {
            title: ''
        },
        isModelOpen: false,
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
                await axios.post('/api/v1/tags', this.newTag);
                this.newTag.title = '';
                await this.getTags();
            } catch (error) {
                console.error(error);
            }
        },
        async updateTag() {
            try {
                await axios.patch(`/api/v1/tags/${this.tag.id}`, this.tag);
                await this.getTags();
                this.isModelOpen = false;
            } catch (error) {
                console.error(error);
            }
        },
        async deleteTag(tag) {
            try {
               await axios.delete(`/api/v1/tags/${tag.id}`)
                this.tags = this.tags.filter(tagItem => tagItem.id !== tag.id)
            } catch (error) {
                console.error(error)
            }
        },
        editTag(tag) {
            this.tag = { ...tag }
            this.isModelOpen = true;
        },
    },
})
