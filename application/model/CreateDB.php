<?php


namespace application\model;
require_once('Model.php');

class CreateDB extends Model
{
    private $createTableQueries = array(
        "CREATE TABLE `users` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `username` varchar(100) COLLATE utf8_persian_ci NOT NULL,
          `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
          `password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
          `admin` enum('user','admin') COLLATE utf8_persian_ci NOT NULL DEFAULT 'user',
          `active` iint(10) NOT NULL DEFAULT 0, 
          `created_at` datetime NOT NULL,
          `updated_at` datetime DEFAULT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY (`email`,`username`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

//        "CREATE TABLE `actors` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `first_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `last_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `picture` varchar(200) NOT NULL,
//          `birth_date` varchar(100) ,
//          `birth_place` varchar(100) ,
//          `bio` varchar(1000) COLLATE utf8_persian_ci,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`)
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `actor_pictures` (
//          `actor_id` int(11) NOT NULL ,
//          `picture` varchar(200),
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`actor_id`,`picture`),
//          FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//
//        "CREATE TABLE `directors` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `first_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `last_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `birth_date` varchar(100) ,
//          `birth_place` varchar(100) ,
//          `picture` varchar(200) COLLATE utf8_persian_ci,
//          `bio` varchar(1000) COLLATE utf8_persian_ci,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`)
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `director_pictures` (
//          `director_id` int(11) NOT NULL ,
//          `picture` varchar(200) COLLATE utf8_persian_ci,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`director_id`,`picture`),
//          FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `movies` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `movie_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `director` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `author` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `release_date` varchar(100),
//          `trailer` varchar(100) COLLATE utf8_persian_ci,
//          `picture` varchar(200) COLLATE utf8_persian_ci,
//          `score` varchar(200) COLLATE utf8_persian_ci,
//          `summary` varchar(2000) COLLATE utf8_persian_ci,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`)
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `movie_pictures` (
//          `movie_id` int(11) NOT NULL ,
//          `picture` varchar(200) COLLATE utf8_persian_ci,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`movie_id`,`picture`),
//          FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//
//        "CREATE TABLE `movie_genre` (
//          `movie_id` int(11) NOT NULL,
//          `genre` varchar(100) COLLATE utf8_persian_ci NOT NULL,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`movie_id`,`genre`),
//          FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `watchList` (
//          `movie_id` int(11) NOT NULL,
//          `user_id` int(11) NOT NULL,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`movie_id`,`user_id`),
//          FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
//          FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `movie_actor` (
//          `movie_id` int(11) NOT NULL,
//          `actor_id` int(11) NOT NULL,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`movie_id`,`actor_id`),
//          FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//
//        "CREATE TABLE `comments` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `user_id` int(11) NOT NULL,
//          `movie_id` int(11)  NOT NULL,
//          `text` text COLLATE utf8_persian_ci NOT NULL,
//          `permission` enum('unseen','seen','approved') COLLATE utf8_persian_ci NOT NULL DEFAULT 'unseen',
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`),
//          FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
//          FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//          )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

//        "CREATE TABLE `blogs` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `movie_id` int(11)  NOT NULL,
//          `actor_id` int(11)  NOT NULL,
//          `picture` varchar(200) COLLATE utf8_persian_ci,
//          `text` text COLLATE utf8_persian_ci NOT NULL,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`),
//          FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
//          FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
//          ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

//        "CREATE TABLE `votes` (
//          `id` int(11) NOT NULL AUTO_INCREMENT,
//          `title` varchar(200) COLLATE utf8_persian_ci  NOT NULL,
//          `candidate` varchar(200) COLLATE utf8_persian_ci NOT NULL,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`,`title`,`candidate`),
//          FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
//          FOREIGN KEY (`person_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE)
//           ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",
//
//        "CREATE TABLE `votes` (
//          `vote_id` int(11) NOT NULL AUTO_INCREMENT,
//          `user_id` int(11) NOT NULL,
//          `title`  varchar(200) COLLATE utf8_persian_ci  NOT NULL,
//          `candidates` varchar(200) COLLATE utf8_persian_ci NOT NULL,
//          `created_at` datetime NOT NULL,
//          `updated_at` datetime DEFAULT NULL,
//          PRIMARY KEY (`id`),
//          FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
//          FOREIGN KEY (`person_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE)
//           ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;",

    );

    private $tableInitializes = array(

//        ['table' => 'movie_actor', 'fields' => ['movie_id','actor_id'], 'values' => ['1', '1']]

//        ['table' => 'actors', 'fields' => ['first_name', 'last_name', 'birth_date', 'birth_place', 'bio','picture'], 'values' => ['لیندا', 'کیانی', '۲۳ شهریور ۱۳۵۹', 'آبادان',
//            'لیندا کیانی در 23 شهریور 1359 در آبادان به دنیا آمد. او دارای یک خواهر و 4 برادر است.  او تحصیلات خود را تا کنون تا مقطع کارشناسی ارشد فلسفه ادامه داده است. فعالیت های هنری را با شرکت در دوره های آموزش بازیگری در کلاس های آموزشی تحت نظارت محمدرضا شریفی نیا و آزیتا حاجیان آغاز کرد. پس از این دوره، در کلاس های فن بیان و بدن آقای حمید سمندریان و خانم مهتاب نصیرپور شرکت کرد.',''],
//        ], ['table' => 'actors', 'fields' => ['first_name', 'last_name', 'birth_date', 'birth_place', 'bio','picture'], 'values' => ['فرزاد', 'فرزین', '۳ تیر ۱۳۶۰', 'تهران',
//            'فرزاد فرزین (زادهٔ ۳ تیر ۱۳۶۰ در تهران) خوانندهٔ موسیقی پاپ ایرانی است. او به جز خوانندگی در آلبوم‌هایش، ترانه‌سرایی، آهنگسازی و تنظیم هم کرده‌است. وی از موفق‌ترین خوانندگان پاپ ایران است و در سطح بین‌المللی بسیار موفق بوده‌است. او کار موسیقی را به صورت رسمی از سال ۱۳۷۸ آغاز کرد و هفت آلبوم رسمی دارد. همچنین سابقهٔ بازی در فیلم‌های سینمایی از جمله پسران آجری، کنسرت روی آب و سگ‌های پوشالی و مجموعه‌های نمایش خانگی عاشقانه و مانکن را داشته‌است. آخرین آلبوم فرزین شانزلیزه نام دارد که در ۲۲ اسفند ماه ۱۳۹۶ روانه بازار شد. از جمله همکاران هنری وی می‌توان به مهدی ابراهیمی نژاد، حسین پور معصومی، پدرام شهرابی، امیر میلاد نیکزاد، یاشار خسروی، مهران خلیلی، مهرداد معافی و احمد امین پور اشاره کرد.','http://parsino.com/wp-content/uploads/2019/07/%D9%86%D8%A7%D8%B2%D9%86%DB%8C%D9%86-%D8%A8%DB%8C%D8%A7%D8%AA%DB%8C-4.jpg']],

//        ['table' => 'movies', 'fields' => ['movie_name', 'director', 'release_date', 'trailer', 'picture', 'score', 'summary'],
//            'values' => ['طعم گیلاس','عباس کیارستمی', '۱۳۷۶', 'https://www.didestan.com/video/m8kmO9xG', 'https://fa.wikipedia.org/wiki/%D9%BE%D8%B1%D9%88%D9%86%D8%AF%D9%87:%D8%B7%D8%B9%D9%85_%DA%AF%DB%8C%D9%84%D8%A7%D8%B3.jpg', '8', 'محمد تاجیک –طعم گیلاس فیلم برگزیده نخل طلای کن تولید مشترک با فرانسه محصول ۱۹۹۷ میلادی است. فیلم درباره مردی است که در حومهٔ شهر تهران، با اتوموبیلش دنبال کسی می‌گردد که تقاضای پردردسر او را در ازای دریافت ۲۰۰هزار تومان پول انجام دهد.فیلم طعم گیلاس همراه با فیلم ژاپنی «مارماهی» ساختهٔ «شوهی ایمامورا» جایزهٔ نخل طلای جشنوارهٔ کن رادر سال ۱۹۹۷ برد که مهم ترین جایزه‌ای است که سینمای ایران به دست آورده است.']],
//        ['table' => 'actors', 'fields' => ['first_name', 'last_name', 'birth_date', 'birth_place','picture', 'bio'],
//            'values' => ['مریلا','زارعی','۲۵ فروردین ۱۳۵۳', ' تهران', 'https://namakstan.net/wp-content/uploads/2018/11/%D8%B9%DA%A9%D8%B3-%D9%85%D8%B1%DB%8C%D9%84%D8%A7-%D8%B2%D8%A7%D8%B1%D8%B9%DB%8C.jpg',
//                'مریلا زارعی در نطنز به دنیا آمد. وی فارغ‌التحصیل صنایع غذایی از دانشگاه آزاد است. وی خواهر بزرگتر ملیکا زارعی است. زارعی برای اولین بار در فیلم سلام سینما ساخته محسن مخملباف (۱۳۷۳) از جمله کسانی بود که در تست بازیگری حضور یافته و چهرهٔ او بر روی پرده سینما نقش بست. بازی در فیلم دو زن یکی از شانس‌های بزرگ او بود. وی تا به حال با کارگردانانی همچون ابراهیم حاتمی‌کیا، اصغر فرهادی و مسعود کیمیایی و احمد مرادپور همکاری داشته‌است.پس از آن بازی در واکنش پنجم، از دیگر نقش‌های وی می‌توان به بازی در فیلم سربازهای جمعه ساخته مسعود کیمیایی و شیار ۱۴۳ ساخته نرگس آبیار اشاره نمود که برای بازی در این دو فیلم موفق به دریافت سیمرغ بهترین بازیگر شده است.']]



        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['8', 'https://zarinbano.com/wp-content/uploads/%D9%85%D8%B1%DB%8C%D9%84%D8%A7-%D8%B2%D8%A7%D8%B1%D8%B9%DB%8C-%D8%A8%D8%A7%D8%B2%DB%8C%DA%AF%D8%B1-%D8%B3%DB%8C%D9%86%D9%85%D8%A7.jpg']]
//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['8', 'https://seraj24.ir/images/news/176499/thumbs/176499.jpg']],
//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['8', 'https://static2.afkarnews.com/thumbnail/DM9ziLb0KNDM/rDxJk2yoXn9KV7c7C6kDweJVxtu4cY7G2hzV_1efiJea1I30PYCuRnaM5x4kKLNQXTYXaWKO8q0wfYWGdiJBEedZbU5YLDeVlqAKEfw-R6wwWxWQxIu3Fg,,/%D9%85%D8%B1%DB%8C%D9%84%D8%A7+%D8%B2%D8%A7%D8%B1%D8%B9%DB%8C.jpg']],
//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['8', 'https://zarinbano.com/wp-content/uploads/%D9%85%D8%B1%DB%8C%D9%84%D8%A7-%D8%B2%D8%A7%D8%B1%D8%B9%DB%8C-%D8%A8%D8%A7%D8%B2%DB%8C%DA%AF%D8%B1-%D8%B3%DB%8C%D9%86%D9%85%D8%A7.jpg']],
//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['7', 'https://saednews.com/storage/media-center/images/ac-image-Mf1590481907jP.jpeg']],
//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['7', 'https://datamusic.ir/wp-content/uploads/2020/06/farzad_farzin_bon_bast.jpg']],
//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['7', 'https://static1.eghtesadonline.com/servev2/zlqJk5aDtRpT/b54EPYiYwLU,/%D9%81%D8%B1%D8%B2%D8%A7%D8%AF+%D9%81%D8%B1%D8%B2%DB%8C%D9%86.jpg']],
//        ['table' => 'actor_pictures', 'fields' => ['actor_id', 'picture'], 'values' => ['7', 'https://media.mehrnews.com/d/2016/08/31/3/2193051.jpg?ts=1486462047399']]

    );

    public function run()
    {
        foreach ($this->createTableQueries as $createTableQuery) {
            $this->createTable($createTableQuery);
        }
//        foreach ($this->tableInitializes as $tableInitialize) {
//            $this->insert($tableInitialize['table'], $tableInitialize['fields'], $tableInitialize['values']);
//            echo "helllo";
//        }
    }
}

