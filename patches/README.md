# 补丁

基于iTop-2.3.3-3159

## fix_css.patch
- 表格内容过多时自动换行
- 支持AttributeText 编辑时全屏(from 2.5)

## date_zh_bug.patch
修复中文日期bug

## fix_attributetext_edit.patch
修复link set 新增Object时，如果有AttributeText类型，将重复添加的问题。Kubernetes扩展中需要打此补丁(from 2.5)

## fix_portal_url_notification.patch
修复邮件提醒中portal url错误问题

ref: https://git.sudo-i.net/kk/itop/commit/f31deaf24cec5a6dd93a3145da4ae91d44a5ff5b

## fix_restapi_customfields.patch
修复restapi中不能返回customfields内容问题

## fix_zh_pdf_export.sh
修复pdf导出时中文乱码

## 打补丁
```
cp *.patch ../../
patch -p1 < *.patch
```
某些补丁失败时可以尝试转换文档格式
```
dos2unix
unix2dos
```
