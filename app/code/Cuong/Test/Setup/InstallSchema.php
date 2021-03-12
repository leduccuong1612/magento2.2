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
        if (!$installer->tableExists('table_custom')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('table_custom')
            )
                ->addColumn(
                    'custom_id',
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
                    'custom_name',
                    Table::TYPE_TEXT,
                    255,
                    [
                        'nullable => false'
                    ],
                    'Post Name'
                )
                ->addColumn(
                    'custom_content',
                    Table::TYPE_TEXT,
                    '64k',
                    [],
                    'Post Content'
                )
                ->addColumn(
                    'custom_status',
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
                ->setComment('Custom Table');
            $installer->getConnection()->createTable($table);

            $installer->getConnection()->addIndex(
                $installer->getTable('table_custom'),
                $setup->getIdxName(
                    $installer->getTable('table_custom'),
                    ['custom_name', 'custom_content'],
                    AdapterInterface::INDEX_TYPE_FULLTEXT
                ),
                ['custom_name', 'custom_content'],
                AdapterInterface::INDEX_TYPE_FULLTEXT
            );
        }
        $installer->endSetup();
    }
}
