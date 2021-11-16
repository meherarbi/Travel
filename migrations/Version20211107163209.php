<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211107163209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE hotel_categorie (hotel_id INT NOT NULL, categorie_id INT NOT NULL, PRIMARY KEY(hotel_id, categorie_id))');
        $this->addSql('CREATE INDEX IDX_F734A7F63243BB18 ON hotel_categorie (hotel_id)');
        $this->addSql('CREATE INDEX IDX_F734A7F6BCF5E72D ON hotel_categorie (categorie_id)');
        $this->addSql('ALTER TABLE hotel_categorie ADD CONSTRAINT FK_F734A7F63243BB18 FOREIGN KEY (hotel_id) REFERENCES hotel (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hotel_categorie ADD CONSTRAINT FK_F734A7F6BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hotel ADD users_id INT NOT NULL');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT FK_3535ED967B3B43D FOREIGN KEY (users_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_3535ED967B3B43D ON hotel (users_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE hotel_categorie');
        $this->addSql('ALTER TABLE hotel DROP CONSTRAINT FK_3535ED967B3B43D');
        $this->addSql('DROP INDEX IDX_3535ED967B3B43D');
        $this->addSql('ALTER TABLE hotel DROP users_id');
    }
}
