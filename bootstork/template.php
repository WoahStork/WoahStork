<?php

/**
 * @file
 * template.php
 */
function bootstork_form_alter(&$form, &$form_state, $form_id) { // inserts bootstrap classes to form and wraps element in html
  if (!empty($form['actions']) && $form['actions']['submit']) {
    $form['actions']['submit']['#attributes'] = array('class' => array('webform-submit', 'btn', 'btn-primary', 'form-submit'));
    $form['actions']['submit']['#prefix'] = '<div class="modal-footer">';
    $form['actions']['submit']['#suffix'] = '</div>';
  }
}


function bootstork_preprocess_html(&$variables) { //puts user roles into html tag
  foreach($variables['user']->roles as $role){
    $variables['classes_array'][] = 'role-' . drupal_html_class($role);
  }
}



function bootstork_preprocess_page(&$variables, $hook) {
  if ($node = menu_get_object()) {
    $nid = $node->nid;
  }

  if (isset($variables['node']->type) && $nid!='3082' && $nid!='3084') { //the two splash pages are excluded.
  // this function makes content type templates possible
    $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
  }


  if (arg(0) == 'user') { // This function sets custom page titles for the user pages
    switch (arg(1)) {
      case NULL:
        if (!user_is_logged_in()) drupal_set_title(t('Log in'));
        break;
      case 'dispensary':
        drupal_set_title(t('Register as a Dispensary Admin')); // this doesn't work for some reason
        break;
      case 'register':
        drupal_set_title(t('Register'));
        break;
      case 'password':
        drupal_set_title(t('Request new password'));
        break;
      case 'login':
        drupal_set_title(t('Log in'));
        break;
    }
  }
  //loads jquery.cookie site wide
  drupal_add_library('system', 'jquery.cookie');
}