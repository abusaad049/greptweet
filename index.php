<!DOCTYPE HTML>
<html><head>
<meta charset="utf-8">
<title>GrepTweet</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
<meta name="mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-title" content="GrepTweet">
<link rel=icon href=/icons/greptweet_birdie.png sizes="500x500" type="image/png">
<link rel=icon href=/icons/greptweet_birdie.svg sizes="any" type="image/svg+xml">
<link href="/icons/120x120.png" sizes="120x120" rel="apple-touch-icon">
<meta name="description" content="Download and search your tweets - no password login required!">
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">

</head>

<body>

<div class="container">


<div class="content">
<div class="page-header">
<h1><a href="http://twitter.com/greptweet">@Greptweet</a> <small>you can search your tweets</small></h1>
</div>

<form name="f" action="create.php" method="get">

<div class="well">

<div class="clearfix">
<label for="username">Twitter username</label>

<div class="input-group input-group-lg">
<span class="input-group-addon">@</span>
<input class="form-control" id="username" type="text" name="id" required placeholder="kaihendry">
</div>

<div class="input">
</div>
</div>

<button class="btn btn-primary btn-lg" id="b" type="submit">Fetch tweets</button>
</div>

</form>

<footer>
<p>Please <a href="https://github.com/kaihendry/Greptweet">report issues and contribute on Github</a> :)</p>
<p>Version: <a href=https://github.com/kaihendry/Greptweet/commit/<?php include("version.txt"); ?>>
<?php include("version.txt"); ?>
</a></p>
</footer>

</div>
</div>


</body>
</html>
