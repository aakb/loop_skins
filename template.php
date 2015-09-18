<?php

/**
 * Override or insert variables into the html template.
 */
function loop_skins_preprocess_html(&$vars) {
  $skin = theme_get_setting('loop_skins_skin');
  if (!$skin) {
    $skin = 'styles';
  }

  drupal_add_css(path_to_theme() . '/css/' . $skin . '.css', array('group' => CSS_THEME, 'weight' => 999, 'preprocess' => FALSE));
}
