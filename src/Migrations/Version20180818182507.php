<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180818182507 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE perfil (cod_tipo_perfil INT NOT NULL, cod_cliente INT NOT NULL, INDEX fk_perfil_tipo_perfil1_idx (cod_tipo_perfil), INDEX fk_perfil_cliente1_idx (cod_cliente)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tipo_perfil (id_tipo_perfil INT AUTO_INCREMENT NOT NULL, tx_nome_tipo_perfil VARCHAR(45) NOT NULL COLLATE utf8_general_ci, PRIMARY KEY(id_tipo_perfil)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE perfil ADD CONSTRAINT fk_perfil_cliente1 FOREIGN KEY (cod_cliente) REFERENCES cliente (id_cliente) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE perfil ADD CONSTRAINT fk_perfil_tipo_perfil1 FOREIGN KEY (cod_tipo_perfil) REFERENCES tipo_perfil (id_tipo_perfil) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE carrinho CHANGE cod_cliente cod_cliente INT DEFAULT NULL');
        $this->addSql('ALTER TABLE carrinho_produto CHANGE cod_carrinho cod_carrinho INT DEFAULT NULL, CHANGE cod_produto cod_produto INT DEFAULT NULL');
        $this->addSql('ALTER TABLE categoria_subcategoria CHANGE categoria_id_categoria categoria_id_categoria INT DEFAULT NULL, CHANGE subCategoria_id_subCategoria subCategoria_id_subCategoria INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cliente CHANGE nome_cliente nome_cliente VARCHAR(45) NOT NULL, CHANGE nme_sobrenome_cliente nme_sobrenome_cliente VARCHAR(45) NOT NULL, CHANGE dta_nasc_cliente dta_nasc_cliente VARCHAR(45) NOT NULL, CHANGE tel_cliente tel_cliente VARCHAR(45) NOT NULL, CHANGE cpf_cliente cpf_cliente VARCHAR(45) NOT NULL, CHANGE rg_cliente rg_cliente VARCHAR(45) NOT NULL');
        $this->addSql('ALTER TABLE compra CHANGE cod_carrinho_produto cod_carrinho_produto INT DEFAULT NULL, CHANGE cod_formaPagamento cod_formaPagamento INT DEFAULT NULL');
        $this->addSql('ALTER TABLE entrega CHANGE cod_compra cod_compra INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produto CHANGE cod_categoria_subCategoria cod_categoria_subCategoria INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produto_item CHANGE cod_produto cod_produto INT DEFAULT NULL, CHANGE cod_item cod_item INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE perfil DROP FOREIGN KEY fk_perfil_tipo_perfil1');
        $this->addSql('DROP TABLE perfil');
        $this->addSql('DROP TABLE tipo_perfil');
        $this->addSql('ALTER TABLE carrinho CHANGE cod_cliente cod_cliente INT NOT NULL');
        $this->addSql('ALTER TABLE carrinho_produto CHANGE cod_carrinho cod_carrinho INT NOT NULL, CHANGE cod_produto cod_produto INT NOT NULL');
        $this->addSql('ALTER TABLE categoria_subcategoria CHANGE categoria_id_categoria categoria_id_categoria INT NOT NULL, CHANGE subCategoria_id_subCategoria subCategoria_id_subCategoria INT NOT NULL');
        $this->addSql('ALTER TABLE cliente CHANGE nome_cliente nome_cliente VARCHAR(255) NOT NULL COLLATE utf8_general_ci, CHANGE nme_sobrenome_cliente nme_sobrenome_cliente VARCHAR(255) NOT NULL COLLATE utf8_general_ci, CHANGE dta_nasc_cliente dta_nasc_cliente DATE NOT NULL, CHANGE tel_cliente tel_cliente VARCHAR(11) NOT NULL COLLATE utf8_general_ci, CHANGE cpf_cliente cpf_cliente VARCHAR(11) NOT NULL COLLATE utf8_general_ci, CHANGE rg_cliente rg_cliente VARCHAR(7) DEFAULT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE compra CHANGE cod_carrinho_produto cod_carrinho_produto INT NOT NULL, CHANGE cod_formaPagamento cod_formaPagamento INT NOT NULL');
        $this->addSql('ALTER TABLE entrega CHANGE cod_compra cod_compra INT NOT NULL');
        $this->addSql('ALTER TABLE produto CHANGE cod_categoria_subCategoria cod_categoria_subCategoria INT NOT NULL');
        $this->addSql('ALTER TABLE produto_item CHANGE cod_item cod_item INT NOT NULL, CHANGE cod_produto cod_produto INT NOT NULL');
    }
}
