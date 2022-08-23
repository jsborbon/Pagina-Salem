<?php

namespace RebelCode\Spotlight\Instagram\Actions;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use RebelCode\Psr7\Request;
use RebelCode\Spotlight\Instagram\PostTypes\AccountPostType;
use RebelCode\Spotlight\Instagram\Wp\PostType;

class OEmbedHandler
{
    /** @var string */
    protected $baseUrl;

    /** @var ClientInterface */
    protected $client;

    /** @var PostType */
    protected $accounts;

    /** Constructor. */
    public function __construct(string $baseUrl, ClientInterface $client, PostType $accounts)
    {
        $this->client = $client;
        $this->accounts = $accounts;
        $this->baseUrl = $baseUrl;
    }

    /** Retrieves the oEmbed HTML */
    public function __invoke($matches, $attr, $url, $other): string
    {
        return '<div class="sli-oembed">' . $this->fetchHtml($url) . '</div>';
    }

    /** Fetches the HTML for the embed from Instagram's API. */
    protected function fetchHtml(string $url): string
    {
        $account = AccountPostType::findBusinessAccount($this->accounts);
        if ($account === null) {
            // User does not have a business account connected
            return '<p>You need to connect a Business accounts to embed Instagram posts</p>';
        }

        // Remove GET params from IG post URL
        if (strpos($url, '?') !== false) {
            $parts = explode('?', $url);
            if (isset($parts[1])) {
                $url = str_replace('?' . $parts[1], '', $url);
            }
        }

        $fullUrl = $this->baseUrl . '?url=' . urlencode($url) . '&access_token=' . $account->accessToken->code;

        try {
            $response = $this->client->sendRequest(new Request('GET', $fullUrl));
            $body = json_decode($response->getBody()->getContents());

            return $body->html;
        } catch (ClientExceptionInterface $e) {
            return '<p>' . esc_html($e->getMessage()) . '</p>';
        }
    }
}
