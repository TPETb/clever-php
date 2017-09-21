<?php
/**
 * Section
 *
 * PHP version 5
 *
 * @category Class
 * @package  Clever
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Clever API
 *
 * The Clever API
 *
 * OpenAPI spec version: 1.2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Clever\Model;

use \ArrayAccess;

/**
 * Section Class Doc Comment
 *
 * @category    Class
 * @package     Clever
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Section implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Section';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'course_description' => 'string',
        'course_name' => 'string',
        'course_number' => 'string',
        'created' => 'string',
        'district' => 'string',
        'grade' => 'string',
        'id' => 'string',
        'last_modified' => 'string',
        'name' => 'string',
        'period' => 'string',
        'school' => 'string',
        'section_number' => 'string',
        'sis_id' => 'string',
        'students' => 'string[]',
        'subject' => 'string',
        'teacher' => 'string',
        'teachers' => 'string[]',
        'term' => '\Clever\Model\Term'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'course_description' => null,
        'course_name' => null,
        'course_number' => null,
        'created' => 'datetime',
        'district' => null,
        'grade' => null,
        'id' => null,
        'last_modified' => 'datetime',
        'name' => null,
        'period' => null,
        'school' => null,
        'section_number' => null,
        'sis_id' => null,
        'students' => null,
        'subject' => null,
        'teacher' => null,
        'teachers' => null,
        'term' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'course_description' => 'course_description',
        'course_name' => 'course_name',
        'course_number' => 'course_number',
        'created' => 'created',
        'district' => 'district',
        'grade' => 'grade',
        'id' => 'id',
        'last_modified' => 'last_modified',
        'name' => 'name',
        'period' => 'period',
        'school' => 'school',
        'section_number' => 'section_number',
        'sis_id' => 'sis_id',
        'students' => 'students',
        'subject' => 'subject',
        'teacher' => 'teacher',
        'teachers' => 'teachers',
        'term' => 'term'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'course_description' => 'setCourseDescription',
        'course_name' => 'setCourseName',
        'course_number' => 'setCourseNumber',
        'created' => 'setCreated',
        'district' => 'setDistrict',
        'grade' => 'setGrade',
        'id' => 'setId',
        'last_modified' => 'setLastModified',
        'name' => 'setName',
        'period' => 'setPeriod',
        'school' => 'setSchool',
        'section_number' => 'setSectionNumber',
        'sis_id' => 'setSisId',
        'students' => 'setStudents',
        'subject' => 'setSubject',
        'teacher' => 'setTeacher',
        'teachers' => 'setTeachers',
        'term' => 'setTerm'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'course_description' => 'getCourseDescription',
        'course_name' => 'getCourseName',
        'course_number' => 'getCourseNumber',
        'created' => 'getCreated',
        'district' => 'getDistrict',
        'grade' => 'getGrade',
        'id' => 'getId',
        'last_modified' => 'getLastModified',
        'name' => 'getName',
        'period' => 'getPeriod',
        'school' => 'getSchool',
        'section_number' => 'getSectionNumber',
        'sis_id' => 'getSisId',
        'students' => 'getStudents',
        'subject' => 'getSubject',
        'teacher' => 'getTeacher',
        'teachers' => 'getTeachers',
        'term' => 'getTerm'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const GRADE__1 = '1';
    const GRADE__2 = '2';
    const GRADE__3 = '3';
    const GRADE__4 = '4';
    const GRADE__5 = '5';
    const GRADE__6 = '6';
    const GRADE__7 = '7';
    const GRADE__8 = '8';
    const GRADE__9 = '9';
    const GRADE__10 = '10';
    const GRADE__11 = '11';
    const GRADE__12 = '12';
    const GRADE_PRE_KINDERGARTEN = 'PreKindergarten';
    const GRADE_KINDERGARTEN = 'Kindergarten';
    const GRADE_POST_GRADUATE = 'PostGraduate';
    const GRADE_OTHER = 'Other';
    const SUBJECT_ENGLISHLANGUAGE_ARTS = 'english/language arts';
    const SUBJECT_MATH = 'math';
    const SUBJECT_SCIENCE = 'science';
    const SUBJECT_SOCIAL_STUDIES = 'social studies';
    const SUBJECT_LANGUAGE = 'language';
    const SUBJECT_HOMEROOMADVISORY = 'homeroom/advisory';
    const SUBJECT_INTERVENTIONSONLINE_LEARNING = 'interventions/online learning';
    const SUBJECT_TECHNOLOGY_AND_ENGINEERING = 'technology and engineering';
    const SUBJECT_PE_AND_HEALTH = 'PE and health';
    const SUBJECT_ARTS_AND_MUSIC = 'arts and music';
    const SUBJECT_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getGradeAllowableValues()
    {
        return [
            self::GRADE__1,
            self::GRADE__2,
            self::GRADE__3,
            self::GRADE__4,
            self::GRADE__5,
            self::GRADE__6,
            self::GRADE__7,
            self::GRADE__8,
            self::GRADE__9,
            self::GRADE__10,
            self::GRADE__11,
            self::GRADE__12,
            self::GRADE_PRE_KINDERGARTEN,
            self::GRADE_KINDERGARTEN,
            self::GRADE_POST_GRADUATE,
            self::GRADE_OTHER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSubjectAllowableValues()
    {
        return [
            self::SUBJECT_ENGLISHLANGUAGE_ARTS,
            self::SUBJECT_MATH,
            self::SUBJECT_SCIENCE,
            self::SUBJECT_SOCIAL_STUDIES,
            self::SUBJECT_LANGUAGE,
            self::SUBJECT_HOMEROOMADVISORY,
            self::SUBJECT_INTERVENTIONSONLINE_LEARNING,
            self::SUBJECT_TECHNOLOGY_AND_ENGINEERING,
            self::SUBJECT_PE_AND_HEALTH,
            self::SUBJECT_ARTS_AND_MUSIC,
            self::SUBJECT_OTHER,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['course_description'] = isset($data['course_description']) ? $data['course_description'] : null;
        $this->container['course_name'] = isset($data['course_name']) ? $data['course_name'] : null;
        $this->container['course_number'] = isset($data['course_number']) ? $data['course_number'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['grade'] = isset($data['grade']) ? $data['grade'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['school'] = isset($data['school']) ? $data['school'] : null;
        $this->container['section_number'] = isset($data['section_number']) ? $data['section_number'] : null;
        $this->container['sis_id'] = isset($data['sis_id']) ? $data['sis_id'] : null;
        $this->container['students'] = isset($data['students']) ? $data['students'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['teacher'] = isset($data['teacher']) ? $data['teacher'] : null;
        $this->container['teachers'] = isset($data['teachers']) ? $data['teachers'] : null;
        $this->container['term'] = isset($data['term']) ? $data['term'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getGradeAllowableValues();
        if (!in_array($this->container['grade'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'grade', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getSubjectAllowableValues();
        if (!in_array($this->container['subject'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'subject', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getGradeAllowableValues();
        if (!in_array($this->container['grade'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getSubjectAllowableValues();
        if (!in_array($this->container['subject'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets course_description
     * @return string
     */
    public function getCourseDescription()
    {
        return $this->container['course_description'];
    }

    /**
     * Sets course_description
     * @param string $course_description
     * @return $this
     */
    public function setCourseDescription($course_description)
    {
        $this->container['course_description'] = $course_description;

        return $this;
    }

    /**
     * Gets course_name
     * @return string
     */
    public function getCourseName()
    {
        return $this->container['course_name'];
    }

    /**
     * Sets course_name
     * @param string $course_name
     * @return $this
     */
    public function setCourseName($course_name)
    {
        $this->container['course_name'] = $course_name;

        return $this;
    }

    /**
     * Gets course_number
     * @return string
     */
    public function getCourseNumber()
    {
        return $this->container['course_number'];
    }

    /**
     * Sets course_number
     * @param string $course_number
     * @return $this
     */
    public function setCourseNumber($course_number)
    {
        $this->container['course_number'] = $course_number;

        return $this;
    }

    /**
     * Gets created
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param string $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets district
     * @return string
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     * @param string $district
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets grade
     * @return string
     */
    public function getGrade()
    {
        return $this->container['grade'];
    }

    /**
     * Sets grade
     * @param string $grade
     * @return $this
     */
    public function setGrade($grade)
    {
        $allowed_values = $this->getGradeAllowableValues();
        if (!is_null($grade) && !in_array($grade, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'grade', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['grade'] = $grade;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets last_modified
     * @return string
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     * @param string $last_modified
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets period
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     * @param string $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets school
     * @return string
     */
    public function getSchool()
    {
        return $this->container['school'];
    }

    /**
     * Sets school
     * @param string $school
     * @return $this
     */
    public function setSchool($school)
    {
        $this->container['school'] = $school;

        return $this;
    }

    /**
     * Gets section_number
     * @return string
     */
    public function getSectionNumber()
    {
        return $this->container['section_number'];
    }

    /**
     * Sets section_number
     * @param string $section_number
     * @return $this
     */
    public function setSectionNumber($section_number)
    {
        $this->container['section_number'] = $section_number;

        return $this;
    }

    /**
     * Gets sis_id
     * @return string
     */
    public function getSisId()
    {
        return $this->container['sis_id'];
    }

    /**
     * Sets sis_id
     * @param string $sis_id
     * @return $this
     */
    public function setSisId($sis_id)
    {
        $this->container['sis_id'] = $sis_id;

        return $this;
    }

    /**
     * Gets students
     * @return string[]
     */
    public function getStudents()
    {
        return $this->container['students'];
    }

    /**
     * Sets students
     * @param string[] $students
     * @return $this
     */
    public function setStudents($students)
    {
        $this->container['students'] = $students;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $allowed_values = $this->getSubjectAllowableValues();
        if (!is_null($subject) && !in_array($subject, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'subject', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets teacher
     * @return string
     */
    public function getTeacher()
    {
        return $this->container['teacher'];
    }

    /**
     * Sets teacher
     * @param string $teacher
     * @return $this
     */
    public function setTeacher($teacher)
    {
        $this->container['teacher'] = $teacher;

        return $this;
    }

    /**
     * Gets teachers
     * @return string[]
     */
    public function getTeachers()
    {
        return $this->container['teachers'];
    }

    /**
     * Sets teachers
     * @param string[] $teachers
     * @return $this
     */
    public function setTeachers($teachers)
    {
        $this->container['teachers'] = $teachers;

        return $this;
    }

    /**
     * Gets term
     * @return \Clever\Model\Term
     */
    public function getTerm()
    {
        return $this->container['term'];
    }

    /**
     * Sets term
     * @param \Clever\Model\Term $term
     * @return $this
     */
    public function setTerm($term)
    {
        $this->container['term'] = $term;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Clever\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Clever\ObjectSerializer::sanitizeForSerialization($this));
    }
}


