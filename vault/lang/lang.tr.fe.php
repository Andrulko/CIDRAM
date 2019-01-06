<?php
/**
 * This file is a part of the CIDRAM package.
 * Homepage: https://cidram.github.io/
 *
 * CIDRAM COPYRIGHT 2016 and beyond by Caleb Mazalevskis (Maikuolan).
 *
 * License: GNU/GPLv2
 * @see LICENSE.txt
 *
 * This file: Turkish language data for the front-end (last modified: 2019.01.06).
 */

/** Prevents execution from outside of CIDRAM. */
if (!defined('CIDRAM')) {
    die('[CIDRAM] This should not be accessed directly.');
}

foreach (['IPv4', 'IPv6'] as $CIDRAM['IPvX']) {
    $CIDRAM['Pre'] = 'Normal olarak ana paketle birlikte verilen varsayılan ' . $CIDRAM['IPvX'] . ' imzaları. ';
    $CIDRAM['lang']['Extended Description: ' . $CIDRAM['IPvX']] = $CIDRAM['Pre'] . 'İstenmeyen bulut servislerini ve insan olmayan uç noktaları engeller.';
    $CIDRAM['lang']['Extended Description: ' . $CIDRAM['IPvX'] . '-Bogons'] = $CIDRAM['Pre'] . 'Bogon/martian CIDR\'leri engeller.';
    $CIDRAM['lang']['Extended Description: ' . $CIDRAM['IPvX'] . '-ISPs'] = $CIDRAM['Pre'] . 'Tehlikeli ve spam yapan ISS\'leri engeller.';
    $CIDRAM['lang']['Extended Description: ' . $CIDRAM['IPvX'] . '-Other'] = $CIDRAM['Pre'] . 'Yakınlık/Proxy, VPN ve diğer çeşitli istenmeyen hizmetler için CIDR\'leri engeller.';
    $CIDRAM['Pre'] = $CIDRAM['IPvX'] . ' imzaları dosyası (%s).';
    $CIDRAM['lang']['Name: ' . $CIDRAM['IPvX']] = sprintf($CIDRAM['Pre'], 'istenmeyen bulut servislerini ve insan olmayan bitiş noktaları');
    $CIDRAM['lang']['Name: ' . $CIDRAM['IPvX'] . '-Bogons'] = sprintf($CIDRAM['Pre'], 'Bogon/Martıyen CIDR\'leri');
    $CIDRAM['lang']['Name: ' . $CIDRAM['IPvX'] . '-ISPs'] = sprintf($CIDRAM['Pre'], 'tehlikeli ve spam gönderen ISS\'ler');
    $CIDRAM['lang']['Name: ' . $CIDRAM['IPvX'] . '-Other'] = sprintf($CIDRAM['Pre'], 'yakınlık/proxy, VPN ve diğer çeşitli istenmeyen hizmetler için CIDR\'ler');
}
unset($CIDRAM['Pre'], $CIDRAM['IPvX']);

$CIDRAM['lang']['Extended Description: Bypasses'] = 'Varsayılan imza bypass\'lar, normalde ana paketle birlikte verilir.';
$CIDRAM['lang']['Extended Description: CIDRAM'] = 'Ana paket (hariç imzalar, belgeler, ve yapılandırma).';
$CIDRAM['lang']['Extended Description: Chart.js'] = 'Ön uçların pasta grafikler oluşturmasını sağlar.<br /><a href="https://github.com/chartjs/Chart.js">Chart.js</a>, <a href="https://opensource.org/licenses/MIT">MIT license</a> üzerinden kullanılabilir.';
$CIDRAM['lang']['Extended Description: PHPMailer'] = 'E-posta göndermeyi içeren herhangi bir işlev kullanmak için gereklidir.<br /><a href="https://github.com/PHPMailer/PHPMailer">PHPMailer</a>, <a href="https://github.com/PHPMailer/PHPMailer/blob/master/LICENSE">LGPLv2.1 </a> lisansı üzerinden kullanılabilir.';
$CIDRAM['lang']['Extended Description: module_badhosts.php'] = 'Spam gönderenler, bilgisayar korsanları ve diğer haince varlıklar tarafından sıkça kullanılan ana bilgisayarları engeller.';
$CIDRAM['lang']['Extended Description: module_badhosts_isps.php'] = 'Spam gönderenler, bilgisayar korsanları ve diğer haince varlıklar tarafından sıkça ISP\'lere ait kullanılan ana bilgisayarları engeller.';
$CIDRAM['lang']['Extended Description: module_badtlds.php'] = 'Spam gönderenler, bilgisayar korsanları ve diğer haince varlıklar tarafından sıkça TLD\'lere ait kullanılan ana bilgisayarları engeller.';
$CIDRAM['lang']['Extended Description: module_botua.php'] = 'İstenmeyen botlar ve nefret dolu faaliyetlerle ilişkili kullanıcı aracılarını engeller.';
$CIDRAM['lang']['Extended Description: module_cookies.php'] = 'Tehlikeli çerezlere karşı bazı sınırlı koruma sağlar.';
$CIDRAM['lang']['Extended Description: module_extras.php'] = 'İsteklerde yaygın olarak kullanılan çeşitli saldırı vektörlerine karşı bazı sınırlı koruma sağlar.';
$CIDRAM['lang']['Extended Description: module_sfs.php'] = 'SFS tarafından listelenen IP\'lere karşı kayıt ve oturum açma sayfalarını korur.';
$CIDRAM['lang']['Name: Bypasses'] = 'Varsayılan imza bypass\'lar.';
$CIDRAM['lang']['Name: compat_bunnycdn.php'] = 'BunnyCDN uyumluluk modülü';
$CIDRAM['lang']['Name: module_badhosts.php'] = 'Kötü ana engelleyici modülü';
$CIDRAM['lang']['Name: module_badhosts_isps.php'] = 'Kötü ana engelleyici modülü (ISS\'ler)';
$CIDRAM['lang']['Name: module_badtlds.php'] = 'Kötü TLD engelleyici modülü';
$CIDRAM['lang']['Name: module_baidublocker.php'] = 'Baidu engelleyici modülü';
$CIDRAM['lang']['Name: module_botua.php'] = 'İsteğe bağlı kullanıcı aracıları modülü';
$CIDRAM['lang']['Name: module_cookies.php'] = 'İsteğe bağlı çerez tarayıcı modülü';
$CIDRAM['lang']['Name: module_extras.php'] = 'İsteğe bağlı güvenlik ekstrası modülü';
$CIDRAM['lang']['Name: module_sfs.php'] = 'Stop Forum Spam modülü';
$CIDRAM['lang']['Name: module_ua.php'] = 'Boş UA engelleyici modülü';
$CIDRAM['lang']['Name: module_yandexblocker.php'] = 'Yandex engelleyici modülü';
$CIDRAM['lang']['bNav_home_logout'] = '<a href="?">Ana Sayfa</a> | <a href="?cidram-page=logout">Çıkış</a>';
$CIDRAM['lang']['bNav_logout'] = '<a href="?cidram-page=logout">Çıkış</a>';
$CIDRAM['lang']['config_PHPMailer_Enable2FA'] = 'Bu yönerge, ön uç hesapları için 2FA kullanılıp kullanılmayacağını belirler.';
$CIDRAM['lang']['config_PHPMailer_EventLog'] = 'PHPMailer ile ilgili tüm olayları günlüğe kaydetmek için bir dosya. Dosya adı belirtin veya devre dışı bırakmak için boş bırakın.';
$CIDRAM['lang']['config_PHPMailer_Host'] = 'Giden e-posta için kullanılacak SMTP ana bilgisayarı.';
$CIDRAM['lang']['config_PHPMailer_Password'] = 'SMTP ile e-posta gönderirken kullanılacak şifre.';
$CIDRAM['lang']['config_PHPMailer_Port'] = 'Giden e-posta için kullanılacak bağlantı noktası numarası. Varsayılan = 587.';
$CIDRAM['lang']['config_PHPMailer_SMTPAuth'] = 'Bu yönerge SMTP oturumlarının doğrulanıp onaylanmayacağını belirler (genellikle bunu yalnız bırakmalısın).';
$CIDRAM['lang']['config_PHPMailer_SMTPSecure'] = 'SMTP ile e-posta gönderirken kullanılacak protokol (TLS veya SSL).';
$CIDRAM['lang']['config_PHPMailer_SkipAuthProcess'] = '<code>true</code> olduğunda, PHPMailer normalde SMTP yoluyla e-posta gönderirken oluşan kimlik doğrulama işlemini atlar. Bu işlemin atlanması, giden e-postaları MITM saldırılarına maruz bırakabilir. Bazı durumlarda olsa gerekli olabilir (ör., PHPMailer bir SMTP sunucusuna bağlanamadığında).';
$CIDRAM['lang']['config_PHPMailer_Username'] = 'SMTP ile e-posta gönderirken kullanılacak kullanıcı adı.';
$CIDRAM['lang']['config_PHPMailer_addReplyToAddress'] = 'SMTP ile e-posta gönderirken kullanılacak cevap adresi.';
$CIDRAM['lang']['config_PHPMailer_addReplyToName'] = 'SMTP ile e-posta gönderirken kullanılacak cevap ismi.';
$CIDRAM['lang']['config_PHPMailer_setFromAddress'] = 'SMTP ile e-posta gönderirken kullanılacak gönderen adresi.';
$CIDRAM['lang']['config_PHPMailer_setFromName'] = 'SMTP ile e-posta gönderirken kullanılacak gönderenin adı.';
$CIDRAM['lang']['config_experimental'] = 'Kararsız/Deneysel!';
$CIDRAM['lang']['config_general_FrontEndLog'] = 'Ön uç giriş denemelerini kaydetmek için kullanılan dosya. Dosya adı belirtin veya devre dışı bırakmak için boş bırakın.';
$CIDRAM['lang']['config_general_allow_gethostbyaddr_lookup'] = 'UDP kullanılamadığında gethostbyaddr aramalarına izin verilsin mi? Doğru/True = Evet [Varsayılan]; Yanlış/False = Hayır.';
$CIDRAM['lang']['config_general_ban_override'] = '"infraction_limit" aşıldığında "forbid_on_block"u geçersiz kıl? Geçersiz kılarken: Engellenen istekler boş bir sayfa verir (şablon dosyaları kullanılmaz). 200 = [Varsayılan] değerini geçersiz kılmayın. Diğer değerler "forbid_on_block" için mevcut değerler ile aynıdır.';
$CIDRAM['lang']['config_general_default_algo'] = 'Gelecekteki tüm şifreler ve oturumlar için hangi algoritmayı kullanacağını tanımlar. Options: PASSWORD_DEFAULT (varsayılan), PASSWORD_BCRYPT, PASSWORD_ARGON2I (PHP &gt;= 7.2.0 gerektirir).';
$CIDRAM['lang']['config_general_default_dns'] = 'Ana makine adı aramalarda kullanılacak virgülle ayrılmış DNS sunucuları listesi. Varsayılan = "8.8.8.8,8.8.4.4" (Google DNS). UYARI: Ne yaptığınızı bilmiyorsanız bunu değiştirmeyin!';
$CIDRAM['lang']['config_general_disable_cli'] = 'CLI modunu devre dışı bırak? CLI modu varsayılan olarak etkindir, ancak bazen bazı test araçlarına (örneğin PHPUnit) ve diğer CLI tabanlı uygulamalara müdahale edebilir. CLI modunu devre dışı bırakmanız gerekmiyorsa, bu direktif görmezden almalısınız. False = CLI modunu etkinleştir [Varsayılan]; True = CLI modunu devre dışı bırak.';
$CIDRAM['lang']['config_general_disable_frontend'] = 'Ön uç erişimini devre dışı bırak? Ön uç erişimi CIDRAM\'ın daha yönetilebilir hale getirebilir, ancak potansiyel bir güvenlik riski de oluşturabilir. CIDRAM\'ın mümkün olduğunda arka ucundan yönetmesi önerilir, ancak kolaylık sağlamak için ön uç erişimi sağlanmıştır. İhtiyacınız olmadıkça devre dışı bırakın. False = Ön uç erişimini etkinleştir; True = Ön uç erişimini devre dışı bırak [Varsayılan].';
$CIDRAM['lang']['config_general_disable_webfonts'] = 'Webfontlarını devre dışı bırak? Doğru/True = Evet [Varsayılan]; Yanlış/False = Hayır.';
$CIDRAM['lang']['config_general_emailaddr'] = 'İsterseniz, kullanıcıları engellediğinde verilecek bir e-posta adresi sağlayabilirsiniz, yanlışlıkla engellendikleri zaman destek için sizinle iletişim kurabilmeleri için. UYARI: Burada tedarik ettiğiniz e-posta adresiniz kesinlikle spambotlar ve sıyırıcılar tarafından edinilecektir. Bu nedenle, tek kullanımlık veya önemsiz bir e-posta adresini seçmeniz kesinlikle önerilir (diğer bir deyişle, büyük olasılıkla birincil kişisel veya birincil iş e-posta adreslerinizi kullanmak istemiyorsunuzdur).';
$CIDRAM['lang']['config_general_emailaddr_display_style'] = 'E-posta adresinin kullanıcılara sunulmasını nasıl tercih ederdiniz?';
$CIDRAM['lang']['config_general_empty_fields'] = 'Blok olay bilgilerini kaydederken ve görüntülerken, CIDRAM boş alanları nasıl ele almalıdır? "include" = Boş alanları dahil et. "omit" = Boş alanları atla [varsayılan].';
$CIDRAM['lang']['config_general_forbid_on_block'] = 'İstekleri engellerken hangi HTTP durum iletisinin CIDRAM göndermesi gerekir? (Daha fazla bilgi için belgelere bakın).';
$CIDRAM['lang']['config_general_force_hostname_lookup'] = 'Hostname aramayı zorla? Doğru/True = Evet; Yanlış/False = Hayır [Varsayılan]. Hostname aramaları normal olarak ihtiyaçlara göre yapılır, ancak tüm istekler için zorla çalıştırılabilir. Bu, günlük dosyalarında daha ayrıntılı bilgi sağlama aracı olarak kullanışlı olabilir, ancak performans üzerinde de olumsuz bir etkisi olabilir.';
$CIDRAM['lang']['config_general_hide_version'] = 'Sürüm bilgilerini günlüklerden ve sayfa çıktısından gizle? Doğru/True = Evet; Yanlış/False = Hayır [Varsayılan].';
$CIDRAM['lang']['config_general_ipaddr'] = 'Bağlama isteklerinin IP adresi nerede bulunur? (Cloudflare ve benzeri hizmetler için yararlıdır). Varsayılan = REMOTE_ADDR. UYARI: Ne yaptığınızı bilmiyorsanız bunu değiştirmeyin!';
$CIDRAM['lang']['config_general_lang'] = 'CIDRAM için varsayılan dili belirleyin.';
$CIDRAM['lang']['config_general_log_banned_ips'] = 'Yasaklanmış IP\'lerden engellenen istekleri günlük dosyalarına dahil et? Doğru/True = Evet [Varsayılan]; Yanlış/False = Hayır.';
$CIDRAM['lang']['config_general_log_rotation_action'] = 'Log rotasyonu, herhangi bir zamanda bulunması gereken günlük dosyalarının sayısını sınırlar. Yeni log dosyaları oluşturulduğunda, toplam log dosya sayısı belirtilen sınırı aşarsa, belirtilen eylem gerçekleştirilecektir. İstenen işlemi burada belirtebilirsiniz. Delete = En eski log dosyalarını sil, sınır artık aşılmamış kadar. Archive = Öncelikle dosyayı arşivleyin, ve sonra en eski log dosyalarını sil, sınır artık aşılmamış kadar.';
$CIDRAM['lang']['config_general_log_rotation_limit'] = 'Log rotasyonu, herhangi bir zamanda bulunması gereken günlük dosyalarının sayısını sınırlar. Yeni log dosyaları oluşturulduğunda, toplam log dosya sayısı belirtilen sınırı aşarsa, belirtilen eylem gerçekleştirilecektir. İstenen sınırı burada belirtebilirsiniz. 0 değeri, log rotasyonunu devre dışı bırakır.';
$CIDRAM['lang']['config_general_logfile'] = 'Engellenen tüm erişim girişimlerini kaydetmek için insanlar tarafından okunabilir dosya. Dosya adı belirtin veya devre dışı bırakmak için boş bırakın.';
$CIDRAM['lang']['config_general_logfileApache'] = 'Engellenen tüm erişim girişimlerini kaydetmek için Apache tarzı dosya. Dosya adı belirtin veya devre dışı bırakmak için boş bırakın.';
$CIDRAM['lang']['config_general_logfileSerialized'] = 'Engellenen tüm erişim girişimlerini kaydetmek için seri haline getirilmiş dosya. Dosya adı belirtin veya devre dışı bırakmak için boş bırakın.';
$CIDRAM['lang']['config_general_maintenance_mode'] = 'Bakım modunu etkinleştirilsin mi? Doğru/True = Evet; Yanlış/False = Hayır [Varsayılan]. Ön uç haricindeki her şeyi devre dışı bırakır. Bazen CMS\'nizi, çerçeveleri vb. güncellenirken yararlıdır.';
$CIDRAM['lang']['config_general_max_login_attempts'] = 'Maksimum giriş denemesi sayısı.';
$CIDRAM['lang']['config_general_numbers'] = 'Numaraların görüntülenmesini nasıl tercih edersiniz? Size en uygun görünen örneği seçin.';
$CIDRAM['lang']['config_general_protect_frontend'] = 'Normal olarak CIDRAM tarafından sağlanan korumaların ön uça uygulanıp uygulanmayacağını belirtir. Doğru/True = Evet [Varsayılan]; Yanlış/False = Hayır.';
$CIDRAM['lang']['config_general_search_engine_verification'] = 'Arama motorlarından gelen istekleri doğrulamaya çalışın? Arama motorlarını doğrulamak, ihlal sınırını aşmanın bir sonucu olarak yasaklanmamasını sağlar (sitenizdeki arama motorlarını yasaklamak genellikle arama motoru sıralaması, SEO, vb. üzerinde olumsuz bir etki yapar). Doğrulandığı zaman, arama motorları normal olarak engellenebilir, ancak yasaklanmaz. Doğrulanmadığı zaman ise, ihlal sınırının aşılmasının bir sonucu olarak yasaklanmaları mümkündür. Buna ek olarak, arama motoru doğrulaması, sahte arama motoru isteklerine ve arama motorları kılığına bürünen potansiyel olarak kötü amaçlı varlıklara karşı koruma sağlar (arama motoru doğrulama etkinleştirildiğinde bu tür istekler engellenir). Doğru/True = Arama motoru doğrulamasını etkinleştir [Varsayılan]; Yanlış/False = Arama motoru doğrulamasını devre dışı bırakın.';
$CIDRAM['lang']['config_general_silent_mode'] = 'CIDRAM, "Erişim Reddedildi" sayfasını göstermek yerine, engellenen erişim girişimlerini sessizce yönlendirmeli mi? Yanıt evet ise, engellenen erişim girişimleri için yeniden yönlendirilecek konumu belirtin. Yanıt hayır ise, bu değişkeni boş bırakın.';
$CIDRAM['lang']['config_general_social_media_verification'] = 'Sosyal medya isteklerini doğrulamayı denemek mi istiyorsunuz? Sosyal medya doğrulama, sahte sosyal medya isteklerine karşı koruma sağlar (bu gibi istekler engellenir). True = Sosyal medya doğrulamasını etkinleştir [Varsayılan]; False = Sosyal medya doğrulamasını devre dışı bırak.';
$CIDRAM['lang']['config_general_statistics'] = 'CIDRAM kullanım istatistiklerini takip et? Doğru/True = Evet; Yanlış/False = Hayır [Varsayılan].';
$CIDRAM['lang']['config_general_timeFormat'] = 'CIDRAM tarafından kullanılan tarih/saat gösterimi biçimi. İsteğe bağlı olarak ek seçenekler eklenebilir.';
$CIDRAM['lang']['config_general_timeOffset'] = 'Dakika cinsinden zaman dilimi farkı.';
$CIDRAM['lang']['config_general_timezone'] = 'Zaman diliminiz.';
$CIDRAM['lang']['config_general_truncate'] = 'Belirli bir boyuta ulaştığında günlük dosyalarını kesin? Değer, bir günlük dosyasının kesilmeden önce büyüyebileceği B/KB/MB/GB/TB cinsinden maksimum boyuttur. Varsayılan 0KB değeri, kesmeyi devre dışı bırakır (günlük dosyaları sınırsız büyüyebilir). Not: Tek tek kayıt dosyaları için geçerlidir! Günlük dosyalarının boyutu toplam olarak alınmaz.';
$CIDRAM['lang']['config_legal_omit_hostname'] = 'Ana bilgisayar adlarını günlük dosyalardan hariç tutuluyor mu? Doğru/True = Evet; Yanlış/False = Hayır [Varsayılan].';
$CIDRAM['lang']['config_legal_omit_ip'] = 'IP adreslerini günlük dosyalardan hariç tutuluyor mu? Doğru/True = Evet; Yanlış/False = Hayır [Varsayılan]. Not: "omit_ip" "true" olduğunda "pseudonymise_ip_addresses" gereksiz hale gelir.';
$CIDRAM['lang']['config_legal_omit_ua'] = 'Kullanıcı aracılarını günlük dosyalardan hariç tutuluyor mu? Doğru/True = Evet; Yanlış/False = Hayır [Varsayılan].';
$CIDRAM['lang']['config_legal_privacy_policy'] = 'Oluşturulan sayfaların alt kısmında görüntülenecek ilgili gizlilik politikasının adresi. Bir URL belirtin veya devre dışı bırakmak için boş bırakın.';
$CIDRAM['lang']['config_legal_pseudonymise_ip_addresses'] = 'Günlük dosyaları yazarken IP adresi "pseudonymize" edilir? Doğru/True = Evet [Varsayılan]; Yanlış/False = Hayır.';
$CIDRAM['lang']['config_rate_limiting_allowance_period'] = 'Kullanımı izlemek için saat sayısı. Varsayılan = 0.';
$CIDRAM['lang']['config_rate_limiting_max_bandwidth'] = 'Gelecekteki talepleri sınırlayan orandan önce izin süresi içinde izin verilen maksimum bant genişliği miktarı. 0 değeri bu oran sınırlamasını devre dışı bırakır. Varsayılan = 0KB.';
$CIDRAM['lang']['config_rate_limiting_max_requests'] = 'Gelecekteki istekleri sınırlayan orandan önce izin süresi içinde izin verilen maksimum istek sayısı. 0 değeri bu oran sınırlamasını devre dışı bırakır. Varsayılan = 0.';
$CIDRAM['lang']['config_rate_limiting_precision_ipv4'] = 'IPv4 kullanımını izlemek için hassaslık. Değer, CIDR blok boyutunu yansıtır. En iyi hassasiyet için 32\'ye ayarlayın. Varsayılan = 32.';
$CIDRAM['lang']['config_rate_limiting_precision_ipv6'] = 'IPv6 kullanımını izlemek için hassaslık. Değer, CIDR blok boyutunu yansıtır. En iyi hassasiyet için 128\'e ayarlayın. Varsayılan = 128.';
$CIDRAM['lang']['config_recaptcha_api'] = 'Hangi API\'yı kullanacaksınız? V2 veya Invisible?';
$CIDRAM['lang']['config_recaptcha_expiry'] = 'reCAPTCHA örneklerini hatırlamak için saat sayısı.';
$CIDRAM['lang']['config_recaptcha_lockip'] = 'reCAPTCHA\'yı IP\'lere kilitle?';
$CIDRAM['lang']['config_recaptcha_lockuser'] = 'reCAPTCHA kullanıcılara kilitle?';
$CIDRAM['lang']['config_recaptcha_logfile'] = 'Tüm reCAPTCHA denemelerini günlüğe yaz? Yanıt evet ise, günlük dosyası için kullanılacak adı belirtin. Yanıt hayır ise, bu değişkeni boş bırakın.';
$CIDRAM['lang']['config_recaptcha_secret'] = 'Bu değer, reCAPTCHA gösterge tablosunda bulunabilen reCAPTCHA\'nızın "secret key"na karşılık gelmelidir.';
$CIDRAM['lang']['config_recaptcha_signature_limit'] = 'reCAPTCHA örneği sunulduğunda tetiklenmesine izin verilen maksimum imza sayısı. Varsayılan = 1. Herhangi bir talep için bu sayı aşılırsa, reCAPTCHA örneği sunulmaz.';
$CIDRAM['lang']['config_recaptcha_sitekey'] = 'Bu değer, reCAPTCHA gösterge tablosunda bulunabilen reCAPTCHA\'nızın "site key"na karşılık gelmelidir.';
$CIDRAM['lang']['config_recaptcha_usemode'] = 'CIDRAM\'ın reCAPTCHA\'yi nasıl kullanması gerektiğini tanımlar (belgelere bakın).';
$CIDRAM['lang']['config_signatures_block_bogons'] = 'Bogon/martian CIDR\'leri engelleyin? Sitenize yerel ağınızdan, yerel hizmet bilgisayarından veya yerel ağınızdan bağlantılar bekliyorsanız, bu yönerge yanlış (false) değerine ayarlanmalıdır. Bu tür bağlantıları beklemiyorsanız, bu yönerge doğru (true) olmalıdır.';
$CIDRAM['lang']['config_signatures_block_cloud'] = 'Webhosting/bulut hizmetlerine ait olarak tanımlanan CIDR\'leri engelle? Sitenizden bir API hizmeti işletiyorsanız veya diğer web sitelerinin web sitenize bağlanmasını bekliyorsanız, bu yanlışa (false) ayarlanmalıdır. Aksi takdirde, bu yönergenin doğruya (true) ayarlanması gerekir.';
$CIDRAM['lang']['config_signatures_block_generic'] = 'Çoğu zaman kara liste için tavsiye edilen CIDR\'ler engelle? Bu, diğer daha belirgin imza kategorilerinin herhangi birinin parçası olarak işaretlenmeyen tüm imzaları kapsar.';
$CIDRAM['lang']['config_signatures_block_legal'] = 'Yasal yükümlülüklere yanıt olarak CIDR\'leri engelleyin? Bu yönerge normalde herhangi bir etkiye sahip olmamalıdır CIDRAM, herhangi bir CIDR\'yi varsayılan olarak "yasal yükümlülükler" ile ilişkilendirmediğinden. Ancak, yasal nedenlerden dolayı mevcut olabilecek herhangi bir özel imza dosyasının veya modülünün faydası için ek bir kontrol önlemi olarak mevcuttur.';
$CIDRAM['lang']['config_signatures_block_malware'] = 'Kötü amaçlı yazılımlarla ilişkili IP\'leri engelle? Buna, C&C sunucuları, virüs bulaşmış makineler, kötü amaçlı yazılım dağıtımında yer alan makineler vb. dahildir.';
$CIDRAM['lang']['config_signatures_block_proxies'] = 'Vekil servisler veya VPN\'ler ait olduğu saptanan CIDR\'leri engelle? Kullanıcıların, sitenize vekil servislerinden ve VPN\'lerinden erişebilmelerini istiyorsanız, bu, yanlışa (false) ayarlanmalıdır. Aksi takdirde, vekil servisler veya VPN\'ler gereksinim duymuyorsanız, bu yönergenin güvenliği artırmak için doğruya (true) ayarlanması gerekir.';
$CIDRAM['lang']['config_signatures_block_spam'] = 'Yüksek riskli çöp posta olarak sahtanan CIDR\'leri enğelle? Bunu yaparken sorun yaşamıyorsanız, genelde bu daima doğruya (true) ayarlanmalıdır.';
$CIDRAM['lang']['config_signatures_default_tracktime'] = 'Modüller tarafından yasaklanan IP\'leri izlemek için kaç saniye. Varsayılan = 604800 (1 hafta).';
$CIDRAM['lang']['config_signatures_infraction_limit'] = 'IP izlemesi tarafından yasaklanmadan önce bir IPnin uğrayacağı maksimum ihlal sayısı. Varsayılan = 10.';
$CIDRAM['lang']['config_signatures_ipv4'] = 'Virgülle sınırlı, CIDRAM\'ın ayrıştırmaya çalıştığı IPv4 imza dosyalarının bir listesi.';
$CIDRAM['lang']['config_signatures_ipv6'] = 'Virgülle sınırlı, CIDRAM\'ın ayrıştırmaya çalıştığı IPv6 imza dosyalarının bir listesi.';
$CIDRAM['lang']['config_signatures_modules'] = 'Virgülle sınırlı, IPv4/IPv6 imzalarını kontrol ettikten sonra yüklenecek modül dosyalarının bir listesi.';
$CIDRAM['lang']['config_signatures_track_mode'] = 'İhlaller ne zaman sayılmalıdır? Yanlış/False = IP\'ler modüller tarafından engellendiğinde. Doğru/True = Herhangi bir nedenle IP\'ler engellendiğinde.';
$CIDRAM['lang']['config_template_data_Magnification'] = 'Yazı tipi büyütme. Varsayılan = 1.';
$CIDRAM['lang']['config_template_data_css_url'] = 'Özel temalar için CSS dosyası URL\'si.';
$CIDRAM['lang']['config_template_data_theme'] = 'CIDRAM için kullanılacak varsayılan tema.';
$CIDRAM['lang']['confirm_action'] = '"%s" istediğinden emin misin?';
$CIDRAM['lang']['field_2fa'] = '2FA kodu';
$CIDRAM['lang']['field_Request_Method'] = 'İstek yöntemi';
$CIDRAM['lang']['field_activate'] = 'Etkinleştir';
$CIDRAM['lang']['field_add_more_conditions'] = 'Daha fazla koşul ekle';
$CIDRAM['lang']['field_banned'] = 'Yasaklandı';
$CIDRAM['lang']['field_blocked'] = 'Engellendi';
$CIDRAM['lang']['field_clear'] = 'Temiz';
$CIDRAM['lang']['field_clear_all'] = 'Hepsini temizle';
$CIDRAM['lang']['field_clickable_link'] = 'Tıklanabilir bağlantı';
$CIDRAM['lang']['field_component'] = 'Bileşen';
$CIDRAM['lang']['field_confirm'] = 'Onaylamak';
$CIDRAM['lang']['field_create_new_account'] = 'Yeni Hesap Oluştur';
$CIDRAM['lang']['field_deactivate'] = 'Devre dışı bırak';
$CIDRAM['lang']['field_delete'] = 'Sil';
$CIDRAM['lang']['field_delete_account'] = 'Hesabı sil';
$CIDRAM['lang']['field_download_file'] = 'İndir';
$CIDRAM['lang']['field_edit_file'] = 'Düzenle';
$CIDRAM['lang']['field_expiry'] = 'Bitim süresi';
$CIDRAM['lang']['field_false'] = 'False (Yanlış)';
$CIDRAM['lang']['field_file'] = 'Dosya';
$CIDRAM['lang']['field_filename'] = 'Dosya adı: ';
$CIDRAM['lang']['field_filetype_directory'] = 'Rehber';
$CIDRAM['lang']['field_filetype_info'] = '{EXT} Dosya';
$CIDRAM['lang']['field_filetype_unknown'] = 'Bilinmiyor';
$CIDRAM['lang']['field_include'] = 'Boş alanları dahil et';
$CIDRAM['lang']['field_infractions'] = 'İhlaller';
$CIDRAM['lang']['field_install'] = 'Yükle';
$CIDRAM['lang']['field_ip_address'] = 'İP Adresi';
$CIDRAM['lang']['field_latest_version'] = 'En son sürüm';
$CIDRAM['lang']['field_log_in'] = 'Oturum Aç';
$CIDRAM['lang']['field_new_name'] = 'Yeni isim:';
$CIDRAM['lang']['field_nonclickable_text'] = 'Tıklanmayan metin';
$CIDRAM['lang']['field_ok'] = 'Tamam';
$CIDRAM['lang']['field_omit'] = 'Boş alanları atla';
$CIDRAM['lang']['field_options'] = 'Seçenekler';
$CIDRAM['lang']['field_password'] = 'Parola';
$CIDRAM['lang']['field_permissions'] = 'İzinler';
$CIDRAM['lang']['field_range'] = 'Aralık (İlk – Son)';
$CIDRAM['lang']['field_reasonmessage'] = 'Neden Engellendi (detaylı)';
$CIDRAM['lang']['field_rename_file'] = 'Adını değiştirmek';
$CIDRAM['lang']['field_reset'] = 'Sıfırla';
$CIDRAM['lang']['field_set_new_password'] = 'Yeni Şifre Oluştur';
$CIDRAM['lang']['field_size'] = 'Toplam Boyut: ';
$CIDRAM['lang']['field_size_GB'] = 'GB';
$CIDRAM['lang']['field_size_KB'] = 'KB';
$CIDRAM['lang']['field_size_MB'] = 'MB';
$CIDRAM['lang']['field_size_TB'] = 'TB';
$CIDRAM['lang']['field_size_bytes'] = 'bayt';
$CIDRAM['lang']['field_status'] = 'Durum';
$CIDRAM['lang']['field_system_timezone'] = 'Sistem varsayılan saat dilimini kullanın.';
$CIDRAM['lang']['field_tracking'] = 'İzleme';
$CIDRAM['lang']['field_true'] = 'True (Doğru)';
$CIDRAM['lang']['field_ualc'] = 'Kullanıcı Aracısı (küçük harf)';
$CIDRAM['lang']['field_uninstall'] = 'Kaldır';
$CIDRAM['lang']['field_update'] = 'Güncelle';
$CIDRAM['lang']['field_update_all'] = 'Tümünü güncelle';
$CIDRAM['lang']['field_upload_file'] = 'Yeni dosya yükle';
$CIDRAM['lang']['field_username'] = 'Kullanıcı adı';
$CIDRAM['lang']['field_verify'] = 'Doğrula';
$CIDRAM['lang']['field_verify_all'] = 'Tümünü doğrula';
$CIDRAM['lang']['field_your_version'] = 'Sürümünüz';
$CIDRAM['lang']['header_login'] = 'Devam etmek için lütfen giriş yapınız.';
$CIDRAM['lang']['label_active_config_file'] = 'Etkin yapılandırma dosyası: ';
$CIDRAM['lang']['label_actual'] = 'Şimdiki';
$CIDRAM['lang']['label_aux_actBlk'] = 'engelleyin';
$CIDRAM['lang']['label_aux_actByp'] = 'atlayın';
$CIDRAM['lang']['label_aux_actGrl'] = 'gri listeye ekleyin';
$CIDRAM['lang']['label_aux_actWhl'] = 'beyaz listeye ekleyin';
$CIDRAM['lang']['label_aux_create_new_rule'] = 'Yeni kural oluştur';
$CIDRAM['lang']['label_aux_logic_all'] = 'Kuralı tetiklemek için tüm şartlar yerine getirilmelidir.';
$CIDRAM['lang']['label_aux_logic_any'] = 'Tüm "eşittir" (=) koşulları, tüm "eşit olmayan" (≠) koşullar da karşılandığı sürece kuralı tetikleyebilir.';
$CIDRAM['lang']['label_aux_menu_action'] = 'Aşağıdaki koşullar karşılanırsa, isteği %s.';
$CIDRAM['lang']['label_aux_menu_method'] = 'Koşulları test etmek için %s kullanın.';
$CIDRAM['lang']['label_aux_mtdReg'] = 'düzenli ifadeler';
$CIDRAM['lang']['label_aux_mtdStr'] = 'direkt dizi karşılaştırması';
$CIDRAM['lang']['label_aux_mtdWin'] = 'Windows tarzı joker karakterler';
$CIDRAM['lang']['label_aux_name'] = 'Yeni kural için bir isim:';
$CIDRAM['lang']['label_aux_reason'] = 'Engellendiğinde kullanıcıya verilen sebep:';
$CIDRAM['lang']['label_backup_location'] = 'Repository yedek konumları (acil bir durumda, ya da her şey başarısız olursa):';
$CIDRAM['lang']['label_banned'] = 'Yasaklı talepler';
$CIDRAM['lang']['label_blocked'] = 'Engellenen talepler';
$CIDRAM['lang']['label_branch'] = 'Branşı en yeni kararlı:';
$CIDRAM['lang']['label_check_aux'] = 'Ayrıca yardımcı kurallara karşı da test edin.';
$CIDRAM['lang']['label_check_modules'] = 'Ayrıca modülleri test edin.';
$CIDRAM['lang']['label_cidram'] = 'Kullanılan CIDRAM sürümü:';
$CIDRAM['lang']['label_clientinfo'] = 'Kullanıcı bilgisi:';
$CIDRAM['lang']['label_displaying'] = '<span class="txtRd">%s</span> öğe görüntüleniyor.';
$CIDRAM['lang']['label_displaying_that_cite'] = '"%2$s" ibaresi verilen <span class="txtRd">%1$s</span> öğe görüntüleniyor.';
$CIDRAM['lang']['label_expected'] = 'Beklenen';
$CIDRAM['lang']['label_expires'] = 'Son Geçerlilik Tarihi: ';
$CIDRAM['lang']['label_false_positive_risk'] = 'Yalancı pozitif risk: ';
$CIDRAM['lang']['label_fmgr_cache_data'] = 'Önbellek verileri ve geçici dosyalar';
$CIDRAM['lang']['label_fmgr_disk_usage'] = 'CIDRAM disk kullanımı: ';
$CIDRAM['lang']['label_fmgr_free_space'] = 'Boş disk alanı: ';
$CIDRAM['lang']['label_fmgr_total_disk_usage'] = 'Toplam disk kullanımı: ';
$CIDRAM['lang']['label_fmgr_total_space'] = 'Toplam disk alanı: ';
$CIDRAM['lang']['label_fmgr_updates_metadata'] = 'Bileşen güncellemeleri meta verileri';
$CIDRAM['lang']['label_hide'] = 'Saklamak';
$CIDRAM['lang']['label_hide_hash_table'] = 'Karma tabloyu gizle';
$CIDRAM['lang']['label_ignore'] = 'Bunu görmezden gel';
$CIDRAM['lang']['label_never'] = 'Asla';
$CIDRAM['lang']['label_os'] = 'Kullanılan işletim sistemi:';
$CIDRAM['lang']['label_other'] = 'Diğer';
$CIDRAM['lang']['label_other-ActiveIPv4'] = 'Etkin IPv4 imza dosyaları';
$CIDRAM['lang']['label_other-ActiveIPv6'] = 'Etkin IPv6 imza dosyaları';
$CIDRAM['lang']['label_other-ActiveModules'] = 'Aktif modüller';
$CIDRAM['lang']['label_other-Since'] = 'Başlangıç tarihi';
$CIDRAM['lang']['label_php'] = 'Kullanılan PHP sürümü:';
$CIDRAM['lang']['label_reCAPTCHA'] = 'reCAPTCHA denemeler';
$CIDRAM['lang']['label_results'] = 'Sonuçlar (%s giriş – %s reddedildi – %s kabul edildi – %s birleşti – %s çıktı):';
$CIDRAM['lang']['label_sapi'] = 'Kullanılan SAPI:';
$CIDRAM['lang']['label_show'] = 'Göstermek';
$CIDRAM['lang']['label_show_by_origin'] = 'Menşe göre göster';
$CIDRAM['lang']['label_show_hash_table'] = 'Karma tablosu göster';
$CIDRAM['lang']['label_signature_type'] = 'İmza tipi:';
$CIDRAM['lang']['label_stable'] = 'En yeni kararlı:';
$CIDRAM['lang']['label_sysinfo'] = 'Sistem bilgisi:';
$CIDRAM['lang']['label_tests'] = 'Testler:';
$CIDRAM['lang']['label_total'] = 'Toplam';
$CIDRAM['lang']['label_unignore'] = 'Bunu görmezden gelme';
$CIDRAM['lang']['label_unstable'] = 'En yeni kararsız:';
$CIDRAM['lang']['label_used_with'] = 'İle kullanılan: ';
$CIDRAM['lang']['label_your_ip'] = 'Senin IP:';
$CIDRAM['lang']['label_your_ua'] = 'Senin UA:';
$CIDRAM['lang']['link_accounts'] = 'Hesaplar';
$CIDRAM['lang']['link_aux'] = 'Yardımcı Kurallar';
$CIDRAM['lang']['link_cache_data'] = 'Önbellek Verileri';
$CIDRAM['lang']['link_cidr_calc'] = 'CIDR Hesaplayıcı';
$CIDRAM['lang']['link_config'] = 'Yapılandırma';
$CIDRAM['lang']['link_documentation'] = 'Belgeler';
$CIDRAM['lang']['link_file_manager'] = 'Dosya Yöneticisi';
$CIDRAM['lang']['link_home'] = 'Ana Sayfa';
$CIDRAM['lang']['link_ip_aggregator'] = 'IP Toplayıcı';
$CIDRAM['lang']['link_ip_test'] = 'IP Testi';
$CIDRAM['lang']['link_ip_tracking'] = 'IP İzleme';
$CIDRAM['lang']['link_logs'] = 'Kayıtlar';
$CIDRAM['lang']['link_range'] = 'İmza Tabloları';
$CIDRAM['lang']['link_sections_list'] = 'Bölüm Listeleri';
$CIDRAM['lang']['link_statistics'] = 'İstatistik';
$CIDRAM['lang']['link_textmode'] = 'Metin biçimlendirme: <a href="%1$sfalse%2$s">Basit</a> – <a href="%1$strue%2$s">Süslü</a> – <a href="%1$stally%2$s">Taksir</a>';
$CIDRAM['lang']['link_updates'] = 'Güncellemeler';
$CIDRAM['lang']['logs_logfile_doesnt_exist'] = 'Seçilen günlük dosyası yok!';
$CIDRAM['lang']['logs_no_logfile_selected'] = 'Hiçbir günlük dosyası seçilmedi.';
$CIDRAM['lang']['logs_no_logfiles_available'] = 'Günlük dosyası yok.';
$CIDRAM['lang']['max_login_attempts_exceeded'] = 'Maksimum giriş denemesi aşıldı; Erişim reddedildi.';
$CIDRAM['lang']['previewer_days'] = 'Günler';
$CIDRAM['lang']['previewer_hours'] = 'Saatler';
$CIDRAM['lang']['previewer_minutes'] = 'Dakikalar';
$CIDRAM['lang']['previewer_months'] = 'Aylar';
$CIDRAM['lang']['previewer_seconds'] = 'Saniyeler';
$CIDRAM['lang']['previewer_weeks'] = 'Haftalar';
$CIDRAM['lang']['previewer_years'] = 'Yıllar';
$CIDRAM['lang']['response_2fa_invalid'] = 'Yanlış 2FA kodu girildi. Kimlik doğrulama başarısız oldu.';
$CIDRAM['lang']['response_2fa_valid'] = 'Başarıyla doğrulandı.';
$CIDRAM['lang']['response_accounts_already_exists'] = 'Bu kullanıcı adıyla bir hesap zaten var!';
$CIDRAM['lang']['response_accounts_created'] = 'Hesap başarıyla oluşturuldu!';
$CIDRAM['lang']['response_accounts_deleted'] = 'Hesap başarıyla silindi!';
$CIDRAM['lang']['response_accounts_doesnt_exist'] = 'Bu hesap mevcut değil.';
$CIDRAM['lang']['response_accounts_password_updated'] = 'Şifre başarıyla güncellendi!';
$CIDRAM['lang']['response_activated'] = 'Başarıyla etkinleştirildi.';
$CIDRAM['lang']['response_activation_failed'] = 'Etkinleştirilemedi!';
$CIDRAM['lang']['response_aux_none'] = 'Şu anda herhangi bir yardımcı kural bulunmamaktadır.';
$CIDRAM['lang']['response_aux_rule_created_successfully'] = 'Yeni yardımcı kural, "%s", başarıyla oluşturuldu.';
$CIDRAM['lang']['response_aux_rule_deleted_successfully'] = 'Yardımcı kural, "%s", başarıyla silindi.';
$CIDRAM['lang']['response_checksum_error'] = 'Checksum hatası! Dosya reddedildi!';
$CIDRAM['lang']['response_component_successfully_installed'] = 'Bileşen başarıyla yüklendi.';
$CIDRAM['lang']['response_component_successfully_uninstalled'] = 'Bileşen başarıyla kaldırıldı.';
$CIDRAM['lang']['response_component_successfully_updated'] = 'Bileşen başarıyla güncellendi.';
$CIDRAM['lang']['response_component_uninstall_error'] = 'Bileşeni kaldırmaya çalışırken bir hata oluştu.';
$CIDRAM['lang']['response_configuration_updated'] = 'Yapılandırma başarıyla güncellendi.';
$CIDRAM['lang']['response_deactivated'] = 'Başarıyla devre dışı bırakıldı.';
$CIDRAM['lang']['response_deactivation_failed'] = 'Devre dışı bırakılamadı!';
$CIDRAM['lang']['response_delete_error'] = 'Silinemedi!';
$CIDRAM['lang']['response_directory_deleted'] = 'Dizin başarıyla silindi!';
$CIDRAM['lang']['response_directory_renamed'] = 'Dizin başarıyla yeniden adlandırıldı!';
$CIDRAM['lang']['response_error'] = 'Hata';
$CIDRAM['lang']['response_failed_to_install'] = 'Yükleme başarısız!';
$CIDRAM['lang']['response_failed_to_update'] = 'Güncelleme başarısız!';
$CIDRAM['lang']['response_file_deleted'] = 'Dosya başarıyla silindi!';
$CIDRAM['lang']['response_file_edited'] = 'Dosya başarıyla değiştirildi!';
$CIDRAM['lang']['response_file_renamed'] = 'Dosya başarıyla yeniden adlandırıldı!';
$CIDRAM['lang']['response_file_uploaded'] = 'Dosya başarıyla yüklendi!';
$CIDRAM['lang']['response_login_invalid_password'] = 'Giriş başarısız! Geçersiz parola!';
$CIDRAM['lang']['response_login_invalid_username'] = 'Giriş başarısız! Kullanıcı adı yok!';
$CIDRAM['lang']['response_login_password_field_empty'] = 'Parola alanı boş!';
$CIDRAM['lang']['response_login_username_field_empty'] = 'Kullanıcı adı alanı boş!';
$CIDRAM['lang']['response_login_wrong_endpoint'] = 'Yanlış bitiş noktası!';
$CIDRAM['lang']['response_no'] = 'Hayır';
$CIDRAM['lang']['response_possible_problem_found'] = 'Olası problem bulundu.';
$CIDRAM['lang']['response_rename_error'] = 'Yeniden adlandırılamadı!';
$CIDRAM['lang']['response_sanity_1'] = 'Dosya beklenmedik içerik barındırıyor! Dosya reddedildi!';
$CIDRAM['lang']['response_statistics_cleared'] = 'İstatistikler temizlendi.';
$CIDRAM['lang']['response_tracking_cleared'] = 'İzleme temizlendi.';
$CIDRAM['lang']['response_updates_already_up_to_date'] = 'Zaten güncel.';
$CIDRAM['lang']['response_updates_not_installed'] = 'Bileşen yüklü değil!';
$CIDRAM['lang']['response_updates_not_installed_php'] = 'Bileşen yüklü değil (PHP &gt;= {V} gerektirir)!';
$CIDRAM['lang']['response_updates_outdated'] = 'Eski!';
$CIDRAM['lang']['response_updates_outdated_manually'] = 'Eski (lütfen manuel olarak güncelleyin)!';
$CIDRAM['lang']['response_updates_outdated_php_version'] = 'Eski (PHP &gt;= {V} gerektirir)!';
$CIDRAM['lang']['response_updates_unable_to_determine'] = 'Belirlenemedi.';
$CIDRAM['lang']['response_upload_error'] = 'Yüklenemedi!';
$CIDRAM['lang']['response_verification_failed'] = 'Doğrulama başarısız oldu! Bileşen bozulmuş olabilir.';
$CIDRAM['lang']['response_verification_success'] = 'Doğrulama başarısı! Hiçbir sorun bulunamadı.';
$CIDRAM['lang']['response_yes'] = 'Evet';
$CIDRAM['lang']['security_warning'] = 'İsteğiniz işlenirken beklenmeyen bir sorun oluştu. Lütfen tekrar deneyin. Sorun devam ederse, desteğe başvurun.';
$CIDRAM['lang']['state_async_deny'] = 'İzinleriniz uyumsuz eşzamansız istekler gerçekleştirmek için yeterli değil. Tekrar giriş yapmayı deneyin.';
$CIDRAM['lang']['state_cache_is_empty'] = 'Önbellek boş.';
$CIDRAM['lang']['state_complete_access'] = 'Tam erişim';
$CIDRAM['lang']['state_component_is_active'] = 'Bileşen aktiftir.';
$CIDRAM['lang']['state_component_is_inactive'] = 'Bileşen etkin değil.';
$CIDRAM['lang']['state_component_is_provisional'] = 'Bileşen geçicidir.';
$CIDRAM['lang']['state_default_password'] = 'Uyarı: Varsayılan şifreyi kullanıyor!';
$CIDRAM['lang']['state_email_sent'] = 'E-posta başarıyla "%s" olarak gönderildi.';
$CIDRAM['lang']['state_failed_missing'] = 'Gerekli bir bileşen kullanılamaması nedeniyle görev başarısız oldu.';
$CIDRAM['lang']['state_ignored'] = 'Kullanılmamış';
$CIDRAM['lang']['state_loading'] = 'Yükleniyor...';
$CIDRAM['lang']['state_loadtime'] = 'Sayfa isteği <span class="txtRd">%s</span> saniye içinde tamamlandı.';
$CIDRAM['lang']['state_logged_in'] = 'Giriş yapıldı.';
$CIDRAM['lang']['state_logged_in_2fa_pending'] = 'Giriş yapıldı + 2FA beklemede.';
$CIDRAM['lang']['state_logged_out'] = 'Çıkış yapıldı.';
$CIDRAM['lang']['state_logs_access_only'] = 'Sadece girişleri kaydeder';
$CIDRAM['lang']['state_maintenance_mode'] = 'Uyarı: Bakım modu etkin!';
$CIDRAM['lang']['state_password_not_valid'] = 'Uyarı: Bu hesap geçerli bir şifre kullanmıyor!';
$CIDRAM['lang']['state_risk_high'] = 'Yüksek';
$CIDRAM['lang']['state_risk_low'] = 'Düşük';
$CIDRAM['lang']['state_risk_medium'] = 'Orta';
$CIDRAM['lang']['state_sl_totals'] = 'Toplamları (İmzalar: <span class="txtRd">%s</span> – İmza bölümleri: <span class="txtRd">%s</span> – İmza dosyaları: <span class="txtRd">%s</span> – Benzersiz bölüm etiketleri: <span class="txtRd">%s</span>).';
$CIDRAM['lang']['state_tracking'] = 'Şu anda %s IP izleme.';
$CIDRAM['lang']['switch-hide-non-outdated-set-false'] = 'Eskimiş olmayanları gizleme';
$CIDRAM['lang']['switch-hide-non-outdated-set-true'] = 'Eskimiş olmayanları gizle';
$CIDRAM['lang']['switch-hide-unused-set-false'] = 'Kullanılmayanları gizleme';
$CIDRAM['lang']['switch-hide-unused-set-true'] = 'Kullanılmayanları gizle';
$CIDRAM['lang']['switch-tracking-aux-set-false'] = 'Yardımcı kurallara karşı kontrol etmeyin';
$CIDRAM['lang']['switch-tracking-aux-set-true'] = 'Yardımcı kurallara karşı kontrol edin';
$CIDRAM['lang']['switch-tracking-blocked-already-set-false'] = 'İmza dosyalarına karşı kontrol etmeyin';
$CIDRAM['lang']['switch-tracking-blocked-already-set-true'] = 'İmza dosyalarına karşı kontrol edin';
$CIDRAM['lang']['switch-tracking-hide-banned-blocked-set-false'] = 'Yasaklanmış/engellenen IP\'leri gizleme';
$CIDRAM['lang']['switch-tracking-hide-banned-blocked-set-true'] = 'Yasaklanmış/engellenen IP\'leri gizle';
$CIDRAM['lang']['tip_2fa_sent'] = 'E-posta adresinize iki faktörlü bir kimlik doğrulama kodu içeren bir e-posta gönderildi. Ön tarafa erişmek için lütfen aşağıdaki kodu doğrulayın. Bu e-postayı almadıysanız, yeni bir kod içeren yeni bir e-posta almak için, çıkış yapmayı, 10 dakika beklemeyi ve tekrar giriş yapmayı deneyin.';
$CIDRAM['lang']['tip_accounts'] = 'Merhaba, {username}.<br />Hesaplar sayfası, CIDRAM ön ucuna kimin erişebileceğini kontrol etmenizi mümkün kılar.';
$CIDRAM['lang']['tip_aux'] = 'Merhaba, {username}.<br />CIDRAM için yardımcı kurallar oluşturmak, silmek ve değiştirmek için bu sayfayı kullanabilirsiniz.';
$CIDRAM['lang']['tip_cache_data'] = 'Merhaba, {username}.<br />Burada önbellek içeriğini inceleyebilirsiniz.';
$CIDRAM['lang']['tip_cidr_calc'] = 'Merhaba, {username}.<br />CIDR hesaplayıcısı, bir IP adresinin faktörünün hangi CIDR\'lerin olduğunu hesaplamanızı mümkün kılar.';
$CIDRAM['lang']['tip_condition_placeholder'] = 'Bir değer belirtin veya göz ardı etmek için boş bırakın.';
$CIDRAM['lang']['tip_config'] = 'Merhaba, {username}.<br />Yapılandırma sayfası, CIDRAM için yapılandırmayı ön uçtan değiştirmenizi mümkün kılar.';
$CIDRAM['lang']['tip_custom_ua'] = 'Buraya user agent girin (isteğe).';
$CIDRAM['lang']['tip_donate'] = 'CIDRAM ücretsiz olarak sunulmaktadır, ancak projeye bağış yapmak isterseniz, bağış düğmesini tıklayarak bunu yapabilirsiniz.';
$CIDRAM['lang']['tip_enter_ip_here'] = 'IP\'yi buraya girin.';
$CIDRAM['lang']['tip_enter_ips_here'] = 'IP\'leri buraya girin.';
$CIDRAM['lang']['tip_fe_cookie_warning'] = 'Not: CIDRAM, oturum açma kimlik doğrulamasında çerez kullanır. Oturum açarak, tarayıcınız tarafından oluşturulacak ve saklanacak bir çerez için onayınızı verirsiniz.';
$CIDRAM['lang']['tip_file_manager'] = 'Merhaba, {username}.<br />Dosya yöneticisi dosyalarınızı silmenizi, düzenlemenizi, yüklemenizi ve indirmenizi sağlar. Dikkatli kullanın (kurulumunuzu bununla bozabilirsiniz).';
$CIDRAM['lang']['tip_home'] = 'Merhaba, {username}.<br />Bu, CIDRAM ön uçunun ana sayfasıdır. Devam etmek için soldaki gezinme menüsünden bir bağlantı seçin.';
$CIDRAM['lang']['tip_ip_aggregator'] = 'Merhaba, {username}.<br />IP toplayıcı IP\'leri ve CIDR\'leri olabildiğince az şekilde ifade etmenizi sağlar. Birleştirilecek verileri girin ve "Tamam" düğmesine basın.';
$CIDRAM['lang']['tip_ip_test'] = 'Merhaba, {username}.<br />IP test sayfası, şu anda yüklü olan imzalarla IP adreslerinin engellenip engellenmediğini test etmenizi sağlar.';
$CIDRAM['lang']['tip_ip_test_switches'] = '(Seçilmediğinde, yalnızca imza dosyaları test edilecektir).';
$CIDRAM['lang']['tip_ip_tracking'] = 'Merhaba, {username}.<br />IP izleme sayfası, IP adreslerinin izleme durumunu kontrol etmenizi, hangilerinin yasak olduğunu kontrol etmenizi ve isterseniz bunların yasaklanmasını/izlemensini kaldırmanızı kontrol etmenizi sağlar.';
$CIDRAM['lang']['tip_login'] = 'Varsayılan kullanıcı adı: <span class="txtRd">admin</span> – Varsayılan şifre: <span class="txtRd">password</span>';
$CIDRAM['lang']['tip_logs'] = 'Merhaba, {username}.<br />Bu günlük dosyasının içeriğini görüntülemek için aşağıdaki listeden bir günlük dosyası seçin.';
$CIDRAM['lang']['tip_range'] = 'Merhaba, {username}.<br />Bu sayfa, şu anda aktif imza dosyalarının kapsadığı IP aralıkları hakkında bazı temel istatistiksel bilgileri göstermektedir.';
$CIDRAM['lang']['tip_sections_list'] = 'Merhaba, {username}.<br />Bu sayfa şu anda etkin olan imza dosyalarında hangi bölümlerin bulunduğunu listeler.';
$CIDRAM['lang']['tip_see_the_documentation'] = 'Çeşitli yapılandırma yönergeleri ve amaçlarıyla ilgili bilgi için <a href="https://github.com/CIDRAM/CIDRAM/blob/master/_docs/readme.en.md#SECTION6">belgelere</a> bakın.';
$CIDRAM['lang']['tip_statistics'] = 'Merhaba, {username}.<br />Bu sayfada, CIDRAM kurulumunuzla ilgili bazı temel kullanım istatistikleri gösterilmektedir.';
$CIDRAM['lang']['tip_statistics_disabled'] = 'Not: İstatistik izleme şu anda devre dışı, ancak yapılandırma sayfası aracılığıyla etkinleştirilebilir.';
$CIDRAM['lang']['tip_updates'] = 'Merhaba, {username}.<br />Güncellemeler sayfası, CIDRAM\'ın çeşitli bileşenlerini (çekirdek paket, imzalar, L10N dosyaları vb.) yüklemenizi, kaldırmanızı ve güncellemenizi sağlar.';
$CIDRAM['lang']['title_login'] = 'Giriş';
$CIDRAM['lang']['warning'] = 'Uyarılar:';
$CIDRAM['lang']['warning_php_1'] = 'PHP sürümünüz aktif olarak desteklenmiyor! Güncelleme önerilir!';
$CIDRAM['lang']['warning_php_2'] = 'PHP sürümünüz ağır savunmasız! Güncelleme önerilir!';
$CIDRAM['lang']['warning_signatures_1'] = 'Hiçbir imza dosyası aktif değil!';

$CIDRAM['lang']['info_some_useful_links'] = 'Bazı kullanışlı bağlantılar:<ul>
      <li><a href="https://github.com/CIDRAM/CIDRAM/issues">CIDRAM Sorunları @ GitHub</a> – CIDRAM için sorunlar sayfası (destek, yardım, vb.).</li>
      <li><a href="https://wordpress.org/plugins/cidram/">CIDRAM @ WordPress.org</a> – CIDRAM için WordPress eklentisi.</li>
      <li><a href="https://bitbucket.org/macmathan/blocklists">macmathan/blocklists</a> – Tehlikeli botları, istenmeyen ülkeleri, güncel olmayan tarayıcıları, vb engellemek için, CIDRAM için isteğe bağlı blok listeleri ve modüller içerir.</li>
      <li><a href="https://www.facebook.com/groups/2204685680/">International PHP Group @ Facebook</a> – PHP öğrenme kaynakları ve tartışmalar.</li>
      <li><a href="https://php.earth/">PHP.earth</a> – PHP öğrenme kaynakları ve tartışmalar.</li>
      <li><a href="https://bgp.he.net/">Hurricane Electric BGP Toolkit</a> – ASN\'lerden CIDR\'ler alın, ASN ilişkilerini belirleyin, ağ adlarına dayalı ASN\'leri keşfedin.</li>
      <li><a href="https://www.stopforumspam.com/forum/">Forum @ Stop Forum Spam</a> – Forum spamını durdurmayla ilgili faydalı forum.</li>
      <li><a href="https://radar.qrator.net/">Radar by Qrator</a> – ASN\'lerin bağlantısını kontrol etmek için yararlı araç ve ASN\'ler hakkında çeşitli diğer bilgiler.</li>
      <li><a href="http://www.ipdeny.com/ipblocks/">IPdeny IP ülke blokları</a> – Ülke çapında imzalar üretmek için harika ve tam bir hizmet.</li>
      <li><a href="https://www.google.com/transparencyreport/safebrowsing/malware/">Google Malware Dashboard</a> – ASN\'ler için kötü amaçlı yazılım enfeksiyonu oranları ile ilgili raporları görüntüler.</li>
      <li><a href="https://www.spamhaus.org/statistics/botnet-asn/">Spamhaus Projesi</a> – ASN\'ler için botnet enfeksiyon oranları ile ilgili raporları görüntüler.</li>
      <li><a href="https://www.abuseat.org/public/asn.html">Abuseat.org\'un Kompozit Engelleme Listesi</a> – ASN\'ler için botnet enfeksiyon oranları ile ilgili raporları görüntüler.</li>
      <li><a href="https://abuseipdb.com/">AbuseIPDB</a> – Bilinen kötü amaçlı IP\'lerin veritabanını korur; IP\'leri denetlemek ve raporlamak için bir API sağlar.</li>
      <li><a href="https://www.megarbl.net/index.php">MegaRBL.net</a> – Bilinen spam göndericilerinin listelerini sağlar; IP/ASN spam etkinliklerini kontrol etmek için yararlıdır.</li>
      <li><a href="https://maikuolan.github.io/Vulnerability-Charts/">Güvenlik Açığı Tabloları</a> – Çeşitli paketler (HHVM, PHP, phpMyAdmin, Python, vb.) güvenli/güvensiz sürümlerini listeler.</li>
      <li><a href="https://maikuolan.github.io/Compatibility-Charts/">Uyumluluk Tabloları</a> – Çeşitli paketler (CIDRAM, phpMussel, vb.) için uyumluluk bilgilerini listeler.</li>
    </ul>';

$CIDRAM['lang']['msg_template_2fa'] = '<center><p>Merhaba, %1$s.<br />
<br />
CIDRAM ön ucuna giriş yapmak için 2FA kodunuz:</p>
<h1>%2$s</h1>
<p>Bu kod 10 dakika içinde sona eriyor.</p></center>';
$CIDRAM['lang']['msg_subject_2fa'] = '2FA (İki Faktörlü Kimlik Doğrulama)';
