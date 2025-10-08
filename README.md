# WP Media Fixer

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
