<?php

declare(strict_types=1);

use Webong\Proxy\WebhookTargetRegistry;

it('reads targets from the generated discovery cache shape', function (): void {
    $registry = app(WebhookTargetRegistry::class);

    expect($registry->all()['job'])
        ->toHaveKey('test-webhook-job', Webong\Proxy\Tests\Support\TestWebhookJob::class);
});
