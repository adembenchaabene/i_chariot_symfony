<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="id_article", columns={"id_article"}), @ORM\Index(name="auteur_c", columns={"auteur_c"})})
 * @ORM\Entity
 *@ORM\Entity(repositoryClass="App\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCommentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_c", type="text", length=65535, nullable=false)
     * @Assert\NotBlank(message="description  doit etre non vide")
     * @Assert\Length(
     *      min = 7,
     *      max = 100,
     *      minMessage = "doit etre >=7 ",
     *      maxMessage = "doit etre <=100" )
     */
    private $contenuC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepub", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $datepub = 'current_timestamp()';

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_article", referencedColumnName="idArticle")
     * })
     */
    private $idArticle;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auteur_c", referencedColumnName="idUser")
     * })
     */
    private $auteurC;

    public function getIdcommentaire(): ?int
    {
        return $this->idcommentaire;
    }

    public function getContenuC(): ?string
    {
        return $this->contenuC;
    }

    public function setContenuC(string $contenuC): self
    {
        $this->contenuC = $contenuC;

        return $this;
    }

    public function getDatepub(): ?\DateTimeInterface
    {
        return $this->datepub;
    }

    public function setDatepub(\DateTimeInterface $datepub): self
    {
        $this->datepub = $datepub;

        return $this;
    }

    public function getIdArticle(): ?Article
    {
        return $this->idArticle;
    }

    public function setIdArticle(?Article $idArticle): self
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    public function getAuteurC(): ?User
    {
        return $this->auteurC;
    }

    public function setAuteurC(?User $auteurC): self
    {
        $this->auteurC = $auteurC;

        return $this;
    }


}
