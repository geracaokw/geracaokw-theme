<template>
  <transition name="fade">
    <div v-if="show" class="loader--overlay loader-splashscreen">
      <i class="icon-logo"></i>
      <h1 class="loader-splashscreen__title">
        <vue-typer
          :repeat="0"
          :erase-delay="70"
          erase-style="backspace"
          :text="[
            'Ousadia.',
            'Alegria.',
            'Perseverança.',
            'Obediência.',
            'Ouse.'
          ]"
          @completed="slogan = true"
        ></vue-typer>
        <br />
        <vue-typer
          v-if="slogan"
          :repeat="0"
          :pre-type-delay="300"
          text="Salte para uma nova vida."
        ></vue-typer>
      </h1>
    </div>
  </transition>
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
        localStorage.setItem("viewIntro", true);
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
