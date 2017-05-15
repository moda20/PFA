<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170321122210 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE utilisateur CHANGE num_tel num_tel BIGINT NOT NULL, CHANGE date_naissance date_naissance DATE NOT NULL, CHANGE code_postal code_postal INT NOT NULL, CHANGE historique historique LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE administrateur CHANGE num_tel num_tel BIGINT NOT NULL, CHANGE date_naissance date_naissance DATE NOT NULL, CHANGE code_postal code_postal INT NOT NULL, CHANGE historique historique LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE administrateur CHANGE num_tel num_tel VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE date_naissance date_naissance VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE code_postal code_postal VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE historique historique VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE utilisateur CHANGE num_tel num_tel VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE date_naissance date_naissance VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE code_postal code_postal VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE historique historique VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
    }
}
