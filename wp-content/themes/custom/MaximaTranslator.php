<?php

/**
 * Maxima Translator Class
 *
 * How to use this class:
 * 1- First include this class in your code
 *    require_once('MaximaTranslator.php');
 *
 * 2- To retrieve a string:
 *    MT::t('Hello world');
 *    {{ MT::t('Hello world') }}
 *    
 * 3- To echo a string:
 *    MT::e('Hello world');
 *
 * or to echo
 */







function checkTranslation($string) {
	
	$search_array = array(
	    "Home"=>"الصفحة الرئيسية",
	    "Show All"=>"عرض الكل",
	    "For Learning"=>"بهدف التعلم",
	    "View Albums"=>"عرض الألبوم",
	    "All Albums"=>"جميع الألبومات",
	    "khalifa Al Teneiji"=>"الشيخ خليفة الطنيجي",
        "Contact" => "تواصل مع",
        "SH. khalifa Al Teneiji" => "الشيخ خليفة الطنيجي",
        "Listen to Quran" => "استمع للقرآن الكريم",
        "Recited by Sh. Khalifa Alteneijie" => "بصوت القارئ خليفة الطنيجي ",
        "Learn More" => "اعرف المزيد",
        "Send" => "أرسل",
        "Read More" => "اقرأ المزيد",
        "About Alagar" => "نبذة عن الشركة",
        "Contact Us" => "اتصل بنا",
        "Mission" => "مهمتنا",
        "Vision" => "رؤيتنا",
        "Our Dream" => "أحلامنا",
        "Innovation" => "الابتكار",
        "Our Core" => "جوهرنا",
    );
	
if (array_key_exists($string, $search_array)) {
	  $foundString =  $search_array[$string];
	  return $foundString;
	}
	else{
		return $string;
		}
	
	}


function maxiamTranslate($string) {
$currentLanguage =  get_bloginfo( 'language' );
if($currentLanguage=='ar'){
		 return checkTranslation($string);
		}else{
			return $string;
			}		
	}

?>