<?php
    require('wp-load.php');
    require('wp-admin/includes/update.php');
    if ($_GET['token'] == 'huy8m0h1wc') {
        $result = [];
        $result['update_plugins'] = [];
        $update_plugins_info = json_decode(json_encode(get_site_transient( 'update_plugins' )), true);
        if (isset($update_plugins_info['response'])) {
            foreach ($update_plugins_info['response'] as $key => $value) {
                $result['update_plugins'] = [$key => [
                    'current_version' => $update_plugins_info['checked'][$key],
                    'new_version' => $value['new_version'],
                    'requires_php' => $value['requires_php']
                ]];
            }
        }

        $core = get_core_updates()[0];
        if ($core->response != 'latest'){
            $result['update_core'] = [
                'current_version' => $core->current,
                'new_version' => $core->response,
            ];
        }
        else {
            $result['update_core'] = [];
        }

        echo json_encode($result);
    }
    else {
        header("Location: /");
    }