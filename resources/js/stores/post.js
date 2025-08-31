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
                console.log('Не удалось загрузить посты', error)
            }
        },
        async getPost() {
            try {
                const res = await axios.get(`/api/v1/posts/${useRoute().params.id}`)
                this.post = res.data.data
            } catch (error) {
                console.log('Не удалось получить пост', error)
            }
        },
        async storePost() {
            try {
                axios.post(`/api/v1/posts`, this.post)
            } catch (error) {
                console.log('Не удалось создать пост', error)
            }
        },
        async updatePost() {
           try {
               axios.path(`/api/v1/posts/${this.post.id}`, this.post)
           } catch (error) {
               console.log('Не удалось обновить пост', error)
           }
        },
        async deletePost(post) {
            try {
                 axios.delete(`/api/v1/posts/${post.id}`)
                this.posts = this.posts.filter(post => post.id !== post.id)
            } catch (error) {
                console.log('Пост не удалился', error)
            }
        }
    },
})
