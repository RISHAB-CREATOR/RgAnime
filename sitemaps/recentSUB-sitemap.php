<?php
include('../_config.php');

header('Content-type: application/xml');

echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
echo "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$api/recent-release?type=1&page=1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
$json = curl_exec($ch);
$json = json_decode($json, true);

foreach((array) $json as $recentRelease) 
{  
    echo "<url>";
    echo "<loc>https://{$_SERVER['SERVER_NAME']}/watch/".$recentRelease['episodeId']."</loc>";
    echo "<changefreq>daily</changefreq>";
    echo "<priority>0.8000</priority>";
    echo "</url>";
}
curl_close($ch);
echo "</urlset>";

?>