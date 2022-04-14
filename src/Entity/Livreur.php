<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Livreur
 *
 * @ORM\Table(name="livreur")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\LivreurRepository")
 */
class Livreur
{
    /**
     * @var int
     *
     * @ORM\Column(name="idLivreur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlivreur;

    /**
     * @var string
     * @Assert\NotBlank(message=" nom livreur doit etre non vide")
     * @ORM\Column(name="nomLivreur", type="string", length=20, nullable=false)
     * @Assert\Regex(
     *     pattern="/[a-zA-Z]/",
     *     message="Le nom doit etre une chaine de caractére"
     * )
     */
    private $nomlivreur;

    /**
     * @var int
     *
     * @ORM\Column(name="numtel", type="integer", nullable=false)
     * @Assert\NotBlank(message="Le numero de telephone doit etre non vide")
     * @Assert\Regex(
     *     pattern="/[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/",
     *     message="Le numero de telephone doit etre valide"
     * )
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="le prenom de livreur doit etre non vide")
     * @Assert\Regex(
     *     pattern="/[a-zA-Z]/",
     *     message="Le prenom doit etre une chaine de caractére"
     * )
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=false)
     * @Assert\Email(message="ce champs doit etre un email valide")
     * @Assert\NotBlank(message="l'email doit etre non vide")
     */
    private $email;

    public function getIdlivreur(): ?int
    {
        return $this->idlivreur;
    }

    public function getNomlivreur(): ?string
    {
        return $this->nomlivreur;
    }

    public function setNomlivreur(?string $nomlivreur): self
    {
        $this->nomlivreur = $nomlivreur;

        return $this;
    }

    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    public function setNumtel(?int $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }


}
