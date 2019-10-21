<?php
function min_dmg($str, $ene) //Минимальный урон
{
    $min_dmg = $str/7 + $ene/14;
    return round($min_dmg, 0);
}
function max_dmg($str, $ene) //Максимальный урон
{
    $max_dmg = $str/5 + $ene/10;
    return round($max_dmg, 0);
}
function aspd($agi) //Скорость атаки
{
    $aspd = $agi/10;
    return round($aspd, 0);
}
function def($agi) //Защита
{
    $def = $agi/7;
    return round($def, 0);
}
function hp($vit, $lvl) //Здоровье
{
    $hp = 50+($lvl+1)*1.5+$vit*2;
    return round($hp, 0);
}
function mana($lvl, $ene) //Мана
{
    $mana = 40+($lvl-1)+($ene-15)*1.5;
    return round($mana,0);
}
function mana_reg($lvl, $ene) //Регенерация маны
{
    $mana_reg = mana($lvl, $ene)/27.5;
    return round($mana_reg, 0);
}
function sd($str, $agi, $vit, $ene, $cmd, $lvl) //SD
{
    $sd = (($str+$agi+$vit+$ene+$cmd)*1.2)+(($agi/7)/2)+(($lvl*$lvl)/30);
    return round($sd, 0);
}
function ag($str, $agi, $vit, $ene, $cmd) //Выносливость
{
    $ag = $ene+0.15+$vit*0.1+$agi*0.2+$str*0.3+$cmd*0.3;
    return round($ag, 0);
}
function ag_reg($str, $agi, $vit, $ene, $cmd) //Регенерация выносливости
{
    $ag_reg = 1.9*ag($str, $agi, $vit, $ene, $cmd)/33;
    return round($ag_reg, 0);
}
function s_dmg($ene) //Скилл урон
{
    $s_dmg = 200+$ene/20;
    return round($s_dmg,0);
}
function crit_dmg($str, $cmd) //Критический урон
{
    $crit_dmg = $cmd/25+$str/30;
    return round($crit_dmg, 0);
}
function pvm_dr($agi) //PVM defence rate
{
    $pvm_dr = $agi/7;
    return round($pvm_dr,0);
}
function pvm_ar($str, $agi, $cmd, $lvl) //PVM attack rate
{
    $pvm_ar = $lvl*5+($agi*5)/2+$str/6+$cmd/1;
    return round($pvm_ar,0);
}
function pvp_dr($agi, $lvl) //PVP defence rate
{
    $pvp_dr = $lvl*2+$agi*0.5;
    return round($pvp_dr,0);
}
function pvp_ar($agi, $lvl) //PVP attack rate
{
    $pvp_ar = $lvl*3+$agi*4;
    return round($pvp_ar,0);
}
function fb_min_dmg($str, $ene) //Fireburst min damage
{
    $fb_min_dmg = 100+$str/25+$ene/50;
    return round($fb_min_dmg,0);
}
function fb_max_dmg($str, $ene) //Fireburst max damage
{
    $fb_max_dmg = 150+$str/25+$ene/50;
    return round($fb_max_dmg,0);
}
function g_size($cmd, $lvl) //Размер гильдии
{
    $g_size = $lvl/10+$cmd/10;
    return round($g_size,0);
}
function horse_b_dmg($str, $cmd, $lvl, $h_lvl) //Доп. урон лошадки
{
    $horse_b_dmg = 100+$h_lvl*10+$lvl*2.5+$str/10+$cmd/5;
    return round($horse_b_dmg,0);
}
function raven_aspd($cmd, $r_lvl) //Скорость атаки вороны
{
    $raven_aspd = 20+($r_lvl*4)/5+$cmd/50;
    return round($raven_aspd,0);
}
function raven_min_dmg($cmd, $r_lvl) //Минимальный урон вороны
{
    $raven_min_dmg = 180+$r_lvl*15+$cmd/8;
    return round($raven_min_dmg,0);
}
function raven_max_dmg($cmd, $r_lvl) //Максимальный урон вороны
{
    $raven_max_dmg = 200+$r_lvl*15+$cmd/4;
    return round($raven_max_dmg,0);
}
?>