<template>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-2">
                            <a href="#" class="logo m-0 float-start">TimmyBlog<span
                                class="text-primary">.</span></a>
                        </div>
                        <div class="col-8 text-center">
                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <router-link :to="{name: 'main.home'}" class="text-white">
                                    <li class="active"><a>Главная</a></li>
                                </router-link>
                                <li class="active"><a href="#">Портфолио</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script setup>
defineOptions({
    name: "Header",
})
</script>

<style scoped>

</style>
