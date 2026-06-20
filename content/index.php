<?php
echo '<div class="container mt-3"><h2 class="text-center">' . title(FORHEADING) . '</h2></div>' . NEWLINES2;

echo contentBox('', 'container', true);

echo returnLine('<img class="img-fluid" src="%cdn%courses/atl-workshop.jpg" />') . '</div>' . NEWLINES2;

/*
printH1InDivider('Motivational Quotes', false);
variables(['skip_quote_heading' => BOOLYes, 'skip_quote_link' => BOOLYes]);
runFrameworkFile('pages\quotes');
*/

printH1InDivider('VidyAntara Basics Workshop', false);
echo getSnippet('home-va');
