<?php

namespace Drupal\skor_akademik\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Skor akademik entities.
 *
 * @ingroup skor_akademik
 */
interface SkorAkademikInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Skor akademik name.
   *
   * @return string
   *   Name of the Skor akademik.
   */
  public function getName();

  /**
   * Sets the Skor akademik name.
   *
   * @param string $name
   *   The Skor akademik name.
   *
   * @return \Drupal\skor_akademik\Entity\SkorAkademikInterface
   *   The called Skor akademik entity.
   */
  public function setName($name);

  /**
   * Gets the Skor akademik creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Skor akademik.
   */
  public function getCreatedTime();

  /**
   * Sets the Skor akademik creation timestamp.
   *
   * @param int $timestamp
   *   The Skor akademik creation timestamp.
   *
   * @return \Drupal\skor_akademik\Entity\SkorAkademikInterface
   *   The called Skor akademik entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Skor akademik published status indicator.
   *
   * Unpublished Skor akademik are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Skor akademik is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Skor akademik.
   *
   * @param bool $published
   *   TRUE to set this Skor akademik to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\skor_akademik\Entity\SkorAkademikInterface
   *   The called Skor akademik entity.
   */
  public function setPublished($published);

}
