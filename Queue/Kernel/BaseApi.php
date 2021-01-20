<?php

namespace Queue\Kernel;


/**
 * 内核
 * Class BaseApi
 * @package Queue\Kernel
 */
class BaseApi
{
    public $dbfile = '';

    /**
     * 初始化
     * BaseApi constructor.
     * @param $config
     */
    public function __construct($config)
    {

    }

    /**
     * 文件锁
     * @param boolean
     */
    public function file_lock()
    {

    }
}
