<footer class='footer1'>
<?php
$copyright = array(
    "cop" => "<a href=''>2017-18 Максимов С.В.</a>",
    "facebook" => "<a href='https://www.facebook.com/sergej.maksimov1'><img src='https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/573881_100001302471244_2066415678_q.jpg' alt='FaceBook'></a>",
    "vk" => "<a href='http://vk.com/sergeymaksimoff'><img src='https://pp.vk.me/c407026/v407026490/6aff/DF10YtQ_hLE.jpg' alt='ВКонтакте'></a>",
    "odnokassniki" => "<a href='http://www.odnoklassniki.ru/maximov.sergey'>
                        <img src='http://i510.odnoklassniki.ru/getImage?photoId=117930065060&photoType=5' alt='Одноклассники' width=50 height=50 ></a>",
    "googleplus" => "<a href='https://plus.google.com/u/0/105445602260787783191'><img src='https://lh4.googleusercontent.com/-fpY64tFGcUw/AAAAAAAAAAI/AAAAAAAAA20/i6Re1NBRWMs/s48-c-k/photo.jpg' alt='Google++'></a>"
);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Это нижняя часть страницы
 */
echo "<div style='border-radius: 10em/1em;bottom:0;' class='radius'>";
                foreach ($copyright as $value) {
                    print $value . ' ';
                }
echo '</div>';    
?>
</footer>
