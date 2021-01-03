<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 24.03.2019
 * Time: 14:42
 */

namespace CsCannon\Blockchains\Generic;







use CsCannon\Blockchains\BlockchainContractFactory;

class GenericContractFactory extends BlockchainContractFactory
{

    public static $isa = null;
    const ABI_VERB = 'has';
    const ABI_TARGET = 'abi';

    public function __construct()
    {
        $this->blockchain = GenericBlockchain::class ;
        return parent::__construct();

    }


    protected static $className = 'CsCannon\Blockchains\Generic\GenericContract' ;












}