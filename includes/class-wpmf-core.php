<?php
class WPMF_Core {
    public static function run_fix($dry_run = true, $new_scheme = 'https', $new_domain = null) {
        global $wpdb;
        $site_url = get_site_url();
        $current_scheme = parse_url($site_url, PHP_URL_SCHEME);
        $current_domain = parse_url($site_url, PHP_URL_HOST);
        $target_domain  = $new_domain ?: $current_domain;
        $attachments = $wpdb->get_results("SELECT ID, guid FROM {$wpdb->posts} WHERE post_type='attachment'");
        $updated = [];
        foreach ($attachments as $a) {
            $new_guid = preg_replace('#^https?://#i', "{$new_scheme}://", $a->guid);
            $new_guid = preg_replace(
                '#https?://' . preg_quote(parse_url($a->guid, PHP_URL_HOST), '#') . '#i',
                "{$new_scheme}://{$target_domain}",
                $new_guid
            );
            if ($a->guid !== $new_guid) {
                if (!$dry_run) {
                    $wpdb->update($wpdb->posts, ['guid' => $new_guid], ['ID' => $a->ID]);
                }
                $updated[] = ['ID' => $a->ID, 'old' => $a->guid, 'new' => $new_guid];
            }
        }
        return $updated;
    }
}
