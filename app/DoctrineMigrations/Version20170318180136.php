<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170318180136 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fiche_tech CHANGE date_commerce date_commerce DATE NOT NULL, CHANGE date_fin_commerce date_fin_commerce DATE NOT NULL, CHANGE nombre_portes nombre_portes INT NOT NULL, CHANGE nombre_places nombre_places INT NOT NULL, CHANGE nombre_rapports nombre_rapports INT NOT NULL, CHANGE roue_secours roue_secours TINYINT(1) NOT NULL, CHANGE type_frien type_frein VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE voiture CHANGE fiche_tech_id fiche_tech_id INT DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fiche_tech CHANGE date_commerce date_commerce VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE date_fin_commerce date_fin_commerce VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE nombre_portes nombre_portes VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE nombre_places nombre_places VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE nombre_rapports nombre_rapports VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE roue_secours roue_secours VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE type_frein type_frien VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE voiture CHANGE fiche_tech_id fiche_tech_id INT NOT NULL');
    }
}
