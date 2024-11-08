<?php
/**
 * BoxContentsFeeDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaInboundV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * BoxContentsFeeDetails Class Doc Comment
 *
 * @category Class
 * @description The manual processing fee per unit and total fee for a shipment.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class BoxContentsFeeDetails extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BoxContentsFeeDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_units' => 'int',
        'fee_per_unit' => '\SellingPartnerApi\Model\FbaInboundV0\Amount',
        'total_fee' => '\SellingPartnerApi\Model\FbaInboundV0\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total_units' => 'int32',
        'fee_per_unit' => null,
        'total_fee' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'total_units' => 'TotalUnits',
        'fee_per_unit' => 'FeePerUnit',
        'total_fee' => 'TotalFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_units' => 'setTotalUnits',
        'fee_per_unit' => 'setFeePerUnit',
        'total_fee' => 'setTotalFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_units' => 'getTotalUnits',
        'fee_per_unit' => 'getFeePerUnit',
        'total_fee' => 'getTotalFee'
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
        $this->container['total_units'] = $data['total_units'] ?? null;
        $this->container['fee_per_unit'] = $data['fee_per_unit'] ?? null;
        $this->container['total_fee'] = $data['total_fee'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }


    /**
     * Gets total_units
     *
     * @return int|null
     */
    public function getTotalUnits()
    {
        return $this->container['total_units'];
    }

    /**
     * Sets total_units
     *
     * @param int|null $total_units The item quantity.
     *
     * @return self
     */
    public function setTotalUnits($total_units)
    {
        $this->container['total_units'] = $total_units;

        return $this;
    }
    /**
     * Gets fee_per_unit
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\Amount|null
     */
    public function getFeePerUnit()
    {
        return $this->container['fee_per_unit'];
    }

    /**
     * Sets fee_per_unit
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\Amount|null $fee_per_unit fee_per_unit
     *
     * @return self
     */
    public function setFeePerUnit($fee_per_unit)
    {
        $this->container['fee_per_unit'] = $fee_per_unit;

        return $this;
    }
    /**
     * Gets total_fee
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\Amount|null
     */
    public function getTotalFee()
    {
        return $this->container['total_fee'];
    }

    /**
     * Sets total_fee
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\Amount|null $total_fee total_fee
     *
     * @return self
     */
    public function setTotalFee($total_fee)
    {
        $this->container['total_fee'] = $total_fee;

        return $this;
    }
}

