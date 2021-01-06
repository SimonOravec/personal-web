<?php
$rand = bin2hex(openssl_random_pseudo_bytes(2));

$bday = new DateTime('27.11.2002');
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/style.css">
    <title>Personal domain</title>
</head>
<body>
    <div class="background">
        <div id="particles"></div>
        <div class="container fade-in">
            <div class="whitebox">
                <h1>Šimon Oravec</h1>
                <h2>Personal domain</h2>
                <p class="p1"><strong>Age:</strong> <?=$diff->y?> years, <?=$diff->m?> month(s), <?=$diff->d?> day(s)<br><strong>Location:</strong> Presov, Slovakia</p>
                <div class="line"></div>
                <h3>My skills:</h3>
                <table class="table-center">
                    <tr>
                        <td>Linux</td>
                        <td>Since 2015</td>
                    </tr>
                    <tr>
                        <td>HTML</td>
                        <td>Since 2016</td>
                    </tr>
                    <tr>
                        <td>PHP</td>
                        <td>Since 2016</td>
                    </tr>
                    <tr>
                        <td>JavaScript</td>
                        <td>Since 2016</td>
                    </tr>
                    <tr>
                        <td>Java</td>
                        <td>Since 2017</td>
                    </tr>
                    <tr>
                        <td>Node.js</td>
                        <td>Since 2017</td>
                    </tr>
                    <tr>
                        <td class="space-10">Nette Framework</td>
                        <td>Since 2019</td>
                    </tr>
                    <tr>
                        <td>C#</td>
                        <td>Since 2020</td>
                    </tr>
                </table>
                <div class="text-center">
                    <p class="email">Contact email:
                        <span id="m_<?=$rand?>" style="color:#49b5e6;user-select:all;">[PROTECTED]</span>
                        <noscript><br><font style="color:red;font-size:12px;text-transform:none;letter-spacing:1px;">*You need to enable JavaScript to view my email</font></noscript>
                    </p>
                    <a href="https://github.com/simonoravec" target="_blank"><img style="width:56px;height:56px;" src="https://static.simonoravec.eu/get/img/github-white.png"></a>
                </div>
            </div>
            <div class="footer">&copy; <?=date("Y")?> Šimon Oravec</div>
        </div>
    </div>
</body>
<script src="//static.simonoravec.eu/get/particles.js/2.0.0.js"></script>
<script>
particlesJS.load('particles', '/assets/pconfig.json');

eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('5.4("3").2=1(\'0\');',6,6,'JiN4Njk7JiN4NkU7JiN4NjY7JiN4NkY7JiN4NDA7JiN4NzM7JiN4Njk7JiN4NkQ7JiN4NkY7JiN4NkU7JiN4NkY7JiN4NzI7JiN4NjE7JiN4NzY7JiN4NjU7JiN4NjM7JiN4MkU7JiN4NjU7JiN4NzU7|atob|innerHTML|m_<?=$rand?>|getElementById|document'.split('|'),0,{}));
</script>
</html>
