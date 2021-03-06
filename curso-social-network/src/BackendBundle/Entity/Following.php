<?php

namespace BackendBundle\Entity;

/**
 * Following
 */
class Following
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \BackendBundle\Entity\Users
     */
    private $followed;

    /**
     * @var \BackendBundle\Entity\User
     */
    private $user;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set followed
     *
     * @param \BackendBundle\Entity\Users $followed
     *
     * @return Following
     */
    public function setFollowed(\BackendBundle\Entity\Users $followed = null)
    {
        $this->followed = $followed;

        return $this;
    }

    /**
     * Get followed
     *
     * @return \BackendBundle\Entity\Users
     */
    public function getFollowed()
    {
        return $this->followed;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\User $user
     *
     * @return Following
     */
    public function setUser(\BackendBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BackendBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}

