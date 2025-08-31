<template>
    <div class="p-5">
        <h1 class="w-full text-center font-bold font-ariel title">👋 Hello, it`s my blog</h1>
        <PostCart></PostCart>
    </div>

</template>

<script setup>
import PostCart from "../../../components/Posts/PostCart.vue";

defineOptions({
    name: "Index",
})

</script>

<style>
.title {
    font-size: 50px;
}
</style>
