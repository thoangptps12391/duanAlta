<?php
 namespace MailPoetVendor\Doctrine\ORM\Cache\Persister\Entity; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\Common\Util\ClassUtils; use MailPoetVendor\Doctrine\ORM\Cache\CacheException; class ReadOnlyCachedEntityPersister extends NonStrictReadWriteCachedEntityPersister { public function update($entity) { throw CacheException::updateReadOnlyEntity(ClassUtils::getClass($entity)); } } 