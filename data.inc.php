<?php
//Brandon Ho


$links = [
   [ "url"=>"index.php", "label"=>"Home"],
   [ "url"=>"about.php", "label"=>"About"],
   [ "url"=>"works.php", "label"=>"Art Works"],
   [ "url"=>"artist.php", "label"=>"Artists"]

];

$genres = [
   'Abstract',
   'Baroque',
   'Gothic',
   'Renaissance'
];

$subjects = [
   'Animals',
   'Landscape',
   'People'
];  

/**
 * Convert a string array to HTML <option> elements.
 *
 * @param array $items Array of strings to convert
 * @return string HTML markup with <option> tags
 */
function array_to_options(array $items): string {
   $html = "";
   foreach ($items as $item) {
      $html .= "<option value=\"{$item}\">{$item}</option>\n";
   }
   return $html;
}
 
?>