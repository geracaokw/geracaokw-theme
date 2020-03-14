import Vue from 'vue'

// Global Components

// Custom Components
Vue.component(
  "LoaderSplashscreen",
  require("./components/loaders/LoaderSplashscreen.vue").default
);

const app = new Vue({}).$mount('[data-id="app"]')