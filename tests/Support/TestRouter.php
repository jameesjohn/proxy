<?php

declare(strict_types=1);

namespace Webong\Proxy\Tests\Support;

use Webong\Proxy\Contracts\Router;
use Webong\Proxy\Models\WebProxyCall;
use Webong\Proxy\WebhookRoute;

final class TestRouter implements Router
{
    /** @return iterable<WebhookRoute> */
    public function routes(WebProxyCall $webhookCall): iterable
    {
        return [];
    }

}
