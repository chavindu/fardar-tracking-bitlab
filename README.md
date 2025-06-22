# Fardar Tracking by BitLab for WooCommerce

A WordPress plugin that enables FDE Domestic courier tracking via shortcode and direct URL. Integrates seamlessly with WooCommerce Shipment Tracking plugin.

## 📋 Description

**Fardar Tracking by BitLab for WooCommerce** allows WordPress and WooCommerce site owners to enable shipment tracking using the FDE Domestic courier service. The plugin provides a clean, user-friendly interface for customers to track their shipments directly on your website.

## ✨ Features

- **Live Tracking**: Fetches real-time tracking status from [FDE Domestic](https://www.fdedomestic.com/track.php)
- **Shortcode Support**: Easy integration with `[bitlab_fardar_tracking]` shortcode
- **Direct URL Tracking**: Support for direct tracking URLs like `https://yourdomain.com/tracking-page?trackingno=123456`
- **WooCommerce Integration**: Compatible with WooCommerce Shipment Tracking plugin
- **Bootstrap UI**: Clean, responsive design using Bootstrap 5.3.3
- **Admin Settings**: Easy configuration through WordPress admin panel
- **Security**: Proper nonce verification and sanitization
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

- **WordPress**: 4.7 or higher
- **PHP**: 7.0 or higher
- **WooCommerce**: 3.0+ (for WooCommerce integration)
- **WooCommerce Shipment Tracking**: (optional, for enhanced integration)

## 📱 Screenshots

1. **Admin Settings Page**: Configure tracking page and view instructions
2. **Tracking Form**: Clean Bootstrap-based UI for tracking input
3. **Direct Tracking Page**: Example of tracking results display

## 🔒 Security

The plugin implements several security measures:
- Nonce verification for form submissions
- Input sanitization and validation
- Proper escaping of output
- WordPress coding standards compliance

## 🤝 Support

For support and questions:
- **Website**: [bitlab.lk](https://bitlab.lk)
- **Email**: Contact through the website
- **Documentation**: Check the plugin's admin settings page for usage instructions

## 📝 Changelog

### Version 1.1.1
- Current stable release
- WooCommerce Shipment Tracking integration
- Bootstrap 5.3.3 styling
- Enhanced security features

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
│   └── css/
│       └── bootstrap.min.css
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