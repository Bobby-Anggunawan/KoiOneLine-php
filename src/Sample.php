<?php

namespace whiletruewar\koi_one_line;

/**
 * Class Sample
 *
 * @author  WhileTrueWar  <mahmoud@zalt.me>
 */
class Sample
{

    /**
     * @var  \whiletruewar\koi_one_line\Config
     */
    private $config;

    /**
     * Sample constructor.
     *
     * @param \whiletruewar\koi_one_line\Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param $name
     *
     * @return  string
     */
    public function sayHello($name)
    {
        $greeting = $this->config->get('greeting');

        return $greeting . ' ' . $name;
    }

}
