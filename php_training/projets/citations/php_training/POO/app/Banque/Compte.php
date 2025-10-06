<?php

namespace App\Banque;
use App\Client\Compte as CompteClient;
use InvalidArgumentException;
use LogicException;

/**
 * Représente un compte bancaire
 */
class Compte
{
    /**
     * Titulaire
     * @var CompteClient
     */
    protected CompteClient $titulaire;

    /**
     * Solde du compte
     * @var int
     */
    protected int $solde;

    public function __construct( CompteClient $titulaire, int $solde)
    {
        $this->setSolde($solde);
        $this->setTitulaire($titulaire);
    }

    /**
     * Définie le solde
     * @return int
     */
    public function getSolde(): int
    {
        return $this->solde;
    }

    /**
     * Définie le titulaire
     * @return CompteClient
     */
    public function getTitulaire(): CompteClient
    {
        return $this->titulaire;
    }

    /**
     *  Modifie le solde
     * @param int $solde solde du compte
     * @return Compte
     */
    public function setSolde(int $solde): self
    {
        $this->solde = $solde;
        return $this;
    }

    /**
     * Modifie le titulaire
     * @param \App\Client\Compte $titulaire
     * @return Compte
     */
    public function setTitulaire(CompteClient $titulaire): self
    {
        $this->titulaire = $titulaire;
        return $this;
    }

     public function deposer(int $montant): self
    {
        if ($montant <= 0) {
            throw new LogicException('Vous devez déposer un montant positif');
        }
        $this->setSolde($this->solde += $montant);
        return $this;
    }
}