# Fardar Tracking by BitLab for WooCommerce

A secure WordPress plugin that enables FDE Domestic courier tracking via shortcode and direct URL. Integrates seamlessly with WooCommerce Shipment Tracking plugin with enhanced security measures.

## 📋 Description

**Fardar Tracking by BitLab for WooCommerce** is a security-first WordPress plugin that enables shipment tracking using the FDE Domestic courier service. Built with comprehensive security measures, it provides a clean, user-friendly interface for customers to track their shipments directly on your website.

## 🔒 Security Features

- **Input Validation**: All user inputs are validated and sanitized
- **Rate Limiting**: Prevents abuse with 5 requests per minute per IP
- **Content Sanitization**: External responses are thoroughly sanitized
- **Nonce Verification**: All AJAX requests require valid nonces
- **XSS Protection**: Uses wp_kses for safe HTML output
- **SQL Injection Prevention**: Proper data sanitization and validation

## ✨ Features

- **Live Tracking**: Fetches real-time tracking status from [FDE Domestic](https://www.fdedomestic.com/track.php)
- **AJAX-Powered**: Real-time tracking with smooth user experience
- **Shortcode Support**: Easy integration with `[bitlab_fardar_tracking]` shortcode
- **Custom Attributes**: Customize form with title, placeholder, and button text
- **Direct URL Tracking**: Support for direct tracking URLs
- **WooCommerce Integration**: Compatible with WooCommerce Shipment Tracking plugin
- **Bootstrap UI**: Clean, responsive design using Bootstrap 5.3.3
- **Admin Settings**: Easy configuration through WordPress admin panel
- **GPL Licensed**: Open source and follows WordPress.org standards

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

### Custom Attributes
Customize the form with attributes:
```
[bitlab_fardar_tracking title="Custom Title" placeholder="Custom Placeholder" button_text="Custom Button"]
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

1. **Admin Settings Page**: Configure tracking page and view security features
2. **AJAX Tracking Form**: Real-time tracking with Bootstrap UI and validation
3. **Tracking Results**: Sanitized content display with security measures
4. **Rate Limiting**: Protection against abuse

## 🔒 Security Implementation

The plugin implements several security measures:

### Input Validation
- All user inputs are validated using regex patterns
- Tracking numbers must be alphanumeric (max 50 characters)
- Form inputs are sanitized using WordPress functions

### Rate Limiting
- Maximum 5 tracking requests per minute per IP address
- Uses WordPress transients for efficient storage
- Prevents abuse and server overload

### Content Sanitization
- External HTML responses are thoroughly sanitized
- Removes potentially dangerous scripts and iframes
- Uses wp_kses with allowed HTML tags only
- Strips JavaScript event handlers

### AJAX Security
- Nonce verification for all AJAX requests
- Proper error handling and user feedback
- Timeout protection (30 seconds)

## 🤝 Support

For support and questions:
- **Website**: [bitlab.lk](https://bitlab.lk)
- **Email**: Contact through the website
- **Documentation**: Check the plugin's admin settings page for usage instructions

## 📝 Changelog

### Version 2.0.0
- **Complete security rewrite** addressing WordPress Plugin Directory concerns
- **AJAX-powered tracking** for better user experience
- **Enhanced input validation** and sanitization
- **Rate limiting** to prevent abuse (5 requests per minute per IP)
- **Content sanitization** for external responses
- **XSS protection** through wp_kses
- **Nonce verification** for all requests
- **Improved error handling** and user feedback
- **Updated requirements**: WordPress 5.0+ and PHP 7.4+
- **Enhanced admin interface** with security documentation
- **Custom shortcode attributes** support
- **Better code organization** and documentation

### Version 1.1.1
- WooCommerce Shipment Tracking integration
- Bootstrap styling added to frontend form
- Enhanced admin instructions and security
- Stable release for WordPress.org submission

### Version 1.1.0
- Added WooCommerce Shipment Tracking integration
- Dynamic tracking page URL based on admin selection
- Improved admin instructions and security
- Bootstrap styling added to frontend form

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
├── fardar-tracking-bitlab.php
├── readme.txt
└── README.md
```

### Contributing
1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 🙏 Credits

- **Developed by**: [BitLab (Pvt) Ltd](https://bitlab.lk)
- **Bootstrap**: [Bootstrap 5.3.3](https://getbootstrap.com/)
- **FDE Domestic**: [fdedomestic.com](https://www.fdedomestic.com)

---

**Built with ❤️ by BitLab (Pvt) Ltd**

For more information, visit [bitlab.lk](https://bitlab.lk) 