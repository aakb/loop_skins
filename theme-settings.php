<?php
function loop_skins_form_system_theme_settings_alter(&$form, $form_state) {
  $form['loop_skins_skin'] = array(
    '#type'          => 'select',
    '#title'         => t('Skin'),
    '#options' => array(
      '' => t('(default)'),
      'red' => t('Red'),
      'blue' => t('Blue'),
      'green' => t('Green'),
      'cura' => t('Cura'),
      'buloop' => t('Børn og Unge'),
      'risikataloop' => t('Risikataloop'),
    ),
    '#default_value' => theme_get_setting('loop_skins_skin'),
    '#description'   => t('Choose a skin for the site.'),
  );
}
