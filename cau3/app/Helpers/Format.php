<?php
namespace App\Helpers;
/**
 * Format Class
 */
class Format
{
    public static function formatDate($date)
    {
        $timestamp = strtotime($date); // Chuyển đổi chuỗi thành timestamp
        $dateTime = date('Y-m-d H:i:s', $timestamp);
        return $dateTime;
    }

    public function textShorten($text, $limit = 400)
    {
        $text = $text . " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . "...";
        return $text;
    }
    public static function currency($number)
    {
      
$formattedSubtotal = number_format($number, 0, '', '.') . ' ₫';

echo $formattedSubtotal;
    }

    public function validation($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function title()
    {
        $path = $_SERVER['SCRIPT_FILENAME'];
        $title = basename($path, '.php');
        //$title = str_replace('_', ' ', $title);
        if ($title == 'index') {
            $title = 'home';
        } elseif ($title == 'contact') {
            $title = 'contact';
        }
        return $title = ucfirst($title);
    }
}
