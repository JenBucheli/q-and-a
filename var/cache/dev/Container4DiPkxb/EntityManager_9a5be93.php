<?php

namespace Container4DiPkxb;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8c30d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera27a8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties23af2 = [
        
    ];

    public function getConnection()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getConnection', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getMetadataFactory', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getExpressionBuilder', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'beginTransaction', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getCache', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getCache();
    }

    public function transactional($func)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'transactional', array('func' => $func), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->transactional($func);
    }

    public function commit()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'commit', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->commit();
    }

    public function rollback()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'rollback', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getClassMetadata', array('className' => $className), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'createQuery', array('dql' => $dql), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'createNamedQuery', array('name' => $name), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'createQueryBuilder', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'flush', array('entity' => $entity), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'clear', array('entityName' => $entityName), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->clear($entityName);
    }

    public function close()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'close', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->close();
    }

    public function persist($entity)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'persist', array('entity' => $entity), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'remove', array('entity' => $entity), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'refresh', array('entity' => $entity), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'detach', array('entity' => $entity), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'merge', array('entity' => $entity), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getRepository', array('entityName' => $entityName), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'contains', array('entity' => $entity), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getEventManager', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getConfiguration', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'isOpen', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getUnitOfWork', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getProxyFactory', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'initializeObject', array('obj' => $obj), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'getFilters', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'isFiltersStateClean', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'hasFilters', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return $this->valueHolder8c30d->hasFilters();
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

        $instance->initializera27a8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8c30d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8c30d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8c30d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, '__get', ['name' => $name], $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        if (isset(self::$publicProperties23af2[$name])) {
            return $this->valueHolder8c30d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c30d;

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

        $targetObject = $this->valueHolder8c30d;
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
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c30d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8c30d;
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
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, '__isset', array('name' => $name), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c30d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8c30d;
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
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, '__unset', array('name' => $name), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c30d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8c30d;
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
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, '__clone', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        $this->valueHolder8c30d = clone $this->valueHolder8c30d;
    }

    public function __sleep()
    {
        $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, '__sleep', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;

        return array('valueHolder8c30d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera27a8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera27a8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera27a8 && ($this->initializera27a8->__invoke($valueHolder8c30d, $this, 'initializeProxy', array(), $this->initializera27a8) || 1) && $this->valueHolder8c30d = $valueHolder8c30d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8c30d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8c30d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
