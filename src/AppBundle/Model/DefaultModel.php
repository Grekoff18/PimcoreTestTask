<?php

namespace AppBundle\Model;

use Pimcore\Controller\FrontendController;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class DefaultModel
 * @package AppBundle\Model
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="usrs")
 */

class DefaultModel extends FrontendController
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @var mixed
     * @ORM\Column(type="text")
     */
    protected $login;
    /**
     * @var mixed
     * @ORM\Column(type="text")
     */
    protected $pass;

    public function getUserLogin()
    {
        return $this->login;
    }

    public function getUserPass()
    {
        return $this->pass;
    }

    public function getUserId()
    {
        return $this->id;
    }
}
