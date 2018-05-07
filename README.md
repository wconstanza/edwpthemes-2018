# Repositorio de la especialidad en desarrollo de temas WordPress de EDteam 2018 impartido por @jonmircha

### [Ir a la Especialidad](https://ed.team/especialidades/wordpress-theming)

![WordPress Theming](https://ed.team/sites/default/files/2018-04/wordpress-theming-poster.jpg)

## Introducción al desarrollo de temas WordPress

En este repositorio se agrega un archivo **`installer.php`** y un paquete **`.zip`**, con dichos archivos y el plugin [Duplicator](https://wordpress.org/plugins/duplicator/) puedes exportar el sitio de prueba usado en la especialidad.

### Temas:

Un Tema es una colección de archivos que trabajan juntos para producir un interfaz gráfica con un diseño unificado para el sitio. Estos archivos se llaman archivos de plantilla.

Un tema modifica el modo en que el sitio es mostrado, sin modificar el código fuente de WordPress.

Los temas pueden incluir archivos de plantilla personalizados, archivos de imagen, hojas de estilo, scripts (.php o .js), así como cualquier otro archivo necesario.

### Archivos básicos:

* Plantilla principal (index.php)
* Hoja de estilos principal del tema (style.css)
* Archivo de funciones del tema (functions.php)
* Imagen de captura de pantalla del tema (screenshot.png)

### Hooks:

El archivo **functions.php**  es como una biblioteca personal de funciones, es una manera fácil de agregar o modificar el comportamiento por defecto de WordPress.

Se comporta exactamente igual que un plugin, añadiendo características y funcionalidad a un tema, y se puede utilizar tanto para definir nuevas funciones PHP como para modificar las que ya incorpora WordPress, se dividen en:

* Filtros y
* Acciones

También se puede modificar el comportamiento de WordPress a través de:

* Widgets y
* Plugins

### Enlaces importantes:

* [Buenas prácticas PHP en WordPress](https://make.wordpress.org/core/handbook/coding-standards/php/)
* [Codex WordPress](http://codex.wordpress.org/)
* [Developers WordPress](https://developer.wordpress.org/)
* [Glosario de conceptos importantes en WP](https://codex.wordpress.org/Glossary)
* [API de Hooks WP](http://codex.wordpress.org/Plugin_API/Hooks)
* [Lista de Acciones WP](http://codex.wordpress.org/Plugin_API/Action_Reference)
* [Lista de Filtros WP](http://codex.wordpress.org/Plugin_API/Filter_Reference)
* [API de Plugins WP](http://codex.wordpress.org/Plugin_API)
* [API de Widgets WP](https://codex.wordpress.org/Widgets_API)
* [Lista de Themes WP](https://wordpress.org/themes/)
* [Lista de Plugins WP](https://wordpress.org/plugins/)
* [Jerarquía de Plantillas WP](https://wphierarchy.com/)
  * [por Templates Files](https://developer.wordpress.org/themes/basics/template-hierarchy/)
  * [por Conditional Tags](https://codex.wordpress.org/Conditional_Tags)

## 1) Conceptos básicos para desarrollo de temas.

* ¿Qué es un tema?
  * Archivos básicos de un tema
  * Dividiendo el tema: Headers, Footers, Sidebars y Templates Parts
  * Paradigma de programación de WordPress
  * Documentación: Codex vs Developers
  * Hooks en WordPress: Acciones y Filtros
  * Funciones básicas de inclusión e invocación
* Mostrando contenido en el tema
  * The Loop
  * Funciones para mostrar contenido
    * Funciones obtenedoras de contenido
    *  Funciones de impresión de contenido
  * Activando imagen destacada
  * Paginación
* Elementos interactivos
  * Menú de Páginas
  * Creación e invocación de Menús
  * Creación e invocación de Widgets
  * Activando HTML5 en WordPress: Ventajas
  * Búsquedas y Comentarios Semánticos
* Jerarquía de plantillas
  * por Templates Files
    * ¿Qué son Templates Files?
    * Ventajas y Usos
    * Aplicando templates files a nuestro tema
  * por Conditional Tags
    * ¿Qué son Conditional Tags?
    * Ventajas y Usos
    * Aplicando conditional tags a nuestro tema

## 2) Conceptos avanzados para desarrollo de temas.

 * Personalización dinámica desde el Dashboard
    * Activando el personalizador del tema
    * Configuración del personalizador del tema
    * Activando la cabecera multimedia
  * Modificando el Backend de WordPress
    * Página de Login
    * Dashboard de WordPress
  * Internacionalización
  * Child Themes
  * Clase WP Query
  * Taxonomías Avanzadas
    * Taxonomías y Términos
    * Custom Post Types
    * Custom Fields
    * Metaboxes

## 3) Buenas prácticas y herramientas para el desarrollo de temas.
## 4) Creando mi primer tema profesional.
