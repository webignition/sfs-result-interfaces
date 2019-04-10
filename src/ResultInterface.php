<?php

namespace webignition\WebResourceInterfaces;

interface ResultInterface
{
    /**
     * Get the frequency of occurrences
     *
     * @return int
     */
    public function getFrequency(): int;

    /**
     * Get whether the result indicates that the field under test is present in the queried data
     *
     * @return bool
     */
    public function getAppears(): bool;
}
