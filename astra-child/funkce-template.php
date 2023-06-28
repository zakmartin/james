<?php
/*
Template Name: Funkce Template
*/

//link edit
function prefix_add_custom_anchor_links() {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var navItems = document.querySelectorAll("#primary-site-navigation-desktop a[href^='#']"); 
            var homeUrl = "<?php echo home_url('/'); ?>";

            navItems.forEach(function(navItem) {
                var anchor = navItem.getAttribute("href");
                navItem.setAttribute("href", homeUrl + anchor);
            });
        });
    </script>
    <?php
}
add_action("wp_footer", "prefix_add_custom_anchor_links");

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
        ?>
<div class="hide-tablet-mobile flex-container mobile-functions">
		<div class="flex-1-1">
			<h3><span class="fialova">01 </span>Zajistí kompletní automatizaci všech procesů</h3>
			<ul>
<p class="tab-text"><li>Se správou dluhopisů se pojí celá řada procesů, které James udělá za vás a plně automaticky.</li>
<li>Díky chytrému dashboardu budete vždy upozorněni na případné problémy, které ze strany investorů nastaly.</li>
<li>Ze systému můžete spravovat hned několik emisí pod různými firmami – funkce neomezeného počtu emitentů a dluhopisů.</li>
<li>Přístup do Jamese máte k dispozici 24/7 a 100 % online. Současně získáte kvalitní podporu a help centrum, které je vám denně k dispozici.</li></p></ul>
			<img src="/wp-content/uploads/2023/05/automatizace.png">
		</div>
			<div class="flex-1-1">
			<h3><span class="fialova">02 </span>Všechny údaje vždy při sobě a na jednom místě</h3>
			<ul>
<p class="tab-text"><li>Aplikace James zaeviduje všechny potřebné údaje o investorech a soubory, které se s koupí dluhopisů pojí.</li>
<li>K dispozici budete mít kompletní historii ke každému investorovi a emisi. Všechny informace a dokumenty rychle dohledáte.</li>
<li>Získáte kompletní přehled o výkonnosti prodeje díky předdefinovaným statistikám.</li>
<li>Pokud už máte vydanou emisi, můžete si do Jamese naimportovat všechnu historii a kompletní údaje k vašim současným investorům.</li></p></ul>
			<img src="/wp-content/uploads/2023/05/vsechny_udaje.png">
		</div>
			<div class="flex-1-1">
			<h3><span class="fialova">03 </span>Nejmodernější zabezpečení</h3>
			<ul>
<p class="tab-text"><li>K evidenci používáme nejnovější technologie a metody, které zajistí bezpečnost všech dat. Naše datacentrum splňuje nejvyšší standard bezpečnosti.</li>
<li>Pravidelně kontrolujeme, aktualizujeme a Jamese nadále vyvíjíme podle potřeby našich klientů.</li>
<li>Průběžně zvyšujeme bezpečnost systému tak, aby vaše data byla 100 % chráněna proti externím skriptům, načítání neověřených zdrojů či proti cílenému zahlcení.</li></p></ul>
			<img src="/wp-content/uploads/2023/05/bezpecnost.png">
		</div>
			<div class="flex-1-1">
			<h3><span class="fialova">04 </span>Automatizovaná komunikace s investory a dodavateli</h3>
			<ul>
<p class="tab-text"><li>Vaši investoři budou automaticky provedeni celým procesem objednávky. James kontroluje chybějící dokumenty a v případě obtíží odesílá upomínky.</li>
<li>V rámci celé komunikace využívá personalizované oslovení investorů (v 5. pádě). Automaticky udělá validaci adres, emailů, bankovního účtu, data narození, rodného čísla atd.</li>
<li>Díky pokročilým technologiím dokáže James sledovat zásilky odeslaných dluhopisů a investorům přímo do emailu zasílá sledovací kód zásilky.</li></p></ul>
			<img src="/wp-content/uploads/2023/05/automatizovana_komunikace.png">
		</div>
			<div class="flex-1-1">
			<h3><span class="fialova">05 </span>Možnost brandingu a přizpůsobení Jamese</h3>
			<ul>
<p class="tab-text"><li>Do komunikace s investory si můžete vložit vlastní logo, texty a grafiku. K dispozici máte jednoduchý editor.</li>
<li>Současně máte možnost do komunikace zařadit vlastní dokumenty s automatickým generováním obsahu.</li>
<li>A mysleli jsme nejen na investory, ale i na dodavatele – vaše tipaře a zprostředkovatele. Máte tak pod kontrolou i výplatu jejich odměn.</li></p></ul>
			<img src="/wp-content/uploads/2023/05/moznost_brandingu_jamese.png">
		</div>
			<div class="flex-1-1">
			<h3><span class="fialova">06 </span>James vyřeší i výjimečné situace</h3>
			<ul>
<p class="tab-text"><li>Výjimečné situace se v životě stávají a James je na ně připraven. Jednoduše vyřeší pozůstalosti nebo převody prostředků mezi investory.</li>
<li>V případě, že v emisních podmínkách máte možnost předčasného splacení a investor jej využije, James všechno zpracuje a uloží do historie k investorovi.</li>
<li>Jsme připraveni na zapracování do vývoje dalších situací, které si trh žádá.</li></p></ul>
			<img src="/wp-content/uploads/2023/05/situace.png">
		</div>
	</div>		
		
		
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