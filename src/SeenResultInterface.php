<?php

namespace webignition\WebResourceInterfaces;

interface SeenResultInterface
{
    /**
     * Get the date/time when field under test was last observed
     *
     * @return \DateTime
     */
    public function getLastSeen(): \DateTime;

    /**
     * Get the level of confidence that the field under test would result in unwanted activity
     *
     * @return float
     */
    public function getConfidence(): float;
}
