<?php
/**
 * GetPrepInstructionsResult
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
 * GetPrepInstructionsResult Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetPrepInstructionsResult extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetPrepInstructionsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sku_prep_instructions_list' => '\SellingPartnerApi\Model\FbaInboundV0\SKUPrepInstructions[]',
        'invalid_sku_list' => '\SellingPartnerApi\Model\FbaInboundV0\InvalidSKU[]',
        'asin_prep_instructions_list' => '\SellingPartnerApi\Model\FbaInboundV0\ASINPrepInstructions[]',
        'invalid_asin_list' => '\SellingPartnerApi\Model\FbaInboundV0\InvalidASIN[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sku_prep_instructions_list' => null,
        'invalid_sku_list' => null,
        'asin_prep_instructions_list' => null,
        'invalid_asin_list' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sku_prep_instructions_list' => 'SKUPrepInstructionsList',
        'invalid_sku_list' => 'InvalidSKUList',
        'asin_prep_instructions_list' => 'ASINPrepInstructionsList',
        'invalid_asin_list' => 'InvalidASINList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku_prep_instructions_list' => 'setSkuPrepInstructionsList',
        'invalid_sku_list' => 'setInvalidSkuList',
        'asin_prep_instructions_list' => 'setAsinPrepInstructionsList',
        'invalid_asin_list' => 'setInvalidAsinList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku_prep_instructions_list' => 'getSkuPrepInstructionsList',
        'invalid_sku_list' => 'getInvalidSkuList',
        'asin_prep_instructions_list' => 'getAsinPrepInstructionsList',
        'invalid_asin_list' => 'getInvalidAsinList'
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
        $this->container['sku_prep_instructions_list'] = $data['sku_prep_instructions_list'] ?? null;
        $this->container['invalid_sku_list'] = $data['invalid_sku_list'] ?? null;
        $this->container['asin_prep_instructions_list'] = $data['asin_prep_instructions_list'] ?? null;
        $this->container['invalid_asin_list'] = $data['invalid_asin_list'] ?? null;
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
     * Gets sku_prep_instructions_list
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\SKUPrepInstructions[]|null
     */
    public function getSkuPrepInstructionsList()
    {
        return $this->container['sku_prep_instructions_list'];
    }

    /**
     * Sets sku_prep_instructions_list
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\SKUPrepInstructions[]|null $sku_prep_instructions_list A list of SKU labeling requirements and item preparation instructions.
     *
     * @return self
     */
    public function setSkuPrepInstructionsList($sku_prep_instructions_list)
    {
        $this->container['sku_prep_instructions_list'] = $sku_prep_instructions_list;

        return $this;
    }
    /**
     * Gets invalid_sku_list
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\InvalidSKU[]|null
     */
    public function getInvalidSkuList()
    {
        return $this->container['invalid_sku_list'];
    }

    /**
     * Sets invalid_sku_list
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\InvalidSKU[]|null $invalid_sku_list A list of invalid SKU values and the reason they are invalid.
     *
     * @return self
     */
    public function setInvalidSkuList($invalid_sku_list)
    {
        $this->container['invalid_sku_list'] = $invalid_sku_list;

        return $this;
    }
    /**
     * Gets asin_prep_instructions_list
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\ASINPrepInstructions[]|null
     */
    public function getAsinPrepInstructionsList()
    {
        return $this->container['asin_prep_instructions_list'];
    }

    /**
     * Sets asin_prep_instructions_list
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\ASINPrepInstructions[]|null $asin_prep_instructions_list A list of item preparation instructions.
     *
     * @return self
     */
    public function setAsinPrepInstructionsList($asin_prep_instructions_list)
    {
        $this->container['asin_prep_instructions_list'] = $asin_prep_instructions_list;

        return $this;
    }
    /**
     * Gets invalid_asin_list
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\InvalidASIN[]|null
     */
    public function getInvalidAsinList()
    {
        return $this->container['invalid_asin_list'];
    }

    /**
     * Sets invalid_asin_list
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\InvalidASIN[]|null $invalid_asin_list A list of invalid ASIN values and the reasons they are invalid.
     *
     * @return self
     */
    public function setInvalidAsinList($invalid_asin_list)
    {
        $this->container['invalid_asin_list'] = $invalid_asin_list;

        return $this;
    }
}

