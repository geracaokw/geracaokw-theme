<template>
  <Slick class="list list-carousel" ref="slick" :options="options">
    <slot></slot>
  </Slick>
</template>

<script>
import Slick from "vue-slick";
export default {
  data() {
    return {
      options: {
        infinite: false,
        arrows: true,
        dots: false,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    };
  },
  components: {
    Slick
  }
};
</script>

<style></style>
