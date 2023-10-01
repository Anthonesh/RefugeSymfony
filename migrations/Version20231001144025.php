<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231001144025 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservations ADD jour_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservations ADD CONSTRAINT FK_4DA239220C6AD0 FOREIGN KEY (jour_id) REFERENCES jours (id)');
        $this->addSql('CREATE INDEX IDX_4DA239220C6AD0 ON reservations (jour_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservations DROP FOREIGN KEY FK_4DA239220C6AD0');
        $this->addSql('DROP INDEX IDX_4DA239220C6AD0 ON reservations');
        $this->addSql('ALTER TABLE reservations DROP jour_id');
    }
}
