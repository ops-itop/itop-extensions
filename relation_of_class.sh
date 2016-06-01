#!/bin/bash

############################
# Usage:
# File Name: relation_of_class.sh
# Author: annhe  
# Mail: i@annhe.net
# Created Time: 2016-06-01 13:11:48
############################

find ./ -name "*.php" |xargs grep -E "^class |^abstract class" |cut -f2 -d':' |tr -d '{$}' |sed -r 's/class |abstract class //g' |sort |uniq |sed 's/implements.*$//g'> class.txt
dos2unix class.txt
echo "digraph G{" > class.dot
echo "rankdir=LR;" >> class.dot
cat class.txt |grep "extends" |awk '{print $3,$2,$1";"}' |sed 's/extends/->/g' >>class.dot
echo "}" >> class.dot
dot -Tpng class.dot -o class.png
#rm -f class.txt
