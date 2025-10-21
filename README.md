<p align="center">
  <img src="https://raw.githubusercontent.com/bestwebsite/wp-media-fixer/master/assets/social/wp-media-fixer-banner.png"
       alt="WP Media Fixer — fix HTTP to HTTPS media URLs automatically" />
</p>

# WP Media Fixer

[![Latest release](https://img.shields.io/github/v/release/bestwebsite/wp-media-fixer)](../../releases)
[![License: GPL-2.0+](https://img.shields.io/badge/license-GPL--2.0%2B-blue.svg)](LICENSE)
[![WP-CLI](https://img.shields.io/badge/WP--CLI-supported-2ea44f.svg)](https://wp-cli.org/)
[![Maintained by Best Website](https://img.shields.io/badge/maintainer-Best%20Website-3AA0FF)](https://bestwebsite.com)

**Automatically fix broken or insecure media URLs after domain or SSL changes.**

## Features
- Detect and repair `http://` → `https://` mismatches
- Replace outdated domain names in attachment URLs
- Dry-run mode for safe preview
- WP-CLI support for automation

## Installation
1. Upload `wp-media-fixer` to `/wp-content/plugins/`
2. Activate via Plugins screen
3. Go to Tools → Media Fixer or run `wp media-fixer run --dry-run`

## License
GPL-2.0 or later
