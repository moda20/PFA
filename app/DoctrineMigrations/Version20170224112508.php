<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170224112508 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, num_tel VARCHAR(255) NOT NULL, date_naissance VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, divulgation VARCHAR(255) NOT NULL, ip_courante VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, historique VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE administrateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, num_tel VARCHAR(255) NOT NULL, date_naissance VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, divulgation VARCHAR(255) NOT NULL, ip_courante VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, historique VARCHAR(255) NOT NULL, is_admin TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fiche_tech (id INT AUTO_INCREMENT NOT NULL, date_commerce VARCHAR(255) NOT NULL, date_fin_commerce VARCHAR(255) NOT NULL, revision_km VARCHAR(255) NOT NULL, garantie VARCHAR(255) NOT NULL, max_revision VARCHAR(255) NOT NULL, longueur VARCHAR(255) NOT NULL, longueur_avec_retroviseurs VARCHAR(255) NOT NULL, hauteur VARCHAR(255) NOT NULL, volume_min_max VARCHAR(255) NOT NULL, nombre_portes VARCHAR(255) NOT NULL, nombre_places VARCHAR(255) NOT NULL, poid_vide VARCHAR(255) NOT NULL, carburant VARCHAR(255) NOT NULL, mode_moteur VARCHAR(255) NOT NULL, position_moteur VARCHAR(255) NOT NULL, volume_cylindre VARCHAR(255) NOT NULL, puissance VARCHAR(255) NOT NULL, couple VARCHAR(255) NOT NULL, puissance_fiscale VARCHAR(255) NOT NULL, alimentation VARCHAR(255) NOT NULL, nombre_rapports VARCHAR(255) NOT NULL, roue_motrice VARCHAR(255) NOT NULL, vitesse_max VARCHAR(255) NOT NULL, acceleration VARCHAR(255) NOT NULL, consommation_urbaine100km VARCHAR(255) NOT NULL, consommation_nom_urbaine100km VARCHAR(255) NOT NULL, consommation_mixte VARCHAR(255) NOT NULL, degagement_co2 VARCHAR(255) NOT NULL, taille_pneue VARCHAR(255) NOT NULL, roue_secours VARCHAR(255) NOT NULL, type_frien VARCHAR(255) NOT NULL, direction VARCHAR(255) NOT NULL, volume_resevoir VARCHAR(255) NOT NULL, voiture VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voiture (id INT AUTO_INCREMENT NOT NULL, photo VARCHAR(255) NOT NULL, disponible VARCHAR(255) NOT NULL, photos VARCHAR(255) NOT NULL, date_ajout VARCHAR(255) NOT NULL, fiche_tech VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE administrateur');
        $this->addSql('DROP TABLE fiche_tech');
        $this->addSql('DROP TABLE voiture');
    }
}
