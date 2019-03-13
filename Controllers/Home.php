<?php

class Home extends Controller {

    public static function ShowSongs() {
        $data = self::query("SELECT * FROM artists");
    }

}
