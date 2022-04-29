<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220425025546 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reacts DROP FOREIGN KEY FK_EDAE8C3F15087965');
        $this->addSql('DROP INDEX IDX_EDAE8C3F15087965 ON reacts');
        $this->addSql('ALTER TABLE reacts CHANGE idarticles idcommentaire INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reacts ADD CONSTRAINT FK_EDAE8C3FA1311813 FOREIGN KEY (idcommentaire) REFERENCES commentaire (idCommentaire)');
        $this->addSql('CREATE INDEX IDX_EDAE8C3FA1311813 ON reacts (idcommentaire)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reacts DROP FOREIGN KEY FK_EDAE8C3FA1311813');
        $this->addSql('DROP INDEX IDX_EDAE8C3FA1311813 ON reacts');
        $this->addSql('ALTER TABLE reacts CHANGE idcommentaire idarticles INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reacts ADD CONSTRAINT FK_EDAE8C3F15087965 FOREIGN KEY (idarticles) REFERENCES article (idArticle) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_EDAE8C3F15087965 ON reacts (idarticles)');
    }
}
