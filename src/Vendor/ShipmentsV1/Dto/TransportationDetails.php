<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class TransportationDetails extends Dto
{
    /**
     * @param  ?string  $shipMode  The type of shipment.
     * @param  ?string  $transportationMode  The mode of transportation for this shipment.
     * @param  ?\DateTimeInterface  $shippedDate  Date when shipment is performed by the Vendor to Buyer
     * @param  ?\DateTimeInterface  $estimatedDeliveryDate  Estimated Date on which shipment will be delivered from Vendor to Buyer
     * @param  ?\DateTimeInterface  $shipmentDeliveryDate  Date on which shipment will be delivered from Vendor to Buyer
     * @param  ?CarrierDetails  $carrierDetails  Indicates the carrier details and their contact informations
     * @param  ?string  $billOfLadingNumber  The Bill of Lading (BOL) number is a unique number assigned to each shipment of goods by the vendor or shipper during the creation of the Bill of Lading. This number must be unique for every shipment and cannot be a date/time or single character. The BOL numer is mandatory in Shipment Confirmation message for FTL and LTL shipments, and must match the paper BOL provided with the shipment. Instead of BOL, an alternative reference number (like Delivery Note Number) for the shipment can also be sent in this field.
     */
    public function __construct(
        public ?string $shipMode = null,
        public ?string $transportationMode = null,
        public ?\DateTimeInterface $shippedDate = null,
        public ?\DateTimeInterface $estimatedDeliveryDate = null,
        public ?\DateTimeInterface $shipmentDeliveryDate = null,
        public ?CarrierDetails $carrierDetails = null,
        public ?string $billOfLadingNumber = null,
    ) {}
}
