<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230503124627 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, clientid_id INT NOT NULL, name VARCHAR(255) NOT NULL, date DATE NOT NULL, description VARCHAR(255) NOT NULL, nbplaces BIGINT NOT NULL, price DOUBLE PRECISION NOT NULL, image VARCHAR(255) DEFAULT NULL, gif VARCHAR(255) DEFAULT NULL, INDEX IDX_3BAE0AA7F3FD2D2E (clientid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE feedback (id INT AUTO_INCREMENT NOT NULL, clientid_id INT NOT NULL, text_content VARCHAR(255) NOT NULL, INDEX IDX_D2294458F3FD2D2E (clientid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, clientid_id INT NOT NULL, eventid_id INT NOT NULL, INDEX IDX_97A0ADA3F3FD2D2E (clientid_id), INDEX IDX_97A0ADA33DAAA2E7 (eventid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7F3FD2D2E FOREIGN KEY (clientid_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE feedback ADD CONSTRAINT FK_D2294458F3FD2D2E FOREIGN KEY (clientid_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3F3FD2D2E FOREIGN KEY (clientid_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA33DAAA2E7 FOREIGN KEY (eventid_id) REFERENCES event (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7F3FD2D2E');
        $this->addSql('ALTER TABLE feedback DROP FOREIGN KEY FK_D2294458F3FD2D2E');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3F3FD2D2E');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA33DAAA2E7');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE feedback');
        $this->addSql('DROP TABLE ticket');
    }
}
