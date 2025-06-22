=== Fardar Tracking by BitLab for WooCommerce ===
Contributors: bitlablk
Donate link: https://bitlab.lk/
Tags: tracking, wooCommerce, shipment, courier, fde, ajax, security
Requires at least: 5.0
Tested up to: 6.8
Stable tag: 2.0.0
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Secure FDE Domestic courier tracking via AJAX shortcode and direct URL. Integrates with WooCommerce Shipment Tracking plugin with enhanced security features.

== Description ==

**Fardar Tracking by BitLab for WooCommerce** provides secure, AJAX-powered shipment tracking using the FDE Domestic courier service. This plugin offers a clean, user-friendly interface for customers to track their shipments directly on your WordPress website with enterprise-level security measures.

= Key Features =

* **AJAX-Powered Tracking**: Fast, responsive tracking without page reloads
* **Enhanced Security**: Rate limiting, input validation, and XSS protection
* **WooCommerce Integration**: Seamless integration with WooCommerce Shipment Tracking
* **Bootstrap UI**: Modern, responsive design using Bootstrap 5.3.3
* **Direct URL Support**: Share tracking links directly with customers
* **Admin Settings**: Easy configuration through WordPress admin panel
* **GPL Licensed**: Open source and follows WordPress.org standards

= Security Features =

* Rate limiting (10 requests per minute per IP)
* Strict input validation and sanitization
* Nonce verification for all AJAX requests
* Secure external API handling with timeout protection
* Content sanitization and XSS protection
* Proper escaping of all outputs

= How It Works =

The plugin fetches live tracking data from the official FDE Domestic tracking service (https://www.fdedomestic.com/track.php) and displays it securely on your website. All requests are validated, rate-limited, and sanitized to prevent security vulnerabilities.

= Requirements =

* WordPress 5.0 or higher
* PHP 7.4 or higher
* WooCommerce 3.0+ (for WooCommerce integration)
* WooCommerce Shipment Tracking plugin (optional, for enhanced integration)

== Installation ==

1. Upload the `fardar-tracking-bitlab` folder to your `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to **Settings > Fardar Tracking** to configure your tracking page
4. Use the shortcode `[bitlab_fardar_tracking]` on any page to display the tracking form

== Frequently Asked Questions ==

= How do I use the tracking form? =

Insert the shortcode `[bitlab_fardar_tracking]` on any page or post. The form will handle tracking requests via AJAX for a smooth user experience.

= How do I create a direct tracking URL? =

Go to *Settings > Fardar Tracking*, select a tracking page, and use the URL format:
`https://yourdomain.com/your-tracking-page?trackingno=IND123456`

= Does it integrate with WooCommerce Shipment Tracking? =

Yes. It automatically registers "Fardar" as a tracking provider which WooCommerce Shipment Tracking will use.

= What security measures are in place? =

The plugin implements multiple security layers:
* Rate limiting to prevent abuse
* Input validation and sanitization
* Nonce verification for all requests
* Secure external API handling
* Content sanitization to prevent XSS attacks

= Where does the tracking data come from? =

It securely fetches data from the official FDE Domestic tracking service: https://www.fdedomestic.com/track.php

= What happens if the tracking service is down? =

The plugin gracefully handles errors and displays appropriate messages to users without breaking your website.

== Screenshots ==

1. Admin settings page with security features documentation
2. AJAX-powered tracking form with Bootstrap styling
3. Example of tracking results display
4. WooCommerce Shipment Tracking integration

== Changelog ==

= 2.0.0 =
* Complete security overhaul with AJAX implementation
* Rate limiting (10 requests per minute per IP)
* Enhanced input validation and sanitization
* Nonce verification for all requests
* Secure external API handling with timeout protection
* Content sanitization and XSS protection
* Improved error handling and user feedback
* Bootstrap 5.3.3 integration
* WordPress 5.0+ compatibility
* PHP 7.4+ requirement for enhanced security

= 1.1.1 =
* WooCommerce Shipment Tracking integration
* Bootstrap styling added to frontend form
* Enhanced admin instructions and security
* Dynamic tracking page URL based on admin selection

= 1.1.0 =
* Added WooCommerce Shipment Tracking integration
* Dynamic tracking page URL based on admin selection
* Improved admin instructions and security
* Bootstrap styling added to frontend form
* Stable release for WordPress.org submission

= 1.0.0 =
* Initial release with shortcode and tracking functionality

== Upgrade Notice ==

= 2.0.0 =
**Security Update Required**: This version includes major security improvements. Please update immediately.

= 1.1.0 =
Recommended update: Adds WooCommerce support and improved UI.

= 1.0.0 =
Initial release. 