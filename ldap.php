<?php

$output = shell_exec('ldapsearch -s sub -x -H \'ldap://annuaire.sesam-vitale.fr:389\' -b \'ou=AC-SESAM-VITALE-TEST-2034,o=sesam-vitale,c=fr\' \'(cn=01996@996.01.rss.fr)\' \'userCertificate;binary\';');
$substr = substr($output, strpos($output, "userCertificate;binary:: ", 0));
$cert = explode(': ', explode('#', $substr)[0])[1];

echo $cert;