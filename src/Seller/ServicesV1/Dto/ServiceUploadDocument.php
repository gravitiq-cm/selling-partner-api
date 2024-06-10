<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class ServiceUploadDocument extends Dto
{
    protected static array $attributeMap = ['contentMd5' => 'contentMD5'];

    /**
     * @param  string  $contentType  The content type of the to-be-uploaded file
     * @param  float  $contentLength  The content length of the to-be-uploaded file
     * @param  ?string  $contentMd5  An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit.
     */
    public function __construct(
        public readonly string $contentType,
        public readonly float $contentLength,
        public readonly ?string $contentMd5 = null,
    ) {
    }
}
