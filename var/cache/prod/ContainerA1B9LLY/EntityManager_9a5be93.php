<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderb9899 = null;
    private $initializer81fc1 = null;
    private static $publicProperties221be = [
        
    ];
    public function getConnection()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getConnection', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getMetadataFactory', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getExpressionBuilder', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'beginTransaction', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getCache', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getCache();
    }
    public function transactional($func)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'transactional', array('func' => $func), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'wrapInTransaction', array('func' => $func), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'commit', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->commit();
    }
    public function rollback()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'rollback', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getClassMetadata', array('className' => $className), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'createQuery', array('dql' => $dql), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'createNamedQuery', array('name' => $name), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'createQueryBuilder', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'flush', array('entity' => $entity), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'clear', array('entityName' => $entityName), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->clear($entityName);
    }
    public function close()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'close', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->close();
    }
    public function persist($entity)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'persist', array('entity' => $entity), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'remove', array('entity' => $entity), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'refresh', array('entity' => $entity), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'detach', array('entity' => $entity), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'merge', array('entity' => $entity), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getRepository', array('entityName' => $entityName), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'contains', array('entity' => $entity), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getEventManager', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getConfiguration', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'isOpen', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getUnitOfWork', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getProxyFactory', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'initializeObject', array('obj' => $obj), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'getFilters', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'isFiltersStateClean', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'hasFilters', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return $this->valueHolderb9899->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer81fc1 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderb9899) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb9899 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderb9899->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, '__get', ['name' => $name], $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        if (isset(self::$publicProperties221be[$name])) {
            return $this->valueHolderb9899->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9899;
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
        $targetObject = $this->valueHolderb9899;
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
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9899;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderb9899;
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
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, '__isset', array('name' => $name), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9899;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderb9899;
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
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, '__unset', array('name' => $name), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9899;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderb9899;
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
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, '__clone', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        $this->valueHolderb9899 = clone $this->valueHolderb9899;
    }
    public function __sleep()
    {
        $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, '__sleep', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
        return array('valueHolderb9899');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer81fc1 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer81fc1;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer81fc1 && ($this->initializer81fc1->__invoke($valueHolderb9899, $this, 'initializeProxy', array(), $this->initializer81fc1) || 1) && $this->valueHolderb9899 = $valueHolderb9899;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb9899;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb9899;
    }
}
