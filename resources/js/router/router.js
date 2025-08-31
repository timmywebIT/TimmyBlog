import {createRouter, createWebHistory} from 'vue-router'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/index',
            component: () => import('../views/pages/main/index.vue'),
            name: 'main.home'
        },
        {
            path: '/index/show/:id',
            component: () => import('../views/pages/main/show.vue'),
            name: 'main.show'
        },
        {
            path: '/admin/dashboard',
            component: () => import('../views/pages/admin/dashboard/index.vue'),
            name: 'admin.dashboard.index'
        },
        {
            path: '/admin/posts',
            component: () => import('../views/pages/admin/posts/index.vue'),
            name: 'admin.posts.index'
        },
        {
            path: '/admin/posts/create',
            component: () => import('../views/pages/admin/posts/create.vue'),
            name: 'admin.posts.create'
        },
        {
            path: '/admin/tags',
            component: () => import('../views/pages/admin/tags/index.vue'),
            name: 'admin.tags.index'
        },

    ]
})


export default router
