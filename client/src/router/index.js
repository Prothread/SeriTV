// Vue
import Vue from 'vue'
import Router from 'vue-router'

// Pages
import Home from '@/components/Home/Index'
import Series from '@/components/Admin/Series/Index'
import CreateSerie from '@/components/Admin/Series/Create'
import Movies from '@/components/Admin/Movies/Index'
import CreateMovies from '@/components/Admin/Movies/Create'

// Initialize plugins
Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/admin/series/',
      name: 'Series',
      component: Series
    },
    {
      path: '/admin/series/create/',
      name: 'Create serie',
      component: CreateSerie
    },
    {
      path: '/admin/movies/',
      name: 'Movies',
      component: Series
    },
    {
      path: '/admin/movies/create/',
      name: 'Create movie',
      component: CreateMovies
    }
  ]
})
