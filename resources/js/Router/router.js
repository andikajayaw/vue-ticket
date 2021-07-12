import Vue from 'vue'
import VueRouter from 'vue-router'

import CategoryComponent from '../components/Categori/CategoryComponent.vue';

const routes = [
    { name: 'category', path: '/categori', component: CategoryComponent }
]

Vue.use(VueRouter)

const router = new VueRouter({
    routes,
    hastag: false,
    mode: 'history',
})

export default router;