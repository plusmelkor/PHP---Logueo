#!C:\Strawberry\perl\bin\perl.exe
use strict;
use warnings;

my $variable = 143;
my $bit00 = ($variable & 2**0)/2**0;
my $bit01 = ($variable & 2**1)/2**1;
my $bit02 = ($variable & 2**2)/2**2;
my $bit03 = ($variable & 2**3)/2**3;
my $bit04 = ($variable & 2**4)/2**4;
my $bit05 = ($variable & 2**5)/2**5;
my $bit06 = ($variable & 2**6)/2**6;
my $bit07 = ($variable & 2**7)/2**7;
print $bit07,$bit06,$bit05,$bit04,$bit03,$bit02,$bit01,$bit00;