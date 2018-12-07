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
 * This file: Korean language data for the front-end (last modified: 2018.12.06).
 */

/** Prevents execution from outside of CIDRAM. */
if (!defined('CIDRAM')) {
    die('[CIDRAM] This should not be accessed directly.');
}

foreach (['IPv4', 'IPv6'] as $CIDRAM['IPvX']) {
    $CIDRAM['Pre'] = '기본 ' . $CIDRAM['IPvX'] . ' 서명 일반적으로 기본 패키지에 포함되어 있습니다. ';
    $CIDRAM['lang']['Extended Description: ' . $CIDRAM['IPvX']] = $CIDRAM['Pre'] . '불필요한 클라우드 서비스와 非人의 끝점을 차단합니다.';
    $CIDRAM['lang']['Extended Description: ' . $CIDRAM['IPvX'] . '-Bogons'] = $CIDRAM['Pre'] . '보곤/화성 CIDR을 차단합니다.';
    $CIDRAM['lang']['Extended Description: ' . $CIDRAM['IPvX'] . '-ISPs'] = $CIDRAM['Pre'] . '스패머을 가진 위험한 ISP를 차단합니다.';
    $CIDRAM['lang']['Extended Description: ' . $CIDRAM['IPvX'] . '-Other'] = $CIDRAM['Pre'] . '프록시, VPN 및 기타 불필요한 서비스 CIDR을 차단합니다.';
    $CIDRAM['Pre'] = $CIDRAM['IPvX'] . '의 서명 파일 (%s).';
    $CIDRAM['lang']['Name: ' . $CIDRAM['IPvX']] = sprintf($CIDRAM['Pre'], '불필요한 클라우드 서비스와 非人의 끝점');
    $CIDRAM['lang']['Name: ' . $CIDRAM['IPvX'] . '-Bogons'] = sprintf($CIDRAM['Pre'], '보곤/화성 CIDR');
    $CIDRAM['lang']['Name: ' . $CIDRAM['IPvX'] . '-ISPs'] = sprintf($CIDRAM['Pre'], '스패머을 가진 위험한 ISP');
    $CIDRAM['lang']['Name: ' . $CIDRAM['IPvX'] . '-Other'] = sprintf($CIDRAM['Pre'], '프록시, VPN 및 기타 불필요한 서비스 CIDR');
}
unset($CIDRAM['Pre'], $CIDRAM['IPvX']);

$CIDRAM['lang']['Extended Description: Bypasses'] = '기본 서명 우회 일반적으로 기본 패키지에 포함되어 있습니다.';
$CIDRAM['lang']['Extended Description: CIDRAM'] = '메인 패키지 (서명, 문서, 구성, 은 포함되지 않습니다).';
$CIDRAM['lang']['Extended Description: Chart.js'] = '프런트 엔드에서 원형 차트를 생성 할 수 있습니다.<br /><a href="https://github.com/chartjs/Chart.js">Chart.js</a>는 <a href="https://opensource.org/licenses/MIT">MIT license</a>를 통해 사용 가능합니다.';
$CIDRAM['lang']['Extended Description: PHPMailer'] = '이메일 전송과 관련된 기능 사용에 필요합니다.<br /><a href="https://github.com/PHPMailer/PHPMailer">PHPMailer</a>는 <a href="https://github.com/PHPMailer/PHPMailer/blob/master/LICENSE">LGPLv2.1</a> 라이센스를 통해 사용 가능합니다.';
$CIDRAM['lang']['Extended Description: module_badhosts.php'] = '스패머, 해커 및 기타 사기꾼이 자주 사용하는 호스트를 차단합니다.';
$CIDRAM['lang']['Extended Description: module_badhosts_isps.php'] = '스팸 발송자, 해커 및 기타 사기꾼이 자주 사용하는 ISP에 속한 호스트를 차단합니다.';
$CIDRAM['lang']['Extended Description: module_badtlds.php'] = '스팸 발송자, 해커 및 기타 사기꾼이 자주 사용하는 TLD에 속한 호스트를 차단합니다.';
$CIDRAM['lang']['Extended Description: module_botua.php'] = '원치 않는 봇과 관련없는 사용자 에이전트를 차단합니다.';
$CIDRAM['lang']['Extended Description: module_cookies.php'] = '위험한 쿠키에 대해 제한된 보호 기능을 제공합니다.';
$CIDRAM['lang']['Extended Description: module_extras.php'] = '요청에서 자주 사용되는 공격 경로에 대해 몇 가지 제한된 보호를 제공합니다.';
$CIDRAM['lang']['Extended Description: module_sfs.php'] = 'SFS가 나열한 IP에 대한 등록 및 로그인 페이지를 보호합니다.';
$CIDRAM['lang']['Name: Bypasses'] = '기본 서명 우회.';
$CIDRAM['lang']['Name: compat_bunnycdn.php'] = 'BunnyCDN 호환성 모듈';
$CIDRAM['lang']['Name: module_badhosts.php'] = '위험한 호스트 차단 모듈';
$CIDRAM['lang']['Name: module_badhosts_isps.php'] = '위험한 호스트 차단 모듈 (ISP)';
$CIDRAM['lang']['Name: module_badtlds.php'] = '위험한 TLD 차단 모듈';
$CIDRAM['lang']['Name: module_baidublocker.php'] = 'Baidu 차단기 모듈';
$CIDRAM['lang']['Name: module_botua.php'] = '선택적 사용자 에이전트 모듈';
$CIDRAM['lang']['Name: module_cookies.php'] = '선택적 쿠키 스캐너 모듈';
$CIDRAM['lang']['Name: module_extras.php'] = '선택적 보안 엑스트라 스 모듈';
$CIDRAM['lang']['Name: module_sfs.php'] = 'Stop Forum Spam 모듈';
$CIDRAM['lang']['Name: module_ua.php'] = '빈 UA 차단기 모듈';
$CIDRAM['lang']['Name: module_yandexblocker.php'] = 'Yandex 차단기 모듈';
$CIDRAM['lang']['bNav_home_logout'] = '<a href="?">홈</a> | <a href="?cidram-page=logout">로그 아웃</a>';
$CIDRAM['lang']['bNav_logout'] = '<a href="?cidram-page=logout">로그 아웃</a>';
$CIDRAM['lang']['config_PHPMailer_Enable2FA'] = '이 지시문은 프런트 엔드 계정에 2FA를 사용할지 여부를 결정합니다.';
$CIDRAM['lang']['config_PHPMailer_EventLog'] = 'PHPMailer와 관련된 모든 이벤트를 기록하는 파일입니다. 파일 이름을 지정하십시오. 비활성화하려면 비워 둡니다.';
$CIDRAM['lang']['config_PHPMailer_Host'] = '아웃 바운드 전자 메일에 사용할 SMTP 호스트입니다.';
$CIDRAM['lang']['config_PHPMailer_Password'] = 'SMTP를 통해 이메일을 보낼 때 사용할 비밀번호입니다.';
$CIDRAM['lang']['config_PHPMailer_Port'] = '아웃 바운드 이메일에 사용할 포트 번호입니다. Default (기본 설정) = 587.';
$CIDRAM['lang']['config_PHPMailer_SMTPAuth'] = '이 지시문은 SMTP 세션을 인증할지 여부를 결정합니다 (보통 이것을 무시해야합니다).';
$CIDRAM['lang']['config_PHPMailer_SMTPSecure'] = 'SMTP를 통해 이메일을 보낼 때 사용할 프로토콜 (TLS 또는 SSL).';
$CIDRAM['lang']['config_PHPMailer_SkipAuthProcess'] = '<code>true</code> 일 때, PHPMailer는 전자 메일 전송을위한 SMTP 인증 프로세스를 건너 뛰도록 지시합니다. 이 프로세스를 건너 뛰면 아웃 바운드 전자 메일이 MITM 공격에 노출 될 수 있으므로 피해야합니다. 특정 경우에 필요할 수 있음 (예 : PHPMailer가 SMTP 서버에 제대로 연결할 수없는 경우).';
$CIDRAM['lang']['config_PHPMailer_Username'] = 'SMTP를 통해 이메일을 보낼 때 사용할 사용자 이름입니다.';
$CIDRAM['lang']['config_PHPMailer_addReplyToAddress'] = 'SMTP를 통해 전자 메일을 보낼 때 인용 할 회신 주소입니다.';
$CIDRAM['lang']['config_PHPMailer_addReplyToName'] = 'SMTP를 통해 이메일을 보낼 때 인용 할 회신 이름입니다.';
$CIDRAM['lang']['config_PHPMailer_setFromAddress'] = 'SMTP를 통해 전자 메일을 보낼 때 인용 할 보낸 사람 주소입니다.';
$CIDRAM['lang']['config_PHPMailer_setFromName'] = 'SMTP를 통해 전자 메일을 보낼 때 인용 할 보낸 사람 이름입니다.';
$CIDRAM['lang']['config_experimental'] = '불안정/실험적!';
$CIDRAM['lang']['config_general_FrontEndLog'] = '프론트 엔드 로그인 시도를 기록하는 파일. 파일 이름을 지정하십시오. 비활성화하려면 비워 둡니다.';
$CIDRAM['lang']['config_general_allow_gethostbyaddr_lookup'] = 'UDP를 사용할 수 없을 때 gethostbyaddr 검색을 허용 하시겠습니까? True = 예 (Default / 기본 설정); False = 아니오.';
$CIDRAM['lang']['config_general_ban_override'] = '"infraction_limit"를 초과하면 "forbid_on_block"를 덮어 쓰시겠습니까? 덮어 쓸 때 : 차단 된 요청은 빈 페이지를 반환합니다 (템플릿 파일은 사용되지 않습니다). 200 = 덮어 쓰지 (Default / 기본값). 다른 값은 "forbid_on_block"에 사용할 수있는 값과 같습니다.';
$CIDRAM['lang']['config_general_default_algo'] = '향후 모든 암호와 세션에 사용할 알고리즘을 정의합니다. 옵션 : PASSWORD_DEFAULT (default / 기본 설정), PASSWORD_BCRYPT, PASSWORD_ARGON2I (PHP &gt;= 7.2.0 가 필요합니다).';
$CIDRAM['lang']['config_general_default_dns'] = '호스트 이름 검색에 사용하는 DNS (도메인 이름 시스템) 서버의 쉼표로 구분 된 목록입니다. Default (기본 설정) = "8.8.8.8,8.8.4.4" (Google DNS). 주의 : 당신이 무엇을하고 있는지 모르는 한이를 변경하지 마십시오.';
$CIDRAM['lang']['config_general_disable_cli'] = 'CLI 모드를 해제 하는가? CLI 모드 (시에루아이 모드)는 기본적으로 활성화되어 있지만, 테스트 도구 (PHPUnit 등) 및 CLI 기반의 응용 프로그램과 간섭하는 가능성이 없다고는 단언 할 수 없습니다. CLI 모드를 해제 할 필요가 없으면이 데레쿠티부 무시 받고 괜찮습니다. <code>false</code> = CLI 모드를 활성화합니다 (Default / 기본 설정); <code>true</code> = CLI 모드를 해제합니다.';
$CIDRAM['lang']['config_general_disable_frontend'] = '프론트 엔드에 대한 액세스를 비활성화하거나? 프론트 엔드에 대한 액세스는 CIDRAM을 더 쉽게 관리 할 수 있습니다. 상기 그것은 또한 잠재적 인 보안 위험이 될 수 있습니다. 백엔드를 통해 관리하는 것이 좋습니다,하지만 이것이 불가능한 경우 프론트 엔드에 대한 액세스를 제공. 당신이 그것을 필요로하지 않는 한 그것을 해제합니다. <code>false</code> = 프론트 엔드에 대한 액세스를 활성화합니다; <code>true</code> = 프론트 엔드에 대한 액세스를 비활성화합니다 (Default / 기본 설정).';
$CIDRAM['lang']['config_general_disable_webfonts'] = '웹 글꼴을 사용하지 않도록 설정 하시겠습니까? True = 예 (Default / 기본 설정); False = 아니오.';
$CIDRAM['lang']['config_general_emailaddr'] = '여기에 이메일 주소를 입력하고 사용자가 차단 된 경우 사용자에게 보낼 수 있습니다. 이것은 지원과 지원에 사용할 수 있습니다 (실수로 차단 된 경우 등). 경고 : 여기에 입력 된 전자 이메일 주소는 아마 스팸 로봇에 의해 취득됩니다. 여기에서 제공되는 전자 이메일 주소는 모든 일회용하는 것이 좋습니다 (예를 들어, 기본 개인 주소 또는 비즈니스 주소를 사용하지 않는 등).';
$CIDRAM['lang']['config_general_emailaddr_display_style'] = '사용자에게 전자 메일 주소를 어떻게 표시 하시겠습니까?';
$CIDRAM['lang']['config_general_empty_fields'] = '블록 이벤트 정보를 로깅하고 표시 할 때, CIDRAM이 빈 필드를 어떻게 처리해야합니까? "include" = 빈 필드를 포함하십시오. "omit" = 빈 필드는 생략하십시오 (Default / 기본 설정).';
$CIDRAM['lang']['config_general_forbid_on_block'] = '요청을 차단할 때 CIDRAM이 전송해야하는 HTTP 상태 메시지는 무엇입니까? (자세한 내용은 설명서를 참조하십시오).';
$CIDRAM['lang']['config_general_force_hostname_lookup'] = '호스트 이름 검색을 시행 하시겠습니까 (모든 요청)? True = 예; False = 아니오 (Default / 기본 설정). 호스트 이름 검색은 일반적으로 "필요에 따라"수행됩니다, 그러나 모든 요청에 대해 강제 될 수 있습니다. 이는 로그 파일에보다 자세한 정보를 제공하는 데 유용 할 수 있습니다, 그러나 또한 성능에 약간 부정적인 영향을 줄 수 있습니다.';
$CIDRAM['lang']['config_general_hide_version'] = '로그 및 페이지 출력에서 버전 정보 숨기기? True = 예; False = 아니오 (Default / 기본 설정).';
$CIDRAM['lang']['config_general_ipaddr'] = '연결 요청의 IP 주소를 어디에서 찾을 것인가에 대해 (Cloudflare 같은 서비스에 대해 유효). Default (기본 설정) = REMOTE_ADDR. 주의 : 당신이 무엇을하고 있는지 모르는 한이를 변경하지 마십시오.';
$CIDRAM['lang']['config_general_lang'] = 'CIDRAM의 기본 언어를 설정합니다.';
$CIDRAM['lang']['config_general_log_banned_ips'] = '금지 된 IP에서 차단 된 요청을 로그 파일에 포함됩니까? True = 예 (Default / 기본값); False = 아니오.';
$CIDRAM['lang']['config_general_log_rotation_action'] = '로그 회전은 한 번에 존재해야하는 로그 파일 수를 제한합니다. 새 로그 파일을 만들 때 총 로그, 파일 수가 지정된 제한을 초과하면, 지정된 작업이 수행됩니다. 여기서 원하는 동작을 지정할 수 있습니다. Delete = 제한이 더 이상 초과되지 않을 때까지, 가장 오래된 로그 파일을 삭제하십시오. Archive = 제한이 더 이상 초과되지 않을 때까지, 가장 오래된 로그 파일을 보관 한 다음 삭제하십시오.';
$CIDRAM['lang']['config_general_log_rotation_limit'] = '로그 회전은 한 번에 존재해야하는 로그 파일 수를 제한합니다. 새 로그 파일을 만들 때 총 로그, 파일 수가 지정된 제한을 초과하면, 지정된 작업이 수행됩니다. 여기서 원하는 한계를 지정할 수 있습니다. 값 0은 로그 회전을 비활성화합니다.';
$CIDRAM['lang']['config_general_logfile'] = '액세스 시도 저지를 기록, 인간에 의해 읽기 가능. 파일 이름을 지정하십시오. 비활성화하려면 비워 둡니다.';
$CIDRAM['lang']['config_general_logfileApache'] = '액세스 시도 저지를 기록, Apache 스타일. 파일 이름을 지정하십시오. 비활성화하려면 비워 둡니다.';
$CIDRAM['lang']['config_general_logfileSerialized'] = '액세스 시도 저지를 기록 직렬화되었습니다. 파일 이름을 지정하십시오. 비활성화하려면 비워 둡니다.';
$CIDRAM['lang']['config_general_maintenance_mode'] = '유지 관리 모드를 사용 하시겠습니까? True = 예; False = 아니오 (Default / 기본 설정). 프런트 엔드 이외의 모든 것을 비활성화합니다. CMS, 프레임 워크 등을 업데이트 할 때 유용합니다.';
$CIDRAM['lang']['config_general_max_login_attempts'] = '로그인 시도 최대 횟수입니다.';
$CIDRAM['lang']['config_general_numbers'] = '어떻게 숫자를 표시하는 것을 선호합니까? 가장 정확한 것으로 보이는 예제를 선택하십시오.';
$CIDRAM['lang']['config_general_protect_frontend'] = 'CIDRAM 의해 보통 제공되는 보호를 프론트 엔드에 적용할지 여부를 지정합니다. True = 예 (Default / 기본값); False = 아니오.';
$CIDRAM['lang']['config_general_search_engine_verification'] = '검색 엔진의 요청을 확인해야합니까? 검색 엔진을 확인하여, 위반의 최대 수를 초과했기 때문에 검색 엔진이 금지되지 않는 것이 보증됩니다 (검색 엔진을 금지하는 것은 일반적으로 검색 엔진 순위의, SEO 등에 악영향을 미칩니다). 확인되면, 검색 엔진이 차단 될 수 있지만, 그러나 금지되지 않습니다. 검증되지 않은 경우는, 위반의 최대를 초과 한 결과, 금지 될 수 있습니다. 또한 검색 엔진의 검증은 사칭 된 검색 엔진으로부터 보호합니다 (이러한 요청은 차단됩니다). True = 검색 엔진의 검증을 활성화한다 (Default/기본 설정); False = 검색 엔진의 검증을 무효로한다.';
$CIDRAM['lang']['config_general_silent_mode'] = '"액세스 거부" 페이지를 표시하는 대신 CIDRAM는 차단 된 액세스 시도를 자동으로 리디렉션해야합니까? 그렇다면 리디렉션 위치를 지정합니다. 아니오의 경우이 변수를 비워 둡니다.';
$CIDRAM['lang']['config_general_social_media_verification'] = '소셜 미디어 요청을 확인하려고합니까? 소셜 미디어 인증은 가짜 소셜 미디어 요청으로부터 보호합니다 (이러한 요청은 차단됩니다). True = 소셜 미디어 검증을 활성화한다 (Default / 기본 설정); False = 소셜 미디어 인증을 무효로한다.';
$CIDRAM['lang']['config_general_statistics'] = 'CIDRAM 사용 통계를 추적합니까? True = 예; False = 아니오 (Default / 기본 설정).';
$CIDRAM['lang']['config_general_timeFormat'] = 'CIDRAM에서 사용되는 날짜 형식. 추가 옵션이 요청에 따라 추가 될 수 있습니다.';
$CIDRAM['lang']['config_general_timeOffset'] = '시간대 오프셋 (분).';
$CIDRAM['lang']['config_general_timezone'] = '귀하의 시간대.';
$CIDRAM['lang']['config_general_truncate'] = '로그 파일이 특정 크기에 도달하면 잘 있습니까? 값은 로그 파일이 잘 리기 전에 커질 가능성이있는 B/KB/MB/GB/TB 단위의 최대 크기입니다. 기본값 "0KB"은 절단을 해제합니다 (로그 파일은 무한정 확장 할 수 있습니다). 참고 : 개별 로그 파일에 적용됩니다! 로그 파일의 크기는 일괄 적으로 고려되지 않습니다.';
$CIDRAM['lang']['config_legal_omit_hostname'] = '로그에서 호스트 이름을 생략 하시겠습니까? True = 예; False = 아니오 (Default / 기본 설정).';
$CIDRAM['lang']['config_legal_omit_ip'] = '로그에서 IP 주소를 생략 하시겠습니까? True = 예; False = 아니오 (Default / 기본 설정). 참고 : "pseudonymise_ip_addresses"는 "omit_ip"가 "true"일 때 중복됩니다.';
$CIDRAM['lang']['config_legal_omit_ua'] = '로그에서 사용자 에이전트를 생략 하시겠습니까? True = 예; False = 아니오 (Default / 기본 설정).';
$CIDRAM['lang']['config_legal_privacy_policy'] = '생성 된 페이지의 꼬리말에 표시 할 관련 개인 정보 정책 방침의 주소입니다. URL 지정, 또는 사용하지 않으려면 비워 두십시오.';
$CIDRAM['lang']['config_legal_pseudonymise_ip_addresses'] = '로그 파일을 쓸 때 가명으로하다 IP 주소? True = 예; False = 아니오 (Default / 기본 설정).';
$CIDRAM['lang']['config_rate_limiting_allowance_period'] = '사용량을 모니터 할 시간입니다. Default (기본 설정) = 0.';
$CIDRAM['lang']['config_rate_limiting_max_bandwidth'] = '향후 요청에 대해 속도 제한을 사용하기 전에 허용 기간 내에 허용되는 최대 대역폭입니다. 0 값은 이러한 유형의 속도 제한을 비활성화합니다. Default (기본 설정) = 0KB.';
$CIDRAM['lang']['config_rate_limiting_max_requests'] = '향후 요청에 대해 속도 제한을 사용하도록 설정하기 전에 허용 기간 내에 허용되는 최대 요청 수입니다. 0 값은 이러한 유형의 속도 제한을 비활성화합니다. Default (기본 설정) = 0.';
$CIDRAM['lang']['config_rate_limiting_precision_ipv4'] = 'IPv4 사용을 모니터링 할 때 사용할 정밀도입니다. 값은 CIDR 블록 크기와 동일합니다. 최상의 정밀도를 위해 32로 설정하십시오. Default (기본 설정) = 32.';
$CIDRAM['lang']['config_rate_limiting_precision_ipv6'] = 'IPv6 사용을 모니터링 할 때 사용할 정밀도입니다. 값은 CIDR 블록 크기와 동일합니다. 최상의 정밀도를 위해 128로 설정하십시오. Default (기본 설정) = 128.';
$CIDRAM['lang']['config_recaptcha_api'] = '어떤 API를 사용할 수 있습니까? V2 또는 Invisible?';
$CIDRAM['lang']['config_recaptcha_expiry'] = 'reCAPTCHA 인스턴스를 기억 시간.';
$CIDRAM['lang']['config_recaptcha_lockip'] = 'reCAPTCHA를 IP로 잠금 하시겠습니까?';
$CIDRAM['lang']['config_recaptcha_lockuser'] = 'reCAPTCHA를 사용자에 잠금 하시겠습니까?';
$CIDRAM['lang']['config_recaptcha_logfile'] = 'reCAPTCHA 시도 기록. 파일 이름을 지정하십시오. 비활성화하려면 비워 둡니다.';
$CIDRAM['lang']['config_recaptcha_secret'] = '이 값은 당신의 reCAPTCHA에 대한 "secret key" 에 대응하고있을 필요가 있습니다; 이것은 reCAPTCHA 대시 보드에서 찾을 수 있습니다.';
$CIDRAM['lang']['config_recaptcha_signature_limit'] = 'reCAPTCHA 인스턴스가 제공 될 때 트리거 될 수있는 최대 서명 수입니다. Default (기본 설정) = 1. 특정 요청에 대해이 수가 초과되면, reCAPTCHA 인스턴스가 제공되지 않습니다.';
$CIDRAM['lang']['config_recaptcha_sitekey'] = '이 값은 당신의 reCAPTCHA에 대한 "site key" 에 대응하고있을 필요가 있습니다; 이것은 reCAPTCHA 대시 보드에서 찾을 수 있습니다.';
$CIDRAM['lang']['config_recaptcha_usemode'] = 'reCAPTCHA를 CIDRAM에서 사용하는 방법 (문서를 참조하십시오).';
$CIDRAM['lang']['config_signatures_block_bogons'] = '화성\ぼごんから의 CIDR을 차단해야합니까? 당신은 로컬 호스트에서 또는 귀하의 LAN에서 로컬 네트워크에서 연결을 수신 한 경우, 이것은 false로 설정해야합니다. 없는 경우에는이를 true로 설정해야합니다.';
$CIDRAM['lang']['config_signatures_block_cloud'] = '클라우드 서비스에서 CIDR을 차단해야합니까? 당신의 웹 사이트에서 API 서비스를 운영하거나 당신이 웹 사이트 간 연결이 예상되는 경우, 이것은 false로 설정해야합니다. 없는 경우에는이를 true로 설정해야합니다.';
$CIDRAM['lang']['config_signatures_block_generic'] = '일반적인 CIDR을 차단해야합니까? (다른 옵션과 관련되지 않은).';
$CIDRAM['lang']['config_signatures_block_legal'] = '법적 의무에 대응하여 CIDR을 차단 하시겠습니까? CIDRAM은 어떤 CIDR을 기본적으로 "법적 의무에" 연결할 수 없기 때문에이 지시문은 일반적으로 효과가 없습니다. 하지만, 법적 이유로 존재할 가능성이있는 모든 사용자 정의 시그니처 파일 또는 모듈의 이익을위한 추가 제어 수단으로 존재한다.';
$CIDRAM['lang']['config_signatures_block_malware'] = '멀웨어와 관련된 IP를 차단 하시겠습니까? 여기에는 C&C 서버, 감염된 시스템, 맬웨어 배포와 관련된 컴퓨터 등이 포함됩니다.';
$CIDRAM['lang']['config_signatures_block_proxies'] = '프록시 서비스 또는 VPN에서 CIDR을 차단해야합니까? 프록시 서비스 또는 VPN이 필요한 경우는, false로 설정해야합니다. 없는 경우에는 보안을 향상시키기 위해이를 true로 설정해야합니다.';
$CIDRAM['lang']['config_signatures_block_spam'] = '스팸 때문에 CIDR을 차단해야합니까? 문제가있는 경우를 제외하고 일반적으로이를 true로 설정해야합니다.';
$CIDRAM['lang']['config_signatures_default_tracktime'] = '모듈에 의해 금지 된 IP를 추적하는 초. Default (기본값) = 604800 (1 주).';
$CIDRAM['lang']['config_signatures_infraction_limit'] = 'IP가 IP 추적에 의해 금지되기 전에 발생하는 것이 허용된다 위반의 최대 수. Default (기본값) = 10.';
$CIDRAM['lang']['config_signatures_ipv4'] = 'IPv4의 서명 파일 목록 (CIDRAM는 이것을 사용합니다). 이것은 쉼표로 구분되어 있습니다.';
$CIDRAM['lang']['config_signatures_ipv6'] = 'IPv6의 서명 파일 목록 (CIDRAM는 이것을 사용합니다). 이것은 쉼표로 구분되어 있습니다.';
$CIDRAM['lang']['config_signatures_modules'] = 'IPv4/IPv6 서명을 체크 한 후로드 모듈 파일의 목록입니다. 이것은 쉼표로 구분되어 있습니다.';
$CIDRAM['lang']['config_signatures_track_mode'] = '위반은 언제 계산해야합니까? False = IP가 모듈에 의해 차단되는 경우. True = 뭐든지 이유로 IP가 차단 된 경우.';
$CIDRAM['lang']['config_template_data_Magnification'] = '글꼴 배율. Default (기본 설정) = 1.';
$CIDRAM['lang']['config_template_data_css_url'] = '사용자 정의 테마의 CSS 파일 URL입니다.';
$CIDRAM['lang']['config_template_data_theme'] = 'CIDRAM에 사용할 기본 테마.';
$CIDRAM['lang']['confirm_action'] = '"%s"하시겠습니까?';
$CIDRAM['lang']['field_2fa'] = '2FA 코드';
$CIDRAM['lang']['field_Request_Method'] = '요청 방법';
$CIDRAM['lang']['field_activate'] = '활성화';
$CIDRAM['lang']['field_add_more_conditions'] = '조건 추가';
$CIDRAM['lang']['field_banned'] = '금지 된';
$CIDRAM['lang']['field_blocked'] = '차단 된셨습니까?';
$CIDRAM['lang']['field_clear'] = '취소';
$CIDRAM['lang']['field_clear_all'] = '모두 취소';
$CIDRAM['lang']['field_clickable_link'] = '클릭 가능한 링크';
$CIDRAM['lang']['field_component'] = '구성 요소';
$CIDRAM['lang']['field_confirm'] = '확인';
$CIDRAM['lang']['field_create_new_account'] = '새로운 계정 만들기';
$CIDRAM['lang']['field_deactivate'] = '비활성화';
$CIDRAM['lang']['field_delete'] = '삭제';
$CIDRAM['lang']['field_delete_account'] = '계정 삭제';
$CIDRAM['lang']['field_download_file'] = '다운로드';
$CIDRAM['lang']['field_edit_file'] = '편집';
$CIDRAM['lang']['field_expiry'] = '만료';
$CIDRAM['lang']['field_false'] = 'False (거짓)';
$CIDRAM['lang']['field_file'] = '파일';
$CIDRAM['lang']['field_filename'] = '파일 이름 : ';
$CIDRAM['lang']['field_filetype_directory'] = '디렉토리';
$CIDRAM['lang']['field_filetype_info'] = '{EXT} 파일';
$CIDRAM['lang']['field_filetype_unknown'] = '알 수없는';
$CIDRAM['lang']['field_include'] = '빈 필드를 포함하십시오';
$CIDRAM['lang']['field_infractions'] = '위반';
$CIDRAM['lang']['field_install'] = '설치';
$CIDRAM['lang']['field_ip_address'] = 'IP 주소';
$CIDRAM['lang']['field_latest_version'] = '최신 버전';
$CIDRAM['lang']['field_log_in'] = '로그인';
$CIDRAM['lang']['field_new_name'] = '새 이름 :';
$CIDRAM['lang']['field_nonclickable_text'] = '클릭 할 수없는 텍스트';
$CIDRAM['lang']['field_ok'] = '확인';
$CIDRAM['lang']['field_omit'] = '빈 필드는 생략하십시오';
$CIDRAM['lang']['field_options'] = '옵션';
$CIDRAM['lang']['field_password'] = '비밀번호';
$CIDRAM['lang']['field_permissions'] = '권한';
$CIDRAM['lang']['field_range'] = '범위 (처음 – 마지막)';
$CIDRAM['lang']['field_reasonmessage'] = '왜 차단이 되셨나요 (상세한)';
$CIDRAM['lang']['field_rename_file'] = '이름을 변경하려면';
$CIDRAM['lang']['field_reset'] = '재설정';
$CIDRAM['lang']['field_set_new_password'] = '새 암호를 설정합니다';
$CIDRAM['lang']['field_size'] = '전체 크기 : ';
$CIDRAM['lang']['field_size_GB'] = 'GB';
$CIDRAM['lang']['field_size_KB'] = 'KB';
$CIDRAM['lang']['field_size_MB'] = 'MB';
$CIDRAM['lang']['field_size_TB'] = 'TB';
$CIDRAM['lang']['field_size_bytes'] = '바이트';
$CIDRAM['lang']['field_status'] = '상태';
$CIDRAM['lang']['field_system_timezone'] = '시스템 기본 시간대를 사용하십시오.';
$CIDRAM['lang']['field_tracking'] = '추적';
$CIDRAM['lang']['field_true'] = 'True (참된)';
$CIDRAM['lang']['field_ualc'] = '사용자 에이전트 (소문자)';
$CIDRAM['lang']['field_uninstall'] = '제거';
$CIDRAM['lang']['field_update'] = '업데이트';
$CIDRAM['lang']['field_update_all'] = '모두 업데이트';
$CIDRAM['lang']['field_upload_file'] = '새로운 파일을 업로드하기';
$CIDRAM['lang']['field_username'] = '사용자 이름';
$CIDRAM['lang']['field_verify'] = '검증';
$CIDRAM['lang']['field_verify_all'] = '모두 검증';
$CIDRAM['lang']['field_your_version'] = '사용 버전';
$CIDRAM['lang']['header_login'] = '계속하려면 로그인하십시오.';
$CIDRAM['lang']['label_active_config_file'] = '활성 구성 파일 : ';
$CIDRAM['lang']['label_actual'] = '현재';
$CIDRAM['lang']['label_aux_actBlk'] = '차단하';
$CIDRAM['lang']['label_aux_actByp'] = '우회하';
$CIDRAM['lang']['label_aux_actGrl'] = '그레이리스트';
$CIDRAM['lang']['label_aux_actWhl'] = '화이트리스트';
$CIDRAM['lang']['label_aux_create_new_rule'] = '새 규칙 만들기';
$CIDRAM['lang']['label_aux_logic_all'] = '규칙을 실행하려면 모든 조건이 충족되어야합니다.';
$CIDRAM['lang']['label_aux_logic_any'] = '모든 "같지 않음"(≠) 조건도 충족되면 모든 "같음"(=) 조건이 규칙을 트리거 할 수 있습니다.';
$CIDRAM['lang']['label_aux_menu_action'] = '다음 조건이 충족되면 요청을 %s십시오.';
$CIDRAM['lang']['label_aux_menu_method'] = '%s를 사용하여 조건을 테스트하십시오.';
$CIDRAM['lang']['label_aux_mtdReg'] = '정규식';
$CIDRAM['lang']['label_aux_mtdStr'] = '직접 문자열 비교';
$CIDRAM['lang']['label_aux_mtdWin'] = 'Windows 스타일 와일드 카드';
$CIDRAM['lang']['label_aux_name'] = '새 규칙의 이름 :';
$CIDRAM['lang']['label_aux_reason'] = '차단되었을 때 사용자에게 주어진 이유 :';
$CIDRAM['lang']['label_backup_location'] = '저장소 백업 위치 (비상 사태의 경우, 또는 다른 모든 것이 실패한 경우) :';
$CIDRAM['lang']['label_banned'] = '금지 된 요청';
$CIDRAM['lang']['label_blocked'] = '차단 된 요청';
$CIDRAM['lang']['label_branch'] = '분기 최신 안정 :';
$CIDRAM['lang']['label_check_aux'] = '또한 보조 규칙에 대해 테스트하십시오.';
$CIDRAM['lang']['label_check_modules'] = '모듈에 대해서도 테스트하십시오.';
$CIDRAM['lang']['label_cidram'] = '사용 된 CIDRAM 버전 :';
$CIDRAM['lang']['label_clientinfo'] = '사용자 정보 :';
$CIDRAM['lang']['label_displaying'] = '<span class="txtRd">%s</span> 항목이 표시됩니다.';
$CIDRAM['lang']['label_displaying_that_cite'] = '"%2$s"라고 표시된 <span class="txtRd">%1$s</span> 개의 항목이 표시됩니다.';
$CIDRAM['lang']['label_expected'] = '예상 된';
$CIDRAM['lang']['label_expires'] = '만료일 : ';
$CIDRAM['lang']['label_false_positive_risk'] = '거짓 양성 위험 : ';
$CIDRAM['lang']['label_fmgr_cache_data'] = '캐시 데이터 및 임시 파일 ';
$CIDRAM['lang']['label_fmgr_disk_usage'] = 'CIDRAM 디스크 사용 : ';
$CIDRAM['lang']['label_fmgr_free_space'] = '사용 가능한 디스크 공간 : ';
$CIDRAM['lang']['label_fmgr_total_disk_usage'] = '총 디스크 사용 : ';
$CIDRAM['lang']['label_fmgr_total_space'] = '총 디스크 공간 : ';
$CIDRAM['lang']['label_fmgr_updates_metadata'] = '구성 요소 업데이트 메타 데이터';
$CIDRAM['lang']['label_hide'] = '숨기다';
$CIDRAM['lang']['label_hide_hash_table'] = '해시 테이블 숨기기';
$CIDRAM['lang']['label_ignore'] = '이것을 무시하십시오';
$CIDRAM['lang']['label_never'] = '못';
$CIDRAM['lang']['label_os'] = '사용 된 운영 체제 :';
$CIDRAM['lang']['label_other'] = '다른';
$CIDRAM['lang']['label_other-ActiveIPv4'] = '활성 IPv4 서명 파일';
$CIDRAM['lang']['label_other-ActiveIPv6'] = '활성 IPv6 서명 파일';
$CIDRAM['lang']['label_other-ActiveModules'] = '활성 모듈';
$CIDRAM['lang']['label_other-Since'] = '시작일';
$CIDRAM['lang']['label_php'] = '사용 된 PHP 버전 :';
$CIDRAM['lang']['label_reCAPTCHA'] = 'reCAPTCHA 완료 시도';
$CIDRAM['lang']['label_results'] = '결과 (%s 입력된 – %s 거부된 – %s 받아 들인 – %s 합병된 – %s 출력된) :';
$CIDRAM['lang']['label_sapi'] = '사용 된 SAPI :';
$CIDRAM['lang']['label_show'] = '보여';
$CIDRAM['lang']['label_show_by_origin'] = '원점 별보기';
$CIDRAM['lang']['label_show_hash_table'] = '해시 테이블 표시';
$CIDRAM['lang']['label_signature_type'] = '서명 유형 :';
$CIDRAM['lang']['label_stable'] = '최신 안정 :';
$CIDRAM['lang']['label_sysinfo'] = '시스템 정보 :';
$CIDRAM['lang']['label_tests'] = '테스트 :';
$CIDRAM['lang']['label_total'] = '합계';
$CIDRAM['lang']['label_unignore'] = '이것을 무시하지 마라';
$CIDRAM['lang']['label_unstable'] = '최신 불안정 :';
$CIDRAM['lang']['label_used_with'] = '용법 : ';
$CIDRAM['lang']['label_your_ip'] = '당신의 IP :';
$CIDRAM['lang']['label_your_ua'] = '당신의 UA :';
$CIDRAM['lang']['link_accounts'] = '계정';
$CIDRAM['lang']['link_aux'] = '보조 규칙';
$CIDRAM['lang']['link_cache_data'] = '데이터 캐쉬';
$CIDRAM['lang']['link_cidr_calc'] = 'CIDR 계산기';
$CIDRAM['lang']['link_config'] = '구성';
$CIDRAM['lang']['link_documentation'] = '문서';
$CIDRAM['lang']['link_file_manager'] = '파일 관리자';
$CIDRAM['lang']['link_home'] = '홈';
$CIDRAM['lang']['link_ip_aggregator'] = 'IP 애그리게이터';
$CIDRAM['lang']['link_ip_test'] = 'IP 테스트';
$CIDRAM['lang']['link_ip_tracking'] = 'IP 추적';
$CIDRAM['lang']['link_logs'] = '로고스';
$CIDRAM['lang']['link_range'] = '범위 테이블';
$CIDRAM['lang']['link_sections_list'] = '섹션 목록';
$CIDRAM['lang']['link_statistics'] = '통계';
$CIDRAM['lang']['link_textmode'] = '텍스트 서식 지정 : <a href="%1$sfalse%2$s">단순한</a> – <a href="%1$strue%2$s">공상</a> – <a href="%1$stally%2$s">집계</a>';
$CIDRAM['lang']['link_updates'] = '업데이트';
$CIDRAM['lang']['logs_logfile_doesnt_exist'] = '선택한 로그는 존재하지 않습니다!';
$CIDRAM['lang']['logs_no_logfile_selected'] = '로그가 선택되어 있지 않습니다.';
$CIDRAM['lang']['logs_no_logfiles_available'] = '아니 로그를 사용할 수 있습니다.';
$CIDRAM['lang']['max_login_attempts_exceeded'] = '로그인 시도 횟수를 초과했습니다; 액세스 거부.';
$CIDRAM['lang']['previewer_days'] = '일';
$CIDRAM['lang']['previewer_hours'] = '시간';
$CIDRAM['lang']['previewer_minutes'] = '의사록';
$CIDRAM['lang']['previewer_months'] = '개월';
$CIDRAM['lang']['previewer_seconds'] = '초';
$CIDRAM['lang']['previewer_weeks'] = '주';
$CIDRAM['lang']['previewer_years'] = '연령';
$CIDRAM['lang']['response_2fa_invalid'] = '2FA 코드가 잘못 입력되었습니다. 인증 실패.';
$CIDRAM['lang']['response_2fa_valid'] = '성공적으로 인증되었습니다.';
$CIDRAM['lang']['response_accounts_already_exists'] = '계정이 이미 존재합니다!';
$CIDRAM['lang']['response_accounts_created'] = '계정 만들기에 성공했습니다!';
$CIDRAM['lang']['response_accounts_deleted'] = '계정 삭제가 성공했습니다!';
$CIDRAM['lang']['response_accounts_doesnt_exist'] = '계정이 존재하지 않습니다.';
$CIDRAM['lang']['response_accounts_password_updated'] = '암호 업데이트가 성공했습니다!';
$CIDRAM['lang']['response_activated'] = '활성화했습니다.';
$CIDRAM['lang']['response_activation_failed'] = '활성화에 실패했습니다!';
$CIDRAM['lang']['response_aux_none'] = '현재 보조 규칙이 없습니다.';
$CIDRAM['lang']['response_aux_rule_created_successfully'] = '새 보조 규칙 "%s"가 성공적으로 작성되었습니다.';
$CIDRAM['lang']['response_aux_rule_deleted_successfully'] = '보조 규칙 "%s"가 성공적으로 삭제되었습니다.';
$CIDRAM['lang']['response_checksum_error'] = '체크섬 오류! 파일이 거부되었습니다!';
$CIDRAM['lang']['response_component_successfully_installed'] = '구성 요소의 설치에 성공했습니다.';
$CIDRAM['lang']['response_component_successfully_uninstalled'] = '구성 요소의 제거는 성공했습니다.';
$CIDRAM['lang']['response_component_successfully_updated'] = '구성 요소의 업데이트에 성공했습니다!';
$CIDRAM['lang']['response_component_uninstall_error'] = '구성 요소 제거하는 동안 오류가 발생했습니다.';
$CIDRAM['lang']['response_configuration_updated'] = '구성 업데이트가 성공했습니다.';
$CIDRAM['lang']['response_deactivated'] = '비활성화했습니다.';
$CIDRAM['lang']['response_deactivation_failed'] = '비활성화에 실패했습니다!';
$CIDRAM['lang']['response_delete_error'] = '삭제에 실패했습니다!';
$CIDRAM['lang']['response_directory_deleted'] = '디렉토리가 성공적으로 삭제되었습니다!';
$CIDRAM['lang']['response_directory_renamed'] = '디렉토리의 이름이 변경되었습니다!';
$CIDRAM['lang']['response_error'] = '오류';
$CIDRAM['lang']['response_failed_to_install'] = '설치하지 못했습니다!';
$CIDRAM['lang']['response_failed_to_update'] = '업데이트하지 못했습니다!';
$CIDRAM['lang']['response_file_deleted'] = '파일 삭제가 성공했습니다!';
$CIDRAM['lang']['response_file_edited'] = '파일이 성공적으로 변경되었습니다!';
$CIDRAM['lang']['response_file_renamed'] = '파일 이름이 변경되었습니다!';
$CIDRAM['lang']['response_file_uploaded'] = '파일이 성공적으로 업로드되었습니다!';
$CIDRAM['lang']['response_login_invalid_password'] = '로그인 실패! 잘못된 암호!';
$CIDRAM['lang']['response_login_invalid_username'] = '로그인 실패! 사용자 이름은 존재하지 않습니다!';
$CIDRAM['lang']['response_login_password_field_empty'] = '암호가 비어 있습니다!';
$CIDRAM['lang']['response_login_username_field_empty'] = '사용자 이름 입력이 비어 있습니다!';
$CIDRAM['lang']['response_login_wrong_endpoint'] = '잘못된 끝점!';
$CIDRAM['lang']['response_no'] = '아니오';
$CIDRAM['lang']['response_possible_problem_found'] = '가능한 문제가 발견되었습니다.';
$CIDRAM['lang']['response_rename_error'] = '이름을 변경할 수 없습니다!';
$CIDRAM['lang']['response_sanity_1'] = '파일에 예상치 못한 내용이 포함되어 있습니다! 파일이 거부되었습니다!';
$CIDRAM['lang']['response_statistics_cleared'] = '통계가 삭제되었습니다.';
$CIDRAM['lang']['response_tracking_cleared'] = '추적이 취소되었습니다.';
$CIDRAM['lang']['response_updates_already_up_to_date'] = '이미 최신 상태입니다.';
$CIDRAM['lang']['response_updates_not_installed'] = '구성 요소 설치되어 있지 않습니다!';
$CIDRAM['lang']['response_updates_not_installed_php'] = '구성 요소 설치되어 있지 않습니다 (PHP &gt;= {V}가 필요합니다)!';
$CIDRAM['lang']['response_updates_outdated'] = '구식입니다!';
$CIDRAM['lang']['response_updates_outdated_manually'] = '구식입니다 (수동으로 업데이트하십시오)!';
$CIDRAM['lang']['response_updates_outdated_php_version'] = '구식입니다 (PHP &gt;= {V}가 필요합니다)!';
$CIDRAM['lang']['response_updates_unable_to_determine'] = '결정 수 없습니다.';
$CIDRAM['lang']['response_upload_error'] = '업로드에 실패했습니다!';
$CIDRAM['lang']['response_verification_failed'] = '검증 실패했습니다! 구성 요소가 손상되었을 수 있습니다.';
$CIDRAM['lang']['response_verification_success'] = '검증 성공! 문제는 발견되지 않았습니다.';
$CIDRAM['lang']['response_yes'] = '예';
$CIDRAM['lang']['security_warning'] = '요청을 처리하는 중에 예기치 않은 문제가 발생했습니다. 다시 시도하십시오. 문제가 지속되면 지원 부서에 문의하십시오.';
$CIDRAM['lang']['state_async_deny'] = '권한이 비동기 요청을 수행하기에 충분하지 않습니다. 다시 로그인하십시오.';
$CIDRAM['lang']['state_cache_is_empty'] = '캐시가 비어 있습니다.';
$CIDRAM['lang']['state_complete_access'] = '전체 액세스';
$CIDRAM['lang']['state_component_is_active'] = '구성 요소가 활성화됩니다.';
$CIDRAM['lang']['state_component_is_inactive'] = '구성 요소가 비활성 상태입니다.';
$CIDRAM['lang']['state_component_is_provisional'] = '구성 요소가 잠정입니다.';
$CIDRAM['lang']['state_default_password'] = '경고 : 기본 암호를 사용하여!';
$CIDRAM['lang']['state_email_sent'] = '이메일이 "%s"로 전송되었습니다.';
$CIDRAM['lang']['state_failed_missing'] = '필요한 구성 요소를 사용할 수 없어 작업이 실패했습니다.';
$CIDRAM['lang']['state_ignored'] = '무시 됨';
$CIDRAM['lang']['state_loading'] = '로드 중 ...';
$CIDRAM['lang']['state_loadtime'] = '페이지 요청이 <span class="txtRd">%s</span> 초 후에 완료되었습니다.';
$CIDRAM['lang']['state_logged_in'] = '로그인 했습니다.';
$CIDRAM['lang']['state_logged_in_2fa_pending'] = '로그인 했습니다 + 2FA를 기다리는 중.';
$CIDRAM['lang']['state_logged_out'] = '로그 아웃했습니다.';
$CIDRAM['lang']['state_logs_access_only'] = '로그에만 액세스';
$CIDRAM['lang']['state_maintenance_mode'] = '경고 : 유지 관리 모드가 활성화되었습니다!';
$CIDRAM['lang']['state_password_not_valid'] = '경고 : 이 계정은 올바른 암호를 사용하지 않습니다!';
$CIDRAM['lang']['state_risk_high'] = '높은';
$CIDRAM['lang']['state_risk_low'] = '낮은';
$CIDRAM['lang']['state_risk_medium'] = '중간';
$CIDRAM['lang']['state_sl_totals'] = '합계 (서명 : <span class="txtRd">%s</span> – 서명 섹션 : <span class="txtRd">%s</span> – 서명 파일 : <span class="txtRd">%s</span> – 고유 섹션 태그 : <span class="txtRd">%s</span>).';
$CIDRAM['lang']['state_tracking'] = '현재 %s 개의 IP를 추적 중입니다.';
$CIDRAM['lang']['switch-hide-non-outdated-set-false'] = '비 구형을 숨기지 않고';
$CIDRAM['lang']['switch-hide-non-outdated-set-true'] = '비 구식 숨기기';
$CIDRAM['lang']['switch-hide-unused-set-false'] = '미사용을 숨기지 않고';
$CIDRAM['lang']['switch-hide-unused-set-true'] = '미사용 숨기기';
$CIDRAM['lang']['switch-tracking-blocked-already-set-false'] = '서명 파일을 확인하지 마십시오';
$CIDRAM['lang']['switch-tracking-blocked-already-set-true'] = '서명 파일을 확인';
$CIDRAM['lang']['switch-tracking-hide-banned-blocked-set-false'] = '금지/차단 된 IP를 숨기지 마십시오';
$CIDRAM['lang']['switch-tracking-hide-banned-blocked-set-true'] = '금지/차단 된 IP를 숨기기';
$CIDRAM['lang']['tip_2fa_sent'] = '2FA 코드가 포함 된 이메일이 귀하의 이메일 주소로 발송되었습니다. 프런트 엔드에 액세스하려면 아래 코드를 확인하십시오. 이 이메일을받지 못한 경우 로그 아웃을 시도하고 10 분을 기다린 후 다시 로그인하여 새 코드가 포함 된 새 이메일을 수신 할 수 있습니다.';
$CIDRAM['lang']['tip_accounts'] = '안녕하세요, {username}.<br />계정 페이지는 CIDRAM 프론트 엔드에 액세스 할 수있는 사용자를 제어 할 수 있습니다.';
$CIDRAM['lang']['tip_aux'] = '안녕하세요, {username}.<br />이 페이지를 사용하여 CIDRAM에 대한 보조 규칙을 작성, 삭제 및 수정할 수 있습니다.';
$CIDRAM['lang']['tip_cache_data'] = '안녕하세요, {username}.<br />여기서 캐시의 내용을 검토 할 수 있습니다.';
$CIDRAM['lang']['tip_cidr_calc'] = '안녕하세요, {username}.<br />CIDR 계산기는 IP 주소가 어떻게 CIDR에 속해 있는지를 계산할 수 있습니다.';
$CIDRAM['lang']['tip_condition_placeholder'] = '무시할 값을 지정하거나 공백으로 두십시오.';
$CIDRAM['lang']['tip_config'] = '안녕하세요, {username}.<br />구성 페이지는 프론트 엔드에서 CIDRAM의 설정을 변경할 수 있습니다.';
$CIDRAM['lang']['tip_custom_ua'] = '여기에 사용자 에이전트를 입력하십시오 (선택 사항이다).';
$CIDRAM['lang']['tip_donate'] = 'CIDRAM는 무료로 제공되고 있습니다, 하지만 당신이 원한다면 기부 버튼을 클릭하면 프로젝트에 기부 할 수 있습니다.';
$CIDRAM['lang']['tip_enter_ip_here'] = '여기에 IP를 입력하십시오.';
$CIDRAM['lang']['tip_enter_ips_here'] = '여기에 IP를 입력하십시오.';
$CIDRAM['lang']['tip_fe_cookie_warning'] = '노트 : CIDRAM은 쿠키를 사용하여 로그인을 인증합니다. 로그인하면, 브라우저에서 쿠키를 만들고 저장하는 것에 동의하게됩니다.';
$CIDRAM['lang']['tip_file_manager'] = '안녕하세요, {username}.<br />파일 관리자를 사용하여 파일을 삭제, 편집, 업로드, 다운로드 할 수 있습니다. 신중하게 사용하는 (이것을 사용하여 설치를 끊을 수 있습니다).';
$CIDRAM['lang']['tip_home'] = '안녕하세요, {username}.<br />이것은 CIDRAM 프론트 엔드의 홈페이지입니다. 계속하려면 왼쪽 탐색 메뉴에서 링크를 선택합니다.';
$CIDRAM['lang']['tip_ip_aggregator'] = '안녕하세요, {username}.<br />IP 애그리게이터 가능한 한 가장 작은 방법으로 IP와 CIDR을 표현할 수있게합니다. 집계 할 데이터를 입력하고 "확인"을 누릅니다.';
$CIDRAM['lang']['tip_ip_test'] = '안녕하세요, {username}.<br />IP 테스트 페이지는 IP 주소가 차단되어 있는지를 테스트 할 수 있습니다.';
$CIDRAM['lang']['tip_ip_test_switches'] = '(선택하지 않으면 서명 파일 만 테스트됩니다).';
$CIDRAM['lang']['tip_ip_tracking'] = '안녕하세요, {username}.<br />IP 추적 페이지에서 IP 주소 추적 상태를 확인할 수 있습니다. 당신이 금지되어있는 것을 확인 할 수 있으며, 원한다면 당신은 추적을 취소 할 수 있습니다.';
$CIDRAM['lang']['tip_login'] = '기본 사용자 이름 : <span class="txtRd">admin</span> – 기본 암호 : <span class="txtRd">password</span>';
$CIDRAM['lang']['tip_logs'] = '안녕하세요, {username}.<br />로그의 내용을 보려면 다음 목록에서 로그를 선택합니다.';
$CIDRAM['lang']['tip_range'] = '안녕하세요, {username}.<br />이 페이지는 현재 활성화 된 서명 파일에서 다루는 IP 범위에 대한 몇 가지 기본 통계 정보를 보여줍니다.';
$CIDRAM['lang']['tip_sections_list'] = '안녕하세요, {username}.<br />이 페이지는 현재 활성화 된 서명 파일에 존재하는 섹션을 나열합니다.';
$CIDRAM['lang']['tip_see_the_documentation'] = '설정 지시어에 대한 자세한 내용은 <a href="https://github.com/CIDRAM/CIDRAM/blob/master/_docs/readme.ko.md#SECTION6">문서를</a> 참조하십시오.';
$CIDRAM['lang']['tip_statistics'] = '안녕하세요, {username}.<br />이 페이지는 CIDRAM 설치와 관련된 몇 가지 기본 사용 통계를 보여줍니다.';
$CIDRAM['lang']['tip_statistics_disabled'] = '노트 : 통계 추적은 현재 비활성화되어, 있지만 구성 페이지를 통해 활성화 할 수 있습니다.';
$CIDRAM['lang']['tip_updates'] = '안녕하세요, {username}.<br />업데이트 페이지는 CIDRAM의 다양한 구성 요소를 설치·제거·업데이트 할 수 있습니다 (코어 패키지·서명·L10N 파일 등).';
$CIDRAM['lang']['title_login'] = '로그인';
$CIDRAM['lang']['warning'] = '경고 :';
$CIDRAM['lang']['warning_php_1'] = '귀하의 PHP 버전은 더 이상 적극적으로 지원되지 않습니다! 업데이트하는 것이 좋습니다!';
$CIDRAM['lang']['warning_php_2'] = '귀하의 PHP 버전이 심각하게 취약합니다! 업데이트하는 것이 좋습니다!';
$CIDRAM['lang']['warning_signatures_1'] = '서명 파일이 활성화되어 있지 않습니다!';

$CIDRAM['lang']['info_some_useful_links'] = '유용한 링크 :<ul>
      <li><a href="https://github.com/CIDRAM/CIDRAM/issues">CIDRAM 문제 @ GitHub</a> – CIDRAM 문제 페이지 (지원, 원조 등).</li>
      <li><a href="https://wordpress.org/plugins/cidram/">CIDRAM @ WordPress.org</a> – CIDRAM 자료 WordPress 플러그인.</li>
      <li><a href="https://bitbucket.org/macmathan/blocklists">macmathan/blocklists</a> – 위험한 봇, 원치 않는 국가, 오래된 브라우저 등을 차단하기위한 CIDRAM 용 선택적 블록리스트 및 모듈을 포함합니다.</li>
      <li><a href="https://www.facebook.com/groups/2204685680/">Global PHP Group @ Facebook</a> – PHP 학습 자원과 토론.</li>
      <li><a href="https://php.earth/">PHP.earth</a> – PHP 학습 자원과 토론.</li>
      <li><a href="https://bgp.he.net/">Hurricane Electric BGP Toolkit</a> – ASN에서 CIDR을 취득하는 ASN 관계를 결정하는 네트워크 이름에 따라 ASN을 감지, 등등.</li>
      <li><a href="https://www.stopforumspam.com/forum/">메세지 보드 @ Stop Forum Spam</a> – 포럼 스팸 정지에 관한 유용한 토론 포럼.</li>
      <li><a href="https://radar.qrator.net/">Qrator의 Radar</a> – ASN의 연결을 확인하는 데 유용한 도구; ASN에 관한 기타 다양한 정보.</li>
      <li><a href="http://www.ipdeny.com/ipblocks/">IPdeny IP 국가 블록</a> – 국가 전체의 서명을 생성하기위한 훌륭한 정확한 서비스.</li>
      <li><a href="https://www.google.com/transparencyreport/safebrowsing/malware/">Google Malware Dashboard</a> – ASN의 악성 코드 감염률에 대한 보고서를 표시합니다.</li>
      <li><a href="https://www.spamhaus.org/statistics/botnet-asn/">Spamhaus 프로젝트</a> – ASN의 봇넷 감염 속도에 대한 보고서를 표시합니다.</li>
      <li><a href="https://www.abuseat.org/public/asn.html">Abuseat.org의 복합 차단 목록</a> – ASN의 봇넷 감염 속도에 대한 보고서를 표시합니다.</li>
      <li><a href="https://abuseipdb.com/">AbuseIPDB</a> – 알려진 위험한 IP 주소의 데이터베이스를 유지합니다; IP 주소를 확인하고보고하기위한 API를 제공합니다.</li>
      <li><a href="https://www.megarbl.net/index.php">MegaRBL.net</a> – 알려진 스패머 목록을 유지하는; IP/ASN 스팸 활동의 확인에 도움이됩니다.</li>
      <li><a href="https://maikuolan.github.io/Vulnerability-Charts/">취약점 차트</a> – 다양한 패키지의 안전하고 안전하지 않은 버전을 나열합니다 (HHVM, PHP, phpMyAdmin, Python, 기타).</li>
      <li><a href="https://maikuolan.github.io/Compatibility-Charts/">호환성 차트</a> – 다양한 패키지에 대한 호환성 정보를 나열합니다 (CIDRAM, phpMussel, 기타).</li>
    </ul>';

$CIDRAM['lang']['msg_template_2fa'] = '<center><p>안녕하세요, %1$s.<br />
<br />
CIDRAM 프런트 엔드에 로그인하기위한 2FA 코드 :</p>
<h1>%2$s</h1>
<p>이 코드는 10 분 후에 만료됩니다.</p></center>';
$CIDRAM['lang']['msg_subject_2fa'] = '2FA (이중 인증)';
