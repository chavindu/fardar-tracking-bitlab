# Fardar Tracking by BitLab for WooCommerce

A secure, AJAX-powered WordPress plugin that enables FDE Domestic courier tracking via shortcode and direct URL. Integrates seamlessly with WooCommerce Shipment Tracking plugin with enterprise-level security measures.

## 📋 Description

**Fardar Tracking by BitLab for WooCommerce** provides secure, AJAX-powered shipment tracking using the FDE Domestic courier service. This plugin offers a clean, user-friendly interface for customers to track their shipments directly on your WordPress website with enterprise-level security measures.

## ✨ Features

- **AJAX-Powered Tracking**: Fast, responsive tracking without page reloads
- **Enhanced Security**: Rate limiting, input validation, and XSS protection
- **WooCommerce Integration**: Seamless integration with WooCommerce Shipment Tracking
- **Bootstrap UI**: Modern, responsive design using Bootstrap 5.3.3
- **Direct URL Support**: Share tracking links directly with customers
- **Admin Settings**: Easy configuration through WordPress admin panel
- **GPL Licensed**: Open source and follows WordPress.org standards

## 🔒 Security Features

- **Rate Limiting**: Maximum 10 requests per minute per IP address
- **Input Validation**: Strict alphanumeric validation for tracking numbers
- **Nonce Verification**: All AJAX requests are protected with WordPress nonces
- **Secure API Handling**: Timeout protection and SSL verification for external requests
- **Content Sanitization**: XSS protection through strict HTML filtering
- **Proper Escaping**: All outputs are properly escaped to prevent injection attacks
- **Event Handler Removal**: Automatic removal of potentially dangerous JavaScript event handlers

## 🚀 Installation

### Method 1: Manual Installation
1. Download the plugin files
2. Upload the `fardar-tracking-bitlab` folder to your `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress

### Method 2: WordPress.org (Future)
1. Go to Plugins > Add New in your WordPress admin
2. Search for "Fardar Tracking by BitLab"
3. Click "Install Now" and then "Activate"

## ⚙️ Configuration

1. Go to **Settings > Fardar Tracking** in your WordPress admin
2. Select a page where you want to display the tracking form
3. Save your settings

## 📖 Usage

### Shortcode Method
Add the shortcode to any page or post:
```
[bitlab_fardar_tracking]
```

### Direct URL Method
Create direct tracking links using the format:
```
https://yourdomain.com/your-tracking-page?trackingno=IND123456
```

### WooCommerce Integration
The plugin automatically registers "Fardar" as a tracking provider in WooCommerce Shipment Tracking plugin.

## 🎨 Customization

The plugin uses Bootstrap 5.3.3 for styling. You can customize the appearance by:

1. Adding custom CSS to your theme
2. Overriding Bootstrap classes
3. Modifying the plugin's CSS file at `assets/css/bootstrap.min.css`

## 🔧 Requirements

- **WordPress**: 5.0 or higher
- **PHP**: 7.4 or higher
- **WooCommerce**: 3.0+ (for WooCommerce integration)
- **WooCommerce Shipment Tracking**: (optional, for enhanced integration)

## 📱 Screenshots

1. **Admin Settings Page**: Configure tracking page and view security features documentation
2. **AJAX Tracking Form**: Clean Bootstrap-based UI for tracking input
3. **Direct Tracking Page**: Example of tracking results display
4. **WooCommerce Integration**: Seamless integration with WooCommerce Shipment Tracking

## 🔒 Security Implementation

The plugin implements multiple security layers:

### Rate Limiting
- Uses WordPress transients to track requests per IP
- Limits to 10 requests per minute per IP address
- Automatically cleans up expired rate limit data

### Input Validation
- Strict regex validation for tracking numbers (`/^[A-Za-z0-9]{3,20}$/`)
- Server-side and client-side validation
- Proper sanitization using `sanitize_text_field()`

### AJAX Security
- Nonce verification for all AJAX requests
- Proper error handling and user feedback
- Timeout protection (30 seconds) for external API calls

### Content Sanitization
- Whitelist approach for allowed HTML tags
- Automatic removal of `<script>`, `<style>`, and `<iframe>` tags
- Removal of JavaScript event handlers
- Use of `wp_kses()` for content filtering

### External API Security
- SSL verification enabled
- Proper user agent identification
- Timeout protection
- Error handling for failed requests

## 🤝 Support

For support and questions:
- **Website**: [bitlab.lk](https://bitlab.lk)
- **Email**: Contact through the website
- **Documentation**: Check the plugin's admin settings page for usage instructions

## 📝 Changelog

### Version 2.0.0
- **Complete security overhaul** with AJAX implementation
- **Rate limiting** (10 requests per minute per IP)
- **Enhanced input validation** and sanitization
- **Nonce verification** for all requests
- **Secure external API handling** with timeout protection
- **Content sanitization** and XSS protection
- **Improved error handling** and user feedback
- **Bootstrap 5.3.3** integration
- **WordPress 5.0+** compatibility
- **PHP 7.4+** requirement for enhanced security
- **Internationalization** support with text domain loading
- **Proper plugin hooks** (activation, deactivation, uninstall)
- **Conditional script loading** for better performance

### Version 1.1.1
- WooCommerce Shipment Tracking integration
- Bootstrap styling added to frontend form
- Enhanced admin instructions and security
- Dynamic tracking page URL based on admin selection

### Version 1.1.0
- Added WooCommerce Shipment Tracking integration
- Dynamic tracking page URL based on admin selection
- Improved admin instructions and security
- Bootstrap styling added to frontend form
- Stable release for WordPress.org submission

### Version 1.0.0
- Initial release with shortcode and tracking functionality

## 📄 License

This plugin is licensed under the GPL v2 or later.

```
Copyright (C) 2024 BitLab (Pvt) Ltd

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
```

## 👨‍💻 Development

### File Structure
```
fardar-tracking-bitlab/
├── assets/
│   ├── css/
│   │   └── bootstrap.min.css
│   └── js/
│       └── tracking.js
├── languages/
├── fardar-tracking-bitlab.php
├── readme.txt
├── README.md
└── .gitignore
```

### Contributing
1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

### WordPress.org Compliance
This plugin follows WordPress.org plugin guidelines:
- ✅ Proper plugin headers
- ✅ Security best practices
- ✅ Input validation and sanitization
- ✅ Proper escaping of outputs
- ✅ Nonce verification
- ✅ Rate limiting
- ✅ GPL compatible license
- ✅ Proper file structure
- ✅ Internationalization support
- ✅ Activation/deactivation hooks

## 🙏 Credits

- **Developed by**: [BitLab (Pvt) Ltd](https://bitlab.lk)
- **Bootstrap**: [Bootstrap 5.3.3](https://getbootstrap.com/)
- **FDE Domestic**: [fdedomestic.com](https://www.fdedomestic.com)

---

**Built with ❤️ by BitLab (Pvt) Ltd**

For more information, visit [bitlab.lk](https://bitlab.lk) 