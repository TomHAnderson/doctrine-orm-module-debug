<?php

namespace Db\Entity;

/**
 * Artist
 */
class Artist
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $album;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->album = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Artist
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add album.
     *
     * @param \Db\Entity\Album $album
     *
     * @return Artist
     */
    public function addAlbum(\Db\Entity\Album $album)
    {
        $this->album[] = $album;

        return $this;
    }

    /**
     * Remove album.
     *
     * @param \Db\Entity\Album $album
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeAlbum(\Db\Entity\Album $album)
    {
        return $this->album->removeElement($album);
    }

    /**
     * Get album.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlbum()
    {
        return $this->album;
    }
}
