<?php
/*
Template Name: Uvodni Stranka Template
*/

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?><section id="funkce">	
	<div class="section-1">
		<div class="flex-container space-between">
		<div class="flex-1-2">
			<h4>Vývoj aplikace zaštiťuje společnost CFG Tech</h4>
			<h2>James už slouží desítkám emitentů</h2>
		</div>
		<div class="flex-1-2">
			<p>James je na trhu už několik let a za tu dobu si dokázal získat desítky spokojených emitentů. Mezi nimi najdete malé i velké firmy z různých odvětví, které vydaly jednu či více emisí dluhopisů. Provozovatelem je společnost CFG Tech založená v roce 2017, která má ve správě celkem tři různé aplikace. </p>
		</div>
		</div>
	
	<div class="flex-container flex-center">
		<div class="flex-1-1" style="margin:75px 0px">
			<h4 class="text-center">Máme dlouholeté zkušenosti se správou emisí dluhopisů.</h4>
			<h2>Top funkce, které James nabízí</h2>
		</div>
	</div>
</div>		
    <div class="carousel-section">
	<button id="prev"><svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.54199 19.9983L1.9488 12.1498C1.05206 11.2229 1.05206 9.70602 1.9488 8.77898L9.54199 0.92926" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</button>
    <div class="carousel" id="carousel">
        <!-- Box elements go here -->
    </div>
    <button id="next"><svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.998066 1.00571L8.60008 8.84571C9.49787 9.7716 9.49957 11.2885 8.60388 12.2165L1.01953 20.0748" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</button>
</div>
		<div class="flex-container flex-center">
		<div class="flex-1-1 small-space">
			<a href="/funkce" class="underline">Kompletní seznam všech funkcí</a>
		</div>
	</div>	
		</section>
<section id="jak-to-funguje">			
<div class="section-1">
	<div class="flex-container flex-center">
		<div class="flex-1-1 text-center">
			<h4>Jak to funguje</h4>
			<h2>Chcete si Jamese vyzkoušet?</h2>
		</div>
	</div>
</div>	
	
<div class="section-2">
	<div class="flex-container space-between">
		<div class="flex-1-3 text-center">
			<p class="fialova">Kontaktujte nás</p>
			<h3>Zavolejte nebo vyplňte formulář</h3>
			<p>Spojte se s námi a společně domluvíme postup, který vám vyhovuje nejlépe. Rádi zodpovíme veškeré dotazy týkající se aplikace James.</p>	
		</div>
		<div class="flex-1-3 text-center">
			<p class="fialova">Online shůzka</p>
			<h3>Domluvte si s námi schůzku</h3>
			<p>Sjednejte si 30 minutovou schůzku s našimi experty. Rádi vás Jamesem osobně provedeme a zodpovíme veškeré dotazy.</p>
			<a href="https://calendly.com/dominik-lamacz-cfg/james" target="_blank"><button class="btn-dark-small">
  <p class="btn-text">Domluvit schůzku</p>
<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<ellipse cx="13.7827" cy="14" rx="13.5435" ry="14" fill="#DACCE9"/>
<path d="M11.8192 8.73113L16.029 13.0727C16.5262 13.5855 16.5271 14.4255 16.0311 14.9394L11.8311 19.2911" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</button></a>
		</div>
		<div class="flex-1-3 text-center">
			<p class="fialova">Trial verze</p>
			<h3>Vyzkoušejte trial na 14 dní zdarma</h3>
			<p>Chcete si Jamese vyzkoušet? Vyplňte formulář a my vám zašleme přístupy do trial verze balíčku Pro. Získáte plnou verzi po dobu 14 dní.</p>
		</div>
	</div>
</div>			
	
	<div class="section-3">
		<div class="flex-container space-between">
		<div class="flex-3-1">
			<h4>Provedeme vás aplikací James</h4>
			<h2>Začněte spravovat svojí emisi dluhopisů s James App ještě dnes!</h2>
		</div>
		<div class="flex-3-1">
			<a href="#kontakt"><button class="btn-dark">
  <p class="btn-text">Vyplnit poptávkový formulář</p>
<svg viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-dark">
  <path width="16" height="16" fill="#6028AB" d="M0.8359 25.5241a24.2888 25.3971 0 1 0 48.5776 0a24.2888 25.3971 0 1 0 -48.5776 0"></path>
  <path d="M24.0637 16.3116L31.6001 24.2763C32.4901 25.2169 32.4918 26.7578 31.6039 27.7006L24.085 35.6838" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</button></a>
		</div>
		</div>

	<div class="flex-container" style="justify-content: center;">
		<div class="flex-1-1 small-space">
		
<!-- odkaz na video
<a id="video-link" href="#"><img src="/wp-content/uploads/2023/04/jamesvideo.png" class="hide-mobile" alt="James video"><img src="/wp-content/uploads/2023/04/video-mobile.png" alt="James video" class="hide-desktop"></a> -->

<!-- odkaz na video docasne -->
<a id=""><img src="/wp-content/uploads/2023/05/videobanner.png" class="hide-mobile" alt="James video"><img src="/wp-content/uploads/2023/04/video-mobile.png" alt="James video" class="hide-desktop"></a>			
		
			
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <video id="myVideo" controls>
      <source src="/wp-content/themes/astra-child/jamesvideo.mp4" type="video/mp4">
      Váš prohlížeč nepodporuje přehrávání videa.
    </video>
  </div>
</div>
			
		</div>
	</div>	
				
</div>

<div class="section-4">
	<div class="flex-container space-between">
		<div class="flex-1-1">
			<h4>James je 100 % online s kvalitní podporou.</h4>
			<h2>Vyberte si svůj plán</h2>
		</div>
	</div>
	<div class="flex-container space-between flex-start">
		<div class="flex-1-2 price-list price-list-light">
			<h3 class="fialova">Starter</h3>
			<p class="subtitle">Nechte investory objednávat dluhopisy online </p>
		    <hr>
			<h5>Dostupné funkce pro tuto verzi: </h5>
			 <ul class="item-list">
      <li>
        Online objednávka Vašich dluhopisů na pár kliků
        <span class="tooltip">Objednávku investoři zakládají online, James jim automaticky vygeneruje platební příkazy a podepsaný objednávkový formulář – vy tedy čekáte jen na přijatou platbu.</span>
        <span class="icon-ok"></span>
      </li>
      <li>
        Vlastni branding v komunikaci a v dokumentech
        <span class="tooltip">V automatizované komunikaci a generovaných dokumentech můžete zobrazit logo své společnosti.</span>
        <span class="icon-none"></span>
      </li>
      <li>
        Automatizované párování plateb investorů
        <span class="tooltip">Příchozí platby na Váš bankovní účet jsou párovány automaticky, Vy se nemusíte o nic starat.</span>
        <span class="icon-none"></span>
      </li>
	  <li>
       Chytrý dashboard, který za vás hlídá všechny objednávky.
        <span class="tooltip">Dahsboard za Vás hlídá veškeré objednávky investorů a chytře Vás i investora informuje o všech potřebných akcích.</span>
        <span class="icon-none"></span>
      </li>
	 <li>
        Automatické generování všech dokumentů
        <span class="tooltip">Veškeré dokumenty potřebné pro investici jsou automatizovaně generovány.</span>
        <span class="icon-none"></span>
      </li>
				 	 <li>
        Kompletní automatizace všech online procesů při správě emisí dluhopisů
        <span class="tooltip">James za Vás automatizuje v celém procesu správy dluhopisů vše, co se dá.</span>
        <span class="icon-none"></span>
      </li>
				 	 <li>
        Kompletní automatizace výplat úrokových výnosů a jistin, včetně bonusů
        <span class="tooltip">Evidence, výpočet a generování platebních příkazů výplat úrokových kupónů i jistiny je kompletně automatizována.</span>
        <span class="icon-none"></span>
      </li>
				 	 <li>
        Automatizovaná komunikace s investory
        <span class="tooltip">Investoři jsou automaticky informování o celém procesu investice, Vám stačí jen sledovat jak přibývají nové objednávky. </span>
        <span class="icon-none"></span>
      </li>
				 	 <li>
        Kompletní evidence všech údajů a souborů i s historií
        <span class="tooltip">Všechny údaje o investorech a jejich investicích jsou přehledně zobrazeny vč. historie změn.</span>
        <span class="icon-none"></span>
      </li>
				 	 <li>
        Přehled jednotlivých dluhopisů – vlastníci a dluhopisy volné k prodeji
        <span class="tooltip">James Vás přehledně informuje o aktuálním stavu každé emise a přehledně zobrazí informace o každém jednotlivém dluhopisu.</span>
        <span class="icon-none"></span>
      </li>
				 	 <li>
        Pohodlný import Vašich stávajících emisí
        <span class="tooltip">Pokud máte existující emisi, můžete ji pohodlně importovat do Jamese, a to včetně všech investorů a jejich investic.</span>
        <span class="icon-none"></span>
      </li>
				 	 <li>
       Správa obchodní sítě a automatizace výplat odměn
        <span class="tooltip">Dodavatelé investorů (např. zprostředkovatele) můžete mít kompletně ve správě, vč. automatizace výplat.</span>
        <span class="icon-none"></span>
      </li>
				 	 <li>
        Kompletní odbavení procesu rolování investorů mezi emisemi
        <span class="tooltip">Automatizovaná podpora převodu investorů z jedné emise na novou vč. hlídání vrácení původních dluhopisů, možnosti navýšení investice atd.</span>
        <span class="icon-none"></span>
      </li>
				 				 	 <li>
        Řešení výjimečných událostí
        <span class="tooltip">James je připraven na řešení i těch nejvýmečnějších situací jako převod investic mezi investory, předčasné splacení investice, pozůstalostní řízení atd. Vše automatizovaně a s největším přehledem.</span>
        <span class="icon-none"></span>
      </li>
				 				 	 <li>
        Prioritní podpora
        <span class="tooltip">Podpora pro Vás bude k dispozici prioritně a pomůže Vám se všemi problémy a dotazy.</span>
        <span class="icon-none"></span>
      </li>
				 				 	 <li>
        Školení a konzultace zdarma
        <span class="tooltip">Poskytneme Vám bezplatné školení a konzultaci do výše až 2 hodin. Další poradenství Vám bude k dispozici spolu s podporou, která pro Vás bude v rámci PRO tarifu prioritní.</span>
        <span class="icon-none"></span>
      </li>
				 				 	 <li>
        Implementace vlastních požadavků na míru na sníženou cenu
        <span class="tooltip">Náš tým Jamese neustále vyvíjí. Jsme připraveni vytvořit na míru jakoukoliv novou funkcionalitu nebo vám implemetovat jakékoliv nové řešení. Vše za předem dohodnutou cenu. </span>
        <span class="icon-none"></span>
      </li>
				 				 	 <li>
        Počet emitentů ve správě
        <span class="tooltip">Počet emisí, které Vám James pomůže spravovat.</span>
        <span class="icon-1"></span>
      </li>
				 				 	 <li>
        Počet emisí ve správě
        <span class="tooltip">Počet emisí, které Vám James pomůže spravovat.</span>
        <span class="icon-1"></span>
      </li>	 
				 
    </ul>
<div class="pricing-wrapper">
  <div class="default-state">
    <h3 class="fialova">zdarma</h3>
    <button class="toggle-button" data-index="0">
      <span>Rozbalit <span class="hide-mobile-tablet">celou nabídku</span></span>
      <span class="toggle-icon"></span>
    </button>
  </div>
  <div class="expanded-state" style="display: none;">
    <h3 class="fialova">zdarma</h3>
    <button class="close-button toggle-button">
      <span class="hide-mobile-tablet">Zavřít nabídku</span>
      <span class="toggle-icon"></span>
    </button>
    <!--  -->
<a href="#kontakt"><button class="btn-light">
  <p class="btn-text text-center">Vyplnit poptávku</p>
<svg viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-dark">
  <path width="16" height="16" fill="#6028AB" d="M0.8359 25.5241a24.2888 25.3971 0 1 0 48.5776 0a24.2888 25.3971 0 1 0 -48.5776 0"></path>
  <path d="M24.0637 16.3116L31.6001 24.2763C32.4901 25.2169 32.4918 26.7578 31.6039 27.7006L24.085 35.6838" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</button></a>  </div>
</div>	
			
		</div>
	<div class="flex-1-2 price-list price-list-dark">
			<h3>Pro</h3>
			<p class="subtitle">Kompletní automatizace celé správy emise bez starostí</p>
		    <hr>
			<h5>Dostupné funkce pro tuto verzi: </h5>
			 <ul class="item-list">
      <li>
        Online objednávka Vašich dluhopisů na pár kliků
        <span class="tooltip">Objednávku investoři zakládají online, James jim automaticky vygeneruje platební příkazy a podepsaný objednávkový formulář – vy tedy čekáte jen na přijatou platbu.</span>
        <span class="icon-ok"></span>
      </li>
      <li>
        Vlastni branding v komunikaci a v dokumentech
        <span class="tooltip">V automatizované komunikaci a generovaných dokumentech můžete zobrazit logo své společnosti.</span>
        <span class="icon-ok"></span>
      </li>
      <li>
        Automatizované párování plateb investorů
        <span class="tooltip">Příchozí platby na Váš bankovní účet jsou párovány automaticky, Vy se nemusíte o nic starat.</span>
        <span class="icon-ok"></span>
      </li>
	  <li>
       Chytrý dashboard, který za vás hlídá všechny objednávky
        <span class="tooltip">Dahsboard za Vás hlídá veškeré objednávky investorů a chytře Vás i investora informuje o všech potřebných akcích.</span>
        <span class="icon-ok"></span>
      </li>
	 <li>
        Automatické generování všech dokumentů
        <span class="tooltip">Veškeré dokumenty potřebné pro investici jsou automatizovaně generovány.</span>
        <span class="icon-ok"></span>
      </li>
				 	 <li>
        Kompletní automatizace všech online procesů při správě emisí dluhopisů
        <span class="tooltip">James za Vás automatizuje v celém procesu správy dluhopisů vše, co se dá.</span>
        <span class="icon-ok"></span>
      </li>
				 	 <li>
        Kompletní automatizace výplat úrokových výnosů a jistin, včetně bonusů
        <span class="tooltip">Evidence, výpočet a generování platebních příkazů výplat úrokových kupónů i jistiny je kompletně automatizována.</span>
        <span class="icon-ok"></span>
      </li>
				 	 <li>
        Automatizovaná komunikace s investory
        <span class="tooltip">Investoři jsou automaticky informování o celém procesu investice, Vám stačí jen sledovat jak přibývají nové objednávky. </span>
        <span class="icon-ok"></span>
      </li>
				 	 <li>
        Kompletní evidence všech údajů a souborů i s historií
        <span class="tooltip">Všechny údaje o investorech a jejich investicích jsou přehledně zobrazeny vč. historie změn.</span>
        <span class="icon-ok"></span>
      </li>
				 	 <li>
        Přehled jednotlivých dluhopisů – vlastníci a dluhopisy volné k prodeji
        <span class="tooltip">James Vás přehledně informuje o aktuálním stavu každé emise a přehledně zobrazí informace o každém jednotlivém dluhopisu.</span>
        <span class="icon-ok"></span>
      </li>
				 	 <li>
        Pohodlný import Vašich stávajících emisí
        <span class="tooltip">Pokud máte existující emisi, můžete ji pohodlně importovat do Jamese, a to včetně všech investorů a jejich investic.</span>
        <span class="icon-ok"></span>
      </li>
				 	 <li>
       Správa obchodní sítě a automatizace výplat odměn
        <span class="tooltip">Dodavatelé investorů (např. zprostředkovatele) můžete mít kompletně ve správě, vč. automatizace výplat.</span>
        <span class="icon-ok"></span>
      </li>
				 	 <li>
        Kompletní odbavení procesu rolování investorů mezi emisemi
        <span class="tooltip">Automatizovaná podpora převodu investorů z jedné emise na novou vč. hlídání vrácení původních dluhopisů, možnosti navýšení investice atd.</span>
        <span class="icon-ok"></span>
      </li>
				 				 	 <li>
        Řešení výjimečných událostí
        <span class="tooltip">James je připraven na řešení i těch nejvýmečnějších situací jako převod investic mezi investory, předčasné splacení investice, pozůstalostní řízení atd. Vše automatizovaně a s největším přehledem.</span>
        <span class="icon-ok"></span>
      </li>
				 				 	 <li>
        Prioritní podpora
        <span class="tooltip">Podpora pro Vás bude k dispozici prioritně a pomůže Vám se všemi problémy a dotazy.</span>
        <span class="icon-ok"></span>
      </li>
				 				 	 <li>
        Školení a konzultace zdarma
        <span class="tooltip">Poskytneme Vám bezplatné školení a konzultaci do výše až 2 hodin. Další poradenství Vám bude k dispozici spolu s podporou, která pro Vás bude v rámci PRO tarifu prioritní.</span>
        <span class="icon-ok"></span>
      </li>
				 				 	 <li>
        Implementace vlastních požadavků na míru na sníženou cenu
        <span class="tooltip">Náš tým Jamese neustále vyvíjí. Jsme připraveni vytvořit na míru jakoukoliv novou funkcionalitu nebo vám implemetovat jakékoliv nové řešení. Vše za předem dohodnutou cenu. </span>
        <span class="icon-ok"></span>
      </li>
				 				 	 <li>
        Počet emitentů ve správě
        <span class="tooltip">Počet emisí, které Vám James pomůže spravovat.</span>
        <span class="icon-neo"></span>
      </li>
				 				 	 <li>
        Počet emisí ve správě
        <span class="tooltip">Počet emisí, které Vám James pomůže spravovat.</span>
        <span class="icon-neo"></span>
      </li> 
    </ul>
		
<div class="pricing-wrapper">
  <div class="default-state">
    <h3>Cenu konzultujte s námi. Společně vybereme řešení vám na míru.</h3>
    <button class="toggle-button" data-index="0">
		<span>Rozbalit <span class="hide-mobile-tablet">celou nabídku</span></span>
      <span class="toggle-icon"></span>
    </button>
  </div>
  <div class="expanded-state" style="display: none;">
    <h3>Cenu konzultujte s námi. <br> Společně vybereme řešení vám na míru.</h3>
    <button class="close-button toggle-button">
      <span class="hide-mobile-tablet">Zavřít nabídku</span>
      <span class="toggle-icon"></span>
    </button>
    <!--  -->
<a href="#kontakt"><button class="btn-light">
  <p class="btn-text text-center">Vyplnit poptávku</p>
<svg viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-dark">
  <path width="16" height="16" fill="#6028AB" d="M0.8359 25.5241a24.2888 25.3971 0 1 0 48.5776 0a24.2888 25.3971 0 1 0 -48.5776 0"></path>
  <path d="M24.0637 16.3116L31.6001 24.2763C32.4901 25.2169 32.4918 26.7578 31.6039 27.7006L24.085 35.6838" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</button></a>
  </div>
</div>
		</div>
	</div>
</div>	
		
<div class="section-5">
	<div class="flex-container space-between">
		<div class="flex-3-1"><img src="/wp-content/uploads/2023/04/jamesapp-tym.jpg" alt="James vyvojari">
			<h3 class="text-center" style="margin:30px 0px;">Experti v oboru.</h3>
			<div class="flex-container space-between">
				<div class="flex-1-3">
					<img src="/wp-content/uploads/2023/04/dominik.jpg" alt="dominik jamesapp">
					<h3>Dominik Lamacz</h3>
					<p class="fialova">Product owner James App</p>
				</div>
				<div class="flex-1-3">
					<img src="/wp-content/uploads/2023/04/maros.png" alt="maros jamesapp">
					<h3>Maroš Kasinec</h3>
					<p class="fialova">CTO James App</p>
				</div>
				<div class="flex-1-3">
					<img src="/wp-content/uploads/2023/04/jancaban.png" alt="honza jamesapp">
					<h3>Jan Čaban</h3>
					<p class="fialova">Technická podpora</p>
				</div>
			</div>
		</div>
		<div class="flex-3-1">
			<h4>Vlastní vývojový tým</h4>
			<h2>Jsme zkušený tým developerů</h2>
			<p>Jsme tým vývojářů a profesionálů o 15 lidech s bohatými zkušenosti, kteří se o Jamese a o vás denně starají.</p>
		</div>
	</div>
</div>
</section>
<section id="recenze">		
<div class="section-6">
	<div class="flex-container space-between" style="margin-bottom:50px">
		<div class="flex-1-2">
		<h4>Máme pozitivní reference</h4>
		<h2>James už slouží desítkám emitentů</h2>
		</div>		
		<div class="flex-1-2">
		<p class="black font-18">James je na trhu už několik let a za tu dobu jej využily víc než dvě desítky emitentů inzerující své emise na dluhopisovém portálu Dluhopisomat. 
Reference nám poskytují na požádání spokojení emitenti, s jejichž souhlasem je umisťujeme níže na stránku. </p>
		</div>
	</div>
	
		<div class="flex-container space-between">
		<div class="flex-1-2">
			<div class="reference">
				<p>„Diky aplikaci James je správa emisí velmi jednoduchá a uživatelsky přívětivá. Vše na pár kliknutí na jednom místě. Velmi oceňuji také ongoing improvements v systému, který se neustále zlepšuje.“
				</p>
				<div class="flex-container space-between align-center">
					<div class="flex-3-1">
						<div class="client-box">
						<img class="client-img" src="/wp-content/uploads/2023/04/vojtechbrix.png" alt="Vojtěch Brix">
						<div class="client-text">Vojtěch Brix <br>
						Co-founder, Investment Manager<br>
						Silverline Real Estate</div>
						</div>
					</div>
					<div class="flex-3-1 client-logo"><img src="/wp-content/uploads/2023/04/client_logo.png" alt="silverline dluhopis"></div>
			</div>
		</div>		
	</div>
	
			<div class="flex-1-2">
			<div class="reference">
				<p>Díky aplikaci James jsme získali desítky investorů, kteří opakovaně objednávají dluhopisy online. Dokážeme je rychle odbavit a pohlídat si všechny výplaty i platby od investorů. Aplikace nám <span class="more">...</span>
        <span class="less" style="display: none;">šetří spoustu času i peněz a je neustále rozvíjena. Používání je intuitivní a v případě že jsem potřeboval poradit, vše jsem vyřešil v centru pomoci.. Aplikace má všechny funkce, které potřebujeme a celkově jsme s používáním spokojeni. Můžeme se naplno věnovat našemu byznysu.</span>
        <a href="#" class="read-more">Číst více</a>
				</p>
				<div class="flex-container space-between align-center">
					<div class="flex-3-1">
						<div class="client-box">
						<img class="client-img" src="/wp-content/uploads/2023/04/radek.png" alt="Radek Michalčík">
						<div class="client-text">Radek Michalčík<br>
                         Jednatel a majitel společnosti Buffler 
						</div>
					</div>
					</div>
					<div class="flex-3-1 client-logo"><img src="/wp-content/uploads/2023/04/buffler.png" alt="buffler dluhopis"></div>
			</div>
		</div>		
	</div>		
</div>
		
		<div class="flex-container space-between" style="margin-top:20px">
		<div class="flex-1-2">
			<div class="reference">
				<p>„CRM systém JAMES využíváme pro kompletní správu emise dluhopisů, od veškerých úkonů spojených s úpisem, přes komunikaci s investory, výpočet a výplatu úrokových výnosů až v podstatě po <span class="more">...</span>
        <span class="less" style="display: none;">cokoliv kolem agendy. V porovnání s předchozí emisí, kdy jsme si správu dělali interně sami, je práce v JAMESovi naprosto skvělá a díky automatizaci nám šetří 75% času. Nejvíc oceňuji pomoc při úpisu emise díky online objednávce, kdy má klient všechno na pár kliknutí hotové. Aplikace obsahuje mnoho užitečných funkcí a přitom zůstává přehledná a jednoduchá.“</span>
        <a href="#" class="read-more">Číst více</a>
				</p>
				<div class="flex-container space-between align-center">
					<div class="flex-3-1">
						<div class="client-box">
						<img class="client-img" src="/wp-content/uploads/2023/04/robert.png" alt="Robert Olschbaur">
						<div class="client-text">Ing. Robert Olschbaur<br>
							Jednatel a majitel  RTL Czech s.r.o.
						</div>
						</div>
					</div>
					<div class="flex-3-1 client-logo"><img src="/wp-content/uploads/2023/04/rtl.png" alt="rtl dluhopis"></div>
			</div>
		</div>		
			</div>
	
			<div class="flex-1-2">
			<div class="reference">
				<p>„Naše společnost vydala už několik emisí dluhopisů pod různými firmami. Bez aplikace James bychom týdně trávili hodiny nad administrativou a hlídání plateb od investorů, což aplikace <span class="more">...</span>
        <span class="less" style="display: none;">zvládne sama. Oceňuji široký záběr a podporu, která dokáže rychle reagovat.”</span>
        <a href="#" class="read-more">Číst více</a>
				</p>
				<div class="flex-container space-between align-center">
					<div class="flex-3-1">
						<div class="client-box">
						<img class="client-img" src="/wp-content/uploads/2023/04/image-22-1.png" alt="Radek Slabyhoud">
						<div class="client-text">Radek Slabyhoud<br>Majitel skupiny Real Luxembourg </div>
						</div>
					</div>
					<div class="flex-3-1 client-logo"><img src="/wp-content/uploads/2023/04/real_lux.png" alt="Real Luxembourg"></div>
			</div>
		</div>		
	</div>		
 </div>	
</div>	
<style>
.faq {
    display: none;
}</style>	
<div class="section-7">

<div class="flex-container">
		<div class="flex-1-1">
			<h4>Na dotazy odpovídá Dominik Lamacz, product owner James App</h4>
			<h2>Nejčastejší dotazy k fungování Jamese</h2>
		</div>
	</div>	
	
	
	<div class="flex-container space-between">
			<div class="flex-1-2">
		<div class="faq-container faqc1">
    <div class="faq">
      <div class="faq-header" onclick="toggleFaq(0)">
        <h3>Je možné začít používat Jamese, i když už máme existující emisi?</h3>
        <img id="icon-0" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-0">
        <p>Ano, již rozběhlé dluhopisové emise můžete jednoduše importovat do Jamese včetně všech údajů o objednávkách, investorech i investicích. Do několika hodin budete své emise spravovat na úplně jiné úrovni. Importovat můžete i ukončené emise pro archivní účely a úplnost dat na jednom místě – historické emise máte v Jamesovi zdarma!</p>
      </div>
      </div>
	</div>
    <div class="faq">
      <div class="faq-header" onclick="toggleFaq(1)">
        <h3>V čem všem mi James pomůže?</h3>
        <img id="icon-1" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-1">
        <p>Digitalizace a automatizace je téměř nutností pro dlouhodobou, bezpečnou a jednoduchou správu emisí. James vám automaticky odbaví objednávky dluhopisů, vygeneruje veškeré potřebné dokumenty, zpracuje přijaté platby a vykomunikuje veškeré náležitosti s investory. Pravidelně počítá výplaty úrokových výnosů a jistin, ke kterým vždy automaticky vytvoří platební příkazy. Všechno bezpečně a přehledně eviduje, abyste měli dlouhodobý přehled a pořádek.</p>
      </div>
      </div>
    </div>		
    <div class="faq">
      <div class="faq-header" onclick="toggleFaq(2)">
        <h3>Pro koho je James vhodný?</h3>
        <img id="icon-2" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-2">
        <p>James je vhodný pro všechny emitenty firemních dluhopisů, kteří vítají digitalizaci a chtějí svůj čas věnovat klíčovým procesům svého byznysu.</p>
      </div>
      </div>
    </div>			
    <div class="faq">
      <div class="faq-header" onclick="toggleFaq(3)">
        <h3>Jaké musím mít znalosti se správou dluhopisů?</h3>
        <img id="icon-3" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-3">
        <p>James vás a vaše kolegy přehledně provede každým krokem zpracování objednávky i správy investic. Na celou řadu případných problémů automaticky upozorní vás i vaše investory. Každopádně je nutné znát právní úpravu související s vydáváním a správou dluhopisů.</p>
      </div>
      </div>
    </div>					
    <div class="faq">
      <div class="faq-header" onclick="toggleFaq(4)">
        <h3>Jak funguje online objednávka dluhopisů?</h3>
        <img id="icon-4" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-4">
        <p>Dluhopisy si  mohou zájemci o investici jednoduše objednat na pár kliků díky online formuláři. James je automaticky obslouží za vás –  vygeneruje potřebnou dokumentaci a platební instrukce. Po příchodu platby vás i investora James informuje o provedené investici, vygeneruje dluhopisy a další dokumenty k tisku. Po jejich odeslání poskytne odkaz pro sledování zásilky a podpis předávacího protokolu. Celý proces je tedy maximálně jednoduchý a bezstarostný.</p>
      </div>
      </div>
    </div>		
    <div class="faq">
      <div class="faq-header" onclick="toggleFaq(5)">
        <h3>Je možné, aby James generoval dokumenty podle naší šablony?</h3>
        <img id="icon-5" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-5">
        <p>Ano, v Jamesovi je možné implementovat smluvní dokumentaci a další soubory podle vlastního vzoru. Tato customizace může být zpoplatněna.</p>
      </div>
      </div>
    </div>					
    <div class="faq">
      <div class="faq-header" onclick="toggleFaq(6)">
        <h3>Je možné, aby byla dokumentace a automatizovaná komunikace pod naší značkou?</h3>
        <img id="icon-6" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-6">
        <p>Ano, v tarifu James Pro jsou veškeré dokumenty a e-maily zasílané Jamesem s brandingem vaší společnosti.</p>
      </div>
      </div>
    </div>					
    <div class="faq">
      <div class="faq-header" onclick="toggleFaq(7)">
        <h3>Jak rychle se mohu dostat do Jamese?</h3>
        <img id="icon-7" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-7">
        <p>Svůj profil v Jamesovi si můžete spustit a začít používat prakticky ihned poté, co se domluvíme na spolupráci.</p>
      </div>
      </div>
    </div>						
						
				
  </div>
		
		
		</div>	
	        <div class="flex-1-2">
		
				<div class="faq-container faqc2">
    <div class="faq">
      <div class="faq-header" onclick="toggleFaq(9)">
        <h3>Kde mohu Jamese používat?</h3>
        <img id="icon-9" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-9">
        <p>James je moderní online cloudová aplikace, můžete tak k němu přistupovat prakticky odkudkoliv ze svého prohlížeče v počítači nebo telefonu.</p>
      </div>
      </div>
    </div>
    
	    <div class="faq">
      <div class="faq-header" onclick="toggleFaq(10)">
        <h3>Jak budou naše data zabezpečena?</h3>
        <img id="icon-10" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-10">
        <p>Vaše data jsou u nás v bezpečí, protože splňujeme přísné mezinárodní standardy a certifikace, jako jsou ISO 27001, SOC 1-3, PCI DSS Level 1, GDPR a HIPAA. Používáme nejlepší bezpečnostní postupy, včetně šifrování dat, správy přístupu, síťové izolace a pravidelné zálohování. Mimo jiné provádíme proaktivní sledování a detekci, pravidelné bezpečnostní aktualizace a revize. Důraz klademe na neustálé zlepšování a transparentnost našich bezpečnostních postupů.</p>
      </div>
      </div>
    </div>
					
	    <div class="faq">
      <div class="faq-header" onclick="toggleFaq(11)">
        <h3>Mohu si Jamese nejdříve vyzkoušet?</h3>
        <img id="icon-11" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-11">
        <p>Ano, nabízíme možnost 14denního bezplatného zkušebního období jakéhokoliv tarifu Jamese (vč. James Pro). Věříme, že vás James natolik ohromí, že nebudete váhat s ním pokračovat.</p>
      </div>
      </div>
    </div>
					
	<div class="faq">
      <div class="faq-header" onclick="toggleFaq(12)">
        <h3>Jaký je rozdíl mezi plánem Starter a Pro?</h3>
        <img id="icon-12" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-12">
        <p>James Starter je primárně určen pro emitenty, kteří se prozatím nechtějí zavazovat a upřednostňují využít funkci online objednávky. Tím umožní zájemcům o investici jednoduchou poptávku, včetně generování dokumentů a platebních příkazů. Emitenti, kteří chtějí automatizovat veškeré činnosti a využít Jamese naplno, mohou kdykoliv upgradovat na tarif Pro.
</p>
      </div>
      </div>
    </div>
					
  <div class="faq">
      <div class="faq-header" onclick="toggleFaq(13)">
        <h3>Umíte nám v Jamesovi vyvinout funkcionalitu podle našich požadavků?</h3>
        <img id="icon-13" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-13">
        <p>Ano, na Jamesovi neustále pracujeme a na měsíční bázi ho vyvíjíme, aby vždy odrážel aktuální potřeby trhu. Jsme schopni velmi flexibilně naplnit jakékoliv přání. <br> <br> *Požadavky vždy procházejí konzultací, ve které se snažíme co nejlépe pochopit vaše potřeby. Některé vývojové činnosti mohou být zpoplatněny.</p>
      </div>
      </div>
    </div>
					
					
	<div class="faq">
      <div class="faq-header" onclick="toggleFaq(14)">
        <h3>Kolik společností mohu v Jamesovi spravovat?</h3>
        <img id="icon-14" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-14">
        <p>V tarifu James Pro můžete spravovat neomezený počet společností i emisí. Cena tarifu se vždy odráží od celkového spravovaného objemu aktivních emisí.</p>
      </div>
      </div>
    </div>
					
					
	<div class="faq">
      <div class="faq-header" onclick="toggleFaq(15)">
        <h3>Jaká je cena pro emise, které jsou už ukončené?</h3>
        <img id="icon-15" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-15">
        <p>V Jamesovi můžete spravovat i historické emise. Jamese platíte pouze za aktivní emise. Ukončené emise tedy máte plně zdarma a můžete tak jejich evidenci mít v Jamesovi i po jejich ukončení</p>
      </div>
      </div>
    </div>			
	<div class="faq">
      <div class="faq-header" onclick="toggleFaq(16)">
        <h3>Jakým způsobem pozná James, že byla objednávka investice uhrazena?</h3>
        <img id="icon-16" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-16">
        <p>Jamesovi můžete povolit napojení pro nahlížení do bankovního účtu vaší společnosti*, Díky tomu bude James vždy vědět o každé platbě investorů. Objednávky pak může i sám zpracovat, a to téměř okamžitě.*Automatizované načítání plateb funguje pouze pro vybrané banky. Jejich aktuální seznam vám rádi poskytneme při konzultaci. Každý měsíc přidáváme integraci s novými bankami.</p>
      </div>
      </div>
    </div>
					
 <div class="faq">
      <div class="faq-header" onclick="toggleFaq(17)">
        <h3>Mohu Jamese využívat, i když mám svou síť zprostředkovatelů a tipařů?</h3>
        <img id="icon-17" src="/wp-content/themes/astra-child/img/icon-plus.svg">
		        <div class="faq-content" id="content-17">
        <p>Ano, James byl vyvinut pro rozšířenou obchodní síť. Pomůže vám s evidencí všech obchodních partnerů, jejich objednávek a také s evidencí odměn. Navíc dokáže na pravidelné bázi pomáhat s výplatou odměn. Všichni partneři mají díky Jamesovi přehled o všech objednávkách a výplatách svých klientů.</p>
      </div>
      </div>
    </div>
			
							
  </div>
		</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var readMoreLinks = document.querySelectorAll('.read-more');
        
        readMoreLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var moreText = event.target.previousElementSibling.previousElementSibling;
                var lessText = event.target.previousElementSibling;
                
                if (moreText.style.display === 'none') {
                    moreText.style.display = 'inline';
                    lessText.style.display = 'none';
                    event.target.textContent = 'Číst více';
                } else {
                    moreText.style.display = 'none';
                    lessText.style.display = 'inline';
                    event.target.textContent = 'Číst méně';
                }
            });
        });
    });
</script>


		
		
	</div>
	<div class="loadmore text-center fialova" id="loadMore"><p><span class="loadmore-txt">Rozbalit všechny dotazy</span> <span class="toggle-icon"></span></p></div>
</div>
</section>	
<section id="kontakt">		
<div class="section-8">
		<div class="flex-container space-between">
			<div class="flex-1-2 contact-box">
				<p class="fialova">Komplexní software pro emitenty dluhopisů</p>
				<h2>James<span style="font-weight:600;">App Aplikace <br>pro správu dluhopisů</span></h2>
				<h3>6 let na trhu v ČR</h3>
				<p>Společnost CFG Tech se pohybuje na trhu více než 6 let. Díky své odbornosti a bohatým zkušenostem poskytujeme kvalitní servis emitentům a investorům. Máme desítky spokojených emitentů.</p>
				<p>
<b>Provozovatel:</b><br> 					
CFG Tech a.s.<br>
Vinohradská 2396/184 <br>
130 00 Praha 3 - Vinohrady<br>
B 22883/MSPH Městský soud v Praze<br>
IČ 065 04 591 

				</p>
				<p>
					<b>Recepce:</b><br>
<a href="tel:+420 226 296 025">+420 226 296 025</a>
				</p>
			</div>
			<div class="flex-1-2">
				<h2 class="fialova">Kontaktujte nás!</h2>
						<div class="client-box contact-form">
						<img class="client-img" src="/wp-content/uploads/2023/04/dominik-kontakt.png" alt="dominik jamesapp">
						<div class="client-text">Dobrý den, rádi vám na požádání poskytneme přístup do trial verze aplikace a zodpovíme dotazy. <br> S pozdravem, Dominik Lamacz</div>
						</div>
	<?php echo do_shortcode('[contact-form-7 id="108" title="Kontaktní formulář 1"]');?>
				<p style="font-size:12px"><i>Stisknutím tlačítka “Odeslat zprávu” souhlasíte s podmínkami Jamesapp.cz o <a style="font-size:12px" href="/zpracovani-osobnich-udaju">zpracování osobních údajů</a></i></p>
			</div>
	</div>
</div>			
</section>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();