<?php

/**
 * @file
 * Contains \Drupal\migrate_drupal\Tests\Dump\TermRelation.
 *
 * THIS IS A GENERATED FILE. DO NOT EDIT.
 *
 * @see cores/scripts/dump-database-d6.sh
 * @see https://www.drupal.org/sandbox/benjy/2405029
 */

namespace Drupal\migrate_drupal\Tests\Table;

use Drupal\migrate_drupal\Tests\Dump\Drupal6DumpBase;

/**
 * Generated file to represent the term_relation table.
 */
class TermRelation extends Drupal6DumpBase {

  public function load() {
    $this->createTable("term_relation", array(
      'primary key' => array(
        'trid',
      ),
      'fields' => array(
        'trid' => array(
          'type' => 'serial',
          'not null' => TRUE,
          'length' => '11',
        ),
        'tid1' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '10',
          'default' => '0',
          'unsigned' => TRUE,
        ),
        'tid2' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '10',
          'default' => '0',
          'unsigned' => TRUE,
        ),
      ),
    ));
    $this->database->insert("term_relation")->fields(array(
      'trid',
      'tid1',
      'tid2',
    ))
    ->execute();
  }

}
