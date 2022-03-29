<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220329184832 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours ADD category_id INT NOT NULL, ADD slug VARCHAR(255) NOT NULL, ADD subtitle VARCHAR(255) NOT NULL, ADD description LONGTEXT NOT NULL, DROP is_best');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9C12469DE2 ON cours (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C12469DE2');
        $this->addSql('DROP INDEX IDX_FDCA8C9C12469DE2 ON cours');
        $this->addSql('ALTER TABLE cours ADD is_best TINYINT(1) NOT NULL, DROP category_id, DROP slug, DROP subtitle, DROP description');
    }
}
