<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc206f = null;
    private $initializer45871 = null;
    private static $publicPropertiesd6c5f = [
        
    ];
    public function getConnection()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getConnection', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getMetadataFactory', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getExpressionBuilder', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'beginTransaction', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getCache', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getCache();
    }
    public function transactional($func)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'transactional', array('func' => $func), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'commit', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->commit();
    }
    public function rollback()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'rollback', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getClassMetadata', array('className' => $className), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'createQuery', array('dql' => $dql), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'createNamedQuery', array('name' => $name), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'createQueryBuilder', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'flush', array('entity' => $entity), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'clear', array('entityName' => $entityName), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->clear($entityName);
    }
    public function close()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'close', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->close();
    }
    public function persist($entity)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'persist', array('entity' => $entity), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'remove', array('entity' => $entity), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'refresh', array('entity' => $entity), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'detach', array('entity' => $entity), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'merge', array('entity' => $entity), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'contains', array('entity' => $entity), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getEventManager', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getConfiguration', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'isOpen', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getUnitOfWork', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getProxyFactory', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'initializeObject', array('obj' => $obj), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'getFilters', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'isFiltersStateClean', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'hasFilters', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return $this->valueHolderc206f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer45871 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderc206f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc206f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderc206f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, '__get', ['name' => $name], $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        if (isset(self::$publicPropertiesd6c5f[$name])) {
            return $this->valueHolderc206f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc206f;
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
        $targetObject = $this->valueHolderc206f;
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
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc206f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc206f;
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
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, '__isset', array('name' => $name), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc206f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderc206f;
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
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, '__unset', array('name' => $name), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc206f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc206f;
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
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, '__clone', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        $this->valueHolderc206f = clone $this->valueHolderc206f;
    }
    public function __sleep()
    {
        $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, '__sleep', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
        return array('valueHolderc206f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer45871 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer45871;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer45871 && ($this->initializer45871->__invoke($valueHolderc206f, $this, 'initializeProxy', array(), $this->initializer45871) || 1) && $this->valueHolderc206f = $valueHolderc206f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc206f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc206f;
    }
}
