<?php
/**
* Turkish (tr) translation file.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator �zcan do�an <ozcandogan@gmail.com>
* @version 05-14-06
* @package Languages
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/
///////////////////////////////////////////////////////////
// INSTRUCTIONS
///////////////////////////////////////////////////////////
// This file contains all of the strings that are used throughout phpScheduleit.
// Please save the translated file as '2 letter language code'.lang.php.  For example, en.lang.php.
// 
// To make phpScheduleIt available in another language, simply translate each
//  of the following strings into the appropriate one for the language.  If there
//  is no direct translation, please provide the closest translation.  Please be sure
//  to make the proper additions the /config/langs.php file (instructions are in the file).
//  Also, please add a help translation for your language using en.help.php as a base.
//
// You will probably keep all sprintf (%s) tags in their current place.  These tags
//  are there as a substitution placeholder.  Please check the output after translating
//  to be sure that the sentences make sense.
//
// + Please use single quotes ' around all $strings.  If you need to use the ' character, please enter it as \'
// + Please use double quotes " around all $email.  If you need to use the " character, please enter it as \"
//
// + For all $dates please use the PHP strftime() syntax
//    http://us2.php.net/manual/en/function.strftime.php
//
// + Non-intuitive parts of this file will be explained with comments.  If you
//    have any questions, please email lqqkout13@users.sourceforge.net
//    or post questions in the Developers forum on SourceForge
//    http://sourceforge.net/forum/forum.php?forum_id=331297
///////////////////////////////////////////////////////////

////////////////////////////////
/* Do not modify this section */
////////////////////////////////
global $strings;			  //
global $email;				  //
global $dates;				  //
global $charset;			  //
global $letters;			  //
global $days_full;			  //
global $days_abbr;			  //
global $days_two;			  //
global $days_letter;		  //
global $months_full;		  //
global $months_abbr;		  //
global $days_letter;		  //
/******************************/

// Charset for this language
// 'iso-8859-1' will work for most languages
$charset = 'iso-8859-9';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element 
   and go through the seven day week, ending on Saturday
***/
// The full day name
$days_full = array('Pazar', 'Pazartesi', 'Sal�', '�ar�amba', 'Per�embe', 'Cuma', 'Cumartesi');
// The three letter abbreviation
$days_abbr = array('Paz', 'Pts', 'Sal', '�ar', 'Per', 'Cum', 'Cts');
// The two letter abbreviation
$days_two  = array('Pa', 'Pt', 'Sa', '�a', 'Pe', 'Cu', 'Ct');
// The one letter abbreviation
$days_letter = array('P', 'P', 'S', '�', 'P', 'C', 'C');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Ocak', '�ubat', 'Mart', 'Nisan', 'May�s', 'Haziran', 'Temmuz', 'A�ustos', 'Eyl�l', 'Ekim', 'Kas�m', 'Aral�k');
// The three letter month name
$months_abbr = array('Oca', '�ub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Agu', 'Eyl', 'Eki', 'Kas', 'Ara');

// All letters of the alphabet starting with A and ending with Z
$letters = array ('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

/***
  DATE FORMATTING
  All of the date formatting must use the PHP strftime() syntax
  You can include any text/HTML formatting in the translation
***/
// General date formatting used for all date display unless otherwise noted
$dates['general_date'] = '%m/%d/%Y';
// General datetime formatting used for all datetime display unless otherwise noted
// The hour:minute:second will always follow this format
$dates['general_datetime'] = '%m/%d/%Y @';
// Date in the reservation notification popup and email
$dates['res_check'] = '%A %m/%d/%Y';
// Date on the scheduler that appears above the resource links
$dates['schedule_daily'] = '%A,<br/>%m/%d/%Y';
// Date on top-right of each page
$dates['header'] = '%A, %B %d, %Y';
// Jump box format on bottom of the schedule page
// This must only include %m %d %Y in the proper order,
//  other specifiers will be ignored and will corrupt the jump box 
$dates['jumpbox'] = '%m %d %Y';

/***
  STRING TRANSLATIONS
  All of these strings should be translated from the English value (right side of the equals sign) to the new language.
  - Please keep the keys (between the [] brackets) as they are.  The keys will not always be the same as the value.
  - Please keep the sprintf formatting (%s) placeholders where they are unless you are sure it needs to be moved.
  - Please keep the HTML and punctuation as-is unless you know that you want to change it.
***/
$strings['hours'] = 'saat';
$strings['minutes'] = 'dakika';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'yyyy';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrator';
$strings['Welcome Back'] = 'Ho�geldiniz, %s';
$strings['Log Out'] = '��k��';
$strings['My Control Panel'] = 'Denetim Masam';
$strings['Help'] = 'Yard�m';
$strings['Manage Schedules'] = '�izelgeyi Y�net';
$strings['Manage Users'] = 'Kullan�c�lar� Y�net';
$strings['Manage Resources'] = 'Kaynaklar� Y�net';
$strings['Manage User Training'] = 'Kullan�c� e�itimi y�net';
$strings['Manage Reservations'] = 'Rezervasyonlar� y�net';
$strings['Email Users'] = 'Kullan�clara eposta g�nder';
$strings['Export Database Data'] = 'Veritaban� ihra�';
$strings['Reset Password'] = '�ifreyi s�f�rla';
$strings['System Administration'] = 'Sistem y�netimi';
$strings['Successful update'] = 'G�ncelle�tirme ba�ar�l�';
$strings['Update failed!'] = 'G�ncelle�tirme ba�ar�s�z';
$strings['Manage Blackout Times'] = 'Uygun olmayan zamanlar� y�net';
$strings['Forgot Password'] = '�ifreyi unuttum';
$strings['Manage My Email Contacts'] = 'Posta listemi y�net';
$strings['Choose Date'] = 'Tarih Se�';
$strings['Modify My Profile'] = 'Profilimi de�i�tir';
$strings['Register'] = 'Kay�t Ol';
$strings['Processing Blackout'] = 'Uygun olmayan zaman i�leniyor';
$strings['Processing Reservation'] = 'rezervasyon i�leniyor';
$strings['Online Scheduler [Read-only Mode]'] = '�izelge G�ster [salt okunur]';
$strings['Online Scheduler'] = '�izelge';
$strings['phpScheduleIt Statistics'] = '�statistik';
$strings['User Info'] = 'Kullan�c� Bilgisi:';

$strings['Could not determine tool'] = 'Ara� tan�mlanamad�. Denetim masas�na d�n�p tekrar deneyiniz.';
$strings['This is only accessable to the administrator'] = 'Sadece admin yetkili';
$strings['Back to My Control Panel'] = 'Denetim masas�na d�n';
$strings['That schedule is not available.'] = 'Bu �izelge uygun de�il';
$strings['You did not select any schedules to delete.'] = 'Silmek i�in �izelge se�mediniz';
$strings['You did not select any members to delete.'] = 'Silmek i�in �ye se�mediniz.';
$strings['You did not select any resources to delete.'] = 'Silmek i�in kaynak se�mediniz';
$strings['Schedule title is required.'] = '�izelge ba�l��� gerekli.';
$strings['Invalid start/end times'] = 'Ge�ersiz ba�lang��/biti� zamanlar�';
$strings['View days is required'] = 'G�n gerekli';
$strings['Day offset is required'] = 'offset g�n gerekli';
$strings['Admin email is required'] = 'Admin eposta gerekli';
$strings['Resource name is required.'] = 'Kaynak ad� gerekli';
$strings['Valid schedule must be selected'] = 'Ge�erli �izelge se�ilmeli';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'En az rezervasyon s�resi en �ok rezervasyon s�resinden az ya da e�it olmal�d�r.';
$strings['Your request was processed successfully.'] = '�ste�iniz ba�ar�yla i�lendi.';
$strings['Go back to system administration'] = 'Sistem y�netimine geri d�n';
$strings['Or wait to be automatically redirected there.'] = 'Veya oraya y�nlendirilmek i�in bekleyin.';
$strings['There were problems processing your request.'] = '��lemde hata var.';
$strings['Please go back and correct any errors.'] = 'L�tfen geri d�n�n ve hatalar� d�zeltin.';
$strings['Login to view details and place reservations'] = 'Giri� yap�n�z';
$strings['Memberid is not available.'] = '�ye: %s ge�erli de�il.';

$strings['Schedule Title'] = '�izelge ba�l���';
$strings['Start Time'] = 'Ba�lang�� zaman�';
$strings['End Time'] = 'Biti� zaman�';
$strings['Time Span'] = 'S�re';
$strings['Weekday Start'] = 'Hafta Ba��';
$strings['Admin Email'] = 'Admin Eposta';

$strings['Default'] = 'varsay�lan';
$strings['Reset'] = 'Yenile';
$strings['Edit'] = 'D�zenle';
$strings['Delete'] = 'Sil';
$strings['Cancel'] = '�ptal';
$strings['View'] = 'G�ster';
$strings['Modify'] = 'De�i�tir';
$strings['Save'] = 'Kaydet';
$strings['Back'] = 'Geri';
$strings['Next'] = '�leri';
$strings['Close Window'] = 'Pancereyi kapat';
$strings['Search'] = 'Ara';
$strings['Clear'] = 'Temizle';

$strings['Days to Show'] = 'G�sterilecek g�n';
$strings['Reservation Offset'] = 'Rezervasyon Offset';
$strings['Hidden'] = 'sakl�';
$strings['Show Summary'] = '�zet G�zter';
$strings['Add Schedule'] = '�izelge ekle';
$strings['Edit Schedule'] = '�izelge d�zenle';
$strings['No'] = 'Hay�r';
$strings['Yes'] = 'Evet';
$strings['Name'] = 'Ad';
$strings['First Name'] = '�lk ad';
$strings['Last Name'] = 'Soyad';
$strings['Resource Name'] = 'Kaynak ad�';
$strings['Email'] = 'Eposta';
$strings['Institution'] = 'B�l�m';
$strings['Phone'] = 'telefon';
$strings['Password'] = '�ifre';
$strings['Permissions'] = '�zinler';
$strings['View information about'] = 'Hakk�nda bilgi g�ster %s %s';
$strings['Send email to'] = 'Posta Yolla %s %s';
$strings['Reset password for'] = '�ifre s�f�rla %s %s';
$strings['Edit permissions for'] = '�zin de�i�tir %s %s';
$strings['Position'] = 'G�revi';
$strings['Password (6 char min)'] = '�ifre (en az %s karakter)';
$strings['Re-Enter Password'] = '�ifreyi tekrar gir';

$strings['Sort by descending last name'] = 'z\'den a\'ya soyadlara g�re s�rala';
$strings['Sort by descending email address'] = 'z\'den a\'ya Epostaya g�re s�rala';
$strings['Sort by descending institution'] = 'z\'den a\'ya g�reve g�re s�rala';
$strings['Sort by ascending last name'] = 'a\'dan z\'ye soyada g�re s�rala';
$strings['Sort by ascending email address'] = 'a\'dan z\'ye epostaya g�re s�rala';
$strings['Sort by ascending institution'] = 'a\'dan z\'ye g�reve g�re s�rala';
$strings['Sort by descending resource name'] = 'z\'den a\'ya kaynak ad�na g�re s�rala';
$strings['Sort by descending location'] = 'z\'den a\'ya yere g�re s�rala';
$strings['Sort by descending schedule title'] = 'z\'den a\'ya �izelge ba�l���na g�re s�rala';
$strings['Sort by ascending resource name'] = 'a\'dan z\'ye kaynak ad�na g�re s�rala';
$strings['Sort by ascending location'] = 'a\'dan z\'ye yere g�re s�rala';
$strings['Sort by ascending schedule title'] = 'a\'dan z\'ye �izelge ba�l���na g�re s�rala';
$strings['Sort by descending date'] = 'z\'den a\'ya tarihe g�re s�rala';
$strings['Sort by descending user name'] = 'z\'den a\'ya kullan�c� ad�na g�re s�rala';
$strings['Sort by descending start time'] = 'z\'den a\'ya ba�lang�� zaman�na g�re s�rala';
$strings['Sort by descending end time'] = 'z\'den a\'ya biti� zaman�na g�re s�rala';
$strings['Sort by ascending date'] = 'a\'dan z\'ye tarihe g�re s�rala';
$strings['Sort by ascending user name'] = 'a\'dan z\'ye kullan�c� ad�na g�re s�rala';
$strings['Sort by ascending start time'] = 'a\'dan z\'ye ba�lang�� zaman�na g�re s�rala';
$strings['Sort by ascending end time'] = 'a\'dan z\'ye biti� zaman�na g�re s�rala';
$strings['Sort by descending created time'] = 'z\'den a\'ya yarat�ld��� zaman�na g�re s�rala';
$strings['Sort by ascending created time'] = 'a\'dan z\'ye yarat�ld��� zaman�na g�re s�rala';
$strings['Sort by descending last modified time'] = 'z\'den a\'ya son de�i�tirildi�i zamana g�re s�rala';
$strings['Sort by ascending last modified time'] = 'a\'dan z\'ye son de�i�tirildi�i zamana g�re s�rala';

$strings['Search Users'] = 'Kullan�c� ara';
$strings['Location'] = 'yer';
$strings['Schedule'] = '�izelge';
$strings['Notes'] = 'Notlar';
$strings['Status'] = 'Durum';
$strings['All Schedules'] = 'T�m �izelgeler';
$strings['All Resources'] = 'T�m kaynaklar';
$strings['All Users'] = 'T�m kullan�c�lar';

$strings['Edit data for'] = 'Veriyi d�zenle %s';
$strings['Active'] = 'Aktif';
$strings['Inactive'] = 'Pasif';
$strings['Toggle this resource active/inactive'] = 'Bu kayna�� actif/pasif olarak i�aretle';
$strings['Minimum Reservation Time'] = 'En k�sa rezervasyon s�resi';
$strings['Maximum Reservation Time'] = 'En uzun rezervasyon s�resi';
$strings['Auto-assign permission'] = 'Otomatik yetkilendir';
$strings['Add Resource'] = 'kaynak ekle';
$strings['Edit Resource'] = 'kaynak d�zenle';
$strings['Allowed'] = '�zinli';
$strings['Notify user'] = 'Kullan�c� bilgilendir';
$strings['User Reservations'] = 'Kullan�c� rezervasyonlar�';
$strings['Date'] = 'Tarih';
$strings['User'] = 'Kullan�c�';
$strings['Subject'] = 'Konu';
$strings['Message'] = 'Mesaj';
$strings['Please select users'] = 'Kullan�c� se�iniz';
$strings['Send Email'] = 'Eposta g�nder';
$strings['problem sending email'] = 'Eposta g�ndermede hata! L�tfen daha sonra tekrar deneyiniz.';
$strings['The email sent successfully.'] = 'Eposta ba�ar�yla g�nderildi.';
$strings['do not refresh page'] = 'L�tfen <u>bu sayfay�</u> tazelemeyin. Epostay� 2. kez g�ndermi� olursunuz.';
$strings['Return to email management'] = 'Eposta y�netimine d�n';
$strings['Please select which tables and fields to export'] = 'L�tfen ihra� edilecek tablolar� se�iniz';
$strings['all fields'] = '- T�m alanlar -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'D�z metin';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = '�hra� et';
$strings['Reset Password for'] = '�ifreyi s�f�rla %s';
$strings['Please edit your profile'] = 'Profilinizi d�zenleyin';
$strings['Please register'] = 'L�tfen kay�t olun';
$strings['Email address (this will be your login)'] = 'Eposta adresi (kullan�c� ad�n�z olacak)';
$strings['Keep me logged in'] = '�ifre kaydet <br/>(�erez gerektirir)';
$strings['Edit Profile'] = 'Profil d�zenle';
$strings['Please Log In'] = 'Giri� Yap�n�z';
$strings['Email address'] = 'Eposta';
$strings['First time user'] = '�lk kez kullan�c�s�?';
$strings['Click here to register'] = 'kay�t i�in t�klay�n�z';
$strings['Register for phpScheduleIt'] = 'Kay�t olunuz';
$strings['Log In'] = 'Giri�';
$strings['View Schedule'] = '�izelgeyi g�ster';
$strings['View a read-only version of the schedule'] = 'salt okunur �izelge';
$strings['I Forgot My Password'] = '�ifremi Unuttum';
$strings['Retreive lost password'] = '�ifremi g�nder';
$strings['Get online help'] = 'yard�m';
$strings['Language'] = 'Dil';
$strings['(Default)'] = '(varsay�lan)';

$strings['My Announcements'] = 'Duyurular�m';
$strings['My Reservations'] = 'Rezervasyonlar�m';
$strings['My Permissions'] = 'izinlerim';
$strings['My Quick Links'] = 'K�pr�lerim';
$strings['Announcements as of'] = 'Duyurular %s';
$strings['There are no announcements.'] = 'Duyuru Yok';
$strings['Resource'] = 'Kaynak';
$strings['Created'] = 'Yarat�ld�';
$strings['Last Modified'] = 'Son de�i�tirme';
$strings['View this reservation'] = 'Bu rezervasyonu g�ster';
$strings['Modify this reservation'] = 'Bu rezervasyonu de�i�tir';
$strings['Delete this reservation'] = 'Bu rezervasyonu sil';
$strings['Bookings'] = 'Yer ay�rma';											// @since 1.2.0
$strings['Change My Profile Information/Password'] = 'Profil de�i�tir';		// @since 1.2.0
$strings['Manage My Email Preferences'] = 'Eposta Se�enekleri';				// @since 1.2.0
$strings['Mass Email Users'] = 'Kullan�clara eposta g�nder';
$strings['Search Scheduled Resource Usage'] = 'Rezervasyon ara';		// @since 1.2.0
$strings['Export Database Content'] = 'Veritaban� ihra� et';
$strings['View System Stats'] = 'Sistem istatistikleri';
$strings['Email Administrator'] = 'Epostal Administrator';

$strings['Email me when'] = 'eposta g�nderme zaman�:';
$strings['I place a reservation'] = 'Rezervasyon yapar�m';
$strings['My reservation is modified'] = 'Rezervasyonum de�i�tirildi';
$strings['My reservation is deleted'] = 'Rezervasyonum silindi';
$strings['I prefer'] = 'tercihim:';
$strings['Your email preferences were successfully saved'] = 'Eposta tercihleriniz kaydedildi!';
$strings['Return to My Control Panel'] = 'Denetim masas�na d�n';

$strings['Please select the starting and ending times'] = 'Ba�lan��� ve biti� zaman� se�iniz:';
$strings['Please change the starting and ending times'] = 'Ba�lan��� ve biti� zaman� de�i�tirin:';
$strings['Reserved time'] = 'Rezerv zaman�:';
$strings['Minimum Reservation Length'] = 'En k�sa rezervasyon s�resi:';
$strings['Maximum Reservation Length'] = 'En uzun rezervasyon s�resi:';
$strings['Reserved for'] = 'Rezervasyon sahibi:';
$strings['Will be reserved for'] = 'rezerve edilece�i ki�i:';
$strings['N/A'] = 'N/A';
$strings['Update all recurring records in group'] = 'Gruptaki t�m tekrarlayan kay�tlar� g�ncelle?';
$strings['Delete?'] = 'sil?';
$strings['Never'] = '-- Hi� --';
$strings['Days'] = 'G�n';
$strings['Weeks'] = 'Hafta';
$strings['Months (date)'] = 'Aylar (tarih)';
$strings['Months (day)'] = 'haftalar (g�n)';
$strings['First Days'] = 'Birinci G�nler';
$strings['Second Days'] = '�kinci G�nler';
$strings['Third Days'] = '���nc� G�nler';
$strings['Fourth Days'] = 'D�rd�nc� G�nler';
$strings['Last Days'] = 'Son G�nler';
$strings['Repeat every'] = 'Tekrar s�kl���:';
$strings['Repeat on'] = 'Tekrar:';
$strings['Repeat until date'] = 'Tekrar sonu:';
$strings['Summary'] = '�zet';

$strings['View schedule'] = '�izelge G�ster:';
$strings['My Past Reservations'] = 'Eski rezervasyonlar�';
$strings['Other Reservations'] = 'Di�er rezervasyonlar';
$strings['Other Past Reservations'] = 'Di�er eski rezervasyonlar';
$strings['Blacked Out Time'] = 'Uygun olmayan zaman';
$strings['Set blackout times'] = 'Uygun olmayan zaman ayarla %s on %s';
$strings['Reserve on'] = 'Rezerve %s on %s';
$strings['Prev Week'] = '� Ge�en hafta';
$strings['Jump 1 week back'] = '1 Hafta geri';
$strings['Prev days'] = '� �nceki %d g�n';
$strings['Previous days'] = '� �nceki %d g�n';
$strings['This Week'] = 'Bu hafta';
$strings['Jump to this week'] = 'Bu haftaya d�n';
$strings['Next days'] = 'Sonraki %d g�n �';
$strings['Next Week'] = 'Gelecek hafta �';
$strings['Jump To Date'] = 'Tarihe Git';
$strings['View Monthly Calendar'] = 'Ayl�k takvimi g�ster';
$strings['Open up a navigational calendar'] = 'Dola��ml� takvim a�';

$strings['View stats for schedule'] = '�izelge istatistikleri:';
$strings['At A Glance'] = 'Bak��ta';
$strings['Total Users'] = 'Toplam kullan�c�:';
$strings['Total Resources'] = 'Toplam kaynak:';
$strings['Total Reservations'] = 'Toplam rezervasyon:';
$strings['Max Reservation'] = 'En �ok rezervasyon:';
$strings['Min Reservation'] = 'En az rezervasyon:';
$strings['Avg Reservation'] = 'Ortalama rezervasyon:';
$strings['Most Active Resource'] = 'En aktif kaynak:';
$strings['Most Active User'] = 'En aktif kullan�c�:';
$strings['System Stats'] = 'Sistem istatistikleri';
$strings['phpScheduleIt version'] = 'versiYon:';
$strings['Database backend'] = 'Veritaban� arka ucu:';
$strings['Database name'] = 'Veritaban� ad�:';
$strings['PHP version'] = 'PHP versiyon:';
$strings['Server OS'] = 'Sunucu OS:';
$strings['Server name'] = 'Sunucu ad�:';
$strings['phpScheduleIt root directory'] = 'ana dizin:';
$strings['Using permissions'] = '�zinler:';
$strings['Using logging'] = 'Log Kay�tlar�:';
$strings['Log file'] = 'Log dosyas�:';
$strings['Admin email address'] = 'Admin eposta adresi:';
$strings['Tech email address'] = 'Teknisyen eposta adresi:';
$strings['CC email addresses'] = 'CC eposta adres:';
$strings['Reservation start time'] = 'Rezervasyon ba�lang�� zaman�:';
$strings['Reservation end time'] = 'Rezervasyon biti� zaman�:';
$strings['Days shown at a time'] = 'Bir seferde g�sterilecek g�n:';
$strings['Reservations'] = 'Rezervasyonlar';
$strings['Return to top'] = 'Yukar� d�n';
$strings['for'] = '��in';

$strings['Select Search Criteria'] = 'Arama kriteri se�iniz';
$strings['Schedules'] = '�izelgeler:';
$strings['Hold CTRL to select multiple'] = '�oklu se�im i�in CTRL bas�l� tutunuz';
$strings['Users'] = 'Kullan�c�lar:';
$strings['Resources'] = 'Kaynaklar';
$strings['Starting Date'] = 'Ba�lang�� g�n�:';
$strings['Ending Date'] = 'Biti� G�n�:';
$strings['Starting Time'] = 'Ba�lang�� zaman�:';
$strings['Ending Time'] = 'Biti� zaman�:';
$strings['Output Type'] = '��kt� tipi:';
$strings['Manage'] = 'Y�net';
$strings['Total Time'] = 'Toplam s�re';
$strings['Total hours'] = 'Toplam saat:';
$strings['% of total resource time'] = '% Toplam rezervasyon s�resi';
$strings['View these results as'] = 'Bu sonu�lar� g�ster:';
$strings['Edit this reservation'] = 'Bu rezervasyonu d�zenle';
$strings['Search Results'] = 'Arama sonu�lar�';
$strings['Search Resource Usage'] = 'kaynak kullan�m� ara';
$strings['Search Results found'] = 'Arama sonu�lar�: %d rezervasyon bulundu';
$strings['Try a different search'] = 'Farkl� arama deneyiniz';
$strings['Search Run On'] = 'Arama �al��t�r�ld�:';
$strings['Member ID'] = '�ye ID';
$strings['Previous User'] = '� �nceki kullan�c�';
$strings['Next User'] = 'Sonraki kullan�c� �';

$strings['No results'] = 'Sonu� bulunamad�';
$strings['That record could not be found.'] = 'O kay�t bulunamad�.';
$strings['This blackout is not recurring.'] = 'Bu kesinti tekrarlamayacak.';
$strings['This reservation is not recurring.'] = 'Bu rezervasyon tekrarlamayacak.';
$strings['There are no records in the table.'] = 'Tabloda %s kay�t yok.';
$strings['You do not have any reservations scheduled.'] = 'yap�lm�� rezervasyonunuz yok';
$strings['You do not have permission to use any resources.'] = 'Kaynak kullan�m yetkinniz yok.';
$strings['No resources in the database.'] = 'Veritaban�nda kaynak yok.';
$strings['There was an error executing your query'] = 'Sorgu �al��t�r�l�rken hata olu�tu:';

$strings['That cookie seems to be invalid'] = '�erez ge�ersiz';
$strings['We could not find that email in our database.'] = 'Eposta adresniniz bulunamad�';
$strings['That password did not match the one in our database.'] = 'hatal� �ifre.';
$strings['You can try'] = '<br />tekrar farkl�:<br />eposta adresi girin.<br />veya:<br />tekrar giri� yap�n.';
$strings['A new user has been added'] = 'Yeni bir kullan�c� eklendi';
$strings['You have successfully registered'] = 'ba�ar�yla kaydoldunuz!';
$strings['Continue'] = 'Devam...';
$strings['Your profile has been successfully updated!'] = 'Profiliniz ba�ar�yla g�ncellendi!';
$strings['Please return to My Control Panel'] = 'L�tfen denetim masas�na d�n�n';
$strings['Valid email address is required.'] = '- ge�erli eposta adresi giriniz.';
$strings['First name is required.'] = '- Ad gerekli.';
$strings['Last name is required.'] = '-Soyad gerekli.';
$strings['Phone number is required.'] = '- Telefon no gerekli.';
$strings['That email is taken already.'] = '- Bu eposta kay�tl�.<br />L�tfen ba�ka eposta deneyiniz.';
$strings['Min 6 character password is required.'] = '- En az 6 karakter �ifre gerekli.';
$strings['Passwords do not match.'] = '- �ifreler tutars�z.';

$strings['Per page'] = 'sayfa ba��na:';
$strings['Page'] = 'sayfa:';

$strings['Your reservation was successfully created'] = 'Rezervasyonunuz ba�ar�yla yarat�ld�';
$strings['Your reservation was successfully modified'] = 'Rezervasyonunuz ba�ar�yla de�i�tirildi';
$strings['Your reservation was successfully deleted'] = 'Rezervasyonunuz ba�ar�yla silindi';
$strings['Your blackout was successfully created'] = 'Kesintiniz yarat�ld�.';
$strings['Your blackout was successfully modified'] = 'Kesintiniz de�i�tirildi';
$strings['Your blackout was successfully deleted'] = 'Kesintiniz silindi';
$strings['for the follwing dates'] = 'takip eden g�nler i�in:';
$strings['Start time must be less than end time'] = 'Ba�lang�� zaman� biti� zaman�ndan �nce olmal�d�r.';
$strings['Current start time is'] = 'Ge�erli ba�lang�� zaman�:';
$strings['Current end time is'] = 'Ge�erli biti� zaman�:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'Rezervasyon s�reniz kayna��n izin verilen s�resine uymuyor.';
$strings['Your reservation is'] = 'rezervasyonunuz:';
$strings['Minimum reservation length'] = 'En k�sarezervasyon s�resi:';
$strings['Maximum reservation length'] = 'En uzunrezervasyon s�resi:';
$strings['You do not have permission to use this resource.'] = 'Bu kayna�a rezervasyon yetkiniz yok.';
$strings['reserved or unavailable'] = '%s den%s ekadar %s rezerve ya da uygun de�il.';
$strings['Reservation created for'] = 'rezervasyon yarat�ld� %s';
$strings['Reservation modified for'] = 'rezervasyon de�i�tirildi %s';
$strings['Reservation deleted for'] = 'Rezervasyon silindi %s';
$strings['created'] = 'yarat�ld�';
$strings['modified'] = 'de�i�tirildi';
$strings['deleted'] = 'silindi';
$strings['Reservation #'] = 'Rezervasyon #';
$strings['Contact'] = '�leti�im';
$strings['Reservation created'] = 'Rezervasyon yarat�ld�';
$strings['Reservation modified'] = 'Rezervasyon de�i�tirildi';
$strings['Reservation deleted'] = 'Rezervasyon silindi';

$strings['Reservations by month'] = 'Ay baz�nda rezervasyonlar';
$strings['Reservations by day of the week'] = 'G�n baz�nda rezervasyonlar';
$strings['Reservations per month'] = 'ay ba��na rezervasyonlar';
$strings['Reservations per user'] = 'Kullan�c� ba��na rezervasyonlar';
$strings['Reservations per resource'] = 'Kaynak ba��na rezervasyonlar';
$strings['Reservations per start time'] = 'Ba�lang�� zaman� ba��na rezervasyonlar';
$strings['Reservations per end time'] = 'Biti� zaman� ba��na rezervasyonlar';
$strings['[All Reservations]'] = '[T�m Rezervasyonlar]';

$strings['Permissions Updated'] = '�zinler g�ncellendi';
$strings['Your permissions have been updated'] = 'Sizin %s izinleriniz g�ncellendi';
$strings['You now do not have permission to use any resources.'] = 'Kaynak kullan�m� i�in izniniz yok.';
$strings['You now have permission to use the following resources'] = 'Ekteki kaynaklara izniniz var:';
$strings['Please contact with any questions.'] = 'Sorular�n�z i�in %s ba�vurunuz.';
$strings['Password Reset'] = '�ifre s�f�rla';

$strings['This will change your password to a new, randomly generated one.'] = 'Bu sizin �ifreniz rasgele bir �ifre ile de�i�tirecektir.';
$strings['your new password will be set'] = 'eposta adresinizi girip �ifre De�i�tire t�klay�nca yeni �ifreniz size postalanacakt�r.';
$strings['Change Password'] = '�ifre de�i�tir';
$strings['Sorry, we could not find that user in the database.'] = 'Kullan�c� bulunamad�.';
$strings['Your New Password'] = 'yeni %s �ifreniz';
$strings['Your new passsword has been emailed to you.'] = 'ba�ard�n�z!<br />yeni �ifreniz size eposta olarak g�nderildi.';
$strings['You are not logged in!'] = 'Giri� yapmad�n�z!';

$strings['Setup'] = 'Kur';
$strings['Please log into your database'] = 'Veritaban�na giri� yap�n�z';
$strings['Enter database root username'] = 'veritaban� root kullan�c�:';
$strings['Enter database root password'] = 'veritaban� root �ifre:';
$strings['Login to database'] = 'veritaban� giri� yap';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = 'Root kullan�c� <b></b> gerekmiyor. databse yaratma izni olan kullanc� yeterli..';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'Veritaban� ve tablolar kurulacak';
$strings['It also populates any required tables.'] = 'gerekli tablolar da yarat�lacak.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = 'Uyar�: daha �nceki rezervasyon veritaban�n�z silinecektir';
$strings['Not a valid database type in the config.php file.'] = 'config.php ge�erli veritaban� ad�n� bar�nd�rm�yor.';
$strings['Database user password is not set in the config.php file.'] = 'config.php veritaban� kulaln�c� �ifesi bulunmuyor.';
$strings['Database name not set in the config.php file.'] = 'config.php veritaban� ad� bulunmuyor.';
$strings['Successfully connected as'] = 'ba�land�';
$strings['Create tables'] = 'Tablo yarat >';
$strings['There were errors during the install.'] = 'Kurulumda hatalar olu�tu.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = 'Kurulum ba�ar�l�.';
$strings['Thank you for using phpScheduleIt'] = ' \'install\' Diznini siliniz.';
$strings['This will update your version of phpScheduleIt from 0.9.3 to 1.0.0.'] = 'upfate 0.9.3 to 1.0.0.';
$strings['There is no way to undo this action'] = 'Bu i�lem geri al�namaz!';
$strings['Click to proceed'] = 'ba�lamak i�in t�klay�n�z';
$strings['This version has already been upgraded to 1.0.0.'] = 'zaten versiyon 1.0';
$strings['Please delete this file.'] = 'L�tfen bu dosyay� siliniz.';
$strings['Patch completed successfully'] = 'Yama ba�ar�l�';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'De�er girilmezse konfig dosyas�ndaki �ifre ge�erli';
$strings['Notify user that password has been changed?'] = 'Kullan�c�y� �ifre de�i�ti�i hakk�nda biilgilendir?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'Bu sistem eposta adresine sahip olman�z� gerektirir.';
$strings['Invalid User Name/Password.'] = 'Ge�ersiz kullan�c� ad�/�ifre.';
$strings['Pending User Reservations'] = 'Bekleyen kullan�c� rezervasyonlar�';
$strings['Approve'] = 'Onayla';
$strings['Approve this reservation'] = 'Bu rezervasyonu onayla';
$strings['Approve Reservations'] ='Rezervasyonlar� onayla';

$strings['Announcement'] = 'Duyuru';
$strings['Number'] = 'Numara';
$strings['Add Announcement'] = 'Duyuru ekle';
$strings['Edit Announcement'] = 'Duyuru d�zenle';
$strings['All Announcements'] = 'T�m duyurular';
$strings['Delete Announcements'] = 'Duyurular� sil';
$strings['Use start date/time?'] = 'Ba�lang�� tarih/saat?';
$strings['Use end date/time?'] = 'Use end date/time?';
$strings['Announcement text is required.'] = 'Duyuru metni gerekli.';
$strings['Announcement number is required.'] = 'Duyuru numaras� gerekli.';

$strings['Pending Approval'] = 'Onay bekliyor';
$strings['My reservation is approved'] = 'ezervasyonum onayland�';
$strings['This reservation must be approved by the administrator.'] = 'Bu rezervasyon rezervasyon y�neticisi taraf�ndan onaylanmal�d�r.';
$strings['Approval Required'] = 'Onay gerekli';
$strings['No reservations requiring approval'] = 'Onaylanmas� gereken rezervasyon bulunmuyor';
$strings['Your reservation was successfully approved'] = 'Rezervasyonunuz onayland�';
$strings['Reservation approved for'] = 'Rezervasyon onayland� %s';
$strings['approved'] = 'onayland�';
$strings['Reservation approved'] = 'Rezervasyon onayland�';

$strings['Valid username is required'] = 'Ge�erli kullan�c� ad� gerekli';
$strings['That logon name is taken already.'] = 'Bu kullan�c� ad� zaten al�nm��.';
$strings['this will be your login'] = '(giri� hesab�n�z olacak)';
$strings['Logon name'] = 'Giri� ad�';
$strings['Your logon name is'] = 'Giri� ad�n�z %s';

$strings['Start'] = 'Ba�lang��';
$strings['End'] = 'Biti�';
$strings['Start date must be less than or equal to end date'] = 'Ba�lang�� tarihi biti� tarihinden �nce olmal�d�r';
$strings['That starting date has already passed'] = 'Bu ba�lang�� tarihi ge�mi�';
$strings['Basic'] = 'Temel';
$strings['Participants'] = 'Kat�l�mc�lar';
$strings['Close'] = 'Kapat';
$strings['Start Date'] = 'Ba�lang�� tarihi';
$strings['End Date'] = 'Biti� tarihi';
$strings['Minimum'] = 'En az';
$strings['Maximum'] = 'En �ok';
$strings['Allow Multiple Day Reservations'] = '�oklu rezervasyona izin ver';
$strings['Invited Users'] = 'Davetli kullan�c�lar';
$strings['Invite Users'] = 'Kullan�c�lar� davet et';
$strings['Remove Participants'] = 'Kat�l�mc�lar� kald�r';
$strings['Reservation Invitation'] = 'Rezervasyon Daveti';
$strings['Manage Invites'] = 'Davetlileri y�net';
$strings['No invite was selected'] = 'Davetli se�ilmedi';
$strings['reservation accepted'] = '%s Davetinizi kabul etti %s';
$strings['reservation declined'] = '%s Davetinizi reddetti %s';
$strings['Login to manage all of your invitiations'] = 'T�m davetlerinizi y�netmek i�in giri� yap�n�z';
$strings['Reservation Participation Change'] = 'Rezervasyon kat�l�m de�i�ikli�i';
$strings['My Invitations'] = 'Davetlerim';
$strings['Accept'] = 'Kabul et';
$strings['Decline'] = 'Reddet';
$strings['Accept or decline this reservation'] = 'Bu rezervasyonu kabul ya da red edin';
$strings['My Reservation Participation'] = 'Rezervasyona kat�l�m�m';
$strings['End Participation'] = 'Kat�l�m sonu';
$strings['Owner'] = 'Sahip';
$strings['Particpating Users'] = 'Kat�l�mc� kullan�c�lar';
$strings['No advanced options available'] = 'Geli�mi� se�enekler bulunmuyor';
$strings['Confirm reservation participation'] = 'Rezervasyon kat�l�m�n� onayla';
$strings['Confirm'] = 'Onayla';
$strings['Do for all reservations in the group?'] = 'Bu gruptaki t�m rezervasyonlar i�in yap?';

$strings['My Calendar'] = 'Takvimim';
$strings['View My Calendar'] = 'Takvimimi g�ster';
$strings['Participant'] = 'Kat�l�mc�';
$strings['Recurring'] = 'Tekrarlayan';
$strings['Multiple Day'] = '�oklu g�n';
$strings['[today]'] = '[bug�n]';
$strings['Day View'] = 'G�n g�ster';
$strings['Week View'] = 'Hafta g�ster';
$strings['Month View'] = 'Ay g�ster';
$strings['Resource Calendar'] = 'Kaynak takvimi';
$strings['View Resource Calendar'] = '�izelge Takvimi';	// @since 1.2.0
$strings['Signup View'] = 'Kay�t g�ster';

$strings['Select User'] = 'Kullan�c� se�';
$strings['Change'] = 'De�i�tir';

$strings['Update'] = 'G�ncelle';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'phpScheduleIt G�ncellemesi sadece 1.0.0 ve sonras� i�in ge�erlidir';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt zaten g�ncel';
$strings['Migrating reservations'] = 'Reservasyonlar� ta��yor';

$strings['Admin'] = 'Y�netici';
$strings['Manage Announcements'] = 'Duyurular� y�net';
$strings['There are no announcements'] = 'Duyuru Yok';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'Azami Kat�l�mc� kapasitesi';
$strings['Leave blank for unlimited'] = 'S�n�rs�z i�in bo� b�rak�n�z';
$strings['Maximum of participants'] = 'Azami %s kat�l�mc� say�s�na ula�t�';
$strings['That reservation is at full capacity.'] = 'Bu rezervasyon kapasitesini doldurmu�tur.';
$strings['Allow registered users to join?'] = 'Kay�tl� kullan�c�lar kat�labilsin mi?';
$strings['Allow non-registered users to join?'] = 'Kay�ts�z kullan�c�lar kat�labilsin mi?';
$strings['Join'] = 'Kat�l';
$strings['My Participation Options'] = 'Kat�l�mc� Se�eneklerim';
$strings['Join Reservation'] = 'Rezervasyona Kat�l';
$strings['Join All Recurring'] = 'T�m tekrarlayanlara kat�l';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'A�a��daki rezervasyonlara kapasiteleri doldu�undan kat�lam�yorsunuz.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'Bu rezervasyona zaten davetlisiniz. Daha �nce size eposta olarak gelen bilgileri takip ediniz.';
$strings['Additional Tools'] = 'Ek Ara�lar';
$strings['Create User'] = 'Kullan�c� Yarat';
$strings['Check Availability'] = 'Uygunlu�unu kontrol et';
$strings['Manage Additional Resources'] = 'Ek kaynaklar� y�net';
$strings['All Additional Resources'] = 'T�m ek kaynaklar';
$strings['Number Available'] = 'Numara uygun';
$strings['Unlimited'] = 'S�n�rs�z';
$strings['Add Additional Resource'] = 'Ek kaynak ekle';
$strings['Edit Additional Resource'] = 'Ek kaynak d�zenle';
$strings['Checking'] = 'Kontol ediyor';
$strings['You did not select anything to delete.'] = 'Silmek i�in bir �ge se�mediniz.';
$strings['Added Resources'] = 'Eklenen Kaynaklar';
$strings['Additional resource is reserved'] = 'Ek kaynak %s lar�n %s bir seferde uygun';
$strings['All Groups'] = 'T�m Gruplar';
$strings['Group Name'] = 'Grup Ad�';
$strings['Delete Groups'] = 'Gruplar� Sil';
$strings['Manage Groups'] = 'Gruplar� Y�net';
$strings['None'] = 'Hi�';
$strings['Group name is required.'] = 'Grup ad� gerekli.';
$strings['Groups'] = 'Gruplar';
$strings['Current Groups'] = 'Varolan Gruplar';
$strings['Group Administration'] = 'Grup Y�netimi';
$strings['Reminder Subject'] = 'Rezervasyon hat�rlat�c�- %s, %s %s';
$strings['Reminder'] = 'Hat�rlat�c�';
$strings['before reservation'] = 'rezervasyondan �nce';
$strings['My Participation'] = 'Kat�l�m�m';
$strings['My Past Participation'] = 'Ge�mi� kat�l�m�m';
$strings['Timezone'] = 'Zaman Aral���';
$strings['Export'] = '�hra�';
$strings['Select reservations to export'] = '�hra� etmek i�in rezervasyon se�';
$strings['Export Format'] = '�hra� bi�imi';
$strings['This resource cannot be reserved less than x hours in advance'] = 'Bu rezervasyon %s saatten az ay�rt�lamaz';
$strings['This resource cannot be reserved more than x hours in advance'] = 'Bu rezervasyon %s saatten �ok ay�rt�lamaz';
$strings['Minimum Booking Notice'] = 'En az ay�rtma hat�rlatmas�';
$strings['Maximum Booking Notice'] = 'En �ok ay�rtma hat�rlatmas�';
$strings['hours prior to the start time'] = 'saat ba�lang�� zaman�ndan �nce';
$strings['hours from the current time'] = 'saat �u andan itibaren';
$strings['Contains'] = '��erir';
$strings['Begins with'] = 'Ba�lar';
$strings['Minimum booking notice is required.'] = 'En az ay�rtma bilgisi gerekli.';
$strings['Maximum booking notice is required.'] = 'En �ok ay�rtma bilgisi gerekli.';
$strings['Accessory Name'] = 'Donat� Ad�';
$strings['Accessories'] = 'Donat�lar';
$strings['All Accessories'] = 'T�m Donat�lar';
$strings['Added Accessories'] = 'Eklenen donat�lar';
// end since 1.2.0

/***
  EMAIL MESSAGES
  Please translate these email messages into your language.  You should keep the sprintf (%s) placeholders
   in their current position unless you know you need to move them.
  All email messages should be surrounded by double quotes "
  Each email message will be described below.
***/
// @since 1.1.0
// Email message that a user gets after they register
$email['register'] = "%s, %s \r\n"
				. "A�a��daki bilgi ile ba�ar�yla kay�t oldunuz:\r\n"
				. "Giri�: %s\r\n"
				. "Ad�: %s %s \r\n"
				. "Telefon: %s \r\n"
				. "B�l�m: %s \r\n"
				. "G�rev: %s \r\n\r\n"
				. "Rezervasyon i�in:\r\n"
				. "%s \r\n\r\n"
				. "Profilinizi denetim masas�ndan g�ncelle�tirebilirsiniz.\r\n\r\n"
				. "Sorular�n�z i�in %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "Administrator,\r\n\r\n"
				. "Yeni kullan�c� kaydoldu\r\n"
				. "Eposta: %s \r\n"
				. "Ad: %s %s \r\n"
				. "Telefon: %s \r\n"
				. "B�l�m: %s \r\n"
				. "G�rev: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "You have successfully %s reservation #%s.\r\n\r\n<br/><br/>"
			. "Please use this reservation number when contacting the administrator with any questions.\r\n\r\n<br/><br/>"
			. "A reservation between %s %s and %s %s for %s"
			. " located at %s has been %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "Bu rezervasyon a�a��daki tarihlerde tekrarlanacakt�r:\r\n<br/>";
$email['reservation_activity_3'] = "Bu gruptaki t�m tekrarlayan rezervasyonlarayn� zamanda %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "rezervasyon �zeti:\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "<br/><br/>rezervasyonunuzu istedi�iniz az de�i�tirebilirsiniz %s :\r\n<br/><a href=&quot;%s&quot; target=&quot;_blank&quot;>%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "teknik sorular i�in <a href=&quot;mailto:%s&quot;>%s</a>.\r\n\r\n<br/<br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "Reservasyon #%s onayland�.\r\n\r\n<br/><br/>"
			. "Sorular�n�zda rezervasyon numaran�z� belirtiniz.\r\n\r\n<br/><br/>"
			. "Rezervasyon %s %s and %s %s for %s"
			. " yeri %s  %s.\r\n\r\n<br/><br/>";

// Email that the user gets when the administrator changes their password
$email['password_reset'] = "Sizin%s �ifreniz admin taraf�ndan s�f�rland�.\r\n\r\nGe�ici �ifreniz:\r\n\r\n %s\r\n";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\nyeni parolan�z %s hesap:\r\n\r\n%s";

// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s sizi rezervasyonuna davet etti:\r\n\r\n"
		. "Kaynak: %s\r\n"
		. "Ba�lang�� Tarihi: %s\r\n"
		. "Ba�lang�� zaman�: %s\r\n"
		. "Biti� tarihi: %s\r\n"
		. "Biti� zaman�: %s\r\n"
		. "�zet: %s\r\n"
		. "Tekrarlayan g�nler (e�er varsa): %s\r\n\r\n"
		. "Daveti kabul etmek i�in bu k�pr�ye t�klay�n�z (i�aretlenmemi�se kopyala yap��t�r yapabilirsiniz) %s\r\n"
		. "Daveti red etmek i�in (i�aretlenmemi�se kopyala yap��t�r yapabilirsiniz) %s\r\n"
		. "Se�im g�nlerini kabul etmek ya da rezervasyonlar�n�z� y�netmek i�in, giri� yap�n�z %s at %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "A�a��daki rezervasyondan kald�r�ld�n�z:\r\n\r\n"
		. "Kaynak: %s\r\n"
		. "Ba�lang�� tarihi: %s\r\n"
		. "Ba�lang�� zaman�: %s\r\n"
		. "Biti� tarihi: %s\r\n"
		. "Biti� zaman�: %s\r\n"
		. "�zet: %s\r\n"
		. "Tekrarlanan tarihler (e�er varsa): %s\r\n\r\n";	

// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "Rezervasyonunuz %s  %s den %s a %s %s yakla��yor.";
?>