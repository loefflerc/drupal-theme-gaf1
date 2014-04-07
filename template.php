<?php



/**
* IE detector
*/
function gaf_theme_ie_detect()
{
    if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        return true;
    else
        return false;
}

/**
* Add pngFix script to fix .png transparensy bug in IE6
*/

if (gaf_theme_ie_detect()){
	drupal_add_js(drupal_get_path('theme', 'gaf_theme') . '/js/jquery.pngFix.js', 'theme');
}

/**
 * Sets the body-tag class attribute.
 *
 * Adds 'sidebar-left', 'sidebar-right' or 'sidebars' classes as needed.
 */
function gaf_theme_container($L, $R) {

$class ='container';
    if ($L) {
      $class .= ' container-left';
    }
    if ($R) {
      $class .= ' container-right';
    }
 
 
    return ' class="'. $class .'"';
  
}




/**
 * Altering search form
 */
function gaf_theme_search_theme_form($form) {
    $form['#prefix'] = '<div id="search" class="container-inline">';
    $form['#suffix'] = '</div>';
    //unset ($form['submit']);

    //$form['search_theme_form']['#title'] = t('Search');
    $form['search_theme_form']['#title'] = '';

    return drupal_render($form);
}

?>