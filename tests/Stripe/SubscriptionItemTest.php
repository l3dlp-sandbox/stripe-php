<?php

namespace Stripe;

/**
 * @internal
 *
 * @covers \Stripe\SubscriptionItem
 */
final class SubscriptionItemTest extends TestCase
{
    use TestHelper;

    const TEST_RESOURCE_ID = 'si_123';

    public function testIsListable()
    {
        $this->expectsRequest(
            'get',
            '/v1/subscription_items',
            [
                'subscription' => 'sub_123',
            ]
        );
        $resources = SubscriptionItem::all([
            'subscription' => 'sub_123',
        ]);
        self::compatAssertIsArray($resources->data);
        self::assertInstanceOf(SubscriptionItem::class, $resources->data[0]);
    }

    public function testIsRetrievable()
    {
        $this->expectsRequest(
            'get',
            '/v1/subscription_items/' . self::TEST_RESOURCE_ID
        );
        $resource = SubscriptionItem::retrieve(self::TEST_RESOURCE_ID);
        self::assertInstanceOf(SubscriptionItem::class, $resource);
    }

    public function testIsCreatable()
    {
        $this->expectsRequest(
            'post',
            '/v1/subscription_items'
        );
        $resource = SubscriptionItem::create([
            'price' => 'price_123',
            'subscription' => 'sub_123',
        ]);
        self::assertInstanceOf(SubscriptionItem::class, $resource);
    }

    public function testIsSaveable()
    {
        $resource = SubscriptionItem::retrieve(self::TEST_RESOURCE_ID);
        $resource->metadata['key'] = 'value';
        $this->expectsRequest(
            'post',
            '/v1/subscription_items/' . $resource->id
        );
        $resource->save();
        self::assertInstanceOf(SubscriptionItem::class, $resource);
    }

    public function testIsUpdatable()
    {
        $this->expectsRequest(
            'post',
            '/v1/subscription_items/' . self::TEST_RESOURCE_ID
        );
        $resource = SubscriptionItem::update(self::TEST_RESOURCE_ID, [
            'metadata' => ['key' => 'value'],
        ]);
        self::assertInstanceOf(SubscriptionItem::class, $resource);
    }

    public function testIsDeletable()
    {
        $resource = SubscriptionItem::retrieve(self::TEST_RESOURCE_ID);
        $this->expectsRequest(
            'delete',
            '/v1/subscription_items/' . $resource->id
        );
        $resource->delete();
        self::assertInstanceOf(SubscriptionItem::class, $resource);
    }

    public function testCanCreateUsageRecord()
    {
        $this->expectsRequest(
            'post',
            '/v1/subscription_items/' . self::TEST_RESOURCE_ID . '/usage_records'
        );
        $resource = SubscriptionItem::createUsageRecord(self::TEST_RESOURCE_ID, [
            'quantity' => 100,
            'timestamp' => 12341234,
            'action' => 'set',
        ]);
    }

    public function testCanListUsageRecordSummariesDeprecated()
    {
        $resource = SubscriptionItem::retrieve(self::TEST_RESOURCE_ID);
        $this->expectsRequest(
            'get',
            '/v1/subscription_items/' . $resource->id . '/usage_record_summaries'
        );
        $resources = $resource->allUsageRecordSummaries(self::TEST_RESOURCE_ID);
        self::compatAssertIsArray($resources->data);
        self::assertInstanceOf(UsageRecordSummary::class, $resources->data[0]);
    }

    public function testCanListUsageRecordSummaries()
    {
        $this->expectsRequest(
            'get',
            '/v1/subscription_items/' . self::TEST_RESOURCE_ID . '/usage_record_summaries'
        );
        $resources = SubscriptionItem::allUsageRecordSummaries(self::TEST_RESOURCE_ID);
        self::compatAssertIsArray($resources->data);
        self::assertInstanceOf(UsageRecordSummary::class, $resources->data[0]);
    }
}
