<?php

namespace AdapterAPI\Domain\Adapter\ValueObject;

class UrlAuthorizationClient
{
    /* @var string */
    private $url;

    /**
     * UrlApiClient constructor.
     * @param string $url
     * @throws EmptyUrlClient
     * @throws InvalidUrlClient
     */
    public function __construct(string $url)
    {
        $this->guardUrlIsNotEmpty($url);
        $this->guardUrlIsValid($url);
        $this->url = $url;
    }

    public function getValue()
    {
        return $this->url;
    }

    /**
     * @param $url
     * @throws EmptyUrlClient
     */
    public function guardUrlIsNotEmpty($url)
    {
        if(empty($url)){
            throw new EmptyUrlClient();
        }
    }

    /**
     * @param $url
     * @throws InvalidUrlClient
     */
    public function guardUrlIsValid($url)
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new InvalidUrlClient();
        }
    }
}