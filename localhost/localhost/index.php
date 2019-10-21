<html>
<head>
    <title>
Калькулятор персонажа
    </title>
    <link rel="icon" type="image/png" href="images/logo.jpg"/>
</head>
<body>
<?php
include "./functions.php";
$str = 32000; // Strength
$ene = 32000; // Energy
$agi = 32000; // Agility
$vit = 32000; // Vitality
$cmd = 32000; // Command
$lvl = 400;   // Level
$h_lvl = 50; // Horse lvl
$r_lvl = 50; // Raven lvl
echo 'Physical damage: '.min_dmg($str, $ene).' - '.max_dmg($str, $ene).'<br>';
echo 'Fireburst bonus damage: '.fb_min_dmg($str, $ene).' - '.fb_max_dmg($str, $ene).'<br>';
echo 'Critical dmg: '.crit_dmg($str, $cmd).'<br>';
echo 'Skill dmg : '.s_dmg($ene).' %'.'<br>';
echo 'PVP attack rate: '.pvp_ar($agi, $lvl).'<br>';
echo 'PVM attack rate: '.pvm_ar($str, $agi, $cmd, $lvl).'<br>';
echo 'SD: '.sd($str, $agi, $vit, $ene, $cmd, $lvl).'<br>';
echo 'HP: '.hp($lvl, $vit).'<br>';
echo 'MP: '.mana($lvl, $ene).' (+'.mana_reg($lvl, $ene).')'.'<br>';
echo 'AG: '.ag($str, $agi, $vit, $ene, $cmd).' (+'.ag_reg($str, $agi, $vit, $ene, $cmd).')'.'<br>';
echo 'Defence: '.def($agi).'<br>';
echo 'Attack speed: '.aspd($agi).'<br>';
echo 'PVM defence rate: '.pvm_dr($agi).'<br>';
echo 'PVP defence rate: '.pvp_dr($agi, $lvl).'<br>';
echo 'Guild size: '.g_size($cmd, $lvl).'<br>';
echo 'Horse bonus damage: '.horse_b_dmg($str, $cmd, $lvl, $h_lvl).'<br>';
echo 'Raven damage: '.raven_min_dmg($cmd, $r_lvl).' - '.raven_max_dmg($cmd, $r_lvl).'<br>';
echo 'Raven attack speed: '.raven_aspd($cmd, $r_lvl).'<br>';
?>
</body>
</html>
