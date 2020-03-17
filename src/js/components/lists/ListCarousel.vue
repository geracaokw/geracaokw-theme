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
        slidesToScroll: 1,
        nextArrow:
          "<button type='button' class='button button-rounded button--filled button--balanced slick-next'><i class='uil uil-angle-down'></i></button>",
        prevArrow:
          "<button type='button' class='button button-rounded button--filled button--balanced slick-prev'><i class='uil uil-angle-up'></i></button>"
      }
    };
  },
  components: {
    Slick
  }
};
</script>

<style lang="sass">
@import '../../../sass/base/imports'

.slick-arrow
  position: absolute
  z-index: 1
  @include rem(width, 32px)
  @include rem(height, 32px)
  @include rem(font-size, 24px)

  @media (min-width: $desktop)
    @include rem(width, 48px)
    @include rem(height, 48px)
    @include rem(font-size, 32px)

  &.slick-prev
    top: 0
    left: 0
    transform: translate(-16px, 68px) rotate(-90deg)

    @media (min-width: $desktop)
      left: 0
      transform: translate(176px, -16px)

    @media (min-width: $desktop-hd)
      transform: translate(56px, -16px)

  &.slick-next
    top: 0
    right: 0
    transform: translate(16px, 68px) rotate(-90deg)

    @media (min-width: $desktop)
      top: inherit
      bottom: 0
      left: 0
      transform: translate(176px, 16px)

    @media (min-width: $desktop-hd)
      transform: translate(56px, 16px)
</style>
