<?php

namespace Stk\ArchiveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="Stk\ArchiveBundle\Repository\VideoRepository")
 */
class Video
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="iframe", type="text")
     */
    private $iframe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="postedOn", type="datetime")
     */
    private $postedOn;

    /**
     * Video constructor.
     * @param \DateTime $postedOn
     */
    public function __construct()
    {
        $this->postedOn = new \DateTime;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Video
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set iframe
     *
     * @param string $iframe
     *
     * @return Video
     */
    public function setIframe($iframe)
    {
        $this->iframe = $iframe;

        return $this;
    }

    /**
     * Get iframe
     *
     * @return string
     */
    public function getIframe()
    {
        return $this->iframe;
    }

    /**
     * Set postedOn
     *
     * @param \DateTime $postedOn
     *
     * @return Video
     */
    public function setPostedOn($postedOn)
    {
        $this->postedOn = $postedOn;

        return $this;
    }

    /**
     * Get postedOn
     *
     * @return \DateTime
     */
    public function getPostedOn()
    {
        return $this->postedOn;
    }
}

