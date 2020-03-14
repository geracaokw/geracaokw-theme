<template>
  <div class="dd-m-scrolldown"
       @click="scroll">
    <a href="#sobre" class="dd-m-scrolldown__button">
      <svg class="icon">
        <use xlink:href="/wp-content/themes/santa-casa-maua-saude-theme/public/img/svg/icon-arrow-double-down.svg#icon" />
      </svg>
    </a>
  </div>
</template>

<script>
export default {
  data() {
    return {

    }
  },
  methods: {
    scroll (e) {
      e.preventDefault()
      
      const distanceToTop = el => Math.floor(el.getBoundingClientRect().top)
      const $el = e.target
      const anchor = $el.getAttribute('href')
      const targetAnchor = document.querySelector(anchor)
      if (!targetAnchor) return;
      const originalTop = distanceToTop(targetAnchor);
      window.scrollBy({ top: originalTop, left: 0, behavior: 'smooth' });
      const checkIfDone = setInterval(function() {
        const atBottom = window.innerHeight + window.pageYOffset >= document.body.offsetHeight - 2;
        if (distanceToTop(targetAnchor) === 0 || atBottom) {
          targetAnchor.tabIndex = '-1';
          window.history.pushState('', '', anchor);
          clearInterval(checkIfDone);
        }
      }, 100);
    }
  }
}
</script>
