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
     * @ORM\OneToOne(targetEntity="Attachment", mappedBy="person")
     */
    private $attachment;
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
     * @ORM\OneToOne(targetEntity="Person")
     * @JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $person;
}

/** @Entity */
class Product {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * One Product has One Shipping.
     * @OneToOne(targetEntity="Shipping")
     * @JoinColumn(name="shipping_id", referencedColumnName="id")
     */
    private $shipping;
}

/** @Entity */
class Shipping {
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;
}
