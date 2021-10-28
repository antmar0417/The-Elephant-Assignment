<?php

declare(strict_types=1);

$title = 'Bilar till salu';
$siteTitle = 'Cars.com';
$year = date('Y');
$footerView = $siteTitle . " " . $year;

$cars = [
    ['make' => 'Ford', 'model' => 'F150', 'year' => 2016, 'kw' => 273, 'miles' => '9000', 'image' => 'images/Ford F150.jpeg', 'price' => '473 750', 'url' => 'https://www.blocket.se/annons/jonkoping/ford_f150_lariat_sport_lagmil_crew_cab/86557771'],
    ['make' => 'Volkswagen', 'model' => 'Tiguan', 'year' => 2019, 'kw' => 143, 'miles' => '8000', 'image' => 'images/VW Tiguan.jpeg', 'price' => '289 900', 'url' => 'https://www.blocket.se/annons/ostergotland/volkswagen_tiguan_2_0_tdi_190_4m_r_line_drag_varmare/98208598'],
    ['make' => 'Volkswagen', 'model' => 'Polo', 'year' => 2018, 'kw' => 71, 'miles' => '11000', 'image' => 'images/VW Polo.jpeg', 'price' => '114 900', 'url' => 'https://www.blocket.se/annons/stockholm/volkswagen_polo_1_0_tsi_95hk_vhjul/97906340'],
    ['make' => 'Ford', 'model' => 'Focus', 'year' => 2005, 'kw' => 100, 'miles' => '15000', 'image' => 'images/Ford Focus.jpeg', 'price' => '25 900', 'url' => 'https://www.blocket.se/annons/kalmar/ford_focus_kombi_1_8_flexifuel_trend_125hk/98144546'],
    ['make' => 'Volvo', 'model' => 'V70', 'year' => 2008, 'kw' => 138, 'miles' => '18000', 'image' => 'images/Volvo V70.jpeg', 'price' => '69 900', 'url' => 'https://www.blocket.se/annons/stockholm/volvo_v70_d5_geartronic_summum_185hk/98206917'],
    ['make' => 'Ford', 'model' => 'Fiesta', 'year' => 2010, 'kw' => 53, 'miles' => '12000', 'image' => 'images/Ford Fiesta.jpeg', 'price' => '49 900', 'url' => 'https://www.blocket.se/annons/goteborg/ford_fiesta_5_dorrar_1_4_tdci_70hk0_ranta/98025037'],
    ['make' => 'Ford', 'model' => 'Mondeo', 'year' => 2009, 'kw' => 109, 'miles' => '23000', 'image' => 'images/Ford Mondeo.jpeg', 'price' => '54 900', 'url' => 'https://www.blocket.se/annons/skane/ford_mondeo_kombi_2_0_flexifuel_145hk_nyservad/98128142'],
    ['make' => 'Audi', 'model' => 'A4', 'year' => 2018, 'kw' => 127, 'miles' => '6000', 'image' => 'images/Audi A4.jpeg', 'price' => '299 000', 'url' => 'https://www.blocket.se/annons/stockholm/audi_a4_40_tfsi_170hk_g_tron_cng_proline_dragkrok___vinterhj/98205816'],
];
