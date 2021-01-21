<?php

namespace Queue\Kernel;

/**
 * 公共方法
 * Class Common
 * @package Queue\Kernel
 */
class Common
{

    public $response = null;

    public function toArray()
    {
        return $this->response ? json_decode($this->response, true) : true;
    }

    public function mkdirs($path)
    {
        if (!is_dir($path)) {
            $this->mkdirs(dirname($path));
            mkdir($path);
        }

        return is_dir($path);
    }

    public function arguments($argv)
    {
        $_ARG = array();
        foreach ($argv as $arg) {
            if (preg_match('--([^=]+)=(.*)', $arg, $reg)) {
                $_ARG[$reg[1]] = $reg[2];
            } elseif (preg_match('^-([a-zA-Z0-9])', $arg, $reg)) {
                $_ARG[$reg[1]] = 'true';
            } else {
                $_ARG['input'][] = $arg;
            }
        }
        return $_ARG;
    }

}
