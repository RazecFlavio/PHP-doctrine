<?php

declare(strict_types=1);

namespace Alura\Doctrine\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230422135927 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Criando tabela teste';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('teste');
        $table->addColumn('id', 'integer')->setAutoincrement(true);
        $table->addColumn('coluna_teste', 'string');

        $table->setPrimaryKey(['id']);
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('teste');

    }
}