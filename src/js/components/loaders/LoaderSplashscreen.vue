<template>
  <div class="splashscreen"></div>
</template>

<script>
export default {
  data() {
    return {
      show: true
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
    }
  },
  watch: {
    show() {
      this.lockOverlow();
    }
  }
};
</script>