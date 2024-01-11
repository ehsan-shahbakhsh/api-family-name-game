<?php

class Cheat
{
    private array $baseAPI = [
        'ok' => false,
        'status' => 400,
        'result' => []
    ];

    private array $cheats = [
        'ا' => [
            'first_name' => ['آوا', 'آرزو', 'آتنا', 'آرش', 'آمنه', 'آرمین', 'امیر', 'آرمان'],
            'last_name' => ['اسدی', 'آرمانی', 'اکبری', 'اعظمی', 'اقبالی', 'آقایی', 'آزادی'],
            'city' => ['ایلام', 'آبادان', 'آستارا', 'آمل', 'ایزه', 'آمستردام', 'آدیس آبابا'],
            'country' => ['آلمان', 'آلبانی', 'آنگولا', 'اتریش', 'آمریکا', 'ایتالیا', 'آرژانتین'],
            'fruit' => ['آلو', 'آلبالو', 'آناناس', 'انبه', 'انگور', 'آواکادو'],
            'food' => ['آبگوشت', 'آش'],
            'color' => ['آبی', 'آجری', 'آلبالویی'],
            'animal' => ['اسب', 'آهو', 'اردک'],
            'car' => ['آئودی', 'اونتادور', 'آزارا', 'استون مارتین'],
            'object' => ['آینه', 'استکان', 'اره برقی', 'آب پاش'],
            'flower' => ['ارکیده', 'آلاله', 'آزالیا', 'آفتابگردان'],
            'job' => ['آرایشگر', 'آشپز'],
            'organ' => ['آرنج', 'آرواره', 'آبشش'],
            'clothes' => ['آستین ( آستین کوتاه )'],
            'celebrities' => ['ابن سینا', 'ادیسون', 'ارسطو', 'آنجلینا جولی'],
            'sport' => ['آکروبات'],
            'movie' => ['آتش بس', 'آرواره ھا', 'آرزو ھا', 'انتقام جویان'],
            'cartoon' => ['آناستازی'],
        ],
        'آ' => 'ا',
        'ب' => [
            'first_name' => ['بردیا', 'بھنام', 'بهرام', 'بابک', 'بیت الله', 'بیتا', 'بانو', 'باور', 'بارانا', 'بادامک', 'بھگل', 'بھاره', 'بھناز', 'بھنوش'],
            'last_name' => ['بهرامی', 'باقری', 'بهشتی', 'براتی', 'بانی'],
            'city' => ['بم', 'بابل', 'بهشهر', 'بیرجند', 'بابلسر', 'بجنورد', 'بروجرد'],
            'country' => ['برزیل', 'بلژیک', 'بولیوی', 'بنگلداش'],
            'fruit' => ['به', 'بلال', 'بادمجان', 'بلوط'],
            'food' => ['برنج خورشت', 'باقالی پلو', 'به پلو', 'باقلوا'],
            'color' => ['بژ', 'بنفش', 'بلوطی'],
            'animal' => ['بوزینه', 'بز', 'ببر', 'بز کوهی'],
            'car' => ['بنز', 'بوگاتی', 'بی ام و'],
            'object' => ['بیل', 'بمب', 'بخاری'],
            'flower' => ['بابونه', 'بامبو', 'بنفشه'],
            'job' => ['باربر', 'بغال', 'بنا'],
            'organ' => ['بینی', 'بازو', 'بند انگشت', 'بیضه', 'باسن'],
            'clothes' => ['بلوز', 'بارانی'],
            'celebrities' => ['بھرام رادان', 'بھرام افشاری', 'باقر خان', 'بروسلی', 'باباطاهر'],
            'sport' => ['بیلیارد', 'بولینگ'],
            'movie' => ['بردیا', 'بانوی عمارت', 'بتمن'],
            'cartoon' => ['بابا لنگ دراز', 'بن تن', 'باربی', 'باب اسفنجی', 'بچه رئیس'],
        ],
        'پ' => [
            'first_name' => ['پروانه', 'پرویز', 'پرنیان', 'پروین', 'پون', 'پریسا', 'پدرام', 'پیمان', 'پارسا', 'پرھام', 'پوریا', 'پرویز'],
            'last_name' => ['پھلوانی', 'پورایمان', 'پیرایی', 'پناهی', 'پورحسین', 'پاکزاد', 'پور محمدی'],
            'city' => ['پاوه', 'پکن', 'پیرانشهر'],
            'country' => ['پرو', 'پرتغال', 'پاکستان'],
            'fruit' => ['پرتغال', 'پسته'],
            'food' => ['پیتزا', 'پلو', 'پوره ی سیب زمینی'],
            'color' => ['پرتغالی', 'پرکلاغی', 'پوست پیازی', 'پسته ای'],
            'animal' => ['پلنگ', 'پروانه', 'پرستو', 'پیرانا', 'پشه'],
            'car' => ['پراید', 'پیکان', 'پورشه', 'پرادو', 'پرشیا', 'پاترول'],
            'object' => ['پارو', 'پنکه', 'پارچه', 'پنبه'],
            'flower' => ['پونه', 'پامچال'],
            'job' => ['پلیس', 'پزشک', 'پنبه زن'],
            'organ' => ['پا', 'پھلو', 'پلک', 'پوست'],
            'clothes' => ['پلیور', 'پیراهن'],
            'celebrities' => ['پروین اعتصامی', 'پاستور', 'پله'],
            'sport' => ['پارکور'],
            'movie' => ['پلیکان', 'پیرانا', 'پاورچین', 'پلنگ سیاه'],
            'cartoon' => ['پینوکیو', 'پاندا کونگ فو کار', 'پرنسس سوفیا', 'پرین', 'پلنگ صورتی'],
        ],
        'ت' => [
            'first_name' => ['توحید', 'ترانه', 'ترنم', 'تینا', 'ترلان', 'تارا', 'تینا', 'ترنج', 'ترلان', 'توحید', 'ترانه'],
            'last_name' => ['تیموری', 'تبریزی تهمتن', 'تبریزی', 'توحدی', 'تیموری', 'توحیدی'],
            'city' => ['تاکستان', 'تھران', 'تبریز', 'تاکستان', 'تل آویو'],
            'country' => ['ترکیه', 'تانزانیا', 'تایلند', 'ترکمنستان' , 'تاجیکستان'],
            'fruit' => ['توت', 'تمشک', 'توت فرنگی', 'ترگیل', 'ترنج'],
            'food' => ['ترشی تره گیلانی ( غذای شمال)', 'تاس کباب', 'ته چین'],
            'color' => ['توسی', 'توتی'],
            'animal' => ['توتیا(تو دریاس)', 'تیھو', 'تمساح'],
            'car' => ['تراکتور', 'تانک', 'تویوتا', 'تیبا'],
            'object' => ['تاب', 'تنیس', 'تاج', 'توپ'],
            'flower' => ['تاج خروس'],
            'job' => ['تکنسین'],
            'organ' => ['تار صوتی', 'تاندون'],
            'clothes' => ['تیشرت'],
            'celebrities' => ['تاگور', 'تولستوی'],
            'sport' => ['تیر اندازی', 'تکواندو', 'تنیس'],
            'movie' => ['ترانسفورمرز', 'ترانه'],
            'cartoon' => ['تارزان', 'توری و خواھرش'],
        ],
        'ث' => [
            'first_name' => ['ثریا', 'ثمین', 'ثنا'],
            'last_name' => ['ثنایی', 'ثریایی', 'ثروتمند'],
            'city' => ['ثلاث باباجانی'],
            'country' => [],
            'fruit' => [],
            'food' => ['ثرید', 'ثریایی'],
            'color' => ['ثعلبی'],
            'animal' => ['ثعبان'],
            'car' => [],
            'object' => ['ثابت کننده', 'ثانیه شمار'],
            'flower' => ['ثعلب'],
            'job' => ['ثبت احوال'],
            'organ' => [],
            'clothes' => [],
            'celebrities' => ['ثنایی مشھدی', 'ثریا قاسمی'],
            'sport' => [],
            'movie' => ['ثریا ملکه غمگین', 'ثبت با سند برابر است', 'ثور'],
            'cartoon' => ['ثناوثمین', 'ثور'],
        ],
        'ج' => [
            'first_name' => ['جواد', 'جعفر', 'جواھر', 'جمال', 'جلال', 'جک'],
            'last_name' => ['جاویدی', 'جوادی', 'جواھری'],
            'city' => ['جاجرود', 'جیرفت'],
            'country' => ['جبل الطارق', 'جزایر ارشال', 'جزایر سلیمان', 'جامائیکا', 'جیبوتی'],
            'fruit' => ['جز ھندی', 'جمبو'],
            'food' => ['جعفری پلو', 'جوجه کباب'],
            'color' => ['جوھری', 'جگری', 'جیوه ای'],
            'animal' => ['جوجه٬جوجه تیغی', 'جیرجیرک', 'جغد'],
            'car' => ['جیپ', 'جنسیس'],
            'object' => ['جارو', 'جک ماشین'],
            'flower' => ['جعفری', 'جاسمین'],
            'job' => ['جواهری', 'جوراب فروش', 'جوشکار', 'جراج'],
            'organ' => ['جمجمه'],
            'clothes' => ['جارو', 'جعبه', 'جوراب'],
            'celebrities' => ['جان سینا', 'جکی چان', 'جبران خلیل جبران', 'جک لندن'],
            'sport' => ['جودو'],
            'movie' => ['جومانجی', 'جاده خاکی'],
            'cartoon' => ['جک شگفت انگیز'],
        ],
        'چ' => [
            'first_name' => ['چنگیز', 'چکامه', 'چترا', 'چکاوک'],
            'last_name' => ['چنگیزی', 'چمنی', 'چمرانی', 'چمن ماه'],
            'city' => ['چالوس', 'چابھار'],
            'country' => ['چک', 'چین'],
            'fruit' => ['چاقاله بادام', 'چغندر'],
            'food' => ['چلو گوشت', 'چلو مرغ', 'چنجه', 'چلو کباب'],
            'color' => ['چمنی'],
            'animal' => ['چکاوک', 'چلچله'],
            'car' => ['چانگان', 'چری'],
            'object' => ['چرتکه', 'چکش', 'چمدان', 'چوب', 'چسب', 'چتر', 'چینه', 'چرخ خیاطی'],
            'flower' => ['چتری', 'چای'],
            'job' => ['چرم فروش', 'چرم دوز'],
            'organ' => ['چانه', 'چشم'],
            'clothes' => ['چارقد', 'چادر'],
            'celebrities' => ['چمران', 'چه گوارا', 'چارلی چاپلین'],
            'sport' => ['چتربازی', 'چوگان'],
            'movie' => ['فیلم چ', 'چھار راه استامبل'],
            'cartoon' => ['چاه عروس'],
        ],
        'ح' => [
            'first_name' => ['حمید', 'حامد', 'حسن', 'حشمت'],
            'last_name' => ['حمیدی', 'حیاتی', 'حسینی', 'حاتمی'],
            'city' => ['حمیدیه', 'حاجی آباد', 'حسن آباد'],
            'country' => ['حبشه(نام تاریخی کشور اتیوپی در نزد مسلمانان است)'],
            'fruit' => ['حنظل', 'حصرم'],
            'food' => ['حلوا', 'حلیم بادمجان'],
            'color' => ['حنایی', 'حلوایی'],
            'animal' => ['حواصیل', 'حلزون'],
            'car' => ['حافی لوبو'],
            'object' => ['حوله خشک کن', 'حس گر', 'حوله'],
            'flower' => ['حنا', 'حسن یوسف'],
            'job' => ['حوله فروش', 'حمال'],
            'organ' => ['حلق'],
            'clothes' => ['حوله'],
            'celebrities' => ['حافظ'],
            'sport' => ['حلقه زدن'],
            'movie' => ['حمله به تایتان', 'حلقه', 'حمله به اچ3'],
            'cartoon' => ['حنا دختری در مزرعه'],
        ],
        'خ' => [
            'first_name' => ['خلیل', 'خسرو'],
            'last_name' => ['خمینی', 'خطیبی'],
            'city' => ['خمین', 'خوزستان'],
            'country' => ['خمیس', 'خرونا'],
            'fruit' => ['خیار', 'خربزه', 'خرمالو'],
            'food' => ['خورشت آلو', 'خاگینه', 'خورشت بادمجان'],
            'color' => ['خاکی', 'خرمایی', 'خاکستری'],
            'animal' => ['خرگوش', 'خروس', 'خر', 'خارپشت', 'خرس'],
            'car' => ['خاور'],
            'object' => ['خیمه', 'خط کش'],
            'flower' => ['خرزھره', 'خارخاسک', 'خارشتر'],
            'job' => ['خیاط', 'خلبان'],
            'organ' => ['خرخره', 'خال'],
            'clothes' => ['خز'],
            'celebrities' => ['خالد استامبولی', 'خیام'],
            'sport' => ['خردوانی'],
            'movie' => ['خاک گرم'],
            'cartoon' => ['خرس ھای مھربون', 'خرگوش باھوش'],
        ],
        'د' => [
            'first_name' => ['دنیا', 'داریوش', 'داود', 'دلارام', 'دانیال', 'دیبا', 'دورا', 'درسا', 'دوروتی', 'درنا', 'دیبالا'],
            'last_name' => ['درگاھی داراب', 'دلدار', 'درخشانی', 'داودی'],
            'city' => ['دبی', 'دزفول', 'داراب', 'دامغان'],
            'country' => ['دومینیکن', 'دانمارک'],
            'fruit' => ['دستنبو', 'دارابی'],
            'food' => ['دندونی', 'دمی گوجه', 'دم پختک', 'دلمه'],
            'color' => ['دوغی', 'دلفینی', 'دودی'],
            'animal' => ['درنا', 'دارکوب', 'دلفین'],
            'car' => ['دویست و شش', 'دنا', 'دوو'],
            'object' => ['دمپایی', 'داس', 'دستکش'],
            'flower' => ['دم اسبی صحرایی', 'داوودی'],
            'job' => ['دھقان', 'دریانورد', 'دامپزشک', 'دندانپزشک', 'دکتر'],
            'organ' => ['دست', 'دندان', 'دنده'],
            'clothes' => ['دامن'],
            'celebrities' => ['داریوش یکم و دوم', 'دیپاک', 'دانته'],
            'sport' => ['دو میدانی'],
            'movie' => ['دیوار به دیوار', 'دزدان دریایی کارائیب', 'ددپول', 'دزد عشق'],
            'cartoon' => ['دالتون ھا', 'در جستجوی نم', 'دکتر ارنست', 'دورا'],
        ],
        'ذ' => [
            'first_name' => ['ذوالفقار'],
            'last_name' => ['ذبیحی', 'ذیلائی'],
            'city' => ['ذوق آباد', 'ذمار'],
            'country' => [],
            'fruit' => ['ذرت', 'ذغال اخته'],
            'food' => ['ذرت پلو'],
            'color' => ['ذغالی'],
            'animal' => ['ذرتی'],
            'car' => ['ذوالجناح'],
            'object' => ['ذره بین', 'ذغال'],
            'flower' => ['ذوزنقه'],
            'job' => ['ذغال فروش'],
            'organ' => ['ذوزنقه', 'ذهن'],
            'clothes' => [],
            'celebrities' => ['ذبیح الله منصوری'],
            'sport' => [],
            'movie' => ['ذهن زیبا', 'ذبیح'],
            'cartoon' => [],
        ],
        'ر' => [
            'first_name' => ['رامبد', 'راحله', 'روشا', 'روشنک', 'رھا', 'رشید'],
            'last_name' => ['رامین فر', 'ریاحی', 'رضایی', 'رسایی', 'رشیدی'],
            'city' => ['رشت', 'رودھن', 'رامسر', 'رودبار', 'رم', 'ریاض' ,'رضاشھر', 'ری'],
            'country' => ['رومانی', 'روسیه'],
            'fruit' => ['ریواس'],
            'food' => ['رشته', 'رشته پلو', 'رنگینک'],
            'color' => ['روناسی'],
            'animal' => ['راسو', 'روباه', 'راکون'],
            'car' => ['رنجروور', 'رنو', 'ریو'],
            'object' => ['رادیو', 'رادار', 'رومیزی', 'رنده'],
            'flower' => ['ریحان', 'رازقی', 'رز'],
            'job' => ['روانشناس', 'رویگر', 'راننده', 'رفتگر'],
            'organ' => ['ریه', 'روده بزرگ و کوچک', 'ران'],
            'clothes' => ['روسری', 'روپوش'],
            'celebrities' => ['رازی', 'رودکی'],
            'sport' => ['رالی'],
            'movie' => ['روح سوار', 'روشن ترین شب'],
            'cartoon' => ['رابین ھود', 'رالف خرابکار'],
        ],
        'ز' => [
            'first_name' => ['زیبا', 'زھرا', 'زھره', 'زینب'],
            'last_name' => ['زھرایی', 'زاھدی', 'زال'],
            'city' => ['زابل', 'زاھدان', 'زاوه'],
            'country' => ['زیمباوه', 'زامبیا'],
            'fruit' => ['زالزالک', 'زردک', 'زرد آلو', 'زنجبیل', 'زیره'],
            'food' => ['زردک پلو', 'زرشک پلو'],
            'color' => ['زرد', 'زرشکی'],
            'animal' => ['زرافه', 'زالو', 'زنبور'],
            'car' => ['زامیاد', 'زانتیا'],
            'object' => ['زنبیل', 'زنجیر', 'زین', 'زیلو', 'زنگوله', 'زنگ'],
            'flower' => ['زنبق'],
            'job' => ['زرگر'],
            'organ' => ['زانو', 'زبان', 'زردپی'],
            'clothes' => ['زیر پوش', 'زیر پیراھن'],
            'celebrities' => ['زرتشت', 'زکریا'],
            'sport' => ['زو'],
            'movie' => ['زورو'],
            'cartoon' => ['زورو', 'زیبای خفنه'],
        ],
        'ژ' => [
            'first_name' => ['ژاله', 'ژینوس', 'ژیلا', 'ژیوار'],
            'last_name' => ['ژوله', 'ژینوسی'],
            'city' => ['ژوائوپسو (شھری است در ساحل اقیانوس اطلس شمالی— در کشور برزیل)', 'ژوهانسبورگ', 'ژنو', 'ژیتومیر'],
            'country' => ['ژاپن'],
            'fruit' => ['ژاژک', 'ژاژ'],
            'food' => ['ژله', 'ژلاتین', 'ژیگو', 'ژامبون'],
            'color' => ['ژله ای یا ژورکی'],
            'animal' => ['ژوژه', 'ژوله', 'ژورک (پرنده ای سرخ رنگ به اندازه گنجشک)'],
            'car' => ['ژیان'],
            'object' => ['ژیروسکوپ', 'ژیلت'],
            'flower' => ['ژاله'],
            'job' => ['ژله فروش'],
            'organ' => ['ژژونوم', 'ژن'],
            'clothes' => ['ژاکت'],
            'celebrities' => ['ژرژ ھربت'],
            'sport' => ['ژیمناستیک'],
            'movie' => ['ژن خوک'],
            'cartoon' => ['ژوپیه و ژوپیا'],
        ],
        'س' => [
            'first_name' => ['سعید', 'سانیار', 'سھیل', 'سامان', 'سارینا', 'سعیده', 'سمانه', 'ساره', 'سارا', 'سانیا', 'ساغر', 'ساجده'],
            'last_name' => ['سوری', 'سھرابی', 'سلیمانی'],
            'city' => ['ساری', 'سمنان', 'سبزوار', 'سراب', 'سنندج'],
            'country' => ['سومالی', 'سوریه', 'سوئیس', 'سوئد', 'سریلانکا'],
            'fruit' => ['سر خالو', 'سنجد', 'سیب'],
            'food' => ['سبزی پلو', 'سیرابی'],
            'color' => ['سیاه', 'سرمه ای', 'سفید', 'سبز'],
            'animal' => ['سار ٬سوسمار', 'سوسک', 'سمور', 'سگ'],
            'car' => ['سمند', 'سانتافه'],
            'object' => ['سبد', 'سوزن', 'سرمه', 'یخ', 'سوت'],
            'flower' => ['ستاره', 'سبزی یوحنا', 'ساق عروس', 'ساعتی', 'سنبل', 'سوسن'],
            'job' => ['سمسار', 'سوزن بان'],
            'organ' => ['ساعد', 'سر'],
            'clothes' => ['سوتین', 'سارافون'],
            'celebrities' => ['سقراط', 'سعدی'],
            'sport' => ['سی ایکس'],
            'movie' => ['سوپرمن', 'سریع و خشن'],
            'cartoon' => ['سوپرمن', 'سندباد', 'سیندرلا', 'سفرھای علمی'],
        ],
        'ش' => [
            'first_name' => ['شیما', 'شعبان', 'شھباز', 'شراره', 'شھرزاد', 'شکوفه', 'شھرام'],
            'last_name' => ['شرفی', 'شمسی', 'شوقی', 'شھبازی', 'شکوھی'],
            'city' => ['شیراز', 'شاھرود', 'شازند', 'شوشتر', 'شوش'],
            'country' => ['شیلی'],
            'fruit' => ['شلیل', 'شفتالو', 'شلغم', 'شاه توت'],
            'food' => ['شوربا', 'شیر برنج', 'شلغم پلو', 'شویدپلو', 'شیوید باقالی', 'شیرین پلو', 'شامی'],
            'color' => ['شیری', 'شکلاتی', 'شرابی'],
            'animal' => ['شتر', 'شیر', 'شغال', 'شاھین'],
            'car' => ['شورلت'],
            'object' => ['شیشه', 'شلنگ', 'شومینه', 'شمشیر'],
            'flower' => ['شب بو', 'شیپوری', 'شقایق'],
            'job' => ['شھردار'],
            'organ' => ['شش'],
            'clothes' => ['شال', 'شورت', 'شورتک', 'شلوارک'],
            'celebrities' => ['شھریار', 'شاپور دوم', 'شاه چراغ', 'شاملو'],
            'sport' => ['شنا'],
            'movie' => ['شب ھای برره', 'شرلوک ھولمز'],
            'cartoon' => ['شرک'],
        ],
        'ص' => [
            'first_name' => ['صبا', 'صاحب', 'صوفیا', 'صابر', 'صدف', 'صادق', 'صدیقه', 'صالحه', 'صالح', 'صنم', 'صدرا', 'صحرا'],
            'last_name' => ['صباحی', 'صوفی', 'صارمی', 'صادقی', 'صدیقی', 'صادق زاده', 'صانعی', 'صولتی', 'صابری', 'صحرابان', 'صفرزایی', 'صفرزاده', 'صیاد', 'صفامنشی', 'صفری'],
            'city' => ['صدرآباد', 'صومعه سرا', 'صفادشت', 'صغاد', 'صحنه', 'صالح آباد'],
            'country' => ['صربستان'],
            'fruit' => ['صبار'],
            'food' => ['صدف پلو', 'صدف'],
            'color' => ['صورتی', 'صدفی'],
            'animal' => ['صدف دریایی'],
            'car' => ['صبا', 'صحرا', 'صدویازده'],
            'object' => ['صابون', 'صندوقچه'],
            'flower' => ['صنوبر', 'صدتومانی', 'صابونی'],
            'job' => ['صافکاری', 'صیاد', 'صرافی', 'صدابردار'],
            'organ' => ['صورت', 'صلبیه'],
            'clothes' => ['صیادی', 'صندل'],
            'celebrities' => ['صائب تبریزی', 'صادق هدایت'],
            'sport' => ['صخره نوردی'],
            'movie' => ['صفر بیست و یک', 'صاعقه', 'صورتی', 'صبحانه ای برای دو نفر'],
            'cartoon' => ['صلح بانان جهان', 'صد و یک سگ خالدار'],
        ],
        'ض' => [
            'first_name' => ['ضیاالدین', 'ضرغام', 'ضیا', 'ضحا'],
            'last_name' => ['ضیایی', 'ضرابی', 'ضیغمی', 'ضرغامی'],
            'city' => ['ضیاآباد'],
            'country' => [],
            'fruit' => [],
            'food' => [],
            'color' => ['ضد زنگ'],
            'animal' => [],
            'car' => [],
            'object' => ['ضبط', 'ضربه گیر در'],
            'flower' => [],
            'job' => ['ضابط قوه قضائیه'],
            'organ' => [],
            'clothes' => [],
            'celebrities' => ['علی ضیا', 'ضیاء الدین طباطبایی'],
            'sport' => [],
            'movie' => ['ضدگلوله', 'ضربه فنی', 'ضیافت', 'ضربان قلب'],
            'cartoon' => ['ضامن آهو'],
        ],
        'ط' => [
            'first_name' => ['طناز', 'طاھا', 'طاھر', 'طیبه', 'طاهره', 'طهورا', 'طنینه', 'طوفان', 'طهماسب', 'طینوش'],
            'last_name' => ['طیبی', 'طاھری', 'طهمورث', 'طباطبایی', 'طرازمنفرد', 'طالقانی', 'طوفانی', 'طارمی', 'طاهریان', 'طوسی زاده', 'طهماسبی'],
            'city' => ['طبس', 'طارم', 'طاقانک', 'طوس', 'طرابلس', 'طالقان', 'طرقبه'],
            'country' => ['طبرستان'],
            'fruit' => ['طالبی'],
            'food' => ['طاس کباب'],
            'color' => ['طوسی', 'طلایی'],
            'animal' => ['طوطی', 'طاووس', 'طرقه'],
            'car' => ['طوفان'],
            'object' => ['طناب', 'طبل'],
            'flower' => ['طوق طلایی', 'طاووسی'],
            'job' => ['طلافروش', 'طباخ'],
            'organ' => ['طحال'],
            'clothes' => [],
            'celebrities' => ['طیب', 'طناز طباطبایی'],
            'sport' => ['طناب کشی', 'طناب زنی'],
            'movie' => ['طوقی', 'طبقه حساس', 'طالع نحس'],
            'cartoon' => ['طلسم شدگان', 'طوطی و بازرگان', 'طوطی و بقال'],
        ],
        'ظ' => [
            'first_name' => ['ظفر', 'ظھیر', 'ظهراب', 'ظهره', 'ظهور'],
            'last_name' => ['ظفری', 'ظهیری', 'ظهیریان', 'ظریف'],
            'city' => ['ظفرآباد'],
            'country' => [],
            'fruit' => [],
            'food' => [],
            'color' => [],
            'animal' => [],
            'car' => [],
            'object' => ['ظرف شویی'],
            'flower' => ['ظریف کوتوله'],
            'job' => ['ظرفشویی', 'ظروف فروشی'],
            'organ' => [],
            'clothes' => [],
            'celebrities' => ['ظهیرالدوله', 'ظریف'],
            'sport' => [],
            'movie' => ['ظفر'],
            'cartoon' => ['ظهور تایتان ها', 'ظهور نگهبانان', 'ظاهر و باطن'],
        ],
        'ع' => [
            'first_name' => ['علی', 'عارف', 'عرفان', 'عباس', 'علیرضا', 'عطرین', 'عسل', 'عماد', 'عرفانه', 'عبدالله', 'عامر', 'علی رام', 'عاطفه', 'عارفه', 'عادل', 'عمران', 'علی اصغر', 'علی اکبر'],
            'last_name' => ['عبدی', 'عباس پور', 'عباسی', 'عسگری', 'عبدالهی', 'علیپور', 'علیزاده', 'علی نژاد', 'عابدی', 'علینژاد', 'علیخانی', 'عبدپور', 'علائی', 'علی آبادی', 'عاطفی', 'عامری', 'عشوری'],
            'city' => ['علی آباد', 'عسلویه', 'عباس آباد', 'عشق آباد', 'علامرودشت'],
            'country' => ['عراق', 'عمان', 'عربستان'],
            'fruit' => ['عناب'],
            'food' => ['عدسی', 'عدس پلو'],
            'color' => ['عنابی', 'عسلی', 'عاج فیلی'],
            'animal' => ['عقرب', 'عنکبوت', 'عقاب', 'عندلیب', 'عروس دریایی', 'عروس هلندی'],
            'car' => [],
            'object' => ['عینک', 'عصا', 'عروسک', 'عکس', 'عود'],
            'flower' => ['عروس', 'عنکبوتی'],
            'job' => ['عینک ساز', 'عطاری', 'عکاس'],
            'organ' => ['عنبیه', 'عدسی چشم', 'عصب بینایی', 'عصب شنوایی'],
            'clothes' => ['عبا', 'عینک', 'عمامه'],
            'celebrities' => ['عارف قزوینی', 'عطار نیشابوری', 'عبید زاکانی', 'عمامه', 'علیرام نورایی', 'علامه طباطبایی', 'عامر منیب', 'علی صادقی', 'عادل فردوسی پور'],
            'sport' => [],
            'movie' => ['عزرائیل', 'علاءالدین', 'عزیز میلیون دلاری', 'عطر عشق', 'عشق اجاره ای', 'عروس فراری', 'عرس استانبول', 'عمر گل لاله', 'عشق تجملاتی', 'عشق ممنوع', 'عاشقان ماه', 'عینک دودی'],
            'cartoon' => ['عصر یخبندان', 'علی بابا و دزدان دریایی', 'عروس مرده', 'عناصر', 'علاءالدین', 'علاءالدین و شاه دزدان', 'عدالت جویان جوان', 'علی کوچولو'],
        ],
        'غ' => [
            'first_name' => ['غلام', 'غضنفر', 'غزاله', 'غزل', 'غزال', 'غلامرضا', 'غلام عباس', 'غفور', 'غیاث الدین', 'غلامحسین'],
            'last_name' => ['غفرانی', 'غلامی', 'غضنفری', 'غفوریان', 'غیاثی', 'غفوری', 'غفاری', 'غیائی'],
            'city' => ['غرق اباد', 'غزنی', 'غزه'],
            'country' => ['غنا'],
            'fruit' => ['غوره'],
            'food' => ['غاز شکم پر'],
            'color' => [],
            'animal' => ['غاز', 'غزال', 'غوک', 'غراب'],
            'car' => ['غلتک'],
            'object' => ['غذا ساز', 'غلطک', 'غلط گیر'],
            'flower' => ['غوره ای', 'غنچه'],
            'job' => ['غواصی'],
            'organ' => ['غضروف', 'غده تیرویید', 'غلاف میلین'],
            'clothes' => ['غواصی'],
            'celebrities' => ['غیاث الدین جمشید کاشانی', 'غلامرضا تختی'],
            'sport' => ['غواصی'],
            'movie' => ['غوغا', 'غار', 'غرور و تعصب', 'غلامرضا تختی'],
            'cartoon' => ['غول چراغ جادو', 'غارنشینان', 'غول های پاکتی'],
        ],
        'ف' => [
            'first_name' => ['فرھاد', 'فاطمه', 'فرزاد', 'فرشته', 'فرزانه', 'فھیمه', 'فریبا', 'فرزین', 'فرشاد', 'فردین', 'فاطیما', 'فائزه', 'فرحناز', 'فرخ', 'فخری', 'فریماه', 'فروغ', 'فروزان', 'فرنود', 'فرح', 'فریضه', 'فریحا', 'فرامرز', 'فیروزه', 'فرهام'],
            'last_name' => ['فرخی', 'فدوی', 'فتحی', 'فرھادی', 'فرقانی', 'فقیه عباسی', 'فتاحی', 'فلاحتی', 'فریده', 'فرامرزی', 'فلاحی', 'فراهانی', 'فرجی'],
            'city' => ['فومن', 'فریدون کنار', 'فیروز آباد', 'فسا', 'فیروزکوه', 'فراهان', 'فولادشهر', 'فلاورجان', 'فریدون شهر'],
            'country' => ['فرانسه', 'فلسطین', 'فنلاند', 'فیجی', 'فیلیپین'],
            'fruit' => ['فندق', 'فیسالیس', 'فیجوا', 'فیلودندرون'],
            'food' => ['فسنجان', 'فیله مرغ', 'فلافل', 'فرنی', 'فروماژ'],
            'color' => ['فیلی', 'فیروزه ای', 'فسفری', 'فندقی'],
            'animal' => ['فلامینگو', 'فک', 'فیل', 'فنچ', 'فاخته'],
            'car' => ['فراری', 'فولکس واگن', 'فاو', 'فیات', 'فورد'],
            'object' => ['فرش', 'فرفره', 'فندک', 'فنجان', 'فانوس', 'فرچه', 'فویل آلمینیوم', 'فلوت', 'فوم', 'فلاسک'],
            'flower' => ['فلورال', 'فلوکس', 'فیکوس', 'فریزیا', 'فیلتوس', 'فراموشم مکن'],
            'job' => ['فراش', 'فرش فروش', 'فالگیر', 'فلافل فروشی', 'فوتبالیست', 'فیزیوتراپیست', 'فضانورد'],
            'organ' => ['فک', 'فرق سر'],
            'clothes' => ['فضانوردی'],
            'celebrities' => ['فردوسی', 'فروغ فرخزاد', 'فرزاد فرزین', 'فاطمه معتمد آریا', 'فریدون جیرانی', 'فریدون آسرایی', 'فریدون یغمایی', 'فریبرز عربنیا', 'فریبا نادری', 'فیودور داستایفسکی'],
            'sport' => ['فوتبال', 'فوتسال', 'فیتنس', 'فوتبال آمریکایی', 'فریزبی'],
            'movie' => ['فرار از زندان', 'فریاد زیر آب', 'فلش'],
            'cartoon' => ['فوتبالیست ها', 'فوتبال رباتی', 'فروزن', 'فیلشاه', 'فینیس و فرب', 'فرار از سیاره زمین', 'فرفره های انفجاری', 'فصل شکار'],
        ],
        'ق' => [
            'first_name' => ['قاسم', 'قلی', 'قاصدک', 'قنبر'],
            'last_name' => ['قنبری', 'قاصدی', 'قاسمی'],
            'city' => ['قم', 'قاین', 'قزوین'],
            'country' => ['قزاقستان'],
            'fruit' => ['قیسی'],
            'food' => ['قورمه سبزی', 'قیمه'],
            'color' => ['قرمز', 'قھوه ای'],
            'animal' => ['قورباغه', 'قو'],
            'car' => ['قشقایی'],
            'object' => ['قالی', 'قلاب ماھیگیری', 'قاب عکس', 'قاشق', 'قوری', 'قرقره'],
            'flower' => ['قاصدک', 'قاشقی'],
            'job' => ['قناد', 'قالیباف'],
            'organ' => ['قلب', 'قفسه سینه', 'قوزک پا'],
            'clothes' => ['قبا'],
            'celebrities' => ['قمشه ای'],
            'sport' => ['قایق سواری'],
            'movie' => ['قرمز'],
            'cartoon' => ['قھرمانان تنی'],
        ],
        'ک' => [
            'first_name' => ['کامران', 'کتایون', 'کرم', 'کارا'],
            'last_name' => ['کرمی', 'کیوانی', 'کریمی'],
            'city' => ['کاشان', 'کازرون', 'کابل'],
            'country' => ['کلمبیا', 'کانادا', 'کویت', 'کوبا', 'کنیا', 'کاستاریکا'],
            'fruit' => ['کیوی', 'کلم'],
            'food' => ['کتلت', 'کلم پلو', 'کوکو', 'کباب', 'کالباس', 'کشک بادمجان'],
            'color' => ['کرمی', 'کالباسی', 'کبود', 'کله غازی'],
            'animal' => ['کرم', 'کپک', 'کوسه', 'کبوتر', 'کژدم', 'کانگورو', 'کرگدن', 'کلاغ'],
            'car' => ['کامیون', 'کمری'],
            'object' => ['کفش', 'کلید', 'کاردک', 'کیف', 'کمد', 'کوله پشتی', 'کتاب', 'کنترل'],
            'flower' => ['کوکب', 'کاکتوس', 'کاستی', 'کاسنیان'],
            'job' => ['کفاش', 'کارگر', 'کشاورز'],
            'organ' => ['کمر', 'کشاله ران'],
            'clothes' => ['کت', 'کاپشن', 'کلاه', 'کفش'],
            'celebrities' => ['کوروش کبیر', 'کاتو', 'کامران و ھومن', 'کارلوس کیروش', 'کریستیانو رونالدو (گلزن ترین و بهترین بازیکن فوتبال تاریخ)'],
            'sport' => ['کشتی', 'کبدی', 'کاراته', 'کوھنوردی'],
            'movie' => ['کشتی البارکو'],
            'cartoon' => ['کریستوفر رابین', 'کوکو'],
        ],
        'گ' => [
            'first_name' => ['گلی', 'گلرخ', 'گلچھره', 'گلاره', 'گوھر'],
            'last_name' => ['گلزار', 'گلرخیان'],
            'city' => ['گرگان', 'گناباد', 'گنبد کاووس'],
            'country' => ['گرجستان', 'گرنادا'],
            'fruit' => ['گلابی', 'گیلاس', 'گرمک', 'گوجه سبز'],
            'food' => ['گوشت کوبیده', 'گوله ریزه'],
            'color' => ['گلبھی', 'گیلاسی'],
            'animal' => ['گاو', 'گرگ', 'گوسفند', 'گوزن'],
            'car' => ['گلف', 'گریدر'],
            'object' => ['گاری', 'گوشواره', 'گیلیم'],
            'flower' => ['گلایل', 'گندم'],
            'job' => ['گاری چی', 'گلیم باف', 'گارسون'],
            'organ' => ['گردن', 'گوش'],
            'clothes' => ['گیوه', 'گیپور'],
            'celebrities' => ['گاندی', 'گالیله', 'گوته'],
            'sport' => ['گلف', 'گلبال'],
            'movie' => ['گلادیاتور', 'گشت ارشاد'],
            'cartoon' => ['گرینچ', 'گوریل انگوری'],
        ],
        'ل' => [
            'first_name' => ['لیدا', 'لیلا', 'لعیا', 'لاله', 'لادن', 'لیلی', 'لیندا', 'لیدانا', 'لیام', 'لیسا', 'لیزا', 'لیا'],
            'last_name' => ['لھراسبی', 'لادنی', 'لاجوردى', 'لاریجانی', 'لاری', 'لرستانی'],
            'city' => ['لاھیجان', 'لار', 'لالی', 'لواسان', 'لنگرود', 'لوشان', 'لندن', 'لار', 'لامرد', 'لمزان', 'لپویی', 'لس آنجلس', 'لاهور', 'لاس و گاس', 'لستر'],
            'country' => ['لیبی', 'لبنان', 'لھستان', 'لائوس', 'لتونی', 'لسوتو', 'لوکزامبورگ', 'لیبریا', 'لیتوانی'],
            'fruit' => ['لیمو شیرین', 'لیمو', 'لبو', 'لیچی', 'لوکوما'],
            'food' => ['لوبیا پلو', 'لازانیا'],
            'color' => ['لیمویی', 'لاجورد', 'لجنی'],
            'animal' => ['لک لک', 'لاک پشت', 'لاما'],
            'car' => ['لامبورگینی', 'لیموزین', 'لندکروز', 'لندور', 'لکسوس', 'لودر', 'لینکلن', 'لیفان'],
            'object' => ['لوستر', 'لوله', 'لامپ', 'لنگر', 'لیف', 'لپ تاپ', 'لاک', 'لیوان', 'لیزر', 'لولا'],
            'flower' => ['لاله', 'لیمو ترش', 'لاله واژگون', 'لیلیوم', 'لادن', 'لاله عباسی'],
            'job' => ['لبو فروش', 'لوکوموتیوران', 'لوله کش', 'لوازم التحریر', 'لباس فروش', 'لوله بازکنی'],
            'organ' => ['لوزالمعده', 'لاله گوش', 'لب', 'لپ', 'لگن', 'لثه', 'لوزه'],
            'clothes' => ['لامبادا', 'لگ'],
            'celebrities' => ['لورل و ھاردی', 'لیونل مسی', 'لوتر', 'لیلی کالینز', 'لیدی گاگا', 'لوتار ماتئوس', 'لعیا زنگنه', 'لیندا کیانی', 'لئوناردو داوینچی', 'لی یونگ آئه', 'لویی پاستور', 'لیلا اوتادی', 'لالیسا مانوبان'],
            'sport' => ['لژ سواری'],
            'movie' => ['لیلی با من است', 'لونه زنبور', 'لیلا', 'لورل و ھاردی', 'لاتاری', 'لانتوری', 'لاک قرمز', 'لازانیا', 'لس انجلس تهران', 'لروکس', 'لژیونر'],
            'cartoon' => ['لوک خوش شانس', 'لاک پشت های نینجا', 'لگو لیگ عدالت', 'لگو فلش', 'لگو نینجاگو', 'لگو بتمن', 'لیدی باگ', 'لونی تنز'],
        ],
        'م' => [
            'first_name' => ['مھدی', 'مجتبی', 'میکاییل', 'مبینا', 'مھدیه', 'ملیکا', 'مھرسنا', 'مھرنوش', 'مھسا', 'مرجان', 'مروارید', 'ماھان', 'منوچھر', 'مبین', 'مھدیه', 'مینا', 'مانی', 'محمد', 'مھتاب', 'مریم'],
            'last_name' => ['مرحبایی', 'منوچھری', 'میناییمحمدی', 'مھدوی', 'محبی', 'مھربانی'],
            'city' => ['مسکو', 'مشھد', 'مازندران', 'مرند', 'مکه', 'مدینه'],
            'country' => ['مقدونیه شمالی', 'مالزی', 'مکزیک', 'مصر', 'مالی', 'مالت', 'مجارستان'],
            'fruit' => ['ملون', 'موز'],
            'food' => ['میگو', 'ماکارونی', 'مرصع پلو', 'ماھی'],
            'color' => ['مھتابی', 'مشکی', 'میشی'],
            'animal' => ['مورچه', 'موش', 'مار', 'میمون', 'مگس', 'مارمولک'],
            'car' => ['میتسوبیشی', 'ماتیز', 'مزدا', 'مک لارن'],
            'object' => ['منگنه', 'میخ', 'میز'],
            'flower' => ['مریم', 'میمون', 'محمدی'],
            'job' => ['مربا فروش', 'میوه فروش', 'مکانیک', 'مغازه دار'],
            'organ' => ['مخچه', 'معده', 'مو', 'مری'],
            'clothes' => ['مانتو—مقنعه'],
            'celebrities' => ['محمد صلاح', 'مولوی', 'مولانا'],
            'sport' => ['موی تای'],
            'movie' => ['مرد عنکبوتی', 'ملی و راه ھای نرفته اش', 'مھتاب دل', 'مرد آهنی'],
            'cartoon' => ['مردعنکبوتی'],
        ],
        'ن' => [
            'first_name' => ['نیکا', 'نرگس', 'نیما', 'نادر', 'ندا', 'ناصر', 'نوروز', 'ناهید', 'نادیا', 'نوید', 'نصرت', 'نیوشا', 'نیروانا', 'نفس', 'نگین', 'نیلا', 'نیاز', 'نگار', 'نریمان', 'نیایش', 'نسرین', 'نیلوفر', 'نوشین', 'نعمت', 'نرجس', 'نورگل', 'نازنین', 'نازی', 'نارگل', 'ناتاشا', 'نجمه', 'نهال', 'نسیم', 'نجم الدین'],
            'last_name' => ['نظری', 'نادری', 'نوروزی', 'نجفی', 'نصرالهی', 'نوری', 'نساجیان', 'نبوی', 'نظرپور', 'نجارزادگان', 'نورایی', 'نریمانی', 'نوربخش', 'نوبخت', 'ناطق', 'ناذعلی', 'نکیسا', 'نوذری'],
            'city' => ['نورآباد', 'نھاوند', 'نظر آباد', 'نی ریز', 'نطنز', 'نیشابور', 'نقده', 'نقاب', 'نور', 'نو شهر', 'نجف آباد', 'نهبندان'],
            'country' => ['نیجریه', 'نروژ', 'نپال', 'نیکاراگوئه', 'نیوزلند', 'نامیبیا', 'نائورو'],
            'fruit' => ['نارگیل', 'نارنگی', 'نارنج'],
            'food' => ['نرگسی', 'نخود پلو', 'نیمرو', 'ناگت مرغ', 'نودلا'],
            'color' => ['نقره ای', 'نیلی', 'نارنجی', 'نوک مدادی'],
            'animal' => ['نھنگ', 'نیزه ماهی', 'نوک اردکی'],
            'car' => ['نفت کش', 'نیسان'],
            'object' => ['نلبکی', 'نمکدان', 'نردبان', 'نوک مداد', 'نخ'],
            'flower' => ['نگونسار', 'نرگس', 'نیلوفر'],
            'job' => ['نقاش', 'نانوا', 'نجار'],
            'organ' => ['نخاع', 'نای', 'ناف', 'ناخون', 'نیپل'],
            'clothes' => ['نیم تنه', 'نافبند'],
            'celebrities' => ['نلسون ماندلا', 'نظامی', 'ناصر خسرو', 'نیما یوشیج', 'نیمار', 'نسرین نصرتی', 'نیما نکیسا', 'نیکول کیدمن'],
            'sport' => ['نینجا رنجر', 'نینجوتسو'],
            'movie' => ['نھنگ آزاد', 'نھنگ انبر', 'نھنگ آبی', 'نارسیس', 'نارنیا'],
            'cartoon' => ['نیک و نیکو', 'نگهبانان قصه ها', 'نورمن', 'نبرد با تایتان ها'],
        ],
        'و' => [
            'first_name' => ['ولی', 'وحید', 'وجیھه', 'ودود', 'ویدا', 'واحد', 'وحیده', 'وانیا', 'وسام', 'ویشکا', 'ویکتوریا', 'ونوس', 'وفا', 'ویانا'],
            'last_name' => ['والی', 'وثوقی', 'وحیدی', 'ویسی', 'ورمقانی', 'وفایی', 'ورمزیار', 'وکیلی', 'ونایی', 'ورقایی', 'والی زاده', 'وطن پرست', 'وزیری'],
            'city' => ['ورزنه', 'ورامین', 'والنسیا', 'وان', 'ویکتوریا', 'وستهام', 'ونیز', 'وین', 'واشینگتن', 'ووهان چین', 'ونکوور'],
            'country' => ['ونزوئلا', 'ویتنام', 'ولز', 'واتیکان', 'وانواتو'],
            'fruit' => ['ولیک', 'وانیل'],
            'food' => ['والک پلو', 'واویشکا', 'ورکوآز'],
            'color' => ['وانیلی', 'ونگه'],
            'animal' => ['وال', 'وزغ', 'وشم بزرگ', 'وشق'],
            'car' => ['ولوو', 'وانت', 'والستر', 'ورنا', 'ون'],
            'object' => ['وان', 'وردنه', 'واکس', 'وزنه'],
            'flower' => ['ونوس', 'ونوشه'],
            'job' => ['واکسی', 'ورزشکار', 'وکیل', 'ویراستار'],
            'organ' => ['واژن', 'وین', 'ورید', 'وزیکول'],
            'clothes' => ['ورزشی'],
            'celebrities' => ['ویلیام جیمز', 'ویکتور ھوگو', 'ولتر', 'ونگوک', 'واینالددوم', 'والت دیزنی'],
            'sport' => ['واترپلو', 'والیبال', 'ووشو', 'وزنه برداری'],
            'movie' => ['ورود آقایان ممنوع', 'والت قبل میکی', 'وارثان', 'ونوم', 'وانتافه', 'ونزدی'],
            'cartoon' => ['وروجک', 'واتو واتو', 'وودی دارکوب', 'ویکی و مردان پر زور', 'ویلی گنجشکه', 'وقت ماجراجویی'],
        ],
        'ه' => [
            'first_name' => ['ھلیا', 'هھدی', 'هاشم', 'هادی'],
            'last_name' => ['ھاشمی', 'ھرمزی'],
            'city' => ['ھنگ کنگ', 'ھرمزگان', 'ھمدان'],
            'country' => ['ھلند', 'ھند'],
            'fruit' => ['ھندوانه', 'ھلو'],
            'food' => ['ھویج پلو', 'ھمبرگر'],
            'color' => ['ھلویی'],
            'animal' => ['ھدھد'],
            'car' => ['ھیوندای', 'ھیلمن'],
            'object' => ['ھاون'],
            'flower' => ['ھمیشه بھار'],
            'job' => ['ھندوانه فروش'],
            'organ' => ['ھیپوفیز'],
            'clothes' => ['ھد'],
            'celebrities' => ['ھمر', 'ھیچکاک'],
            'sport' => ['ھاکی روی یخ'],
            'movie' => ['ھشت یار اوشن', 'ھمسفر'],
            'cartoon' => ['ھتل ترانسیلوانیا'],
        ],
        'ی' => [
            'first_name' => ['یاس', 'یاسمن', 'یاسر', 'یلدا'],
            'last_name' => ['یحیی آبادی', 'یاسینی', 'یادگاری'],
            'city' => ['یمن', 'یوگسلاوی', 'یونان'],
            'country' => ['یزد', 'یاسوج'],
            'fruit' => ['یافا'],
            'food' => ['یتیمچه'],
            'color' => ['یاسی', 'یشمی'],
            'animal' => ['یوزپلنگ'],
            'car' => ['یاریس', 'یاماھا'],
            'object' => ['یخچال', 'یقه', 'یراق'],
            'flower' => ['یاسمن', 'یاس', 'یاقوت'],
            'job' => ['یدک فروش', 'یخ فروش'],
            'organ' => ['یاخته(سلول)', 'یال ( گردن )'],
            'clothes' => ['یقه'],
            'celebrities' => ['یوسین بولت', 'یوگنی', 'یاس (شاعر قرن)'],
            'sport' => ['یوگا'],
            'movie' => ['یوسف پیامبر', 'یانگوم'],
            'cartoon' => ['یوسف در سرزمین اسم ھا'],
        ]
    ];

    public function __construct()
    {
        if (! isset($_REQUEST['letter'])) {
            unset($this->baseAPI['result']);
            http_response_code(400);
            $this->baseAPI['error'] = "لطفا 'حرف' خود را با متد گت یا پست و با پارامتر 'letter' بفرستید";
        }
        elseif (isset($_REQUEST['letter']) and $_REQUEST['letter'] == '') {
            unset($this->baseAPI['result']);
            http_response_code(400);
            $this->baseAPI['error'] = "لطفا 'حرف' خود را خالی نفرستید";
        }
        elseif ((isset($_REQUEST['letter']) and mb_strlen($_REQUEST['letter']) > 1) or (isset($_REQUEST['letter']) and ! isset($this->cheats[$_REQUEST['letter']]))) {
            unset($this->baseAPI['result']);
            http_response_code(400);
            $this->baseAPI['error'] = "لطفا 'حرف' خود را به درستی وارد نمائید";
        }
        else {
            $this->baseAPI['ok'] = true;
            $this->baseAPI['status'] = 200;
            http_response_code(200);
            $letter = $_REQUEST['letter'];
            if (is_string($this->cheats[$letter])) {
                $this->baseAPI['result'] = $this->cheats[$this->cheats[$letter]];
            }
            elseif (is_array($this->cheats[$letter])) {
                $this->baseAPI['result'] = $this->cheats[$letter];
            }
        }
    }

    public function __toString(): string
    {
        header("Content-Type: application/json");
        return json_encode($this->baseAPI);
    }
}
echo new Cheat;