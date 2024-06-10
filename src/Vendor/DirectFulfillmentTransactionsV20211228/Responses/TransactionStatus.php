<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV20211228\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV20211228\Dto\Transaction;

final class TransactionStatus extends Response
{
    /**
     * @param  ?Transaction  $transactionStatus  The transaction status details.
     */
    public function __construct(
        public readonly ?Transaction $transactionStatus = null,
    ) {
    }
}
