#!/bin/bash

############################
# Usage: 修复iTop pdf导出中文乱码
# File Name: fix_zh_pdf_export.sh
# Author: annhe  
# Mail: i@annhe.net
# Created Time: 2018-10-01 11:07:44
# ref: https://www.annhe.net/article-3567.html
############################

cp -ru lib ../../

# 标题正常显示中文
sed -i 's/dejavusans/droidsansfallback/g' application/pdfpage.class.inc.php

# impact图正常显示中文
sed -i 's/dejavusans/droidsansfallback/g' core/displayablegraph.class.inc.php

# 列表中文正常显示
sed -i 's/dejavusans/droidsansfallback/g' pages/ajax.render.php

# 批量导出PDF格式CI
sed -i 's/dejavusans/droidsansfallback/g' core/pdfbulkexport.class.inc.php
