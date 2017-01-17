<div class="content-navigation">
<div class="context-block">
<div class="box-header"><div class="box-tc"><div class="box-ml"><div class="box-mr"><div class="box-tl"><div class="box-tr">
<h1 class="context-title"><img class="transparent-png-icon" src="/share/icons/crystal-admin/32x32/filesystems/folder.png" width="32" height="32" alt="Archivos de auditoria" title="Archivos de auditoria" /> {'Available audit log files' | i18n('aplycaauditlogview')}</h1>
<div class="header-mainline"></div>
</div></div></div></div></div></div>


{* <h2>{'Published Content' | i18n('aplycaauditlogview')}</h2>
<pre>
{$content_publish}
</pre>
<h2>{'Moved Content' | i18n('aplycaauditlogview')}</h2>
<pre>
{$content_move}
</pre>
<h2>{'Deleted Content' | i18n('aplycaauditlogview')}</h2>
<pre>
{$content_delete}
</pre>

<hr />
<h2>{'Login' | i18n('aplycaauditlogview')}</h2>
<pre>
{$login}
</pre>
<h2>{'Failed login' | i18n('aplycaauditlogview')}</h2>
<pre>
{$failed_login}
</pre>
*}

<div class="content-view-children">
<div class="context-block"><div class="box-header"><div class="box-tc"><div class="box-ml"><div class="box-mr"><div class="box-tl"><div class="box-tr">
<h2 class="context-title">{'Audit log files' | i18n('aplycaauditlogview')}</h2>
<div class="header-subline"></div>
</div></div></div></div></div></div>

<div class="controlbar">
<div class="box-bc"><div class="box-ml"><div class="box-mr"><div class="box-tc"><div class="box-bl"><div class="box-br">
<div class="block">

<table class="list" width="50%" cellspacing="0" cellpadding="0" border="0">
<tr>
   <th width="1">{'Name' | i18n('aplycaauditlogview')}</th>
   <th width="1">{'View' | i18n('aplycaauditlogview')}</th>
   <th width="1">{'Download' | i18n('aplycaauditlogview')}</th>
</tr>	
{section loop=$:logfiles sequence=array(bglight,bgdark)}
<tr class="{$:sequence}">
	<td align="right" width="1"><img src="/share/icons/crystal-admin/16x16_indexed/mimetypes/empty.png" width="16" height="16" alt="Haz cick en el icono para ver el menú contextual." title="Haz cick en el icono para ver el menú contextual." /> {*$:item| i18n('aplycaauditlogview')*}{$:item}</td>
	<td width="1"><a href={concat("auditlog/full/",$:item)|ezurl}>{'View' | i18n('aplycaauditlogview')}</a></td>
	<td width="1"><a href={concat("auditlog/download/",$:item)|ezurl}>{'Download' | i18n('aplycaauditlogview')}</a></td>
</tr>
{/section}
</table>
<br />

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>