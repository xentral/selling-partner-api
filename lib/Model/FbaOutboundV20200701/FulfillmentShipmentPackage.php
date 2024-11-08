<?php
/**
 * FulfillmentShipmentPackage
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaOutboundV20200701;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * FulfillmentShipmentPackage Class Doc Comment
 *
 * @category Class
 * @description Package information for a shipment in a fulfillment order.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FulfillmentShipmentPackage extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FulfillmentShipmentPackage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'package_number' => 'int',
        'carrier_code' => 'string',
        'tracking_number' => 'string',
        'estimated_arrival_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'package_number' => 'int32',
        'carrier_code' => null,
        'tracking_number' => null,
        'estimated_arrival_date' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'package_number' => 'packageNumber',
        'carrier_code' => 'carrierCode',
        'tracking_number' => 'trackingNumber',
        'estimated_arrival_date' => 'estimatedArrivalDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'package_number' => 'setPackageNumber',
        'carrier_code' => 'setCarrierCode',
        'tracking_number' => 'setTrackingNumber',
        'estimated_arrival_date' => 'setEstimatedArrivalDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_number' => 'getPackageNumber',
        'carrier_code' => 'getCarrierCode',
        'tracking_number' => 'getTrackingNumber',
        'estimated_arrival_date' => 'getEstimatedArrivalDate'
    ];


    
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
        $this->container['package_number'] = $data['package_number'] ?? null;
        $this->container['carrier_code'] = $data['carrier_code'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['estimated_arrival_date'] = $data['estimated_arrival_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['package_number'] === null) {
            $invalidProperties[] = "'package_number' can't be null";
        }
        if ($this->container['carrier_code'] === null) {
            $invalidProperties[] = "'carrier_code' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets package_number
     *
     * @return int
     */
    public function getPackageNumber()
    {
        return $this->container['package_number'];
    }

    /**
     * Sets package_number
     *
     * @param int $package_number Identifies a package in a shipment.
     *
     * @return self
     */
    public function setPackageNumber($package_number)
    {
        $this->container['package_number'] = $package_number;

        return $this;
    }
    /**
     * Gets carrier_code
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string $carrier_code Identifies the carrier who will deliver the shipment to the recipient.
     *
     * @return self
     */
    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }
    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number The tracking number, if provided, can be used to obtain tracking and delivery information.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }
    /**
     * Gets estimated_arrival_date
     *
     * @return string|null
     */
    public function getEstimatedArrivalDate()
    {
        return $this->container['estimated_arrival_date'];
    }

    /**
     * Sets estimated_arrival_date
     *
     * @param string|null $estimated_arrival_date A datetime string in ISO 8601 format.
     *
     * @return self
     */
    public function setEstimatedArrivalDate($estimated_arrival_date)
    {
        $this->container['estimated_arrival_date'] = $estimated_arrival_date;

        return $this;
    }
}

