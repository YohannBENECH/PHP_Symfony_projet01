<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220113112821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__cours AS SELECT id, matiere_id, background_color, text_color, border_color, description, start, intervenant_id FROM cours');
        $this->addSql('DROP TABLE cours');
        $this->addSql('CREATE TABLE cours (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, matiere_id INTEGER NOT NULL, background_color VARCHAR(255) NOT NULL COLLATE BINARY, text_color VARCHAR(255) NOT NULL COLLATE BINARY, border_color VARCHAR(7) NOT NULL COLLATE BINARY, description VARCHAR(255) DEFAULT NULL COLLATE BINARY, start DATETIME NOT NULL, intervenant_id INTEGER NOT NULL, _end DATETIME NOT NULL)');
        $this->addSql('INSERT INTO cours (id, matiere_id, background_color, text_color, border_color, description, start, intervenant_id) SELECT id, matiere_id, background_color, text_color, border_color, description, start, intervenant_id FROM __temp__cours');
        $this->addSql('DROP TABLE __temp__cours');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__cours AS SELECT id, matiere_id, background_color, text_color, border_color, description, start, intervenant_id FROM cours');
        $this->addSql('DROP TABLE cours');
        $this->addSql('CREATE TABLE cours (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, matiere_id INTEGER NOT NULL, background_color VARCHAR(255) NOT NULL, text_color VARCHAR(255) NOT NULL, border_color VARCHAR(7) NOT NULL, description VARCHAR(255) DEFAULT NULL, start DATETIME NOT NULL, intervenant_id INTEGER NOT NULL, cours_id INTEGER NOT NULL, cours_duree INTEGER NOT NULL)');
        $this->addSql('INSERT INTO cours (id, matiere_id, background_color, text_color, border_color, description, start, intervenant_id) SELECT id, matiere_id, background_color, text_color, border_color, description, start, intervenant_id FROM __temp__cours');
        $this->addSql('DROP TABLE __temp__cours');
    }
}
