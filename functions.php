<?php

// 親テーマのCSS読み込み
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

// SVGアップロードを許可
function allow_svg_upload($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// SVGをメディアライブラリで正しく表示
function fix_svg_display() {
  echo '<style>
    .attachment-266x266, .thumbnail img {
      width: 100% !important;
      height: auto !important;
    }
  </style>';
}
add_action('admin_head', 'fix_svg_display');


// SwiperのCSSとJSを読み込む
function my_swiper() {

wp_enqueue_style(
'swiper-css',
'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'
);

wp_enqueue_script(
'swiper-js',
'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
array(),
null,
true
);

// 自作JSの読み込み
wp_enqueue_script(
'works-swiper-js',
get_stylesheet_directory_uri() . '/js/works-swiper.js',
array('swiper-js'),
null,
true
);

}
add_action('wp_enqueue_scripts', 'my_swiper');


