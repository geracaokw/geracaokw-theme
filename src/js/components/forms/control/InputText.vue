<template>
  <div class="form-control">
    <div
      class="form-control__wrap"
      :class="{ 'form-control__wrap--icon': icon }"
    >
      <input
        ref="input"
        @input="updateValue"
        class="form-control__input"
        :class="{ 'has-content': value }"
        :id="id"
        :name="id"
        :type="type ? type : 'text'"
        :value="value"
        :disabled="disabled"
      />
      <label class="form-control__label" :for="id">{{ label }}</label>
    </div>
  </div>
</template>

<script>
export default {
  props: ["id", "type", "label", "icon", "value", "disabled"],
  methods: {
    updateValue(e) {
      const $el = e.target;
      this.$emit("input", $el.value);
    }
  }
};
</script>

<style lang="sass" scoped>
@import '../../../../sass/base/imports'

.form-control__wrap
  position: relative

.form-control__input
  @extend .reset-input
  width: 100%
  padding: rem(12px) rem(16px)
  height: rem(48px)
  background-color: $white
  border-radius: rem(4px)
  border: rem(1px) solid $color-balanced-normal
  font-weight: 200
  color: $color-balanced-darker
  transition: .2s all ease

  &:focus,
  &.has-content
    padding-bottom: 0

    + .form-control__label
      top: 0
      transform: translateY(4px)
      font-size: rem(11px)

  &:focus
    box-shadow: 0 rem(8px) rem(16px) rgba($color-balanced-black, .3), 0 0 0 rem(1px) $color-balanced-normal

.form-control__label
  position: absolute
  top: 50%
  left: rem(16px)
  transform: translateY(-50%)
  color: $color-balanced-normal
  font-weight: 200
  transition: .2s all ease
  pointer-events: none
</style>
