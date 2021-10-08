import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import createStudent from '../views/createStudent'
import listStudent from '../views/listStudent'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/listStudent',
    name: 'listStudent',
    component: listStudent
  },
  {
    path: '/createStudent',
    name: 'createStudent',
    component: createStudent
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
