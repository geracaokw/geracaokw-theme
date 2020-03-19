<template>
  <div class="sidebar-content">
    <div class="sidebar-content__menu">
      <button @click="openMenu" class="button" type="submit">
        <i class="uil uil-apps"></i>
      </button>
    </div>

    <CartQuantity></CartQuantity>

    <nav class="sidebar-content__social">
      <a
        href="https://facebook.com/geracaokw"
        target="_blank"
        class="button sidebar-content__social-item"
      >
        <i class="uil uil-facebook-f"></i>
      </a>

      <a
        href="https://instagram.com/geracaokw"
        target="_blank"
        class="button sidebar-content__social-item"
      >
        <i class="uil uil-instagram"></i>
      </a>

      <a href="#" target="_blank" class="button sidebar-content__social-item">
        <i class="uil uil-youtube"></i>
      </a>
    </nav>
  </div>
</template>

<script>
import { EventBus } from "../../services/EventBus";
import CartQuantity from "../cart/CartQuantity";

export default {
  data() {
    return {
      cartValue: window.localStorage.cartValue
        ? window.localStorage.cartValue
        : false
    };
  },
  methods: {
    openMenu() {
      EventBus.$emit("sidebar-menu", true);
    }
  },
  components: {
    CartQuantity
  }
};
</script>

<style>
</style>