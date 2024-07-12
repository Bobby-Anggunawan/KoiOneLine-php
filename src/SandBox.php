<?php
namespace whiletruewar\koi_one_line;


/// class yang digunakan untuk memasukkan fungsi yang masih dalam tahap ujicoba. Sebaiknya jangan gunakan fungsi di class ini karena fungsi tersebut akan di pindahkan ke class yang sesuai
class SandBox {
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
