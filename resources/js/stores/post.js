import {defineStore} from 'pinia'
import axios from "axios";
import {useRoute} from "vue-router";

export const usePostStore = defineStore('posts', {
    state: () => ({
        posts: [],
        post: {},
        title:'',
        content: '',
        image: null,
        categoryID: null,
        tagIds:[]
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
               axios.patсh(`/api/v1/posts/${this.post.id}`, this.post)
           } catch (error) {
               console.log('Не удалось обновить пост', error)
           }
        },
        async deletePost(post) {
            try {
                 axios.delete(`/api/v1/posts/${post.id}`)
                this.posts = this.posts.filter(p => p.id !== post.id)
            } catch (error) {
                console.log('Пост не удалился', error)
            }
        },
        async createPost() {
            try {
                const formData = new FormData();

                formData.append('title', this.title);
                formData.append('content', this.content);

                if (this.image) {
                    formData.append('main_image', this.image); // имя поля должно совпадать с Laravel
                }

                if (this.categoryID) {
                    formData.append('category_id', this.categoryID);
                    console.log('Данных нет')
                }

                if (this.tagIds.length > 0) {
                    this.tagIds.forEach(tagId => {
                        formData.append('tag_ids[]', tagId);
                    });
                }
                console.log('Отправка поста:', {
                    title: this.title,
                    content: this.content,
                    category_id: this.categoryID,
                    image: this.image,
                    tag_ids: this.tagIds
                });

                const res = await axios.post('/api/v1/posts', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                        'Accept': 'application/json'
                    }
                });


                console.log('Пост создан:', res.data);
            } catch (error) {
                console.error('Ошибка при создании поста:', error.response?.data || error.message);
            }
        }
    }
})
