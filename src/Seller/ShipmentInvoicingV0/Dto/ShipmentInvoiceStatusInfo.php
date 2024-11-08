<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use SellingPartnerApi\Dto;

final class ShipmentInvoiceStatusInfo extends Dto
{
    protected static array $attributeMap = ['amazonShipmentId' => 'AmazonShipmentId', 'invoiceStatus' => 'InvoiceStatus'];

    /**
     * @param  ?string  $amazonShipmentId  The Amazon-defined shipment identifier.
     * @param  ?string  $invoiceStatus  The shipment invoice status.
     */
    public function __construct(
        public ?string $amazonShipmentId = null,
        public ?string $invoiceStatus = null,
    ) {}
}
