<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180912191034 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE perfil ADD id INT AUTO_INCREMENT NOT NULL, CHANGE cod_tipo_perfil cod_tipo_perfil INT DEFAULT NULL, CHANGE cod_cliente cod_cliente INT DEFAULT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_96657647B62753A4 ON perfil (cod_tipo_perfil)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9665764766A46BB1 ON perfil (cod_cliente)');
        $this->addSql('ALTER TABLE carrinho CHANGE cod_cliente cod_cliente INT DEFAULT NULL');
        $this->addSql('ALTER TABLE carrinho_produto CHANGE cod_carrinho cod_carrinho INT DEFAULT NULL, CHANGE cod_produto cod_produto INT DEFAULT NULL');
        $this->addSql('ALTER TABLE categoria_subcategoria CHANGE categoria_id_categoria categoria_id_categoria INT DEFAULT NULL, CHANGE subCategoria_id_subCategoria subCategoria_id_subCategoria INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cliente CHANGE dta_nasc_cliente dta_nasc_cliente VARCHAR(45) NOT NULL');
        $this->addSql('ALTER TABLE compra CHANGE cod_carrinho_produto cod_carrinho_produto INT DEFAULT NULL, CHANGE cod_formaPagamento cod_formaPagamento INT DEFAULT NULL');
        $this->addSql('ALTER TABLE entrega CHANGE cod_compra cod_compra INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produto CHANGE cod_categoria_subCategoria cod_categoria_subCategoria INT DEFAULT NULL, CHANGE tx_url_imagem_produto tx_url_imagem_produto VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE produto_item CHANGE cod_produto cod_produto INT DEFAULT NULL, CHANGE cod_item cod_item INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE carrinho CHANGE cod_cliente cod_cliente INT NOT NULL');
        $this->addSql('ALTER TABLE carrinho_produto CHANGE cod_carrinho cod_carrinho INT NOT NULL, CHANGE cod_produto cod_produto INT NOT NULL');
        $this->addSql('ALTER TABLE categoria_subcategoria CHANGE categoria_id_categoria categoria_id_categoria INT NOT NULL, CHANGE subCategoria_id_subCategoria subCategoria_id_subCategoria INT NOT NULL');
        $this->addSql('ALTER TABLE cliente CHANGE dta_nasc_cliente dta_nasc_cliente DATE NOT NULL');
        $this->addSql('ALTER TABLE compra CHANGE cod_carrinho_produto cod_carrinho_produto INT NOT NULL, CHANGE cod_formaPagamento cod_formaPagamento INT NOT NULL');
        $this->addSql('ALTER TABLE entrega CHANGE cod_compra cod_compra INT NOT NULL');
        $this->addSql('ALTER TABLE perfil MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_96657647B62753A4 ON perfil');
        $this->addSql('DROP INDEX UNIQ_9665764766A46BB1 ON perfil');
        $this->addSql('ALTER TABLE perfil DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE perfil DROP id, CHANGE cod_tipo_perfil cod_tipo_perfil INT NOT NULL, CHANGE cod_cliente cod_cliente INT NOT NULL');
        $this->addSql('ALTER TABLE produto CHANGE tx_url_imagem_produto tx_url_imagem_produto VARCHAR(45) DEFAULT NULL COLLATE utf8_general_ci, CHANGE cod_categoria_subCategoria cod_categoria_subCategoria INT NOT NULL');
        $this->addSql('ALTER TABLE produto_item CHANGE cod_item cod_item INT NOT NULL, CHANGE cod_produto cod_produto INT NOT NULL');
    }
}
