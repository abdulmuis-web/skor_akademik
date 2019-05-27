<?php

/**
 * @file
 * Contains skor_akademik.page.inc.
 *
 * Page callback for Skor akademik entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Skor akademik templates.
 *
 * Default template: skor_akademik.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_skor_akademik(array &$variables) {
  // Fetch SkorAkademik Entity Object.
  $skor_akademik = $variables['elements']['#skor_akademik'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
