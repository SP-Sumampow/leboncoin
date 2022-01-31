<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'behat/transliterator' => 'v1.3.0@3c4ec1d77c3d05caa1f0bf8fb3aae4845005c7fc',
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.2.1@e927fc2410c8723d053b8032e591cdff76587cdb',
  'doctrine/data-fixtures' => '1.5.2@51c1890e8c5467c421c7cab4579f059ebf720278',
  'doctrine/dbal' => '3.3.1@5b6eb6c8ce65ebdc60b0c0960a676cf76758dbf2',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.5.5@5c086cbbe5327937dd6f90da075f7d421b0f28bc',
  'doctrine/doctrine-fixtures-bundle' => '3.4.1@31ba202bebce0b66fe830f49f96228dcdc1503e7',
  'doctrine/doctrine-migrations-bundle' => '3.2.1@c1b10bc1466e08bba82640e49c7bbcce0c9853c2',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.2@9c50f840f257bbb941e6f4a0e94ccf5db5c3f76c',
  'doctrine/migrations' => '3.4.1@e7df670aa9565b435ffec636cebdb4d0a1987f10',
  'doctrine/orm' => '2.11.0@bfed8cb6ed448f4ab1ea3fff06e4d6c44439e4ef',
  'doctrine/persistence' => '2.3.0@f8af155c1e7963f3d2b4415097d55757bbaa53d8',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'gedmo/doctrine-extensions' => 'v3.5.0@dd1a1438a10e92910e5c510f631a568c19e6c00e',
  'laminas/laminas-code' => '4.5.1@6fd96d4d913571a2cd056a27b123fa28cb90ac4e',
  'monolog/monolog' => '2.3.5@fd4380d6fc37626e2f799f29d91195040137eba9',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.0@93ebd0014cab80c4ea9f5e297ea48672f1b87706',
  'phpstan/phpdoc-parser' => '1.2.0@dbc093d7af60eff5cd575d2ed761b15ed40bd08e',
  'psr/cache' => '3.0.0@aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
  'psr/container' => '2.0.2@c71ecc56dfe541dbd90c5360474fbc405f8d5963',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '2.0.1@84b159194ecfd7eaa472280213976e96415433f7',
  'psr/log' => '3.0.0@fe5ea303b0887d5caefd3d431c3e61ad47037001',
  'sensio/framework-extra-bundle' => 'v6.2.6@6bd976c99ef3f78e31c9490a10ba6dd8901076eb',
  'stof/doctrine-extensions-bundle' => 'v1.7.0@a2bffca41974d1c968557b343e269a60a8d5ffa4',
  'symfony/asset' => 'v6.0.3@a926033206f3644b1289f4eb09dc0989c7080c21',
  'symfony/cache' => 'v6.0.3@4d2edb87334c1fb2fade9382c70e2284204f0b8b',
  'symfony/cache-contracts' => 'v3.0.0@2f7463f156cf9c665d9317e21a809c3bbff5754e',
  'symfony/config' => 'v6.0.3@c14f32ae4cd2a3c29d8825c5093463ac08ade7d8',
  'symfony/console' => 'v6.0.3@22e8efd019c3270c4f79376234a3f8752cd25490',
  'symfony/dependency-injection' => 'v6.0.3@bf53dbf6e8f3eec14f44c53fa4c3b4905ab19ee4',
  'symfony/deprecation-contracts' => 'v3.0.0@c726b64c1ccfe2896cb7df2e1331c357ad1c8ced',
  'symfony/doctrine-bridge' => 'v6.0.3@d1d9d54717d3125119e09c9c34b337364e47960e',
  'symfony/dotenv' => 'v6.0.3@45c47b67cc92fbcf9b1d40f08e970a136f75559f',
  'symfony/error-handler' => 'v6.0.3@20343b3bad7ebafa38138ddcb97290a24722b57b',
  'symfony/event-dispatcher' => 'v6.0.3@6472ea2dd415e925b90ca82be64b8bc6157f3934',
  'symfony/event-dispatcher-contracts' => 'v3.0.0@aa5422287b75594b90ee9cd807caf8f0df491385',
  'symfony/expression-language' => 'v6.0.3@7adc90f7f09659606996f78de22830b5a2db5be4',
  'symfony/filesystem' => 'v6.0.3@6ae49c4fda17322171a2b8dc5f70bc6edbc498e1',
  'symfony/finder' => 'v6.0.3@8661b74dbabc23223f38c9b99d3f8ade71170430',
  'symfony/flex' => 'v2.1.4@110e8928b6e719e9b9f146c8fd92c41a4b74a3ac',
  'symfony/form' => 'v6.0.3@201f7ae26e74340c38047472cd23cfe6bd99d1f5',
  'symfony/framework-bundle' => 'v6.0.4@12d8bfaa3dec658da80125d37633221ce1e40f8f',
  'symfony/http-client' => 'v6.0.3@45b95017f6a20d564584bdee6a376c9a79caa316',
  'symfony/http-client-contracts' => 'v3.0.0@265f03fed057044a8e4dc159aa33596d0f48ed3f',
  'symfony/http-foundation' => 'v6.0.3@ad157299ced81a637fade1efcadd688d6deba5c1',
  'symfony/http-kernel' => 'v6.0.4@9dce179ce52b0f4f669c07fd5e465e5d809a5d3b',
  'symfony/intl' => 'v6.0.3@eeddf6ca4cb4767e554c82182d1ddd5a7ff94f4d',
  'symfony/mailer' => 'v6.0.3@d958befe7dbee9d2b2157ef6dfa9b103efa94f82',
  'symfony/mime' => 'v6.0.3@2cd9601efd040e56f43360daa68f3c6b0534923a',
  'symfony/monolog-bridge' => 'v6.0.3@10d90ee25c6a76c12d4bbe8721e354c287e177da',
  'symfony/monolog-bundle' => 'v3.7.1@fde12fc628162787a4e53877abadc30047fd868b',
  'symfony/notifier' => 'v6.0.3@fa504891d47679f2696e26c98afe2e156b24d371',
  'symfony/options-resolver' => 'v6.0.3@51f7006670febe4cbcbae177cbffe93ff833250d',
  'symfony/password-hasher' => 'v6.0.3@4d04edcbcee4a97f39c72d1cf6149681d634e63f',
  'symfony/polyfill-intl-grapheme' => 'v1.24.0@81b86b50cf841a64252b439e738e97f4a34e2783',
  'symfony/polyfill-intl-icu' => 'v1.24.0@c023a439b8551e320cc3c8433b198e408a623af1',
  'symfony/polyfill-intl-idn' => 'v1.24.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.24.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.24.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php81' => 'v1.24.0@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/process' => 'v6.0.3@298ed357274c1868c20a0061df256a1250a6c4af',
  'symfony/property-access' => 'v6.0.3@428ffd96c60bf2c13b35182f704b24db6712c897',
  'symfony/property-info' => 'v6.0.3@46e4e6d254f80d103689f2bb103b52a6f5ac2fe2',
  'symfony/proxy-manager-bridge' => 'v6.0.3@51ba60d4340fd91dd42c9caad76a414a521fbee4',
  'symfony/routing' => 'v6.0.3@b1debdf7a40e6bc7eee0f363ab9dd667fe04f099',
  'symfony/runtime' => 'v6.0.3@3b1ee78e883101439eb6c033feb43a5eea7fe190',
  'symfony/security-bundle' => 'v6.0.3@e655f29f1be47420e233d2c40d21f025bf592750',
  'symfony/security-core' => 'v6.0.3@eccb5675df44b2d7f3ad3a936c09ee8cb8340de5',
  'symfony/security-csrf' => 'v6.0.3@fcf01e56fba0e7843da3205b9d05e4e86d3ef1f9',
  'symfony/security-http' => 'v6.0.3@cab2eee865c2d7b46f3e828fba546a8602a95472',
  'symfony/serializer' => 'v6.0.3@8a81ecc4f0ca229961c6c2d699e634bf6f80c4fc',
  'symfony/service-contracts' => 'v3.0.0@36715ebf9fb9db73db0cb24263c79077c6fe8603',
  'symfony/stopwatch' => 'v6.0.3@6835045bb9f00fa4486ea4f1bcaf623be761556f',
  'symfony/string' => 'v6.0.3@522144f0c4c004c80d56fa47e40e17028e2eefc2',
  'symfony/translation' => 'v6.0.3@71bb15335798f8c4da110911bcf2d2fead7a430d',
  'symfony/translation-contracts' => 'v3.0.0@1b6ea5a7442af5a12dba3dbd6d71034b5b234e77',
  'symfony/twig-bridge' => 'v6.0.3@31a4ec953c20299cc828eb6a1ccdf86d7ecbe22c',
  'symfony/twig-bundle' => 'v6.0.3@bee311f9b10c05262536ff954fe7a1c3f7e8d497',
  'symfony/validator' => 'v6.0.3@35f3614f605227ad16e03cab9fb9815ba05f5878',
  'symfony/var-dumper' => 'v6.0.3@7b701676fc64f9ef11f9b4870f16b48f66be4834',
  'symfony/var-exporter' => 'v6.0.3@1261b2d4a23081cb2b59a4caa311a5ac43b845b6',
  'symfony/web-link' => 'v6.0.3@52d6af6c4476c8ebdef968cb39030826253eb5e4',
  'symfony/yaml' => 'v6.0.3@e77f3ea0b21141d771d4a5655faa54f692b34af5',
  'symfonycasts/verify-email-bundle' => 'v1.7.0@7b17b150c39d115141cb462862baac9c281a3de9',
  'twig/extra-bundle' => 'v3.3.7@e0cc9c35a0650006b0da232a3f749cc060c65d3b',
  'twig/twig' => 'v3.3.7@8f168c6ffa3ce76d1786b3cd52275424a3fc675b',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '9.2.10@d5850aaf931743067f4bfc1ae4cbd06468400687',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.13@597cb647654ede35e43b137926dfdfef0fb11743',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => 'v6.0.3@0ec66df981406fd2c9e41acbb526249bd18a0123',
  'symfony/css-selector' => 'v6.0.3@1955d595c12c111629cc814d3f2a2ff13580508a',
  'symfony/debug-bundle' => 'v6.0.3@880317aa3b2962cc2e7af67b8a6ed69db84ed848',
  'symfony/dom-crawler' => 'v6.0.3@24d9de5965b8b043ea13ef234087543c9740641c',
  'symfony/maker-bundle' => 'v1.36.4@716eee9c8b10b33e682df1b7d80b9061887e9691',
  'symfony/phpunit-bridge' => 'v6.0.3@81f5e8e453433e0182a49ca45d4734cb3a2f818f',
  'symfony/web-profiler-bundle' => 'v6.0.3@52925a842e202aae4b0b2257023783fb67b5687b',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  'symfony/polyfill-php73' => '*@',
  'symfony/polyfill-php74' => '*@',
  'symfony/polyfill-php80' => '*@',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
