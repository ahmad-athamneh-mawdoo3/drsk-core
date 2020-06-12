<?php
namespace mawdoo3\drsk\core;


class Auth  
{
    public static function isAuthed($user = null)
    {
        return isset($user) && !is_null($user) ? "$user logged in" : 'not logged';
    }
}
