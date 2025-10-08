<?php
if (defined('WP_CLI') && WP_CLI) {
    class WPMF_CLI extends WP_CLI_Command {
        public function run($args, $assoc_args) {
            $dry = isset($assoc_args['dry-run']);
            $scheme = $assoc_args['scheme'] ?? 'https';
            $domain = $assoc_args['domain'] ?? null;
            $result = WPMF_Core::run_fix($dry, $scheme, $domain);
            foreach ($result as $r) {
                WP_CLI::log("{$r['ID']}: {$r['old']} → {$r['new']}");
            }
            WP_CLI::success(sprintf('Processed %d attachments.', count($result)));
        }
    }
    WP_CLI::add_command('media-fixer', 'WPMF_CLI');
}
