-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Hazırlanma Vaxtı: 24 Okt, 2021 saat 19:22
-- Server versiyası: 10.4.19-MariaDB
-- PHP Versiyası: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `genius_db`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_description` text NOT NULL,
  `about_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `about`
--

INSERT INTO `about` (`about_id`, `about_title`, `about_description`, `about_img`) VALUES
(24, 'HAQQIMIZDA', '<p><strong>BAKI TƏDRIS MƏRKƏZİ </strong>25 Yanvar 2009-cu ildən fəaliyyətə başlayıb və bu gün də müasirlik, peşəkarlıq və keyfiyyəti əsas tutaraq təhsildə və digər xidmətlərində yenilikləri tətbiq edən, operativliyi, dəqiqliyi əsas götürən bir şirkətdir. </p><p><strong>Missiyamız</strong></p><p><strong>“BAKI TƏDRIS MƏRKƏZİ” MMC</strong>-nin missiyası optimal müasir texnologiyanı tətbiq etməklə dünyadakı yenilikləri izləyərək onlardan səmərəli şəkildə istifadə etmək və bunun əsasında beynəlxalq standartlara uyğun bir sistem qurmaqdır.</p><p><strong>Hədəfimiz</strong></p><p>Bizim hədəfimiz Azərbaycan Respublikasında müştərilərimizin müasir avadanlıqlar, yüksək keyfiyyətli məhsul və xidmətlərlə təmin olunmalarına yardım edən aparıcı bir şirkət qurulmasıdır. Bizim hər bir müştərimiz professional və keyfiyyətli təhsil və xidmətlərlə təmin ediləcəyinə əmin ola bilər.</p>', 'download.jpeg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(50) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_password`, `a_name`, `a_img`) VALUES
(14, 'turxan', '202cb962ac59075b964b07152d234b70', 'Turxan Memmedov', 'bmw_.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_subject` varchar(255) NOT NULL,
  `c_message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `description` text NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `teacher`, `images`, `date`, `status`) VALUES
(81, 'Turxan Memmedov', '<h4><i><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</i></h4><h2><strong>Why do we use it?</strong></h2><ol><li><strong>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</strong></li></ol><p><br>&nbsp;</p>', '14', '41996_n6yopflrVq6MT31T1HvubQ.jpg', '2021-08-30', 'Passive'),
(83, 'Fox News', '<h2><strong>Pentagon takes heat for evacuating \'a couple hundred\' Americans out of 6K total people from Kabul</strong></h2><ol><li><strong>The Pentagon is taking heat for saying that a \"couple hundred American citizens\" were boarded onto planes out of&nbsp;Afghanistan,&nbsp;while the flights overall carried nearly 6,000 passengers.&nbsp;</strong></li><li><i>\"Why in the world is this administration not making sure every single American gets out first?\" Newsweek opinion editor Josh Hammer tweeted, following a press briefing from&nbsp;Maj. Gen. Hank Taylor, vice director for logistics of the Joint Staff.&nbsp;</i></li><li><i>As of 3:00 a.m. EST on Friday, \"16 C-17s and one C-130 departed Kabul. These flights contain nearly 6,000 passengers, including a couple hundred American citizens,\" Taylor said Friday.&nbsp;</i></li></ol>', '14', 'boy.jpg', '2021-09-06', 'Passive'),
(89, 'qwqw', '<p>qwqw</p>', '14', '71SlzpajFyL__AC_SL1500_3.jpg', '2021-08-31', 'Active'),
(97, 'Ingilis Dili', '<p> <strong>Bakı Tədris Mərkəzi </strong>İngilis dilini Beynəlxalq standartlar əsasında öyrənmək istəyənləri, dil üzrə əsas bacarıqlarını, Danışıq, Dinləmə, Yazma və Oxuma, Qramatika və Söz Ehtiyyatını artırmağı (Reading, Writing, Listening, Speaking, Grammar, Vocabulary) hədəfləyən hər kəsi kurslarımızdan faydalanmağa dəvət edir.</p><p>Proqrama əsasən həftədə 3 saat dərs (seçim əsasında həftədə 2 dəfə, hər dərs 1 saat yarım və ya həftədə 3 dəfə, hər dərs 1 saat) və əlavə olaraq 3 saat da Ünsiyyət Klubları (Conversation & Speaking Clubs) təşkil olunur. Dərslər fərdi və ya qrupda olmaqla tədris olunur. Həmçinin korporativ müştərin ofisində də dərslərin təşkili mümkündür.</p><p><strong>Kursun Proqramı 6 səviyyədən ibarətdir:</strong></p><p><strong>1. Başlanğıc Səviyyə (Beginner level)</strong><br><strong>2. Elementar Səviyyə (Elementary level)</strong><br><strong>3. Aşağı Orta Səviyyə (Pre-Intermediate level)</strong><br><strong>4. Orta Səviyyə (Intermediate level)</strong><br><strong>5. Yüksək orta Səviyyə (Upper Intermediate level)</strong><br><strong>6. Mükəmməl səviyyə (Advanced level)</strong></p><p>Hər səviyyənin proqramı 1 ay yarım olsa da, tələbənin dil öyrənmə qabiliyyətindən və bu dili öyrənmək üçün ayıracağı vaxtdan asılı olaraq bu müddət 1 ay ola, bəzən 2 ayadək davam edə bilər.<br>Müəllimlərimiz müxtəlif xarici və yerli Universitetlərin məzunları (ingilis dili ixtisaslı) olmaqla yanaşı, CELTA, TОEFL, İELTS və s. Beynəlxalq sertifikatlara malik təcrübəli mütəxəssislərdi.</p><p>Ümumi ingilis dili kurslarından əlavə müxtəlif ixtisaslar, peşələr üzrə ixtisaslaşdırılmış ingilis dili kurslarını da təşkil edirik.</p>', '19', 'learn-english3.jpg', '2021-10-29', 'Active'),
(98, 'Rus Dili', '<p><strong>Bakı Tədris Mərkəzi </strong> arzu edən hər kəsə ən yeni metodika və Beynəlxalq səviyyədə istifadə olunan tədris vəsaitləri ilə rus dilinini qısa müddətə öyrənmək imkanı yaradır.</p><p>Biz xüsusi Rus dili tədris proqramı ilə həm tədris baxımından, həm də istifadə etdiyimiz ədəbiyyatlarla keyfiyyətli xidmətimizlə fərqlənirik.</p><p>İstifade etdiyimiz xüsusi proqram sizin Rus dili biliyinizi qısa müddətdə inkişaf etidirməyiniz üçün bir stimul olacaq!</p><p> </p><p> </p><p> </p><p><strong>Kursun Proqramı 6 səviyyədən ibarətdir:</strong></p><p><strong>1. A1 – ЭЛЕМЕНТАРНЫЙ УРОВЕНЬ </strong></p><p><strong>2. A2 –  ПРЕДПОРОГОВЫЙ (БАЗОВЫЙ) УРОВЕНЬ</strong></p><p><strong>3. B1 – ПОРОГОВЫЙ УРОВЕНЬ</strong></p><p><strong>4. B2 - ПОСТПОРОГОВЫЙ УРОВЕНЬ</strong></p><p><strong>5. C1 – УРОВЕНЬ КОМПЕТЕНТНОГО ВЛАДЕНИЯ</strong></p><p><strong>6. C2 –  УРОВЕНЬ НОСИТЕЛЯ ЯЗЫКА</strong></p><p>Hər səviyyənin proqramı 2 ay olsa da, tələbənin dil öyrənmə qabiliyyətindən və bu dili öyrənmək üçün ayıracağı vaxtdan asılı olaraq bu müddət arta və ya azala bilir.</p><p>Proqrama əsasən həftədə 3 saat dərs və əlavə olaraq 1 saat da Ünsiyyət Klubu təşkil olunur. Dərslər fərdi və ya qrupda olmaqla müştərinin ofisində və ya bizim tədris mərkəzimizdə keçirilir.</p><p>QEYD: Dərslər rus dili müəllimliyi üzrə təhsil almış peşakar müəllimlər, rus dilinin müasir metodlarla öyrədilməsi üzrə müxtəlif elmi məqalələrin müəllifləri tərəfindən tədris olunur</p>', '15', 'russian.jpg', '2021-11-05', 'Active'),
(99, 'Alman Dili', '<p><strong>Bakı Tədris Mərkəzi </strong>arzu edən hər kəsi ALMAN Dilini ən mükəmməl səviyyədə öyrənməyə dəvət edir! <br>Əgər Siz də Almanca danışıq dilini mükəmməl şəkildə mənimsəyərək, hər hansı bir almanla qarşılaşanda onu səlis nitqinizlə təəccübləndirmək, bununla yanaşı almanca qəzetləri, radionu, televiziya verilişlərini ana dilimizdəki kimi tam anlamaq istəyirsinizsə bu zaman biz sizə xidmət göstərməyə şad olarıq!</p><p>Kursda Alman dilinin tədrisi A1 səviyyəsindən başlayaraq C1 səviyyəsi daxil olmaqla təşkil olunur. Dərslər istəkdən asılı olaraq fərdi və kiçik qruplarda olmaqla həftədə 2 dəfə hər dərs 1 saat yarım və ya həftədə 3 dəfə, hər dərs 1 saat olmaqla tədris olunur.</p><p>Kurslar ən müasir metodikalardan istifadə etməklə xüsusi proqramlar və CD/DVD materiallar əsasında keçirilir. Proqram seçilərkən tələbənin başlanğıc bilik səviyyəsi, sərbəst vaxtı və dili öyrənməkdə məqsədi nəzərə alınır. Məşğələlər tələbənin seçiminə əsasən fərdi və kiçik qruplar şəklində keçirilir.</p><p><strong>Alman dili ümumilikdə 6 səviyyədən ibarətdir:</strong></p><p><strong>A 1 səviyyəsində</strong></p><p><strong>Siz müəyyən istəklərinizi dilə gətirmək üçün tanış ifadə və cümlələri, gündəlik həyatda işlənən sözləri başa düşür və tələffüz edə bilirsiz. Özünüzü və başqalarını təqdim edə, digər şəxslərə özləri haqqında suallar verə və buna oxşar sualları da cavablandıra bilirsiniz. Ünsiyyətdə olduğunuz şəxs yavaş və aydın danışırsa, siz onunla sadə şəkildə fikir mübadiləsi aparırsınız.</strong></p><p><strong>A 2 səviyyəsində</strong></p><p><strong>Gündəlik həyatda işlənən cümlələri (məs.: şəxsin özü və ailəsi barəsində, alış-veriş və işlə bağlı məlumatları və s.) və ifadələri anlayırsınız. Sadə dildə ifadə olunan müəyyən mövzulara dair məlumatları çatdırmaq, özünüz, təhsiliniz, yaxınlarınız haqqında danışmaq, başqalarına sual vermək bacarığına malik olursuz.</strong></p><p><strong>B 1 səviyyəsində</strong></p><p><strong>Siz iş, təhsil və asudə vaxt kimi tanış mövzularda olan aydın danışıqları və sadə ədəbi dildə olan mətnin məzmununu anlayırsınız. Alman dilli ölkələrə səyahətlə bağlı müxtəlif vəziyyətlərdə fikrinizi ifadə edə bilir, Sizi maraqlandıran müxtəlif, tanış mövzularda olan məlumatları sadə şəkildə açıqlayırsınız. Arzu, təcrübə, məqsəd və ümidlərinizi, baş verənləri təsvir edə bilir, öz fikrinizi və gələcək planlarınızı paylaşır və onları əsaslandırırsınız.</strong></p><p><strong>B 2 səviyyəsində</strong></p><p><strong>Mücərrəd və konkret mövzularda olan çətin mətnlərin və müzakirələrin əsas məzmununu anlayırsınız. Dil daşıyıcıları ilə ünsiyyətdə çətinlik çəkmədən kifayət qədər sərbəst danışırsınız. Geniş mövzu çərçivəsində aydın və dəqiq məlumat vermək, problemə öz nöqteyi-nəzərinizi açıqlamaq, müxtəlif variantların üstün və çatışmayan cəhətlərini təsvir etmək qabiliyyətinə maliksiniz.</strong></p><p><strong>C 1 səviyyəsində</strong></p><p><strong>Müxtəlif mövzularda geniş və çətin mətnləri anlayır və gizli məntiqi mənaları anlaya bilirsiniz. Söz və ifadə seçimində çətinlik çəkmədən, kifayət qədər tez və sərbəst danışırsınız. Dili təhsildə və professional fəaliyyətdə effektiv və düzgün istifadə edirsiniz. Mətnin qurulması üçün lazım olan müxtəlif strukturlardan istifadə edərək çətin mövzularda aydın, dəqiq və məntiqi fikir söyləyirsiniz.</strong></p><p><strong>C 2 səviyyəsində</strong></p><p><strong>Demək olar ki, eşidilən və yazılan hər cür məlumatı anlayırsınız. Deyilən və yazılan bir neçə mənbəyə əsaslanaraq məntiqli mətnlər qurur və fikir söyləyərkən mövzuya aid əsaslandırmalar və açıqlamalar söyləyirsiniz. Çətin mövzularda düşünmədən, yüksək dəqiqlik və səlistliklə, məna çalarlarını qeyd edərək danışırsınız.</strong></p><p>Hər bir səviyyəni bitirdikdən sonra tələbələr həmin səviyyəyə uyğun yazıb-oxumağı və səlis danışmağı öyrənirlər.</p>', '19', 'german.jpg', '2021-10-29', 'Active'),
(100, 'Fransız Dili', '<p><strong>Bakı Tədris Mərkəzi </strong>FRANSIZ dilində mükəmməl danışmaq, yazmaq, oxumaq, dinləmək bacarığına yiyələnmək istəyən hər kəsi fərdi və kiçik qruplarda (2-4 nəfər iştirakçı) olmaqla tədris olunan kurslarda iştiraka dəvət edir.</p><p><strong>Kursun Proqramı 6 səviyyədən ibarətdir:</strong></p><p><strong>1. A1 – Başlanğıc Səviyyə</strong><br><strong>2. A2 –  Elementar Səviyyə</strong><br><strong>3. B1 – Aşağı Orta Səviyyə</strong><br><strong>4. B2 - Orta Səviyyə</strong><br><strong>5. C1 – Yüksək orta Səviyyə</strong><br><strong>6. C2 – Mükəmməl səviyyə</strong></p><p>Hər səviyyənin proqramı 2 ay olsa da, tələbənin dil öyrənmə qabiliyyətindən və bu dili öyrənmək üçün ayıracağı vaxtdan asılı olaraq bu müddət arta və ya azala bilir<br>.<br>Proqrama əsasən dərslər həftədə 3 dəfə, hər dərs 1 saat və ya həftədə 2 dəfə hər dərs 1 saat yarım olmaqla təşkil olunur.</p><p>QEYD: Dərslər fransız dili müəllimliyi üzrə təhsil almış, bu sahə üzrə 5 ildən çox iş təcrübəsi olan peşakar müəllimlər tərəfindən tədris olunur.</p>', '15', 'french.jpg', '2021-10-27', 'Active'),
(102, 'TOEFL & IELTS Hazırlıqı', '<p><strong>Bakı Tədris Mərkəzi  </strong>ingilis dilinin istifadə olunduğu ölkələrdə təhsil almaq və ya işləmək istəyənləri İELTS, TOEFL, GRE, GMAT və SAT (verbal & math) kurslarına dəvət edir!</p><p>- IELTS (The International English Language Testing System)</p><p>IELTS imtahanı ingilis dili biliyinin beynəlxalq səviyyədə yoxlanılması –dil biliyi səviyyəsini təsdiq etmək üçün işlənib hazırlanmış qiymətləndirmə sistemidir. IELTS testi bütün dil vərdişlərini yoxlayır – dilin başa düşülməsi, danışıq dili, oxu və yazı. Oxumaq və yazmaq üçün tapşırıqlar “Akademik” təhsil modulu və “Ümumi təyinat” modulu arasında seçim zərurətini nəzərdə tutur.</p><p>- TOEFL (Test of English as a Foreign Language)</p><p>TOEFL testi ABŞ, yaxud Kanada ali təhsil ocaqlarında oxumağa hazırlaşan, MBA proqramlarına daxil olmaq istəyən şəxslər, və işəgötürənlərin TOEFL üzrə biliyi məcburi işəgötürmə şərti kimi irəli sürülən şəxslər üçün nəzərdə tutulmuşdur.</p>', '15', 'toefl-ielts.jpg', '2021-10-25', 'Active'),
(103, 'Məktəbəqədər və Litseylərə Hazırlıq', '<ol><li>Təfəkkürün inkişaf səviyyəsi ✓</li><li>Ümumi dünyagörüşünün səviyyəsi</li><li>✓ Yaradıcı potensialı</li></ol><ul><li>✓ Şəxsi və emosional yetkinlik sabitliyi Göstərilən meyarlara sahib olan uşaqlar litseylərə qəbul olurlar . Biz sizin övladlarınızda bu xüsusiyyətləri formalaşdıracağıq və onları uğura gedən yola istiqamətləndirəcəyik</li></ul><p>Həyatda ən böyük şans: Kiçikkən yaxşı bir müəllimə rast gəlməkdir.</p><p> Uşaqların məktəbəqədər hazırlığı:</p><p>* Riyazi rəqəmlərlə tanışlıq</p><p>* Əlifba - yazı vərdişlərinin aşılanması</p><p>* Əmək vərdişlərinin aşılanması</p><p>* Məntiqi oyunların təşkili</p><p>* Ümumi dünyagörüşü təsəvvürlərinin inkişafı</p><p> </p><p> Həmçinin uşaqlar üçün psixoloji dərslər də tədris olunur.</p><p>* İnkişafetdirici məşğələlər</p><p>* Məntiqi təfəkkürün inkşafı</p><p>* Məktəbəqədər hazırlıq</p><p>* Psixi proseslərin korreksiyası (diqqət, hafizə, qavrayış, təfəkkür, təxəyyül və nitq)</p><p> Artıq mərkəzimizdə körpə yaşlarından öz ana dilləri kimi \"xarici dili\" öyrənməkdə var Bağçaya getmədən, həftənin 5 günü , 2 saat olmaqla  ABC proqram vasitəsi ilə ingilis dilində danışmaq imkanı Əyləncəli və qrup şəklində. </p>', '15', 'istockphoto-1135473872-612x612.jpg', '2021-10-25', 'Active'),
(104, 'Psixoloji İnkişafın Təsiri', '<ol><li>Fərdi psixoloji konsultasiya</li><li>Uşaqlarla psixoloji is</li><li>Davranış pozuntusu</li><li>Uşaq qorxuları Komplekslər</li></ol><p>Özünəinamın qazandırılması<br><strong>                                                  Autizm , Daun , Psixi inkişafın ləngiməsi , Mutizm HİPERAKTİVLİK</strong></p><ol><li>Dərslərdə fəallığın artırılması </li><li>✅ Diqqət dağınıqlığının korreksiyası </li><li>✓ Fəallığın artırılması ( özgüvənin inkişafı )</li><li> ✓ Yaddaşın möhkəmləndirilməsi </li><li>Abituriyentlərə psixoloji dəstək</li><li> Psixoloji seminarların təşkili </li><li>✓ Loqoped </li><li>✓ Defektoloq</li></ol><p>Ümumiyyətlə, müəllim və tərbiyəçilər yaxşı bilirlər ki, psixi inkişafda ləngiməsi olan uşaqlarda iradiliyin tərbiyəsi çox vaxt və səbr tələb edən bir prosesdir. İradiliyi məktəbəqədər yaş dövründən tərbiyələndirmək lazımdır: uşaqa istədiyini deyil, zəruri işi yerinə yetirmək üçün oyundan, stimul – motivlərdən və s. üsullardan istifadə etmək məqsədə uyğundur.Qeyd edək ki, PİL-in korreksiyasının əsasında psixoloq, loqoped, həkim, müəllim – defektoloq və b. fəal iştirakını nəzərdə tutan çoxşahəli yanaşma durur. Bundan başqa, valideynlərin də öz uşaqlarına düzgün yanaşması belə uşaqların ünsiyyətli, emosional cəhətdən sağlam böyümələrinə kömək edir.İnklüziv təhsilə istiqamətlənmiş və bu sahədə xeyli işlər görülən vaxtda korreksion təhsilin bu probleminin həlli vaxtı gəlib çatmışdır. Bu problemin həlli Təhsil, Səhiyyə və Əhalinin sosial təminat nazirliklərinin koordinasiya olunmuş fəaliyyətini tələb edir.Məqalənin elmi yeniliyi. Məqalədə kiçik məktəbəqədəryaşlı uşaqlarda psixi inkişafın ləngiməsi və ona xas olan təzahürlər araşdırılıb və qeyd olunub ki, erkən diaqnostika və çoxşahəli yanaşma bu problemin həllində vacib rol oynayır.</p>', '19', 'childhelp.jpeg', '2021-10-31', 'Active'),
(105, 'Wep Proqramlaşdırma', '<h2><i><strong>Niyə </strong></i><strong>Bakı Tədris Mərkəzin</strong><i><strong>-də Proqramlaşdırma təhsili?</strong></i></h2><p> </p><blockquote><p><strong>Bakı Tədris Mərkəzin</strong><i><strong>-də</strong></i> keçirilən Proqramlaşdırma üzrə tədris proqramı sektorun ehtiyaclarını nəzərə alaraq hazırlanmışdır. Təhsilin 85%-i praktiki iş üzərində qurulmuşdur. Məqsəd sadəcə Proqramlaşdırmanın incəliklərini öyrətmək deyil, eyni zamanda müəssisələrin veb proqramlaşdırmaya olan ehtiyaclarını professional şəkildə qarşılayacaq mütəxəssislər yetişdirməkdir.<br><br>Code Academy-nin Zəmanətli Təhsil Modeli ilə hər bir tələbəyə təhsilini təkrarlama imkanı verilir. Mövzuların praktiki tətbiqinin dərhal həyata keçirilməsi üçün hər bir tələbə sinifdaxili kompüterlərlə təmin olunur. Tələbələrin Veb Proqramlaşdırma təhsili boyunca öyrəndiklərini təkrar etmələrini və gücləndirmələrini təmin etmək məqsədilə tədris proqramı Code Academy-nin özünəməxsus Mentor Sistemi ilə təkmilləşdirilmişdir.</p></blockquote><h4><strong>Kim iştirak edə bilər?</strong></h4><blockquote><p>Ali təhsil sistemindən fərqli olaraq Veb Proqramlaşdırma təhsili almaq üçün riyaziyyat və ya mühəndislik kimi mövzular barədə öncədən məlumatlı olmaq vacib deyil. Tədris proqramına qatılan tələbələrin gələcəkdə mütəxəssis proqramçı olmaq üçün istəkli olmaları kifayətdir. İngilis dili və Veb Proqramlaşdırma barəsindəki baza bilik çatışmazlığı təhsilin ilk aylarında aradan qaldırılır.</p><p><strong>Bakı Tədris Mərkəzi</strong> aşağıdakı WEB proqramlaşdırma  dərslərinə növbəti tələbə qəbulu elan edir:</p><p>- HTML</p><p>- CSS</p><p>- BOOTSTRAP 3</p><p> BOOTSTRAP 4</p><p> BOOTSTRAP 5</p><p>- JavaScript</p><p>- PHP</p><p>-CODEİGNİTER 3</p><p>- MySQL</p><p>Dərslər fərdi və qruplar şəklində  olmaqla tədris olunur.Proqramın müddəti 3 ay nəzərdə tutulub.</p></blockquote>', '15', 'develop-website-using-php-html-css-js-jquery-with-codeigniter.jpeg', '2021-10-28', 'Active');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `social_video`
--

CREATE TABLE `social_video` (
  `s_id` int(11) NOT NULL,
  `s_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `social_video`
--

INSERT INTO `social_video` (`s_id`, `s_video`) VALUES
(35, 'https://www.youtube.com/watch?v=60ItHLz5WEA');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `teacher_list`
--

CREATE TABLE `teacher_list` (
  `teacher_list_id` int(11) NOT NULL,
  `teacher_list_name` varchar(255) NOT NULL,
  `teacher_list_surname` varchar(255) NOT NULL,
  `teacher_list_profession` varchar(255) NOT NULL,
  `teacher_list_img` varchar(255) NOT NULL,
  `teacher_list_info` longtext NOT NULL,
  `t_fb` varchar(255) NOT NULL,
  `t_wp` varchar(255) NOT NULL,
  `t_ins` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `teacher_list`
--

INSERT INTO `teacher_list` (`teacher_list_id`, `teacher_list_name`, `teacher_list_surname`, `teacher_list_profession`, `teacher_list_img`, `teacher_list_info`, `t_fb`, `t_wp`, `t_ins`) VALUES
(15, 'Turxan ', 'Eliyev', 'Java proqramlasdirma', 'childbook.jpg', '<p>Usually i like to get my r<strong>esult as object thats why i use result mostly. But i want to know which is the better approach that i should follow, Which one of them is more efficient to use in regards to performance? Here is the Example i am talking abo</strong></p>', '', '', 'https://www.instagram.com/'),
(19, 'Mehemmedo ', 'Memmedov', 'developer', 'bodybuilder-weight-training-stress-38630.jpeg', '<h2><strong>What is Lorem Ipsum?</strong></h2><p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</strong></p><h2><i>Why do we use it?</i></h2><p><i>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</i></p><p><br> </p><h2>Where does it come from?</h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Cədvəl üçün indekslər `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Cədvəl üçün indekslər `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Cədvəl üçün indekslər `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Cədvəl üçün indekslər `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `social_video`
--
ALTER TABLE `social_video`
  ADD PRIMARY KEY (`s_id`);

--
-- Cədvəl üçün indekslər `teacher_list`
--
ALTER TABLE `teacher_list`
  ADD PRIMARY KEY (`teacher_list_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Cədvəl üçün AUTO_INCREMENT `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Cədvəl üçün AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Cədvəl üçün AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Cədvəl üçün AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Cədvəl üçün AUTO_INCREMENT `social_video`
--
ALTER TABLE `social_video`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Cədvəl üçün AUTO_INCREMENT `teacher_list`
--
ALTER TABLE `teacher_list`
  MODIFY `teacher_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
