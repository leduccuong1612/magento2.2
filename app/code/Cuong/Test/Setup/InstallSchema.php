<?php

namespace Cuong\Test\Setup;

use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        if (!$installer->tableExists('table_brand')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('table_brand')
            )
                ->addColumn(
                    'brand_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'nullable' => false,
                        'primary' => true,
                        'unsigned' => true,
                    ],
                    ' ID'
                )
                ->addColumn(
                    'brand_name',
                    Table::TYPE_TEXT,
                    255,
                    [
                        'nullable => false'
                    ],
                    'Post Name'
                )
                ->addColumn(
                    'brand_content',
                    Table::TYPE_TEXT,
                    '64k',
                    [],
                    'Post Content'
                )
                ->addColumn(
                    'brand_status',
                    Table::TYPE_INTEGER,
                    1,
                    [],
                    'Post Status'
                )
                ->addColumn(
                    'created_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    [
                        'nullable' => false,
                        'default' => Table::TIMESTAMP_INIT
                    ],
                    'Created At'
                )
                ->setComment('Table Brand');
            $installer->getConnection()->createTable($table);

            $installer->getConnection()->addIndex(
                $installer->getTable('table_brand'),
                $setup->getIdxName(
                    $installer->getTable('table_brand'),
                    ['brand_name', 'brand_content'],
                    AdapterInterface::INDEX_TYPE_FULLTEXT
                ),
                ['brand_name', 'brand_content'],
                AdapterInterface::INDEX_TYPE_FULLTEXT
            );
        }
        $installer->endSetup();
    }
}
