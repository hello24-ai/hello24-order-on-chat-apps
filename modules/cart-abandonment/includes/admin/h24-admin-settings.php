<?php
/**
 * Cartflows view for cart abandonment tabs.
 *
 * @package Hello24-Order-On-Chat-Apps
 */

?>
<div class="wrap">
	<style>
		.h24-input{
			margin-bottom:10px;
			width: 350px;
		}
		.overlay {
			display: none;
			height: 100vh;
			width: 100%;
			position: fixed;
			z-index: 1000000;
			top: 0;
			left: 0;
			background-color: rgb(0,0,0);
			background-color: rgba(0,0,0, 0.9);
			overflow: hidden;
			transition: 0.5s;
		}
		.overlay-content {
			position: relative;
			top: 40%;
			width: 100%;
			text-align: center;
			display: flex;
			justify-content: center;
		}
		.loader {
			border: 10px solid #ffffff;
			border-radius: 50%;
			border-top: 10px solid #26664e;
			width: 30px;
			height: 30px;
			-webkit-animation: spin 2s linear infinite; /* Safari */
			animation: spin 2s linear infinite;
		}
	</style>
	<div class="loading-content overlay" id="h24_loding">
		<div class="overlay-content">
			<div class="loader"></div>
		</div>
	</div>
	<h1 id="h24_cart_abandonment_tracking_table"><?php echo esc_html__( 'Hello24 - Order on Chat, Abandoned cart recovery & Marketing using Whatsapp ', 'hello24-order-on-chat-apps' ); ?></h1>
	<h2>Hello24.ai is a conversational commerce platform that can help your brand to engage customers on WhatsApp.</h2>
	<h2>Gain higher ROI and 5X sales by using our plugin features.</h2>
	<p>&ensp; 1. Abandoned cart recovery with 'Pay on WhatsApp' feature</p>
	<p>&ensp; 2. Share products and take orders on WhatsApp (complete purchase flow on WhatsApp)</p>
	<p>&ensp; 3. 100% Free Chatbot Builder</p>
	<p>&ensp; 4. Up-sell, Cross-Sell & Re-sell automation</p>
	<p>&ensp; 5. Order, Shipment notifications to keep your customers well informed about their orders</p>

	<hr>
	<h2>Integration Settings</h2>
	<form id="wp_h24_setting_form">
		<div>API Key <span id="api_key_invalid" style="color: red; display:none;">(Invalid API Key)</span></div>
		<input type="text" class="h24-input" disabled id="setting_api_key" value="<?php echo $api_key; ?>"/>
		<div>Shop Domain Url</div>
		<input type="text" class="h24-input" disabled id="setting_shop_name" value="<?php echo $shop_name; ?>" required/>
		<div>Email</div>
		<input type="email" class="h24-input" id="setting_email" value="<?php echo $email; ?>" required/>
		<div>Whatsapp Number (With Country Code. Eg +91 )</div>
		<input type="tel" class="h24-input" id="setting_whatsapp_number" value="<?php echo $whatsapp_number; ?>" required/>

		<input type="text" class="h24-input" style="display:none;" disabled id="setting_h24_domain" value="<?php echo $h24_domain; ?>" />
		
		<p>Environment:</p>
		<input type="radio" id="environment_dev" name="setting_environment" value="dev" <?php echo $environment == 'dev' ? 'checked' : ''; ?> >
		<label for="environment_dev">Development</label><br>
		<input type="radio" id="environment_prod" name="setting_environment" value="prod" <?php echo $environment == 'prod' ? 'checked' : ''; ?> >
		<label for="environment_prod">Production</label><br>
		
		<br/>
		<div id="h24_enable_integration_note" style="color: red; display:none;">Note: Please fill the above form and click save settings to enable integration with Hello24.</div>
		<br/>
		<div>
			<input type="submit" id="h24_save_settings" class="button-primary" value="Save Settings" />
			<input type="submit" id="h24_goto_settings" class="button-primary" value="Go to Hello24 Settings" onclick="window.open('<?php echo $h24_setting_url; ?>', '_blank')"/>
		</div>	
	</form>
	<br/>
	<hr>

	<h2>Whatsapp Button Settings</h2>
	<form id="wp_h24_whatsapp_button_form">
		<label for="whatsapp_button_enabled"> Enable Whatsapp Button ?</label>
		<input type="checkbox" id="whatsapp_button_enabled" name="whatsapp_button_enabled" <?php echo $whatsapp_button_enabled == true ? 'checked' : ''; ?> />
		<br/>
		<br/>
		<div>Title</div>
		<input type="text" class="h24-input" id="whatsapp_button_title" value="<?php echo $whatsapp_button_title; ?>"/>
		<div>Sub Title</div>
		<input type="text" class="h24-input" id="whatsapp_button_sub_title" value="<?php echo $whatsapp_button_sub_title; ?>"/>
		<div>Greeting Text 1</div>
		<input type="text" class="h24-input" id="whatsapp_button_greeting_text1" value="<?php echo $whatsapp_button_greeting_text1; ?>"/>
		<div>Greeting Text 2</div>
		<input type="text" class="h24-input" id="whatsapp_button_greeting_text2" value="<?php echo $whatsapp_button_greeting_text2; ?>"/>
		<div>Agent Name</div>
		<input type="text" class="h24-input" id="whatsapp_button_agent_name" value="<?php echo $whatsapp_button_agent_name; ?>"/>
		<div>Message</div>
		<input type="text" class="h24-input" id="whatsapp_button_message" value="<?php echo $whatsapp_button_message; ?>"/>
		<br/>

		<div>
			<input type="submit" id="h24_save_whatsapp_button" class="button-primary" value="Save Button" />
		</div>	
	</form>
</div>