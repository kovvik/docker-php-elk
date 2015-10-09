==== Theme Name: OnTheSide ====

    Description: Full width java controlled image background support. Custom front page allows visitors to admire the photo image on your home page while listing your Posts as a Table of Contents without distracting view of you full page image. The default widget, on the left, will show your Menu and a Log In Meta box. Creating a new "Left Sidebar" widget from WP Admin will take precedence over the defaults but Pages-Menu will still be at top of the sidebar. Also supports image upload for logo, up to 200 x 180 pxs., top left. With opacity control for pages/posts.
    Author: Larry Judd - Tradesouthwest
    Author URI: http://tradesouthwest.com
    Theme URI: http://arizonatechgroup.com/ots
    OnTheSide WordPress Theme, Copyright 2014 Tradesouthwest.com
    OnTheSide is distributed under the terms of the GNU GPL
    Version: 1.4
    Tags: fixed-layout, two-columns, left-sidebar, custom-header, custom-background
    License: GNU General Public License v2 or later
    License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Additional License Information ==  
* Backstretch - v2.0.4 - 2013-06-19 http://srobbin.com/jquery-plugins/backstretch/ Copyright (c) 2013 Scott Robbin; 
Licensed MIT 
* HTML5 Shiv v3.7.0 | @afarkas @jdalton @jon_neal @rem | MIT/GPL2 Licensed    
* Image for default background by Larry Judd | Author of same OnTheSide | License: GNU General Public License v2
Taken on digital camera November 2013 from Way Station at Old Rim Road, Apache Sitgreaves National Forest, Payson, AZ; from the Mogollon Rim: 2296.2 meters, 34.301587,-110.896428.
All other images not mention are also GPL.

=== About ===
*Please note that default sidebar menu is only supported to three levels deep. This is a pure CSS3 pull-out menu with no java so be careful with your menu tree levels to not exceed the third level.

Sidebar loaded by default with log in and wp navigation for pages. Full size background is fixed by default and you can add your own image or leave it blank with background color. This theme looks real good without a photo background so try it out, or maybe add a tiled graphic with your company logo. Also support for a logo in the sidebar, top area which is the header image you can change in WP Admin Theme options.

There is a practical limit to the height of the sidebar container, this is marked by a very faint white shadow that is on the left hand side of the theme. Any widgets in the sidebar container that create a sidbar taller than this faint line will not guarantee you theme will behave properly. You may experience overflow into the footer and you can fix this by making the sidebar-container selector a bit higher in the height attribute.

=== Description ===
=Custom front page allows visitors to admire the photo image on your home page.=
To customize this page try these options:
*You can simply add a Widget to the "Center Widget" to create text.
*Or a Custom Menu to navigate with.
    ***A great solution is to put the widget: "Recent Posts." into Center Sidebar. 
    This gives you your pages on the left sidebar with plenty of open space to
    show image background while listing your Posts as a Table of Contents.
=How To display alternate page views: =
*From Customize theme WP Admin menu, creating a "Front page displays... static page" as your Home Page will display a "Center Sidebar" on your Home Page. (Or this page if you have no widget in Center Sidebar.)
*From Customize theme WP Admin menu, creating "Front page displays... your latest posts" will show your Pages Home Page if your menu is set to show a Home Page.
*The default widget, on the left, will show your Pages and a Log In Meta box.
*Creating a new "Left Sidebar" widget from WP Admin will take precedence over the out-of-the-box defaults but, still leave the Pages widget, underneath the logo, to display your blog pages.
    ***This Left Sidebar menu is called from wp-nav-menu and IS the main menu.
*Same with this custom front page widget; it has this default text which disappears when you add any new widget to the "Center Sidebar."
*To restore the default sidebar widgets, just remove any new widget from its sidebar (Left Sidebar, Center Sidebar) OR change the customize static page / posts. See images below.
    ***Note: Experiment with the Menu in WP Admin to get the correct page as your Home Page. The menu setup is the key to displaying a page when the Front-Page template is used with the Center Sidebar. Also, you can alter the front-page template from your WP Admin editor, file name: center-sidebar. Although this is not recommended; this is only an Instruction page and should be alter cautiously if you choose to do so.
   

== Change Log ==
= 1.6.2 =
* fixed logo positioning
* fixed some sidebar style issues

= 1.6.0 =
* March 20th 2015
* updated code for WP 4.1 - title tag - sidebars init register
* fixed front page widget to display correctly
* added some styles to widgets
* remove front page template

= 1.5.6 =
* loaded text domain init to functions
* added language file and folder
* added text-domain to stylesheet reference
= 1.5.5 =
* fixed widget overflow of lists
* fixed valid date formatting 
* added valid url cleaner protocol
* added pingback and trackback to header
* fixed additional translation text
= 1.5.4 =
* fixed custom editor style hook
* fixed footer overlapping content
* removed non working comment author link
* inserted link for posts without title
* added sidebar default attributes
* reconfigured content-left template part
= 1.5.3 =
* content width updated
= 1.5.2 =
* created better theme information website.
* restructured hierarchy of original page content to specify home page.
* fnx content-width put outside setup callback.
* corrected caption for add_theme_page.
* fixed some styles and selector attributes for conditional page calls.

= 1.5.1 =
* fixed bug with background image not overriding default wp settings

= 1.5 =
* compressed images
* called wp_nav in theme name space fixed

= 1.4 =
* removed version compatibility functions
* moved enable_threaded_comments to setup
* rebuilt custom title statements
* moved custom background default to setup
* changed footer to comply with WP standards
* created Theme-specific hook for admin-enqueued scripts
* hook for enqueue scripts moved to add all scripts at once
= 1 =
* original version
= 1.1 =
* added options function for posts opacity Theme Options
* adjusted styles for wide images and some default elements
= 1.2 =
* moved instructions into Theme Options.
* fixed menu list style to expand without showing hidden lists
* updated public facing variables with name slug
= 1.3 =
* SEO friendly wp_title added
* form validation for sanitizing theme options

TSW =|= lj May 2014