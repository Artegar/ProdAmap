<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180512173152 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE concerner RENAME INDEX fk_concerner_panier_id TO IDX_ABE9A866F77D927C');
        $this->addSql('ALTER TABLE panier CHANGE adher_id adher_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produire RENAME INDEX fk_produire_prod_id TO IDX_1CA3CD5B1C83F75');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE concerner RENAME INDEX idx_abe9a866f77d927c TO FK_concerner_panier_id');
        $this->addSql('ALTER TABLE panier CHANGE adher_id adher_id INT NOT NULL');
        $this->addSql('ALTER TABLE produire RENAME INDEX idx_1ca3cd5b1c83f75 TO FK_produire_prod_id');
    }
}
