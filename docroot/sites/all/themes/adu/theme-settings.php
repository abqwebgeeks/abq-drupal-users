<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function adu_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL)  {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  // Create the form using Forms API: http://api.drupal.org/api/
  /* -- Delete this line if you want to use this setting
  $form['adu_example'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('adu sample setting'),
    '#default_value' => theme_get_setting('adu_example'),
    '#description'   => t("This option doesn't do anything; it's just an example."),
  );
  // */

  // Remove some of the base theme's settings.
  unset($form['themedev']['zen_wireframes']); // We don't need to toggle wireframes on this site.
}
