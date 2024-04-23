<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240423181637 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE espacio ADD edificio_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE espacio ADD CONSTRAINT FK_90BF6AA48A652BD6 FOREIGN KEY (edificio_id) REFERENCES edificio (id)');
        $this->addSql('CREATE INDEX IDX_90BF6AA48A652BD6 ON espacio (edificio_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE espacio DROP FOREIGN KEY FK_90BF6AA48A652BD6');
        $this->addSql('DROP INDEX IDX_90BF6AA48A652BD6 ON espacio');
        $this->addSql('ALTER TABLE espacio DROP edificio_id');
    }
}
