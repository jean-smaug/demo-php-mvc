<?php

namespace App\Core;

class Session
{
    const FLASH_MESSAGES_KEY = "flash_messages";

    public function __construct()
    {
        session_start();

        $_SESSION[self::FLASH_MESSAGES_KEY] = [];
    }

    public function get(string $key)
    {
        return $_SESSION[$key] ?? null;
    }

    public function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function remove($key)
    {
        unset($_SESSION[$key]);
    }

    public function addFlashMessage($type, $value) {
        array_push($_SESSION[self::FLASH_MESSAGES_KEY], ["type" => $type, "value" => $value]);
    }

    public function getFlashMessages() {
        return $_SESSION[self::FLASH_MESSAGES_KEY];
    }

    public function clearFlashMessages() {
        unset($_SESSION[self::FLASH_MESSAGES_KEY]);
    }
}
