<template>
  <aside class="sidebar" role="complementary">
    <Content v-if="content"></Content>
    <Menu v-if="menu"></Menu>
  </aside>
</template>

<script>
import Content from "./sidebar/SidebarContent";
import Menu from "./sidebar/SidebarMenu";
import Button from "./buttons/Button";

export default {
  props: ["content", "menu"],
  components: {
    Content,
    Menu,
    Button
  }
};
</script>