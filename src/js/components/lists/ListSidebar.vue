<template>
  <ul :class="['sidebar-menu__list', `sidebar-menu__list--${ type }`]">
    <li v-for="(item, index) in list" :key="index">
      <a :href="item.url">{{ item.name }}</a>
    </li>
  </ul>
</template>

<script>
export default {
  props: ['type', 'list']
};
</script>