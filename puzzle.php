<?php

class WordSearchPuzzle
{
    private $board = [
        ["J", "Y", "B", "Y", "Q", "V", "W", "G", "B", "Q", "F", "D", "D", "U", "L", "H", "M"],
        ["D", "G", "O", "C", "G", "V", "N", "K", "Z", "C", "R", "U", "B", "A", "O", "I", "K"],
        ["U", "G", "E", "U", "H", "E", "W", "J", "W", "T", "O", "Y", "N", "U", "M", "N", "V"],
        ["N", "H", "U", "R", "D", "B", "R", "J", "I", "V", "U", "I", "T", "P", "G", "H", "W"],
        ["I", "H", "H", "O", "O", "I", "E", "M", "Z", "W", "T", "J", "M", "D", "T", "S", "V"],
        ["T", "M", "V", "O", "I", "P", "O", "U", "A", "N", "B", "E", "D", "X", "T", "W", "X"],
        ["E", "Z", "H", "B", "B", "Q", "A", "U", "E", "N", "W", "C", "W", "C", "B", "O", "N"],
        ["D", "L", "U", "S", "A", "D", "F", "G", "N", "R", "Y", "Y", "G", "W", "W", "S", "R"],
        ["K", "H", "Y", "I", "I", "R", "R", "M", "N", "I", "P", "H", "A", "B", "R", "W", "P"],
        ["I", "T", "Q", "M", "S", "A", "H", "I", "M", "I", "R", "U", "N", "Z", "Y", "H", "S"],
        ["N", "E", "T", "H", "E", "R", "L", "A", "N", "D", "S", "H", "U", "N", "K", "E", "Z"],
        ["G", "F", "K", "L", "N", "L", "A", "G", "U", "T", "R", "O", "P", "B", "I", "U", "E"],
        ["D", "C", "P", "G", "O", "G", "G", "A", "R", "U", "P", "U", "E", "O", "P", "K", "M"],
        ["O", "J", "B", "T", "D", "N", "T", "A", "X", "O", "B", "X", "Z", "M", "J", "C", "C"],
        ["M", "J", "F", "P", "N", "S", "L", "L", "X", "B", "V", "C", "Y", "W", "T", "K", "E"],
        ["R", "X", "I", "S", "I", "I", "Z", "W", "A", "M", "K", "S", "L", "N", "H", "V", "S"],
        ["A", "O", "J", "O", "A", "E", "G", "T", "X", "M", "C", "Z", "P", "C", "I", "O", "U"],
    ];

    public function find($word)
    {
        echo "<pre>";
        $char = (str_split($word));
        $position = [];
        $i = 0;
        $this->goToPuzzle($char[0], $char[1], $char[2]);
    }

    private function build($position)
    {
    }

    private function goToPuzzle($char_1, $char_2, $char_3)
    {
        $position = [];
        $baris = 0;
        foreach ($this->board as $k1 => $v1) {
            $kolom = 0;
            foreach ($v1 as $k2 => $value) {
                $kanan = isset($v1[$k2+1]);
                $kiri = isset($v1[$k2-1]);
                if ($value == $char_1) {
                }
                $kolom++;
            }
            $baris++;
        }

        return $position;
    }
}

$puzzle = new WordSearchPuzzle();
$puzzle->find('GERMANY');
