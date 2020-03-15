<?php
/**
 * Template Name: Home
 */

get_header();
?>

<list-carousel>
  <card-carousel :item="{
    image: {
      url: '/wp-content/uploads/2020/03/image-default.png',
      alt: 'Jovens da Geração Karol Wojtyla reunidos para a foto final do Retiro Ousadia 2020.'
    },
    title: 'Conheça a nossa história',
    excerpt: '<p>Do sopro divino à busca pelo altíssimo.</p>',
    link: '#'
  }"></card-carousel>
</list-carousel>

<?php get_footer(); ?>