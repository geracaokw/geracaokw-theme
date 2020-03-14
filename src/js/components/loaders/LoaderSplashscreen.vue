<template>
  <transition name="fade">
    <div v-if="show" class="loader--overlay loader-splashscreen">
      <i class="icon-logo"></i>
      <h1 class="loader-splashscreen__title">
        <vue-typer :repeat="0" :pre-type-delay="1500" text="Ouse."></vue-typer
        ><br />
        <vue-typer
          :repeat="0"
          :pre-type-delay="1800"
          @completed="typed"
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
