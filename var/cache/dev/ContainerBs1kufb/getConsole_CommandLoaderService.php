<?php

namespace ContainerBs1kufb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_CommandLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

        return $container->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'console.command.about' => ['privates', '.console.command.about.lazy', 'get_Console_Command_About_LazyService', true],
            'console.command.assets_install' => ['privates', '.console.command.assets_install.lazy', 'get_Console_Command_AssetsInstall_LazyService', true],
            'console.command.cache_clear' => ['privates', '.console.command.cache_clear.lazy', 'get_Console_Command_CacheClear_LazyService', true],
            'console.command.cache_pool_clear' => ['privates', '.console.command.cache_pool_clear.lazy', 'get_Console_Command_CachePoolClear_LazyService', true],
            'console.command.cache_pool_prune' => ['privates', '.console.command.cache_pool_prune.lazy', 'get_Console_Command_CachePoolPrune_LazyService', true],
            'console.command.cache_pool_invalidate_tags' => ['privates', '.console.command.cache_pool_invalidate_tags.lazy', 'get_Console_Command_CachePoolInvalidateTags_LazyService', true],
            'console.command.cache_pool_delete' => ['privates', '.console.command.cache_pool_delete.lazy', 'get_Console_Command_CachePoolDelete_LazyService', true],
            'console.command.cache_pool_list' => ['privates', '.console.command.cache_pool_list.lazy', 'get_Console_Command_CachePoolList_LazyService', true],
            'console.command.cache_warmup' => ['privates', '.console.command.cache_warmup.lazy', 'get_Console_Command_CacheWarmup_LazyService', true],
            'console.command.config_debug' => ['privates', '.console.command.config_debug.lazy', 'get_Console_Command_ConfigDebug_LazyService', true],
            'console.command.config_dump_reference' => ['privates', '.console.command.config_dump_reference.lazy', 'get_Console_Command_ConfigDumpReference_LazyService', true],
            'console.command.container_debug' => ['privates', '.console.command.container_debug.lazy', 'get_Console_Command_ContainerDebug_LazyService', true],
            'console.command.container_lint' => ['privates', '.console.command.container_lint.lazy', 'get_Console_Command_ContainerLint_LazyService', true],
            'console.command.debug_autowiring' => ['privates', '.console.command.debug_autowiring.lazy', 'get_Console_Command_DebugAutowiring_LazyService', true],
            'console.command.dotenv_debug' => ['privates', '.console.command.dotenv_debug.lazy', 'get_Console_Command_DotenvDebug_LazyService', true],
            'console.command.event_dispatcher_debug' => ['privates', '.console.command.event_dispatcher_debug.lazy', 'get_Console_Command_EventDispatcherDebug_LazyService', true],
            'console.command.messenger_consume_messages' => ['privates', '.console.command.messenger_consume_messages.lazy', 'get_Console_Command_MessengerConsumeMessages_LazyService', true],
            'console.command.messenger_setup_transports' => ['privates', '.console.command.messenger_setup_transports.lazy', 'get_Console_Command_MessengerSetupTransports_LazyService', true],
            'console.command.messenger_debug' => ['privates', '.console.command.messenger_debug.lazy', 'get_Console_Command_MessengerDebug_LazyService', true],
            'console.command.messenger_stop_workers' => ['privates', '.console.command.messenger_stop_workers.lazy', 'get_Console_Command_MessengerStopWorkers_LazyService', true],
            'console.command.messenger_stats' => ['privates', '.console.command.messenger_stats.lazy', 'get_Console_Command_MessengerStats_LazyService', true],
            'console.command.router_debug' => ['privates', '.console.command.router_debug.lazy', 'get_Console_Command_RouterDebug_LazyService', true],
            'console.command.router_match' => ['privates', '.console.command.router_match.lazy', 'get_Console_Command_RouterMatch_LazyService', true],
            'console.command.serializer_debug' => ['privates', '.console.command.serializer_debug.lazy', 'get_Console_Command_SerializerDebug_LazyService', true],
            'console.command.translation_debug' => ['privates', '.console.command.translation_debug.lazy', 'get_Console_Command_TranslationDebug_LazyService', true],
            'console.command.translation_extract' => ['privates', '.console.command.translation_extract.lazy', 'get_Console_Command_TranslationExtract_LazyService', true],
            'console.command.validator_debug' => ['privates', '.console.command.validator_debug.lazy', 'get_Console_Command_ValidatorDebug_LazyService', true],
            'console.command.translation_pull' => ['privates', '.console.command.translation_pull.lazy', 'get_Console_Command_TranslationPull_LazyService', true],
            'console.command.translation_push' => ['privates', '.console.command.translation_push.lazy', 'get_Console_Command_TranslationPush_LazyService', true],
            'console.command.xliff_lint' => ['privates', '.console.command.xliff_lint.lazy', 'get_Console_Command_XliffLint_LazyService', true],
            'console.command.yaml_lint' => ['privates', '.console.command.yaml_lint.lazy', 'get_Console_Command_YamlLint_LazyService', true],
            'console.command.secrets_set' => ['privates', '.console.command.secrets_set.lazy', 'get_Console_Command_SecretsSet_LazyService', true],
            'console.command.secrets_remove' => ['privates', '.console.command.secrets_remove.lazy', 'get_Console_Command_SecretsRemove_LazyService', true],
            'console.command.secrets_generate_key' => ['privates', '.console.command.secrets_generate_key.lazy', 'get_Console_Command_SecretsGenerateKey_LazyService', true],
            'console.command.secrets_list' => ['privates', '.console.command.secrets_list.lazy', 'get_Console_Command_SecretsList_LazyService', true],
            'console.command.secrets_decrypt_to_local' => ['privates', '.console.command.secrets_decrypt_to_local.lazy', 'get_Console_Command_SecretsDecryptToLocal_LazyService', true],
            'console.command.secrets_encrypt_from_local' => ['privates', '.console.command.secrets_encrypt_from_local.lazy', 'get_Console_Command_SecretsEncryptFromLocal_LazyService', true],
            'console.command.mailer_test' => ['privates', '.console.command.mailer_test.lazy', 'get_Console_Command_MailerTest_LazyService', true],
            'security.command.debug_firewall' => ['privates', '.security.command.debug_firewall.lazy', 'get_Security_Command_DebugFirewall_LazyService', true],
            'security.command.user_password_hash' => ['privates', '.security.command.user_password_hash.lazy', 'get_Security_Command_UserPasswordHash_LazyService', true],
            'twig.command.debug' => ['privates', '.twig.command.debug.lazy', 'get_Twig_Command_Debug_LazyService', true],
            'twig.command.lint' => ['privates', '.twig.command.lint.lazy', 'get_Twig_Command_Lint_LazyService', true],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', true],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', true],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', true],
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => ['privates', 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'getRunSqlCommandService', true],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', true],
            'doctrine_migrations.sync_metadata_command' => ['privates', 'doctrine_migrations.sync_metadata_command', 'getDoctrineMigrations_SyncMetadataCommandService', true],
            'doctrine_migrations.versions_command' => ['privates', 'doctrine_migrations.versions_command', 'getDoctrineMigrations_VersionsCommandService', true],
            'doctrine_migrations.current_command' => ['privates', 'doctrine_migrations.current_command', 'getDoctrineMigrations_CurrentCommandService', true],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', true],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', true],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', true],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', true],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', true],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', true],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', true],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', true],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', true],
            'fos_js_routing.dump_command' => ['privates', '.fos_js_routing.dump_command.lazy', 'get_FosJsRouting_DumpCommand_LazyService', true],
            'fos_js_routing.router_debug_exposed_command' => ['privates', '.fos_js_routing.router_debug_exposed_command.lazy', 'get_FosJsRouting_RouterDebugExposedCommand_LazyService', true],
            'var_dumper.command.server_dump' => ['privates', '.var_dumper.command.server_dump.lazy', 'get_VarDumper_Command_ServerDump_LazyService', true],
            'monolog.command.server_log' => ['privates', '.monolog.command.server_log.lazy', 'get_Monolog_Command_ServerLog_LazyService', true],
            'Pimcore\\Bundle\\AdminBundle\\Command\\ExtJSCommand' => ['privates', 'Pimcore\\Bundle\\AdminBundle\\Command\\ExtJSCommand', 'getExtJSCommandService', true],
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\InstallCommand' => ['privates', 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\InstallCommand', 'getInstallCommandService', true],
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UninstallCommand' => ['privates', 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UninstallCommand', 'getUninstallCommandService', true],
            'Pimcore\\Bundle\\CoreBundle\\Command\\CacheClearCommand' => ['privates', 'Pimcore\\Bundle\\CoreBundle\\Command\\CacheClearCommand', 'getCacheClearCommandService', true],
            'Pimcore\\Bundle\\CoreBundle\\Command\\ClassesRebuildCommand' => ['privates', 'Pimcore\\Bundle\\CoreBundle\\Command\\ClassesRebuildCommand', 'getClassesRebuildCommandService', true],
            'Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceCommand' => ['privates', 'Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceCommand', 'getMaintenanceCommandService', true],
            'Pimcore\\Bundle\\CoreBundle\\Command\\OptimizeImageThumbnailsCommand' => ['privates', 'Pimcore\\Bundle\\CoreBundle\\Command\\OptimizeImageThumbnailsCommand', 'getOptimizeImageThumbnailsCommandService', true],
            'Pimcore\\Bundle\\CoreBundle\\Command\\WorkflowDumpCommand' => ['privates', 'Pimcore\\Bundle\\CoreBundle\\Command\\WorkflowDumpCommand', 'getWorkflowDumpCommandService', true],
        ], [
            'console.command.about' => '?',
            'console.command.assets_install' => '?',
            'console.command.cache_clear' => '?',
            'console.command.cache_pool_clear' => '?',
            'console.command.cache_pool_prune' => '?',
            'console.command.cache_pool_invalidate_tags' => '?',
            'console.command.cache_pool_delete' => '?',
            'console.command.cache_pool_list' => '?',
            'console.command.cache_warmup' => '?',
            'console.command.config_debug' => '?',
            'console.command.config_dump_reference' => '?',
            'console.command.container_debug' => '?',
            'console.command.container_lint' => '?',
            'console.command.debug_autowiring' => '?',
            'console.command.dotenv_debug' => '?',
            'console.command.event_dispatcher_debug' => '?',
            'console.command.messenger_consume_messages' => '?',
            'console.command.messenger_setup_transports' => '?',
            'console.command.messenger_debug' => '?',
            'console.command.messenger_stop_workers' => '?',
            'console.command.messenger_stats' => '?',
            'console.command.router_debug' => '?',
            'console.command.router_match' => '?',
            'console.command.serializer_debug' => '?',
            'console.command.translation_debug' => '?',
            'console.command.translation_extract' => '?',
            'console.command.validator_debug' => '?',
            'console.command.translation_pull' => '?',
            'console.command.translation_push' => '?',
            'console.command.xliff_lint' => '?',
            'console.command.yaml_lint' => '?',
            'console.command.secrets_set' => '?',
            'console.command.secrets_remove' => '?',
            'console.command.secrets_generate_key' => '?',
            'console.command.secrets_list' => '?',
            'console.command.secrets_decrypt_to_local' => '?',
            'console.command.secrets_encrypt_from_local' => '?',
            'console.command.mailer_test' => '?',
            'security.command.debug_firewall' => '?',
            'security.command.user_password_hash' => '?',
            'twig.command.debug' => '?',
            'twig.command.lint' => '?',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand',
            'doctrine_migrations.diff_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand',
            'doctrine_migrations.sync_metadata_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\SyncMetadataCommand',
            'doctrine_migrations.versions_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\ListCommand',
            'doctrine_migrations.current_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\CurrentCommand',
            'doctrine_migrations.dump_schema_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand',
            'doctrine_migrations.execute_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand',
            'doctrine_migrations.generate_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand',
            'doctrine_migrations.latest_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand',
            'doctrine_migrations.migrate_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand',
            'doctrine_migrations.rollup_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand',
            'doctrine_migrations.status_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand',
            'doctrine_migrations.up_to_date_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand',
            'doctrine_migrations.version_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\VersionCommand',
            'fos_js_routing.dump_command' => '?',
            'fos_js_routing.router_debug_exposed_command' => '?',
            'var_dumper.command.server_dump' => '?',
            'monolog.command.server_log' => '?',
            'Pimcore\\Bundle\\AdminBundle\\Command\\ExtJSCommand' => 'Pimcore\\Bundle\\AdminBundle\\Command\\ExtJSCommand',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\InstallCommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\InstallCommand',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UninstallCommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UninstallCommand',
            'Pimcore\\Bundle\\CoreBundle\\Command\\CacheClearCommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\CacheClearCommand',
            'Pimcore\\Bundle\\CoreBundle\\Command\\ClassesRebuildCommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\ClassesRebuildCommand',
            'Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceCommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceCommand',
            'Pimcore\\Bundle\\CoreBundle\\Command\\OptimizeImageThumbnailsCommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\OptimizeImageThumbnailsCommand',
            'Pimcore\\Bundle\\CoreBundle\\Command\\WorkflowDumpCommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\WorkflowDumpCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:invalidate-tags' => 'console.command.cache_pool_invalidate_tags', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:dotenv' => 'console.command.dotenv_debug', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'messenger:consume' => 'console.command.messenger_consume_messages', 'messenger:setup-transports' => 'console.command.messenger_setup_transports', 'debug:messenger' => 'console.command.messenger_debug', 'messenger:stop-workers' => 'console.command.messenger_stop_workers', 'messenger:stats' => 'console.command.messenger_stats', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:serializer' => 'console.command.serializer_debug', 'debug:translation' => 'console.command.translation_debug', 'translation:extract' => 'console.command.translation_extract', 'debug:validator' => 'console.command.validator_debug', 'translation:pull' => 'console.command.translation_pull', 'translation:push' => 'console.command.translation_push', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'mailer:test' => 'console.command.mailer_test', 'debug:firewall' => 'security.command.debug_firewall', 'security:hash-password' => 'security.command.user_password_hash', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'dbal:run-sql' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:sync-metadata-storage' => 'doctrine_migrations.sync_metadata_command', 'doctrine:migrations:list' => 'doctrine_migrations.versions_command', 'doctrine:migrations:current' => 'doctrine_migrations.current_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command', 'fos:js-routing:dump' => 'fos_js_routing.dump_command', 'fos:js-routing:debug' => 'fos_js_routing.router_debug_exposed_command', 'server:dump' => 'var_dumper.command.server_dump', 'server:log' => 'monolog.command.server_log', 'pimcore:extjs' => 'Pimcore\\Bundle\\AdminBundle\\Command\\ExtJSCommand', 'pimcore:bundle:install' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\InstallCommand', 'pimcore:bundle:uninstall' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UninstallCommand', 'pimcore:cache:clear' => 'Pimcore\\Bundle\\CoreBundle\\Command\\CacheClearCommand', 'pimcore:deployment:classes-rebuild' => 'Pimcore\\Bundle\\CoreBundle\\Command\\ClassesRebuildCommand', 'pimcore:maintenance' => 'Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceCommand', 'maintenance' => 'Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceCommand', 'pimcore:thumbnails:optimize-images' => 'Pimcore\\Bundle\\CoreBundle\\Command\\OptimizeImageThumbnailsCommand', 'pimcore:workflow:dump' => 'Pimcore\\Bundle\\CoreBundle\\Command\\WorkflowDumpCommand']);
    }
}
