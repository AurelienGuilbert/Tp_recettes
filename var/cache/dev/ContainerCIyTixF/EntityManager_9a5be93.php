<?php

namespace ContainerCIyTixF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbbb31 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer546d7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa5712 = [
        
    ];

    public function getConnection()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getConnection', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getMetadataFactory', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getExpressionBuilder', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'beginTransaction', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getCache', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getCache();
    }

    public function transactional($func)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'transactional', array('func' => $func), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'wrapInTransaction', array('func' => $func), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'commit', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->commit();
    }

    public function rollback()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'rollback', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getClassMetadata', array('className' => $className), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'createQuery', array('dql' => $dql), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'createNamedQuery', array('name' => $name), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'createQueryBuilder', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'flush', array('entity' => $entity), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'clear', array('entityName' => $entityName), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->clear($entityName);
    }

    public function close()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'close', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->close();
    }

    public function persist($entity)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'persist', array('entity' => $entity), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'remove', array('entity' => $entity), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'refresh', array('entity' => $entity), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'detach', array('entity' => $entity), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'merge', array('entity' => $entity), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getRepository', array('entityName' => $entityName), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'contains', array('entity' => $entity), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getEventManager', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getConfiguration', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'isOpen', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getUnitOfWork', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getProxyFactory', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'initializeObject', array('obj' => $obj), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'getFilters', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'isFiltersStateClean', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'hasFilters', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return $this->valueHolderbbb31->hasFilters();
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

        $instance->initializer546d7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbbb31) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbbb31 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbbb31->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, '__get', ['name' => $name], $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        if (isset(self::$publicPropertiesa5712[$name])) {
            return $this->valueHolderbbb31->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbb31;

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

        $targetObject = $this->valueHolderbbb31;
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
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbb31;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbbb31;
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
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, '__isset', array('name' => $name), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbb31;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbbb31;
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
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, '__unset', array('name' => $name), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbb31;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbbb31;
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
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, '__clone', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        $this->valueHolderbbb31 = clone $this->valueHolderbbb31;
    }

    public function __sleep()
    {
        $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, '__sleep', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;

        return array('valueHolderbbb31');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer546d7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer546d7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer546d7 && ($this->initializer546d7->__invoke($valueHolderbbb31, $this, 'initializeProxy', array(), $this->initializer546d7) || 1) && $this->valueHolderbbb31 = $valueHolderbbb31;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbbb31;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbbb31;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
