<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Plugin</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.javascript"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
        var gameInstance = UnityLoader.instantiate("gameContainer", "Build/Web.json", {onProgress: UnityProgress,
            //para nn dar erro no mobile
            compatibilityCheck: function (unityInstance, onsuccess, onerror) {
              onsuccess();
            }
        });
    </script>
</head>
<body>
<div class="webgl-content">
    <div id="gameContainer" style="width: 960px; height: 600px"></div>
</div>
<div class="simmer">template by: <a href="https://simmer.io" target="_blank">SIMMER.io</a></div>
<script src="TemplateData/responsive.javascript"></script>
</body>
</html>