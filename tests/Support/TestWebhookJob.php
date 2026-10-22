<?php

declare(strict_types=1);

namespace Webong\Proxy\Tests\Support;

use Illuminate\Foundation\Queue\Queueable;
use Webong\Proxy\Contracts\WebhookJob;
use Webong\Proxy\WebhookProxyDelivery;

final class TestWebhookJob implements WebhookJob
{
    use Queueable;

    public function __construct(public readonly WebhookProxyDelivery $delivery)
    {
    }

    public static function fromWebhookProxy(WebhookProxyDelivery $delivery): static
    {
        return new self($delivery);
    }

    public function handle(): void
    {
    }
}
