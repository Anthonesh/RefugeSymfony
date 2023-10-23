<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231023120855 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE formulaires (id_formulaire INT AUTO_INCREMENT NOT NULL, nom_formulaire VARCHAR(30) NOT NULL, prenom_formulaire VARCHAR(30) NOT NULL, telephone_formulaire VARCHAR(15) NOT NULL, email_formulaire VARCHAR(100) NOT NULL, numero_rue_formulaire INT NOT NULL, rue_formulaire VARCHAR(255) NOT NULL, code_postal_formulaire VARCHAR(10) NOT NULL, ville_formulaire VARCHAR(30) NOT NULL, pays_formulaire VARCHAR(30) NOT NULL, PRIMARY KEY(id_formulaire)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE formulaires');
    }
}
