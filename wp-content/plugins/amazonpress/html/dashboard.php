<div class='wrap amazonpressadmin'>

	<h2>AmazonPress: Dashboard</h2>
	
	<ul id="tabnav">
		<li><a href="<?php echo $homePath; ?>&amazonPressAdminPage=dashboard" class='highlighted'>Dashboard</a></li>
		<li><a href="<?php echo $homePath; ?>&amazonPressAdminPage=options">Options</a></li>
		<li><a href="<?php echo $homePath; ?>&amazonPressAdminPage=message_log">Message Log</a></li>
		<li><a href="<?php echo $homePath; ?>&amazonPressAdminPage=view_cache">View Cache</a></li>
		<li><a href="http://cj7.co.uk/amazonpress/" class='highlighted-external'>AmazonPress News</a></li>
	</ul>
	
	
	<table class='widefat' style='width: 600px;'>
		<tr>
			<td align="left">
				<p>
				<strong>Welcome to the <a href='http://cj7.co.uk/amazonpress-free-wp-plugin/' target='_blank'>
AmazonPress WordPress plugin</a> version <?php echo $this->options['Version']; ?>.</strong>  This
				plugin is designed to allow you to quickly and easily promote products from Amazon on your WordPress
				blog related to the topics you write about.  It is designed to function as unobtrusively as possible,
				choosing products to be displayed based directly on either your blog categories or post tags.  In other words all you need to do is categorize/tag your posts as you normally would, and AmazonPress will find products
				to promote to your visitors related to those blog post topics.
				</p>
				
				<?php if(!$this->live) { ?>
				<p class='amazonpresswarning'>
				<strong>It looks like you have not yet configured AmazonPress</strong> with all the required options.  Visit the <a href="<?php echo $homePath; ?>&amazonPressAdminPage=options">Options
				page</a> to save your preferred plugin options.  You will need to enter things like your AWS Access Key,
				your associates tag and your display options.
				</p>
				<?php } ?>
	
				<?php if($this->live AND $this->options['AllowTip'] != true) { ?>
				<p class='amazonpresswarning'>
				<strong>Are you finding this plugin useful?</strong>  Why not give a little back and help support the ongoing development
				of this plugin.  A lot of time and effort have gone into it's creation and a nice way to say thank-you
				would be to enable the tip option (see under the search tab of the <a href="<?php echo $homePath; ?>&amazonPressAdminPage=options">options page</a>).<br/>
				<br/>
				Alternatively, you could <a href='http://cj7.co.uk/amazonpress-free-wp-plugin/' target='_blank'>donate a little to my project fund</a>.  Original author work as a full time PHP programmer at a non-profit ministry in Canada called TruthMedia. Welcome to donate to him as well. You can read more about his work and how you might donate and receive a tax receipt on his blog <a target='_blank' href='http://www.warkensoft.com/' target='_blank'>Warkensoft.com</a>.
				</p>
				<?php } ?>
				
				<p>
				In this latest version of AmazonPress there is also a <strong>sidebar widget</strong> option which allows you to easily display
				relevant products on the sidebar(s) of your site.  In order to use this widget you simply need to enable it under
				the Appearance &gt; Widgets tab of the blog's administrative navigation.
				</p>
				
				<p>
				Got questions about how the plugin works or how to make it do specific things?  <a target='_blank' href='http://cj7.co.uk/amazonpress-free-wp-plugin/'>Check out our FAQ there.</a>
				Need help with the initial installation?  <a target='_blank' href='http://cj7.co.uk/amazonpress-free-wp-plugin/'>Read our installation instructions.</a>
				</p>
	
				<p>
				<strong>If you are having any problems with the plugin</strong>, want to report a bug or feature request, or simply want to lavish praise ;)
				I would ask that you post your comments on the AmazonPress blog post most closely matching your installed version, always mention WP version and try describe as detailed your problem. You can
				<a target='_blank' href='http://cj7.co.uk/amazonpress-free-wp-plugin/'>view the AmazonPress blog here</a>. 
				</p>
				
				<p>
				Of course, praise is always nice.  The highest praise you can give for the plugin is to <strong>recommend it to others</strong>.  A link / review from your site to mine would be awesome, or you can <a href='http://digg.com/submit?phase=2&url=http%3A%2F%2Fwordpress.org%2Fextend%2Fplugins%2Famazonpress%2F&title=AmazonPress%20-%20automatic%20related%20Amazon%20products.&bodytext=Automatically%20add%20related%20products%20from%20Amazon.com%20and%20Amazon%20partner%20sites%20%28Amazon%20Japan%2C%20Amazon%20Germany%2C%20Amazon%20France%2C%20Amazon%20UK%2C%20Amazon%20Canada%29.&topic=programming' target='_blank'>Digg It</a> or <a href='http://wordpress.org/extend/plugins/amazonpress/' target='_blank'>rate it on WordPress.com</a>.
				</p>
	
			</td>
		</tr>
	
	</table>
	
</div>