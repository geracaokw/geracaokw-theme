<template>
  <nav :class="['sidebar-menu', { 'is-open': show }]" role="navigation">
    <div @click="closeMenu" class="sidebar-menu__blur"></div>

    <div class="sidebar-menu__content">
      <button @click="closeMenu" class="button sidebar-menu__close">
        <i class="uil uil-times"></i>
      </button>

      <a href="/" class="sidebar-menu__logo">
        <i class="icon-logo"></i>
      </a>

      <div class="sidebar-menu__nav">
        <List
          type="primary"
          :list="[
          { name: 'Início', url: '/' },
          { name: 'Conheça', url: '/sobre' },
          { name: 'Blog', url: '/blog' },
          { name: 'Agenda', url: '/agenda' },
          { name: 'Loja', url: '/loja' },
        ]"
        ></List>

        <List type="primary" :list="[
          { name: 'Minha conta', url: '/conta' }
        ]"></List>

        <List
          type="secondary"
          :list="[
          { name: 'Termos de uso', url: '/termos' },
          { name: 'Privacidade', url: '/privacidade' },
        ]"
        ></List>
      </div>

      <user-welcome></user-welcome>
    </div>
  </nav>
</template>

<script>
import { EventBus } from '../../services/EventBus';
import List from '../lists/ListSidebar';
import UserWelcome from '../User/UserWelcome';

export default {
  props: ['show'],
  methods: {
    closeMenu() {
      EventBus.$emit('sidebar-menu', false);
    }
  },
  components: {
    List,
    UserWelcome
  }
};
</script>