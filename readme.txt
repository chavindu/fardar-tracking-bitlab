=== Fardar Tracking by BitLab for WooCommerce ===
Contributors: bitlablk
Donate link: https://bitlab.lk/
Tags: tracking, wooCommerce, shipment, courier, fde, secure, ajax
Requires at least: 5.0
Tested up to: 6.8
Stable tag: 2.0.0
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Enable FDE Domestic courier tracking via shortcode or direct URL with enhanced security. Integrates with WooCommerce Shipment Tracking plugin.

== Description ==

**Fardar Tracking by BitLab for WooCommerce** is a secure WordPress plugin that enables shipment tracking using the FDE Domestic courier service. Built with security-first approach, it provides a clean, user-friendly interface for customers to track their shipments directly on your website.

**Key Security Features:**
* Input validation and sanitization
* Rate limiting to prevent abuse
* Content sanitization for external responses
* Nonce verification for all requests
* XSS protection
* SQL injection prevention

**Features:**
* Fetches live tracking status from https://www.fdedomestic.com/track.php
* AJAX-powered tracking with real-time updates
* Clean Bootstrap-based frontend UI
* Admin settings to choose a tracking page
* Compatible with WooCommerce Shipment Tracking extension
* Shortcode support with customizable attributes
* Direct URL tracking support
* GPL licensed and follows WordPress.org plugin standards

**Shortcode Usage:**
`[bitlab_fardar_tracking]`

**Custom Attributes:**
`[bitlab_fardar_tracking title="Custom Title" placeholder="Custom Placeholder" button_text="Custom Button"]`

== Frequently Asked Questions ==

= How do I use the tracking form? =

Insert the shortcode `[bitlab_fardar_tracking]` on any page or post. The form will handle tracking requests via AJAX for a smooth user experience.

= How do I create a direct tracking URL? =

Go to *Settings > Fardar Tracking*, select a tracking page, and use the URL format:
`https://yourdomain.com/your-tracking-page?trackingno=IND123456`

= Does it integrate with WooCommerce Shipment Tracking? =

Yes. It registers a provider called "Fardar" which WooCommerce Shipment Tracking will use.

= Where does the tracking data come from? =

It securely fetches HTML output from the official tracking site: https://www.fdedomestic.com/track.php with proper sanitization.

= What security measures are implemented? =

* Input validation and sanitization
* Rate limiting (5 requests per minute per IP)
* Content sanitization for external responses
* Nonce verification for all AJAX requests
* XSS protection through wp_kses
* SQL injection prevention

= Is this plugin safe for production use? =

Yes. Version 2.0.0 has been completely rewritten with security-first approach and follows WordPress coding standards.

== Screenshots ==

1. Admin settings page to configure tracking page and view security features.
2. AJAX-powered tracking form with Bootstrap UI and real-time validation.
3. Example of tracking results with sanitized content display.
4. Rate limiting and security features demonstration.

== Changelog ==

= 2.0.0 =
* Complete security rewrite addressing WordPress Plugin Directory concerns
* AJAX-powered tracking for better user experience
* Enhanced input validation and sanitization
* Rate limiting to prevent abuse (5 requests per minute per IP)
* Content sanitization for external responses
* XSS protection through wp_kses
* Nonce verification for all requests
* Improved error handling and user feedback
* Updated to require WordPress 5.0+ and PHP 7.4+
* Enhanced admin interface with security documentation
* Custom shortcode attributes support
* Better code organization and documentation

= 1.1.1 =
* WooCommerce Shipment Tracking integration
* Bootstrap styling added to frontend form
* Enhanced admin instructions and security
* Stable release for WordPress.org submission

= 1.1.0 =
* Added WooCommerce Shipment Tracking integration
* Dynamic tracking page URL based on admin selection
* Improved admin instructions and security
* Bootstrap styling added to frontend form

= 1.0.0 =
* Initial release with shortcode and tracking functionality

== Upgrade Notice ==

= 2.0.0 =
**Major Security Update**: Complete rewrite with enhanced security features. Requires WordPress 5.0+ and PHP 7.4+. Includes AJAX tracking, rate limiting, and comprehensive input sanitization.

= 1.1.0 =
Recommended update: Adds WooCommerce support and improved UI.

= 1.0.0 =
Initial release.

== Security Features ==

This plugin implements multiple security measures:

1. **Input Validation**: All user inputs are validated and sanitized
2. **Rate Limiting**: Prevents abuse with 5 requests per minute per IP
3. **Content Sanitization**: External responses are thoroughly sanitized
4. **Nonce Verification**: All AJAX requests require valid nonces
5. **XSS Protection**: Uses wp_kses for safe HTML output
6. **SQL Injection Prevention**: Proper data sanitization and validation

== Installation ==

1. Upload the plugin files to `/wp-content/plugins/fardar-tracking-bitlab/`
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to Settings > Fardar Tracking to configure
4. Use the shortcode `[bitlab_fardar_tracking]` on any page

== A brief Markdown Example ==

This plugin supports:

1. WooCommerce integration
2. Direct tracking links
3. Shortcode-based tracking forms
4. AJAX-powered tracking
5. Enhanced security features

Features:

* Live FDE tracking with security
* Easy admin setup
* Fully GPL compatible
* Rate limiting protection
* Input validation

> Built and maintained by **BitLab (Pvt) Ltd** - [bitlab.lk](https://bitlab.lk)

`[bitlab_fardar_tracking]` to embed the form.

== Support ==

For support and questions:
* Website: [bitlab.lk](https://bitlab.lk)
* Documentation: Check the plugin's admin settings page 