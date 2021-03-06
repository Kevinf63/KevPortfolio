<?php

/**
 * News Manager German language file by Connie Müller-Gödecke
 */


$i18n = array(

# general
"PLUGIN_NAME"         =>  "News Manager",

# Fehler messages
"ERROR_ENV"           =>  "Der Ordner mit den Beiträgen und/oder die Konfigurationsdatei konnte nicht aufgerufen werden. Passen Sie bitte die Dateirechte an: <em>CHMOD 777</em> für den Order /data, /backups sowie die Unterordner und versuchen Sie es noch einmal.",
"ERROR_SAVE"          =>  "<b>Fehler:</b> Die Änderungen konnten nicht geschrieben werden. <em>CHMOD 777</em> Sie bitte die Rechte für den Ordner /data, /backups und seine Unterordner und versuchen Sie es noch einmal.",
"ERROR_DELETE"        =>  "<b>Fehler:</b> Der Beitrag kann nicht gelöscht werden. <em>CHMOD 777</em> Sie bitte die Rechte für den Ordner /data, /backups und seine Unterordner und versuchen Sie es noch einmal.",
"ERROR_RESTORE"       =>  "<b>Error:</b> Unable to restore the post. <em>CHMOD 777</em> the folders /data, /backups and their sub-folders and retry.",

# success messages
"SUCCESS_SAVE"        =>  "Die Änderungen wurden gespeichert.",
"SUCCESS_DELETE"      =>  "Der Beitrag wurde gelöscht.",
"SUCCESS_RESTORE"     =>  "Der Beitrag wurde gespeichert.",

# other messages
"UPDATE_HTACCESS"     =>  "<b>Achtung:</b> Sie sollten die Datei <a href=\"%s\">.htaccess</a> aktualisieren!",

# admin button (top-right)
"SETTINGS"            =>  "Einstellung",
"NEW_POST"            =>  "Neuen Beitrag erstellen",

# admin panel
"POST_TITLE"          =>  "Titel",
"DATE"                =>  "Datum",
"EDIT_POST"           =>  "Beitrag bearbeiten",
"VIEW_POST"           =>  "Beitrag ansehen",
"DELETE_POST"         =>  "Beitrag löschen",
"POSTS"               =>  "Beiträge",

# edit settings
"NM_SETTINGS"         =>  "News Manager Einstellungen",
"DOCUMENTATION"       =>  "Mehr Informationen zu den Einstellungen finden Sie in der <a href=\"%s\" target=\"_blank\">Dokumentation</a>.",
"PAGE_URL"            =>  "Seite, auf der die Beiträge angezeigt werden sollen",
"NO_PAGE_SELECTED"    =>  "Keine Seite ausgewählt",
"LANGUAGE"            =>  "Sprache auf der News-Seite",
"SHOW_POSTS_AS"       =>  "Beiträge in NEWS-Übersichten anzeigen als ",
"FULL_TEXT"           =>  "Voll-Text",
"EXCERPT"             =>  "Auszug",
"PRETTY_URLS"         =>  "Nutzen Sie Fancy URLs für Beiträge, Archive etc.",
"PRETTY_URLS_NOTE"    =>  "Wenn Fancy URLs aktiviert sind, sollten Sie die .htaccess - Datei nach dem Speichern dieser Einstellungen aktualisieren.",
"EXCERPT_LENGTH"      =>  "Länge des Auszuges (in Buchstaben)",
"POSTS_PER_PAGE"      =>  "Anzahl der Beiträge auf der News-Seite",
"RECENT_POSTS"        =>  "Anzahl der aktuellsten Beiträge (in der Sidebar)",
"ENABLE_ARCHIVES"     =>  "Archvierung aktivieren",
"BY_MONTH"            =>  "monatlich",
"BY_YEAR"             =>  "jährlich",
"READ_MORE_LINK"      =>  "einen \"Weiterlesen-Link\" im Auszug einfügen",
"ALWAYS"              =>  "immer",
"NOT_SINGLE"          =>  "nicht in der Einzel-Anzeige",
"GO_BACK_LINK"        =>  "\"Zurück\" - Link in der Einzel-Anzeige",
"TITLE_LINK"          =>  "Im Titel einen Link zum Beitrag einfügen",
"BROWSER_BACK"        =>  "Zuletzt besuchte Seite",
"MAIN_NEWS_PAGE"      =>  "News - Hauptseite",
"ENABLE_IMAGES"       =>  "Grafiken im Beitrag ermöglichen",
"IMAGE_LINKS"         =>  "Grafiken mit dem Beitrag verlinken",
"IMAGE_WIDTH"         =>  "Breite des Beitrags-Bilds (Pixel)",
"IMAGE_HEIGHT"        =>  "Höhe des Beitrags-Bilds (Pixel)",
"FULL"                =>  "Volle Größe",
"IMAGE_CROP"          =>  "Bilder proportional beschneiden",
"IMAGE_ALT"           =>  "Beitrags-Titel im Alternativ-Text des Beitrags-Bildes",
"CUSTOM_SETTINGS"     =>  "Beutzerdefinierte Einstellungen",

# edit post
"POST_OPTIONS"        =>  "Beitrags-Optionen",
"POST_SLUG"           =>  "Slug/URL",
"POST_TAGS"           =>  "Tags (kommagetrennt eingeben)",
"POST_DATE"           =>  "Datum der Veröffentlichung: (<i>yyyy-mm-dd</i>)",
"POST_TIME"           =>  "Zeit der Veröffentlichung: (<i>hh:mm</i>)",
"POST_PRIVATE"        =>  "Beitrag ist privat",
"POST_IMAGE"          =>  "Bild",
"LAST_SAVED"          =>  "Zuletzt gesichert",

# validation
"FIELD_IS_REQUIRED"   => "Dieses Feld muß ausgefüllt werden",
"ENTER_VALID_DATE"    => "Geben Sie bitte ein gültiges Datum ein / Leerlassen für aktuelles Datum",
"ENTER_VALID_TIME"    => "Geben Sie bitte eine gültige Zeit ein / Leerlassen für aktuelle Zeit",
"ENTER_VALUE_MIN"     => "Geben Sie bitte einen Wert größer oder gleich %d ein",

# htaccess
"HTACCESS_HELP"       =>  "Um Fancy URLs für Beiträge, Archive etc. zu aktivieren, ersetzen Sie den Inhalt der aktiven <code>.htaccess</code> -Datei mit dem unten angezeigten Inhalt.",
"GO_BACK_WHEN_DONE"   =>  "Klicken Sie dann auf den untenstehenden Button um zur vorigen Seite zurückzukehren.",

# save/cancel/delete
"SAVE_SETTINGS"       =>  "Einstellungen speichern",
"SAVE_POST"           =>  "Beitrag speichern",
"FINISHED"            =>  "Fertig",
"CANCEL"              =>  "Abbrechen",
"DELETE"              =>  "Löschen",
"OR"                  =>  "oder",

# front-end/site
"FOUND"               =>  "Diese Beiträge wurden gefunden:",
"NOT_FOUND"           =>  "Sorry, zu Ihrer Suche wurde nichts gefunden.",
"NOT_EXIST"           =>  "Es gibt den gewünschten Beitrag nicht.",
"NO_POSTS"            =>  "Es wurden noch keine Beiträge veröffentlicht.",
"PUBLISHED"           =>  "Veröffentlicht am",
"TAGS"                =>  "Tags",
"OLDER_POSTS"         =>  "&larr; Ältere Beiträge",
"NEWER_POSTS"         =>  "Neuere Beiträge &rarr;",
"SEARCH"              =>  "Suche",
"GO_BACK"             =>  "&lt;&lt; Zurück zur vorherigen Seite",
"ELLIPSIS"            =>  " [...] ",
"READ_MORE"           =>  "weiterlesen",
"AUTHOR"              =>  "Autor:",
"PREV_TEXT"           =>  "&lt;",
"PREV_TITLE"          =>  "Vorige Seite",
"NEXT_TEXT"           =>  "&gt;",
"NEXT_TITLE"          =>  "Nächste Seite",

# language localization
"LOCALE"              =>  "de_DE.utf8,de.utf8,de_DE.UTF-8,de.UTF-8,de_DE,de",

# date settings - list of available parameters: http://php.net/strftime
"DATE_FORMAT"         =>  "%e. %b %Y",
"MONTHLY_FORMAT"      =>  "%B %Y",
"YEARLY_FORMAT"       =>  "%Y"

);

?>