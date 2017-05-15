<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170510120841 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE utilisateur CHANGE code_postal code_postal INT DEFAULT NULL, CHANGE ville ville VARCHAR(255) DEFAULT NULL, CHANGE pays pays VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE administrateur CHANGE code_postal code_postal INT DEFAULT NULL, CHANGE ville ville VARCHAR(255) DEFAULT NULL, CHANGE pays pays VARCHAR(255) DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE administrateur CHANGE code_postal code_postal INT NOT NULL, CHANGE ville ville VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE pays pays VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE utilisateur CHANGE code_postal code_postal INT NOT NULL, CHANGE ville ville VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE pays pays VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
    }
}
