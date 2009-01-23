=== Flutter ===
Contributors: alphaoide, coffee2code, freshout
Tags: custom write panel, custom, write panel
Requires at least: 2.42
Tested up to: 2.7
Stable tag: .11

Flutter is for creating customized write panels with file and photo
uploads.  Includes automatic photo resizing via phpThumb and freshout.


== Description ==

WordPress gets pretty close to becoming a practical content management solution with this plugin.
Create multiple custom write panels, add custom fields (images, drop downs, file upload, images, checkboxes, textareas, etc..), photos can be automatically resized, cropped, watermarked, drop shadowed, and modified in many other ways (this plugin comes with php_thumb).
In addition to being able to upload files from your computers, you can also retrieve Images from 3rd party sites on the fly.
The core of this plugin was written by  Scott Reiley (http://www.coffee2code.com/wp-plugins/), Joshua Siguar (http://rhymedcode.net/projects/custom-write-panel), and Eric Pujol (http://phpthumb.sourceforge.net/).  All we did is add a bit of freshness.


== Installation ==

Follow the following steps to install this plugin.

1. Download plugin to the `/wp-content/plugins/` folder.
2. Activate the plugin through the 'Plugins' menu in WordPress.


== Frequently Asked Questions ==

= How do I create a new custom write panel? =

1. Go to 'Flutter' > 'Modules' click on 'Create Custom Write module' and follow the on-screen instruction.
2. Go to 'Flutter' > 'Write Panels' click on 'Create Custom Write panel' and add the module to the panel.
3. Go to 'Write' menu and you should see your new custom write panel beside 'page' sub-menu.


= How do I add a custom input field? =

After creating a custom module, click on 'View' to view the module info, click 'Create Custom Field'
and follow on-screen instruction.


= How do I get custom field to show up in my post? =

There three different functions (get, get_image, get_audio) that you can use to retrieve the values for the fields you’ve created.

You can always use the “get” function to grab the “naked” variable but we’ve also built the “get_image” and “get_audio” functions that will spit out the variable with html tags.

Grabbing the Values
get(’variable’) = naked variable
get_image(’variable’) = variable with image tag
get_audio(’variable’) = variable with single mp3 swf player

An Example
Let’s say you want to have an events page for your site so you created a new write panel and added a custom Image field called “Flyer”, a Date field called “Date” and an audio field called "MP3". So now how do we display it on the post page?

To display the Flyer image: <?php echo get_image('Photos'); ?>" />
To display the Date field: <?php echo get('Date'); ?>
To display the MP3 Player (with the song): <?php echo get_audio('MP3'); ?> 


= Is this Fresh Page? =

Yes, this is the same plugin as Fresh Page.


== Credits ==

* ["Joshua Sigar"](http://rhymedcode.net) The creator of Custom Write Panel
* ["James Heinrich"](info@silisoftware.com) The creator of phpThumb
* ["Scott Reilly"](http://www.coffee2code.com) The creator of get-custom plugin
