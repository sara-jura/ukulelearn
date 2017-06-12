<?php
/**
 * Class User
 * @package App\Model\Entities
 * @author Ondra Votava <ja@ondravotava.cz>
 */
namespace App\Model;
use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Kdyby\Doctrine\Entities\BaseEntity;
use Kdyby\Doctrine\Entities\Attributes\Identifier;
use Nette\Security\Passwords;

/**
 * Class User
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseEntity
{
    use Identifier;
    /**
     * username uzivatele
     * @ORM\Column(type="string", nullable=false)
     * @var string
     */
    protected $username;
    /**
     * heslo uzivatele
     * @ORM\Column(type="string", nullable=false, unique=true)
     * @var string
     */
    private $password;
    /**
     * role uzivatele
     * @ORM\Column(type="string", nullable=false)
     * @var string
     */
    private $role;
    /**
     * seznam roli kterych muze uzivatel nabyvat
     * @var array roleList
     */
    static private $roleList = array(
        'admin' => 'admin',
        'moderator' => 'moderator',
        'user' => 'user');

    /**
     * konstruktor tridy User
     * @param string $username
     * @param string $password
     * @param string $role
     */
    function __construct($username, $password, $role = "quest")
    {
        $this->username = $username;
        $this->setPassword($password);
        $this->setRole($role);
    }

    /**
     * role setter
     * @param $role
     */
    public function setRole($role)
    {
        if(in_array($role, self::$roleList))
            $this->role = $role;
    }

    /**
     * role getter
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * vraci pole uzivatelskych roli
     * @return array $roleList
     */
    public static function getRoleList()
    {
        return self::$roleList;
    }

    /**
     * metoda pro ziskani uzivatelskeho jmena
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * metoda pro nastaveni uzivatelskeho jmena
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
    /**
     * password setter
     * @param $password
     */
    public function setPassword($password)
    {
        $this->password = Passwords::hash($password);
    }
    /**
     * password getter
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}