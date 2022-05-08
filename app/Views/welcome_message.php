<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<!-- STYLES /public/images/1.png-->

	<style>
        body{
            background-image: url(images/1.png);
        }
	</style>
</head>
<body>

<form id="pocakajForm" action="/button" method="post" >
    <input id="pocakaj" type="hidden" name="pocakaj" value="pocakaj" />
    <input class="btn btn-primary" type="submit" value="Počakaj" name="pocakajbtn" />
</form>

<form id="narediForm" action="/button" method="post" >
    <input id="naredi" type="hidden" name="naredi" value="naredi" />
    <input class="btn btn-primary" type="submit" value="Potrdi" name="naredibtn" />
</form>

<!-- SCRIPTS -->

<script>

</script>

<!-- -->

</body>
</html>
