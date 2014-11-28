<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class DropboxPost extends \CourseEntity
{
    /**
     * @return \Entity\Repository\DropboxPostRepository
     */
     public static function repository(){
        return \Entity\Repository\DropboxPostRepository::instance();
    }

    /**
     * @return \Entity\DropboxPost
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $c_id
     */
    protected $c_id;

    /**
     * @var integer $file_id
     */
    protected $file_id;

    /**
     * @var integer $dest_user_id
     */
    protected $dest_user_id;

    /**
     * @var datetime $feedback_date
     */
    protected $feedback_date;

    /**
     * @var text $feedback
     */
    protected $feedback;

    /**
     * @var integer $cat_id
     */
    protected $cat_id;

    /**
     * @var integer $session_id
     */
    protected $session_id;


    /**
     * Set c_id
     *
     * @param integer $value
     * @return DropboxPost
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
     * Set file_id
     *
     * @param integer $value
     * @return DropboxPost
     */
    public function set_file_id($value)
    {
        $this->file_id = $value;
        return $this;
    }

    /**
     * Get file_id
     *
     * @return integer 
     */
    public function get_file_id()
    {
        return $this->file_id;
    }

    /**
     * Set dest_user_id
     *
     * @param integer $value
     * @return DropboxPost
     */
    public function set_dest_user_id($value)
    {
        $this->dest_user_id = $value;
        return $this;
    }

    /**
     * Get dest_user_id
     *
     * @return integer 
     */
    public function get_dest_user_id()
    {
        return $this->dest_user_id;
    }

    /**
     * Set feedback_date
     *
     * @param datetime $value
     * @return DropboxPost
     */
    public function set_feedback_date($value)
    {
        $this->feedback_date = $value;
        return $this;
    }

    /**
     * Get feedback_date
     *
     * @return datetime 
     */
    public function get_feedback_date()
    {
        return $this->feedback_date;
    }

    /**
     * Set feedback
     *
     * @param text $value
     * @return DropboxPost
     */
    public function set_feedback($value)
    {
        $this->feedback = $value;
        return $this;
    }

    /**
     * Get feedback
     *
     * @return text 
     */
    public function get_feedback()
    {
        return $this->feedback;
    }

    /**
     * Set cat_id
     *
     * @param integer $value
     * @return DropboxPost
     */
    public function set_cat_id($value)
    {
        $this->cat_id = $value;
        return $this;
    }

    /**
     * Get cat_id
     *
     * @return integer 
     */
    public function get_cat_id()
    {
        return $this->cat_id;
    }

    /**
     * Set session_id
     *
     * @param integer $value
     * @return DropboxPost
     */
    public function set_session_id($value)
    {
        $this->session_id = $value;
        return $this;
    }

    /**
     * Get session_id
     *
     * @return integer 
     */
    public function get_session_id()
    {
        return $this->session_id;
    }
}