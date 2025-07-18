<?php

// File generated from our OpenAPI spec

namespace Stripe;

/**
 * @internal
 *
 * @coversNothing
 */
final class GeneratedExamplesTest extends TestCase
{
    use TestHelper;

    /** @var null|StripeClient */
    private $client;
    private $v2Client;

    /** @before */
    protected function setUpService()
    {
        $this->client = new StripeClient(['api_key' => 'sk_test_123', 'api_base' => MOCK_URL, 'files_base' => MOCK_URL]);
        $this->v2Client = new StripeClient(['api_key' => 'sk_test_123']);
    }

    public function testAccountLinksPost()
    {
        $this->expectsRequest('post', '/v1/account_links');
        $result = $this->client->accountLinks->create([
            'account' => 'acct_xxxxxxxxxxxxx',
            'refresh_url' => 'https://example.com/reauth',
            'return_url' => 'https://example.com/return',
            'type' => 'account_onboarding',
        ]);
        self::assertInstanceOf(AccountLink::class, $result);
    }

    public function testAccountsCapabilitiesGet()
    {
        $this->expectsRequest(
            'get',
            '/v1/accounts/acct_xxxxxxxxxxxxx/capabilities'
        );
        $result = $this->client->accounts->allCapabilities(
            'acct_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Capability::class, $result->data[0]);
    }

    public function testAccountsCapabilitiesGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/accounts/acct_xxxxxxxxxxxxx/capabilities/card_payments'
        );
        $result = $this->client->accounts->retrieveCapability(
            'acct_xxxxxxxxxxxxx',
            'card_payments',
            []
        );
        self::assertInstanceOf(Capability::class, $result);
    }

    public function testAccountsCapabilitiesPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/accounts/acct_xxxxxxxxxxxxx/capabilities/card_payments'
        );
        $result = $this->client->accounts->updateCapability(
            'acct_xxxxxxxxxxxxx',
            'card_payments',
            ['requested' => true]
        );
        self::assertInstanceOf(Capability::class, $result);
    }

    public function testAccountsDelete()
    {
        $this->expectsRequest('delete', '/v1/accounts/acct_xxxxxxxxxxxxx');
        $result = $this->client->accounts->delete('acct_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Account::class, $result);
    }

    public function testAccountsGet()
    {
        $this->expectsRequest('get', '/v1/accounts');
        $result = $this->client->accounts->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Account::class, $result->data[0]);
    }

    public function testAccountsGet2()
    {
        $this->expectsRequest('get', '/v1/accounts/acct_xxxxxxxxxxxxx');
        $result = $this->client->accounts->retrieve('acct_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Account::class, $result);
    }

    public function testAccountsLoginLinksPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/accounts/acct_xxxxxxxxxxxxx/login_links'
        );
        $result = $this->client->accounts->createLoginLink(
            'acct_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(LoginLink::class, $result);
    }

    public function testAccountsPersonsDelete()
    {
        $this->expectsRequest(
            'delete',
            '/v1/accounts/acct_xxxxxxxxxxxxx/persons/person_xxxxxxxxxxxxx'
        );
        $result = $this->client->accounts->deletePerson(
            'acct_xxxxxxxxxxxxx',
            'person_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Person::class, $result);
    }

    public function testAccountsPersonsGet()
    {
        $this->expectsRequest('get', '/v1/accounts/acct_xxxxxxxxxxxxx/persons');
        $result = $this->client->accounts->allPersons(
            'acct_xxxxxxxxxxxxx',
            ['limit' => 3]
        );
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Person::class, $result->data[0]);
    }

    public function testAccountsPersonsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/accounts/acct_xxxxxxxxxxxxx/persons/person_xxxxxxxxxxxxx'
        );
        $result = $this->client->accounts->retrievePerson(
            'acct_xxxxxxxxxxxxx',
            'person_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Person::class, $result);
    }

    public function testAccountsPersonsPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/accounts/acct_xxxxxxxxxxxxx/persons'
        );
        $result = $this->client->accounts->createPerson(
            'acct_xxxxxxxxxxxxx',
            [
                'first_name' => 'Jane',
                'last_name' => 'Diaz',
            ]
        );
        self::assertInstanceOf(Person::class, $result);
    }

    public function testAccountsPersonsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/accounts/acct_xxxxxxxxxxxxx/persons/person_xxxxxxxxxxxxx'
        );
        $result = $this->client->accounts->updatePerson(
            'acct_xxxxxxxxxxxxx',
            'person_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Person::class, $result);
    }

    public function testAccountsPost()
    {
        $this->expectsRequest('post', '/v1/accounts');
        $result = $this->client->accounts->create([
            'type' => 'custom',
            'country' => 'US',
            'email' => 'jenny.rosen@example.com',
            'capabilities' => [
                'card_payments' => ['requested' => true],
                'transfers' => ['requested' => true],
            ],
        ]);
        self::assertInstanceOf(Account::class, $result);
    }

    public function testAccountsPost2()
    {
        $this->expectsRequest('post', '/v1/accounts/acct_xxxxxxxxxxxxx');
        $result = $this->client->accounts->update(
            'acct_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Account::class, $result);
    }

    public function testAccountsRejectPost()
    {
        $this->expectsRequest('post', '/v1/accounts/acct_xxxxxxxxxxxxx/reject');
        $result = $this->client->accounts->reject(
            'acct_xxxxxxxxxxxxx',
            ['reason' => 'fraud']
        );
        self::assertInstanceOf(Account::class, $result);
    }

    public function testApplicationFeesGet()
    {
        $this->expectsRequest('get', '/v1/application_fees');
        $result = $this->client->applicationFees->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(ApplicationFee::class, $result->data[0]);
    }

    public function testApplicationFeesGet2()
    {
        $this->expectsRequest('get', '/v1/application_fees/fee_xxxxxxxxxxxxx');
        $result = $this->client->applicationFees->retrieve(
            'fee_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(ApplicationFee::class, $result);
    }

    public function testApplicationFeesRefundsGet()
    {
        $this->expectsRequest(
            'get',
            '/v1/application_fees/fee_xxxxxxxxxxxxx/refunds'
        );
        $result = $this->client->applicationFees->allRefunds(
            'fee_xxxxxxxxxxxxx',
            ['limit' => 3]
        );
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(ApplicationFeeRefund::class, $result->data[0]);
    }

    public function testApplicationFeesRefundsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/application_fees/fee_xxxxxxxxxxxxx/refunds/fr_xxxxxxxxxxxxx'
        );
        $result = $this->client->applicationFees->retrieveRefund(
            'fee_xxxxxxxxxxxxx',
            'fr_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(ApplicationFeeRefund::class, $result);
    }

    public function testApplicationFeesRefundsPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/application_fees/fee_xxxxxxxxxxxxx/refunds'
        );
        $result = $this->client->applicationFees->createRefund(
            'fee_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(ApplicationFeeRefund::class, $result);
    }

    public function testApplicationFeesRefundsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/application_fees/fee_xxxxxxxxxxxxx/refunds/fr_xxxxxxxxxxxxx'
        );
        $result = $this->client->applicationFees->updateRefund(
            'fee_xxxxxxxxxxxxx',
            'fr_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(ApplicationFeeRefund::class, $result);
    }

    public function testAppsSecretsDeletePost()
    {
        $this->expectsRequest('post', '/v1/apps/secrets/delete');
        $result = $this->client->apps->secrets->deleteWhere([
            'name' => 'my-api-key',
            'scope' => ['type' => 'account'],
        ]);
        self::assertInstanceOf(Apps\Secret::class, $result);
    }

    public function testAppsSecretsFindGet()
    {
        $this->expectsRequest('get', '/v1/apps/secrets/find');
        $result = $this->client->apps->secrets->find([
            'name' => 'sec_123',
            'scope' => ['type' => 'account'],
        ]);
        self::assertInstanceOf(Apps\Secret::class, $result);
    }

    public function testAppsSecretsGet()
    {
        $this->expectsRequest('get', '/v1/apps/secrets');
        $result = $this->client->apps->secrets->all([
            'scope' => ['type' => 'account'],
            'limit' => 2,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Apps\Secret::class, $result->data[0]);
    }

    public function testAppsSecretsGet2()
    {
        $this->expectsRequest('get', '/v1/apps/secrets');
        $result = $this->client->apps->secrets->all([
            'scope' => ['type' => 'account'],
            'limit' => 2,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Apps\Secret::class, $result->data[0]);
    }

    public function testAppsSecretsPost()
    {
        $this->expectsRequest('post', '/v1/apps/secrets');
        $result = $this->client->apps->secrets->create([
            'name' => 'sec_123',
            'payload' => 'very secret string',
            'scope' => ['type' => 'account'],
        ]);
        self::assertInstanceOf(Apps\Secret::class, $result);
    }

    public function testAppsSecretsPost2()
    {
        $this->expectsRequest('post', '/v1/apps/secrets');
        $result = $this->client->apps->secrets->create([
            'name' => 'my-api-key',
            'payload' => 'secret_key_xxxxxx',
            'scope' => ['type' => 'account'],
        ]);
        self::assertInstanceOf(Apps\Secret::class, $result);
    }

    public function testBalanceTransactionsGet()
    {
        $this->expectsRequest('get', '/v1/balance_transactions');
        $result = $this->client->balanceTransactions->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(BalanceTransaction::class, $result->data[0]);
    }

    public function testBalanceTransactionsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/balance_transactions/txn_xxxxxxxxxxxxx'
        );
        $result = $this->client->balanceTransactions->retrieve(
            'txn_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(BalanceTransaction::class, $result);
    }

    public function testBillingPortalConfigurationsGet()
    {
        $this->expectsRequest('get', '/v1/billing_portal/configurations');
        $result = $this->client->billingPortal->configurations->all([
            'limit' => 3,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(BillingPortal\Configuration::class, $result->data[0]);
    }

    public function testBillingPortalConfigurationsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/billing_portal/configurations/bpc_xxxxxxxxxxxxx'
        );
        $result = $this->client->billingPortal->configurations->retrieve(
            'bpc_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(BillingPortal\Configuration::class, $result);
    }

    public function testBillingPortalConfigurationsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/billing_portal/configurations/bpc_xxxxxxxxxxxxx'
        );
        $result = $this->client->billingPortal->configurations->update(
            'bpc_xxxxxxxxxxxxx',
            [
                'business_profile' => [
                    'privacy_policy_url' => 'https://example.com/privacy',
                    'terms_of_service_url' => 'https://example.com/terms',
                ],
            ]
        );
        self::assertInstanceOf(BillingPortal\Configuration::class, $result);
    }

    public function testBillingPortalSessionsPost()
    {
        $this->expectsRequest('post', '/v1/billing_portal/sessions');
        $result = $this->client->billingPortal->sessions->create([
            'customer' => 'cus_xxxxxxxxxxxxx',
            'return_url' => 'https://example.com/account',
        ]);
        self::assertInstanceOf(BillingPortal\Session::class, $result);
    }

    public function testChargesCapturePost()
    {
        $this->expectsRequest('post', '/v1/charges/ch_xxxxxxxxxxxxx/capture');
        $result = $this->client->charges->capture('ch_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Charge::class, $result);
    }

    public function testChargesGet()
    {
        $this->expectsRequest('get', '/v1/charges');
        $result = $this->client->charges->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Charge::class, $result->data[0]);
    }

    public function testChargesGet2()
    {
        $this->expectsRequest('get', '/v1/charges/ch_xxxxxxxxxxxxx');
        $result = $this->client->charges->retrieve('ch_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Charge::class, $result);
    }

    public function testChargesPost()
    {
        $this->expectsRequest('post', '/v1/charges');
        $result = $this->client->charges->create([
            'amount' => 2000,
            'currency' => 'usd',
            'source' => 'tok_xxxx',
            'description' => 'My First Test Charge (created for API docs at https://www.stripe.com/docs/api)',
        ]);
        self::assertInstanceOf(Charge::class, $result);
    }

    public function testChargesPost2()
    {
        $this->expectsRequest('post', '/v1/charges/ch_xxxxxxxxxxxxx');
        $result = $this->client->charges->update(
            'ch_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Charge::class, $result);
    }

    public function testChargesSearchGet()
    {
        $this->expectsRequest('get', '/v1/charges/search');
        $result = $this->client->charges->search([
            'query' => 'amount>999 AND metadata[\'order_id\']:\'6735\'',
        ]);
        self::assertInstanceOf(SearchResult::class, $result);
        self::assertInstanceOf(Charge::class, $result->data[0]);
    }

    public function testCheckoutSessionsExpirePost()
    {
        $this->expectsRequest('post', '/v1/checkout/sessions/sess_xyz/expire');
        $result = $this->client->checkout->sessions->expire('sess_xyz', []);
        self::assertInstanceOf(Checkout\Session::class, $result);
    }

    public function testCheckoutSessionsExpirePost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/checkout/sessions/cs_test_xxxxxxxxxxxxx/expire'
        );
        $result = $this->client->checkout->sessions->expire(
            'cs_test_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Checkout\Session::class, $result);
    }

    public function testCheckoutSessionsGet()
    {
        $this->expectsRequest('get', '/v1/checkout/sessions');
        $result = $this->client->checkout->sessions->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Checkout\Session::class, $result->data[0]);
    }

    public function testCheckoutSessionsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/checkout/sessions/cs_test_xxxxxxxxxxxxx'
        );
        $result = $this->client->checkout->sessions->retrieve(
            'cs_test_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Checkout\Session::class, $result);
    }

    public function testCheckoutSessionsLineItemsGet()
    {
        $this->expectsRequest(
            'get',
            '/v1/checkout/sessions/sess_xyz/line_items'
        );
        $result = $this->client->checkout->sessions->allLineItems(
            'sess_xyz',
            []
        );
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(LineItem::class, $result->data[0]);
    }

    public function testCheckoutSessionsPost()
    {
        $this->expectsRequest('post', '/v1/checkout/sessions');
        $result = $this->client->checkout->sessions->create([
            'success_url' => 'https://example.com/success',
            'cancel_url' => 'https://example.com/cancel',
            'mode' => 'payment',
            'shipping_options' => [
                ['shipping_rate' => 'shr_standard'],
                [
                    'shipping_rate_data' => [
                        'display_name' => 'Standard',
                        'delivery_estimate' => [
                            'minimum' => [
                                'unit' => 'day',
                                'value' => 5,
                            ],
                            'maximum' => [
                                'unit' => 'day',
                                'value' => 7,
                            ],
                        ],
                    ],
                ],
            ],
        ]);
        self::assertInstanceOf(Checkout\Session::class, $result);
    }

    public function testCheckoutSessionsPost2()
    {
        $this->expectsRequest('post', '/v1/checkout/sessions');
        $result = $this->client->checkout->sessions->create([
            'success_url' => 'https://example.com/success',
            'line_items' => [
                [
                    'price' => 'price_xxxxxxxxxxxxx',
                    'quantity' => 2,
                ],
            ],
            'mode' => 'payment',
        ]);
        self::assertInstanceOf(Checkout\Session::class, $result);
    }

    public function testCoreEventsGet()
    {
        $this->stubRequest(
            'get',
            '/v2/core/events/ll_123',
            [],
            [],
            false,
            [
                'context' => 'context',
                'created' => '1970-01-12T21:42:34.472Z',
                'id' => 'obj_123',
                'object' => 'v2.core.event',
                'reason' => [
                    'type' => 'request',
                    'request' => [
                        'id' => 'obj_123',
                        'idempotency_key' => 'idempotency_key',
                    ],
                ],
                'type' => 'type',
                'livemode' => [],
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->core->events->retrieve('ll_123', []);
        self::assertInstanceOf(V2\Event::class, $result);
    }

    public function testCountrySpecsGet()
    {
        $this->expectsRequest('get', '/v1/country_specs');
        $result = $this->client->countrySpecs->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(CountrySpec::class, $result->data[0]);
    }

    public function testCountrySpecsGet2()
    {
        $this->expectsRequest('get', '/v1/country_specs/US');
        $result = $this->client->countrySpecs->retrieve('US', []);
        self::assertInstanceOf(CountrySpec::class, $result);
    }

    public function testCouponsDelete()
    {
        $this->expectsRequest('delete', '/v1/coupons/Z4OV52SU');
        $result = $this->client->coupons->delete('Z4OV52SU', []);
        self::assertInstanceOf(Coupon::class, $result);
    }

    public function testCouponsGet()
    {
        $this->expectsRequest('get', '/v1/coupons');
        $result = $this->client->coupons->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Coupon::class, $result->data[0]);
    }

    public function testCouponsGet2()
    {
        $this->expectsRequest('get', '/v1/coupons/Z4OV52SU');
        $result = $this->client->coupons->retrieve('Z4OV52SU', []);
        self::assertInstanceOf(Coupon::class, $result);
    }

    public function testCouponsPost()
    {
        $this->expectsRequest('post', '/v1/coupons');
        $result = $this->client->coupons->create([
            'percent_off' => 25.5,
            'duration' => 'once',
        ]);
        self::assertInstanceOf(Coupon::class, $result);
    }

    public function testCouponsPost2()
    {
        $this->expectsRequest('post', '/v1/coupons/Z4OV52SU');
        $result = $this->client->coupons->update(
            'Z4OV52SU',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Coupon::class, $result);
    }

    public function testCreditNotesGet()
    {
        $this->expectsRequest('get', '/v1/credit_notes');
        $result = $this->client->creditNotes->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(CreditNote::class, $result->data[0]);
    }

    public function testCreditNotesLinesGet()
    {
        $this->expectsRequest('get', '/v1/credit_notes/cn_xxxxxxxxxxxxx/lines');
        $result = $this->client->creditNotes->allLines(
            'cn_xxxxxxxxxxxxx',
            ['limit' => 3]
        );
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(CreditNoteLineItem::class, $result->data[0]);
    }

    public function testCreditNotesPost()
    {
        $this->expectsRequest('post', '/v1/credit_notes');
        $result = $this->client->creditNotes->create([
            'invoice' => 'in_xxxxxxxxxxxxx',
            'lines' => [
                [
                    'type' => 'invoice_line_item',
                    'invoice_line_item' => 'il_xxxxxxxxxxxxx',
                    'quantity' => 1,
                ],
            ],
        ]);
        self::assertInstanceOf(CreditNote::class, $result);
    }

    public function testCreditNotesPreviewGet()
    {
        $this->expectsRequest('get', '/v1/credit_notes/preview');
        $result = $this->client->creditNotes->preview([
            'invoice' => 'in_xxxxxxxxxxxxx',
            'lines' => [
                [
                    'type' => 'invoice_line_item',
                    'invoice_line_item' => 'il_xxxxxxxxxxxxx',
                    'quantity' => 1,
                ],
            ],
        ]);
        self::assertInstanceOf(CreditNote::class, $result);
    }

    public function testCreditNotesPreviewLinesGet()
    {
        $this->expectsRequest('get', '/v1/credit_notes/preview/lines');
        $result = $this->client->creditNotes->previewLines([
            'limit' => 3,
            'invoice' => 'in_xxxxxxxxxxxxx',
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(CreditNoteLineItem::class, $result->data[0]);
    }

    public function testCreditNotesVoidPost()
    {
        $this->expectsRequest('post', '/v1/credit_notes/cn_xxxxxxxxxxxxx/void');
        $result = $this->client->creditNotes->voidCreditNote(
            'cn_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(CreditNote::class, $result);
    }

    public function testCustomerSessionsPost()
    {
        $this->expectsRequest('post', '/v1/customer_sessions');
        $result = $this->client->customerSessions->create([
            'customer' => 'cus_123',
            'components' => ['buy_button' => ['enabled' => true]],
        ]);
        self::assertInstanceOf(CustomerSession::class, $result);
    }

    public function testCustomersBalanceTransactionsGet()
    {
        $this->expectsRequest(
            'get',
            '/v1/customers/cus_xxxxxxxxxxxxx/balance_transactions'
        );
        $result = $this->client->customers->allBalanceTransactions(
            'cus_xxxxxxxxxxxxx',
            ['limit' => 3]
        );
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(CustomerBalanceTransaction::class, $result->data[0]);
    }

    public function testCustomersBalanceTransactionsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/customers/cus_xxxxxxxxxxxxx/balance_transactions/cbtxn_xxxxxxxxxxxxx'
        );
        $result = $this->client->customers->retrieveBalanceTransaction(
            'cus_xxxxxxxxxxxxx',
            'cbtxn_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(CustomerBalanceTransaction::class, $result);
    }

    public function testCustomersBalanceTransactionsPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/customers/cus_xxxxxxxxxxxxx/balance_transactions'
        );
        $result = $this->client->customers->createBalanceTransaction(
            'cus_xxxxxxxxxxxxx',
            [
                'amount' => -500,
                'currency' => 'usd',
            ]
        );
        self::assertInstanceOf(CustomerBalanceTransaction::class, $result);
    }

    public function testCustomersBalanceTransactionsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/customers/cus_xxxxxxxxxxxxx/balance_transactions/cbtxn_xxxxxxxxxxxxx'
        );
        $result = $this->client->customers->updateBalanceTransaction(
            'cus_xxxxxxxxxxxxx',
            'cbtxn_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(CustomerBalanceTransaction::class, $result);
    }

    public function testCustomersCashBalanceGet()
    {
        $this->expectsRequest('get', '/v1/customers/cus_123/cash_balance');
        $result = $this->client->customers->retrieveCashBalance('cus_123', []);
        self::assertInstanceOf(CashBalance::class, $result);
    }

    public function testCustomersCashBalancePost()
    {
        $this->expectsRequest('post', '/v1/customers/cus_123/cash_balance');
        $result = $this->client->customers->updateCashBalance(
            'cus_123',
            ['settings' => ['reconciliation_mode' => 'manual']]
        );
        self::assertInstanceOf(CashBalance::class, $result);
    }

    public function testCustomersCashBalanceTransactionsGet()
    {
        $this->expectsRequest(
            'get',
            '/v1/customers/cus_123/cash_balance_transactions'
        );
        $result = $this->client->customers->allCashBalanceTransactions(
            'cus_123',
            ['limit' => 3]
        );
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(CustomerCashBalanceTransaction::class, $result->data[0]);
    }

    public function testCustomersDelete()
    {
        $this->expectsRequest('delete', '/v1/customers/cus_xxxxxxxxxxxxx');
        $result = $this->client->customers->delete('cus_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Customer::class, $result);
    }

    public function testCustomersFundingInstructionsPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/customers/cus_123/funding_instructions'
        );
        $result = $this->client->customers->createFundingInstructions(
            'cus_123',
            [
                'bank_transfer' => [
                    'requested_address_types' => ['zengin'],
                    'type' => 'jp_bank_transfer',
                ],
                'currency' => 'usd',
                'funding_type' => 'bank_transfer',
            ]
        );
        self::assertInstanceOf(FundingInstructions::class, $result);
    }

    public function testCustomersGet()
    {
        $this->expectsRequest('get', '/v1/customers');
        $result = $this->client->customers->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Customer::class, $result->data[0]);
    }

    public function testCustomersGet2()
    {
        $this->expectsRequest('get', '/v1/customers');
        $result = $this->client->customers->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Customer::class, $result->data[0]);
    }

    public function testCustomersGet3()
    {
        $this->expectsRequest('get', '/v1/customers/cus_xxxxxxxxxxxxx');
        $result = $this->client->customers->retrieve('cus_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Customer::class, $result);
    }

    public function testCustomersPost()
    {
        $this->expectsRequest('post', '/v1/customers');
        $result = $this->client->customers->create([
            'description' => 'My First Test Customer (created for API docs at https://www.stripe.com/docs/api)',
        ]);
        self::assertInstanceOf(Customer::class, $result);
    }

    public function testCustomersPost2()
    {
        $this->expectsRequest('post', '/v1/customers/cus_xxxxxxxxxxxxx');
        $result = $this->client->customers->update(
            'cus_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Customer::class, $result);
    }

    public function testCustomersSearchGet()
    {
        $this->expectsRequest('get', '/v1/customers/search');
        $result = $this->client->customers->search([
            'query' => 'name:\'fakename\' AND metadata[\'foo\']:\'bar\'',
        ]);
        self::assertInstanceOf(SearchResult::class, $result);
        self::assertInstanceOf(Customer::class, $result->data[0]);
    }

    public function testCustomersSearchGet2()
    {
        $this->expectsRequest('get', '/v1/customers/search');
        $result = $this->client->customers->search([
            'query' => 'name:\'fakename\' AND metadata[\'foo\']:\'bar\'',
        ]);
        self::assertInstanceOf(SearchResult::class, $result);
        self::assertInstanceOf(Customer::class, $result->data[0]);
    }

    public function testCustomersTaxIdsDelete()
    {
        $this->expectsRequest(
            'delete',
            '/v1/customers/cus_xxxxxxxxxxxxx/tax_ids/txi_xxxxxxxxxxxxx'
        );
        $result = $this->client->customers->deleteTaxId(
            'cus_xxxxxxxxxxxxx',
            'txi_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(TaxId::class, $result);
    }

    public function testCustomersTaxIdsGet()
    {
        $this->expectsRequest('get', '/v1/customers/cus_xxxxxxxxxxxxx/tax_ids');
        $result = $this->client->customers->allTaxIds(
            'cus_xxxxxxxxxxxxx',
            ['limit' => 3]
        );
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(TaxId::class, $result->data[0]);
    }

    public function testCustomersTaxIdsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/customers/cus_xxxxxxxxxxxxx/tax_ids/txi_xxxxxxxxxxxxx'
        );
        $result = $this->client->customers->retrieveTaxId(
            'cus_xxxxxxxxxxxxx',
            'txi_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(TaxId::class, $result);
    }

    public function testCustomersTaxIdsPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/customers/cus_xxxxxxxxxxxxx/tax_ids'
        );
        $result = $this->client->customers->createTaxId(
            'cus_xxxxxxxxxxxxx',
            [
                'type' => 'eu_vat',
                'value' => 'DE123456789',
            ]
        );
        self::assertInstanceOf(TaxId::class, $result);
    }

    public function testDisputesClosePost()
    {
        $this->expectsRequest('post', '/v1/disputes/dp_xxxxxxxxxxxxx/close');
        $result = $this->client->disputes->close('dp_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Dispute::class, $result);
    }

    public function testDisputesGet()
    {
        $this->expectsRequest('get', '/v1/disputes');
        $result = $this->client->disputes->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Dispute::class, $result->data[0]);
    }

    public function testDisputesGet2()
    {
        $this->expectsRequest('get', '/v1/disputes/dp_xxxxxxxxxxxxx');
        $result = $this->client->disputes->retrieve('dp_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Dispute::class, $result);
    }

    public function testDisputesPost()
    {
        $this->expectsRequest('post', '/v1/disputes/dp_xxxxxxxxxxxxx');
        $result = $this->client->disputes->update(
            'dp_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Dispute::class, $result);
    }

    public function testEventsGet()
    {
        $this->expectsRequest('get', '/v1/events');
        $result = $this->client->events->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Event::class, $result->data[0]);
    }

    public function testEventsGet2()
    {
        $this->expectsRequest('get', '/v1/events/evt_xxxxxxxxxxxxx');
        $result = $this->client->events->retrieve('evt_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Event::class, $result);
    }

    public function testFileLinksGet()
    {
        $this->expectsRequest('get', '/v1/file_links');
        $result = $this->client->fileLinks->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(FileLink::class, $result->data[0]);
    }

    public function testFileLinksGet2()
    {
        $this->expectsRequest('get', '/v1/file_links/link_xxxxxxxxxxxxx');
        $result = $this->client->fileLinks->retrieve('link_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(FileLink::class, $result);
    }

    public function testFileLinksPost()
    {
        $this->expectsRequest('post', '/v1/file_links');
        $result = $this->client->fileLinks->create([
            'file' => 'file_xxxxxxxxxxxxx',
        ]);
        self::assertInstanceOf(FileLink::class, $result);
    }

    public function testFileLinksPost2()
    {
        $this->expectsRequest('post', '/v1/file_links/link_xxxxxxxxxxxxx');
        $result = $this->client->fileLinks->update(
            'link_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(FileLink::class, $result);
    }

    public function testFilesGet()
    {
        $this->expectsRequest('get', '/v1/files');
        $result = $this->client->files->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(File::class, $result->data[0]);
    }

    public function testFilesGet2()
    {
        $this->expectsRequest('get', '/v1/files/file_xxxxxxxxxxxxx');
        $result = $this->client->files->retrieve('file_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(File::class, $result);
    }

    public function testFinancialConnectionsAccountsDisconnectPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/financial_connections/accounts/fca_xyz/disconnect'
        );
        $result = $this->client->financialConnections->accounts->disconnect(
            'fca_xyz',
            []
        );
        self::assertInstanceOf(FinancialConnections\Account::class, $result);
    }

    public function testFinancialConnectionsAccountsDisconnectPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/financial_connections/accounts/fca_xxxxxxxxxxxxx/disconnect'
        );
        $result = $this->client->financialConnections->accounts->disconnect(
            'fca_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(FinancialConnections\Account::class, $result);
    }

    public function testFinancialConnectionsAccountsGet()
    {
        $this->expectsRequest('get', '/v1/financial_connections/accounts');
        $result = $this->client->financialConnections->accounts->all([]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(FinancialConnections\Account::class, $result->data[0]);
    }

    public function testFinancialConnectionsAccountsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/financial_connections/accounts/fca_xyz'
        );
        $result = $this->client->financialConnections->accounts->retrieve(
            'fca_xyz',
            []
        );
        self::assertInstanceOf(FinancialConnections\Account::class, $result);
    }

    public function testFinancialConnectionsAccountsGet3()
    {
        $this->expectsRequest('get', '/v1/financial_connections/accounts');
        $result = $this->client->financialConnections->accounts->all([
            'account_holder' => ['customer' => 'cus_xxxxxxxxxxxxx'],
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(FinancialConnections\Account::class, $result->data[0]);
    }

    public function testFinancialConnectionsAccountsGet4()
    {
        $this->expectsRequest(
            'get',
            '/v1/financial_connections/accounts/fca_xxxxxxxxxxxxx'
        );
        $result = $this->client->financialConnections->accounts->retrieve(
            'fca_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(FinancialConnections\Account::class, $result);
    }

    public function testFinancialConnectionsAccountsOwnersGet()
    {
        $this->expectsRequest(
            'get',
            '/v1/financial_connections/accounts/fca_xyz/owners'
        );
        $result = $this->client->financialConnections->accounts->allOwners(
            'fca_xyz',
            ['ownership' => 'fcaowns_xyz']
        );
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(FinancialConnections\AccountOwner::class, $result->data[0]);
    }

    public function testFinancialConnectionsAccountsOwnersGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/financial_connections/accounts/fca_xxxxxxxxxxxxx/owners'
        );
        $result = $this->client->financialConnections->accounts->allOwners(
            'fca_xxxxxxxxxxxxx',
            [
                'limit' => 3,
                'ownership' => 'fcaowns_xxxxxxxxxxxxx',
            ]
        );
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(FinancialConnections\AccountOwner::class, $result->data[0]);
    }

    public function testFinancialConnectionsAccountsRefreshPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/financial_connections/accounts/fca_xyz/refresh'
        );
        $result = $this->client->financialConnections->accounts->refresh(
            'fca_xyz',
            ['features' => ['balance']]
        );
        self::assertInstanceOf(FinancialConnections\Account::class, $result);
    }

    public function testFinancialConnectionsAccountsSubscribePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/financial_connections/accounts/fa_123/subscribe'
        );
        $result = $this->client->financialConnections->accounts->subscribe(
            'fa_123',
            ['features' => ['transactions']]
        );
        self::assertInstanceOf(FinancialConnections\Account::class, $result);
    }

    public function testFinancialConnectionsAccountsUnsubscribePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/financial_connections/accounts/fa_123/unsubscribe'
        );
        $result = $this->client->financialConnections->accounts->unsubscribe(
            'fa_123',
            ['features' => ['transactions']]
        );
        self::assertInstanceOf(FinancialConnections\Account::class, $result);
    }

    public function testFinancialConnectionsSessionsGet()
    {
        $this->expectsRequest(
            'get',
            '/v1/financial_connections/sessions/fcsess_xyz'
        );
        $result = $this->client->financialConnections->sessions->retrieve(
            'fcsess_xyz',
            []
        );
        self::assertInstanceOf(FinancialConnections\Session::class, $result);
    }

    public function testFinancialConnectionsSessionsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/financial_connections/sessions/fcsess_xxxxxxxxxxxxx'
        );
        $result = $this->client->financialConnections->sessions->retrieve(
            'fcsess_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(FinancialConnections\Session::class, $result);
    }

    public function testFinancialConnectionsSessionsPost()
    {
        $this->expectsRequest('post', '/v1/financial_connections/sessions');
        $result = $this->client->financialConnections->sessions->create([
            'account_holder' => [
                'type' => 'customer',
                'customer' => 'cus_123',
            ],
            'permissions' => ['balances'],
        ]);
        self::assertInstanceOf(FinancialConnections\Session::class, $result);
    }

    public function testFinancialConnectionsSessionsPost2()
    {
        $this->expectsRequest('post', '/v1/financial_connections/sessions');
        $result = $this->client->financialConnections->sessions->create([
            'account_holder' => [
                'type' => 'customer',
                'customer' => 'cus_xxxxxxxxxxxxx',
            ],
            'permissions' => ['payment_method', 'balances'],
            'filters' => ['countries' => ['US']],
        ]);
        self::assertInstanceOf(FinancialConnections\Session::class, $result);
    }

    public function testFinancialConnectionsTransactionsGet()
    {
        $this->expectsRequest(
            'get',
            '/v1/financial_connections/transactions/tr_123'
        );
        $result = $this->client->financialConnections->transactions->retrieve(
            'tr_123',
            []
        );
        self::assertInstanceOf(FinancialConnections\Transaction::class, $result);
    }

    public function testFinancialConnectionsTransactionsGet2()
    {
        $this->expectsRequest('get', '/v1/financial_connections/transactions');
        $result = $this->client->financialConnections->transactions->all([
            'account' => 'fca_xyz',
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(FinancialConnections\Transaction::class, $result->data[0]);
    }

    public function testIdentityVerificationReportsGet()
    {
        $this->expectsRequest('get', '/v1/identity/verification_reports');
        $result = $this->client->identity->verificationReports->all([
            'limit' => 3,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Identity\VerificationReport::class, $result->data[0]);
    }

    public function testIdentityVerificationReportsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/identity/verification_reports/vr_xxxxxxxxxxxxx'
        );
        $result = $this->client->identity->verificationReports->retrieve(
            'vr_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Identity\VerificationReport::class, $result);
    }

    public function testIdentityVerificationSessionsCancelPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/identity/verification_sessions/vs_xxxxxxxxxxxxx/cancel'
        );
        $result = $this->client->identity->verificationSessions->cancel(
            'vs_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Identity\VerificationSession::class, $result);
    }

    public function testIdentityVerificationSessionsGet()
    {
        $this->expectsRequest('get', '/v1/identity/verification_sessions');
        $result = $this->client->identity->verificationSessions->all([
            'limit' => 3,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Identity\VerificationSession::class, $result->data[0]);
    }

    public function testIdentityVerificationSessionsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/identity/verification_sessions/vs_xxxxxxxxxxxxx'
        );
        $result = $this->client->identity->verificationSessions->retrieve(
            'vs_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Identity\VerificationSession::class, $result);
    }

    public function testIdentityVerificationSessionsPost()
    {
        $this->expectsRequest('post', '/v1/identity/verification_sessions');
        $result = $this->client->identity->verificationSessions->create([
            'type' => 'document',
        ]);
        self::assertInstanceOf(Identity\VerificationSession::class, $result);
    }

    public function testIdentityVerificationSessionsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/identity/verification_sessions/vs_xxxxxxxxxxxxx'
        );
        $result = $this->client->identity->verificationSessions->update(
            'vs_xxxxxxxxxxxxx',
            ['type' => 'id_number']
        );
        self::assertInstanceOf(Identity\VerificationSession::class, $result);
    }

    public function testIdentityVerificationSessionsRedactPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/identity/verification_sessions/vs_xxxxxxxxxxxxx/redact'
        );
        $result = $this->client->identity->verificationSessions->redact(
            'vs_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Identity\VerificationSession::class, $result);
    }

    public function testInvoiceitemsDelete()
    {
        $this->expectsRequest('delete', '/v1/invoiceitems/ii_xxxxxxxxxxxxx');
        $result = $this->client->invoiceItems->delete('ii_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(InvoiceItem::class, $result);
    }

    public function testInvoiceitemsGet()
    {
        $this->expectsRequest('get', '/v1/invoiceitems');
        $result = $this->client->invoiceItems->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(InvoiceItem::class, $result->data[0]);
    }

    public function testInvoiceitemsGet2()
    {
        $this->expectsRequest('get', '/v1/invoiceitems/ii_xxxxxxxxxxxxx');
        $result = $this->client->invoiceItems->retrieve('ii_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(InvoiceItem::class, $result);
    }

    public function testInvoiceitemsPost()
    {
        $this->expectsRequest('post', '/v1/invoiceitems');
        $result = $this->client->invoiceItems->create([
            'customer' => 'cus_xxxxxxxxxxxxx',
        ]);
        self::assertInstanceOf(InvoiceItem::class, $result);
    }

    public function testInvoiceitemsPost2()
    {
        $this->expectsRequest('post', '/v1/invoiceitems/ii_xxxxxxxxxxxxx');
        $result = $this->client->invoiceItems->update(
            'ii_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(InvoiceItem::class, $result);
    }

    public function testInvoicesDelete()
    {
        $this->expectsRequest('delete', '/v1/invoices/in_xxxxxxxxxxxxx');
        $result = $this->client->invoices->delete('in_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Invoice::class, $result);
    }

    public function testInvoicesFinalizePost()
    {
        $this->expectsRequest('post', '/v1/invoices/in_xxxxxxxxxxxxx/finalize');
        $result = $this->client->invoices->finalizeInvoice(
            'in_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Invoice::class, $result);
    }

    public function testInvoicesGet()
    {
        $this->expectsRequest('get', '/v1/invoices');
        $result = $this->client->invoices->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Invoice::class, $result->data[0]);
    }

    public function testInvoicesGet2()
    {
        $this->expectsRequest('get', '/v1/invoices/in_xxxxxxxxxxxxx');
        $result = $this->client->invoices->retrieve('in_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Invoice::class, $result);
    }

    public function testInvoicesGet3()
    {
        $this->expectsRequest('get', '/v1/invoices/in_xxxxxxxxxxxxx');
        $result = $this->client->invoices->retrieve(
            'in_xxxxxxxxxxxxx',
            ['expand' => ['customer']]
        );
        self::assertInstanceOf(Invoice::class, $result);
    }

    public function testInvoicesMarkUncollectiblePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/invoices/in_xxxxxxxxxxxxx/mark_uncollectible'
        );
        $result = $this->client->invoices->markUncollectible(
            'in_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Invoice::class, $result);
    }

    public function testInvoicesPayPost()
    {
        $this->expectsRequest('post', '/v1/invoices/in_xxxxxxxxxxxxx/pay');
        $result = $this->client->invoices->pay('in_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Invoice::class, $result);
    }

    public function testInvoicesPost()
    {
        $this->expectsRequest('post', '/v1/invoices');
        $result = $this->client->invoices->create([
            'customer' => 'cus_xxxxxxxxxxxxx',
        ]);
        self::assertInstanceOf(Invoice::class, $result);
    }

    public function testInvoicesPost2()
    {
        $this->expectsRequest('post', '/v1/invoices/in_xxxxxxxxxxxxx');
        $result = $this->client->invoices->update(
            'in_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Invoice::class, $result);
    }

    public function testInvoicesSearchGet()
    {
        $this->expectsRequest('get', '/v1/invoices/search');
        $result = $this->client->invoices->search([
            'query' => 'total>999 AND metadata[\'order_id\']:\'6735\'',
        ]);
        self::assertInstanceOf(SearchResult::class, $result);
        self::assertInstanceOf(Invoice::class, $result->data[0]);
    }

    public function testInvoicesSendPost()
    {
        $this->expectsRequest('post', '/v1/invoices/in_xxxxxxxxxxxxx/send');
        $result = $this->client->invoices->sendInvoice('in_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Invoice::class, $result);
    }

    public function testInvoicesVoidPost()
    {
        $this->expectsRequest('post', '/v1/invoices/in_xxxxxxxxxxxxx/void');
        $result = $this->client->invoices->voidInvoice('in_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Invoice::class, $result);
    }

    public function testIssuingAuthorizationsApprovePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/issuing/authorizations/iauth_xxxxxxxxxxxxx/approve'
        );
        $result = $this->client->issuing->authorizations->approve(
            'iauth_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Issuing\Authorization::class, $result);
    }

    public function testIssuingAuthorizationsDeclinePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/issuing/authorizations/iauth_xxxxxxxxxxxxx/decline'
        );
        $result = $this->client->issuing->authorizations->decline(
            'iauth_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Issuing\Authorization::class, $result);
    }

    public function testIssuingAuthorizationsGet()
    {
        $this->expectsRequest('get', '/v1/issuing/authorizations');
        $result = $this->client->issuing->authorizations->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Issuing\Authorization::class, $result->data[0]);
    }

    public function testIssuingAuthorizationsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/issuing/authorizations/iauth_xxxxxxxxxxxxx'
        );
        $result = $this->client->issuing->authorizations->retrieve(
            'iauth_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Issuing\Authorization::class, $result);
    }

    public function testIssuingAuthorizationsPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/issuing/authorizations/iauth_xxxxxxxxxxxxx'
        );
        $result = $this->client->issuing->authorizations->update(
            'iauth_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Issuing\Authorization::class, $result);
    }

    public function testIssuingCardholdersGet()
    {
        $this->expectsRequest('get', '/v1/issuing/cardholders');
        $result = $this->client->issuing->cardholders->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Issuing\Cardholder::class, $result->data[0]);
    }

    public function testIssuingCardholdersGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/issuing/cardholders/ich_xxxxxxxxxxxxx'
        );
        $result = $this->client->issuing->cardholders->retrieve(
            'ich_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Issuing\Cardholder::class, $result);
    }

    public function testIssuingCardholdersPost()
    {
        $this->expectsRequest('post', '/v1/issuing/cardholders');
        $result = $this->client->issuing->cardholders->create([
            'type' => 'individual',
            'name' => 'Jenny Rosen',
            'email' => 'jenny.rosen@example.com',
            'phone_number' => '+18888675309',
            'billing' => [
                'address' => [
                    'line1' => '1234 Main Street',
                    'city' => 'San Francisco',
                    'state' => 'CA',
                    'country' => 'US',
                    'postal_code' => '94111',
                ],
            ],
        ]);
        self::assertInstanceOf(Issuing\Cardholder::class, $result);
    }

    public function testIssuingCardholdersPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/issuing/cardholders/ich_xxxxxxxxxxxxx'
        );
        $result = $this->client->issuing->cardholders->update(
            'ich_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Issuing\Cardholder::class, $result);
    }

    public function testIssuingCardsGet()
    {
        $this->expectsRequest('get', '/v1/issuing/cards');
        $result = $this->client->issuing->cards->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Issuing\Card::class, $result->data[0]);
    }

    public function testIssuingCardsGet2()
    {
        $this->expectsRequest('get', '/v1/issuing/cards/ic_xxxxxxxxxxxxx');
        $result = $this->client->issuing->cards->retrieve(
            'ic_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Issuing\Card::class, $result);
    }

    public function testIssuingCardsPost()
    {
        $this->expectsRequest('post', '/v1/issuing/cards');
        $result = $this->client->issuing->cards->create([
            'cardholder' => 'ich_xxxxxxxxxxxxx',
            'currency' => 'usd',
            'type' => 'virtual',
        ]);
        self::assertInstanceOf(Issuing\Card::class, $result);
    }

    public function testIssuingCardsPost2()
    {
        $this->expectsRequest('post', '/v1/issuing/cards/ic_xxxxxxxxxxxxx');
        $result = $this->client->issuing->cards->update(
            'ic_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Issuing\Card::class, $result);
    }

    public function testIssuingDisputesGet()
    {
        $this->expectsRequest('get', '/v1/issuing/disputes');
        $result = $this->client->issuing->disputes->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Issuing\Dispute::class, $result->data[0]);
    }

    public function testIssuingDisputesGet2()
    {
        $this->expectsRequest('get', '/v1/issuing/disputes/idp_xxxxxxxxxxxxx');
        $result = $this->client->issuing->disputes->retrieve(
            'idp_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Issuing\Dispute::class, $result);
    }

    public function testIssuingDisputesPost()
    {
        $this->expectsRequest('post', '/v1/issuing/disputes');
        $result = $this->client->issuing->disputes->create([
            'transaction' => 'ipi_xxxxxxxxxxxxx',
            'evidence' => [
                'reason' => 'fraudulent',
                'fraudulent' => ['explanation' => 'Purchase was unrecognized.'],
            ],
        ]);
        self::assertInstanceOf(Issuing\Dispute::class, $result);
    }

    public function testIssuingDisputesSubmitPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/issuing/disputes/idp_xxxxxxxxxxxxx/submit'
        );
        $result = $this->client->issuing->disputes->submit(
            'idp_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Issuing\Dispute::class, $result);
    }

    public function testIssuingPersonalizationDesignsGet()
    {
        $this->expectsRequest('get', '/v1/issuing/personalization_designs');
        $result = $this->client->issuing->personalizationDesigns->all([]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Issuing\PersonalizationDesign::class, $result->data[0]);
    }

    public function testIssuingPersonalizationDesignsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/issuing/personalization_designs/pd_xyz'
        );
        $result = $this->client->issuing->personalizationDesigns->retrieve(
            'pd_xyz',
            []
        );
        self::assertInstanceOf(Issuing\PersonalizationDesign::class, $result);
    }

    public function testIssuingPersonalizationDesignsPost()
    {
        $this->expectsRequest('post', '/v1/issuing/personalization_designs');
        $result = $this->client->issuing->personalizationDesigns->create([
            'physical_bundle' => 'pb_xyz',
        ]);
        self::assertInstanceOf(Issuing\PersonalizationDesign::class, $result);
    }

    public function testIssuingPersonalizationDesignsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/issuing/personalization_designs/pd_xyz'
        );
        $result = $this->client->issuing->personalizationDesigns->update(
            'pd_xyz',
            []
        );
        self::assertInstanceOf(Issuing\PersonalizationDesign::class, $result);
    }

    public function testIssuingPhysicalBundlesGet()
    {
        $this->expectsRequest('get', '/v1/issuing/physical_bundles');
        $result = $this->client->issuing->physicalBundles->all([]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Issuing\PhysicalBundle::class, $result->data[0]);
    }

    public function testIssuingPhysicalBundlesGet2()
    {
        $this->expectsRequest('get', '/v1/issuing/physical_bundles/pb_xyz');
        $result = $this->client->issuing->physicalBundles->retrieve(
            'pb_xyz',
            []
        );
        self::assertInstanceOf(Issuing\PhysicalBundle::class, $result);
    }

    public function testIssuingTransactionsGet()
    {
        $this->expectsRequest('get', '/v1/issuing/transactions');
        $result = $this->client->issuing->transactions->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Issuing\Transaction::class, $result->data[0]);
    }

    public function testIssuingTransactionsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/issuing/transactions/ipi_xxxxxxxxxxxxx'
        );
        $result = $this->client->issuing->transactions->retrieve(
            'ipi_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Issuing\Transaction::class, $result);
    }

    public function testIssuingTransactionsPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/issuing/transactions/ipi_xxxxxxxxxxxxx'
        );
        $result = $this->client->issuing->transactions->update(
            'ipi_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Issuing\Transaction::class, $result);
    }

    public function testMandatesGet()
    {
        $this->expectsRequest('get', '/v1/mandates/mandate_xxxxxxxxxxxxx');
        $result = $this->client->mandates->retrieve(
            'mandate_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Mandate::class, $result);
    }

    public function testPaymentIntentsApplyCustomerBalancePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/payment_intents/pi_xxxxxxxxxxxxx/apply_customer_balance'
        );
        $result = $this->client->paymentIntents->applyCustomerBalance(
            'pi_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(PaymentIntent::class, $result);
    }

    public function testPaymentIntentsCancelPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/payment_intents/pi_xxxxxxxxxxxxx/cancel'
        );
        $result = $this->client->paymentIntents->cancel('pi_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(PaymentIntent::class, $result);
    }

    public function testPaymentIntentsCapturePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/payment_intents/pi_xxxxxxxxxxxxx/capture'
        );
        $result = $this->client->paymentIntents->capture(
            'pi_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(PaymentIntent::class, $result);
    }

    public function testPaymentIntentsConfirmPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/payment_intents/pi_xxxxxxxxxxxxx/confirm'
        );
        $result = $this->client->paymentIntents->confirm(
            'pi_xxxxxxxxxxxxx',
            ['payment_method' => 'pm_card_visa']
        );
        self::assertInstanceOf(PaymentIntent::class, $result);
    }

    public function testPaymentIntentsGet()
    {
        $this->expectsRequest('get', '/v1/payment_intents');
        $result = $this->client->paymentIntents->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(PaymentIntent::class, $result->data[0]);
    }

    public function testPaymentIntentsGet2()
    {
        $this->expectsRequest('get', '/v1/payment_intents/pi_xxxxxxxxxxxxx');
        $result = $this->client->paymentIntents->retrieve(
            'pi_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(PaymentIntent::class, $result);
    }

    public function testPaymentIntentsIncrementAuthorizationPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/payment_intents/pi_xxxxxxxxxxxxx/increment_authorization'
        );
        $result = $this->client->paymentIntents->incrementAuthorization(
            'pi_xxxxxxxxxxxxx',
            ['amount' => 2099]
        );
        self::assertInstanceOf(PaymentIntent::class, $result);
    }

    public function testPaymentIntentsPost()
    {
        $this->expectsRequest('post', '/v1/payment_intents');
        $result = $this->client->paymentIntents->create([
            'amount' => 1099,
            'currency' => 'eur',
            'automatic_payment_methods' => ['enabled' => true],
        ]);
        self::assertInstanceOf(PaymentIntent::class, $result);
    }

    public function testPaymentIntentsPost2()
    {
        $this->expectsRequest('post', '/v1/payment_intents');
        $result = $this->client->paymentIntents->create([
            'amount' => 2000,
            'currency' => 'usd',
            'automatic_payment_methods' => ['enabled' => true],
        ]);
        self::assertInstanceOf(PaymentIntent::class, $result);
    }

    public function testPaymentIntentsPost3()
    {
        $this->expectsRequest('post', '/v1/payment_intents/pi_xxxxxxxxxxxxx');
        $result = $this->client->paymentIntents->update(
            'pi_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(PaymentIntent::class, $result);
    }

    public function testPaymentIntentsPost4()
    {
        $this->expectsRequest('post', '/v1/payment_intents');
        $result = $this->client->paymentIntents->create([
            'amount' => 200,
            'currency' => 'usd',
            'payment_method_data' => [
                'type' => 'p24',
                'p24' => ['bank' => 'blik'],
            ],
        ]);
        self::assertInstanceOf(PaymentIntent::class, $result);
    }

    public function testPaymentIntentsSearchGet()
    {
        $this->expectsRequest('get', '/v1/payment_intents/search');
        $result = $this->client->paymentIntents->search([
            'query' => 'status:\'succeeded\' AND metadata[\'order_id\']:\'6735\'',
        ]);
        self::assertInstanceOf(SearchResult::class, $result);
        self::assertInstanceOf(PaymentIntent::class, $result->data[0]);
    }

    public function testPaymentIntentsVerifyMicrodepositsPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/payment_intents/pi_xxxxxxxxxxxxx/verify_microdeposits'
        );
        $result = $this->client->paymentIntents->verifyMicrodeposits(
            'pi_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(PaymentIntent::class, $result);
    }

    public function testPaymentIntentsVerifyMicrodepositsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/payment_intents/pi_xxxxxxxxxxxxx/verify_microdeposits'
        );
        $result = $this->client->paymentIntents->verifyMicrodeposits(
            'pi_xxxxxxxxxxxxx',
            ['amounts' => [32, 45]]
        );
        self::assertInstanceOf(PaymentIntent::class, $result);
    }

    public function testPaymentLinksGet()
    {
        $this->expectsRequest('get', '/v1/payment_links/pl_xyz');
        $result = $this->client->paymentLinks->retrieve('pl_xyz', []);
        self::assertInstanceOf(PaymentLink::class, $result);
    }

    public function testPaymentLinksGet2()
    {
        $this->expectsRequest('get', '/v1/payment_links');
        $result = $this->client->paymentLinks->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(PaymentLink::class, $result->data[0]);
    }

    public function testPaymentLinksGet3()
    {
        $this->expectsRequest('get', '/v1/payment_links/plink_xxxxxxxxxxxxx');
        $result = $this->client->paymentLinks->retrieve(
            'plink_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(PaymentLink::class, $result);
    }

    public function testPaymentLinksLineItemsGet()
    {
        $this->expectsRequest('get', '/v1/payment_links/pl_xyz/line_items');
        $result = $this->client->paymentLinks->allLineItems('pl_xyz', []);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(LineItem::class, $result->data[0]);
    }

    public function testPaymentLinksPost()
    {
        $this->expectsRequest('post', '/v1/payment_links');
        $result = $this->client->paymentLinks->create([
            'line_items' => [
                [
                    'price' => 'price_xxxxxxxxxxxxx',
                    'quantity' => 1,
                ],
            ],
        ]);
        self::assertInstanceOf(PaymentLink::class, $result);
    }

    public function testPaymentLinksPost2()
    {
        $this->expectsRequest('post', '/v1/payment_links');
        $result = $this->client->paymentLinks->create([
            'line_items' => [
                [
                    'price' => 'price_xxxxxxxxxxxxx',
                    'quantity' => 1,
                ],
            ],
        ]);
        self::assertInstanceOf(PaymentLink::class, $result);
    }

    public function testPaymentLinksPost3()
    {
        $this->expectsRequest('post', '/v1/payment_links/plink_xxxxxxxxxxxxx');
        $result = $this->client->paymentLinks->update(
            'plink_xxxxxxxxxxxxx',
            ['active' => false]
        );
        self::assertInstanceOf(PaymentLink::class, $result);
    }

    public function testPaymentMethodConfigurationsGet()
    {
        $this->expectsRequest('get', '/v1/payment_method_configurations');
        $result = $this->client->paymentMethodConfigurations->all([
            'application' => 'foo',
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(PaymentMethodConfiguration::class, $result->data[0]);
    }

    public function testPaymentMethodConfigurationsGet2()
    {
        $this->expectsRequest('get', '/v1/payment_method_configurations/foo');
        $result = $this->client->paymentMethodConfigurations->retrieve(
            'foo',
            []
        );
        self::assertInstanceOf(PaymentMethodConfiguration::class, $result);
    }

    public function testPaymentMethodConfigurationsPost()
    {
        $this->expectsRequest('post', '/v1/payment_method_configurations');
        $result = $this->client->paymentMethodConfigurations->create([
            'acss_debit' => ['display_preference' => ['preference' => 'none']],
            'affirm' => ['display_preference' => ['preference' => 'none']],
        ]);
        self::assertInstanceOf(PaymentMethodConfiguration::class, $result);
    }

    public function testPaymentMethodConfigurationsPost2()
    {
        $this->expectsRequest('post', '/v1/payment_method_configurations/foo');
        $result = $this->client->paymentMethodConfigurations->update(
            'foo',
            ['acss_debit' => ['display_preference' => ['preference' => 'on']]]
        );
        self::assertInstanceOf(PaymentMethodConfiguration::class, $result);
    }

    public function testPaymentMethodsAttachPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/payment_methods/pm_xxxxxxxxxxxxx/attach'
        );
        $result = $this->client->paymentMethods->attach(
            'pm_xxxxxxxxxxxxx',
            ['customer' => 'cus_xxxxxxxxxxxxx']
        );
        self::assertInstanceOf(PaymentMethod::class, $result);
    }

    public function testPaymentMethodsDetachPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/payment_methods/pm_xxxxxxxxxxxxx/detach'
        );
        $result = $this->client->paymentMethods->detach('pm_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(PaymentMethod::class, $result);
    }

    public function testPaymentMethodsGet()
    {
        $this->expectsRequest('get', '/v1/payment_methods');
        $result = $this->client->paymentMethods->all([
            'customer' => 'cus_xxxxxxxxxxxxx',
            'type' => 'card',
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(PaymentMethod::class, $result->data[0]);
    }

    public function testPaymentMethodsGet2()
    {
        $this->expectsRequest('get', '/v1/payment_methods/pm_xxxxxxxxxxxxx');
        $result = $this->client->paymentMethods->retrieve(
            'pm_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(PaymentMethod::class, $result);
    }

    public function testPaymentMethodsPost()
    {
        $this->expectsRequest('post', '/v1/payment_methods');
        $result = $this->client->paymentMethods->create([
            'type' => 'card',
            'card' => [
                'number' => '4242424242424242',
                'exp_month' => 8,
                'exp_year' => 2024,
                'cvc' => '314',
            ],
        ]);
        self::assertInstanceOf(PaymentMethod::class, $result);
    }

    public function testPaymentMethodsPost2()
    {
        $this->expectsRequest('post', '/v1/payment_methods/pm_xxxxxxxxxxxxx');
        $result = $this->client->paymentMethods->update(
            'pm_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(PaymentMethod::class, $result);
    }

    public function testPayoutsCancelPost()
    {
        $this->expectsRequest('post', '/v1/payouts/po_xxxxxxxxxxxxx/cancel');
        $result = $this->client->payouts->cancel('po_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Payout::class, $result);
    }

    public function testPayoutsGet()
    {
        $this->expectsRequest('get', '/v1/payouts');
        $result = $this->client->payouts->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Payout::class, $result->data[0]);
    }

    public function testPayoutsGet2()
    {
        $this->expectsRequest('get', '/v1/payouts/po_xxxxxxxxxxxxx');
        $result = $this->client->payouts->retrieve('po_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Payout::class, $result);
    }

    public function testPayoutsPost()
    {
        $this->expectsRequest('post', '/v1/payouts');
        $result = $this->client->payouts->create([
            'amount' => 1100,
            'currency' => 'usd',
        ]);
        self::assertInstanceOf(Payout::class, $result);
    }

    public function testPayoutsPost2()
    {
        $this->expectsRequest('post', '/v1/payouts/po_xxxxxxxxxxxxx');
        $result = $this->client->payouts->update(
            'po_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Payout::class, $result);
    }

    public function testPayoutsReversePost()
    {
        $this->expectsRequest('post', '/v1/payouts/po_xxxxxxxxxxxxx/reverse');
        $result = $this->client->payouts->reverse('po_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Payout::class, $result);
    }

    public function testPlansDelete()
    {
        $this->expectsRequest('delete', '/v1/plans/price_xxxxxxxxxxxxx');
        $result = $this->client->plans->delete('price_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Plan::class, $result);
    }

    public function testPlansGet()
    {
        $this->expectsRequest('get', '/v1/plans');
        $result = $this->client->plans->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Plan::class, $result->data[0]);
    }

    public function testPlansGet2()
    {
        $this->expectsRequest('get', '/v1/plans/price_xxxxxxxxxxxxx');
        $result = $this->client->plans->retrieve('price_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Plan::class, $result);
    }

    public function testPlansPost()
    {
        $this->expectsRequest('post', '/v1/plans');
        $result = $this->client->plans->create([
            'amount' => 2000,
            'currency' => 'usd',
            'interval' => 'month',
            'product' => 'prod_xxxxxxxxxxxxx',
        ]);
        self::assertInstanceOf(Plan::class, $result);
    }

    public function testPlansPost2()
    {
        $this->expectsRequest('post', '/v1/plans');
        $result = $this->client->plans->create([
            'amount' => 2000,
            'currency' => 'usd',
            'interval' => 'month',
            'product' => ['name' => 'My product'],
        ]);
        self::assertInstanceOf(Plan::class, $result);
    }

    public function testPlansPost3()
    {
        $this->expectsRequest('post', '/v1/plans/price_xxxxxxxxxxxxx');
        $result = $this->client->plans->update(
            'price_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Plan::class, $result);
    }

    public function testPricesGet()
    {
        $this->expectsRequest('get', '/v1/prices');
        $result = $this->client->prices->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Price::class, $result->data[0]);
    }

    public function testPricesGet2()
    {
        $this->expectsRequest('get', '/v1/prices/price_xxxxxxxxxxxxx');
        $result = $this->client->prices->retrieve('price_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Price::class, $result);
    }

    public function testPricesPost()
    {
        $this->expectsRequest('post', '/v1/prices');
        $result = $this->client->prices->create([
            'unit_amount' => 2000,
            'currency' => 'usd',
            'currency_options' => [
                'uah' => ['unit_amount' => 5000],
                'eur' => ['unit_amount' => 1800],
            ],
            'recurring' => ['interval' => 'month'],
            'product' => 'prod_xxxxxxxxxxxxx',
        ]);
        self::assertInstanceOf(Price::class, $result);
    }

    public function testPricesPost2()
    {
        $this->expectsRequest('post', '/v1/prices');
        $result = $this->client->prices->create([
            'unit_amount' => 2000,
            'currency' => 'usd',
            'recurring' => ['interval' => 'month'],
            'product' => 'prod_xxxxxxxxxxxxx',
        ]);
        self::assertInstanceOf(Price::class, $result);
    }

    public function testPricesPost3()
    {
        $this->expectsRequest('post', '/v1/prices/price_xxxxxxxxxxxxx');
        $result = $this->client->prices->update(
            'price_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Price::class, $result);
    }

    public function testPricesSearchGet()
    {
        $this->expectsRequest('get', '/v1/prices/search');
        $result = $this->client->prices->search([
            'query' => 'active:\'true\' AND metadata[\'order_id\']:\'6735\'',
        ]);
        self::assertInstanceOf(SearchResult::class, $result);
        self::assertInstanceOf(Price::class, $result->data[0]);
    }

    public function testProductsDelete()
    {
        $this->expectsRequest('delete', '/v1/products/prod_xxxxxxxxxxxxx');
        $result = $this->client->products->delete('prod_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Product::class, $result);
    }

    public function testProductsGet()
    {
        $this->expectsRequest('get', '/v1/products');
        $result = $this->client->products->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Product::class, $result->data[0]);
    }

    public function testProductsGet2()
    {
        $this->expectsRequest('get', '/v1/products/prod_xxxxxxxxxxxxx');
        $result = $this->client->products->retrieve('prod_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Product::class, $result);
    }

    public function testProductsPost()
    {
        $this->expectsRequest('post', '/v1/products');
        $result = $this->client->products->create(['name' => 'Gold Special']);
        self::assertInstanceOf(Product::class, $result);
    }

    public function testProductsPost2()
    {
        $this->expectsRequest('post', '/v1/products/prod_xxxxxxxxxxxxx');
        $result = $this->client->products->update(
            'prod_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Product::class, $result);
    }

    public function testProductsSearchGet()
    {
        $this->expectsRequest('get', '/v1/products/search');
        $result = $this->client->products->search([
            'query' => 'active:\'true\' AND metadata[\'order_id\']:\'6735\'',
        ]);
        self::assertInstanceOf(SearchResult::class, $result);
        self::assertInstanceOf(Product::class, $result->data[0]);
    }

    public function testPromotionCodesGet()
    {
        $this->expectsRequest('get', '/v1/promotion_codes');
        $result = $this->client->promotionCodes->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(PromotionCode::class, $result->data[0]);
    }

    public function testPromotionCodesGet2()
    {
        $this->expectsRequest('get', '/v1/promotion_codes/promo_xxxxxxxxxxxxx');
        $result = $this->client->promotionCodes->retrieve(
            'promo_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(PromotionCode::class, $result);
    }

    public function testPromotionCodesPost()
    {
        $this->expectsRequest('post', '/v1/promotion_codes');
        $result = $this->client->promotionCodes->create([
            'coupon' => 'Z4OV52SU',
        ]);
        self::assertInstanceOf(PromotionCode::class, $result);
    }

    public function testPromotionCodesPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/promotion_codes/promo_xxxxxxxxxxxxx'
        );
        $result = $this->client->promotionCodes->update(
            'promo_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(PromotionCode::class, $result);
    }

    public function testQuotesAcceptPost()
    {
        $this->expectsRequest('post', '/v1/quotes/qt_xxxxxxxxxxxxx/accept');
        $result = $this->client->quotes->accept('qt_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Quote::class, $result);
    }

    public function testQuotesCancelPost()
    {
        $this->expectsRequest('post', '/v1/quotes/qt_xxxxxxxxxxxxx/cancel');
        $result = $this->client->quotes->cancel('qt_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Quote::class, $result);
    }

    public function testQuotesFinalizePost()
    {
        $this->expectsRequest('post', '/v1/quotes/qt_xxxxxxxxxxxxx/finalize');
        $result = $this->client->quotes->finalizeQuote('qt_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Quote::class, $result);
    }

    public function testQuotesGet()
    {
        $this->expectsRequest('get', '/v1/quotes');
        $result = $this->client->quotes->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Quote::class, $result->data[0]);
    }

    public function testQuotesGet2()
    {
        $this->expectsRequest('get', '/v1/quotes/qt_xxxxxxxxxxxxx');
        $result = $this->client->quotes->retrieve('qt_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Quote::class, $result);
    }

    public function testQuotesLineItemsGet()
    {
        $this->expectsRequest('get', '/v1/quotes/qt_xxxxxxxxxxxxx/line_items');
        $result = $this->client->quotes->allLineItems('qt_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(LineItem::class, $result->data[0]);
    }

    public function testQuotesPdfGet()
    {
        $this->expectsRequestStream('get', '/v1/quotes/qt_xxxxxxxxxxxxx/pdf');
        $result = $this->client->quotes->pdf(
            'qt_xxxxxxxxxxxxx',
            static function () {},
            []
        );
        // TODO: assert proper instance, {"shape":"file"}
    }

    public function testQuotesPost()
    {
        $this->expectsRequest('post', '/v1/quotes');
        $result = $this->client->quotes->create([
            'customer' => 'cus_xxxxxxxxxxxxx',
            'line_items' => [
                [
                    'price' => 'price_xxxxxxxxxxxxx',
                    'quantity' => 2,
                ],
            ],
        ]);
        self::assertInstanceOf(Quote::class, $result);
    }

    public function testQuotesPost2()
    {
        $this->expectsRequest('post', '/v1/quotes/qt_xxxxxxxxxxxxx');
        $result = $this->client->quotes->update(
            'qt_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Quote::class, $result);
    }

    public function testRadarEarlyFraudWarningsGet()
    {
        $this->expectsRequest('get', '/v1/radar/early_fraud_warnings');
        $result = $this->client->radar->earlyFraudWarnings->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Radar\EarlyFraudWarning::class, $result->data[0]);
    }

    public function testRadarEarlyFraudWarningsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/radar/early_fraud_warnings/issfr_xxxxxxxxxxxxx'
        );
        $result = $this->client->radar->earlyFraudWarnings->retrieve(
            'issfr_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Radar\EarlyFraudWarning::class, $result);
    }

    public function testRadarValueListItemsDelete()
    {
        $this->expectsRequest(
            'delete',
            '/v1/radar/value_list_items/rsli_xxxxxxxxxxxxx'
        );
        $result = $this->client->radar->valueListItems->delete(
            'rsli_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Radar\ValueListItem::class, $result);
    }

    public function testRadarValueListItemsGet()
    {
        $this->expectsRequest('get', '/v1/radar/value_list_items');
        $result = $this->client->radar->valueListItems->all([
            'limit' => 3,
            'value_list' => 'rsl_xxxxxxxxxxxxx',
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Radar\ValueListItem::class, $result->data[0]);
    }

    public function testRadarValueListItemsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/radar/value_list_items/rsli_xxxxxxxxxxxxx'
        );
        $result = $this->client->radar->valueListItems->retrieve(
            'rsli_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Radar\ValueListItem::class, $result);
    }

    public function testRadarValueListItemsPost()
    {
        $this->expectsRequest('post', '/v1/radar/value_list_items');
        $result = $this->client->radar->valueListItems->create([
            'value_list' => 'rsl_xxxxxxxxxxxxx',
            'value' => '1.2.3.4',
        ]);
        self::assertInstanceOf(Radar\ValueListItem::class, $result);
    }

    public function testRadarValueListsDelete()
    {
        $this->expectsRequest(
            'delete',
            '/v1/radar/value_lists/rsl_xxxxxxxxxxxxx'
        );
        $result = $this->client->radar->valueLists->delete(
            'rsl_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Radar\ValueList::class, $result);
    }

    public function testRadarValueListsGet()
    {
        $this->expectsRequest('get', '/v1/radar/value_lists');
        $result = $this->client->radar->valueLists->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Radar\ValueList::class, $result->data[0]);
    }

    public function testRadarValueListsGet2()
    {
        $this->expectsRequest('get', '/v1/radar/value_lists/rsl_xxxxxxxxxxxxx');
        $result = $this->client->radar->valueLists->retrieve(
            'rsl_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Radar\ValueList::class, $result);
    }

    public function testRadarValueListsPost()
    {
        $this->expectsRequest('post', '/v1/radar/value_lists');
        $result = $this->client->radar->valueLists->create([
            'alias' => 'custom_ip_xxxxxxxxxxxxx',
            'name' => 'Custom IP Blocklist',
            'item_type' => 'ip_address',
        ]);
        self::assertInstanceOf(Radar\ValueList::class, $result);
    }

    public function testRadarValueListsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/radar/value_lists/rsl_xxxxxxxxxxxxx'
        );
        $result = $this->client->radar->valueLists->update(
            'rsl_xxxxxxxxxxxxx',
            ['name' => 'Updated IP Block List']
        );
        self::assertInstanceOf(Radar\ValueList::class, $result);
    }

    public function testRefundsCancelPost()
    {
        $this->expectsRequest('post', '/v1/refunds/re_xxxxxxxxxxxxx/cancel');
        $result = $this->client->refunds->cancel('re_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Refund::class, $result);
    }

    public function testRefundsGet()
    {
        $this->expectsRequest('get', '/v1/refunds');
        $result = $this->client->refunds->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Refund::class, $result->data[0]);
    }

    public function testRefundsGet2()
    {
        $this->expectsRequest('get', '/v1/refunds/re_xxxxxxxxxxxxx');
        $result = $this->client->refunds->retrieve('re_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Refund::class, $result);
    }

    public function testRefundsPost()
    {
        $this->expectsRequest('post', '/v1/refunds');
        $result = $this->client->refunds->create([
            'charge' => 'ch_xxxxxxxxxxxxx',
        ]);
        self::assertInstanceOf(Refund::class, $result);
    }

    public function testRefundsPost2()
    {
        $this->expectsRequest('post', '/v1/refunds/re_xxxxxxxxxxxxx');
        $result = $this->client->refunds->update(
            're_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Refund::class, $result);
    }

    public function testReportingReportRunsGet()
    {
        $this->expectsRequest('get', '/v1/reporting/report_runs');
        $result = $this->client->reporting->reportRuns->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Reporting\ReportRun::class, $result->data[0]);
    }

    public function testReportingReportRunsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/reporting/report_runs/frr_xxxxxxxxxxxxx'
        );
        $result = $this->client->reporting->reportRuns->retrieve(
            'frr_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Reporting\ReportRun::class, $result);
    }

    public function testReportingReportRunsPost()
    {
        $this->expectsRequest('post', '/v1/reporting/report_runs');
        $result = $this->client->reporting->reportRuns->create([
            'report_type' => 'balance.summary.1',
            'parameters' => [
                'interval_start' => 1522540800,
                'interval_end' => 1525132800,
            ],
        ]);
        self::assertInstanceOf(Reporting\ReportRun::class, $result);
    }

    public function testReportingReportTypesGet()
    {
        $this->expectsRequest('get', '/v1/reporting/report_types');
        $result = $this->client->reporting->reportTypes->all([]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Reporting\ReportType::class, $result->data[0]);
    }

    public function testReportingReportTypesGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/reporting/report_types/balance.summary.1'
        );
        $result = $this->client->reporting->reportTypes->retrieve(
            'balance.summary.1',
            []
        );
        self::assertInstanceOf(Reporting\ReportType::class, $result);
    }

    public function testReviewsApprovePost()
    {
        $this->expectsRequest('post', '/v1/reviews/prv_xxxxxxxxxxxxx/approve');
        $result = $this->client->reviews->approve('prv_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Review::class, $result);
    }

    public function testReviewsGet()
    {
        $this->expectsRequest('get', '/v1/reviews');
        $result = $this->client->reviews->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Review::class, $result->data[0]);
    }

    public function testReviewsGet2()
    {
        $this->expectsRequest('get', '/v1/reviews/prv_xxxxxxxxxxxxx');
        $result = $this->client->reviews->retrieve('prv_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Review::class, $result);
    }

    public function testSetupAttemptsGet()
    {
        $this->expectsRequest('get', '/v1/setup_attempts');
        $result = $this->client->setupAttempts->all([
            'limit' => 3,
            'setup_intent' => 'si_xyz',
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(SetupAttempt::class, $result->data[0]);
    }

    public function testSetupIntentsCancelPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/setup_intents/seti_xxxxxxxxxxxxx/cancel'
        );
        $result = $this->client->setupIntents->cancel('seti_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(SetupIntent::class, $result);
    }

    public function testSetupIntentsConfirmPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/setup_intents/seti_xxxxxxxxxxxxx/confirm'
        );
        $result = $this->client->setupIntents->confirm(
            'seti_xxxxxxxxxxxxx',
            ['payment_method' => 'pm_card_visa']
        );
        self::assertInstanceOf(SetupIntent::class, $result);
    }

    public function testSetupIntentsGet()
    {
        $this->expectsRequest('get', '/v1/setup_intents');
        $result = $this->client->setupIntents->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(SetupIntent::class, $result->data[0]);
    }

    public function testSetupIntentsGet2()
    {
        $this->expectsRequest('get', '/v1/setup_intents/seti_xxxxxxxxxxxxx');
        $result = $this->client->setupIntents->retrieve(
            'seti_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(SetupIntent::class, $result);
    }

    public function testSetupIntentsPost()
    {
        $this->expectsRequest('post', '/v1/setup_intents');
        $result = $this->client->setupIntents->create([
            'payment_method_types' => ['card'],
        ]);
        self::assertInstanceOf(SetupIntent::class, $result);
    }

    public function testSetupIntentsPost2()
    {
        $this->expectsRequest('post', '/v1/setup_intents/seti_xxxxxxxxxxxxx');
        $result = $this->client->setupIntents->update(
            'seti_xxxxxxxxxxxxx',
            ['metadata' => ['user_id' => '3435453']]
        );
        self::assertInstanceOf(SetupIntent::class, $result);
    }

    public function testSetupIntentsVerifyMicrodepositsPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/setup_intents/seti_xxxxxxxxxxxxx/verify_microdeposits'
        );
        $result = $this->client->setupIntents->verifyMicrodeposits(
            'seti_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(SetupIntent::class, $result);
    }

    public function testSetupIntentsVerifyMicrodepositsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/setup_intents/seti_xxxxxxxxxxxxx/verify_microdeposits'
        );
        $result = $this->client->setupIntents->verifyMicrodeposits(
            'seti_xxxxxxxxxxxxx',
            ['amounts' => [32, 45]]
        );
        self::assertInstanceOf(SetupIntent::class, $result);
    }

    public function testShippingRatesGet()
    {
        $this->expectsRequest('get', '/v1/shipping_rates');
        $result = $this->client->shippingRates->all([]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(ShippingRate::class, $result->data[0]);
    }

    public function testShippingRatesGet2()
    {
        $this->expectsRequest('get', '/v1/shipping_rates');
        $result = $this->client->shippingRates->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(ShippingRate::class, $result->data[0]);
    }

    public function testShippingRatesGet3()
    {
        $this->expectsRequest('get', '/v1/shipping_rates/shr_xxxxxxxxxxxxx');
        $result = $this->client->shippingRates->retrieve(
            'shr_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(ShippingRate::class, $result);
    }

    public function testShippingRatesPost()
    {
        $this->expectsRequest('post', '/v1/shipping_rates');
        $result = $this->client->shippingRates->create([
            'display_name' => 'Sample Shipper',
            'fixed_amount' => [
                'currency' => 'usd',
                'amount' => 400,
            ],
            'type' => 'fixed_amount',
        ]);
        self::assertInstanceOf(ShippingRate::class, $result);
    }

    public function testShippingRatesPost2()
    {
        $this->expectsRequest('post', '/v1/shipping_rates');
        $result = $this->client->shippingRates->create([
            'display_name' => 'Ground shipping',
            'type' => 'fixed_amount',
            'fixed_amount' => [
                'amount' => 500,
                'currency' => 'usd',
            ],
        ]);
        self::assertInstanceOf(ShippingRate::class, $result);
    }

    public function testShippingRatesPost3()
    {
        $this->expectsRequest('post', '/v1/shipping_rates/shr_xxxxxxxxxxxxx');
        $result = $this->client->shippingRates->update(
            'shr_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(ShippingRate::class, $result);
    }

    public function testSigmaScheduledQueryRunsGet()
    {
        $this->expectsRequest('get', '/v1/sigma/scheduled_query_runs');
        $result = $this->client->sigma->scheduledQueryRuns->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Sigma\ScheduledQueryRun::class, $result->data[0]);
    }

    public function testSigmaScheduledQueryRunsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/sigma/scheduled_query_runs/sqr_xxxxxxxxxxxxx'
        );
        $result = $this->client->sigma->scheduledQueryRuns->retrieve(
            'sqr_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Sigma\ScheduledQueryRun::class, $result);
    }

    public function testSourcesGet()
    {
        $this->expectsRequest('get', '/v1/sources/src_xxxxxxxxxxxxx');
        $result = $this->client->sources->retrieve('src_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Source::class, $result);
    }

    public function testSourcesGet2()
    {
        $this->expectsRequest('get', '/v1/sources/src_xxxxxxxxxxxxx');
        $result = $this->client->sources->retrieve('src_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Source::class, $result);
    }

    public function testSourcesPost()
    {
        $this->expectsRequest('post', '/v1/sources/src_xxxxxxxxxxxxx');
        $result = $this->client->sources->update(
            'src_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Source::class, $result);
    }

    public function testSubscriptionItemsDelete()
    {
        $this->expectsRequest(
            'delete',
            '/v1/subscription_items/si_xxxxxxxxxxxxx'
        );
        $result = $this->client->subscriptionItems->delete(
            'si_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(SubscriptionItem::class, $result);
    }

    public function testSubscriptionItemsGet()
    {
        $this->expectsRequest('get', '/v1/subscription_items');
        $result = $this->client->subscriptionItems->all([
            'subscription' => 'sub_xxxxxxxxxxxxx',
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(SubscriptionItem::class, $result->data[0]);
    }

    public function testSubscriptionItemsGet2()
    {
        $this->expectsRequest('get', '/v1/subscription_items/si_xxxxxxxxxxxxx');
        $result = $this->client->subscriptionItems->retrieve(
            'si_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(SubscriptionItem::class, $result);
    }

    public function testSubscriptionItemsPost()
    {
        $this->expectsRequest('post', '/v1/subscription_items');
        $result = $this->client->subscriptionItems->create([
            'subscription' => 'sub_xxxxxxxxxxxxx',
            'price' => 'price_xxxxxxxxxxxxx',
            'quantity' => 2,
        ]);
        self::assertInstanceOf(SubscriptionItem::class, $result);
    }

    public function testSubscriptionItemsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/subscription_items/si_xxxxxxxxxxxxx'
        );
        $result = $this->client->subscriptionItems->update(
            'si_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(SubscriptionItem::class, $result);
    }

    public function testSubscriptionSchedulesCancelPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/subscription_schedules/sub_sched_xxxxxxxxxxxxx/cancel'
        );
        $result = $this->client->subscriptionSchedules->cancel(
            'sub_sched_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(SubscriptionSchedule::class, $result);
    }

    public function testSubscriptionSchedulesGet()
    {
        $this->expectsRequest('get', '/v1/subscription_schedules');
        $result = $this->client->subscriptionSchedules->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(SubscriptionSchedule::class, $result->data[0]);
    }

    public function testSubscriptionSchedulesGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/subscription_schedules/sub_sched_xxxxxxxxxxxxx'
        );
        $result = $this->client->subscriptionSchedules->retrieve(
            'sub_sched_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(SubscriptionSchedule::class, $result);
    }

    public function testSubscriptionSchedulesPost()
    {
        $this->expectsRequest('post', '/v1/subscription_schedules');
        $result = $this->client->subscriptionSchedules->create([
            'customer' => 'cus_xxxxxxxxxxxxx',
            'start_date' => 1676070661,
            'end_behavior' => 'release',
            'phases' => [
                [
                    'items' => [
                        [
                            'price' => 'price_xxxxxxxxxxxxx',
                            'quantity' => 1,
                        ],
                    ],
                    'iterations' => 12,
                ],
            ],
        ]);
        self::assertInstanceOf(SubscriptionSchedule::class, $result);
    }

    public function testSubscriptionSchedulesPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/subscription_schedules/sub_sched_xxxxxxxxxxxxx'
        );
        $result = $this->client->subscriptionSchedules->update(
            'sub_sched_xxxxxxxxxxxxx',
            ['end_behavior' => 'release']
        );
        self::assertInstanceOf(SubscriptionSchedule::class, $result);
    }

    public function testSubscriptionSchedulesReleasePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/subscription_schedules/sub_sched_xxxxxxxxxxxxx/release'
        );
        $result = $this->client->subscriptionSchedules->release(
            'sub_sched_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(SubscriptionSchedule::class, $result);
    }

    public function testSubscriptionsDelete()
    {
        $this->expectsRequest('delete', '/v1/subscriptions/sub_xxxxxxxxxxxxx');
        $result = $this->client->subscriptions->cancel('sub_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Subscription::class, $result);
    }

    public function testSubscriptionsDiscountDelete()
    {
        $this->expectsRequest('delete', '/v1/subscriptions/sub_xyz/discount');
        $result = $this->client->subscriptions->deleteDiscount('sub_xyz', []);
        self::assertInstanceOf(Discount::class, $result);
    }

    public function testSubscriptionsGet()
    {
        $this->expectsRequest('get', '/v1/subscriptions');
        $result = $this->client->subscriptions->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Subscription::class, $result->data[0]);
    }

    public function testSubscriptionsGet2()
    {
        $this->expectsRequest('get', '/v1/subscriptions/sub_xxxxxxxxxxxxx');
        $result = $this->client->subscriptions->retrieve(
            'sub_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Subscription::class, $result);
    }

    public function testSubscriptionsPost()
    {
        $this->expectsRequest('post', '/v1/subscriptions');
        $result = $this->client->subscriptions->create([
            'customer' => 'cus_xxxxxxxxxxxxx',
            'items' => [['price' => 'price_xxxxxxxxxxxxx']],
        ]);
        self::assertInstanceOf(Subscription::class, $result);
    }

    public function testSubscriptionsPost2()
    {
        $this->expectsRequest('post', '/v1/subscriptions/sub_xxxxxxxxxxxxx');
        $result = $this->client->subscriptions->update(
            'sub_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Subscription::class, $result);
    }

    public function testSubscriptionsSearchGet()
    {
        $this->expectsRequest('get', '/v1/subscriptions/search');
        $result = $this->client->subscriptions->search([
            'query' => 'status:\'active\' AND metadata[\'order_id\']:\'6735\'',
        ]);
        self::assertInstanceOf(SearchResult::class, $result);
        self::assertInstanceOf(Subscription::class, $result->data[0]);
    }

    public function testTaxCalculationsLineItemsGet()
    {
        $this->expectsRequest('get', '/v1/tax/calculations/xxx/line_items');
        $result = $this->client->tax->calculations->allLineItems('xxx', []);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Tax\CalculationLineItem::class, $result->data[0]);
    }

    public function testTaxCalculationsPost()
    {
        $this->expectsRequest('post', '/v1/tax/calculations');
        $result = $this->client->tax->calculations->create([
            'currency' => 'usd',
            'line_items' => [
                [
                    'amount' => 1000,
                    'reference' => 'L1',
                ],
            ],
            'customer_details' => [
                'address' => [
                    'line1' => '354 Oyster Point Blvd',
                    'city' => 'South San Francisco',
                    'state' => 'CA',
                    'postal_code' => '94080',
                    'country' => 'US',
                ],
                'address_source' => 'shipping',
            ],
        ]);
        self::assertInstanceOf(Tax\Calculation::class, $result);
    }

    public function testTaxCodesGet()
    {
        $this->expectsRequest('get', '/v1/tax_codes');
        $result = $this->client->taxCodes->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(TaxCode::class, $result->data[0]);
    }

    public function testTaxCodesGet2()
    {
        $this->expectsRequest('get', '/v1/tax_codes/txcd_xxxxxxxxxxxxx');
        $result = $this->client->taxCodes->retrieve('txcd_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(TaxCode::class, $result);
    }

    public function testTaxIdsDelete()
    {
        $this->expectsRequest('delete', '/v1/tax_ids/taxid_123');
        $result = $this->client->taxIds->delete('taxid_123', []);
        self::assertInstanceOf(TaxId::class, $result);
    }

    public function testTaxIdsGet()
    {
        $this->expectsRequest('get', '/v1/tax_ids');
        $result = $this->client->taxIds->all([]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(TaxId::class, $result->data[0]);
    }

    public function testTaxIdsGet2()
    {
        $this->expectsRequest('get', '/v1/tax_ids/taxid_123');
        $result = $this->client->taxIds->retrieve('taxid_123', []);
        self::assertInstanceOf(TaxId::class, $result);
    }

    public function testTaxIdsPost()
    {
        $this->expectsRequest('post', '/v1/tax_ids');
        $result = $this->client->taxIds->create([
            'type' => 'eu_vat',
            'value' => '123',
        ]);
        self::assertInstanceOf(TaxId::class, $result);
    }

    public function testTaxRatesGet()
    {
        $this->expectsRequest('get', '/v1/tax_rates');
        $result = $this->client->taxRates->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(TaxRate::class, $result->data[0]);
    }

    public function testTaxRatesGet2()
    {
        $this->expectsRequest('get', '/v1/tax_rates/txr_xxxxxxxxxxxxx');
        $result = $this->client->taxRates->retrieve('txr_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(TaxRate::class, $result);
    }

    public function testTaxRatesPost()
    {
        $this->expectsRequest('post', '/v1/tax_rates');
        $result = $this->client->taxRates->create([
            'display_name' => 'VAT',
            'description' => 'VAT Germany',
            'jurisdiction' => 'DE',
            'percentage' => 16,
            'inclusive' => false,
        ]);
        self::assertInstanceOf(TaxRate::class, $result);
    }

    public function testTaxRatesPost2()
    {
        $this->expectsRequest('post', '/v1/tax_rates/txr_xxxxxxxxxxxxx');
        $result = $this->client->taxRates->update(
            'txr_xxxxxxxxxxxxx',
            ['active' => false]
        );
        self::assertInstanceOf(TaxRate::class, $result);
    }

    public function testTaxRegistrationsGet()
    {
        $this->expectsRequest('get', '/v1/tax/registrations');
        $result = $this->client->tax->registrations->all(['status' => 'all']);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Tax\Registration::class, $result->data[0]);
    }

    public function testTaxRegistrationsPost()
    {
        $this->expectsRequest('post', '/v1/tax/registrations');
        $result = $this->client->tax->registrations->create([
            'country' => 'IE',
            'country_options' => ['ie' => ['type' => 'oss_union']],
            'active_from' => 'now',
        ]);
        self::assertInstanceOf(Tax\Registration::class, $result);
    }

    public function testTaxRegistrationsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/tax/registrations/taxreg_xxxxxxxxxxxxx'
        );
        $result = $this->client->tax->registrations->update(
            'taxreg_xxxxxxxxxxxxx',
            ['expires_at' => 'now']
        );
        self::assertInstanceOf(Tax\Registration::class, $result);
    }

    public function testTaxSettingsGet()
    {
        $this->expectsRequest('get', '/v1/tax/settings');
        $result = $this->client->tax->settings->retrieve([]);
        self::assertInstanceOf(Tax\Settings::class, $result);
    }

    public function testTaxSettingsPost()
    {
        $this->expectsRequest('post', '/v1/tax/settings');
        $result = $this->client->tax->settings->update([
            'defaults' => ['tax_code' => 'txcd_10000000'],
        ]);
        self::assertInstanceOf(Tax\Settings::class, $result);
    }

    public function testTaxTransactionsCreateFromCalculationPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/tax/transactions/create_from_calculation'
        );
        $result = $this->client->tax->transactions->createFromCalculation([
            'calculation' => 'xxx',
            'reference' => 'yyy',
        ]);
        self::assertInstanceOf(Tax\Transaction::class, $result);
    }

    public function testTerminalConfigurationsDelete()
    {
        $this->expectsRequest('delete', '/v1/terminal/configurations/uc_123');
        $result = $this->client->terminal->configurations->delete('uc_123', []);
        self::assertInstanceOf(Terminal\Configuration::class, $result);
    }

    public function testTerminalConfigurationsDelete2()
    {
        $this->expectsRequest(
            'delete',
            '/v1/terminal/configurations/tmc_xxxxxxxxxxxxx'
        );
        $result = $this->client->terminal->configurations->delete(
            'tmc_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Terminal\Configuration::class, $result);
    }

    public function testTerminalConfigurationsGet()
    {
        $this->expectsRequest('get', '/v1/terminal/configurations');
        $result = $this->client->terminal->configurations->all([]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Terminal\Configuration::class, $result->data[0]);
    }

    public function testTerminalConfigurationsGet2()
    {
        $this->expectsRequest('get', '/v1/terminal/configurations/uc_123');
        $result = $this->client->terminal->configurations->retrieve(
            'uc_123',
            []
        );
        self::assertInstanceOf(Terminal\Configuration::class, $result);
    }

    public function testTerminalConfigurationsGet3()
    {
        $this->expectsRequest('get', '/v1/terminal/configurations');
        $result = $this->client->terminal->configurations->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Terminal\Configuration::class, $result->data[0]);
    }

    public function testTerminalConfigurationsGet4()
    {
        $this->expectsRequest(
            'get',
            '/v1/terminal/configurations/tmc_xxxxxxxxxxxxx'
        );
        $result = $this->client->terminal->configurations->retrieve(
            'tmc_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Terminal\Configuration::class, $result);
    }

    public function testTerminalConfigurationsPost2()
    {
        $this->expectsRequest('post', '/v1/terminal/configurations/uc_123');
        $result = $this->client->terminal->configurations->update(
            'uc_123',
            ['tipping' => ['usd' => ['fixed_amounts' => [10]]]]
        );
        self::assertInstanceOf(Terminal\Configuration::class, $result);
    }

    public function testTerminalConfigurationsPost4()
    {
        $this->expectsRequest(
            'post',
            '/v1/terminal/configurations/tmc_xxxxxxxxxxxxx'
        );
        $result = $this->client->terminal->configurations->update(
            'tmc_xxxxxxxxxxxxx',
            ['bbpos_wisepos_e' => ['splashscreen' => 'file_xxxxxxxxxxxxx']]
        );
        self::assertInstanceOf(Terminal\Configuration::class, $result);
    }

    public function testTerminalConnectionTokensPost()
    {
        $this->expectsRequest('post', '/v1/terminal/connection_tokens');
        $result = $this->client->terminal->connectionTokens->create([]);
        self::assertInstanceOf(Terminal\ConnectionToken::class, $result);
    }

    public function testTerminalLocationsDelete()
    {
        $this->expectsRequest(
            'delete',
            '/v1/terminal/locations/tml_xxxxxxxxxxxxx'
        );
        $result = $this->client->terminal->locations->delete(
            'tml_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Terminal\Location::class, $result);
    }

    public function testTerminalLocationsGet()
    {
        $this->expectsRequest('get', '/v1/terminal/locations');
        $result = $this->client->terminal->locations->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Terminal\Location::class, $result->data[0]);
    }

    public function testTerminalLocationsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/terminal/locations/tml_xxxxxxxxxxxxx'
        );
        $result = $this->client->terminal->locations->retrieve(
            'tml_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Terminal\Location::class, $result);
    }

    public function testTerminalLocationsPost()
    {
        $this->expectsRequest('post', '/v1/terminal/locations');
        $result = $this->client->terminal->locations->create([
            'display_name' => 'My First Store',
            'address' => [
                'line1' => '1234 Main Street',
                'city' => 'San Francisco',
                'postal_code' => '94111',
                'state' => 'CA',
                'country' => 'US',
            ],
        ]);
        self::assertInstanceOf(Terminal\Location::class, $result);
    }

    public function testTerminalLocationsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/terminal/locations/tml_xxxxxxxxxxxxx'
        );
        $result = $this->client->terminal->locations->update(
            'tml_xxxxxxxxxxxxx',
            ['display_name' => 'My First Store']
        );
        self::assertInstanceOf(Terminal\Location::class, $result);
    }

    public function testTerminalReadersCancelActionPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/terminal/readers/tmr_xxxxxxxxxxxxx/cancel_action'
        );
        $result = $this->client->terminal->readers->cancelAction(
            'tmr_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Terminal\Reader::class, $result);
    }

    public function testTerminalReadersDelete()
    {
        $this->expectsRequest(
            'delete',
            '/v1/terminal/readers/tmr_xxxxxxxxxxxxx'
        );
        $result = $this->client->terminal->readers->delete(
            'tmr_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Terminal\Reader::class, $result);
    }

    public function testTerminalReadersGet()
    {
        $this->expectsRequest('get', '/v1/terminal/readers');
        $result = $this->client->terminal->readers->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Terminal\Reader::class, $result->data[0]);
    }

    public function testTerminalReadersGet2()
    {
        $this->expectsRequest('get', '/v1/terminal/readers/tmr_xxxxxxxxxxxxx');
        $result = $this->client->terminal->readers->retrieve(
            'tmr_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Terminal\Reader::class, $result);
    }

    public function testTerminalReadersPost()
    {
        $this->expectsRequest('post', '/v1/terminal/readers');
        $result = $this->client->terminal->readers->create([
            'registration_code' => 'puppies-plug-could',
            'label' => 'Blue Rabbit',
            'location' => 'tml_1234',
        ]);
        self::assertInstanceOf(Terminal\Reader::class, $result);
    }

    public function testTerminalReadersPost2()
    {
        $this->expectsRequest('post', '/v1/terminal/readers/tmr_xxxxxxxxxxxxx');
        $result = $this->client->terminal->readers->update(
            'tmr_xxxxxxxxxxxxx',
            ['label' => 'Blue Rabbit']
        );
        self::assertInstanceOf(Terminal\Reader::class, $result);
    }

    public function testTerminalReadersProcessPaymentIntentPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/terminal/readers/tmr_xxxxxxxxxxxxx/process_payment_intent'
        );
        $result = $this->client->terminal->readers->processPaymentIntent(
            'tmr_xxxxxxxxxxxxx',
            ['payment_intent' => 'pi_xxxxxxxxxxxxx']
        );
        self::assertInstanceOf(Terminal\Reader::class, $result);
    }

    public function testTerminalReadersProcessSetupIntentPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/terminal/readers/tmr_xxxxxxxxxxxxx/process_setup_intent'
        );
        $result = $this->client->terminal->readers->processSetupIntent(
            'tmr_xxxxxxxxxxxxx',
            [
                'setup_intent' => 'seti_xxxxxxxxxxxxx',
                'allow_redisplay' => 'always',
            ]
        );
        self::assertInstanceOf(Terminal\Reader::class, $result);
    }

    public function testTestHelpersCustomersFundCashBalancePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/customers/cus_123/fund_cash_balance'
        );
        $result = $this->client->testHelpers->customers->fundCashBalance(
            'cus_123',
            [
                'amount' => 30,
                'currency' => 'eur',
            ]
        );
        self::assertInstanceOf(CustomerCashBalanceTransaction::class, $result);
    }

    public function testTestHelpersIssuingAuthorizationsCapturePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/authorizations/example_authorization/capture'
        );
        $result = $this->client->testHelpers->issuing->authorizations->capture(
            'example_authorization',
            [
                'capture_amount' => 100,
                'close_authorization' => true,
                'purchase_details' => [
                    'flight' => [
                        'departure_at' => 1633651200,
                        'passenger_name' => 'John Doe',
                        'refundable' => true,
                        'segments' => [
                            [
                                'arrival_airport_code' => 'SFO',
                                'carrier' => 'Delta',
                                'departure_airport_code' => 'LAX',
                                'flight_number' => 'DL100',
                                'service_class' => 'Economy',
                                'stopover_allowed' => true,
                            ],
                        ],
                        'travel_agency' => 'Orbitz',
                    ],
                    'fuel' => [
                        'type' => 'diesel',
                        'unit' => 'liter',
                        'unit_cost_decimal' => '3.5',
                        'quantity_decimal' => '10',
                    ],
                    'lodging' => [
                        'check_in_at' => 1633651200,
                        'nights' => 2,
                    ],
                    'receipt' => [
                        [
                            'description' => 'Room charge',
                            'quantity' => '1',
                            'total' => 200,
                            'unit_cost' => 200,
                        ],
                    ],
                    'reference' => 'foo',
                ],
            ]
        );
        self::assertInstanceOf(Issuing\Authorization::class, $result);
    }

    public function testTestHelpersIssuingAuthorizationsExpirePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/authorizations/example_authorization/expire'
        );
        $result = $this->client->testHelpers->issuing->authorizations->expire(
            'example_authorization',
            []
        );
        self::assertInstanceOf(Issuing\Authorization::class, $result);
    }

    public function testTestHelpersIssuingAuthorizationsIncrementPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/authorizations/example_authorization/increment'
        );
        $result = $this->client->testHelpers->issuing->authorizations->increment(
            'example_authorization',
            [
                'increment_amount' => 50,
                'is_amount_controllable' => true,
            ]
        );
        self::assertInstanceOf(Issuing\Authorization::class, $result);
    }

    public function testTestHelpersIssuingAuthorizationsPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/authorizations'
        );
        $result = $this->client->testHelpers->issuing->authorizations->create([
            'amount' => 100,
            'amount_details' => [
                'atm_fee' => 10,
                'cashback_amount' => 5,
            ],
            'authorization_method' => 'chip',
            'card' => 'foo',
            'currency' => 'usd',
            'is_amount_controllable' => true,
            'merchant_data' => [
                'category' => 'ac_refrigeration_repair',
                'city' => 'foo',
                'country' => 'bar',
                'name' => 'foo',
                'network_id' => 'bar',
                'postal_code' => 'foo',
                'state' => 'bar',
                'terminal_id' => 'foo',
            ],
            'network_data' => ['acquiring_institution_id' => 'foo'],
            'verification_data' => [
                'address_line1_check' => 'mismatch',
                'address_postal_code_check' => 'match',
                'cvc_check' => 'match',
                'expiry_check' => 'mismatch',
            ],
            'wallet' => 'apple_pay',
        ]);
        self::assertInstanceOf(Issuing\Authorization::class, $result);
    }

    public function testTestHelpersIssuingAuthorizationsReversePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/authorizations/example_authorization/reverse'
        );
        $result = $this->client->testHelpers->issuing->authorizations->reverse(
            'example_authorization',
            ['reverse_amount' => 20]
        );
        self::assertInstanceOf(Issuing\Authorization::class, $result);
    }

    public function testTestHelpersIssuingCardsShippingDeliverPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/cards/card_123/shipping/deliver'
        );
        $result = $this->client->testHelpers->issuing->cards->deliverCard(
            'card_123',
            []
        );
        self::assertInstanceOf(Issuing\Card::class, $result);
    }

    public function testTestHelpersIssuingCardsShippingFailPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/cards/card_123/shipping/fail'
        );
        $result = $this->client->testHelpers->issuing->cards->failCard(
            'card_123',
            []
        );
        self::assertInstanceOf(Issuing\Card::class, $result);
    }

    public function testTestHelpersIssuingCardsShippingReturnPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/cards/card_123/shipping/return'
        );
        $result = $this->client->testHelpers->issuing->cards->returnCard(
            'card_123',
            []
        );
        self::assertInstanceOf(Issuing\Card::class, $result);
    }

    public function testTestHelpersIssuingCardsShippingShipPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/cards/card_123/shipping/ship'
        );
        $result = $this->client->testHelpers->issuing->cards->shipCard(
            'card_123',
            []
        );
        self::assertInstanceOf(Issuing\Card::class, $result);
    }

    public function testTestHelpersIssuingPersonalizationDesignsActivatePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/personalization_designs/pd_xyz/activate'
        );
        $result = $this->client->testHelpers->issuing->personalizationDesigns->activate(
            'pd_xyz',
            []
        );
        self::assertInstanceOf(Issuing\PersonalizationDesign::class, $result);
    }

    public function testTestHelpersIssuingPersonalizationDesignsDeactivatePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/personalization_designs/pd_xyz/deactivate'
        );
        $result = $this->client->testHelpers->issuing->personalizationDesigns->deactivate(
            'pd_xyz',
            []
        );
        self::assertInstanceOf(Issuing\PersonalizationDesign::class, $result);
    }

    public function testTestHelpersIssuingPersonalizationDesignsRejectPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/personalization_designs/pd_xyz/reject'
        );
        $result = $this->client->testHelpers->issuing->personalizationDesigns->reject(
            'pd_xyz',
            ['rejection_reasons' => ['card_logo' => ['geographic_location']]]
        );
        self::assertInstanceOf(Issuing\PersonalizationDesign::class, $result);
    }

    public function testTestHelpersIssuingTransactionsCreateForceCapturePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/transactions/create_force_capture'
        );
        $result = $this->client->testHelpers->issuing->transactions->createForceCapture([
            'amount' => 100,
            'card' => 'foo',
            'currency' => 'usd',
            'merchant_data' => [
                'category' => 'ac_refrigeration_repair',
                'city' => 'foo',
                'country' => 'US',
                'name' => 'foo',
                'network_id' => 'bar',
                'postal_code' => '10001',
                'state' => 'NY',
                'terminal_id' => 'foo',
            ],
            'purchase_details' => [
                'flight' => [
                    'departure_at' => 1633651200,
                    'passenger_name' => 'John Doe',
                    'refundable' => true,
                    'segments' => [
                        [
                            'arrival_airport_code' => 'SFO',
                            'carrier' => 'Delta',
                            'departure_airport_code' => 'LAX',
                            'flight_number' => 'DL100',
                            'service_class' => 'Economy',
                            'stopover_allowed' => true,
                        ],
                    ],
                    'travel_agency' => 'Orbitz',
                ],
                'fuel' => [
                    'type' => 'diesel',
                    'unit' => 'liter',
                    'unit_cost_decimal' => '3.5',
                    'quantity_decimal' => '10',
                ],
                'lodging' => [
                    'check_in_at' => 1533651200,
                    'nights' => 2,
                ],
                'receipt' => [
                    [
                        'description' => 'Room charge',
                        'quantity' => '1',
                        'total' => 200,
                        'unit_cost' => 200,
                    ],
                ],
                'reference' => 'foo',
            ],
        ]);
        self::assertInstanceOf(Issuing\Transaction::class, $result);
    }

    public function testTestHelpersIssuingTransactionsCreateUnlinkedRefundPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/transactions/create_unlinked_refund'
        );
        $result = $this->client->testHelpers->issuing->transactions->createUnlinkedRefund([
            'amount' => 100,
            'card' => 'foo',
            'currency' => 'usd',
            'merchant_data' => [
                'category' => 'ac_refrigeration_repair',
                'city' => 'foo',
                'country' => 'bar',
                'name' => 'foo',
                'network_id' => 'bar',
                'postal_code' => 'foo',
                'state' => 'bar',
                'terminal_id' => 'foo',
            ],
            'purchase_details' => [
                'flight' => [
                    'departure_at' => 1533651200,
                    'passenger_name' => 'John Doe',
                    'refundable' => true,
                    'segments' => [
                        [
                            'arrival_airport_code' => 'SFO',
                            'carrier' => 'Delta',
                            'departure_airport_code' => 'LAX',
                            'flight_number' => 'DL100',
                            'service_class' => 'Economy',
                            'stopover_allowed' => true,
                        ],
                    ],
                    'travel_agency' => 'Orbitz',
                ],
                'fuel' => [
                    'type' => 'diesel',
                    'unit' => 'liter',
                    'unit_cost_decimal' => '3.5',
                    'quantity_decimal' => '10',
                ],
                'lodging' => [
                    'check_in_at' => 1533651200,
                    'nights' => 2,
                ],
                'receipt' => [
                    [
                        'description' => 'Room charge',
                        'quantity' => '1',
                        'total' => 200,
                        'unit_cost' => 200,
                    ],
                ],
                'reference' => 'foo',
            ],
        ]);
        self::assertInstanceOf(Issuing\Transaction::class, $result);
    }

    public function testTestHelpersIssuingTransactionsRefundPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/issuing/transactions/example_transaction/refund'
        );
        $result = $this->client->testHelpers->issuing->transactions->refund(
            'example_transaction',
            ['refund_amount' => 50]
        );
        self::assertInstanceOf(Issuing\Transaction::class, $result);
    }

    public function testTestHelpersRefundsExpirePost()
    {
        $this->expectsRequest('post', '/v1/test_helpers/refunds/re_123/expire');
        $result = $this->client->testHelpers->refunds->expire('re_123', []);
        self::assertInstanceOf(Refund::class, $result);
    }

    public function testTestHelpersTestClocksAdvancePost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/test_clocks/clock_xyz/advance'
        );
        $result = $this->client->testHelpers->testClocks->advance(
            'clock_xyz',
            ['frozen_time' => 142]
        );
        self::assertInstanceOf(TestHelpers\TestClock::class, $result);
    }

    public function testTestHelpersTestClocksAdvancePost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/test_clocks/clock_xxxxxxxxxxxxx/advance'
        );
        $result = $this->client->testHelpers->testClocks->advance(
            'clock_xxxxxxxxxxxxx',
            ['frozen_time' => 1675552261]
        );
        self::assertInstanceOf(TestHelpers\TestClock::class, $result);
    }

    public function testTestHelpersTestClocksDelete()
    {
        $this->expectsRequest(
            'delete',
            '/v1/test_helpers/test_clocks/clock_xyz'
        );
        $result = $this->client->testHelpers->testClocks->delete(
            'clock_xyz',
            []
        );
        self::assertInstanceOf(TestHelpers\TestClock::class, $result);
    }

    public function testTestHelpersTestClocksDelete2()
    {
        $this->expectsRequest(
            'delete',
            '/v1/test_helpers/test_clocks/clock_xxxxxxxxxxxxx'
        );
        $result = $this->client->testHelpers->testClocks->delete(
            'clock_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(TestHelpers\TestClock::class, $result);
    }

    public function testTestHelpersTestClocksGet()
    {
        $this->expectsRequest('get', '/v1/test_helpers/test_clocks');
        $result = $this->client->testHelpers->testClocks->all([]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(TestHelpers\TestClock::class, $result->data[0]);
    }

    public function testTestHelpersTestClocksGet2()
    {
        $this->expectsRequest('get', '/v1/test_helpers/test_clocks/clock_xyz');
        $result = $this->client->testHelpers->testClocks->retrieve(
            'clock_xyz',
            []
        );
        self::assertInstanceOf(TestHelpers\TestClock::class, $result);
    }

    public function testTestHelpersTestClocksGet3()
    {
        $this->expectsRequest('get', '/v1/test_helpers/test_clocks');
        $result = $this->client->testHelpers->testClocks->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(TestHelpers\TestClock::class, $result->data[0]);
    }

    public function testTestHelpersTestClocksGet4()
    {
        $this->expectsRequest(
            'get',
            '/v1/test_helpers/test_clocks/clock_xxxxxxxxxxxxx'
        );
        $result = $this->client->testHelpers->testClocks->retrieve(
            'clock_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(TestHelpers\TestClock::class, $result);
    }

    public function testTestHelpersTestClocksPost()
    {
        $this->expectsRequest('post', '/v1/test_helpers/test_clocks');
        $result = $this->client->testHelpers->testClocks->create([
            'frozen_time' => 123,
            'name' => 'cogsworth',
        ]);
        self::assertInstanceOf(TestHelpers\TestClock::class, $result);
    }

    public function testTestHelpersTestClocksPost2()
    {
        $this->expectsRequest('post', '/v1/test_helpers/test_clocks');
        $result = $this->client->testHelpers->testClocks->create([
            'frozen_time' => 1577836800,
        ]);
        self::assertInstanceOf(TestHelpers\TestClock::class, $result);
    }

    public function testTestHelpersTreasuryInboundTransfersFailPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/treasury/inbound_transfers/ibt_123/fail'
        );
        $result = $this->client->testHelpers->treasury->inboundTransfers->fail(
            'ibt_123',
            ['failure_details' => ['code' => 'account_closed']]
        );
        self::assertInstanceOf(Treasury\InboundTransfer::class, $result);
    }

    public function testTestHelpersTreasuryInboundTransfersReturnPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/treasury/inbound_transfers/ibt_123/return'
        );
        $result = $this->client->testHelpers->treasury->inboundTransfers->returnInboundTransfer(
            'ibt_123',
            []
        );
        self::assertInstanceOf(Treasury\InboundTransfer::class, $result);
    }

    public function testTestHelpersTreasuryInboundTransfersSucceedPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/treasury/inbound_transfers/ibt_123/succeed'
        );
        $result = $this->client->testHelpers->treasury->inboundTransfers->succeed(
            'ibt_123',
            []
        );
        self::assertInstanceOf(Treasury\InboundTransfer::class, $result);
    }

    public function testTestHelpersTreasuryOutboundTransfersFailPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/treasury/outbound_transfers/obt_123/fail'
        );
        $result = $this->client->testHelpers->treasury->outboundTransfers->fail(
            'obt_123',
            []
        );
        self::assertInstanceOf(Treasury\OutboundTransfer::class, $result);
    }

    public function testTestHelpersTreasuryOutboundTransfersPostPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/treasury/outbound_transfers/obt_123/post'
        );
        $result = $this->client->testHelpers->treasury->outboundTransfers->post(
            'obt_123',
            []
        );
        self::assertInstanceOf(Treasury\OutboundTransfer::class, $result);
    }

    public function testTestHelpersTreasuryOutboundTransfersReturnPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/treasury/outbound_transfers/obt_123/return'
        );
        $result = $this->client->testHelpers->treasury->outboundTransfers->returnOutboundTransfer(
            'obt_123',
            ['returned_details' => ['code' => 'account_closed']]
        );
        self::assertInstanceOf(Treasury\OutboundTransfer::class, $result);
    }

    public function testTestHelpersTreasuryReceivedCreditsPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/treasury/received_credits'
        );
        $result = $this->client->testHelpers->treasury->receivedCredits->create([
            'financial_account' => 'fa_123',
            'network' => 'ach',
            'amount' => 1234,
            'currency' => 'usd',
        ]);
        self::assertInstanceOf(Treasury\ReceivedCredit::class, $result);
    }

    public function testTestHelpersTreasuryReceivedDebitsPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/test_helpers/treasury/received_debits'
        );
        $result = $this->client->testHelpers->treasury->receivedDebits->create([
            'financial_account' => 'fa_123',
            'network' => 'ach',
            'amount' => 1234,
            'currency' => 'usd',
        ]);
        self::assertInstanceOf(Treasury\ReceivedDebit::class, $result);
    }

    public function testTokensGet()
    {
        $this->expectsRequest('get', '/v1/tokens/tok_xxxx');
        $result = $this->client->tokens->retrieve('tok_xxxx', []);
        self::assertInstanceOf(Token::class, $result);
    }

    public function testTokensPost()
    {
        $this->expectsRequest('post', '/v1/tokens');
        $result = $this->client->tokens->create([
            'card' => [
                'number' => '4242424242424242',
                'exp_month' => '5',
                'exp_year' => '2023',
                'cvc' => '314',
            ],
        ]);
        self::assertInstanceOf(Token::class, $result);
    }

    public function testTokensPost2()
    {
        $this->expectsRequest('post', '/v1/tokens');
        $result = $this->client->tokens->create([
            'bank_account' => [
                'country' => 'US',
                'currency' => 'usd',
                'account_holder_name' => 'Jenny Rosen',
                'account_holder_type' => 'individual',
                'routing_number' => '110000000',
                'account_number' => '000123456789',
            ],
        ]);
        self::assertInstanceOf(Token::class, $result);
    }

    public function testTokensPost3()
    {
        $this->expectsRequest('post', '/v1/tokens');
        $result = $this->client->tokens->create([
            'pii' => ['id_number' => '000000000'],
        ]);
        self::assertInstanceOf(Token::class, $result);
    }

    public function testTokensPost4()
    {
        $this->expectsRequest('post', '/v1/tokens');
        $result = $this->client->tokens->create([
            'account' => [
                'individual' => [
                    'first_name' => 'Jane',
                    'last_name' => 'Doe',
                ],
                'tos_shown_and_accepted' => true,
            ],
        ]);
        self::assertInstanceOf(Token::class, $result);
    }

    public function testTokensPost5()
    {
        $this->expectsRequest('post', '/v1/tokens');
        $result = $this->client->tokens->create([
            'person' => [
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'relationship' => ['owner' => true],
            ],
        ]);
        self::assertInstanceOf(Token::class, $result);
    }

    public function testTokensPost6()
    {
        $this->expectsRequest('post', '/v1/tokens');
        $result = $this->client->tokens->create([
            'cvc_update' => ['cvc' => '123'],
        ]);
        self::assertInstanceOf(Token::class, $result);
    }

    public function testTopupsCancelPost()
    {
        $this->expectsRequest('post', '/v1/topups/tu_xxxxxxxxxxxxx/cancel');
        $result = $this->client->topups->cancel('tu_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Topup::class, $result);
    }

    public function testTopupsGet()
    {
        $this->expectsRequest('get', '/v1/topups');
        $result = $this->client->topups->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Topup::class, $result->data[0]);
    }

    public function testTopupsGet2()
    {
        $this->expectsRequest('get', '/v1/topups/tu_xxxxxxxxxxxxx');
        $result = $this->client->topups->retrieve('tu_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Topup::class, $result);
    }

    public function testTopupsPost()
    {
        $this->expectsRequest('post', '/v1/topups');
        $result = $this->client->topups->create([
            'amount' => 2000,
            'currency' => 'usd',
            'description' => 'Top-up for Jenny Rosen',
            'statement_descriptor' => 'Top-up',
        ]);
        self::assertInstanceOf(Topup::class, $result);
    }

    public function testTopupsPost2()
    {
        $this->expectsRequest('post', '/v1/topups/tu_xxxxxxxxxxxxx');
        $result = $this->client->topups->update(
            'tu_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Topup::class, $result);
    }

    public function testTransfersGet()
    {
        $this->expectsRequest('get', '/v1/transfers');
        $result = $this->client->transfers->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Transfer::class, $result->data[0]);
    }

    public function testTransfersGet2()
    {
        $this->expectsRequest('get', '/v1/transfers/tr_xxxxxxxxxxxxx');
        $result = $this->client->transfers->retrieve('tr_xxxxxxxxxxxxx', []);
        self::assertInstanceOf(Transfer::class, $result);
    }

    public function testTransfersPost()
    {
        $this->expectsRequest('post', '/v1/transfers');
        $result = $this->client->transfers->create([
            'amount' => 400,
            'currency' => 'usd',
            'destination' => 'acct_xxxxxxxxxxxxx',
            'transfer_group' => 'ORDER_95',
        ]);
        self::assertInstanceOf(Transfer::class, $result);
    }

    public function testTransfersPost2()
    {
        $this->expectsRequest('post', '/v1/transfers/tr_xxxxxxxxxxxxx');
        $result = $this->client->transfers->update(
            'tr_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Transfer::class, $result);
    }

    public function testTransfersReversalsGet()
    {
        $this->expectsRequest(
            'get',
            '/v1/transfers/tr_xxxxxxxxxxxxx/reversals'
        );
        $result = $this->client->transfers->allReversals(
            'tr_xxxxxxxxxxxxx',
            ['limit' => 3]
        );
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(TransferReversal::class, $result->data[0]);
    }

    public function testTransfersReversalsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/transfers/tr_xxxxxxxxxxxxx/reversals/trr_xxxxxxxxxxxxx'
        );
        $result = $this->client->transfers->retrieveReversal(
            'tr_xxxxxxxxxxxxx',
            'trr_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(TransferReversal::class, $result);
    }

    public function testTransfersReversalsPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/transfers/tr_xxxxxxxxxxxxx/reversals'
        );
        $result = $this->client->transfers->createReversal(
            'tr_xxxxxxxxxxxxx',
            ['amount' => 100]
        );
        self::assertInstanceOf(TransferReversal::class, $result);
    }

    public function testTransfersReversalsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/transfers/tr_xxxxxxxxxxxxx/reversals/trr_xxxxxxxxxxxxx'
        );
        $result = $this->client->transfers->updateReversal(
            'tr_xxxxxxxxxxxxx',
            'trr_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(TransferReversal::class, $result);
    }

    public function testTreasuryCreditReversalsGet()
    {
        $this->expectsRequest('get', '/v1/treasury/credit_reversals');
        $result = $this->client->treasury->creditReversals->all([
            'financial_account' => 'fa_xxxxxxxxxxxxx',
            'limit' => 3,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Treasury\CreditReversal::class, $result->data[0]);
    }

    public function testTreasuryCreditReversalsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/treasury/credit_reversals/credrev_xxxxxxxxxxxxx'
        );
        $result = $this->client->treasury->creditReversals->retrieve(
            'credrev_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\CreditReversal::class, $result);
    }

    public function testTreasuryCreditReversalsPost()
    {
        $this->expectsRequest('post', '/v1/treasury/credit_reversals');
        $result = $this->client->treasury->creditReversals->create([
            'received_credit' => 'rc_xxxxxxxxxxxxx',
        ]);
        self::assertInstanceOf(Treasury\CreditReversal::class, $result);
    }

    public function testTreasuryDebitReversalsGet()
    {
        $this->expectsRequest('get', '/v1/treasury/debit_reversals');
        $result = $this->client->treasury->debitReversals->all([
            'financial_account' => 'fa_xxxxxxxxxxxxx',
            'limit' => 3,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Treasury\DebitReversal::class, $result->data[0]);
    }

    public function testTreasuryDebitReversalsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/treasury/debit_reversals/debrev_xxxxxxxxxxxxx'
        );
        $result = $this->client->treasury->debitReversals->retrieve(
            'debrev_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\DebitReversal::class, $result);
    }

    public function testTreasuryDebitReversalsPost()
    {
        $this->expectsRequest('post', '/v1/treasury/debit_reversals');
        $result = $this->client->treasury->debitReversals->create([
            'received_debit' => 'rd_xxxxxxxxxxxxx',
        ]);
        self::assertInstanceOf(Treasury\DebitReversal::class, $result);
    }

    public function testTreasuryFinancialAccountsFeaturesGet()
    {
        $this->expectsRequest(
            'get',
            '/v1/treasury/financial_accounts/fa_xxxxxxxxxxxxx/features'
        );
        $result = $this->client->treasury->financialAccounts->retrieveFeatures(
            'fa_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\FinancialAccountFeatures::class, $result);
    }

    public function testTreasuryFinancialAccountsGet()
    {
        $this->expectsRequest('get', '/v1/treasury/financial_accounts');
        $result = $this->client->treasury->financialAccounts->all([
            'limit' => 3,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Treasury\FinancialAccount::class, $result->data[0]);
    }

    public function testTreasuryFinancialAccountsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/treasury/financial_accounts/fa_xxxxxxxxxxxxx'
        );
        $result = $this->client->treasury->financialAccounts->retrieve(
            'fa_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\FinancialAccount::class, $result);
    }

    public function testTreasuryFinancialAccountsPost()
    {
        $this->expectsRequest('post', '/v1/treasury/financial_accounts');
        $result = $this->client->treasury->financialAccounts->create([
            'supported_currencies' => ['usd'],
            'features' => [],
        ]);
        self::assertInstanceOf(Treasury\FinancialAccount::class, $result);
    }

    public function testTreasuryFinancialAccountsPost2()
    {
        $this->expectsRequest(
            'post',
            '/v1/treasury/financial_accounts/fa_xxxxxxxxxxxxx'
        );
        $result = $this->client->treasury->financialAccounts->update(
            'fa_xxxxxxxxxxxxx',
            ['metadata' => ['order_id' => '6735']]
        );
        self::assertInstanceOf(Treasury\FinancialAccount::class, $result);
    }

    public function testTreasuryInboundTransfersCancelPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/treasury/inbound_transfers/ibt_xxxxxxxxxxxxx/cancel'
        );
        $result = $this->client->treasury->inboundTransfers->cancel(
            'ibt_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\InboundTransfer::class, $result);
    }

    public function testTreasuryInboundTransfersGet()
    {
        $this->expectsRequest('get', '/v1/treasury/inbound_transfers');
        $result = $this->client->treasury->inboundTransfers->all([
            'financial_account' => 'fa_xxxxxxxxxxxxx',
            'limit' => 3,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Treasury\InboundTransfer::class, $result->data[0]);
    }

    public function testTreasuryInboundTransfersGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/treasury/inbound_transfers/ibt_xxxxxxxxxxxxx'
        );
        $result = $this->client->treasury->inboundTransfers->retrieve(
            'ibt_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\InboundTransfer::class, $result);
    }

    public function testTreasuryInboundTransfersPost()
    {
        $this->expectsRequest('post', '/v1/treasury/inbound_transfers');
        $result = $this->client->treasury->inboundTransfers->create([
            'financial_account' => 'fa_xxxxxxxxxxxxx',
            'amount' => 10000,
            'currency' => 'usd',
            'origin_payment_method' => 'pm_xxxxxxxxxxxxx',
            'description' => 'InboundTransfer from my bank account',
        ]);
        self::assertInstanceOf(Treasury\InboundTransfer::class, $result);
    }

    public function testTreasuryOutboundPaymentsCancelPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/treasury/outbound_payments/bot_xxxxxxxxxxxxx/cancel'
        );
        $result = $this->client->treasury->outboundPayments->cancel(
            'bot_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\OutboundPayment::class, $result);
    }

    public function testTreasuryOutboundPaymentsGet()
    {
        $this->expectsRequest('get', '/v1/treasury/outbound_payments');
        $result = $this->client->treasury->outboundPayments->all([
            'financial_account' => 'fa_xxxxxxxxxxxxx',
            'limit' => 3,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Treasury\OutboundPayment::class, $result->data[0]);
    }

    public function testTreasuryOutboundPaymentsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/treasury/outbound_payments/bot_xxxxxxxxxxxxx'
        );
        $result = $this->client->treasury->outboundPayments->retrieve(
            'bot_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\OutboundPayment::class, $result);
    }

    public function testTreasuryOutboundPaymentsPost()
    {
        $this->expectsRequest('post', '/v1/treasury/outbound_payments');
        $result = $this->client->treasury->outboundPayments->create([
            'financial_account' => 'fa_xxxxxxxxxxxxx',
            'amount' => 10000,
            'currency' => 'usd',
            'customer' => 'cus_xxxxxxxxxxxxx',
            'destination_payment_method' => 'pm_xxxxxxxxxxxxx',
            'description' => 'OutboundPayment to a 3rd party',
        ]);
        self::assertInstanceOf(Treasury\OutboundPayment::class, $result);
    }

    public function testTreasuryOutboundTransfersCancelPost()
    {
        $this->expectsRequest(
            'post',
            '/v1/treasury/outbound_transfers/obt_xxxxxxxxxxxxx/cancel'
        );
        $result = $this->client->treasury->outboundTransfers->cancel(
            'obt_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\OutboundTransfer::class, $result);
    }

    public function testTreasuryOutboundTransfersGet()
    {
        $this->expectsRequest('get', '/v1/treasury/outbound_transfers');
        $result = $this->client->treasury->outboundTransfers->all([
            'financial_account' => 'fa_xxxxxxxxxxxxx',
            'limit' => 3,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Treasury\OutboundTransfer::class, $result->data[0]);
    }

    public function testTreasuryOutboundTransfersGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/treasury/outbound_transfers/obt_xxxxxxxxxxxxx'
        );
        $result = $this->client->treasury->outboundTransfers->retrieve(
            'obt_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\OutboundTransfer::class, $result);
    }

    public function testTreasuryOutboundTransfersPost()
    {
        $this->expectsRequest('post', '/v1/treasury/outbound_transfers');
        $result = $this->client->treasury->outboundTransfers->create([
            'financial_account' => 'fa_xxxxxxxxxxxxx',
            'destination_payment_method' => 'pm_xxxxxxxxxxxxx',
            'amount' => 500,
            'currency' => 'usd',
            'description' => 'OutboundTransfer to my external bank account',
        ]);
        self::assertInstanceOf(Treasury\OutboundTransfer::class, $result);
    }

    public function testTreasuryReceivedCreditsGet()
    {
        $this->expectsRequest('get', '/v1/treasury/received_credits');
        $result = $this->client->treasury->receivedCredits->all([
            'financial_account' => 'fa_xxxxxxxxxxxxx',
            'limit' => 3,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Treasury\ReceivedCredit::class, $result->data[0]);
    }

    public function testTreasuryReceivedCreditsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/treasury/received_credits/rc_xxxxxxxxxxxxx'
        );
        $result = $this->client->treasury->receivedCredits->retrieve(
            'rc_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\ReceivedCredit::class, $result);
    }

    public function testTreasuryReceivedDebitsGet()
    {
        $this->expectsRequest('get', '/v1/treasury/received_debits');
        $result = $this->client->treasury->receivedDebits->all([
            'financial_account' => 'fa_xxxxxxxxxxxxx',
            'limit' => 3,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Treasury\ReceivedDebit::class, $result->data[0]);
    }

    public function testTreasuryReceivedDebitsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/treasury/received_debits/rd_xxxxxxxxxxxxx'
        );
        $result = $this->client->treasury->receivedDebits->retrieve(
            'rd_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\ReceivedDebit::class, $result);
    }

    public function testTreasuryTransactionEntriesGet()
    {
        $this->expectsRequest('get', '/v1/treasury/transaction_entries');
        $result = $this->client->treasury->transactionEntries->all([
            'financial_account' => 'fa_xxxxxxxxxxxxx',
            'limit' => 3,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Treasury\TransactionEntry::class, $result->data[0]);
    }

    public function testTreasuryTransactionEntriesGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/treasury/transaction_entries/trxne_xxxxxxxxxxxxx'
        );
        $result = $this->client->treasury->transactionEntries->retrieve(
            'trxne_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\TransactionEntry::class, $result);
    }

    public function testTreasuryTransactionsGet()
    {
        $this->expectsRequest('get', '/v1/treasury/transactions');
        $result = $this->client->treasury->transactions->all([
            'financial_account' => 'fa_xxxxxxxxxxxxx',
            'limit' => 3,
        ]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(Treasury\Transaction::class, $result->data[0]);
    }

    public function testTreasuryTransactionsGet2()
    {
        $this->expectsRequest(
            'get',
            '/v1/treasury/transactions/trxn_xxxxxxxxxxxxx'
        );
        $result = $this->client->treasury->transactions->retrieve(
            'trxn_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(Treasury\Transaction::class, $result);
    }

    public function testWebhookEndpointsDelete()
    {
        $this->expectsRequest(
            'delete',
            '/v1/webhook_endpoints/we_xxxxxxxxxxxxx'
        );
        $result = $this->client->webhookEndpoints->delete(
            'we_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(WebhookEndpoint::class, $result);
    }

    public function testWebhookEndpointsGet()
    {
        $this->expectsRequest('get', '/v1/webhook_endpoints');
        $result = $this->client->webhookEndpoints->all(['limit' => 3]);
        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(WebhookEndpoint::class, $result->data[0]);
    }

    public function testWebhookEndpointsGet2()
    {
        $this->expectsRequest('get', '/v1/webhook_endpoints/we_xxxxxxxxxxxxx');
        $result = $this->client->webhookEndpoints->retrieve(
            'we_xxxxxxxxxxxxx',
            []
        );
        self::assertInstanceOf(WebhookEndpoint::class, $result);
    }

    public function testWebhookEndpointsPost2()
    {
        $this->expectsRequest('post', '/v1/webhook_endpoints/we_xxxxxxxxxxxxx');
        $result = $this->client->webhookEndpoints->update(
            'we_xxxxxxxxxxxxx',
            ['url' => 'https://example.com/new_endpoint']
        );
        self::assertInstanceOf(WebhookEndpoint::class, $result);
    }

    public function testV2BillingMeterEventAdjustmentPost()
    {
        $this->stubRequest(
            'post',
            '/v2/billing/meter_event_adjustments',
            [
                'cancel' => ['identifier' => 'identifier'],
                'event_name' => 'event_name',
                'type' => 'cancel',
            ],
            [],
            false,
            [
                'id' => 'obj_123',
                'object' => 'v2.billing.meter_event_adjustment',
                'cancel' => ['identifier' => 'identifier'],
                'created' => '1970-01-12T21:42:34.472Z',
                'event_name' => 'event_name',
                'livemode' => [],
                'status' => 'complete',
                'type' => 'cancel',
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->billing->meterEventAdjustments->create([
            'cancel' => ['identifier' => 'identifier'],
            'event_name' => 'event_name',
            'type' => 'cancel',
        ]);
        self::assertInstanceOf(V2\Billing\MeterEventAdjustment::class, $result);
    }

    public function testV2BillingMeterEventSessionPost()
    {
        $this->stubRequest(
            'post',
            '/v2/billing/meter_event_session',
            [],
            [],
            false,
            [
                'id' => 'obj_123',
                'object' => 'v2.billing.meter_event_session',
                'authentication_token' => 'authentication_token',
                'created' => '1970-01-12T21:42:34.472Z',
                'expires_at' => '1970-01-10T15:36:51.170Z',
                'livemode' => [],
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->billing->meterEventSession->create([]);
        self::assertInstanceOf(V2\Billing\MeterEventSession::class, $result);
    }

    public function testV2BillingMeterEventStreamPost()
    {
        $this->stubRequest(
            'post',
            '/v2/billing/meter_event_stream',
            [
                'events' => [
                    [
                        'event_name' => 'event_name',
                        'identifier' => 'identifier',
                        'payload' => ['undefined' => 'payload'],
                        'timestamp' => '1970-01-01T15:18:46.294Z',
                    ],
                ],
            ],
            [],
            false,
            [],
            200,
            BaseStripeClient::DEFAULT_METER_EVENTS_BASE
        );
        $this->v2Client->v2->billing->meterEventStream->create([
            'events' => [
                [
                    'event_name' => 'event_name',
                    'identifier' => 'identifier',
                    'payload' => ['undefined' => 'payload'],
                    'timestamp' => '1970-01-01T15:18:46.294Z',
                ],
            ],
        ]);
    }

    public function testV2BillingMeterEventPost()
    {
        $this->stubRequest(
            'post',
            '/v2/billing/meter_events',
            [
                'event_name' => 'event_name',
                'payload' => ['undefined' => 'payload'],
            ],
            [],
            false,
            [
                'object' => 'v2.billing.meter_event',
                'created' => '1970-01-12T21:42:34.472Z',
                'event_name' => 'event_name',
                'identifier' => 'identifier',
                'livemode' => [],
                'payload' => ['undefined' => 'payload'],
                'timestamp' => '1970-01-01T15:18:46.294Z',
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->billing->meterEvents->create([
            'event_name' => 'event_name',
            'payload' => ['undefined' => 'payload'],
        ]);
        self::assertInstanceOf(V2\Billing\MeterEvent::class, $result);
    }

    public function testV2CoreEventDestinationGet()
    {
        $this->stubRequest(
            'get',
            '/v2/core/event_destinations',
            [],
            [],
            false,
            [
                'data' => [
                    '0' => [
                        'id' => 'obj_123',
                        'object' => 'v2.core.event_destination',
                        'amazon_eventbridge' => null,
                        'created' => '1970-01-12T21:42:34.472Z',
                        'description' => 'description',
                        'enabled_events' => ['0' => 'enabled_events'],
                        'event_payload' => 'thin',
                        'events_from' => null,
                        'livemode' => [],
                        'metadata' => null,
                        'name' => 'name',
                        'snapshot_api_version' => null,
                        'status' => 'disabled',
                        'status_details' => null,
                        'type' => 'amazon_eventbridge',
                        'updated' => '1970-01-03T17:07:10.277Z',
                        'webhook_endpoint' => null,
                    ],
                ],
                'next_page_url' => null,
                'previous_page_url' => null,
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->core->eventDestinations->all([]);
        self::assertInstanceOf(V2\Collection::class, $result);
        self::assertInstanceOf(V2\EventDestination::class, $result->data[0]);
    }

    public function testV2CoreEventDestinationPost()
    {
        $this->stubRequest(
            'post',
            '/v2/core/event_destinations',
            [
                'enabled_events' => ['enabled_events'],
                'event_payload' => 'thin',
                'name' => 'name',
                'type' => 'amazon_eventbridge',
            ],
            [],
            false,
            [
                'id' => 'obj_123',
                'object' => 'v2.core.event_destination',
                'amazon_eventbridge' => null,
                'created' => '1970-01-12T21:42:34.472Z',
                'description' => 'description',
                'enabled_events' => ['0' => 'enabled_events'],
                'event_payload' => 'thin',
                'events_from' => null,
                'livemode' => [],
                'metadata' => null,
                'name' => 'name',
                'snapshot_api_version' => null,
                'status' => 'disabled',
                'status_details' => null,
                'type' => 'amazon_eventbridge',
                'updated' => '1970-01-03T17:07:10.277Z',
                'webhook_endpoint' => null,
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->core->eventDestinations->create([
            'enabled_events' => ['enabled_events'],
            'event_payload' => 'thin',
            'name' => 'name',
            'type' => 'amazon_eventbridge',
        ]);
        self::assertInstanceOf(V2\EventDestination::class, $result);
    }

    public function testV2CoreEventDestinationDelete()
    {
        $this->stubRequest(
            'delete',
            '/v2/core/event_destinations/id_123',
            [],
            [],
            false,
            [
                'id' => 'obj_123',
                'object' => 'v2.core.event_destination',
                'amazon_eventbridge' => null,
                'created' => '1970-01-12T21:42:34.472Z',
                'description' => 'description',
                'enabled_events' => ['0' => 'enabled_events'],
                'event_payload' => 'thin',
                'events_from' => null,
                'livemode' => [],
                'metadata' => null,
                'name' => 'name',
                'snapshot_api_version' => null,
                'status' => 'disabled',
                'status_details' => null,
                'type' => 'amazon_eventbridge',
                'updated' => '1970-01-03T17:07:10.277Z',
                'webhook_endpoint' => null,
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->core->eventDestinations->delete(
            'id_123',
            []
        );
        self::assertInstanceOf(V2\EventDestination::class, $result);
    }

    public function testV2CoreEventDestinationGet2()
    {
        $this->stubRequest(
            'get',
            '/v2/core/event_destinations/id_123',
            [],
            [],
            false,
            [
                'id' => 'obj_123',
                'object' => 'v2.core.event_destination',
                'amazon_eventbridge' => null,
                'created' => '1970-01-12T21:42:34.472Z',
                'description' => 'description',
                'enabled_events' => ['0' => 'enabled_events'],
                'event_payload' => 'thin',
                'events_from' => null,
                'livemode' => [],
                'metadata' => null,
                'name' => 'name',
                'snapshot_api_version' => null,
                'status' => 'disabled',
                'status_details' => null,
                'type' => 'amazon_eventbridge',
                'updated' => '1970-01-03T17:07:10.277Z',
                'webhook_endpoint' => null,
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->core->eventDestinations->retrieve(
            'id_123',
            []
        );
        self::assertInstanceOf(V2\EventDestination::class, $result);
    }

    public function testV2CoreEventDestinationPost2()
    {
        $this->stubRequest(
            'post',
            '/v2/core/event_destinations/id_123',
            [],
            [],
            false,
            [
                'id' => 'obj_123',
                'object' => 'v2.core.event_destination',
                'amazon_eventbridge' => null,
                'created' => '1970-01-12T21:42:34.472Z',
                'description' => 'description',
                'enabled_events' => ['0' => 'enabled_events'],
                'event_payload' => 'thin',
                'events_from' => null,
                'livemode' => [],
                'metadata' => null,
                'name' => 'name',
                'snapshot_api_version' => null,
                'status' => 'disabled',
                'status_details' => null,
                'type' => 'amazon_eventbridge',
                'updated' => '1970-01-03T17:07:10.277Z',
                'webhook_endpoint' => null,
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->core->eventDestinations->update(
            'id_123',
            []
        );
        self::assertInstanceOf(V2\EventDestination::class, $result);
    }

    public function testV2CoreEventDestinationPost3()
    {
        $this->stubRequest(
            'post',
            '/v2/core/event_destinations/id_123/disable',
            [],
            [],
            false,
            [
                'id' => 'obj_123',
                'object' => 'v2.core.event_destination',
                'amazon_eventbridge' => null,
                'created' => '1970-01-12T21:42:34.472Z',
                'description' => 'description',
                'enabled_events' => ['0' => 'enabled_events'],
                'event_payload' => 'thin',
                'events_from' => null,
                'livemode' => [],
                'metadata' => null,
                'name' => 'name',
                'snapshot_api_version' => null,
                'status' => 'disabled',
                'status_details' => null,
                'type' => 'amazon_eventbridge',
                'updated' => '1970-01-03T17:07:10.277Z',
                'webhook_endpoint' => null,
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->core->eventDestinations->disable(
            'id_123',
            []
        );
        self::assertInstanceOf(V2\EventDestination::class, $result);
    }

    public function testV2CoreEventDestinationPost4()
    {
        $this->stubRequest(
            'post',
            '/v2/core/event_destinations/id_123/enable',
            [],
            [],
            false,
            [
                'id' => 'obj_123',
                'object' => 'v2.core.event_destination',
                'amazon_eventbridge' => null,
                'created' => '1970-01-12T21:42:34.472Z',
                'description' => 'description',
                'enabled_events' => ['0' => 'enabled_events'],
                'event_payload' => 'thin',
                'events_from' => null,
                'livemode' => [],
                'metadata' => null,
                'name' => 'name',
                'snapshot_api_version' => null,
                'status' => 'disabled',
                'status_details' => null,
                'type' => 'amazon_eventbridge',
                'updated' => '1970-01-03T17:07:10.277Z',
                'webhook_endpoint' => null,
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->core->eventDestinations->enable(
            'id_123',
            []
        );
        self::assertInstanceOf(V2\EventDestination::class, $result);
    }

    public function testV2CoreEventDestinationPost5()
    {
        $this->stubRequest(
            'post',
            '/v2/core/event_destinations/id_123/ping',
            [],
            [],
            false,
            [
                'context' => null,
                'created' => '1970-01-12T21:42:34.472Z',
                'id' => 'obj_123',
                'object' => 'v2.core.event',
                'reason' => null,
                'type' => 'type',
                'livemode' => [],
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->core->eventDestinations->ping(
            'id_123',
            []
        );
        self::assertInstanceOf(V2\Event::class, $result);
    }

    public function testV2CoreEventGet()
    {
        $this->stubRequest(
            'get',
            '/v2/core/events',
            ['object_id' => 'object_id'],
            [],
            false,
            [
                'data' => [
                    '0' => [
                        'context' => null,
                        'created' => '1970-01-12T21:42:34.472Z',
                        'id' => 'obj_123',
                        'object' => 'v2.core.event',
                        'reason' => null,
                        'type' => 'type',
                        'livemode' => [],
                    ],
                ],
                'next_page_url' => null,
                'previous_page_url' => null,
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->core->events->all([
            'object_id' => 'object_id',
        ]);
        self::assertInstanceOf(V2\Collection::class, $result);
        self::assertInstanceOf(V2\Event::class, $result->data[0]);
    }

    public function testV2CoreEventGet2()
    {
        $this->stubRequest(
            'get',
            '/v2/core/events/id_123',
            [],
            [],
            false,
            [
                'context' => null,
                'created' => '1970-01-12T21:42:34.472Z',
                'id' => 'obj_123',
                'object' => 'v2.core.event',
                'reason' => null,
                'type' => 'type',
                'livemode' => [],
            ],
            200,
            BaseStripeClient::DEFAULT_API_BASE
        );
        $result = $this->v2Client->v2->core->events->retrieve('id_123', []);
        self::assertInstanceOf(V2\Event::class, $result);
    }

    public function testTemporarySessionExpiredError()
    {
        $this->stubRequest(
            'post',
            '/v2/billing/meter_event_stream',
            [
                'events' => [
                    [
                        'event_name' => 'event_name',
                        'payload' => ['undefined' => 'payload'],
                    ],
                ],
            ],
            [],
            false,
            [
                'error' => [
                    'type' => 'temporary_session_expired',
                    'code' => 'billing_meter_event_session_expired',
                ],
            ],
            400,
            BaseStripeClient::DEFAULT_METER_EVENTS_BASE
        );

        try {
            $this->v2Client->v2->billing->meterEventStream->create([
                'events' => [
                    [
                        'event_name' => 'event_name',
                        'payload' => ['undefined' => 'payload'],
                    ],
                ],
            ]);
        } catch (Exception\TemporarySessionExpiredException $e) {
        }
    }
}
