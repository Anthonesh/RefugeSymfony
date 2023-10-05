<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231005125200 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE utilisateurs (id_utilisateurs INT AUTO_INCREMENT NOT NULL, email_utilisateurs VARCHAR(180) NOT NULL, role_utilisateur JSON NOT NULL, mot_de_passe_utilisateur VARCHAR(255) NOT NULL, nom_utilisateur VARCHAR(25) NOT NULL, prenom_utilisateur VARCHAR(25) NOT NULL, numero_telephone_utilisateur VARCHAR(15) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_497B315E1C68D70D (email_utilisateurs), PRIMARY KEY(id_utilisateurs)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE utilisateurs');
    }
}
