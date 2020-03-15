<template>
  <a class="button" v-if="link" href="">
    <span><slot></slot></span>
  </a>
  <button class="button" :type="type" v-else>
    <span><slot></slot></span>
  </button>
</template>

<script>
export default {
  props: ["link", "type"]
};
</script>

<style></style>
