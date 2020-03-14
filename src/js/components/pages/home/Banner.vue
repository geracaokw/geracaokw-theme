<template>
  <Slick
    ref="slick"
    :options="slickOptions"
    class="dd-m-banner">
    <div class="dd-m-banner-item">
      <img src="/wp-content/themes/santa-casa-maua-saude-theme/public/img/banners/banner-default.png" alt="">
      <div class="dd-m-banner-content">
        <h2 class="dd-m-banner-title">Encontre aqui o seu plano de saúde</h2>
      </div>
    </div>
    <div class="dd-m-banner-item">
      <img src="/wp-content/themes/santa-casa-maua-saude-theme/public/img/banners/banner-default.png" alt="">
      <div class="dd-m-banner-content">
        <h2 class="dd-m-banner-title">Encontre aqui o seu plano de saúde</h2>
      </div>
    </div>
    <div class="dd-m-banner-item">
      <img src="/wp-content/themes/santa-casa-maua-saude-theme/public/img/banners/banner-default.png" alt="">
      <div class="dd-m-banner-content">
        <h2 class="dd-m-banner-title">Encontre aqui o seu plano de saúde</h2>
      </div>
    </div>
  </Slick>
</template>

<script>
import Slick from 'vue-slick'
import 'slick-carousel/slick/slick.css'

export default {
  data() {
    return {
      slickOptions: {
        autoplay: false,
        slidesToShow: 1,
        dots: true,
        infinite: true,
        arrows: false
      }
    }
  },
  components: {
    Slick
  }
}
</script>
