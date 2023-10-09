<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231009133131 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE informations_pensionnaires ADD pensionnaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE informations_pensionnaires ADD CONSTRAINT FK_62AF3EA930551365 FOREIGN KEY (pensionnaire_id) REFERENCES pensionnaires (id_pensionnaire)');
        $this->addSql('CREATE INDEX IDX_62AF3EA930551365 ON informations_pensionnaires (pensionnaire_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE informations_pensionnaires DROP FOREIGN KEY FK_62AF3EA930551365');
        $this->addSql('DROP INDEX IDX_62AF3EA930551365 ON informations_pensionnaires');
        $this->addSql('ALTER TABLE informations_pensionnaires DROP pensionnaire_id');
    }
}
