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

}
