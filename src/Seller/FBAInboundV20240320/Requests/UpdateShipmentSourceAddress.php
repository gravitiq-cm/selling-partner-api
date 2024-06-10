<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\UpdateShipmentSourceAddressRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\UpdateShipmentSourceAddressResponse;

/**
 * updateShipmentSourceAddress
 */
class UpdateShipmentSourceAddress extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  UpdateShipmentSourceAddressRequest  $updateShipmentSourceAddressRequest  The `UpdateShipmentSourceAddress` request.
     */
    public function __construct(
        protected string $inboundPlanId,
        protected string $shipmentId,
        public UpdateShipmentSourceAddressRequest $updateShipmentSourceAddressRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/shipments/{$this->shipmentId}/sourceAddress";
    }

    public function createDtoFromResponse(Response $response): UpdateShipmentSourceAddressResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => UpdateShipmentSourceAddressResponse::class,
            400, 404, 500, 403, 413, 415, 429, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->updateShipmentSourceAddressRequest->toArray();
    }
}