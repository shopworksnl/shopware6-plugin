<?php

declare(strict_types=1);

namespace PaynlPayment\Components;

use Shopware\Core\System\SystemConfig\SystemConfigService;

class Config
{
    const CONFIG_TEMPLATE = 'PaynlPayment.config.%s';

    private $config;

    public function __construct(SystemConfigService $configReader)
    {
        $this->config = $configReader;
    }

    /**
     * @param string $key
     * @param mixed $defaultValue
     * @return array|mixed|null
     */
    private function get(string $key, $defaultValue = null)
    {
        $value = $this->config->get(sprintf(self::CONFIG_TEMPLATE, $key));
        if (is_null($value) && !is_null($defaultValue)) {
            return $defaultValue;
        }

        return $value;
    }

    public function getTokenCode(): string
    {
        return (string)$this->get('tokenCode');
    }

    public function getApiToken(): string
    {
        return (string)$this->get('apiToken');
    }

    public function getServiceId(): string
    {
        return (string)$this->get('serviceId');
    }
}
