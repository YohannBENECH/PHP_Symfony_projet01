<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211211190941 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours ADD COLUMN cours_duree INTEGER NOT NULL');
        $this->addSql('ALTER TABLE cours ADD COLUMN background_color VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cours ADD COLUMN text_color VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cours ADD COLUMN border_color VARCHAR(7) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__cours AS SELECT id, cours_id, matiere_id FROM cours');
        $this->addSql('DROP TABLE cours');
        $this->addSql('CREATE TABLE cours (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, cours_id INTEGER NOT NULL, matiere_id INTEGER NOT NULL)');
        $this->addSql('INSERT INTO cours (id, cours_id, matiere_id) SELECT id, cours_id, matiere_id FROM __temp__cours');
        $this->addSql('DROP TABLE __temp__cours');
    }
}
