<?php
/**
 * Created by EverdreamSoft.
 * User: Shaban Shaame
 * Date: 14.02.20
 * Time: 12:38
 */

namespace CsCannon;



use SandraCore\EntityFactory;

abstract class CSEntityFactory extends EntityFactory
{
    public static $isa = null;
    public static $file = null; //this has to be set in child class or will raise error
    protected static $className = null ;

    public function __construct(){

        $sandra = SandraManager::getSandra();

        if (!static::$file)  $sandra->systemError(1,static::class,4,static::class." wrong implementation no file name set");

        parent::__construct(static::$isa,static::$file,SandraManager::getSandra());
        if (static::$className)
        $this->generatedEntityClass = static::$className ;

    }

}