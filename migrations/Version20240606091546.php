<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240606091546 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actividad DROP FOREIGN KEY FK_8DF2BD0687A5F842');
        $this->addSql('ALTER TABLE actividad ADD CONSTRAINT FK_8DF2BD0687A5F842 FOREIGN KEY (evento_id) REFERENCES evento (id)');
        $this->addSql('ALTER TABLE detalle_actividad DROP FOREIGN KEY FK_AC9E0C466014FACA');
        $this->addSql('ALTER TABLE detalle_actividad DROP FOREIGN KEY FK_AC9E0C467CFC1D2C');
        $this->addSql('ALTER TABLE detalle_actividad CHANGE fecha_hora_inicio fecha_hora_inicio DATETIME DEFAULT NULL, CHANGE fecha_hora_fin fecha_hora_fin DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE detalle_actividad ADD CONSTRAINT FK_AC9E0C466014FACA FOREIGN KEY (actividad_id) REFERENCES actividad (id)');
        $this->addSql('ALTER TABLE detalle_actividad ADD CONSTRAINT FK_AC9E0C467CFC1D2C FOREIGN KEY (espacio_id) REFERENCES espacio (id)');
        $this->addSql('ALTER TABLE espacio DROP FOREIGN KEY FK_90BF6AA48A652BD6');
        $this->addSql('ALTER TABLE espacio ADD CONSTRAINT FK_90BF6AA48A652BD6 FOREIGN KEY (edificio_id) REFERENCES edificio (id)');
        $this->addSql('ALTER TABLE espacio_recurso DROP FOREIGN KEY FK_FDA8AA747CFC1D2C');
        $this->addSql('ALTER TABLE espacio_recurso DROP FOREIGN KEY FK_FDA8AA74E52B6C4E');
        $this->addSql('ALTER TABLE espacio_recurso ADD CONSTRAINT FK_FDA8AA747CFC1D2C FOREIGN KEY (espacio_id) REFERENCES espacio (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE espacio_recurso ADD CONSTRAINT FK_FDA8AA74E52B6C4E FOREIGN KEY (recurso_id) REFERENCES recurso (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evento ADD imagen_url VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE ponente DROP FOREIGN KEY FK_969EB3C8A954C5A1');
        $this->addSql('ALTER TABLE ponente ADD CONSTRAINT FK_969EB3C8A954C5A1 FOREIGN KEY (detalle_actividad_id) REFERENCES detalle_actividad (id)');
        $this->addSql('ALTER TABLE user RENAME INDEX uniq_identifier_email TO UNIQ_8D93D649E7927C74');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actividad DROP FOREIGN KEY FK_8DF2BD0687A5F842');
        $this->addSql('ALTER TABLE actividad ADD CONSTRAINT FK_8DF2BD0687A5F842 FOREIGN KEY (evento_id) REFERENCES evento (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evento DROP imagen_url');
        $this->addSql('ALTER TABLE user RENAME INDEX uniq_8d93d649e7927c74 TO UNIQ_IDENTIFIER_EMAIL');
        $this->addSql('ALTER TABLE detalle_actividad DROP FOREIGN KEY FK_AC9E0C467CFC1D2C');
        $this->addSql('ALTER TABLE detalle_actividad DROP FOREIGN KEY FK_AC9E0C466014FACA');
        $this->addSql('ALTER TABLE detalle_actividad CHANGE fecha_hora_inicio fecha_hora_inicio DATE DEFAULT NULL, CHANGE fecha_hora_fin fecha_hora_fin DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE detalle_actividad ADD CONSTRAINT FK_AC9E0C467CFC1D2C FOREIGN KEY (espacio_id) REFERENCES espacio (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE detalle_actividad ADD CONSTRAINT FK_AC9E0C466014FACA FOREIGN KEY (actividad_id) REFERENCES actividad (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ponente DROP FOREIGN KEY FK_969EB3C8A954C5A1');
        $this->addSql('ALTER TABLE ponente ADD CONSTRAINT FK_969EB3C8A954C5A1 FOREIGN KEY (detalle_actividad_id) REFERENCES detalle_actividad (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE espacio DROP FOREIGN KEY FK_90BF6AA48A652BD6');
        $this->addSql('ALTER TABLE espacio ADD CONSTRAINT FK_90BF6AA48A652BD6 FOREIGN KEY (edificio_id) REFERENCES edificio (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE espacio_recurso DROP FOREIGN KEY FK_FDA8AA747CFC1D2C');
        $this->addSql('ALTER TABLE espacio_recurso DROP FOREIGN KEY FK_FDA8AA74E52B6C4E');
        $this->addSql('ALTER TABLE espacio_recurso ADD CONSTRAINT FK_FDA8AA747CFC1D2C FOREIGN KEY (espacio_id) REFERENCES espacio (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE espacio_recurso ADD CONSTRAINT FK_FDA8AA74E52B6C4E FOREIGN KEY (recurso_id) REFERENCES recurso (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
