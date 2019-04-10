<?php

namespace webignition\WebResourceInterfaces;

interface BlacklistedResultInterface
{
    /**
     * Get whether the field under test is blacklisted
     *
     * api.stopforumspam.org indicates a blacklisted item by:
     * - setting the last seen date/time to the current date time AND
     * - setting the frequency value to 255
     *
     * @return bool
     */
    public function isBlacklisted(): bool;
}
