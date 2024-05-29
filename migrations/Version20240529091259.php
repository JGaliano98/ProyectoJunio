<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240529091259 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actividad ADD descripcion VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE espacio DROP FOREIGN KEY FK_90BF6AA48A652BD6');
        $this->addSql('ALTER TABLE espacio ADD CONSTRAINT FK_90BF6AA48A652BD6 FOREIGN KEY (edificio_id) REFERENCES edificio (id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE password password VARCHAR(255) NOT NULL, CHANGE nombre nombre VARCHAR(255) NOT NULL, CHANGE is_active is_active TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actividad DROP descripcion');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON DEFAULT NULL, CHANGE password password VARCHAR(255) DEFAULT NULL, CHANGE nombre nombre VARCHAR(255) DEFAULT NULL, CHANGE is_active is_active TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE espacio DROP FOREIGN KEY FK_90BF6AA48A652BD6');
        $this->addSql('ALTER TABLE espacio ADD CONSTRAINT FK_90BF6AA48A652BD6 FOREIGN KEY (edificio_id) REFERENCES edificio (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
