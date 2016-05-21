#!/bin/bash

grep "class id=" datamodel.itop-config-mgmt.xml -n |tr ':' '"' |awk -F '"' '{print $1,$3}'> info.log

awk '{print $1}' info.log >1.log
awk '{print $2}' info.log >2.log

sed -i '1d' 1.log
sed -i '$d' 2.log
paste 1.log 2.log >info2.log

paste info.log info2.log |awk '{print $1,$3,$2}'>info3.log

while read line;do
	start=`echo $line |awk '{print $1}'`
	end=`echo $line |awk '{print $2}'`
	echo $end |grep '[a-z]' && end="8000"
	name=`echo $line |awk '{print $NF}'`
	
	awk -v start=$start -v end=$end '{if(NR>=start && NR<end) print $0}' datamodel.itop-config-mgmt.xml>$name-class.xml
done <info3.log
	