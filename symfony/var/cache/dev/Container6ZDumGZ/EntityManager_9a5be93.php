<?php

namespace Container6ZDumGZ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder35398 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer19b1c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6b8cf = [
        
    ];

    public function getConnection()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getConnection', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getMetadataFactory', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getExpressionBuilder', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'beginTransaction', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getCache', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getCache();
    }

    public function transactional($func)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'transactional', array('func' => $func), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'wrapInTransaction', array('func' => $func), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'commit', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->commit();
    }

    public function rollback()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'rollback', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getClassMetadata', array('className' => $className), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'createQuery', array('dql' => $dql), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'createNamedQuery', array('name' => $name), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'createQueryBuilder', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'flush', array('entity' => $entity), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'clear', array('entityName' => $entityName), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->clear($entityName);
    }

    public function close()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'close', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->close();
    }

    public function persist($entity)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'persist', array('entity' => $entity), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'remove', array('entity' => $entity), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'refresh', array('entity' => $entity), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'detach', array('entity' => $entity), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'merge', array('entity' => $entity), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getRepository', array('entityName' => $entityName), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'contains', array('entity' => $entity), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getEventManager', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getConfiguration', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'isOpen', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getUnitOfWork', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getProxyFactory', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'initializeObject', array('obj' => $obj), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'getFilters', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'isFiltersStateClean', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'hasFilters', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return $this->valueHolder35398->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer19b1c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder35398) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder35398 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder35398->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, '__get', ['name' => $name], $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        if (isset(self::$publicProperties6b8cf[$name])) {
            return $this->valueHolder35398->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35398;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder35398;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35398;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder35398;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, '__isset', array('name' => $name), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35398;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder35398;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, '__unset', array('name' => $name), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35398;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder35398;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, '__clone', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        $this->valueHolder35398 = clone $this->valueHolder35398;
    }

    public function __sleep()
    {
        $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, '__sleep', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;

        return array('valueHolder35398');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer19b1c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer19b1c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer19b1c && ($this->initializer19b1c->__invoke($valueHolder35398, $this, 'initializeProxy', array(), $this->initializer19b1c) || 1) && $this->valueHolder35398 = $valueHolder35398;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder35398;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder35398;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
