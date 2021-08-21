<?php

namespace App\Http\Controllers;
class GameController extends Controller
{
    function __construct()
    {
        $this->cardPrice = ['0' => 11, '1' => 2, '2' => 3, '3' => 4, '4' => 5, '5' => 6, '6' => 7, '7' => 8, '8' => 9, '9' => 10, '10' => 10, '11' => 10, '12' => 10, '13' => 11, '14' => 2, '15' => 3, '16' => 4, '17' => 5, '18' => 6, '19' => 7, '20' => 8, '21' => 9, '22' => 10, '23' => 10, '24' => 10, '25' => 10, '26' => 11, '27' => 2, '28' => 3, '29' => 4, '30' => 5, '31' => 6, '32' => 7, '33' => 8, '34' => 9, '35' => 10, '36' => 10, '37' => 10, '38' => 10, '39' => 11, '40' => 2, '41' => 3, '42' => 4, '43' => 5, '44' => 6, '45' => 7, '46' => 8, '47' => 9, '48' => 10, '49' => 10, '50' => 10, '51' => 10];
        $this->cards = range(52, 0);
        shuffle($this->cards);
    }

    public function createGame(): array
    {
        $dealer = createPlayer();
        $player = createPlayer();
        return [$dealer, $player];
    }

    public function takeCart(array $player): array
    {
        $card = array_pop($this->cards);
        $player['cards'] = array_push($card);
        $player['score'] = getScore($player['cards']);
        return $player;
    }

    public function stopGame()
    {
    }

    private function createPlayer(): array
    {
        $player = ['cards' => [array_pop($this->cards), array_pop($this->cards)], 'score' => 0];
        $player['score'] = $this->getScore($player['cards']);
        return $player;
    }

    private function getScore(array $cards): int
    {
        $score = 0;
        foreach ($cards as $card) {
            $score += $this->cardPrice[$card];
        }
        return $score;
    }
}
