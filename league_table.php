<?php

class LeagueTable
{
    private $standing = array();

    public function LeagueTable(array $teams)
    {
        $standing = array();
        $i = 0;
        foreach ($teams as $key => $value) {
            $standing[$i]['club_name'] = $value;
            $standing[$i]['points'] = 0;
            $standing[$i]['position'] = null;
            $i++;
        }
        $this->standing = $standing;
    }

    public function recordGame(string $home, string $away, string $score)
    {
        $score = explode(":", $score);
        $point_away = $point_home = 0;
        if ((int) $score[0] > (int) $score[1]) {
            $point_home = 3;
        } elseif ((int) $score[0] < (int) $score[1]) {
            $point_away = 3;
        } elseif ((int) $score[0] == (int) $score[1]) {
            $point_away = $point_home = 1;
        }

        $i = 0;
        foreach ($this->standing as $key => $value) {
            if ($value['club_name'] == $home) {
                $this->standing[$i]['points'] += $point_home;
            } elseif ($value['club_name'] == $away) {
                $this->standing[$i]['points'] += $point_away;
            }
            $i++;
        }
    }

    public function all()
    {
        var_dump($this->standing);
    }

    public function getRank(int $position = 1)
    {
    }
}

$premiere_league = new LeagueTable(['Arsenal','Chelsea','Liverpool']);

$premiere_league->recordGame('Arsenal', 'Liverpool', '2:0');
$premiere_league->recordGame('Chelsea', 'Liverpool', '1:1');
$premiere_league->recordGame('Chelsea', 'Liverpool', '0:1');
$premiere_league->all();
