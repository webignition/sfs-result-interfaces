<?php

namespace webignition\WebResourceInterfaces;

interface ResultSetInterface extends \Countable, \Iterator
{
    public function addResult(ResultInterface $result): void;
}
