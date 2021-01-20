<?php

namespace Queue\Kernel;


/**
 * 内核
 * Class BaseApi
 * @package Queue\Kernel
 */
class BaseApi
{
    const EOF = "\r\n";
    public $dbfile = '';
    public $root;

    /**
     * 初始化
     * BaseApi constructor.
     * @param $config
     */
    public function __construct($config)
    {
        $this->root = dirname(__DIR__);
        if (!is_dir($this->root . '/data/')) {
            mkdir($this->root . '/data/');
        }
    }

    /**
     * 文件锁
     * @param boolean
     */
    public function file_lock()
    {

    }
}
