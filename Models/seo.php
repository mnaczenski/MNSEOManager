<?php

namespace MNSEOManager\Models;

use Shopware\Components\Model\ModelEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="s_core_rewrite_urls")
 */
class seo extends ModelEntity
{
    /**
     * @var integer $id
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $org_path
     *
     * @ORM\Column()
     */
    private $org_path;

    /**
     * @var string $path
     *
     * @ORM\Column()
     */
    private $path;

    /**
     * @var integer $main
     *
     * @ORM\Column(type="boolean")
     */
    private $main = false;

    /**
     * @var integer $subshopID
     *
     * @ORM\Column()
     */
    private $subshopID;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $org_path
     */
    public function setOrg_Path($org_path)
    {
        $this->org_path = $org_path;
    }

    /**
     * @return string
     */
    public function getOrg_Path()
    {
        return $this->org_path;
    }

    /**
     * @param string $path
     */
    public function setpath($path)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getpath()
    {
        return $this->path;
    }

    /**
     * @param int $main
     */
    public function setMain($main)
    {
        $this->main = $main;
    }

    /**
     * @return int
     */
    public function getMain()
    {
        return $this->main;
    }

    /**
     * @param int $subshopID
     */
    public function setSubshopID($subshopID)
    {
        $this->subshopID = $subshopID;
    }

    /**
     * @return int
     */
    public function getSubshopID()
    {
        return $this->subshopID;
    }


}

?>