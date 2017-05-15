<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170411123420 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B37C732026');
        $this->addSql('DROP INDEX IDX_1D1C63B37C732026 ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP fiche_tech_id');
        $this->addSql('ALTER TABLE fiche_tech ADD utilisateur_id INT NOT NULL');
        $this->addSql('ALTER TABLE fiche_tech ADD CONSTRAINT FK_6C0CA799FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_6C0CA799FB88E14F ON fiche_tech (utilisateur_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fiche_tech DROP FOREIGN KEY FK_6C0CA799FB88E14F');
        $this->addSql('DROP INDEX IDX_6C0CA799FB88E14F ON fiche_tech');
        $this->addSql('ALTER TABLE fiche_tech DROP utilisateur_id');
        $this->addSql('ALTER TABLE utilisateur ADD fiche_tech_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B37C732026 FOREIGN KEY (fiche_tech_id) REFERENCES fiche_tech (id)');
        $this->addSql('CREATE INDEX IDX_1D1C63B37C732026 ON utilisateur (fiche_tech_id)');
    }
}
