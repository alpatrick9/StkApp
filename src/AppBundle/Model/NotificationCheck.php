<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/28/16
 * Time: 2:14 PM
 */

namespace AppBundle\Model;


class NotificationCheck
{
    public $status;

    /**
     * NotificationCheck constructor.
     * @param $status
     */
    public function __construct()
    {
        $this->status = false;
    }


}