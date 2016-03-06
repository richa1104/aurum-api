<?php

namespace Aurum\CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Aurum\CrmBundle\Entity\User
 * Uses ORM
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="UserRepository")
 */
class User
{
    /**
 * @ORM\Id
 * @ORM\Column(type="integer")
 * @ORM\GeneratedValue(strategy="AUTO")
 */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="text", nullable=false)
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="text", nullable=false)
     * @Assert\NotBlank()
     */
    private $password;

    /**
     * @var string $role
     *
     * @ORM\Column(name="role", type="text", nullable=false)
     * @Assert\NotBlank()
     */
    private $role;


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
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Serialise
     *
     * @return array
     */
    public function serialise()
    {
        $data = array(
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
            'role' => $this->getRole(),
        );
        return json_encode($data);
    }
}
