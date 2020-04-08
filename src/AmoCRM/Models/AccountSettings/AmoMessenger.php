<?php

namespace AmoCRM\Models\AccountSettings;

use Illuminate\Contracts\Support\Arrayable;

class AmoMessenger implements Arrayable
{
    /**
     * @var bool
     */
    protected $enabled;

    /**
     * @var string
     */
    protected $wssUrl;

    /**
     * @var string
     */
    protected $apiUrl;

    /**
     * AmoMessenger constructor.
     * @param bool $enabled
     * @param string $wssUrl
     * @param string $apiUrl
     */
    public function __construct(
        bool $enabled,
        string $wssUrl,
        string $apiUrl
    ) {
        $this->enabled = $enabled;
        $this->wssUrl = $wssUrl;
        $this->apiUrl = $apiUrl;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        $result = [
            'enabled' => $this->enabled,
            'wss_url' => $this->wssUrl,
            'api_url' => $this->apiUrl,
        ];

        return $result;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @return string
     */
    public function getWssUrl(): string
    {
        return $this->wssUrl;
    }

    /**
     * @return string
     */
    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }
}