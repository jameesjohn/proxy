<?php

declare(strict_types=1);

namespace Webong\Proxy\Tests\Support;

use Webong\Proxy\Contracts\WebhookContextProvider;
use Webong\Proxy\WebhookExecutionContextPayload;

final class TestWebhookContextProvider implements WebhookContextProvider
{
    public function resolve(): WebhookExecutionContextPayload
    {
        return new WebhookExecutionContextPayload(
            ownerId: 'owner-123',
            baseUrl: 'https://proxy.example.test',
            pathTemplates: ['test-router' => '/webhooks/test-router/owner-123'],
            routeParameters: ['scope' => 'owner-123'],
            routeContext: 'owner-123',
        );
    }
}
