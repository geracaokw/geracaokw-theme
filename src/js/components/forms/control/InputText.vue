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

.form-control
  width: 100%

.form-control__wrap
  position: relative

.form-control__input
  @extend .reset-input
  width: 100%
  padding: rem(12px) rem(16px)
  height: rem(48px)
  background-color: $white
  border-radius: rem(4px)
  box-shadow: inset 0 0 0 1px $color-balanced-normal
  font-weight: 200
  color: $color-balanced-darker

  &:focus,
  &.has-content
    padding-bottom: 0

    + .form-control__label
      top: 0
      transform: translateY(4px)
      font-size: rem(12px)
      color: $color-balanced-light

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
