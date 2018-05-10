<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * French strings for videofile.
 *
 * @package   mod_videofile
 * @copyright 2013 Jonas Nockert <jonasnockert@gmail.com>
 * @author    Renaat Debleu (www.ewallah.net)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['modulename'] = 'Fichier vidéo';
$string['modulenameplural'] = 'Fichiers vidéo';
$string['modulename_help'] = 'Utiliser le module fichier vidéo pour ajouter des vidéos htm15 avec repli flash (en utilisant video.js). Ce module permet également de disposer de sous-titres en plusieurs langues.';

$string['videofile:addinstance'] = 'Ajouter un nouveau fichier vidéo.';
$string['videofile:view'] = 'Voir fichier vidéo.';

$string['pluginadministration'] = 'Administration fichier vidéo';
$string['pluginname'] = 'Fichier vidéo';

$string['videofile_defaults_heading'] = 'Valeurs par défaut pour les paramétrages des fichiers vidéo.';
$string['videofile_defaults_text'] = 'Les valeurs que vous réglez ici définissent les valeurs par défaut qui sont utilisées dans le formulaire des paramétrages des fichiers vidéo  lorsque vous créez un nouveau fichier vidéo.';
$string['width_explain'] = 'Précise la largeur par défaut du lecteur vidéo.';
$string['height_explain'] = 'Précise la hauteur par défaut du lecteur vidéo.';
$string['responsive_explain'] = 'Précise si le mode réactif doit être paramétré par défaut ou non.';
$string['limitdimensions_explain'] = 'Précise si la largeur et la hauteur doivent être utilisées comme taille maximale pendant le mode réactif.';

$string['filearea_captions'] = 'Sous-titres';
$string['filearea_posters'] = 'Posters';
$string['filearea_videos'] = 'Vidéos';

$string['video_fieldset'] = 'Vidéo';

$string['width'] = 'Largeur';
$string['width_help'] = 'Saisissez ici la largeur de la vidéo (p. ex. 800 pour une largeur de 800 pixels).';
$string['height'] = 'Hauteur';
$string['height_help'] = 'Saisissez ici la hauteur de la vidéo (p. ex. 500 pour une hauteur de 500 pixels).';
$string['responsive'] = 'Réactif ?';
$string['responsive_help'] = "Vérifiez que la vidéo est automatiquement redimensionnée à la taille de fenêtre du navigateur.\n\nUtilisez les champs hauteur et largeur pour définir les proportion de la vidéo (p. ex. 16/9 ou 800/450).";
$string['responsive_label'] = '';
$string['limitdimensions'] = 'Taille limite en mode réactif ?';

$string['videos'] = 'Vidéos';
$string['videos_help'] = "Ajoutez ici le fichier vidéo.\n\nVous pouvez ajouter des formats alternatifs afin d’être sûr qu’ils peuvent être lus indépendamment du navigateur qui est utilisé (habituellement .mp4, .ogv et .webm).";
$string['posters'] = 'Image poster';
$string['posters_help'] = 'Ajoutez ici une image qui s’affichera avant que la lecture de la vidéo ne commence.';
$string['captions'] = 'Sous-titres';
$string['captions_help'] = "Ajoutez ici des transcriptions du dialogue au format  WebVTT.\n\nVous pouvez ajouter plusieurs fichiers afin de fournir des sous-titres multilingues. Les noms des fichiers, sans les extensions, seront utilisés pour les titres des options de sous-titres de vidéo. Si les fichiers sont nommés conformément à la norme ISO 6392 (p. ex. eng.vtt et swe.vtt), les options seront affichées en tant que noms entiers dans la langue correspondante conformément aux préférences de langue de l’utilisateur (p. ex. anglais et suédois, dans l'hypothèse où la langue préférée de l’utilisateur est paramétré sur l’anglais).";

$string['err_positive'] = 'Vous devez saisir ici un nombre positif.';

$string['video_not_playing'] = 'La vidéo n’est pas lue ? Essayez {$a}.';

