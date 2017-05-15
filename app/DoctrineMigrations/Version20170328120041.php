<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170328120041 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE utilisateur ADD fiche_tech_id INT DEFAULT NULL, DROP fiche_tech');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B37C732026 FOREIGN KEY (fiche_tech_id) REFERENCES fiche_tech (id)');
        $this->addSql('CREATE INDEX IDX_1D1C63B37C732026 ON utilisateur (fiche_tech_id)');
        $this->addSql('ALTER TABLE administrateur DROP fiche_tech');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE administrateur ADD fiche_tech VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B37C732026');
        $this->addSql('DROP INDEX IDX_1D1C63B37C732026 ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur ADD fiche_tech VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, DROP fiche_tech_id');
    }
}
