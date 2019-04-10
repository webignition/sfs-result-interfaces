<?php

namespace webignition\SfsResultInterfaces;

interface ResultSetInterface extends \Countable, \Iterator
{
    public function addResult(ResultInterface $result): void;
}
