<?php


// الان اینجا که بوت‌استرپ رو گذاشتیم کلا میتونه به اطلاعات دیتابیس دسترسی داشته باشه
require 'core/bootstrap.php';

/**
 * Router file `routes.php` ro migire harchi route toosh hast choon ba method define neveshte shode mire az method define `router.php`
 * estefade mikone va ba method direct mibine aya meghdari ke besh dadim jozve key hai ke ba file `router.php` besh dadim hast
 * ya na ke age bashe meghdaresho barmigardoone ke choon inja require kardim pas mire oon faili ke require kardimo migire miare
 * 
 * zemnan to method load choon router ro barabare new static gharar dadmim mitoonim mesle hamoon class bash raftar konim yani be
 * method haye dige toye class ham dastresi dare
 * 
 * Request ham ke ye uri return mikone ke darvaghe hamoon adresi hast ke karbar to adress bar neveshte va age to route ha bood meghdare
 * mabe ezash ke value ye array hast ro require mikone
 */

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());