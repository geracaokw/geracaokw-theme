<template>
  <div class="user-welcome">
    <img
      src="https://avatars2.githubusercontent.com/u/3299130?s=80&u=5367cf12eab0bea63c9543e4101ec3afbc05f8b2&v=4"
      alt
      class="user-welcome__img"
    />
    <div class="user-welcome__info">
      <h3 class="user-welcome__title">{{ user.name ? user.name : 'Olá!' }}</h3>
      <button v-if="!user.name" type="submit" class="button user-welcome__button">Fazer login</button>
      <a v-else class="button user-welcome__button" href="/conta">Editar perfil</a>
    </div>

    <button v-if="user.name" class="button user-welcome__exit">
      <i class="uil uil-exit"></i>
    </button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      user: {
        name: 'Kevin Oliveira'
      }
    };
  }
};
</script>

<style>
</style>