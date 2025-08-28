import {defineStore} from 'pinia'
import axios from "axios";
import {useRoute} from "vue-router";

export const usePostStore = defineStore('posts', {
    state: () => ({
        posts: [],
        post: {}
    }),

    getters: {

    },

    actions: {
        async getPosts() {
            try {
                const res = await axios.get("/api/v1/posts")
                this.posts = res.data.data
            } catch (error) {
                alert('Не удалось загрузить посты')
            }
        },
        async getPost() {
            try {
                const res = await axios.get(`/api/v1/posts/${useRoute().params.id}`)
                this.post = res.data.data
            } catch (error) {
                alert('Не удалось получить пост')
            }
        }
    },
})
