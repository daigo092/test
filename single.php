<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<?php
 $post = $wp_query->post;
 if ( in_category('5') ) {
 include(TEMPLATEPATH . '/single-1.php');//オリエンテーション
 } elseif ( in_category('4') ) {
 include(TEMPLATEPATH . '/single-2.php');//保育士
 } elseif ( in_category('6') ) {
 include(TEMPLATEPATH . '/single-3.php');//調剤事務
 } elseif ( in_category('7') ) {
 include(TEMPLATEPATH . '/single-4.php');//医療事務
 }  elseif ( in_category('8') ) {
 include(TEMPLATEPATH . '/single-5.php');//介護福祉
 }  elseif ( in_category('9') ) {
 include(TEMPLATEPATH . '/single-6.php');//ブライダル
 }  elseif ( in_category('10') ) {
 include(TEMPLATEPATH . '/single-7.php');//心理カウンセリング
 }  elseif ( in_category('11') ) {
 include(TEMPLATEPATH . '/single-8.php');//事務職
 }  elseif ( in_category('12') ) {
 include(TEMPLATEPATH . '/single-9.php');//webデザイナー
 }elseif ( in_category('13') ) {
 include(TEMPLATEPATH . '/single-10.php');//webプログラマー
 }else {
 include(TEMPLATEPATH . '/single-0.php');
 }
 ?>
<?php get_footer(); ?>