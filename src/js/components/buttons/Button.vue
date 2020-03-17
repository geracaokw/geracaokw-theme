<template>
  <a
    :class="[
      'button',
      `button-${design ? design : 'square'}`,
      `button--${color ? color : 'stable'}`,
      `button--${dir ? dir : 'ltr'}`,
      `button--${mode ? mode : 'filled'}`,
      `button--${size ? mode : 'md'}`
    ]"
    v-if="link"
    href=""
  >
    <i v-if="icon" :class="`icon-${icon}`"></i>
    <span><slot></slot></span>
  </a>
  <button
    :class="[
      'button',
      `button-${design ? design : 'square'}`,
      `button--${color ? color : 'stable'}`,
      `button--${dir ? dir : 'ltr'}`,
      `button--${mode ? mode : 'filled'}`,
      `button--${size ? mode : 'md'}`
    ]"
    :type="type"
    v-else
  >
    <i v-if="icon" :class="`icon-${icon}`"></i>
    <span><slot></slot></span>
  </button>
</template>

<script>
export default {
  props: [
    "link",
    "type",
    "icon",
    "design",
    "direction",
    "color",
    "mode",
    "size"
  ]
};
</script>

<style></style>
