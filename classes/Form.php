<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26.08.2019
 * Time: 12:43
 */

namespace classes;

class Form
{
    public function input($massive) {
        echo '<input '.self::masToString($massive).'>';
    }

    public function password($massive) {
        echo '<input type="password" '.self::masToString($massive).'>';
    }

    public function submit($massive) {
        echo '<input type="submit" '.self::masToString($massive).'>';
    }

    public function textarea($massive) {
        if(isset($massive['value'])) {
            $textareaValue = $massive['value'];
            unset($massive['value']);
        }
        echo "<textarea ".self::masToString($massive).">".(isset($textareaValue) === true ? $textareaValue : '')."</textarea>";
    }

    public function open($massive) {
        echo '<form '.self::masToString($massive).'>';
    }

    public function close() {
        echo '</form>';
    }

    private function masToString($massive) {
        $formAttr = '';
        foreach ($massive as $attr => $value) {
            $formAttr .= "{$attr}='{$value}' ";
        }
        return $formAttr;
    }
}