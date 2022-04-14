<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Adresse
 *
 * @ORM\Table(name="adresse", indexes={@ORM\Index(name="fk_user_adresse", columns={"iduser"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\AdresseRepository")
 */
class Adresse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_adresse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="la ville  doit etre non vide")
     * @Assert\Regex(
     *     pattern="/[a-zA-Z]/",
     *     message="La ville doit etre une chaine de caractére"
     * )
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="rue  doit etre non vide")
     * @Assert\Regex(
     *     pattern="/[a-zA-Z]/",
     *     message="rue doit etre une chaine de caractére"
     * )
     */
    private $rue;

    /**
     * @var int
     *
     * @ORM\Column(name="numMaison", type="integer", nullable=false)
     * @Assert\NotBlank(message="Le numero de maison doit etre non vide")
     * @Assert\Regex(
     *     pattern="/[0-9]$/",
     *     message="Le numero de telephone doit etre valide"
     * )
     */
    private $nummaison;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="idUser")
     * })
     */
    private $iduser;

    public function getIdAdresse(): ?int
    {
        return $this->idAdresse;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(?string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getNummaison(): ?int
    {
        return $this->nummaison;
    }

    public function setNummaison(?int $nummaison): self
    {
        $this->nummaison = $nummaison;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }


}
