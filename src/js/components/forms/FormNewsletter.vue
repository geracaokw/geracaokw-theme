<template>
  <form @submit.prevent="submit" action class="form form-newsletter">
    <div class="form-newsletter-content">
      <h4 class="form-newsletter__title">
        <i class="uil uil-envelope"></i>
        Receba promoções
        <br />
        e novidades por e-mail
      </h4>

      <input-text id="name" label="Nome" v-model="name"></input-text>
      <input-text id="email" label="E-mail" v-model="email"></input-text>
      <Button type="submit" mode="filled" color="balanced">
        Quero receber
      </Button>
    </div>
  </form>
</template>

<script>
import InputText from "./control/InputText";
import Button from "../buttons/Button";

export default {
  data() {
    return {
      name: null,
      email: null
    };
  },
  methods: {
    submit() {
      console.log("Assinar newsletter");
    }
  },
  components: {
    InputText,
    Button
  }
};
</script>

<style lang="sass">
@import '../../../sass/base/imports'

.form-newsletter
  width: 100%
  padding: rem(24px) 0
  background-color: darken($color-balanced-darker, 10%)
  color: $white

  &-content
    @extend .grid
    display: flex
    align-items: flex-start
    flex-direction: column

    @media (min-width: $desktop)
      align-items: center
      flex-direction: row

  &__title
    display: flex
    align-items: center
    margin: 0
    margin-bottom: rem(24px)
    font-size: rem(18px)
    line-height: rem(18px)
    font-weight: 400
    white-space: nowrap

    @media (min-width: $desktop)
      margin-bottom: 0
      margin-right: rem(48px)

    @media (min-width: $desktop-hd)
      font-size: rem(24px)
      line-height: rem(24px)

    i
      margin-right: rem(8px)
      font-size: rem(32px)

      @media (min-width: $desktop)
        font-size: rem(40px)

  .form-control:not(:last-child)
    margin-bottom: rem(16px)

    @media (min-width: $desktop)
      margin-bottom: 0
      margin-right: rem(16px)

  .button
    width: 100%

    @media (min-width: $desktop)
      width: auto
</style>
