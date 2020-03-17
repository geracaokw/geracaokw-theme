<?php
/**
 * Template Name: Home
 */

get_header();
?>

<main class="main" role="main">
  <list-carousel>
    <card-carousel :item="{
      image: {
        url: '/wp-content/themes/geracaokw-theme/public/img/default/banner-1.png',
        alt: 'Jovens da Geração Karol Wojtyla reunidos para a foto final do Retiro Ousadia 2020.'
      },
      title: 'Conheça a nossa história',
      excerpt: '<p>Do sopro divino à busca pelo altíssimo.</p>',
      link: '#'
    }"></card-carousel>
    <card-carousel :item="{
      image: {
        url: '/wp-content/themes/geracaokw-theme/public/img/default/banner-2.png',
        alt: 'Foto do papa São João Paulo II olhando para cima'
      },
      title: 'Afinal, quem é Karol Wojtyla?',
      excerpt: '<p>Quem é a pessoa que dá nome à esta geração?</p>',
      link: '#'
    }"></card-carousel>
  </list-carousel>
</main>


<?php get_footer(); ?>