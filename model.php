<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Person
{
    public function __construct() {
        $this->attachments = new ArrayCollection();
    }

    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string", length=50)
     */
    private $name;
    // ...
    /**
     * @ORM\OneToMany(targetEntity="Attachment", mappedBy="person")
     */
    private $attachments;
}

/**
 * @Entity
 */
class Attachment {

    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="Person", inversedBy="attachments")
     * @JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $person;
}
