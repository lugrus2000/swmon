#!/usr/bin/perl
use Net::Telnet ();

$host = $ARGV[0];
$mac = $ARGV[1];
$vlan = $ARGV[2];

$t=new Net::Telnet(Timeout=>20);
$t->open("$host");
$t->put("admin\n");
my $ok=$t->waitfor('/assword:/');
my $ok = 1;
if($ok) {$t->put("passwd\n");}
$t->put("config\n");
$t->put("no ip source-guard binding $mac vlan $vlan \n");
$t->put("exit\n");
$t->put("copy running-config startup-config\n");
$t->put("\n");
$t->put("exit\n");
$t->close;
