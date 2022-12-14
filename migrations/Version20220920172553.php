<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220920172553 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE game_stat (id INT AUTO_INCREMENT NOT NULL, game_id INT NOT NULL, team_id INT NOT NULL, type VARCHAR(255) NOT NULL, value VARCHAR(255) NOT NULL, INDEX IDX_CBAD930DE48FD905 (game_id), INDEX IDX_CBAD930D296CD8AE (team_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game_stat ADD CONSTRAINT FK_CBAD930DE48FD905 FOREIGN KEY (game_id) REFERENCES game (id)');
        $this->addSql('ALTER TABLE game_stat ADD CONSTRAINT FK_CBAD930D296CD8AE FOREIGN KEY (team_id) REFERENCES team (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE game_stat DROP FOREIGN KEY FK_CBAD930DE48FD905');
        $this->addSql('ALTER TABLE game_stat DROP FOREIGN KEY FK_CBAD930D296CD8AE');
        $this->addSql('DROP TABLE game_stat');
    }
}
