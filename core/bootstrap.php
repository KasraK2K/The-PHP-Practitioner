<?php

// اپ خالیه و اینجا یه سری اطلاعات رو از فایل داده شده میریزه توش
$app = [];
$app['config'] = require 'config.php';

// داره همه اینارو میگیره تا جلوتر قابل دسترس باشه یعنی هرجا بعد از فایل بوت‌استرپ
require 'core\Router.php';
require 'core\Request.php';
require 'core\database\Connection.php';
require 'core\database\QueryBuilder.php';

// دیتابیس رو هم ریخته تو این خونه آرایه که زیرترش استفاده کنه
// QueryBuilder کلا کاری که میکنه مقداری رو که میگیره میده کانستراکتور و گفتیم مقدار ورودی حالت پی‌دی‌او باشه و بعد وقتی میخواد کوپری بزنه ازش استفاده میکنه
$app['database'] = new QueryBuilder(
    // کلا گفتیم  چطوری به دیتابیس وصل بشه
    Connection::make($app['config']['database'])
);