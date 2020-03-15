<template>
  <div
    :class="['loader--overlay', 'loader-splashscreen', { 'is-loaded': !show }]"
  >
    <div class="loader-splashscreen__logo">
      <i class="icon-logo"></i>
      <h1 v-if="show" class="loader-splashscreen__title">
        <vue-typer
          :repeat="0"
          :erase-delay="70"
          erase-style="backspace"
          :text="['Ouse.']"
          @completed="slogan = true"
        ></vue-typer>
        <br />
        <vue-typer
          v-if="slogan"
          :repeat="0"
          :pre-type-delay="300"
          text="Salte para uma nova vida."
          @completed="typed"
        ></vue-typer>
      </h1>

      <h1 v-if="!show" class="loader-splashscreen__title">
        Geração
        <br />
        Karol Wojtyla
      </h1>
    </div>
  </div>
</template>

<script>
import { VueTyper } from "vue-typer";

export default {
  data() {
    return {
      show: localStorage.getItem("viewIntro") ? false : true,
      slogan: false
    };
  },
  mounted() {
    this.lockOverlow();
  },
  methods: {
    lockOverlow() {
      const $body = document.querySelector("body");

      if (this.show) {
        return $body.classList.add("overflow-hidden");
      }

      return $body.classList.remove("overflow-hidden");
    },
    typed() {
      setTimeout(() => {
        // localStorage.setItem("viewIntro", true);
        this.show = false;
      }, 500);
    }
  },
  watch: {
    show() {
      this.lockOverlow();
    }
  },
  components: {
    VueTyper
  }
};
</script>

<style></style>
