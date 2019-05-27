<?php

namespace Drupal\skor_akademik;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Skor akademik entity.
 *
 * @see \Drupal\skor_akademik\Entity\SkorAkademik.
 */
class SkorAkademikAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\skor_akademik\Entity\SkorAkademikInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished skor akademik entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published skor akademik entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit skor akademik entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete skor akademik entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add skor akademik entities');
  }

}
