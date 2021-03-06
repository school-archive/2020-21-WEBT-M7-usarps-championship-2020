<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="round")
 */
class RpsRound
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected int $id;

    /**
     * @ORM\Column(type="string")
     */
    protected string $playerOne;
    /**
     * @ORM\Column(type="string")
     */
    protected string $playerOneSymbol;

    /**
     * @ORM\Column(type="string")
     */
    protected string $playerTwo;
    /**
     * @ORM\Column(type="string")
     */
    protected string $playerTwoSymbol;

    /**
     * RpsRound constructor.
     * @param string $playerOne
     * @param string $playerOneSymbol
     * @param string $playerTwo
     * @param string $playerTwoSymbol
     * @param string $datetime
     */
    public function __construct(string $playerOne, string $playerOneSymbol, string $playerTwo, string $playerTwoSymbol, string $datetime)
    {
        $this->playerOne = $playerOne;
        $this->playerOneSymbol = $playerOneSymbol;
        $this->playerTwo = $playerTwo;
        $this->playerTwoSymbol = $playerTwoSymbol;
        $this->datetime = $datetime;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string")
     */
    protected string $datetime;

    /**
     * @return mixed
     */
    public function getPlayerOne()
    {
        return $this->playerOne;
    }

    /**
     * @param mixed $playerOne
     */
    public function setPlayerOne($playerOne)
    {
        $this->playerOne = $playerOne;
    }

    /**
     * @return mixed
     */
    public function getPlayerOneSymbol()
    {
        return $this->playerOneSymbol;
    }

    /**
     * @param mixed $playerOneSymbol
     */
    public function setPlayerOneSymbol($playerOneSymbol)
    {
        $this->playerOneSymbol = $playerOneSymbol;
    }

    /**
     * @return mixed
     */
    public function getPlayerTwo()
    {
        return $this->playerTwo;
    }

    /**
     * @param mixed $playerTwo
     */
    public function setPlayerTwo($playerTwo)
    {
        $this->playerTwo = $playerTwo;
    }

    /**
     * @return mixed
     */
    public function getPlayerTwoSymbol()
    {
        return $this->playerTwoSymbol;
    }

    /**
     * @param mixed $playerTwoSymbol
     */
    public function setPlayerTwoSymbol($playerTwoSymbol)
    {
        $this->playerTwoSymbol = $playerTwoSymbol;
    }

    /**
     * @return mixed
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * @param mixed $datetime
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }


}