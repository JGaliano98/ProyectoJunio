<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240423183237 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE detalle_actividad_alumno (detalle_actividad_id INT NOT NULL, alumno_id INT NOT NULL, INDEX IDX_D4948D5AA954C5A1 (detalle_actividad_id), INDEX IDX_D4948D5AFC28E5EE (alumno_id), PRIMARY KEY(detalle_actividad_id, alumno_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE detalle_actividad_alumno ADD CONSTRAINT FK_D4948D5AA954C5A1 FOREIGN KEY (detalle_actividad_id) REFERENCES detalle_actividad (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE detalle_actividad_alumno ADD CONSTRAINT FK_D4948D5AFC28E5EE FOREIGN KEY (alumno_id) REFERENCES alumno (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE detalle_actividad ADD espacio_id INT DEFAULT NULL, ADD actividad_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE detalle_actividad ADD CONSTRAINT FK_AC9E0C467CFC1D2C FOREIGN KEY (espacio_id) REFERENCES espacio (id)');
        $this->addSql('ALTER TABLE detalle_actividad ADD CONSTRAINT FK_AC9E0C466014FACA FOREIGN KEY (actividad_id) REFERENCES actividad (id)');
        $this->addSql('CREATE INDEX IDX_AC9E0C467CFC1D2C ON detalle_actividad (espacio_id)');
        $this->addSql('CREATE INDEX IDX_AC9E0C466014FACA ON detalle_actividad (actividad_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE detalle_actividad_alumno DROP FOREIGN KEY FK_D4948D5AA954C5A1');
        $this->addSql('ALTER TABLE detalle_actividad_alumno DROP FOREIGN KEY FK_D4948D5AFC28E5EE');
        $this->addSql('DROP TABLE detalle_actividad_alumno');
        $this->addSql('ALTER TABLE detalle_actividad DROP FOREIGN KEY FK_AC9E0C467CFC1D2C');
        $this->addSql('ALTER TABLE detalle_actividad DROP FOREIGN KEY FK_AC9E0C466014FACA');
        $this->addSql('DROP INDEX IDX_AC9E0C467CFC1D2C ON detalle_actividad');
        $this->addSql('DROP INDEX IDX_AC9E0C466014FACA ON detalle_actividad');
        $this->addSql('ALTER TABLE detalle_actividad DROP espacio_id, DROP actividad_id');
    }
}
