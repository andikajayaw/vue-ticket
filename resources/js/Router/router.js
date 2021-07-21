import Vue from 'vue'
import VueRouter from 'vue-router'

import CategoryComponent from '../components/Categori/CategoryComponent.vue';
import CreateCategoryComponent from '../components/Categori/CreateCategoryComponent.vue';

const routes = [
    { name: 'category', path: '/categori', component: CategoryComponent },
    { name: 'create-category', path: '/categori/create', component: CreateCategoryComponent }
]

Vue.use(VueRouter)

const router = new VueRouter({
    routes,
    hastag: false,
    mode: 'history',
})

export default router;