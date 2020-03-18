<template>
  <aside class="sidebar" role="complementary">
    <Content v-if="content" @open-menu="openMenu"></Content>
    <Menu :show="show"></Menu>
  </aside>
</template>

<script>
import Content from "./sidebar/SidebarContent";
import Menu from "./sidebar/SidebarMenu";
import Button from "./buttons/Button";

export default {
  data() {
    return {
      show: false
    };
  },
  props: ["content"],
  methods: {
    openMenu(e) {
      this.show = e;
    }
  },
  components: {
    Content,
    Menu,
    Button
  }
};
</script>