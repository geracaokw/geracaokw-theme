<template>
  <article class="card card-carousel">
    <figure class="card-carousel__figure">
      <img :src="item.image.url" :alt="item.image.alt" />
    </figure>

    <div class="card-carousel__content">
      <h2 class="card-carousel__title">{{ item.title }}</h2>
      <div class="card-carousel__excerpt" v-html="item.excerpt"></div>
      <Button :link="item.button.link" mode="outlined" color="balanced">{{
        item.button.label
      }}</Button>
    </div>
  </article>
</template>

<script>
import Button from "../buttons/Button";
export default {
  props: ["item"],
  components: {
    Button
  }
};
</script>

<style></style>
