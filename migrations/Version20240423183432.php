<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240423183432 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alumno ADD grupo_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE alumno ADD CONSTRAINT FK_1435D52D9C833003 FOREIGN KEY (grupo_id) REFERENCES grupo (id)');
        $this->addSql('CREATE INDEX IDX_1435D52D9C833003 ON alumno (grupo_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alumno DROP FOREIGN KEY FK_1435D52D9C833003');
        $this->addSql('DROP INDEX IDX_1435D52D9C833003 ON alumno');
        $this->addSql('ALTER TABLE alumno DROP grupo_id');
    }
}
