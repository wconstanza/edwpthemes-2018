<?php
get_header();
if ( is_home() ) {
  echo '<mark>Estoy en el home</mark>';
} else if ( is_category() ) {
  echo '<mark>Estoy mostrando resultados de categorías</mark>';
} else if(is_tag()) {
  echo '<mark>Estoy mostrando resultados de etiquetas</mark>';
} else if(is_page()) {
  echo '<mark>Estoy mostrando una páginas</mark>';
} else if(is_single()) {
  echo '<mark>Estoy mostrando una entradas</mark>';
} else if(is_search()) {
  echo '<mark>Estoy mostrando una búsqueda</mark>';
} else if(is_author()) {
  echo '<mark>Estoy mostrando un autor</mark>';
} else if(is_404()) {
  echo '<mark>Estoy mostrando error 404</mark>';
}
get_template_part( 'content' );
get_sidebar();
get_footer();
