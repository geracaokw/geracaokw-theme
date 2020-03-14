import normalize from 'normalize.css'
import Vue from 'vue'

// Global Components

// Custom Components
Vue.component('banner', require('./components/pages/home/Banner.vue').default)
Vue.component('plans', require('./components/pages/home/Plans.vue').default)
Vue.component('scrolldown', require('./components/pages/home/Scrolldown.vue').default)

Vue.component('healthtips', require('./components/pages/home/healthtips/HealthTips.vue').default)
Vue.component('healthtips-categories', require('./components/pages/home/healthtips/categories/List.vue').default)
Vue.component('healthtips-categories-item', require('./components/pages/home/healthtips/categories/Item.vue').default)
Vue.component('healthtips-posts', require('./components/pages/home/healthtips/posts/List.vue').default)
Vue.component('healthtips-posts-item', require('./components/pages/home/healthtips/posts/Item.vue').default)

const app = new Vue({}).$mount('[data-id="app"]')