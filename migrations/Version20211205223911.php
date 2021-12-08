<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211205223911 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE account (account_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, account_login VARCHAR(25) NOT NULL, account_password VARCHAR(50) NOT NULL, account_type VARCHAR(20) NOT NULL, account_firstname VARCHAR(25) DEFAULT NULL, account_name VARCHAR(20) DEFAULT NULL)');
        $this->addSql('CREATE TABLE affectation_matiere (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, am_id INTEGER NOT NULL, am_intervenant_id INTEGER NOT NULL, am_matiere_id INTEGER NOT NULL, am_duree INTEGER NOT NULL, am_intervalle_debut DATE NOT NULL, am_intervalle_fin DATE NOT NULL)');
        $this->addSql('CREATE TABLE cours (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, cours_id INTEGER NOT NULL, matiere_id INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE matiere (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, matiere_id INTEGER NOT NULL, matiere_name VARCHAR(25) NOT NULL, matiere_specialite BOOLEAN NOT NULL)');
        $this->addSql('CREATE TABLE to_exclude (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, te_id INTEGER NOT NULL, te_intervenant_id INTEGER NOT NULL, te_matiere_id INTEGER NOT NULL, te_intervalle_debut DATE NOT NULL, te_intervalle_fin DATE NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE account');
        $this->addSql('DROP TABLE affectation_matiere');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE matiere');
        $this->addSql('DROP TABLE to_exclude');
    }
}
