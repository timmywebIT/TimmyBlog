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
    ]
})


export default router
