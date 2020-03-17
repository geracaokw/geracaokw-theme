import Vue from 'vue'

// Global Components

// Custom Components
Vue.component(
  "Sidebar",
  require("./components/Sidebar.vue").default
);

Vue.component(
  "Button",
  require("./components/buttons/Button.vue").default
);

Vue.component(
  "LoaderSplashscreen",
  require("./components/loaders/LoaderSplashscreen.vue").default
);

Vue.component(
  "CardCarousel",
  require("./components/cards/CardCarousel.vue").default
);

Vue.component(
  "ListCarousel",
  require("./components/lists/ListCarousel.vue").default
);

const app = new Vue({}).$mount('[data-id="app"]')