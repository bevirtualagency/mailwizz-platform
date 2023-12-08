<?php
/**
 * AbTestCampaignResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |   | 406  | Error. Not Acceptable  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SendinBlue\Client\Model;

use \ArrayAccess;
use \SendinBlue\Client\ObjectSerializer;

/**
 * AbTestCampaignResult Class Doc Comment
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AbTestCampaignResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'abTestCampaignResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'winningVersion' => 'string',
        'winningCriteria' => 'string',
        'winningSubjectLine' => 'string',
        'openRate' => 'string',
        'clickRate' => 'string',
        'winningVersionRate' => 'string',
        'statistics' => '\SendinBlue\Client\Model\AbTestCampaignResultStatistics',
        'clickedLinks' => '\SendinBlue\Client\Model\AbTestCampaignResultClickedLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'winningVersion' => null,
        'winningCriteria' => null,
        'winningSubjectLine' => null,
        'openRate' => null,
        'clickRate' => null,
        'winningVersionRate' => null,
        'statistics' => null,
        'clickedLinks' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'winningVersion' => 'winningVersion',
        'winningCriteria' => 'winningCriteria',
        'winningSubjectLine' => 'winningSubjectLine',
        'openRate' => 'openRate',
        'clickRate' => 'clickRate',
        'winningVersionRate' => 'winningVersionRate',
        'statistics' => 'statistics',
        'clickedLinks' => 'clickedLinks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'winningVersion' => 'setWinningVersion',
        'winningCriteria' => 'setWinningCriteria',
        'winningSubjectLine' => 'setWinningSubjectLine',
        'openRate' => 'setOpenRate',
        'clickRate' => 'setClickRate',
        'winningVersionRate' => 'setWinningVersionRate',
        'statistics' => 'setStatistics',
        'clickedLinks' => 'setClickedLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'winningVersion' => 'getWinningVersion',
        'winningCriteria' => 'getWinningCriteria',
        'winningSubjectLine' => 'getWinningSubjectLine',
        'openRate' => 'getOpenRate',
        'clickRate' => 'getClickRate',
        'winningVersionRate' => 'getWinningVersionRate',
        'statistics' => 'getStatistics',
        'clickedLinks' => 'getClickedLinks'
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
        return self::$swaggerModelName;
    }

    const WINNING_VERSION_NOT_AVAILABLE = 'notAvailable';
    const WINNING_VERSION_PENDING = 'pending';
    const WINNING_VERSION_TIE = 'tie';
    const WINNING_VERSION_A = 'A';
    const WINNING_VERSION_B = 'B';
    const WINNING_CRITERIA_OPEN = 'Open';
    const WINNING_CRITERIA_CLICK = 'Click';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWinningVersionAllowableValues()
    {
        return [
            self::WINNING_VERSION_NOT_AVAILABLE,
            self::WINNING_VERSION_PENDING,
            self::WINNING_VERSION_TIE,
            self::WINNING_VERSION_A,
            self::WINNING_VERSION_B,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWinningCriteriaAllowableValues()
    {
        return [
            self::WINNING_CRITERIA_OPEN,
            self::WINNING_CRITERIA_CLICK,
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
        $this->container['winningVersion'] = isset($data['winningVersion']) ? $data['winningVersion'] : null;
        $this->container['winningCriteria'] = isset($data['winningCriteria']) ? $data['winningCriteria'] : null;
        $this->container['winningSubjectLine'] = isset($data['winningSubjectLine']) ? $data['winningSubjectLine'] : null;
        $this->container['openRate'] = isset($data['openRate']) ? $data['openRate'] : null;
        $this->container['clickRate'] = isset($data['clickRate']) ? $data['clickRate'] : null;
        $this->container['winningVersionRate'] = isset($data['winningVersionRate']) ? $data['winningVersionRate'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
        $this->container['clickedLinks'] = isset($data['clickedLinks']) ? $data['clickedLinks'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getWinningVersionAllowableValues();
        if (!is_null($this->container['winningVersion']) && !in_array($this->container['winningVersion'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'winningVersion', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWinningCriteriaAllowableValues();
        if (!is_null($this->container['winningCriteria']) && !in_array($this->container['winningCriteria'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'winningCriteria', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets winningVersion
     *
     * @return string
     */
    public function getWinningVersion()
    {
        return $this->container['winningVersion'];
    }

    /**
     * Sets winningVersion
     *
     * @param string $winningVersion Winning Campaign Info. pending = Campaign has been picked for sending and winning version is yet to be decided, tie = A tie happened between both the versions, notAvailable = Campaign has not yet been picked for sending.
     *
     * @return $this
     */
    public function setWinningVersion($winningVersion)
    {
        $allowedValues = $this->getWinningVersionAllowableValues();
        if (!is_null($winningVersion) && !in_array($winningVersion, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'winningVersion', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['winningVersion'] = $winningVersion;

        return $this;
    }

    /**
     * Gets winningCriteria
     *
     * @return string
     */
    public function getWinningCriteria()
    {
        return $this->container['winningCriteria'];
    }

    /**
     * Sets winningCriteria
     *
     * @param string $winningCriteria Criteria choosen for winning version (Open/Click)
     *
     * @return $this
     */
    public function setWinningCriteria($winningCriteria)
    {
        $allowedValues = $this->getWinningCriteriaAllowableValues();
        if (!is_null($winningCriteria) && !in_array($winningCriteria, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'winningCriteria', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['winningCriteria'] = $winningCriteria;

        return $this;
    }

    /**
     * Gets winningSubjectLine
     *
     * @return string
     */
    public function getWinningSubjectLine()
    {
        return $this->container['winningSubjectLine'];
    }

    /**
     * Sets winningSubjectLine
     *
     * @param string $winningSubjectLine Subject Line of current winning version
     *
     * @return $this
     */
    public function setWinningSubjectLine($winningSubjectLine)
    {
        $this->container['winningSubjectLine'] = $winningSubjectLine;

        return $this;
    }

    /**
     * Gets openRate
     *
     * @return string
     */
    public function getOpenRate()
    {
        return $this->container['openRate'];
    }

    /**
     * Sets openRate
     *
     * @param string $openRate Open rate for current winning version
     *
     * @return $this
     */
    public function setOpenRate($openRate)
    {
        $this->container['openRate'] = $openRate;

        return $this;
    }

    /**
     * Gets clickRate
     *
     * @return string
     */
    public function getClickRate()
    {
        return $this->container['clickRate'];
    }

    /**
     * Sets clickRate
     *
     * @param string $clickRate Click rate for current winning version
     *
     * @return $this
     */
    public function setClickRate($clickRate)
    {
        $this->container['clickRate'] = $clickRate;

        return $this;
    }

    /**
     * Gets winningVersionRate
     *
     * @return string
     */
    public function getWinningVersionRate()
    {
        return $this->container['winningVersionRate'];
    }

    /**
     * Sets winningVersionRate
     *
     * @param string $winningVersionRate Open/Click rate for the winner version
     *
     * @return $this
     */
    public function setWinningVersionRate($winningVersionRate)
    {
        $this->container['winningVersionRate'] = $winningVersionRate;

        return $this;
    }

    /**
     * Gets statistics
     *
     * @return \SendinBlue\Client\Model\AbTestCampaignResultStatistics
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     *
     * @param \SendinBlue\Client\Model\AbTestCampaignResultStatistics $statistics statistics
     *
     * @return $this
     */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;

        return $this;
    }

    /**
     * Gets clickedLinks
     *
     * @return \SendinBlue\Client\Model\AbTestCampaignResultClickedLinks
     */
    public function getClickedLinks()
    {
        return $this->container['clickedLinks'];
    }

    /**
     * Sets clickedLinks
     *
     * @param \SendinBlue\Client\Model\AbTestCampaignResultClickedLinks $clickedLinks clickedLinks
     *
     * @return $this
     */
    public function setClickedLinks($clickedLinks)
    {
        $this->container['clickedLinks'] = $clickedLinks;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


