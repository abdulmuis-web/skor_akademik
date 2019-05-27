<?php

namespace Drupal\skor_akademik\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Skor akademik entities.
 */
class SkorAkademikViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
