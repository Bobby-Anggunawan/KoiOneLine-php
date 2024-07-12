<?php

namespace whiletruewar\koi_one_line\Tests;

use whiletruewar\koi_one_line\Config;
use whiletruewar\koi_one_line\Sample;

/**
 * Class SampleTest
 *
 * @category Test
 * @package  whiletruewar\koi_one_line\Tests
 * @author   WhileTrueWar <mahmoud@zalt.me>
 */
class SampleTest extends TestCase
{

    public function testSayHello()
    {
        $config = new Config();
        $sample = new Sample($config);

        $name = 'whiletruewar';

        $result = $sample->sayHello($name);

        $expected = $config->get('greeting') . ' ' . $name;

        $this->assertEquals($result, $expected);

    }

}
