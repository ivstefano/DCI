<?php
/**
 * Created by Ivo Stefanov
 * Date: 5/1/15
 * Time: 2:32 AM
 */

namespace Users;

use Behaviors\CastableBehavior;

class Admin
{
    use CastableBehavior;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var UserTypes
     */
    private $type;
}