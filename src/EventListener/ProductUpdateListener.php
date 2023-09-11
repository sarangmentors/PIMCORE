<?php
namespace App\EventListener;

use Pimcore\Event\Model\DataObjectEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ProductUpdateListener implements EventSubscriberInterface
{
    private $shopifyApiUrl;
    private $shopifyAccessToken;
    private $logger;
    private $httpClient;

    public function __construct(string $shopifyApiUrl, string $shopifyAccessToken, LoggerInterface $logger,  HttpClientInterface $httpClient)
    {
        $this->shopifyApiUrl = $shopifyApiUrl;
        $this->shopifyAccessToken = $shopifyAccessToken;
        $this->logger = $logger;
        $this->httpClient = $httpClient;
    }

    public static function getSubscribedEvents()
    {
        return [
            'pimcore.dataobject.postUpdate' => 'onProductPostUpdate',
        ];
    }

    public function onProductPostUpdate(DataObjectEvent $event)
    {
        $product = $event->getObject();

        $productName = $product->getName();
        $productType = $product->getSelect();
        $productPrice = $product->getPrice();

        // Create a new Shopify product
        $this->createShopifyProduct($productName, $productType, $productPrice);
    }

    private function createShopifyProduct($name, $type, $price)
    {
        $httpClient = $this->httpClient;
        // Prepare the Shopify API request data
        $data = [
            'product' => [
                'title' => $name,
                'product_type' => $type,
                'variants' => [
                    [
                        'price' => $price,
                    ],
                ],
            ],
        ];

        $headers = [
            'X-Shopify-Access-Token' =>  $this->shopifyAccessToken,
            'Content-Type' => 'application/json',
        ];

        // Send a POST request to create the Shopify product
        $response = $httpClient->request('POST', $this->shopifyApiUrl, [
            'headers' => $headers,
            'json' => $data,
        ]);

        // Handle the Shopify API response
        if ($response->getStatusCode() === 201) {
            // Product creation was successful
        } else {
            // Handle errors or log them
              $this->logger->info("Shopify API Error: " . $response->getContent());
        }
    }
}