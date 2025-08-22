<template>
    <button @click="toggleLike">
        {{ liked ? '❤️' : '🤍' }} {{ count }}
    </button>
</template>

<script>
import axios from 'axios';

export default {
    props: {
        postId: Number,
        initialLiked: Boolean,
        initialCount: Number
    },
    data() {
        return {
            liked: this.initialLiked,
            count: this.initialCount
        }
    },
    methods: {
        async toggleLike() {
            try {
                let response;
                if (this.liked) {
                    // снимаем лайк
                    response = await axios.delete(`/api/posts/${this.postId}/like`);
                } else {
                    // ставим лайк
                    response = await axios.post(`/api/posts/${this.postId}/like`);
                }

                if (response.data.liked !== undefined) this.liked = response.data.liked;
                if (response.data.count !== undefined) this.count = response.data.count;
            } catch (error) {
                console.error('Ошибка лайка:', error);
            }
        }
    }
}
</script>
