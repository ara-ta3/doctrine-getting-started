<?php

/**
* @Entity
* @InheritanceType("JOINED")
* @DiscriminatorColumn(name="discr", type="string")
* @DiscriminatorMap({"person" = "Person", "employee" = "Employee"}) */
class Person
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string", length=50)
     */
    protected $name;
    // ...
}

/**
 * @Entity
 */
class Employee extends Person
{
    /**
     * @Column(type="string", length=50)
     */
    private $department;

    // ...
}
