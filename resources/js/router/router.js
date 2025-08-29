import {createRouter, createWebHistory} from 'vue-router'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/index',
            component: () => import('../views/pages/main/index.vue'),
            name: 'main.index'
        },
        {
            path: '/index/show/:id',
            component: () => import('../views/pages/main/show.vue'),
            name: 'index.show'
        },
        {
            path: '/admin/index',
            component: () => import('../views/pages/admin/dashboard/index.vue'),
            name: 'admin.index'
        },
    ]
})


export default router
