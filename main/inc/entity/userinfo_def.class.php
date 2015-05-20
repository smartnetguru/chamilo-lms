<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class UserinfoDef extends \CourseEntity
{
    /**
     * @return \Entity\Repository\UserinfoDefRepository
     */
     public static function repository(){
        return \Entity\Repository\UserinfoDefRepository::instance();
    }

    /**
     * @return \Entity\UserinfoDef
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $c_id
     */
    protected $c_id;

    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var string $title
     */
    protected $title;

    /**
     * @var text $comment
     */
    protected $comment;

    /**
     * @var boolean $line_count
     */
    protected $line_count;

    /**
     * @var boolean $rank
     */
    protected $rank;


    /**
     * Set c_id
     *
     * @param integer $value
     * @return UserinfoDef
     */
    public function set_c_id($value)
    {
        $this->c_id = $value;
        return $this;
    }

    /**
     * Get c_id
     *
     * @return integer 
     */
    public function get_c_id()
    {
        return $this->c_id;
    }

    /**
     * Set id
     *
     * @param integer $value
     * @return UserinfoDef
     */
    public function set_id($value)
    {
        $this->id = $value;
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $value
     * @return UserinfoDef
     */
    public function set_title($value)
    {
        $this->title = $value;
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function get_title()
    {
        return $this->title;
    }

    /**
     * Set comment
     *
     * @param text $value
     * @return UserinfoDef
     */
    public function set_comment($value)
    {
        $this->comment = $value;
        return $this;
    }

    /**
     * Get comment
     *
     * @return text 
     */
    public function get_comment()
    {
        return $this->comment;
    }

    /**
     * Set line_count
     *
     * @param boolean $value
     * @return UserinfoDef
     */
    public function set_line_count($value)
    {
        $this->line_count = $value;
        return $this;
    }

    /**
     * Get line_count
     *
     * @return boolean 
     */
    public function get_line_count()
    {
        return $this->line_count;
    }

    /**
     * Set rank
     *
     * @param boolean $value
     * @return UserinfoDef
     */
    public function set_rank($value)
    {
        $this->rank = $value;
        return $this;
    }

    /**
     * Get rank
     *
     * @return boolean 
     */
    public function get_rank()
    {
        return $this->rank;
    }
}