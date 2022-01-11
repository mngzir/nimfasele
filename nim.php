<?php
//https://web.tosinso.com/fa/articles/43138/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%A7%DB%8C%D8%AC%D8%A7%D8%AF-%D9%86%DB%8C%D9%85-%D9%81%D8%A7%D8%B5%D9%84%D9%87-%D8%AF%D8%B1-%D8%B5%D9%81%D8%AD%D8%A7%D8%AA-%D9%88%D8%A8-%D9%88-%D8%AA%D8%A7%D8%AB%DB%8C%D8%B1-%D8%A2%D9%86-%D8%A8%D8%B1-%D8%B3%D8%A6%D9%88
//کلید ALT رو نگه دارید و عدد 0157 رو تایپ کنید تا یک نیم فاصله براتون ایجاد بشه
$word = "یک‌ثلث";
$word2 = "یک ثلث";
$nim = "‌";
echo urlencode($word)."<br>";
echo urlencode($word2)."<br>";
$word = str_replace($nim," ",($word));
echo urlencode($word)."<br>";

?>