<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

function changeDateFormat($date, $date_format = 0)
{
    if ($date_format == 1) {
        return Carbon::parse($date)->format('d.m.Y');
    }
    return Carbon::parse($date)->format('d.m.Y - H:i');
}

/**
 * Encrypt Given String.
 * @param string $string The Passport Number/The Identity Number
 * @return int Crypted
 */
function kg_encrypt($string)
{
    $refStringArray = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    $refCryptArray = array("K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J");

    $refArray = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
    $stringArray = str_split($string);
    $newValues = array();
    $countLetters = 0;
    for ($i = 0; $i <= count($stringArray) - 1; $i++) {
        if (is_numeric($stringArray[$i])) {
            $currentIndex = array_search($stringArray[$i], $refArray);
            array_push($newValues, $currentIndex);
            unset($refArray[0]);
            array_push($refArray, $i - $countLetters);
            $refArray = array_values($refArray);
        } else {
            $currentIndex = array_search(strtoupper($stringArray[$i]), $refStringArray);
            $newLetter = $refCryptArray[$currentIndex];
            array_push($newValues, $newLetter);
            $countLetters++;
        }
    }
    $crypted = implode($newValues);
    return $crypted;
}


/**
 * Decrypt Given Crypted String.
 * @param string $cryptedText The Crypted String
 * @return int Decrypted
 */
function kg_decrypt($cryptedText)
{
    $refStringArray = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    $refCryptArray = array("K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J");
    $refArray = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
    $stringArray = str_split($cryptedText);
    $newValues = array();
    $countLetters = 0;
    for ($i = 0; $i <= count($stringArray) - 1; $i++) {
        if (is_numeric($stringArray[$i])) {
            $currentNumber = $refArray[$stringArray[$i]];
            array_push($newValues, $currentNumber);
            unset($refArray[0]);
            array_push($refArray, $i - $countLetters);
            $refArray = array_values($refArray);
        } else {
            $currentIndex = array_search(strtoupper($stringArray[$i]), $refCryptArray);
            $newLetter = $refStringArray[$currentIndex];
            array_push($newValues, $newLetter);
            $countLetters++;
        }
    }
    $decrypted = implode($newValues);
    return $decrypted;
}

function hasUserPermission($permissions = null)
{
    $user = Auth::user();

    if (is_array($permissions)) {
        return $user->hasAnyAccess($permissions);
    } elseif (is_string($permissions)) {
        return $user->hasAccess($permissions);
    } else {
        return 'Parameters should be Array or String';
    }
}

if (!function_exists('formatDate')) {
    function formatDate($dateString)
    {
        $months = [
            1 => 'Ocak',
            2 => 'Şubat',
            3 => 'Mart',
            4 => 'Nisan',
            5 => 'Mayıs',
            6 => 'Haziran',
            7 => 'Temmuz',
            8 => 'Ağustos',
            9 => 'Eylül',
            10 => 'Ekim',
            11 => 'Kasım',
            12 => 'Aralık'
        ];

        $dateArray = explode('-', explode('T', $dateString)[0]);
        $monthNumber = (int)$dateArray[1];
        $monthName = $months[$monthNumber];

        return $monthName . ' ' . $dateArray[0];
    }
}
