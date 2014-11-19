 <html>  
<head> 
<title>{$title}</title>  
</head>  
<body>  
<table style="width:100%">
<tr>
    <td colspan="2"><b>{$label}</b></td>
  <tr>
  <tr>
    <td class="label">{$form.room_label.label}<font color="red">*</font></td>
    <td class="content">{$form.room_label.html}</td>
  <tr>
  <tr>
    <td class="label">{$form.room_number.label}</td>
    <td class="content">{$form.room_number.html}</td>
  <tr>
  <tr>
    <td class="label">{$form.room_floor.label}</td>
    <td class="content">{$form.room_floor.html}</td>
  <tr>
  <tr>
    <td class="label">{$form.room_extension.label}</td>
    <td class="content">{$form.room_extension.html}</td>
  <tr>
</table>
<div class="crm-submit-buttons">
{include file="CRM/common/formButtons.tpl" location="bottom"}
</div>
</body>  
</html>
