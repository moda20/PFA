<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170419180251 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE voiture ADD constructeur_id INT DEFAULT NULL, DROP constructeur');
        $this->addSql('ALTER TABLE voiture ADD CONSTRAINT FK_E9E2810F8815B605 FOREIGN KEY (constructeur_id) REFERENCES constructeur (id)');
        $this->addSql('CREATE INDEX IDX_E9E2810F8815B605 ON voiture (constructeur_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE voiture DROP FOREIGN KEY FK_E9E2810F8815B605');
        $this->addSql('DROP INDEX IDX_E9E2810F8815B605 ON voiture');
        $this->addSql('ALTER TABLE voiture ADD constructeur VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, DROP constructeur_id');
    }
}
