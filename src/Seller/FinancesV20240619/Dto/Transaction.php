<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV20240619\Dto;

use SellingPartnerApi\Dto;

final class Transaction extends Dto
{
    protected static array $complexArrayTypes = [
        'relatedIdentifiers' => RelatedIdentifier::class,
        'items' => Item::class,
        'contexts' => Context::class,
        'breakdowns' => Breakdown::class,
    ];

    /**
     * @param  ?SellingPartnerMetadata  $sellingPartnerMetadata  Metadata that describes the seller.
     * @param  RelatedIdentifier[]|null  $relatedIdentifiers  Related business identifiers of the transaction.
     * @param  ?string  $transactionType  The type of transaction.
     *
     * **Possible value:** `Shipment`
     * @param  ?string  $transactionId  The unique identifier of the transaction.
     * @param  ?string  $transactionStatus  The status of the transaction.
     *
     * **Possible values:**
     *
     * * `Deferred`
     * * `Released`
     * @param  ?string  $description  Describes the reasons for the transaction.
     *
     * **Example:** 'Order Payment', 'Refund Order'
     * @param  ?\DateTimeInterface  $postedDate  A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     * @param  ?Currency  $totalAmount  A currency type and amount.
     * @param  ?MarketplaceDetails  $marketplaceDetails  Information about the marketplace where the transaction occurred.
     * @param  Item[]|null  $items  A list of items in the transaction.
     * @param  Context[]|null  $contexts  A list of additional information about the item.
     * @param  Breakdown[]|null  $breakdowns  A list of breakdowns that provide details on how the total amount is calculated for the transaction.
     */
    public function __construct(
        public readonly ?SellingPartnerMetadata $sellingPartnerMetadata = null,
        public readonly ?array $relatedIdentifiers = null,
        public readonly ?string $transactionType = null,
        public readonly ?string $transactionId = null,
        public readonly ?string $transactionStatus = null,
        public readonly ?string $description = null,
        public readonly ?\DateTimeInterface $postedDate = null,
        public readonly ?Currency $totalAmount = null,
        public readonly ?MarketplaceDetails $marketplaceDetails = null,
        public readonly ?array $items = null,
        public readonly ?array $contexts = null,
        public readonly ?array $breakdowns = null,
    ) {}
}