<?php

declare(strict_types=1);

$title = 'Bilar till salu';
$siteTitle = 'Cars.com';
$year = date('Y');
$footerView = $siteTitle . " " . $year;

$cars = [
    ['make' => 'Ford', 'model' => 'F150', 'year' => 2016, 'kw' => 273, 'miles' => '9000', 'image' => 'images/ford-f150.jpeg', 'price' => '473 750', 'url' => 'https://www.blocket.se/annons/jonkoping/ford_f150_lariat_sport_lagmil_crew_cab/86557771'],
    ['make' => 'Volkswagen', 'model' => 'Tiguan', 'year' => 2020, 'kw' => 142, 'miles' => '8000', 'image' => 'images/vw-tiguan.jpeg', 'price' => '359 900', 'url' => 'https://www.blocket.se/annons/skaraborg/volkswagen_tiguan_2_0_tdi_scr_4motion_r_line_dsg_d_varm_190h/98135153?fbclid=IwAR3w4SkcSa6Qr3F2Yg5eIy0XKx6A2vfmUnkMtNHtDzxZf03wiGkqGU5RnP4'],
    ['make' => 'Volkswagen', 'model' => 'Polo', 'year' => 2018, 'kw' => 71, 'miles' => '11000', 'image' => 'images/vw-polo.jpeg', 'price' => '114 900', 'url' => 'https://www.blocket.se/annons/stockholm/volkswagen_polo_1_0_tsi_95hk_vhjul/97906340'],
    ['make' => 'Ford', 'model' => 'Focus', 'year' => 2005, 'kw' => 100, 'miles' => '15000', 'image' => 'images/ford-focus.jpeg', 'price' => '25 900', 'url' => 'https://www.blocket.se/annons/kalmar/ford_focus_kombi_1_8_flexifuel_trend_125hk/98144546'],
    ['make' => 'Volvo', 'model' => 'V70', 'year' => 2008, 'kw' => 138, 'miles' => '18000', 'image' => 'images/volvo-v70.jpeg', 'price' => '69 900', 'url' => 'https://www.blocket.se/annons/stockholm/volvo_v70_d5_geartronic_summum_185hk/98206917'],
    ['make' => 'Ford', 'model' => 'Fiesta', 'year' => 2010, 'kw' => 53, 'miles' => '12000', 'image' => 'images/ford-fiesta.jpeg', 'price' => '49 900', 'url' => 'https://www.blocket.se/annons/goteborg/ford_fiesta_5_dorrar_1_4_tdci_70hk0_ranta/98025037'],
    ['make' => 'Ford', 'model' => 'Mondeo', 'year' => 2009, 'kw' => 109, 'miles' => '23000', 'image' => 'images/ford-mondeo.jpeg', 'price' => '54 900', 'url' => 'https://www.blocket.se/annons/skane/ford_mondeo_kombi_2_0_flexifuel_145hk_nyservad/98128142'],
    ['make' => 'Audi', 'model' => 'A4', 'year' => 2018, 'kw' => 127, 'miles' => '6000', 'image' => 'images/audi-a4.jpeg', 'price' => '299 000', 'url' => 'https://www.blocket.se/annons/stockholm/audi_a4_40_tfsi_170hk_g_tron_cng_proline_dragkrok___vinterhj/98205816'],
];
