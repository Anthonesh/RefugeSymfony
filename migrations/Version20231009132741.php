<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231009132741 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE informations_pensionnaires (id_information_pensionnaire INT AUTO_INCREMENT NOT NULL, nourriture_information_pensionnaire LONGTEXT DEFAULT NULL, soin_information_pensionnaire LONGTEXT DEFAULT NULL, carnet_de_sante_information_pensionnaire LONGTEXT DEFAULT NULL, histoire_information_pensionnaire LONGTEXT DEFAULT NULL, PRIMARY KEY(id_information_pensionnaire)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pensionnaires (id_pensionnaire INT AUTO_INCREMENT NOT NULL, nom_pensionnaire VARCHAR(50) DEFAULT NULL, type_pensionnaire VARCHAR(50) DEFAULT NULL, date_de_naissance_pensionnaire DATE DEFAULT NULL, image_pensionnaire VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id_pensionnaire)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE informations_pensionnaires');
        $this->addSql('DROP TABLE pensionnaires');
    }
}
