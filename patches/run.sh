#!/bin/bash

############################
# Usage:
# File Name: run.sh
# Author: annhe  
# Mail: i@annhe.net
# Created Time: 2019-02-28 17:17:00
############################
cp *.patch ../../
cp -ru js ../../
cp -ru css ../../
cd ../../
for id in `cat *.patch |grep "^+++" |awk '{print $2}' |sed -r 's/(web|b)\///g'`;do
	dos2unix $id
done

for id in `ls *.patch`;do
	patch -p1 --binary -l -N < $id
done
