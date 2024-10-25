import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/pages/Index.vue'
import {UserLogin, UserRegister} from '@/views/auth'

const routes = [
    {
      path: '/',
      name: 'home',
      component: Home,
      meta: { title: "Home" },
    },
    {
      path: '/auth/user-login',
      name : 'user.login',
      component : UserLogin,
      meta: { title: "Login" },
    },
    {
      path : '/auth/user-register',
      name : 'user.register',
      component : UserRegister,
      meta: { title: "Register" },
    }
  ]
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes
})


// GOOD
router.beforeEach((to, from, next) => {
    document.title = to.meta.title;
    next()
})

export default router;
