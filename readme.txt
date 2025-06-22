=== Fardar Tracking by BitLab for WooCommerce ===
Contributors: bitlablk
Donate link: https://bitlab.lk/
Tags: tracking, wooCommerce, shipment, courier, fde
Requires at least: 4.7
Tested up to: 6.8
Stable tag: 1.1.1
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Enable FDE Domestic courier tracking via shortcode or direct URL. Integrates with WooCommerce Shipment Tracking plugin.

== Description ==

**Fardar Tracking by BitLab for WooCommerce ** allows WordPress and WooCommerce site owners to enable shipment tracking using the FDE Domestic courier service.

You can display a tracking form using a simple shortcode on any page, and optionally support direct tracking URLs like `https://yourdomain.com/tracking-page?trackingno=123456`.

The plugin also integrates with the popular *WooCommerce Shipment Tracking* plugin, adding "Fardar" as a custom tracking provider with dynamic tracking URLs generated from a page you choose in the settings.

Features:
* Fetches live tracking status from https://www.fdedomestic.com/track.php
* Clean Bootstrap-based frontend UI
* Admin settings to choose a tracking page
* Compatible with WooCommerce Shipment Tracking extension
* GPL licensed and built to follow WordPress.org plugin standards

== Frequently Asked Questions ==

= How do I use the tracking form? =

Insert the shortcode `[bitlab_fardar_tracking]` on any page or post.

= How do I create a direct tracking URL? =

Go to *Settings > Fardar Tracking*, select a tracking page, and use the URL format:
`https://yourdomain.com/your-tracking-page?trackingno=IND123456`

= Does it integrate with WooCommerce Shipment Tracking? =

Yes. It registers a provider called "Fardar" which WooCommerce Shipment Tracking will use.

= Where does the tracking data come from? =

It directly fetches HTML output from the official tracking site: https://www.fdedomestic.com/track.php

== Screenshots ==

1. Admin settings page to configure tracking page.
2. Tracking form displayed using shortcode with Bootstrap UI.
3. Example of a direct tracking page using URL with tracking number.

== Changelog ==

= 1.1.0 =
* Added WooCommerce Shipment Tracking integration
* Dynamic tracking page URL based on admin selection
* Improved admin instructions and security
* Bootstrap styling added to frontend form
* Stable release for WordPress.org submission

= 1.0.0 =
* Initial release with shortcode and tracking functionality

== Upgrade Notice ==

= 1.1.0 =
Recommended update: Adds WooCommerce support and improved UI.

= 1.0.0 =
Initial release.

== A brief Markdown Example ==

This plugin supports:

1. WooCommerce integration
2. Direct tracking links
3. Shortcode-based tracking forms

Features:

* Live FDE tracking
* Easy admin setup
* Fully GPL compatible

> Built and maintained by **BitLab (Pvt) Ltd** - [bitlab.lk](https://bitlab.lk)

`[bitlab_fardar_tracking]` to embed the form.
