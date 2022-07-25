<?php
/**
 * ShipmentConfirmation
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorShippingV1;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ShipmentConfirmation Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentConfirmation implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentConfirmation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_identifier' => 'string',
        'shipment_confirmation_type' => 'string',
        'shipment_type' => 'string',
        'shipment_structure' => 'string',
        'transportation_details' => '\SellingPartnerApi\Model\VendorShippingV1\TransportationDetails',
        'amazon_reference_number' => 'string',
        'shipment_confirmation_date' => 'string',
        'shipped_date' => 'string',
        'estimated_delivery_date' => 'string',
        'selling_party' => '\SellingPartnerApi\Model\VendorShippingV1\PartyIdentification',
        'ship_from_party' => '\SellingPartnerApi\Model\VendorShippingV1\PartyIdentification',
        'ship_to_party' => '\SellingPartnerApi\Model\VendorShippingV1\PartyIdentification',
        'shipment_measurements' => '\SellingPartnerApi\Model\VendorShippingV1\ShipmentMeasurements',
        'import_details' => '\SellingPartnerApi\Model\VendorShippingV1\ImportDetails',
        'shipped_items' => '\SellingPartnerApi\Model\VendorShippingV1\Item[]',
        'cartons' => '\SellingPartnerApi\Model\VendorShippingV1\Carton[]',
        'pallets' => '\SellingPartnerApi\Model\VendorShippingV1\Pallet[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_identifier' => null,
        'shipment_confirmation_type' => null,
        'shipment_type' => null,
        'shipment_structure' => null,
        'transportation_details' => null,
        'amazon_reference_number' => null,
        'shipment_confirmation_date' => null,
        'shipped_date' => null,
        'estimated_delivery_date' => null,
        'selling_party' => null,
        'ship_from_party' => null,
        'ship_to_party' => null,
        'shipment_measurements' => null,
        'import_details' => null,
        'shipped_items' => null,
        'cartons' => null,
        'pallets' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipment_identifier' => 'shipmentIdentifier',
        'shipment_confirmation_type' => 'shipmentConfirmationType',
        'shipment_type' => 'shipmentType',
        'shipment_structure' => 'shipmentStructure',
        'transportation_details' => 'transportationDetails',
        'amazon_reference_number' => 'amazonReferenceNumber',
        'shipment_confirmation_date' => 'shipmentConfirmationDate',
        'shipped_date' => 'shippedDate',
        'estimated_delivery_date' => 'estimatedDeliveryDate',
        'selling_party' => 'sellingParty',
        'ship_from_party' => 'shipFromParty',
        'ship_to_party' => 'shipToParty',
        'shipment_measurements' => 'shipmentMeasurements',
        'import_details' => 'importDetails',
        'shipped_items' => 'shippedItems',
        'cartons' => 'cartons',
        'pallets' => 'pallets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'shipment_identifier' => 'setShipmentIdentifier',
        'shipment_confirmation_type' => 'setShipmentConfirmationType',
        'shipment_type' => 'setShipmentType',
        'shipment_structure' => 'setShipmentStructure',
        'transportation_details' => 'setTransportationDetails',
        'amazon_reference_number' => 'setAmazonReferenceNumber',
        'shipment_confirmation_date' => 'setShipmentConfirmationDate',
        'shipped_date' => 'setShippedDate',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
        'selling_party' => 'setSellingParty',
        'ship_from_party' => 'setShipFromParty',
        'ship_to_party' => 'setShipToParty',
        'shipment_measurements' => 'setShipmentMeasurements',
        'import_details' => 'setImportDetails',
        'shipped_items' => 'setShippedItems',
        'cartons' => 'setCartons',
        'pallets' => 'setPallets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_identifier' => 'getShipmentIdentifier',
        'shipment_confirmation_type' => 'getShipmentConfirmationType',
        'shipment_type' => 'getShipmentType',
        'shipment_structure' => 'getShipmentStructure',
        'transportation_details' => 'getTransportationDetails',
        'amazon_reference_number' => 'getAmazonReferenceNumber',
        'shipment_confirmation_date' => 'getShipmentConfirmationDate',
        'shipped_date' => 'getShippedDate',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
        'selling_party' => 'getSellingParty',
        'ship_from_party' => 'getShipFromParty',
        'ship_to_party' => 'getShipToParty',
        'shipment_measurements' => 'getShipmentMeasurements',
        'import_details' => 'getImportDetails',
        'shipped_items' => 'getShippedItems',
        'cartons' => 'getCartons',
        'pallets' => 'getPallets'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const SHIPMENT_CONFIRMATION_TYPE_ORIGINAL = 'Original';
    const SHIPMENT_CONFIRMATION_TYPE_REPLACE = 'Replace';
    

    const SHIPMENT_TYPE_TRUCK_LOAD = 'TruckLoad';
    const SHIPMENT_TYPE_LESS_THAN_TRUCK_LOAD = 'LessThanTruckLoad';
    const SHIPMENT_TYPE_SMALL_PARCEL = 'SmallParcel';
    

    const SHIPMENT_STRUCTURE_PALLETIZED_ASSORTMENT_CASE = 'PalletizedAssortmentCase';
    const SHIPMENT_STRUCTURE_LOOSE_ASSORTMENT_CASE = 'LooseAssortmentCase';
    const SHIPMENT_STRUCTURE_PALLET_OF_ITEMS = 'PalletOfItems';
    const SHIPMENT_STRUCTURE_PALLETIZED_STANDARD_CASE = 'PalletizedStandardCase';
    const SHIPMENT_STRUCTURE_LOOSE_STANDARD_CASE = 'LooseStandardCase';
    const SHIPMENT_STRUCTURE_MASTER_PALLET = 'MasterPallet';
    const SHIPMENT_STRUCTURE_MASTER_CASE = 'MasterCase';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipmentConfirmationTypeAllowableValues()
    {
        return [
            self::SHIPMENT_CONFIRMATION_TYPE_ORIGINAL,
            self::SHIPMENT_CONFIRMATION_TYPE_REPLACE,
        ];
    }
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipmentTypeAllowableValues()
    {
        return [
            self::SHIPMENT_TYPE_TRUCK_LOAD,
            self::SHIPMENT_TYPE_LESS_THAN_TRUCK_LOAD,
            self::SHIPMENT_TYPE_SMALL_PARCEL,
        ];
    }
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipmentStructureAllowableValues()
    {
        return [
            self::SHIPMENT_STRUCTURE_PALLETIZED_ASSORTMENT_CASE,
            self::SHIPMENT_STRUCTURE_LOOSE_ASSORTMENT_CASE,
            self::SHIPMENT_STRUCTURE_PALLET_OF_ITEMS,
            self::SHIPMENT_STRUCTURE_PALLETIZED_STANDARD_CASE,
            self::SHIPMENT_STRUCTURE_LOOSE_STANDARD_CASE,
            self::SHIPMENT_STRUCTURE_MASTER_PALLET,
            self::SHIPMENT_STRUCTURE_MASTER_CASE,
        ];
    }
    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shipment_identifier'] = $data['shipment_identifier'] ?? null;
        $this->container['shipment_confirmation_type'] = $data['shipment_confirmation_type'] ?? null;
        $this->container['shipment_type'] = $data['shipment_type'] ?? null;
        $this->container['shipment_structure'] = $data['shipment_structure'] ?? null;
        $this->container['transportation_details'] = $data['transportation_details'] ?? null;
        $this->container['amazon_reference_number'] = $data['amazon_reference_number'] ?? null;
        $this->container['shipment_confirmation_date'] = $data['shipment_confirmation_date'] ?? null;
        $this->container['shipped_date'] = $data['shipped_date'] ?? null;
        $this->container['estimated_delivery_date'] = $data['estimated_delivery_date'] ?? null;
        $this->container['selling_party'] = $data['selling_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['ship_to_party'] = $data['ship_to_party'] ?? null;
        $this->container['shipment_measurements'] = $data['shipment_measurements'] ?? null;
        $this->container['import_details'] = $data['import_details'] ?? null;
        $this->container['shipped_items'] = $data['shipped_items'] ?? null;
        $this->container['cartons'] = $data['cartons'] ?? null;
        $this->container['pallets'] = $data['pallets'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shipment_identifier'] === null) {
            $invalidProperties[] = "'shipment_identifier' can't be null";
        }
        if ($this->container['shipment_confirmation_type'] === null) {
            $invalidProperties[] = "'shipment_confirmation_type' can't be null";
        }
        $allowedValues = $this->getShipmentConfirmationTypeAllowableValues();
        if (!is_null($this->container['shipment_confirmation_type']) && !in_array($this->container['shipment_confirmation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipment_confirmation_type', must be one of '%s'",
                $this->container['shipment_confirmation_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShipmentTypeAllowableValues();
        if (!is_null($this->container['shipment_type']) && !in_array($this->container['shipment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipment_type', must be one of '%s'",
                $this->container['shipment_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShipmentStructureAllowableValues();
        if (!is_null($this->container['shipment_structure']) && !in_array($this->container['shipment_structure'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipment_structure', must be one of '%s'",
                $this->container['shipment_structure'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['shipment_confirmation_date'] === null) {
            $invalidProperties[] = "'shipment_confirmation_date' can't be null";
        }
        if ($this->container['selling_party'] === null) {
            $invalidProperties[] = "'selling_party' can't be null";
        }
        if ($this->container['ship_from_party'] === null) {
            $invalidProperties[] = "'ship_from_party' can't be null";
        }
        if ($this->container['ship_to_party'] === null) {
            $invalidProperties[] = "'ship_to_party' can't be null";
        }
        if ($this->container['shipped_items'] === null) {
            $invalidProperties[] = "'shipped_items' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets shipment_identifier
     *
     * @return string
     */
    public function getShipmentIdentifier()
    {
        return $this->container['shipment_identifier'];
    }

    /**
     * Sets shipment_identifier
     *
     * @param string $shipment_identifier Unique shipment ID (not used over the last 365 days).
     *
     * @return self
     */
    public function setShipmentIdentifier($shipment_identifier)
    {
        $this->container['shipment_identifier'] = $shipment_identifier;

        return $this;
    }
    /**
     * Gets shipment_confirmation_type
     *
     * @return string
     */
    public function getShipmentConfirmationType()
    {
        return $this->container['shipment_confirmation_type'];
    }

    /**
     * Sets shipment_confirmation_type
     *
     * @param string $shipment_confirmation_type Indicates if this shipment confirmation is the initial confirmation, or intended to replace an already posted shipment confirmation. If replacing an existing shipment confirmation, be sure to provide the identical shipmentIdentifier and sellingParty information as in the previous confirmation.
     *
     * @return self
     */
    public function setShipmentConfirmationType($shipment_confirmation_type)
    {
        $allowedValues = $this->getShipmentConfirmationTypeAllowableValues();
        if (!in_array($shipment_confirmation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipment_confirmation_type', must be one of '%s'",
                    $shipment_confirmation_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_confirmation_type'] = $shipment_confirmation_type;

        return $this;
    }
    /**
     * Gets shipment_type
     *
     * @return string|null
     */
    public function getShipmentType()
    {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type
     *
     * @param string|null $shipment_type The type of shipment.
     *
     * @return self
     */
    public function setShipmentType($shipment_type)
    {
        $allowedValues = $this->getShipmentTypeAllowableValues();
        if (!is_null($shipment_type) && !in_array($shipment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipment_type', must be one of '%s'",
                    $shipment_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_type'] = $shipment_type;

        return $this;
    }
    /**
     * Gets shipment_structure
     *
     * @return string|null
     */
    public function getShipmentStructure()
    {
        return $this->container['shipment_structure'];
    }

    /**
     * Sets shipment_structure
     *
     * @param string|null $shipment_structure Shipment hierarchical structure.
     *
     * @return self
     */
    public function setShipmentStructure($shipment_structure)
    {
        $allowedValues = $this->getShipmentStructureAllowableValues();
        if (!is_null($shipment_structure) && !in_array($shipment_structure, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipment_structure', must be one of '%s'",
                    $shipment_structure,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_structure'] = $shipment_structure;

        return $this;
    }
    /**
     * Gets transportation_details
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\TransportationDetails|null
     */
    public function getTransportationDetails()
    {
        return $this->container['transportation_details'];
    }

    /**
     * Sets transportation_details
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\TransportationDetails|null $transportation_details transportation_details
     *
     * @return self
     */
    public function setTransportationDetails($transportation_details)
    {
        $this->container['transportation_details'] = $transportation_details;

        return $this;
    }
    /**
     * Gets amazon_reference_number
     *
     * @return string|null
     */
    public function getAmazonReferenceNumber()
    {
        return $this->container['amazon_reference_number'];
    }

    /**
     * Sets amazon_reference_number
     *
     * @param string|null $amazon_reference_number The Amazon Reference Number is a unique identifier generated by Amazon for all Collect/WePay shipments when you submit  a routing request. This field is mandatory for Collect/WePay shipments.
     *
     * @return self
     */
    public function setAmazonReferenceNumber($amazon_reference_number)
    {
        $this->container['amazon_reference_number'] = $amazon_reference_number;

        return $this;
    }
    /**
     * Gets shipment_confirmation_date
     *
     * @return string
     */
    public function getShipmentConfirmationDate()
    {
        return $this->container['shipment_confirmation_date'];
    }

    /**
     * Sets shipment_confirmation_date
     *
     * @param string $shipment_confirmation_date Date on which the shipment confirmation was submitted. Must be in ISO 8601 format.
     *
     * @return self
     */
    public function setShipmentConfirmationDate($shipment_confirmation_date)
    {
        $this->container['shipment_confirmation_date'] = $shipment_confirmation_date;

        return $this;
    }
    /**
     * Gets shipped_date
     *
     * @return string|null
     */
    public function getShippedDate()
    {
        return $this->container['shipped_date'];
    }

    /**
     * Sets shipped_date
     *
     * @param string|null $shipped_date The date and time of the departure of the shipment from the vendor's location. Vendors are requested to send ASNs within 30 minutes of departure from their warehouse/distribution center or at least 6 hours prior to the appointment time at the Amazon destination warehouse, whichever is sooner. Shipped date mentioned in the shipment confirmation should not be in the future. Must be in ISO 8601 format.
     *
     * @return self
     */
    public function setShippedDate($shipped_date)
    {
        $this->container['shipped_date'] = $shipped_date;

        return $this;
    }
    /**
     * Gets estimated_delivery_date
     *
     * @return string|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date
     *
     * @param string|null $estimated_delivery_date The date and time on which the shipment is expected to reach buyer's warehouse. It needs to be an estimate based on the average transit time between ship from location and the destination. The exact appointment time will be provided by the buyer and is potentially not known when creating the shipment confirmation. Must be in ISO 8601 format.
     *
     * @return self
     */
    public function setEstimatedDeliveryDate($estimated_delivery_date)
    {
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

        return $this;
    }
    /**
     * Gets selling_party
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification $selling_party selling_party
     *
     * @return self
     */
    public function setSellingParty($selling_party)
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }
    /**
     * Gets ship_from_party
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification $ship_from_party ship_from_party
     *
     * @return self
     */
    public function setShipFromParty($ship_from_party)
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }
    /**
     * Gets ship_to_party
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification
     */
    public function getShipToParty()
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification $ship_to_party ship_to_party
     *
     * @return self
     */
    public function setShipToParty($ship_to_party)
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }
    /**
     * Gets shipment_measurements
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\ShipmentMeasurements|null
     */
    public function getShipmentMeasurements()
    {
        return $this->container['shipment_measurements'];
    }

    /**
     * Sets shipment_measurements
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\ShipmentMeasurements|null $shipment_measurements shipment_measurements
     *
     * @return self
     */
    public function setShipmentMeasurements($shipment_measurements)
    {
        $this->container['shipment_measurements'] = $shipment_measurements;

        return $this;
    }
    /**
     * Gets import_details
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\ImportDetails|null
     */
    public function getImportDetails()
    {
        return $this->container['import_details'];
    }

    /**
     * Sets import_details
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\ImportDetails|null $import_details import_details
     *
     * @return self
     */
    public function setImportDetails($import_details)
    {
        $this->container['import_details'] = $import_details;

        return $this;
    }
    /**
     * Gets shipped_items
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\Item[]
     */
    public function getShippedItems()
    {
        return $this->container['shipped_items'];
    }

    /**
     * Sets shipped_items
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\Item[] $shipped_items A list of the items in this shipment and their associated details. If any of the item detail fields are common at a carton or a pallet level, provide them at the corresponding carton or pallet level.
     *
     * @return self
     */
    public function setShippedItems($shipped_items)
    {
        $this->container['shipped_items'] = $shipped_items;

        return $this;
    }
    /**
     * Gets cartons
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\Carton[]|null
     */
    public function getCartons()
    {
        return $this->container['cartons'];
    }

    /**
     * Sets cartons
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\Carton[]|null $cartons A list of the cartons in this shipment.
     *
     * @return self
     */
    public function setCartons($cartons)
    {
        $this->container['cartons'] = $cartons;

        return $this;
    }
    /**
     * Gets pallets
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\Pallet[]|null
     */
    public function getPallets()
    {
        return $this->container['pallets'];
    }

    /**
     * Sets pallets
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\Pallet[]|null $pallets A list of the pallets in this shipment.
     *
     * @return self
     */
    public function setPallets($pallets)
    {
        $this->container['pallets'] = $pallets;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Enable iterating over all of the model's attributes in $key => $value format
     *
     * @return \Traversable
     */
    public function getIterator(): \Traversable
    {
        return (function () {
            foreach ($this->container as $key => $value) {
                yield $key => $value;
            }
        })();
    }

    /**
     * Retrieves the property with the given name by converting the property accession
     * to a getter call.
     *
     * @param string $propertyName
     * @return mixed
     */
    public function __get($propertyName)
    {
        // This doesn't make a syntactical difference since PHP is case-insensitive, but
        // makes error messages clearer (e.g. "Call to undefined method getFoo()" rather
        // than "Call to undefined method getfoo()").
        $ucProp = ucfirst($propertyName);
        $getter = "get$ucProp";
        return $this->$getter();
    }

    /**
     * Sets the property with the given name by converting the property accession
     * to a setter call.
     *
     * @param string $propertyName
     * @param mixed $propertyValue
     * @return SellingPartnerApi\Model\VendorShippingV1\ShipmentConfirmation
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


