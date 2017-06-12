<?php
// source: /home/juransar/public_html/app/config/config.neon 
// source: /home/juransar/public_html/app/config/config.local.neon 

class Container_a93b4fce4c extends Nette\DI\Container
{
	protected $meta = [
		'types' => [
			'Nette\Application\Application' => [1 => ['application.application']],
			'Nette\Application\IPresenterFactory' => [1 => ['application.presenterFactory']],
			'Nette\Application\LinkGenerator' => [1 => ['application.linkGenerator']],
			'Nette\Caching\Storages\IJournal' => [1 => ['cache.journal']],
			'Nette\Caching\IStorage' => [1 => ['cache.storage']],
			'Nette\Database\Connection' => [1 => ['database.default.connection']],
			'Nette\Database\IStructure' => [1 => ['database.default.structure']],
			'Nette\Database\Structure' => [1 => ['database.default.structure']],
			'Nette\Database\IConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Conventions\DiscoveredConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Context' => [1 => ['database.default.context']],
			'Nette\Http\RequestFactory' => [1 => ['http.requestFactory']],
			'Nette\Http\IRequest' => [1 => ['http.request']],
			'Nette\Http\Request' => [1 => ['http.request']],
			'Nette\Http\IResponse' => [1 => ['http.response']],
			'Nette\Http\Response' => [1 => ['http.response']],
			'Nette\Http\Context' => [1 => ['http.context']],
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => [1 => ['latte.latteFactory']],
			'Nette\Application\UI\ITemplateFactory' => [1 => ['latte.templateFactory']],
			'Nette\Mail\IMailer' => [1 => ['mail.mailer']],
			'Nette\Application\IRouter' => [1 => ['routing.router']],
			'Nette\Security\IUserStorage' => [1 => ['security.userStorage']],
			'Nette\Security\User' => [1 => ['security.user']],
			'Nette\Http\Session' => [1 => ['session.session']],
			'Tracy\ILogger' => [1 => ['tracy.logger']],
			'Tracy\BlueScreen' => [1 => ['tracy.blueScreen']],
			'Tracy\Bar' => [1 => ['tracy.bar']],
			'IteratorAggregate' => [1 => ['console.helperSet']],
			'Traversable' => [1 => ['console.helperSet']],
			'Symfony\Component\Console\Helper\HelperSet' => [1 => ['console.helperSet']],
			'Symfony\Component\Console\Application' => [1 => ['console.application']],
			'Kdyby\Console\Application' => [1 => ['console.application']],
			'Kdyby\Events\EventManager' => [1 => ['events.manager'], 0 => ['doctrine.default.evm']],
			'Doctrine\Common\EventManager' => [1 => ['events.manager'], 0 => ['doctrine.default.evm']],
			'Kdyby\Events\LazyEventManager' => [1 => ['events.manager']],
			'Symfony\Component\EventDispatcher\EventDispatcherInterface' => [1 => ['events.symfonyProxy']],
			'Doctrine\Common\Annotations\Reader' => [['annotations.reflectionReader'], ['annotations.reader']],
			'Doctrine\Common\Annotations\AnnotationReader' => [['annotations.reflectionReader']],
			'Doctrine\Common\Cache\Cache' => [
				[
					'annotations.cache.annotations',
					'doctrine.cache.default.metadata',
					'doctrine.cache.default.query',
					'doctrine.cache.default.ormResult',
					'doctrine.cache.default.hydration',
					'doctrine.cache.default.dbalResult',
					'validator.cache.validator',
				],
			],
			'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver' => [
				[
					'doctrine.default.metadataDriver',
					'doctrine.default.driver.App.annotationsImpl',
					'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl',
				],
			],
			'Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain' => [['doctrine.default.metadataDriver']],
			'Nette\Object' => [
				[
					'doctrine.default.repositoryFactory',
					'doctrine.default.diagnosticsPanel',
					'translation.userLocaleResolver.param',
					'translation.extractor.latte',
				],
				[
					'doctrine.default.cacheCleaner',
					'translation.catalogueCompiler',
					'translation.panel',
					'translation.userLocaleResolver.acceptHeader',
					'translation.userLocaleResolver.session',
					'translation.helpers',
					'translation.fallbackResolver',
					'translation.catalogueFactory',
					'translation.loader',
					'chordform',
					'loginform',
					'songform',
					'userform',
					'artistrepository',
					'authenticator',
					'chordclass',
					'chordrepository',
					'onepart',
					'songrepository',
					'userrepository',
				],
			],
			'Doctrine\ORM\Repository\RepositoryFactory' => [['doctrine.default.repositoryFactory']],
			'Kdyby\Doctrine\RepositoryFactory' => [['doctrine.default.repositoryFactory']],
			'Doctrine\ORM\Configuration' => [['doctrine.default.ormConfiguration']],
			'Doctrine\DBAL\Configuration' => [
				[
					'doctrine.default.ormConfiguration',
					'doctrine.default.dbalConfiguration',
				],
			],
			'Kdyby\Doctrine\Configuration' => [['doctrine.default.ormConfiguration']],
			'Kdyby\Events\NamespacedEventManager' => [['doctrine.default.evm']],
			'Doctrine\ORM\EntityManager' => [1 => ['doctrine.default.entityManager']],
			'Doctrine\Common\Persistence\ObjectManager' => [1 => ['doctrine.default.entityManager']],
			'Doctrine\ORM\EntityManagerInterface' => [1 => ['doctrine.default.entityManager']],
			'Kdyby\Persistence\QueryExecutor' => [1 => ['doctrine.default.entityManager', 'doctrine.dao']],
			'Kdyby\Persistence\Queryable' => [1 => ['doctrine.default.entityManager', 'doctrine.dao']],
			'Kdyby\Doctrine\EntityManager' => [1 => ['doctrine.default.entityManager']],
			'Tracy\IBarPanel' => [['doctrine.default.diagnosticsPanel'], ['translation.panel']],
			'Doctrine\DBAL\Logging\SQLLogger' => [['doctrine.default.diagnosticsPanel']],
			'Kdyby\Doctrine\Diagnostics\Panel' => [['doctrine.default.diagnosticsPanel']],
			'Doctrine\DBAL\Connection' => [1 => ['doctrine.default.connection']],
			'Doctrine\DBAL\Driver\Connection' => [1 => ['doctrine.default.connection']],
			'Kdyby\Doctrine\Connection' => [1 => ['doctrine.default.connection']],
			'Kdyby\Doctrine\EntityRepository' => [1 => ['doctrine.dao']],
			'Doctrine\ORM\EntityRepository' => [1 => ['doctrine.dao']],
			'Doctrine\Common\Persistence\ObjectRepository' => [1 => ['doctrine.dao']],
			'Doctrine\Common\Collections\Selectable' => [1 => ['doctrine.dao']],
			'Kdyby\Persistence\ObjectDao' => [1 => ['doctrine.dao']],
			'Kdyby\Doctrine\EntityDao' => [1 => ['doctrine.dao']],
			'Kdyby\Doctrine\EntityDaoFactory' => [1 => ['doctrine.daoFactory']],
			'Kdyby\Doctrine\DI\IRepositoryFactory' => [['doctrine.repositoryFactory.default.defaultRepositoryFactory']],
			'Doctrine\ORM\Tools\SchemaValidator' => [1 => ['doctrine.default.schemaValidator']],
			'Doctrine\ORM\Tools\SchemaTool' => [1 => ['doctrine.default.schemaTool']],
			'Kdyby\Doctrine\Tools\CacheCleaner' => [1 => ['doctrine.default.cacheCleaner']],
			'Doctrine\DBAL\Schema\AbstractSchemaManager' => [1 => ['doctrine.default.schemaManager']],
			'Symfony\Component\Console\Helper\Helper' => [1 => ['doctrine.helper.entityManager', 'doctrine.helper.connection']],
			'Symfony\Component\Console\Helper\HelperInterface' => [1 => ['doctrine.helper.entityManager', 'doctrine.helper.connection']],
			'Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper' => [1 => ['doctrine.helper.entityManager']],
			'Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper' => [1 => ['doctrine.helper.connection']],
			'Symfony\Component\Console\Command\Command' => [
				1 => [
					'doctrine.cli.0',
					'doctrine.cli.1',
					'doctrine.cli.2',
					'doctrine.cli.3',
					'doctrine.cli.4',
					'doctrine.cli.5',
					'doctrine.cli.6',
					'doctrine.cli.7',
					'doctrine.cli.8',
					'doctrine.cli.9',
					'doctrine.cli.10',
					'doctrine.cli.11',
					'translation.console.extract',
				],
			],
			'Doctrine\DBAL\Tools\Console\Command\ImportCommand' => [1 => ['doctrine.cli.0']],
			'Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand' => [1 => ['doctrine.cli.1']],
			'Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand' => [1 => ['doctrine.cli.2']],
			'Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand' => [1 => ['doctrine.cli.3']],
			'Doctrine\ORM\Tools\Console\Command\ConvertMappingCommand' => [1 => ['doctrine.cli.4']],
			'Kdyby\Doctrine\Console\ConvertMappingCommand' => [1 => ['doctrine.cli.4']],
			'Doctrine\ORM\Tools\Console\Command\GenerateEntitiesCommand' => [1 => ['doctrine.cli.5']],
			'Kdyby\Doctrine\Console\GenerateEntitiesCommand' => [1 => ['doctrine.cli.5']],
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand' => [1 => ['doctrine.cli.6']],
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\AbstractCommand' => [1 => ['doctrine.cli.6', 'doctrine.cli.7', 'doctrine.cli.8']],
			'Kdyby\Doctrine\Console\SchemaCreateCommand' => [1 => ['doctrine.cli.6']],
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand' => [1 => ['doctrine.cli.7']],
			'Kdyby\Doctrine\Console\SchemaUpdateCommand' => [1 => ['doctrine.cli.7']],
			'Doctrine\ORM\Tools\Console\Command\SchemaTool\DropCommand' => [1 => ['doctrine.cli.8']],
			'Kdyby\Doctrine\Console\SchemaDropCommand' => [1 => ['doctrine.cli.8']],
			'Doctrine\ORM\Tools\Console\Command\GenerateProxiesCommand' => [1 => ['doctrine.cli.9']],
			'Kdyby\Doctrine\Console\GenerateProxiesCommand' => [1 => ['doctrine.cli.9']],
			'Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand' => [1 => ['doctrine.cli.10']],
			'Kdyby\Doctrine\Console\ValidateSchemaCommand' => [1 => ['doctrine.cli.10']],
			'Doctrine\ORM\Tools\Console\Command\InfoCommand' => [1 => ['doctrine.cli.11']],
			'Kdyby\Doctrine\Console\InfoCommand' => [1 => ['doctrine.cli.11']],
			'Doctrine\Common\Persistence\AbstractManagerRegistry' => [1 => ['doctrine.registry']],
			'Doctrine\Common\Persistence\ConnectionRegistry' => [1 => ['doctrine.registry']],
			'Doctrine\Common\Persistence\ManagerRegistry' => [1 => ['doctrine.registry']],
			'Kdyby\Doctrine\Registry' => [1 => ['doctrine.registry']],
			'Symfony\Component\Translation\Translator' => [1 => ['translation.default']],
			'Symfony\Component\Translation\TranslatorBagInterface' => [1 => ['translation.default']],
			'Symfony\Component\Translation\TranslatorInterface' => [1 => ['translation.default']],
			'Kdyby\Translation\ITranslator' => [1 => ['translation.default']],
			'Nette\Localization\ITranslator' => [1 => ['translation.default']],
			'Kdyby\Translation\Translator' => [1 => ['translation.default']],
			'Kdyby\Translation\CatalogueCompiler' => [1 => ['translation.catalogueCompiler']],
			'Kdyby\Translation\Diagnostics\Panel' => [1 => ['translation.panel']],
			'Kdyby\Translation\IUserLocaleResolver' => [
				['translation.userLocaleResolver.param'],
				[
					'translation.userLocaleResolver.acceptHeader',
					'translation.userLocaleResolver.session',
					'translation.userLocaleResolver',
				],
			],
			'Kdyby\Translation\LocaleResolver\LocaleParamResolver' => [['translation.userLocaleResolver.param']],
			'Kdyby\Translation\LocaleResolver\AcceptHeaderResolver' => [1 => ['translation.userLocaleResolver.acceptHeader']],
			'Kdyby\Translation\LocaleResolver\SessionResolver' => [1 => ['translation.userLocaleResolver.session']],
			'Kdyby\Translation\TemplateHelpers' => [1 => ['translation.helpers']],
			'Kdyby\Translation\FallbackResolver' => [1 => ['translation.fallbackResolver']],
			'Kdyby\Translation\CatalogueFactory' => [1 => ['translation.catalogueFactory']],
			'Symfony\Component\Translation\MessageSelector' => [1 => ['translation.selector']],
			'Symfony\Component\Translation\Extractor\ExtractorInterface' => [1 => ['translation.extractor'], 0 => ['translation.extractor.latte']],
			'Symfony\Component\Translation\Extractor\ChainExtractor' => [1 => ['translation.extractor']],
			'Kdyby\Translation\Extractors\LatteExtractor' => [['translation.extractor.latte']],
			'Symfony\Component\Translation\Writer\TranslationWriter' => [1 => ['translation.writer']],
			'Symfony\Component\Translation\Dumper\FileDumper' => [
				[
					'translation.dumper.php',
					'translation.dumper.xliff',
					'translation.dumper.po',
					'translation.dumper.mo',
					'translation.dumper.yml',
					'translation.dumper.neon',
					'translation.dumper.qt',
					'translation.dumper.csv',
					'translation.dumper.ini',
					'translation.dumper.res',
				],
			],
			'Symfony\Component\Translation\Dumper\DumperInterface' => [
				[
					'translation.dumper.php',
					'translation.dumper.xliff',
					'translation.dumper.po',
					'translation.dumper.mo',
					'translation.dumper.yml',
					'translation.dumper.neon',
					'translation.dumper.qt',
					'translation.dumper.csv',
					'translation.dumper.ini',
					'translation.dumper.res',
				],
			],
			'Symfony\Component\Translation\Dumper\PhpFileDumper' => [['translation.dumper.php']],
			'Symfony\Component\Translation\Dumper\XliffFileDumper' => [['translation.dumper.xliff']],
			'Symfony\Component\Translation\Dumper\PoFileDumper' => [['translation.dumper.po']],
			'Symfony\Component\Translation\Dumper\MoFileDumper' => [['translation.dumper.mo']],
			'Symfony\Component\Translation\Dumper\YamlFileDumper' => [['translation.dumper.yml']],
			'Kdyby\Translation\Dumper\NeonFileDumper' => [['translation.dumper.neon']],
			'Symfony\Component\Translation\Dumper\QtFileDumper' => [['translation.dumper.qt']],
			'Symfony\Component\Translation\Dumper\CsvFileDumper' => [['translation.dumper.csv']],
			'Symfony\Component\Translation\Dumper\IniFileDumper' => [['translation.dumper.ini']],
			'Symfony\Component\Translation\Dumper\IcuResFileDumper' => [['translation.dumper.res']],
			'Kdyby\Translation\IResourceLoader' => [1 => ['translation.loader']],
			'Kdyby\Translation\TranslationLoader' => [1 => ['translation.loader']],
			'Symfony\Component\Translation\Loader\FileLoader' => [
				[
					'translation.loader.php',
					'translation.loader.yml',
					'translation.loader.po',
					'translation.loader.mo',
					'translation.loader.csv',
					'translation.loader.ini',
					'translation.loader.json',
				],
			],
			'Symfony\Component\Translation\Loader\ArrayLoader' => [
				[
					'translation.loader.php',
					'translation.loader.yml',
					'translation.loader.po',
					'translation.loader.mo',
					'translation.loader.csv',
					'translation.loader.ini',
					'translation.loader.json',
					'translation.loader.neon',
				],
			],
			'Symfony\Component\Translation\Loader\LoaderInterface' => [
				[
					'translation.loader.php',
					'translation.loader.yml',
					'translation.loader.xlf',
					'translation.loader.po',
					'translation.loader.mo',
					'translation.loader.ts',
					'translation.loader.csv',
					'translation.loader.res',
					'translation.loader.dat',
					'translation.loader.ini',
					'translation.loader.json',
					'translation.loader.neon',
				],
			],
			'Symfony\Component\Translation\Loader\PhpFileLoader' => [['translation.loader.php']],
			'Symfony\Component\Translation\Loader\YamlFileLoader' => [['translation.loader.yml']],
			'Symfony\Component\Translation\Loader\XliffFileLoader' => [['translation.loader.xlf']],
			'Symfony\Component\Translation\Loader\PoFileLoader' => [['translation.loader.po']],
			'Symfony\Component\Translation\Loader\MoFileLoader' => [['translation.loader.mo']],
			'Symfony\Component\Translation\Loader\QtFileLoader' => [['translation.loader.ts']],
			'Symfony\Component\Translation\Loader\CsvFileLoader' => [['translation.loader.csv']],
			'Symfony\Component\Translation\Loader\IcuResFileLoader' => [['translation.loader.res', 'translation.loader.dat']],
			'Symfony\Component\Translation\Loader\IcuDatFileLoader' => [['translation.loader.dat']],
			'Symfony\Component\Translation\Loader\IniFileLoader' => [['translation.loader.ini']],
			'Symfony\Component\Translation\Loader\JsonFileLoader' => [['translation.loader.json']],
			'Kdyby\Translation\Loader\NeonFileLoader' => [['translation.loader.neon']],
			'Kdyby\Translation\Console\ExtractCommand' => [1 => ['translation.console.extract']],
			'Symfony\Component\Validator\Mapping\Loader\LoaderInterface' => [1 => ['validator.loader'], 0 => ['validator.annotationsLoader']],
			'Symfony\Component\Validator\Mapping\Cache\CacheInterface' => [1 => ['validator.cache']],
			'Symfony\Component\Validator\MetadataFactoryInterface' => [['validator.metadataFactory'], ['validator.validator']],
			'Symfony\Component\Validator\Mapping\Factory\MetadataFactoryInterface' => [['validator.metadataFactory'], ['validator.validator']],
			'Symfony\Component\Validator\ConstraintValidatorFactoryInterface' => [1 => ['validator.constraintValidatorFactory']],
			'Symfony\Component\Validator\Context\ExecutionContextFactoryInterface' => [1 => ['validator.contextFactory']],
			'Symfony\Component\Validator\Validator\ValidatorInterface' => [1 => ['validator.validator']],
			'Symfony\Component\Validator\ConstraintValidator' => [
				1 => ['validator.constraint.email', 'validator.constraint.expression'],
			],
			'Symfony\Component\Validator\ConstraintValidatorInterface' => [
				1 => ['validator.constraint.email', 'validator.constraint.expression'],
			],
			'Symfony\Component\Validator\Constraints\EmailValidator' => [1 => ['validator.constraint.email']],
			'Symfony\Component\Validator\Constraints\ExpressionValidator' => [1 => ['validator.constraint.expression']],
			'Symfony\Component\Validator\Mapping\Loader\AnnotationLoader' => [['validator.annotationsLoader']],
			'App\Forms\ChordForm' => [1 => ['chordform']],
			'App\Forms\LoginForm' => [1 => ['loginform']],
			'App\Forms\SongForm' => [1 => ['songform']],
			'App\Forms\UserForm' => [1 => ['userform']],
			'App\Model\ArtistRepository' => [1 => ['artistrepository']],
			'Nette\Security\IAuthenticator' => [1 => ['authenticator']],
			'App\Model\Authenticator' => [1 => ['authenticator']],
			'Kdyby\Doctrine\Entities\BaseEntity' => [1 => ['chordclass', 'onepart']],
			'Serializable' => [1 => ['chordclass', 'onepart']],
			'App\Model\Chord' => [1 => ['chordclass']],
			'App\Model\ChordRepository' => [1 => ['chordrepository']],
			'App\Model\OnePart' => [1 => ['onepart']],
			'App\Model\SongRepository' => [1 => ['songrepository']],
			'App\Model\UserRepository' => [1 => ['userrepository']],
			'App\Presenters\BasePresenter' => [
				1 => [
					'loginpresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.7',
				],
			],
			'Nette\Application\UI\Presenter' => [
				[
					'loginpresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\Application\UI\Control' => [
				[
					'loginpresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\Application\UI\Component' => [
				[
					'loginpresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\ComponentModel\Container' => [
				[
					'loginpresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\ComponentModel\Component' => [
				[
					'loginpresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\Application\UI\IRenderable' => [
				[
					'loginpresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\ComponentModel\IContainer' => [
				[
					'loginpresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\ComponentModel\IComponent' => [
				[
					'loginpresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\Application\UI\ISignalReceiver' => [
				[
					'loginpresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\Application\UI\IStatePersistent' => [
				[
					'loginpresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'ArrayAccess' => [
				[
					'loginpresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\Application\IPresenter' => [
				[
					'loginpresenter',
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
				],
			],
			'App\Presenters\LoginPresenter' => [1 => ['loginpresenter']],
			'App\Presenters\ChordPresenter' => [1 => ['application.1']],
			'App\Presenters\HomepagePresenter' => [1 => ['application.2']],
			'App\Presenters\Error4xxPresenter' => [1 => ['application.3']],
			'App\Presenters\ErrorPresenter' => [1 => ['application.4']],
			'App\Presenters\SongPresenter' => [1 => ['application.5']],
			'App\Presenters\UserPresenter' => [1 => ['application.6']],
			'App\Presenters\ArtistPresenter' => [1 => ['application.7']],
			'KdybyModule\CliPresenter' => [1 => ['application.8']],
			'NetteModule\ErrorPresenter' => [1 => ['application.9']],
			'NetteModule\MicroPresenter' => [1 => ['application.10']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'annotations.cache.annotations' => 'Doctrine\Common\Cache\Cache',
			'annotations.reader' => 'Doctrine\Common\Annotations\Reader',
			'annotations.reflectionReader' => 'Doctrine\Common\Annotations\AnnotationReader',
			'application.1' => 'App\Presenters\ChordPresenter',
			'application.10' => 'NetteModule\MicroPresenter',
			'application.2' => 'App\Presenters\HomepagePresenter',
			'application.3' => 'App\Presenters\Error4xxPresenter',
			'application.4' => 'App\Presenters\ErrorPresenter',
			'application.5' => 'App\Presenters\SongPresenter',
			'application.6' => 'App\Presenters\UserPresenter',
			'application.7' => 'App\Presenters\ArtistPresenter',
			'application.8' => 'KdybyModule\CliPresenter',
			'application.9' => 'NetteModule\ErrorPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'artistrepository' => 'App\Model\ArtistRepository',
			'authenticator' => 'App\Model\Authenticator',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'chordclass' => 'App\Model\Chord',
			'chordform' => 'App\Forms\ChordForm',
			'chordrepository' => 'App\Model\ChordRepository',
			'console.application' => 'Kdyby\Console\Application',
			'console.helperSet' => 'Symfony\Component\Console\Helper\HelperSet',
			'container' => 'Nette\DI\Container',
			'database.default.connection' => 'Nette\Database\Connection',
			'database.default.context' => 'Nette\Database\Context',
			'database.default.conventions' => 'Nette\Database\Conventions\DiscoveredConventions',
			'database.default.structure' => 'Nette\Database\Structure',
			'doctrine.cache.default.dbalResult' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.hydration' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.metadata' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.ormResult' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.query' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cli.0' => 'Doctrine\DBAL\Tools\Console\Command\ImportCommand',
			'doctrine.cli.1' => 'Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand',
			'doctrine.cli.10' => 'Kdyby\Doctrine\Console\ValidateSchemaCommand',
			'doctrine.cli.11' => 'Kdyby\Doctrine\Console\InfoCommand',
			'doctrine.cli.2' => 'Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand',
			'doctrine.cli.3' => 'Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand',
			'doctrine.cli.4' => 'Kdyby\Doctrine\Console\ConvertMappingCommand',
			'doctrine.cli.5' => 'Kdyby\Doctrine\Console\GenerateEntitiesCommand',
			'doctrine.cli.6' => 'Kdyby\Doctrine\Console\SchemaCreateCommand',
			'doctrine.cli.7' => 'Kdyby\Doctrine\Console\SchemaUpdateCommand',
			'doctrine.cli.8' => 'Kdyby\Doctrine\Console\SchemaDropCommand',
			'doctrine.cli.9' => 'Kdyby\Doctrine\Console\GenerateProxiesCommand',
			'doctrine.dao' => 'Kdyby\Doctrine\EntityDao',
			'doctrine.daoFactory' => 'Kdyby\Doctrine\EntityDao',
			'doctrine.default.cacheCleaner' => 'Kdyby\Doctrine\Tools\CacheCleaner',
			'doctrine.default.connection' => 'Kdyby\Doctrine\Connection',
			'doctrine.default.dbalConfiguration' => 'Doctrine\DBAL\Configuration',
			'doctrine.default.diagnosticsPanel' => 'Kdyby\Doctrine\Diagnostics\Panel',
			'doctrine.default.driver.App.annotationsImpl' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver',
			'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver',
			'doctrine.default.entityManager' => 'Kdyby\Doctrine\EntityManager',
			'doctrine.default.evm' => 'Kdyby\Events\NamespacedEventManager',
			'doctrine.default.metadataDriver' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain',
			'doctrine.default.ormConfiguration' => 'Kdyby\Doctrine\Configuration',
			'doctrine.default.repositoryFactory' => 'Kdyby\Doctrine\RepositoryFactory',
			'doctrine.default.schemaManager' => 'Doctrine\DBAL\Schema\AbstractSchemaManager',
			'doctrine.default.schemaTool' => 'Doctrine\ORM\Tools\SchemaTool',
			'doctrine.default.schemaValidator' => 'Doctrine\ORM\Tools\SchemaValidator',
			'doctrine.helper.connection' => 'Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper',
			'doctrine.helper.entityManager' => 'Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper',
			'doctrine.registry' => 'Kdyby\Doctrine\Registry',
			'doctrine.repositoryFactory.default.defaultRepositoryFactory' => 'Kdyby\Doctrine\EntityDao',
			'events.manager' => 'Kdyby\Events\LazyEventManager',
			'events.symfonyProxy' => 'Symfony\Component\EventDispatcher\EventDispatcherInterface',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'loginform' => 'App\Forms\LoginForm',
			'loginpresenter' => 'App\Presenters\LoginPresenter',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'onepart' => 'App\Model\OnePart',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'songform' => 'App\Forms\SongForm',
			'songrepository' => 'App\Model\SongRepository',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
			'translation.catalogueCompiler' => 'Kdyby\Translation\CatalogueCompiler',
			'translation.catalogueFactory' => 'Kdyby\Translation\CatalogueFactory',
			'translation.console.extract' => 'Kdyby\Translation\Console\ExtractCommand',
			'translation.default' => 'Kdyby\Translation\Translator',
			'translation.dumper.csv' => 'Symfony\Component\Translation\Dumper\CsvFileDumper',
			'translation.dumper.ini' => 'Symfony\Component\Translation\Dumper\IniFileDumper',
			'translation.dumper.mo' => 'Symfony\Component\Translation\Dumper\MoFileDumper',
			'translation.dumper.neon' => 'Kdyby\Translation\Dumper\NeonFileDumper',
			'translation.dumper.php' => 'Symfony\Component\Translation\Dumper\PhpFileDumper',
			'translation.dumper.po' => 'Symfony\Component\Translation\Dumper\PoFileDumper',
			'translation.dumper.qt' => 'Symfony\Component\Translation\Dumper\QtFileDumper',
			'translation.dumper.res' => 'Symfony\Component\Translation\Dumper\IcuResFileDumper',
			'translation.dumper.xliff' => 'Symfony\Component\Translation\Dumper\XliffFileDumper',
			'translation.dumper.yml' => 'Symfony\Component\Translation\Dumper\YamlFileDumper',
			'translation.extractor' => 'Symfony\Component\Translation\Extractor\ChainExtractor',
			'translation.extractor.latte' => 'Kdyby\Translation\Extractors\LatteExtractor',
			'translation.fallbackResolver' => 'Kdyby\Translation\FallbackResolver',
			'translation.helpers' => 'Kdyby\Translation\TemplateHelpers',
			'translation.loader' => 'Kdyby\Translation\TranslationLoader',
			'translation.loader.csv' => 'Symfony\Component\Translation\Loader\CsvFileLoader',
			'translation.loader.dat' => 'Symfony\Component\Translation\Loader\IcuDatFileLoader',
			'translation.loader.ini' => 'Symfony\Component\Translation\Loader\IniFileLoader',
			'translation.loader.json' => 'Symfony\Component\Translation\Loader\JsonFileLoader',
			'translation.loader.mo' => 'Symfony\Component\Translation\Loader\MoFileLoader',
			'translation.loader.neon' => 'Kdyby\Translation\Loader\NeonFileLoader',
			'translation.loader.php' => 'Symfony\Component\Translation\Loader\PhpFileLoader',
			'translation.loader.po' => 'Symfony\Component\Translation\Loader\PoFileLoader',
			'translation.loader.res' => 'Symfony\Component\Translation\Loader\IcuResFileLoader',
			'translation.loader.ts' => 'Symfony\Component\Translation\Loader\QtFileLoader',
			'translation.loader.xlf' => 'Symfony\Component\Translation\Loader\XliffFileLoader',
			'translation.loader.yml' => 'Symfony\Component\Translation\Loader\YamlFileLoader',
			'translation.panel' => 'Kdyby\Translation\Diagnostics\Panel',
			'translation.selector' => 'Symfony\Component\Translation\MessageSelector',
			'translation.userLocaleResolver' => 'Kdyby\Translation\IUserLocaleResolver',
			'translation.userLocaleResolver.acceptHeader' => 'Kdyby\Translation\LocaleResolver\AcceptHeaderResolver',
			'translation.userLocaleResolver.param' => 'Kdyby\Translation\LocaleResolver\LocaleParamResolver',
			'translation.userLocaleResolver.session' => 'Kdyby\Translation\LocaleResolver\SessionResolver',
			'translation.writer' => 'Symfony\Component\Translation\Writer\TranslationWriter',
			'userform' => 'App\Forms\UserForm',
			'userrepository' => 'App\Model\UserRepository',
			'validator.annotationsLoader' => 'Symfony\Component\Validator\Mapping\Loader\AnnotationLoader',
			'validator.cache' => 'Symfony\Component\Validator\Mapping\Cache\CacheInterface',
			'validator.cache.validator' => 'Doctrine\Common\Cache\Cache',
			'validator.constraint.email' => 'Symfony\Component\Validator\Constraints\EmailValidator',
			'validator.constraint.expression' => 'Symfony\Component\Validator\Constraints\ExpressionValidator',
			'validator.constraintValidatorFactory' => 'Symfony\Component\Validator\ConstraintValidatorFactoryInterface',
			'validator.contextFactory' => 'Symfony\Component\Validator\Context\ExecutionContextFactoryInterface',
			'validator.loader' => 'Symfony\Component\Validator\Mapping\Loader\LoaderInterface',
			'validator.metadataFactory' => 'Symfony\Component\Validator\Mapping\Factory\MetadataFactoryInterface',
			'validator.validator' => 'Symfony\Component\Validator\Validator\ValidatorInterface',
		],
		'tags' => [
			'inject' => [
				'annotations.cache.annotations' => FALSE,
				'application.1' => TRUE,
				'application.10' => TRUE,
				'application.2' => TRUE,
				'application.3' => TRUE,
				'application.4' => TRUE,
				'application.5' => TRUE,
				'application.6' => TRUE,
				'application.7' => TRUE,
				'application.8' => TRUE,
				'application.9' => TRUE,
				'artistrepository' => TRUE,
				'authenticator' => TRUE,
				'chordclass' => TRUE,
				'chordform' => TRUE,
				'chordrepository' => TRUE,
				'console.application' => FALSE,
				'console.helperSet' => FALSE,
				'doctrine.cache.default.dbalResult' => FALSE,
				'doctrine.cache.default.hydration' => FALSE,
				'doctrine.cache.default.metadata' => FALSE,
				'doctrine.cache.default.ormResult' => FALSE,
				'doctrine.cache.default.query' => FALSE,
				'doctrine.cli.0' => FALSE,
				'doctrine.cli.1' => FALSE,
				'doctrine.cli.10' => FALSE,
				'doctrine.cli.11' => FALSE,
				'doctrine.cli.2' => FALSE,
				'doctrine.cli.3' => FALSE,
				'doctrine.cli.4' => FALSE,
				'doctrine.cli.5' => FALSE,
				'doctrine.cli.6' => FALSE,
				'doctrine.cli.7' => FALSE,
				'doctrine.cli.8' => FALSE,
				'doctrine.cli.9' => FALSE,
				'doctrine.dao' => FALSE,
				'doctrine.daoFactory' => FALSE,
				'doctrine.default.connection' => FALSE,
				'doctrine.default.dbalConfiguration' => FALSE,
				'doctrine.default.driver.App.annotationsImpl' => FALSE,
				'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl' => FALSE,
				'doctrine.default.entityManager' => FALSE,
				'doctrine.default.metadataDriver' => FALSE,
				'doctrine.default.ormConfiguration' => FALSE,
				'loginform' => TRUE,
				'loginpresenter' => TRUE,
				'onepart' => TRUE,
				'songform' => TRUE,
				'songrepository' => TRUE,
				'translation.catalogueCompiler' => FALSE,
				'translation.catalogueFactory' => FALSE,
				'translation.console.extract' => FALSE,
				'translation.default' => FALSE,
				'translation.dumper.csv' => FALSE,
				'translation.dumper.ini' => FALSE,
				'translation.dumper.mo' => FALSE,
				'translation.dumper.neon' => FALSE,
				'translation.dumper.php' => FALSE,
				'translation.dumper.po' => FALSE,
				'translation.dumper.qt' => FALSE,
				'translation.dumper.res' => FALSE,
				'translation.dumper.xliff' => FALSE,
				'translation.dumper.yml' => FALSE,
				'translation.extractor' => FALSE,
				'translation.extractor.latte' => FALSE,
				'translation.fallbackResolver' => FALSE,
				'translation.helpers' => FALSE,
				'translation.loader' => FALSE,
				'translation.loader.csv' => FALSE,
				'translation.loader.dat' => FALSE,
				'translation.loader.ini' => FALSE,
				'translation.loader.json' => FALSE,
				'translation.loader.mo' => FALSE,
				'translation.loader.neon' => FALSE,
				'translation.loader.php' => FALSE,
				'translation.loader.po' => FALSE,
				'translation.loader.res' => FALSE,
				'translation.loader.ts' => FALSE,
				'translation.loader.xlf' => FALSE,
				'translation.loader.yml' => FALSE,
				'translation.selector' => FALSE,
				'translation.userLocaleResolver' => FALSE,
				'translation.userLocaleResolver.acceptHeader' => FALSE,
				'translation.userLocaleResolver.param' => FALSE,
				'translation.userLocaleResolver.session' => FALSE,
				'translation.writer' => FALSE,
				'userform' => TRUE,
				'userrepository' => TRUE,
				'validator.cache.validator' => FALSE,
			],
			'nette.presenter' => [
				'application.1' => 'App\Presenters\ChordPresenter',
				'application.10' => 'NetteModule\MicroPresenter',
				'application.2' => 'App\Presenters\HomepagePresenter',
				'application.3' => 'App\Presenters\Error4xxPresenter',
				'application.4' => 'App\Presenters\ErrorPresenter',
				'application.5' => 'App\Presenters\SongPresenter',
				'application.6' => 'App\Presenters\UserPresenter',
				'application.7' => 'App\Presenters\ArtistPresenter',
				'application.8' => 'KdybyModule\CliPresenter',
				'application.9' => 'NetteModule\ErrorPresenter',
				'loginpresenter' => 'App\Presenters\LoginPresenter',
			],
			'kdyby.console.command' => [
				'doctrine.cli.0' => TRUE,
				'doctrine.cli.1' => TRUE,
				'doctrine.cli.10' => TRUE,
				'doctrine.cli.11' => TRUE,
				'doctrine.cli.2' => TRUE,
				'doctrine.cli.3' => TRUE,
				'doctrine.cli.4' => TRUE,
				'doctrine.cli.5' => TRUE,
				'doctrine.cli.6' => TRUE,
				'doctrine.cli.7' => TRUE,
				'doctrine.cli.8' => TRUE,
				'doctrine.cli.9' => TRUE,
				'translation.console.extract' => 'latte',
			],
			'doctrine.connection' => ['doctrine.default.connection' => TRUE],
			'kdyby.doctrine.connection' => ['doctrine.default.connection' => TRUE],
			'doctrine.entityManager' => ['doctrine.default.entityManager' => TRUE],
			'kdyby.doctrine.entityManager' => ['doctrine.default.entityManager' => TRUE],
			'kdyby.console.helper' => [
				'doctrine.helper.connection' => 'db',
				'doctrine.helper.entityManager' => 'em',
			],
			'translation.dumper' => [
				'translation.dumper.csv' => 'csv',
				'translation.dumper.ini' => 'ini',
				'translation.dumper.mo' => 'mo',
				'translation.dumper.neon' => 'neon',
				'translation.dumper.php' => 'php',
				'translation.dumper.po' => 'po',
				'translation.dumper.qt' => 'qt',
				'translation.dumper.res' => 'res',
				'translation.dumper.xliff' => 'xliff',
				'translation.dumper.yml' => 'yml',
			],
			'translation.extractor' => ['translation.extractor.latte' => 'latte'],
			'translation.loader' => [
				'translation.loader.csv' => 'csv',
				'translation.loader.dat' => 'dat',
				'translation.loader.ini' => 'ini',
				'translation.loader.json' => 'json',
				'translation.loader.mo' => 'mo',
				'translation.loader.neon' => 'neon',
				'translation.loader.php' => 'php',
				'translation.loader.po' => 'po',
				'translation.loader.res' => 'res',
				'translation.loader.ts' => 'ts',
				'translation.loader.xlf' => 'xlf',
				'translation.loader.yml' => 'yml',
			],
			'kdyby.validator.loader' => ['validator.annotationsLoader' => TRUE],
			'kdyby.validator.constraintValidator' => [
				'validator.constraint.email' => TRUE,
				'validator.constraint.expression' => ['validator.expression'],
			],
		],
		'aliases' => [
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'database.default' => 'database.default.connection',
			'doctrine.cacheCleaner' => 'doctrine.default.cacheCleaner',
			'doctrine.schemaManager' => 'doctrine.default.schemaManager',
			'doctrine.schemaTool' => 'doctrine.default.schemaTool',
			'doctrine.schemaValidator' => 'doctrine.default.schemaValidator',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.database.default' => 'database.default',
			'nette.database.default.context' => 'database.default.context',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		],
	];


	public function __construct(array $params = [])
	{
		$this->parameters = $params;
		$this->parameters += [
			'appDir' => '/home/juransar/public_html/app',
			'wwwDir' => '/home/juransar/public_html/www',
			'debugMode' => TRUE,
			'productionMode' => FALSE,
			'consoleMode' => FALSE,
			'tempDir' => '/home/juransar/public_html/app/../temp',
			'doctrine.debug' => FALSE,
			'doctrine' => [
				'orm' => ['defaultEntityManager' => 'default'],
				'dbal' => ['defaultConnection' => 'default'],
			],
		];
	}


	public function createServiceAnnotations__cache__annotations(): Doctrine\Common\Cache\Cache
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Annotations',
			TRUE);
		$service->setNamespace('Kdyby_annotations.cache.annotations_017c63af');
		return $service;
	}


	public function createServiceAnnotations__reader(): Doctrine\Common\Annotations\Reader
	{
		$service = new Doctrine\Common\Annotations\CachedReader($this->getService('annotations.reflectionReader'),
			$this->getService('annotations.cache.annotations'), TRUE);
		return $service;
	}


	public function createServiceAnnotations__reflectionReader(): Doctrine\Common\Annotations\AnnotationReader
	{
		$service = new Doctrine\Common\Annotations\AnnotationReader;
		$service->addGlobalIgnoredName('persistent');
		$service->addGlobalIgnoredName('serializationVersion');
		return $service;
	}


	public function createServiceApplication__1(): App\Presenters\ChordPresenter
	{
		$service = new App\Presenters\ChordPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectDependencies($this->getService('artistrepository'), $this->getService('songrepository'),
			$this->getService('chordrepository'), $this->getService('chordform'));
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\ChordPresenter', 'onShutdown'],
			$service->onShutdown, NULL, FALSE);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\ChordPresenter', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}


	public function createServiceApplication__10(): NetteModule\MicroPresenter
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'),
			$this->getService('routing.router'));
		return $service;
	}


	public function createServiceApplication__2(): App\Presenters\HomepagePresenter
	{
		$service = new App\Presenters\HomepagePresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->EntityManager = $this->getService('doctrine.default.entityManager');
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\HomepagePresenter', 'onShutdown'],
			$service->onShutdown, NULL, FALSE);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\HomepagePresenter', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}


	public function createServiceApplication__3(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\Error4xxPresenter', 'onShutdown'],
			$service->onShutdown, NULL, FALSE);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\Error4xxPresenter', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}


	public function createServiceApplication__4(): App\Presenters\ErrorPresenter
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	public function createServiceApplication__5(): App\Presenters\SongPresenter
	{
		$service = new App\Presenters\SongPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectDependencies($this->getService('artistrepository'), $this->getService('songrepository'),
			$this->getService('songform'));
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\SongPresenter', 'onShutdown'],
			$service->onShutdown, NULL, FALSE);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\SongPresenter', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}


	public function createServiceApplication__6(): App\Presenters\UserPresenter
	{
		$service = new App\Presenters\UserPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectUserForm($this->getService('userform'));
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\UserPresenter', 'onShutdown'],
			$service->onShutdown, NULL, FALSE);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\UserPresenter', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}


	public function createServiceApplication__7(): App\Presenters\ArtistPresenter
	{
		$service = new App\Presenters\ArtistPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectDependencies($this->getService('artistrepository'), $this->getService('songrepository'));
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\ArtistPresenter', 'onShutdown'],
			$service->onShutdown, NULL, FALSE);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\ArtistPresenter', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}


	public function createServiceApplication__8(): KdybyModule\CliPresenter
	{
		$service = new KdybyModule\CliPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectConsole($this->getService('console.application'));
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['KdybyModule\CliPresenter', 'onShutdown'],
			$service->onShutdown, NULL, FALSE);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['KdybyModule\CliPresenter', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}


	public function createServiceApplication__9(): NetteModule\ErrorPresenter
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'));
		$service->catchExceptions = FALSE;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel($this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('application.presenterFactory')));
		$service->onStartup = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onStartup'],
			$service->onStartup, NULL, FALSE);
		$service->onShutdown = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onShutdown'],
			$service->onShutdown, NULL, FALSE);
		$service->onRequest = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onRequest'],
			$service->onRequest, NULL, FALSE);
		$service->onPresenter = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onPresenter'],
			$service->onPresenter, NULL, FALSE);
		$service->onResponse = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onResponse'],
			$service->onResponse, NULL, FALSE);
		$service->onError = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onError'],
			$service->onError, NULL, FALSE);
		$service->onRequest[] = [
			$this->getService('translation.userLocaleResolver.param'),
			'onRequest',
		];
		$self = $this; $service->onStartup[] = function () use ($self) { $self->getService('translation.default'); };
		$service->onRequest[] = [$this->getService('translation.panel'), 'onRequest'];
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'),
			$this->getService('http.request')->getUrl(), $this->getService('application.presenterFactory'));
		return $service;
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 5, '/home/juransar/public_html/app/../temp/cache/Nette%5CBridges%5CApplicationDI%5CApplicationExtension'));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceArtistrepository(): App\Model\ArtistRepository
	{
		$service = new App\Model\ArtistRepository($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	public function createServiceAuthenticator(): App\Model\Authenticator
	{
		$service = new App\Model\Authenticator($this->getService('userrepository'));
		return $service;
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\IJournal
	{
		$service = new Nette\Caching\Storages\SQLiteJournal('/home/juransar/public_html/app/../temp/cache/journal.s3db');
		return $service;
	}


	public function createServiceCache__storage(): Nette\Caching\IStorage
	{
		$service = new Nette\Caching\Storages\FileStorage('/home/juransar/public_html/app/../temp/cache',
			$this->getService('cache.journal'));
		return $service;
	}


	public function createServiceChordclass(): App\Model\Chord
	{
		$service = new App\Model\Chord;
		return $service;
	}


	public function createServiceChordform(): App\Forms\ChordForm
	{
		$service = new App\Forms\ChordForm($this->getService('doctrine.default.entityManager'),
			$this->getService('songrepository'), $this->getService('artistrepository'));
		return $service;
	}


	public function createServiceChordrepository(): App\Model\ChordRepository
	{
		$service = new App\Model\ChordRepository($this->getService('doctrine.default.entityManager'));
		$service->inject($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	public function createServiceConsole__application(): Kdyby\Console\Application
	{
		$service = new Kdyby\Console\Application('Nette Framework', 'unknown');
		$service->setHelperSet($this->getService('console.helperSet'));
		$service->injectServiceLocator($this);
		return $service;
	}


	public function createServiceConsole__helperSet(): Symfony\Component\Console\Helper\HelperSet
	{
		$service = new Symfony\Component\Console\Helper\HelperSet;
		$service->set(new Symfony\Component\Console\Helper\ProcessHelper);
		$service->set(new Symfony\Component\Console\Helper\DescriptorHelper);
		$service->set(new Symfony\Component\Console\Helper\FormatterHelper);
		$service->set(new Symfony\Component\Console\Helper\QuestionHelper);
		$service->set(new Symfony\Component\Console\Helper\DebugFormatterHelper);
		$service->set(new Kdyby\Console\Helpers\PresenterHelper($this->getService('application.application')));
		$service->set(new Symfony\Component\Console\Helper\ProgressHelper(FALSE));
		$service->set(new Symfony\Component\Console\Helper\DialogHelper(FALSE));
		$service->set(new Kdyby\Console\ContainerHelper($this), 'dic');
		return $service;
	}


	public function createServiceContainer(): Nette\DI\Container
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=test', 'root',
			NULL, ['lazy' => TRUE]);
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		Nette\Database\Helpers::createDebugPanel($service, TRUE, 'default');
		$service->onConnect = $this->getService('events.manager')->createEvent(['Nette\Database\Connection', 'onConnect'],
			$service->onConnect, NULL, FALSE);
		$service->onQuery = $this->getService('events.manager')->createEvent(['Nette\Database\Connection', 'onQuery'],
			$service->onQuery, NULL, FALSE);
		return $service;
	}


	public function createServiceDatabase__default__context(): Nette\Database\Context
	{
		$service = new Nette\Database\Context($this->getService('database.default.connection'),
			$this->getService('database.default.structure'), $this->getService('database.default.conventions'),
			$this->getService('cache.storage'));
		return $service;
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		$service = new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
		return $service;
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		$service = new Nette\Database\Structure($this->getService('database.default.connection'),
			$this->getService('cache.storage'));
		return $service;
	}


	public function createServiceDoctrine__cache__default__dbalResult(): Doctrine\Common\Cache\Cache
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.dbalResult',
			FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.dbalResult_017c63af');
		return $service;
	}


	public function createServiceDoctrine__cache__default__hydration(): Doctrine\Common\Cache\Cache
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.hydration',
			FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.hydration_017c63af');
		return $service;
	}


	public function createServiceDoctrine__cache__default__metadata(): Doctrine\Common\Cache\Cache
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.metadata',
			FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.metadata_017c63af');
		return $service;
	}


	public function createServiceDoctrine__cache__default__ormResult(): Doctrine\Common\Cache\Cache
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.ormResult',
			FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.ormResult_017c63af');
		return $service;
	}


	public function createServiceDoctrine__cache__default__query(): Doctrine\Common\Cache\Cache
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.query',
			FALSE);
		$service->setNamespace('Kdyby_doctrine.cache.default.query_017c63af');
		return $service;
	}


	public function createServiceDoctrine__cli__0(): Doctrine\DBAL\Tools\Console\Command\ImportCommand
	{
		$service = new Doctrine\DBAL\Tools\Console\Command\ImportCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__1(): Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand
	{
		$service = new Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__10(): Kdyby\Doctrine\Console\ValidateSchemaCommand
	{
		$service = new Kdyby\Doctrine\Console\ValidateSchemaCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__11(): Kdyby\Doctrine\Console\InfoCommand
	{
		$service = new Kdyby\Doctrine\Console\InfoCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__2(): Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand
	{
		$service = new Doctrine\ORM\Tools\Console\Command\ClearCache\ResultCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__3(): Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand
	{
		$service = new Doctrine\ORM\Tools\Console\Command\ClearCache\QueryCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__4(): Kdyby\Doctrine\Console\ConvertMappingCommand
	{
		$service = new Kdyby\Doctrine\Console\ConvertMappingCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__5(): Kdyby\Doctrine\Console\GenerateEntitiesCommand
	{
		$service = new Kdyby\Doctrine\Console\GenerateEntitiesCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__6(): Kdyby\Doctrine\Console\SchemaCreateCommand
	{
		$service = new Kdyby\Doctrine\Console\SchemaCreateCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__7(): Kdyby\Doctrine\Console\SchemaUpdateCommand
	{
		$service = new Kdyby\Doctrine\Console\SchemaUpdateCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__8(): Kdyby\Doctrine\Console\SchemaDropCommand
	{
		$service = new Kdyby\Doctrine\Console\SchemaDropCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__9(): Kdyby\Doctrine\Console\GenerateProxiesCommand
	{
		$service = new Kdyby\Doctrine\Console\GenerateProxiesCommand;
		return $service;
	}


	public function createServiceDoctrine__dao($entityName): Kdyby\Doctrine\EntityDao
	{
		$service = $this->getService('doctrine.default.entityManager')->getDao($entityName);
		return $service;
	}


	public function createServiceDoctrine__daoFactory(): Kdyby\Doctrine\EntityDaoFactory
	{
		return new class ($this) implements Kdyby\Doctrine\EntityDaoFactory {
			private $container;


			public function __construct(Container_a93b4fce4c $container)
			{
				$this->container = $container;
			}


			public function create($entityName): Kdyby\Doctrine\EntityDao
			{
				$service = $this->container->getService('doctrine.default.entityManager')->getDao($entityName);
				return $service;
			}

		};
	}


	public function createServiceDoctrine__default__cacheCleaner(): Kdyby\Doctrine\Tools\CacheCleaner
	{
		$service = new Kdyby\Doctrine\Tools\CacheCleaner($this->getService('doctrine.default.entityManager'));
		$service->addCacheStorage($this->getService('annotations.cache.annotations'));
		return $service;
	}


	public function createServiceDoctrine__default__connection(): Kdyby\Doctrine\Connection
	{
		$service = Kdyby\Doctrine\Connection::create([
			'dbname' => 'juransar',
			'host' => '127.0.0.1',
			'port' => NULL,
			'user' => 'juransar',
			'password' => 'juransar',
			'charset' => 'UTF8',
			'driver' => 'pdo_mysql',
			'driverClass' => NULL,
			'options' => NULL,
			'path' => NULL,
			'memory' => NULL,
			'unix_socket' => NULL,
			'platformService' => NULL,
			'defaultTableOptions' => [],
			'schemaFilter' => NULL,
			'debug' => TRUE,
		], $this->getService('doctrine.default.dbalConfiguration'), $this->getService('doctrine.default.evm'));
		if (!$service instanceof Kdyby\Doctrine\Connection) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.connection\', value returned by factory is not Kdyby\Doctrine\Connection type.');
		}
		$service->setSchemaTypes([
			'enum' => 'enum',
			'point' => 'point',
			'lineString' => 'lineString',
			'multiLineString' => 'multiLineString',
			'polygon' => 'polygon',
			'multiPolygon' => 'multiPolygon',
			'geometryCollection' => 'geometryCollection',
		]);
		$service->setDbalTypes([
			'enum' => 'Kdyby\Doctrine\Types\Enum',
			'point' => 'Kdyby\Doctrine\Types\Point',
			'lineString' => 'Kdyby\Doctrine\Types\LineString',
			'multiLineString' => 'Kdyby\Doctrine\Types\MultiLineString',
			'polygon' => 'Kdyby\Doctrine\Types\Polygon',
			'multiPolygon' => 'Kdyby\Doctrine\Types\MultiPolygon',
			'geometryCollection' => 'Kdyby\Doctrine\Types\GeometryCollection',
		]);
		$panel = $this->getService('doctrine.default.diagnosticsPanel')->bindConnection($service);
		$panel->enableLogging();
		return $service;
	}


	public function createServiceDoctrine__default__dbalConfiguration(): Doctrine\DBAL\Configuration
	{
		$service = new Doctrine\DBAL\Configuration;
		$service->setResultCacheImpl($this->getService('doctrine.cache.default.dbalResult'));
		$service->setSQLLogger(new Doctrine\DBAL\Logging\LoggerChain);
		$service->setFilterSchemaAssetsExpression(NULL);
		return $service;
	}


	public function createServiceDoctrine__default__diagnosticsPanel(): Kdyby\Doctrine\Diagnostics\Panel
	{
		$service = new Kdyby\Doctrine\Diagnostics\Panel;
		return $service;
	}


	public function createServiceDoctrine__default__driver__App__annotationsImpl(): Doctrine\Common\Persistence\Mapping\Driver\MappingDriver
	{
		$service = new Kdyby\Doctrine\Mapping\AnnotationDriver(['/home/juransar/public_html/app'],
			$this->getService('annotations.reader'), $this->getService('doctrine.cache.default.metadata'));
		return $service;
	}


	public function createServiceDoctrine__default__driver__Kdyby_Doctrine__annotationsImpl(): Doctrine\Common\Persistence\Mapping\Driver\MappingDriver
	{
		$service = new Kdyby\Doctrine\Mapping\AnnotationDriver([
			'/home/juransar/public_html/vendor/kdyby/doctrine/src/Kdyby/Doctrine/DI/../Entities',
		], $this->getService('annotations.reader'), $this->getService('doctrine.cache.default.metadata'));
		return $service;
	}


	public function createServiceDoctrine__default__entityManager(): Kdyby\Doctrine\EntityManager
	{
		$service = Kdyby\Doctrine\EntityManager::create($this->getService('doctrine.default.connection'),
			$this->getService('doctrine.default.ormConfiguration'), $this->getService('doctrine.default.evm'));
		if (!$service instanceof Kdyby\Doctrine\EntityManager) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.entityManager\', value returned by factory is not Kdyby\Doctrine\EntityManager type.');
		}
		$this->getService('doctrine.default.diagnosticsPanel')->bindEntityManager($service);
		$service->onDaoCreate = $this->getService('events.manager')->createEvent(['Kdyby\Doctrine\EntityManager', 'onDaoCreate'],
			$service->onDaoCreate, NULL, FALSE);
		return $service;
	}


	public function createServiceDoctrine__default__evm(): Kdyby\Events\NamespacedEventManager
	{
		$service = new Kdyby\Events\NamespacedEventManager('Doctrine\ORM\Event::', $this->getService('events.manager'));
		$service->dispatchGlobalEvents = TRUE;
		return $service;
	}


	public function createServiceDoctrine__default__metadataDriver(): Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain
	{
		$service = new Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain;
		$service->addDriver($this->getService('doctrine.default.driver.App.annotationsImpl'),
			'App');
		$service->addDriver($this->getService('doctrine.default.driver.Kdyby_Doctrine.annotationsImpl'),
			'Kdyby\Doctrine');
		return $service;
	}


	public function createServiceDoctrine__default__ormConfiguration(): Kdyby\Doctrine\Configuration
	{
		$service = new Kdyby\Doctrine\Configuration;
		$service->setMetadataCacheImpl($this->getService('doctrine.cache.default.metadata'));
		$service->setQueryCacheImpl($this->getService('doctrine.cache.default.query'));
		$service->setResultCacheImpl($this->getService('doctrine.cache.default.ormResult'));
		$service->setHydrationCacheImpl($this->getService('doctrine.cache.default.hydration'));
		$service->setMetadataDriverImpl($this->getService('doctrine.default.metadataDriver'));
		$service->setClassMetadataFactoryName('Kdyby\Doctrine\Mapping\ClassMetadataFactory');
		$service->setDefaultRepositoryClassName('Kdyby\Doctrine\EntityDao');
		$service->setQueryBuilderClassName('Kdyby\Doctrine\QueryBuilder');
		$service->setRepositoryFactory($this->getService('doctrine.default.repositoryFactory'));
		$service->setProxyDir('/home/juransar/public_html/app/../temp/proxies');
		$service->setProxyNamespace('Kdyby\GeneratedProxy');
		$service->setAutoGenerateProxyClasses(1);
		$service->setEntityNamespaces([]);
		$service->setCustomHydrationModes([]);
		$service->setCustomStringFunctions([]);
		$service->setCustomNumericFunctions([]);
		$service->setCustomDatetimeFunctions([]);
		$service->setDefaultQueryHints([]);
		$service->setNamingStrategy(new Doctrine\ORM\Mapping\UnderscoreNamingStrategy);
		$service->setQuoteStrategy(new Doctrine\ORM\Mapping\DefaultQuoteStrategy);
		$service->setEntityListenerResolver(new Kdyby\Doctrine\Mapping\EntityListenerResolver($this));
		return $service;
	}


	public function createServiceDoctrine__default__repositoryFactory(): Kdyby\Doctrine\RepositoryFactory
	{
		$service = new Kdyby\Doctrine\RepositoryFactory($this);
		$service->setServiceIdsMap([], 'doctrine.repositoryFactory.default.defaultRepositoryFactory');
		return $service;
	}


	public function createServiceDoctrine__default__schemaManager(): Doctrine\DBAL\Schema\AbstractSchemaManager
	{
		$service = $this->getService('doctrine.default.connection')->getSchemaManager();
		return $service;
	}


	public function createServiceDoctrine__default__schemaTool(): Doctrine\ORM\Tools\SchemaTool
	{
		$service = new Doctrine\ORM\Tools\SchemaTool($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	public function createServiceDoctrine__default__schemaValidator(): Doctrine\ORM\Tools\SchemaValidator
	{
		$service = new Doctrine\ORM\Tools\SchemaValidator($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	public function createServiceDoctrine__helper__connection(): Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper
	{
		$service = new Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($this->getService('doctrine.default.connection'));
		return $service;
	}


	public function createServiceDoctrine__helper__entityManager(): Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper
	{
		$service = new Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	public function createServiceDoctrine__registry(): Kdyby\Doctrine\Registry
	{
		$service = new Kdyby\Doctrine\Registry(['default' => 'doctrine.default.connection'],
			['default' => 'doctrine.default.entityManager'], 'default', 'default',
			$this);
		return $service;
	}


	public function createServiceDoctrine__repositoryFactory__default__defaultRepositoryFactory(): Kdyby\Doctrine\DI\IRepositoryFactory
	{
		return new class ($this) implements Kdyby\Doctrine\DI\IRepositoryFactory {
			private $container;


			public function __construct(Container_a93b4fce4c $container)
			{
				$this->container = $container;
			}


			public function create(Doctrine\ORM\EntityManagerInterface $entityManager, Doctrine\ORM\Mapping\ClassMetadata $classMetadata): Kdyby\Doctrine\EntityDao
			{
				$service = new Kdyby\Doctrine\EntityDao($entityManager, $classMetadata);
				return $service;
			}

		};
	}


	public function createServiceEvents__manager(): Kdyby\Events\LazyEventManager
	{
		$service = new Kdyby\Events\LazyEventManager([], $this);
		Kdyby\Events\Diagnostics\Panel::register($service, $this)->renderPanel = TRUE;
		return $service;
	}


	public function createServiceEvents__symfonyProxy(): Symfony\Component\EventDispatcher\EventDispatcherInterface
	{
		$service = new Kdyby\Events\SymfonyDispatcher($this->getService('events.manager'));
		return $service;
	}


	public function createServiceHttp__context(): Nette\Http\Context
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		trigger_error('Service http.context is deprecated.', 16384);
		return $service;
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		return $service;
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\ILatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\ILatteFactory {
			private $container;


			public function __construct(Container_a93b4fce4c $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/home/juransar/public_html/app/../temp/cache/latte');
				$service->setAutoRefresh(TRUE);
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = FALSE;
				$service->onCompile = $this->container->getService('events.manager')->createEvent(['Latte\Engine', 'onCompile'],
					$service->onCompile, NULL, FALSE);
				$service->onCompile[] = function($engine) { Kdyby\Translation\Latte\TranslateMacros::install($engine->getCompiler()); };
				$service->addFilter('translate', [$this->container->getService('translation.helpers'), 'translate']);
				$service->addFilter('getTranslator', [$this->container->getService('translation.helpers'), 'getTranslator']);
				return $service;
			}

		};
	}


	public function createServiceLatte__templateFactory(): Nette\Application\UI\ITemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'),
			$this->getService('http.request'), $this->getService('security.user'),
			$this->getService('cache.storage'), NULL);
		return $service;
	}


	public function createServiceLoginform(): App\Forms\LoginForm
	{
		$service = new App\Forms\LoginForm($this->getService('security.user'), $this->getService('authenticator'));
		return $service;
	}


	public function createServiceLoginpresenter(): App\Presenters\LoginPresenter
	{
		$service = new App\Presenters\LoginPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->loginManager = $this->getService('loginform');
		$service->invalidLinkMode = 5;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\LoginPresenter', 'onShutdown'],
			$service->onShutdown, NULL, FALSE);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\LoginPresenter', 'onAnchor'],
			$service->onAnchor, NULL, FALSE);
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\IMailer
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	public function createServiceOnepart(): App\Model\OnePart
	{
		$service = new App\Model\OnePart;
		$service->inject($this->getService('chordrepository'), $this->getService('chordclass'));
		return $service;
	}


	public function createServiceRouting__router(): Nette\Application\IRouter
	{
		$service = App\RouterFactory::createRouter();
		return $service;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('authenticator'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		$service->onLoggedIn = $this->getService('events.manager')->createEvent(['Nette\Security\User', 'onLoggedIn'],
			$service->onLoggedIn, NULL, FALSE);
		$service->onLoggedOut = $this->getService('events.manager')->createEvent(['Nette\Security\User', 'onLoggedOut'],
			$service->onLoggedOut, NULL, FALSE);
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\IUserStorage
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	public function createServiceSongform(): App\Forms\SongForm
	{
		$service = new App\Forms\SongForm($this->getService('doctrine.default.entityManager'),
			$this->getService('songrepository'), $this->getService('artistrepository'),
			$this->getService('chordrepository'));
		return $service;
	}


	public function createServiceSongrepository(): App\Model\SongRepository
	{
		$service = new App\Model\SongRepository($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		$service = Tracy\Debugger::getBar();
		return $service;
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		$service = Tracy\Debugger::getBlueScreen();
		return $service;
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		$service = Tracy\Debugger::getLogger();
		return $service;
	}


	public function createServiceTranslation__catalogueCompiler(): Kdyby\Translation\CatalogueCompiler
	{
		$service = new Kdyby\Translation\CatalogueCompiler(new Kdyby\Translation\Caching\PhpFileStorage('/home/juransar/public_html/app/../temp/cache',
			$this->getService('cache.journal')), $this->getService('translation.fallbackResolver'),
			$this->getService('translation.catalogueFactory'));
		$service->enableDebugMode();
		return $service;
	}


	public function createServiceTranslation__catalogueFactory(): Kdyby\Translation\CatalogueFactory
	{
		$service = new Kdyby\Translation\CatalogueFactory($this->getService('translation.fallbackResolver'),
			$this->getService('translation.loader'));
		return $service;
	}


	public function createServiceTranslation__console__extract(): Kdyby\Translation\Console\ExtractCommand
	{
		$service = new Kdyby\Translation\Console\ExtractCommand;
		$service->defaultOutputDir = '/home/juransar/public_html/app/lang';
		return $service;
	}


	public function createServiceTranslation__default(): Kdyby\Translation\Translator
	{
		$service = new Kdyby\Translation\Translator($this->getService('translation.userLocaleResolver'),
			$this->getService('translation.selector'), $this->getService('translation.catalogueCompiler'),
			$this->getService('translation.fallbackResolver'), $this->getService('translation.loader'));
		$this->getService('translation.userLocaleResolver.param')->setTranslator($service);
		$service->setDefaultLocale('en');
		$service->setLocaleWhitelist(NULL);
		$service->setFallbackLocales(['en_US']);
		$this->getService('translation.panel')->register($service);
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.uk.xlf',
			'uk', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.sl.xlf',
			'sl', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.af.xlf',
			'af', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.en.xlf',
			'en', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.lv.xlf',
			'lv', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.ar.xlf',
			'ar', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.el.xlf',
			'el', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.ru.xlf',
			'ru', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.fr.xlf',
			'fr', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.vi.xlf',
			'vi', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf',
			'pt_BR', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.gl.xlf',
			'gl', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.id.xlf',
			'id', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.ca.xlf',
			'ca', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.mn.xlf',
			'mn', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.ro.xlf',
			'ro', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.eu.xlf',
			'eu', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.no.xlf',
			'no', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.hy.xlf',
			'hy', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.lb.xlf',
			'lb', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.nl.xlf',
			'nl', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.it.xlf',
			'it', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.es.xlf',
			'es', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.pl.xlf',
			'pl', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.da.xlf',
			'da', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.hr.xlf',
			'hr', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.et.xlf',
			'et', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.hu.xlf',
			'hu', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf',
			'zh_CN', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.fi.xlf',
			'fi', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.sk.xlf',
			'sk', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.tr.xlf',
			'tr', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.fa.xlf',
			'fa', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf',
			'sr_Cyrl', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.de.xlf',
			'de', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.ja.xlf',
			'ja', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf',
			'zh_TW', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.he.xlf',
			'he', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.nn.xlf',
			'nn', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.th.xlf',
			'th', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.pt.xlf',
			'pt', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.sq.xlf',
			'sq', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.sv.xlf',
			'sv', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.cs.xlf',
			'cs', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.lt.xlf',
			'lt', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.az.xlf',
			'az', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf',
			'sr_Latn', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.bg.xlf',
			'bg', 'validators');
		$service->addResource('xlf', '/home/juransar/public_html/vendor/symfony/validator/Resources/translations/validators.cy.xlf',
			'cy', 'validators');
		return $service;
	}


	public function createServiceTranslation__dumper__csv(): Symfony\Component\Translation\Dumper\CsvFileDumper
	{
		$service = new Symfony\Component\Translation\Dumper\CsvFileDumper;
		return $service;
	}


	public function createServiceTranslation__dumper__ini(): Symfony\Component\Translation\Dumper\IniFileDumper
	{
		$service = new Symfony\Component\Translation\Dumper\IniFileDumper;
		return $service;
	}


	public function createServiceTranslation__dumper__mo(): Symfony\Component\Translation\Dumper\MoFileDumper
	{
		$service = new Symfony\Component\Translation\Dumper\MoFileDumper;
		return $service;
	}


	public function createServiceTranslation__dumper__neon(): Kdyby\Translation\Dumper\NeonFileDumper
	{
		$service = new Kdyby\Translation\Dumper\NeonFileDumper;
		return $service;
	}


	public function createServiceTranslation__dumper__php(): Symfony\Component\Translation\Dumper\PhpFileDumper
	{
		$service = new Symfony\Component\Translation\Dumper\PhpFileDumper;
		return $service;
	}


	public function createServiceTranslation__dumper__po(): Symfony\Component\Translation\Dumper\PoFileDumper
	{
		$service = new Symfony\Component\Translation\Dumper\PoFileDumper;
		return $service;
	}


	public function createServiceTranslation__dumper__qt(): Symfony\Component\Translation\Dumper\QtFileDumper
	{
		$service = new Symfony\Component\Translation\Dumper\QtFileDumper;
		return $service;
	}


	public function createServiceTranslation__dumper__res(): Symfony\Component\Translation\Dumper\IcuResFileDumper
	{
		$service = new Symfony\Component\Translation\Dumper\IcuResFileDumper;
		return $service;
	}


	public function createServiceTranslation__dumper__xliff(): Symfony\Component\Translation\Dumper\XliffFileDumper
	{
		$service = new Symfony\Component\Translation\Dumper\XliffFileDumper;
		return $service;
	}


	public function createServiceTranslation__dumper__yml(): Symfony\Component\Translation\Dumper\YamlFileDumper
	{
		$service = new Symfony\Component\Translation\Dumper\YamlFileDumper;
		return $service;
	}


	public function createServiceTranslation__extractor(): Symfony\Component\Translation\Extractor\ChainExtractor
	{
		$service = new Symfony\Component\Translation\Extractor\ChainExtractor;
		$service->addExtractor('latte', $this->getService('translation.extractor.latte'));
		return $service;
	}


	public function createServiceTranslation__extractor__latte(): Kdyby\Translation\Extractors\LatteExtractor
	{
		$service = new Kdyby\Translation\Extractors\LatteExtractor;
		return $service;
	}


	public function createServiceTranslation__fallbackResolver(): Kdyby\Translation\FallbackResolver
	{
		$service = new Kdyby\Translation\FallbackResolver;
		return $service;
	}


	public function createServiceTranslation__helpers(): Kdyby\Translation\TemplateHelpers
	{
		$service = $this->getService('translation.default')->createTemplateHelpers();
		return $service;
	}


	public function createServiceTranslation__loader(): Kdyby\Translation\TranslationLoader
	{
		$service = new Kdyby\Translation\TranslationLoader;
		$service->injectServiceIds([
			'php' => 'translation.loader.php',
			'yml' => 'translation.loader.yml',
			'xlf' => 'translation.loader.xlf',
			'po' => 'translation.loader.po',
			'mo' => 'translation.loader.mo',
			'ts' => 'translation.loader.ts',
			'csv' => 'translation.loader.csv',
			'res' => 'translation.loader.res',
			'dat' => 'translation.loader.dat',
			'ini' => 'translation.loader.ini',
			'json' => 'translation.loader.json',
			'neon' => 'translation.loader.neon',
		], $this);
		return $service;
	}


	public function createServiceTranslation__loader__csv(): Symfony\Component\Translation\Loader\CsvFileLoader
	{
		$service = new Symfony\Component\Translation\Loader\CsvFileLoader;
		return $service;
	}


	public function createServiceTranslation__loader__dat(): Symfony\Component\Translation\Loader\IcuDatFileLoader
	{
		$service = new Symfony\Component\Translation\Loader\IcuDatFileLoader;
		return $service;
	}


	public function createServiceTranslation__loader__ini(): Symfony\Component\Translation\Loader\IniFileLoader
	{
		$service = new Symfony\Component\Translation\Loader\IniFileLoader;
		return $service;
	}


	public function createServiceTranslation__loader__json(): Symfony\Component\Translation\Loader\JsonFileLoader
	{
		$service = new Symfony\Component\Translation\Loader\JsonFileLoader;
		return $service;
	}


	public function createServiceTranslation__loader__mo(): Symfony\Component\Translation\Loader\MoFileLoader
	{
		$service = new Symfony\Component\Translation\Loader\MoFileLoader;
		return $service;
	}


	public function createServiceTranslation__loader__neon(): Kdyby\Translation\Loader\NeonFileLoader
	{
		$service = new Kdyby\Translation\Loader\NeonFileLoader;
		return $service;
	}


	public function createServiceTranslation__loader__php(): Symfony\Component\Translation\Loader\PhpFileLoader
	{
		$service = new Symfony\Component\Translation\Loader\PhpFileLoader;
		return $service;
	}


	public function createServiceTranslation__loader__po(): Symfony\Component\Translation\Loader\PoFileLoader
	{
		$service = new Symfony\Component\Translation\Loader\PoFileLoader;
		return $service;
	}


	public function createServiceTranslation__loader__res(): Symfony\Component\Translation\Loader\IcuResFileLoader
	{
		$service = new Symfony\Component\Translation\Loader\IcuResFileLoader;
		return $service;
	}


	public function createServiceTranslation__loader__ts(): Symfony\Component\Translation\Loader\QtFileLoader
	{
		$service = new Symfony\Component\Translation\Loader\QtFileLoader;
		return $service;
	}


	public function createServiceTranslation__loader__xlf(): Symfony\Component\Translation\Loader\XliffFileLoader
	{
		$service = new Symfony\Component\Translation\Loader\XliffFileLoader;
		return $service;
	}


	public function createServiceTranslation__loader__yml(): Symfony\Component\Translation\Loader\YamlFileLoader
	{
		$service = new Symfony\Component\Translation\Loader\YamlFileLoader;
		return $service;
	}


	public function createServiceTranslation__panel(): Kdyby\Translation\Diagnostics\Panel
	{
		$service = new Kdyby\Translation\Diagnostics\Panel('/home/juransar/public_html');
		$service->setLocaleWhitelist(NULL);
		$service->setLocaleResolvers([
			$this->getService('translation.userLocaleResolver.param'),
			$this->getService('translation.userLocaleResolver.acceptHeader'),
		]);
		return $service;
	}


	public function createServiceTranslation__selector(): Symfony\Component\Translation\MessageSelector
	{
		$service = new Symfony\Component\Translation\MessageSelector;
		return $service;
	}


	public function createServiceTranslation__userLocaleResolver(): Kdyby\Translation\IUserLocaleResolver
	{
		$service = new Kdyby\Translation\LocaleResolver\ChainResolver;
		$service->addResolver($this->getService('translation.userLocaleResolver.acceptHeader'));
		$service->addResolver($this->getService('translation.userLocaleResolver.param'));
		return $service;
	}


	public function createServiceTranslation__userLocaleResolver__acceptHeader(): Kdyby\Translation\LocaleResolver\AcceptHeaderResolver
	{
		$service = new Kdyby\Translation\LocaleResolver\AcceptHeaderResolver($this->getService('http.request'));
		return $service;
	}


	public function createServiceTranslation__userLocaleResolver__param(): Kdyby\Translation\LocaleResolver\LocaleParamResolver
	{
		$service = new Kdyby\Translation\LocaleResolver\LocaleParamResolver;
		return $service;
	}


	public function createServiceTranslation__userLocaleResolver__session(): Kdyby\Translation\LocaleResolver\SessionResolver
	{
		$service = new Kdyby\Translation\LocaleResolver\SessionResolver($this->getService('session.session'),
			$this->getService('http.response'));
		return $service;
	}


	public function createServiceTranslation__writer(): Symfony\Component\Translation\Writer\TranslationWriter
	{
		$service = new Symfony\Component\Translation\Writer\TranslationWriter;
		$service->addDumper('php', $this->getService('translation.dumper.php'));
		$service->addDumper('xliff', $this->getService('translation.dumper.xliff'));
		$service->addDumper('po', $this->getService('translation.dumper.po'));
		$service->addDumper('mo', $this->getService('translation.dumper.mo'));
		$service->addDumper('yml', $this->getService('translation.dumper.yml'));
		$service->addDumper('neon', $this->getService('translation.dumper.neon'));
		$service->addDumper('qt', $this->getService('translation.dumper.qt'));
		$service->addDumper('csv', $this->getService('translation.dumper.csv'));
		$service->addDumper('ini', $this->getService('translation.dumper.ini'));
		$service->addDumper('res', $this->getService('translation.dumper.res'));
		return $service;
	}


	public function createServiceUserform(): App\Forms\UserForm
	{
		$service = new App\Forms\UserForm($this->getService('userrepository'), $this->getService('doctrine.default.entityManager'));
		return $service;
	}


	public function createServiceUserrepository(): App\Model\UserRepository
	{
		$service = new App\Model\UserRepository($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	public function createServiceValidator__annotationsLoader(): Symfony\Component\Validator\Mapping\Loader\AnnotationLoader
	{
		$service = new Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->getService('annotations.reader'));
		return $service;
	}


	public function createServiceValidator__cache(): Symfony\Component\Validator\Mapping\Cache\CacheInterface
	{
		$service = new Symfony\Component\Validator\Mapping\Cache\DoctrineCache($this->getService('validator.cache.validator'));
		return $service;
	}


	public function createServiceValidator__cache__validator(): Doctrine\Common\Cache\Cache
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Validator',
			TRUE);
		$service->setNamespace('Kdyby_validator.cache.validator_017c63af');
		return $service;
	}


	public function createServiceValidator__constraint__email(): Symfony\Component\Validator\Constraints\EmailValidator
	{
		$service = new Symfony\Component\Validator\Constraints\EmailValidator(FALSE);
		return $service;
	}


	public function createServiceValidator__constraint__expression(): Symfony\Component\Validator\Constraints\ExpressionValidator
	{
		$service = new Symfony\Component\Validator\Constraints\ExpressionValidator;
		return $service;
	}


	public function createServiceValidator__constraintValidatorFactory(): Symfony\Component\Validator\ConstraintValidatorFactoryInterface
	{
		$service = new Kdyby\Validator\ConstraintValidatorFactory([
			1 => 'validator.constraint.email',
			'Symfony\Component\Validator\Constraints\EmailValidator' => 'validator.constraint.email',
			'validator.expression' => 'validator.constraint.expression',
			'Symfony\Component\Validator\Constraints\ExpressionValidator' => 'validator.constraint.expression',
		], $this);
		return $service;
	}


	public function createServiceValidator__contextFactory(): Symfony\Component\Validator\Context\ExecutionContextFactoryInterface
	{
		$service = new Symfony\Component\Validator\Context\ExecutionContextFactory($this->getService('translation.default'),
			NULL);
		return $service;
	}


	public function createServiceValidator__loader(): Symfony\Component\Validator\Mapping\Loader\LoaderInterface
	{
		$service = new Symfony\Component\Validator\Mapping\Loader\LoaderChain([$this->getService('validator.annotationsLoader')]);
		return $service;
	}


	public function createServiceValidator__metadataFactory(): Symfony\Component\Validator\Mapping\Factory\MetadataFactoryInterface
	{
		$service = new Symfony\Component\Validator\Mapping\Factory\LazyLoadingMetadataFactory($this->getService('validator.loader'),
			$this->getService('validator.cache'));
		return $service;
	}


	public function createServiceValidator__validator(): Symfony\Component\Validator\Validator\ValidatorInterface
	{
		$service = new Symfony\Component\Validator\Validator\RecursiveValidator($this->getService('validator.contextFactory'),
			$this->getService('validator.metadataFactory'), $this->getService('validator.constraintValidatorFactory'),
			[]);
		return $service;
	}


	public function initialize()
	{
		Kdyby\Doctrine\Proxy\ProxyAutoloader::create('/home/juransar/public_html/app/../temp/proxies', 'Kdyby\GeneratedProxy')->register();Doctrine\Common\Annotations\AnnotationRegistry::registerLoader("class_exists");
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		$this->getService('events.manager')->createEvent(['Nette\DI\Container', 'onInitialize'])->dispatch($this);
		$this->getService('http.response')->setHeader('X-Powered-By', 'Nette Framework');
		$this->getService('http.response')->setHeader('Content-Type', 'text/html; charset=utf-8');
		$this->getService('http.response')->setHeader('X-Frame-Options', 'SAMEORIGIN');
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		Tracy\Debugger::$editorMapping = [];
		Tracy\Debugger::setLogger($this->getService('tracy.logger'));
		if ($tmp = $this->getByType("Nette\Http\Session", FALSE)) { $tmp->start(); Tracy\Debugger::dispatch(); };;

		Kdyby\Doctrine\Diagnostics\Panel::registerBluescreen($this);
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = '/home/juransar/public_html/vendor/kdyby/doctrine/src/Kdyby/Doctrine';
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = '/home/juransar/public_html/vendor/doctrine';
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = '/home/juransar/public_html/app/../temp/proxies';

		Kdyby\Translation\Diagnostics\Panel::registerBluescreen();
	}

}
