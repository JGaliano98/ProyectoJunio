<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240423182218 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ponente ADD detalle_actividad_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ponente ADD CONSTRAINT FK_969EB3C8A954C5A1 FOREIGN KEY (detalle_actividad_id) REFERENCES detalle_actividad (id)');
        $this->addSql('CREATE INDEX IDX_969EB3C8A954C5A1 ON ponente (detalle_actividad_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ponente DROP FOREIGN KEY FK_969EB3C8A954C5A1');
        $this->addSql('DROP INDEX IDX_969EB3C8A954C5A1 ON ponente');
        $this->addSql('ALTER TABLE ponente DROP detalle_actividad_id');
    }
}
