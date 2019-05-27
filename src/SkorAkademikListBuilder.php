<?php

namespace Drupal\skor_akademik;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Skor akademik entities.
 *
 * @ingroup skor_akademik
 */
class SkorAkademikListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['name'] = $this->t('Bidang studi');
    $header['score'] = $this->t('Skor');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\skor_akademik\Entity\SkorAkademik */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.skor_akademik.canonical',
      ['skor_akademik' => $entity->id()]
    );
    $row['score'] = $entity->score->value;
    return $row + parent::buildRow($entity);
  }

}
