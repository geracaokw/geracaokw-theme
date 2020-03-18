<template>
  <nav :class="['sidebar-menu', { 'is-open': show }]" role="navigation">
    <div @click="closeMenu" class="sidebar-menu__blur"></div>

    <div class="sidebar-menu__content">
      <button @click="closeMenu" class="button sidebar-menu__close">
        <i class="uil uil-times"></i>
      </button>
    </div>
  </nav>
</template>

<script>
import { EventBus } from '../../services/EventBus';

export default {
  props: ['show'],
  methods: {
    closeMenu() {
      EventBus.$emit('sidebar-menu', false);
    }
  }
};
</script>