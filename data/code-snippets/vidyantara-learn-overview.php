<?php
$result = ['<div class="container"><h2 class="text-center h3 m-2"><span class="cursive">VidyAntara Basics</span> at a glance</h2><div class="row">'];
$format = '<div class="col-2"><a href="%url%" class="content-box d-block m-2 p-1 border border-3 text-center h4 img-max-300">%text%<br /><img class="img-fluid" src="%image%" /></a></div>';

$result[] = replaceItems($format, ['url' => '%url%%nodeSlug%/learn/getting-started/', 'text' => 'Start', 'image' => '%url%%section%/%nodeSlug%/learn/getting-started/assets/getting-started-icon.png'], WRAPREPLACE);

$result[] = replaceItems($format, ['url' => '%url%%nodeSlug%/learn/module1/', 'text' => 'Module 1', 'image' => '%url%%section%/%nodeSlug%/learn/module1/assets/module1-icon.png'], WRAPREPLACE);
$result[] = replaceItems($format, ['url' => '%url%%nodeSlug%/learn/module2/', 'text' => 'Module 2', 'image' => '%url%%section%/%nodeSlug%/learn/module2/assets/module2-icon.png'], WRAPREPLACE);
$result[] = replaceItems($format, ['url' => '%url%%nodeSlug%/learn/module3/', 'text' => 'Module 3', 'image' => '%url%%section%/%nodeSlug%/learn/module3/assets/module3-icon.png'], WRAPREPLACE);

$result[] = replaceItems($format, ['url' => '%url%%nodeSlug%/learn/review/', 'text' => 'Review', 'image' => '%url%%section%/%nodeSlug%/learn/assets/review-icon.png'], WRAPREPLACE);
$result[] = replaceItems($format, ['url' => '%url%%nodeSlug%/learn/getting-started/legacy/', 'text' => 'Legacy', 'image' => '%url%%section%/%nodeSlug%/learn/getting-started/assets/legacy-icon.png'], WRAPREPLACE);

$result[] = TAGDIVEND . TAGDIVEND;

return replaceHtml(implode(NEWLINE, $result));
