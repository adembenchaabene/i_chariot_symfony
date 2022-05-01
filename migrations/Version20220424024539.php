<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220424024539 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reacts (idarticles INT DEFAULT NULL, idusers INT DEFAULT NULL, idReact INT AUTO_INCREMENT NOT NULL, datecrea DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, INDEX IDX_EDAE8C3F15087965 (idarticles), INDEX IDX_EDAE8C3FC286C9F0 (idusers), PRIMARY KEY(idReact)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reacts ADD CONSTRAINT FK_EDAE8C3F15087965 FOREIGN KEY (idarticles) REFERENCES article (idArticle)');
        $this->addSql('ALTER TABLE reacts ADD CONSTRAINT FK_EDAE8C3FC286C9F0 FOREIGN KEY (idusers) REFERENCES user (idUser)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reacts');
    }
}
