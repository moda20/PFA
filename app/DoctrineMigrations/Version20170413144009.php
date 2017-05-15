<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170413144009 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fiche_tech CHANGE date_commerce date_commerce DATE DEFAULT NULL, CHANGE date_fin_commerce date_fin_commerce DATE DEFAULT NULL, CHANGE revision_km revision_km VARCHAR(255) DEFAULT NULL, CHANGE garantie garantie VARCHAR(255) DEFAULT NULL, CHANGE max_revision max_revision VARCHAR(255) DEFAULT NULL, CHANGE longueur longueur VARCHAR(255) DEFAULT NULL, CHANGE longueur_avec_retroviseurs longueur_avec_retroviseurs VARCHAR(255) DEFAULT NULL, CHANGE hauteur hauteur VARCHAR(255) DEFAULT NULL, CHANGE volume_min_max volume_min_max VARCHAR(255) DEFAULT NULL, CHANGE nombre_portes nombre_portes INT DEFAULT NULL, CHANGE nombre_places nombre_places INT DEFAULT NULL, CHANGE poid_vide poid_vide VARCHAR(255) DEFAULT NULL, CHANGE carburant carburant VARCHAR(255) DEFAULT NULL, CHANGE mode_moteur mode_moteur VARCHAR(255) DEFAULT NULL, CHANGE position_moteur position_moteur VARCHAR(255) DEFAULT NULL, CHANGE volume_cylindre volume_cylindre VARCHAR(255) DEFAULT NULL, CHANGE puissance puissance VARCHAR(255) DEFAULT NULL, CHANGE couple couple VARCHAR(255) DEFAULT NULL, CHANGE puissance_fiscale puissance_fiscale VARCHAR(255) DEFAULT NULL, CHANGE alimentation alimentation VARCHAR(255) DEFAULT NULL, CHANGE nombre_rapports nombre_rapports INT DEFAULT NULL, CHANGE roue_motrice roue_motrice VARCHAR(255) DEFAULT NULL, CHANGE vitesse_max vitesse_max VARCHAR(255) DEFAULT NULL, CHANGE acceleration acceleration VARCHAR(255) DEFAULT NULL, CHANGE consommation_urbaine100km consommation_urbaine100km VARCHAR(255) DEFAULT NULL, CHANGE consommation_nom_urbaine100km consommation_nom_urbaine100km VARCHAR(255) DEFAULT NULL, CHANGE consommation_mixte consommation_mixte VARCHAR(255) DEFAULT NULL, CHANGE degagement_co2 degagement_co2 VARCHAR(255) DEFAULT NULL, CHANGE taille_pneue taille_pneue VARCHAR(255) DEFAULT NULL, CHANGE roue_secours roue_secours TINYINT(1) DEFAULT NULL, CHANGE type_frein type_frein VARCHAR(255) DEFAULT NULL, CHANGE direction direction VARCHAR(255) DEFAULT NULL, CHANGE volume_resevoir volume_resevoir VARCHAR(255) DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fiche_tech CHANGE date_commerce date_commerce DATE NOT NULL, CHANGE date_fin_commerce date_fin_commerce DATE NOT NULL, CHANGE revision_km revision_km VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE garantie garantie VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE max_revision max_revision VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE longueur longueur VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE longueur_avec_retroviseurs longueur_avec_retroviseurs VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE hauteur hauteur VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE volume_min_max volume_min_max VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE nombre_portes nombre_portes INT NOT NULL, CHANGE nombre_places nombre_places INT NOT NULL, CHANGE poid_vide poid_vide VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE carburant carburant VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE mode_moteur mode_moteur VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE position_moteur position_moteur VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE volume_cylindre volume_cylindre VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE puissance puissance VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE couple couple VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE puissance_fiscale puissance_fiscale VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE alimentation alimentation VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE nombre_rapports nombre_rapports INT NOT NULL, CHANGE roue_motrice roue_motrice VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE vitesse_max vitesse_max VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE acceleration acceleration VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE consommation_urbaine100km consommation_urbaine100km VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE consommation_nom_urbaine100km consommation_nom_urbaine100km VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE consommation_mixte consommation_mixte VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE degagement_co2 degagement_co2 VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE taille_pneue taille_pneue VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE roue_secours roue_secours TINYINT(1) NOT NULL, CHANGE type_frein type_frein VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE direction direction VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE volume_resevoir volume_resevoir VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
    }
}
