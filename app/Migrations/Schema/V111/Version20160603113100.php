<?php
/* For licensing terms, see /license.txt */

namespace Application\Migrations\Schema\V111;

use Application\Migrations\AbstractMigrationChamilo;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Type;

/**
 * Class Version20160603113100
 * Add association mapping for Language class
 * @package Application\Migrations\Schema\V111
 */
class Version20160603113100 extends AbstractMigrationChamilo
{
    /**
     * @param Schema $schema
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\DBAL\Schema\SchemaException
     */
    public function up(Schema $schema)
    {
        $languageTable = $schema->getTable('language');
        $languageTable
            ->getColumn('parent_id')
            ->setType(Type::getType(Type::INTEGER))
            ->setNotnull(false);
        $languageTable->addForeignKeyConstraint('language', ['parent_id'], ['id'], [], 'language_parent');
    }

    /**
     * @param Schema $schema
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\DBAL\Schema\SchemaException
     */
    public function down(Schema $schema)
    {
        $languageTable = $schema->getTable('language');
        $languageTable->removeForeignKey('language_parent');
        $languageTable
            ->getColumn('parent_id')
            ->setType(Type::getType(Type::BOOLEAN))
            ->setNotnull(false);
    }
}