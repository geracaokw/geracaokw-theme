<template>
  <a href="/carrinho" class="cart-quantity">
    <span class="cart-quantity__number">{{ quantity }}</span>
    <i class="uil uil-shopping-cart-alt"></i>
  </a>
</template>

<script>
export default {
  data() {
    return {
      quantity: 0
    };
  }
};
</script>

<style lang="sass">
@import '../../../sass/base/imports'
@import '../../../sass/modules/cart/quantity'
</style>