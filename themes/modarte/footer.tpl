{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

		{if !$content_only}
				</div>

<!-- End of columns -->
			</div>

<!-- Footer -->
			<div id="footer" class="grid_9 alpha omega clearfix">

				<div class="grid_2">
					<h4>CATEGORIES</h4>
					<ul>
						<li><a class="md-border-radius" href="{$base_dir}{$lang_iso}/">Home</a></li>
						<li><a class="md-border-radius" href="{$base_dir}{$lang_iso}/6-girls">Girls</a></li>
						<li><a class="md-border-radius" href="{$base_dir}{$lang_iso}/8-dolls">Dolls</a></li>
						<li><a class="md-border-radius" href="{$base_dir}{$lang_iso}/10-exclusive">Exclusive</a></li>
						<li><a class="md-border-radius" href="{$base_dir}{$lang_iso}/content/6-custom-made">Custom made</a></li>
						<li><a class="md-border-radius" href="{$base_dir}{$lang_iso}/prices-drop">Sale</a></li>
					</ul>
				</div>

				<div class="grid_2">
					<h4>INFORMATION</h4>
					<ul>
						<li><a class="md-border-radius" href="{$base_dir}{$lang_iso}/contact-us">Contact Us</a></li>
						<li><a class="md-border-radius" href="{$base_dir}{$lang_iso}/content/3-terms-and-conditions-of-use">Terms &amp; Conditions</a></li>
						<li><a class="md-border-radius" href="{$base_dir}{$lang_iso}/content/1-delivery">Delivery &amp; Returns</a></li>
						<li><a class="md-border-radius" href="{$base_dir}{$lang_iso}/content/2-legal-notice">Privacy Policy</a></li>
						<li><a class="md-border-radius" href="{$base_dir}{$lang_iso}/content/4-about-us">About Us</a></li>
						<li>Powered by Backbone Labs</li>
					</ul>
				</div>
				
				<div class="grid_2 md-less-width">
					<h4>MY ACCOUNT</h4>
					<ul class="bullet">
						<li><a href="{$base_dir}{$lang_iso}/order-history">My orders</a></li>
						<li><a href="{$base_dir}{$lang_iso}/order-slip">My credit slips</a></li>
						<li><a href="{$base_dir}{$lang_iso}/addresses">My addresses</a></li>
						<li><a href="{$base_dir}{$lang_iso}/identity">My personal info</a></li>
						<li><a href="{$base_dir}{$lang_iso}/discount">My vouchers</a></li>
					</ul>
				</div>

				<div class="grid_1">
					<h4>FOLLOW US</h4>
					<ul>
						<li><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
						<li><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
						<li><a href="#"><i class="icon-instagram"></i>Instagram</a></li>
						<li><a href="#"><i class="icon-rss"></i>RSS</a></li>
					</ul>
				</div>

				<div class="grid_2 md-last-grid">
					<h4>CONTACT US</h4>
					<ul>
						<li>
							<p>
								<strong>Modarte</strong><br/>
								29th floor, One Canada Square<br/>
								Canary Wharf<br/>
								London, UK<br/>
								E14 5DY
							</p>
						</li>
						<li>
							T: +44 (0)208 000 0000<br>
							E: <a href="mailto:modarte@hotmail.co.uk">modarte@hotmail.co.uk</a>
						</li>
					</ul>
				</div>

				{$HOOK_FOOTER}
				{if $PS_ALLOW_MOBILE_DEVICE}
					<p class="center clearBoth"><a href="{$link->getPageLink('index', true)}?mobile_theme_ok">{l s='Browse the mobile site'}</a></p>
				{/if}
			</div>
		</div>
	{/if}
	</body>
</html>
