<?php

namespace webignition\WebResourceInterfaces;

interface IpResultInterface
{
    /**
     * Get the ISO 3166-1 alpha 2 delegated country code
     *
     * @return string|null
     */
    public function getDelegatedCountryCode(): ?string;

    /**Get the ISO 3166-1 alpha 2 country code
     *
     *
     * @return string
     */
    public function getCountryCode(): string;

    /**
     * Get the ASN number for the ISP owning the IP
     *
     * @return int
     */
    public function getAsn(): int;
}
