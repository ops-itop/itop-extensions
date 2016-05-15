#!/bin/bash

############################
# Usage:
# File Name: xml2dot.sh
# Author: annhe  
# Mail: i@annhe.net
# Created Time: 2016-05-16 00:17:21
############################

itop_config_mgmt="../env-production/itop-config-mgmt/datamodel.itop-config-mgmt.xml"
le_config_mgmt="le-config-mgmt/datamodel.le-config-mgmt.xml"

grep "class id=" $itop_config_mgmt |cut -f2 -d'"' >class.txt
grep "<parent>" $itop_config_mgmt |cut -f2 -d'>' |cut -f1 -d'<' >parent.txt
paste class.txt parent.txt |sed '/^\t/d' >itop.txt

grep "class id=" $le_config_mgmt |grep define |cut -f2 -d'"' >class.txt
grep "<parent>" $le_config_mgmt |cut -f2 -d'>' |cut -f1 -d'<' >parent.txt
paste class.txt parent.txt |sed '/^\t/d' >>itop.txt

cp itop.txt{,.bak}
for id in `grep "class id=" $le_config_mgmt |grep delete |cut -f2 -d'"'`;do
	sed -i "/\t$id$/d" itop.txt
	sed -i "/^$id\t/d" itop.txt
done

sed -i 's/\t/->/g' itop.txt
echo -e "digraph G{\nrankdir=RL" > itop.dot
cat itop.txt >>itop.dot
echo "}" >>itop.dot
dot -Tpng itop.dot -o le-itop.png

rm -f class.txt parent.txt itop.txt itop.txt.bak
