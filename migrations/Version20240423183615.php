<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240423183615 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE nivel_educativo ADD grupo_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE nivel_educativo ADD CONSTRAINT FK_33209C919C833003 FOREIGN KEY (grupo_id) REFERENCES grupo (id)');
        $this->addSql('CREATE INDEX IDX_33209C919C833003 ON nivel_educativo (grupo_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE nivel_educativo DROP FOREIGN KEY FK_33209C919C833003');
        $this->addSql('DROP INDEX IDX_33209C919C833003 ON nivel_educativo');
        $this->addSql('ALTER TABLE nivel_educativo DROP grupo_id');
    }
}
