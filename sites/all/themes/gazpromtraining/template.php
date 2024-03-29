<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */


function gazpromtraining_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['actions']['submit']['#value'] = t(''); // Change the text on the submit button
    }
   }

function gazpromtraining_preprocess_node(&$variables) {


  foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

   
    if ($blocks = block_get_blocks_by_region($region_key)) {
      $variables['region'][$region_key] = $blocks;
    }
    else {
      $variables['region'][$region_key] = array();
    }
  }
   
  $variables['tabs'] = menu_local_tabs();

  if ($node = menu_get_object()) {
    $variables['node'] = $node;
  }
  
  $variables['show_messages'] = $variables['page']['#show_messages'];
  
}