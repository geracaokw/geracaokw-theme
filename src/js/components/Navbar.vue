<template>
  <header :class="['navbar', { 'is-focus': searchFocus }]" role="banner">
    <a href="/" class="navbar-logo">
      <i class="icon-logo"></i>
    </a>

    <form method="get" action="/" class="navbar-search">
      <input
        class="navbar-search__input"
        name="s"
        placeholder="Buscar por produtos, eventos, formações e muito mais"
        type="text"
        @focus="searchFocus = true"
        @blur="searchFocus = false"
      />
      <button type="submit" class="navbar-search__button">
        <i class="uil uil-search"></i>
      </button>
    </form>

    <div class="navbar-buttons">
      <CartQuantity></CartQuantity>

      <button
        @click="openMenu"
        class="button navbar-buttons__menu"
        type="submit"
      >
        <i class="uil uil-apps"></i>
      </button>
    </div>

    <Menu :show="show"></Menu>
  </header>
</template>

<script>
import { EventBus } from "../services/EventBus";
import Menu from "./sidebar/SidebarMenu";
import CartQuantity from "./cart/CartQuantity";

export default {
  data() {
    return {
      show: false,
      searchFocus: false
    };
  },
  components: {
    Menu,
    CartQuantity
  },
  mounted() {
    EventBus.$on("sidebar-menu", value => {
      this.show = value;
    });
  },
  methods: {
    openMenu() {
      EventBus.$emit("sidebar-menu", true);
    }
  }
};
</script>
