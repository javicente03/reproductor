{include file='_head_radio.tpl'}

<div class="center">
    {include file='_menu.tpl'}

	<div class="right">
		<div class="contact">
			<h2>Contact us</h2>

			<form class="js_ajax-forms form-panel" data-url="data/contact.php?do=create">
				<input type="email" name="email" placeholder="Enter your email" />
				<input type="text" name="subject" placeholder="Subject" />
				<textarea placeholder="Enter your message" name="message"></textarea>
				<button type="submit">Send</button>
				<div class="error-panel">Error</div>
				<div class="success-panel">Success</div>
			</form>
		</div>
	</div>	
</div>

{include file='modal_login.tpl'}
{include file='modal_signup.tpl'}

{include file='_footer.tpl'}