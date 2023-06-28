<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PWKWRN7');</script>
    <!-- End Google Tag Manager -->
	
	<script type="text/javascript"> var leady_track_key="q5E6P9ju396skYjy"; (function(){ var l=document.createElement("script");l.type="text/javascript";l.async=true; l.src='https://ct.leady.com/'+leady_track_key+"/L.js"; var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(l,s); })(); </script>
	
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_attr( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<?php
	astra_header_before();

	astra_header();

	astra_header_after();

	astra_content_before();
	?>
	<div id="content" class="site-content">

<?php
if ( is_page_template( 'uvodni-stranka-template.php' ) ) :
?>
<div class="full-width-section hp">
<div class="ast-container">
<div class="hp-content">
<h1>Prodávejte efektivně dluhopisy a ušetřete 100+ hodin při správě</h1>
<p>James je moderní aplikace s automatizací většiny procesů. Zajistí vám bezchybnost všech úkonů a pomůže s pořádkem v evidenci při správě dluhopisů. Získáte nadčasový prodejní nástroj, který vám pohlídá cestu každého investora.</p>
	<a href=#kontakt><button class="btn-light">
  <p class="btn-text">Chci více informací</p>
<svg viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-dark">
  <path width="16" height="16" fill="#6028AB" d="M0.8359 25.5241a24.2888 25.3971 0 1 0 48.5776 0a24.2888 25.3971 0 1 0 -48.5776 0" />
  <path d="M24.0637 16.3116L31.6001 24.2763C32.4901 25.2169 32.4918 26.7578 31.6039 27.7006L24.085 35.6838" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
</svg>
</button></a>
</div>
</div>
<img class="hide-desktop" style="width: 100%;" src="/wp-content/uploads/2023/04/jamesapp.png" alt="jamesapp dluhopisy">	
<div class="ast-container">	
<div class="flex-container hp-reviews align-center"><div class="flex-1-6 wide"><p>DŮVĚŘUJÍ NÁM UŽ DESÍTKY <br> EMITENTŮ Z RŮZNÝCH ODVĚTVÍ</p></div><div class="flex-1-6"><img src="/wp-content/uploads/2023/04/logo_silverline.png" alt="silverline logo"></div><div class="flex-1-6"><img src="/wp-content/uploads/2023/04/logo_lux.png" alt="logo real luxemburg"></div><div class="hide-mobile flex-1-6"><img src="/wp-content/uploads/2023/04/logo_cee.png" alt="cee real estate"></div><div class="flex-1-6"><img src="/wp-content/uploads/2023/04/logo_buffler.png" alt="buffler logo"></div><div class="hide-mobile flex-1-6"><img src="/wp-content/uploads/2023/04/holdingtex.png" alt="holdingtex"></div></div>		
</div>	
</div>
</div>
<?php endif; ?>	

<!--- funkce stránka --->
<?php
if ( is_page_template( 'funkce-template.php' ) ) :
?>
<div class="fnc full-width-section">
<div class="ast-container">
<div class="flex-container space-between">
	<div class="flex-1-2">
	<p class="white margin-0">Máme dlouholeté zkušenosti s vývojem </p>
		<h2 class="white">Vytvořili jsme <br> sofistikovaný systém <br> pro jakéhokoliv emitenta</h2>
	</div>
		<div class="flex-1-2">
		<p class="white">Chceme, abyste Jamese využívali rádi a naplno! Proto jsme během vývoje zapracovali všechny funkce, o kterých víme, že emitenti ke správě emisí dluhopisů potřebují a zároveň jim ušetří spoustu času.</p>
	<p class="white">Prostudujte si kompletní funkce a kontaktujte nás pro více informací. Rádi vám vše do detailu vysvětlíme a prakticky představíme.</p>
	</div>
	</div>
</div>	
</div>	
	
  <div class="hide-desktop-tablet tabs full-width-section">
    <div class="ast-container">
      <div class="flex-1-2">
        <div class="tab" data-tab="1">  
			<p class="tab-number fialova">01</p>
			<h3>Zajistí kompletní automatizaci všech procesů</h3>
          <span class="tab-text">
<ul>
<p class="tab-text"><li>Se správou dluhopisů se pojí celá řada procesů, které James udělá za vás a plně automaticky.</li>
<li>Díky chytrému dashboardu budete vždy upozorněni na případné problémy, které ze strany investorů nastaly.</li>
<li>Ze systému můžete spravovat hned několik emisí pod různými firmami – funkce neomezeného počtu emitentů a dluhopisů.</li>
<li>Přístup do Jamese máte k dispozici 24/7 a 100 % online. Současně získáte kvalitní podporu a help centrum, které je vám denně k dispozici.</li></p></ul></span>
        </div>
		  <hr>
        <div class="tab" data-tab="2">
			<p class="tab-number fialova">02</p>
			<h3>Všechny údaje vždy při sobě a na jednom místě</h3>
          <span class="tab-text">
<ul><li>Aplikace James zaeviduje všechny potřebné údaje o investorech a soubory, které se s koupí dluhopisů pojí.</li>
<li>K dispozici budete mít kompletní historii ke každému investorovi a emisi. Všechny informace a dokumenty rychle dohledáte.</li>
<li>Získáte kompletní přehled o výkonnosti prodeje díky předdefinovaným statistikám.</li>
<li>Pokud už máte vydanou emisi, můžete si do Jamese naimportovat všechnu historii a kompletní údaje k vašim současným investorům.</li></ul></span>
        </div><hr>
		          <div class="tab" data-tab="3">  
			<p class="tab-number fialova">03</p>
			<h3>Nejmodernější zabezpečení</h3>
          <span class="tab-text">
<ul><li>K evidenci používáme nejnovější technologie a metody, které zajistí bezpečnost všech dat. Naše datacentrum splňuje nejvyšší standard bezpečnosti.</li>
<li>Pravidelně kontrolujeme, aktualizujeme a Jamese nadále vyvíjíme podle potřeby našich klientů.</li>
<li>Průběžně zvyšujeme bezpečnost systému tak, aby vaše data byla 100 % chráněna proti externím skriptům, načítání neověřených zdrojů či proti cílenému zahlcení.</li></ul></span>		  
        </div><hr>
		          <div class="tab" data-tab="4">  
			<p class="tab-number fialova">04</p>
			<h3>Automatizovaná komunikace s investory a dodavateli</h3>
          <span class="tab-text">
<ul><li>Vaši investoři budou automaticky provedeni celým procesem objednávky. James kontroluje chybějící dokumenty a v případě obtíží odesílá upomínky.</li>
<li>V rámci celé komunikace využívá personalizované oslovení investorů (v 5. pádě). Automaticky udělá validaci adres, emailů, bankovního účtu, data narození, rodného čísla atd.</li>
<li>Díky pokročilým technologiím dokáže James sledovat zásilky odeslaných dluhopisů a investorům přímo do emailu zasílá sledovací kód zásilky.</li></ul></span>			  
        </div><hr>
		          <div class="tab" data-tab="5">  
			<p class="tab-number fialova">05</p>
			<h3>Možnost brandingu a přizpůsobení Jamese </h3>
          <span class="tab-text">
<ul><li>Do komunikace s investory si můžete vložit vlastní logo, texty a grafiku. K dispozici máte jednoduchý editor.</li>
<li>Současně máte možnost do komunikace zařadit vlastní dokumenty s automatickým generováním obsahu.</li>
<li>A mysleli jsme nejen na investory, ale i na dodavatele – vaše tipaře a zprostředkovatele. Máte tak pod kontrolou i výplatu jejich odměn.</li></ul></span>		  
        </div><hr>
		          <div class="tab" data-tab="6">  
			<p class="tab-number fialova">06</p>
			<h3>James vyřeší i výjimečné situace</h3>
          <span class="tab-text">
<ul><li>Výjimečné situace se v životě stávají a James je na ně připraven. Jednoduše vyřeší pozůstalosti nebo převody prostředků mezi investory.</li>
<li>V případě, že v emisních podmínkách máte možnost předčasného splacení a investor jej využije, James všechno zpracuje a uloží do historie k investorovi.</li>
<li>Jsme připraveni na zapracování do vývoje dalších situací, které si trh žádá.</li></ul></span>	
        </div>
      </div>
      <div class="flex-1-2">
        <div class="tab-img" data-tab="1"><img src="/wp-content/uploads/2023/05/automatizace.png"></div>
        <div class="tab-img" data-tab="2"><img src="/wp-content/uploads/2023/05/vsechny_udaje.png"></div>
		 <div class="tab-img" data-tab="3"><img src="/wp-content/uploads/2023/05/bezpecnost.png"></div>
		 <div class="tab-img" data-tab="4"><img src="/wp-content/uploads/2023/05/automatizovana_komunikace.png"></div>
		 <div class="tab-img" data-tab="5"><img src="/wp-content/uploads/2023/05/moznost_brandingu_jamese.png"></div>
		 <div class="tab-img" data-tab="6"><img src="/wp-content/uploads/2023/05/situace.png"></div>
      </div>
    </div>
  </div>

	
</div>
<?php endif; ?>		
	
		<div class="ast-container">
		<?php astra_content_top(); ?>
	