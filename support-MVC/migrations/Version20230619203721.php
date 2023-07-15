<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230619203721 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE log CHANGE by_who_id by_who_id VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE ticket DROP label');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE log CHANGE by_who_id by_who_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE ticket ADD label VARCHAR(255) NOT NULL');
    }
}
