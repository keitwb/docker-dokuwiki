<?php
$conf['title'] = 'My Wiki';
$conf['license'] = '0';
$conf['savedir'] = '/wiki/data';
$conf['baseurl'] = 'https://<SERVER_HOSTNAME>';
$conf['useacl'] = 1;
$conf['passcrypt'] = 'bcrypt';
$conf['superuser'] = '@admin';
$conf['disableactions'] = 'register,profile_delete,rss';
$conf['auth_security_timeout'] = 60 * 60 * 24 * 3;
$conf['usewordblock'] = 0;
$conf['subscribers'] = 1;
$conf['userewrite'] = '1';
$conf['gzip_output'] = 1;
$conf['dnslookups'] = 0;
