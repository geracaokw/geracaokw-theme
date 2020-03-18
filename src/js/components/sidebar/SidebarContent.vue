<template>
  <div class="sidebar-content">
    <div class="sidebar-content__menu">
      <button class="button" type="submit">
        <i class="uil uil-apps"></i>
      </button>
    </div>

    <div v-if="cartValue" class="sidebar-content__cart">
      <button class="button" type="submit">
        <span class="sidebar-content__cart-number">{{ cartValue }}</span>
        <i class="uil uil-shopping-cart-alt"></i>
      </button>
    </div>

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
export default {
  data() {
    return {
      cartValue: window.localStorage.cartValue
        ? window.localStorage.cartValue
        : false
    };
  }
};
</script>

<style>
</style>