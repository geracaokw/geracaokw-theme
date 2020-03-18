<template>
  <nav :class="['sidebar-menu', { 'is-open': show }]" role="navigation">
    <div class="sidebar-menu__blur"></div>

    <div class="sidebar-menu__content">
      <button class="button sidebar-menu__close">
        <i class="uil uil-times"></i>
      </button>
    </div>
  </nav>
</template>

<script>
export default {
  props: ["show"]
};
</script>