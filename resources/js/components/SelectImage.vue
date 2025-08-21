<template>
        <input type="file" name="main_image" @change="onFileChange" />
</template>

<script>

import axios from "axios";

export default {
    name: "SelectImage",
    data() {
        return {
            file: null
        }
    },

    methods: {
        onFileChange(e) {
            this.file = e.target.files[0] //Здесь будеь храниться файл
        },

        async upload() {
            const formData = new FormData()
            formData.append('main_image', this.file)
            await axios.post('/admin/posts', formData, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
        }
    }
}

</script>

<style>

</style>
