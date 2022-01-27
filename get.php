<?php

$page = isset($_GET["page"]) ? $_GET["page"] : "rien";

$page = $_GET["page"] ?? "rien";

echo $page;
