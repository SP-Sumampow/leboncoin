<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220130132927 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ad DROP FOREIGN KEY FK_77E0ED58881D19F2');
        $this->addSql('ALTER TABLE ad DROP FOREIGN KEY FK_77E0ED58DF4C85EA');
        $this->addSql('DROP INDEX IDX_77E0ED58881D19F2 ON ad');
        $this->addSql('DROP INDEX IDX_77E0ED58DF4C85EA ON ad');
        $this->addSql('ALTER TABLE ad CHANGE seller_id_id seller_id INT NOT NULL, CHANGE buyer_id_id buyer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ad ADD CONSTRAINT FK_77E0ED588DE820D9 FOREIGN KEY (seller_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE ad ADD CONSTRAINT FK_77E0ED586C755722 FOREIGN KEY (buyer_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_77E0ED588DE820D9 ON ad (seller_id)');
        $this->addSql('CREATE INDEX IDX_77E0ED586C755722 ON ad (buyer_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ad DROP FOREIGN KEY FK_77E0ED588DE820D9');
        $this->addSql('ALTER TABLE ad DROP FOREIGN KEY FK_77E0ED586C755722');
        $this->addSql('DROP INDEX IDX_77E0ED588DE820D9 ON ad');
        $this->addSql('DROP INDEX IDX_77E0ED586C755722 ON ad');
        $this->addSql('ALTER TABLE ad CHANGE seller_id seller_id_id INT NOT NULL, CHANGE buyer_id buyer_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ad ADD CONSTRAINT FK_77E0ED58881D19F2 FOREIGN KEY (buyer_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ad ADD CONSTRAINT FK_77E0ED58DF4C85EA FOREIGN KEY (seller_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_77E0ED58881D19F2 ON ad (buyer_id_id)');
        $this->addSql('CREATE INDEX IDX_77E0ED58DF4C85EA ON ad (seller_id_id)');
    }
}
