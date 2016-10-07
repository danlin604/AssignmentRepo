<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{pagetitle}</title>

        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
		<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.blue-indigo.min.css" />

    </head>

    <body>

		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<header class="mdl-layout__header">
				<div class="mdl-layout__header-row">
					<!-- Title -->
					<span class="mdl-layout-title">{pagetitle}</span>
				</div>

				<!-- Tabs -->
				<div class="mdl-layout__tab-bar mdl-js-ripple-effect">
					<a href="/" class="mdl-layout__tab">Home</a>
					<a href="/sales" class="mdl-layout__tab">Sales</a>
					<a href="/production" class="mdl-layout__tab">Production</a>
					<a href="/receiving" class="mdl-layout__tab">Receiving</a>
					<a href="/admin" class="mdl-layout__tab">Admin</a>
				</div>
			</header>

			<main class="mdl-layout__content">
				<div class="page-content">{content}</div>
			</main>
		</div>

		<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

    </body>
</html>
