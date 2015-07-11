<?php

function c4rva_latest_news($opts = array()){
  $defaults = array(
    'numberposts' => 1,
    'post_status' => 'publish'
  );
  $options = array_merge($defaults, $opts);
  return array_shift(wp_get_recent_posts($options));
}
