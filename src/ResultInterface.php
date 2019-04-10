<?php

namespace webignition\WebResourceInterfaces;

interface ResultInterface
{
    const TYPE_EMAIL = 'email';
    const TYPE_EMAIL_HASH = 'email-hash';
    const TYPE_IP = 'ip';
    const TYPE_USERNAME = 'username';

    /**
     * Get the type for the field under test
     *
     * Must return one of TYPE_*
     *
     * @return string
     */
    public function getType(): string;

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

    /**
     * Get the field under test
     *
     * @return string
     */
    public function getValue(): string;

    /**
     * Get the date/time when field under test was last observed
     *
     * Must return NULL if this field is not present
     *
     * @return \DateTime|null
     */
    public function getLastSeen(): ?\DateTime;

    /**
     * Get the level of confidence that the field under test would result in unwanted activity
     *
     * Must return NULL if this field is not present
     *
     * @return float|null
     */
    public function getConfidence(): ?float;

    /**
     * Get the ISO 3166-1 alpha 2 delegated country code
     *
     * Must return NULL if type is not TYPE_IP
     * May return NULL if type is TYPE_IP and this field is not present
     *
     * @return string|null
     */
    public function getDelegatedCountryCode(): ?string;

    /**
     * Get the ISO 3166-1 alpha 2 country code
     *
     * Must return NULL if type is not TYPE_IP
     *
     * @return string
     */
    public function getCountryCode(): string;

    /**
     * Get the ASN number for the ISP owning the IP
     *
     * Must return NULL if type is not TYPE_IP
     *
     * @return int
     */
    public function getAsn(): int;

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
