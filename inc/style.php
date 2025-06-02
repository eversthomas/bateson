<?php

require_once get_template_directory() . "/assets/scssphp/scss.inc.php"; // Pfad zum scssphp-Verzeichnis
use ScssPhp\ScssPhp\Compiler; // soll den Compiler nutzen
use ScssPhp\ScssPhp\OutputStyle; // soll ermöglichen, den Output Style zu nutzen

$scss = new Compiler(); // startet neuen Compiler
$scss->setImportPaths( get_template_directory() . '/styles/' ); // Pfad zum Verzeichnis deiner SCSS-Dateien
$scss->setOutputStyle(OutputStyle::COMPRESSED); // Setzt den Ausgabestil auf komprimiert

// hole die Haupt scss datei und kompiliere sie
$css = $scss->compile('@import "main.scss";');

// schreibe eine neue css datei
$css_path = get_template_directory() . '/styles/style.css';
file_put_contents( $css_path, $css );