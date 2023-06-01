<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder778ca = null;
    private $initializer38757 = null;
    private static $publicProperties56289 = [
        
    ];
    public function getConnection()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getConnection', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getMetadataFactory', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getExpressionBuilder', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'beginTransaction', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getCache', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getCache();
    }
    public function transactional($func)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'transactional', array('func' => $func), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'wrapInTransaction', array('func' => $func), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'commit', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->commit();
    }
    public function rollback()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'rollback', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getClassMetadata', array('className' => $className), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'createQuery', array('dql' => $dql), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'createNamedQuery', array('name' => $name), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'createQueryBuilder', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'flush', array('entity' => $entity), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'clear', array('entityName' => $entityName), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->clear($entityName);
    }
    public function close()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'close', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->close();
    }
    public function persist($entity)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'persist', array('entity' => $entity), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'remove', array('entity' => $entity), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'refresh', array('entity' => $entity), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'detach', array('entity' => $entity), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'merge', array('entity' => $entity), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getRepository', array('entityName' => $entityName), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'contains', array('entity' => $entity), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getEventManager', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getConfiguration', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'isOpen', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getUnitOfWork', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getProxyFactory', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'initializeObject', array('obj' => $obj), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'getFilters', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'isFiltersStateClean', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'hasFilters', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return $this->valueHolder778ca->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer38757 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder778ca) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder778ca = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder778ca->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, '__get', ['name' => $name], $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        if (isset(self::$publicProperties56289[$name])) {
            return $this->valueHolder778ca->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder778ca;
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
        $targetObject = $this->valueHolder778ca;
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
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder778ca;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder778ca;
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
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, '__isset', array('name' => $name), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder778ca;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder778ca;
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
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, '__unset', array('name' => $name), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder778ca;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder778ca;
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
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, '__clone', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        $this->valueHolder778ca = clone $this->valueHolder778ca;
    }
    public function __sleep()
    {
        $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, '__sleep', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
        return array('valueHolder778ca');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer38757 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer38757;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer38757 && ($this->initializer38757->__invoke($valueHolder778ca, $this, 'initializeProxy', array(), $this->initializer38757) || 1) && $this->valueHolder778ca = $valueHolder778ca;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder778ca;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder778ca;
    }
}
