<table cellspacing="0" class="nt_table">
  <tbody>
    <tr>
      <td class="nt_cell_left"></td>
      <td class="nt_cell"><div  id="mnav1" <?php if($nav == "1"){ ?> class="nt_selected" <? } ?> > <a href="index_.php" title="Home" onmouseover="navselect('mnav1');" <?php if($nav != "1"){ ?> onmouseout="navdeselect('mnav1');" <? } ?> shape="rect">Home</a> </div></td>
      <td class="nt_cell" width="20px" align="center"> | </td>
      <td class="nt_cell"><div  id="mnav2"  <?php if($nav == "2" ){?> class="nt_selected" <? } ?> > <a href="#" title="About Us" onmouseover="navselect('mnav2');"  <?php if($nav != "2"){?> onmouseout="navdeselect('mnav2');" <? } ?> shape="rect">About Us</a> </div></td>
      <td class="nt_cell" width="20px" align="center"> | </td>
    </tr>
  </tbody>
</table>
<script language="javascript">
	function navselect(divid)
	{
		document.getElementById(''+divid+'').setAttribute('className', 'nt_selected');
	}
	
	function navdeselect(divid)
	{
		document.getElementById(''+divid+'').setAttribute('className', 'dd');	
	}
</script>
