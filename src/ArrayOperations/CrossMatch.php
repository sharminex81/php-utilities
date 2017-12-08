<?php
/**
 * Write something about the purpose of this file
 *
 * @author Sharmin Shanta <shantaex81@gmail.com>
 * @url https://www.sharminshanta.com
 */

namespace SharminShanta\PHPUtilities\ArrayOperations;

/**
 * Class CrossMatch
 * @package SharminShanta\PHPUtilities\ArrayOperations
 */
class CrossMatch
{
    /**
     * @param $data
     * @param $required
     * @return bool
     */
    public static function requiredFieldCheck($data, $required)
    {
        foreach ($required as $key => $value) {
            if (!isset($data[$key])/* && $data[$key] === $value */) {
                return false;
            }
            if (is_array($data[$key]) && false === self::requiredFieldCheck($data[$key], $value)) {
                return false;
            }
        }
        return true;
    }
}