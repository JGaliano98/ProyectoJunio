<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240423181847 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE espacio_recurso (espacio_id INT NOT NULL, recurso_id INT NOT NULL, INDEX IDX_FDA8AA747CFC1D2C (espacio_id), INDEX IDX_FDA8AA74E52B6C4E (recurso_id), PRIMARY KEY(espacio_id, recurso_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE espacio_recurso ADD CONSTRAINT FK_FDA8AA747CFC1D2C FOREIGN KEY (espacio_id) REFERENCES espacio (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE espacio_recurso ADD CONSTRAINT FK_FDA8AA74E52B6C4E FOREIGN KEY (recurso_id) REFERENCES recurso (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE espacio_recurso DROP FOREIGN KEY FK_FDA8AA747CFC1D2C');
        $this->addSql('ALTER TABLE espacio_recurso DROP FOREIGN KEY FK_FDA8AA74E52B6C4E');
        $this->addSql('DROP TABLE espacio_recurso');
    }
}
