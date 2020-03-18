<template>
  <aside class="sidebar" role="complementary">
    <Content v-if="content"></Content>
    <Menu :show="show"></Menu>
  </aside>
</template>

<script>
import { EventBus } from '../services/EventBus';
import Content from './sidebar/SidebarContent';
import Menu from './sidebar/SidebarMenu';
import Button from './buttons/Button';

export default {
  data() {
    return {
      show: false
    };
  },
  props: ['content'],
  mounted() {
    EventBus.$on('sidebar-menu', value => {
      this.show = value;
    });
  },
  components: {
    Content,
    Menu,
    Button
  }
};
</script>