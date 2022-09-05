<?php
class fe_replacer {
    public static function replace_content(rex_extension_point $ep) {
        $search_replace = json_decode(rex_config::get('fe_replacer','searchreplace'));
        $html = $ep->getSubject();
        foreach ($search_replace as $srp) {
            $html = preg_replace('/'.$srp[0].'/',$srp[1],$html);
        }
        $ep->setSubject($html);

    }
} 