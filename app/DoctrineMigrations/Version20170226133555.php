<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170226133555 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fiche_tech ADD voiture_id INT NOT NULL, DROP voiture');
        $this->addSql('ALTER TABLE fiche_tech ADD CONSTRAINT FK_6C0CA799181A8BA FOREIGN KEY (voiture_id) REFERENCES voiture (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6C0CA799181A8BA ON fiche_tech (voiture_id)');
        $this->addSql('ALTER TABLE voiture ADD fiche_tech_id INT NOT NULL, ADD is_disponible TINYINT(1) NOT NULL, DROP disponible, DROP fiche_tech, CHANGE date_ajout date_ajout DATE NOT NULL');
        $this->addSql('ALTER TABLE voiture ADD CONSTRAINT FK_E9E2810F7C732026 FOREIGN KEY (fiche_tech_id) REFERENCES fiche_tech (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E9E2810F7C732026 ON voiture (fiche_tech_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fiche_tech DROP FOREIGN KEY FK_6C0CA799181A8BA');
        $this->addSql('DROP INDEX UNIQ_6C0CA799181A8BA ON fiche_tech');
        $this->addSql('ALTER TABLE fiche_tech ADD voiture VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, DROP voiture_id');
        $this->addSql('ALTER TABLE voiture DROP FOREIGN KEY FK_E9E2810F7C732026');
        $this->addSql('DROP INDEX UNIQ_E9E2810F7C732026 ON voiture');
        $this->addSql('ALTER TABLE voiture ADD disponible VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD fiche_tech VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, DROP fiche_tech_id, DROP is_disponible, CHANGE date_ajout date_ajout VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
    }
}
