<!DOCTYPE html>
<html>
<head>
<script>
function do_redir()
{
window.frames[0].document.body.innerHTML='<form target="_parent" method="post" action="<?php echo $_GET['ref']; ?>"></form>';
window.frames[0].document.forms[0].submit()
}
</script>
</head>
<body>
<iframe onload="window.setTimeout(do_redir,99);" src="about:blank" style="visibility:hidden"></iframe>
</body>
</html> 
