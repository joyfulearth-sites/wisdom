<?php
$items = [
	[
		'template' => 'heading',
		'heading' => 'VidyAntara: Unlocking Inner Wisdom',
		'tagline' => 'An Exclusive Masterclass for Early-career professionals &amp; Emerging leaders',
		'introduction' => 'Are you navigating the high-pressure transition into the corporate world? Balancing ambitious
professional milestones with personal wellbeing can feel like an unspoken challenge.</p><p><strong class="cursive">VidyAntara Learning</strong> is a curated space designed to give you the psychological anchor, emotional
resilience, and strategic clarity to thrive in your career without losing yourself in the process.',
	],
	[
		'template' => 'pillars',
		'heading' => 'The Premier Workshop: Core Pillars of Focus',
		'introduction' => 'This introductory session serves as your practical toolkit and premier gateway to our
comprehensive, 3-month signature program. Together, we will unpack:',
		'item1' => '<b>Ambitious Growth vs. Radical Self-Care</b>: Rewriting the hustle culture narrative to
build sustainable, high-performance habits.',
		'item2' => '<b>Navigating Corporate Relationships</b>: Mastering professional boundaries, assertive
communication, and workplace dynamics.',
		'item3' => '<b>The Wellness Blueprint</b>: Practical frameworks to clear mental clutter, master emotional
regulation, and find peace amidst professional pressure.',
	],
	[
		'template' => 'facilitator',
		'heading' => 'Meet Your Guide: Vidya Shankar Chakravarthy',
		'item1' => '<b>25+ Years</b> of Dedicated Experience in Behavioral Dynamics and Growth Mentoring.',
		'item2' => '<b>15,000+ Professionals</b> Impacted and Empowered Internationally.',
		'item3' => '<b>Master Educator &amp; Relationship Expert</b> specializing in aligning personal purpose with
corporate success.',
	],
];

echo '<div class="container content-box">';
foreach ($items as $vars) {
	$tpl = getThemeSection('home', $vars['template'], SITEPATH . '/themes/');
	echo replaceItems($tpl, $vars, '%');
	echo cbCloseAndOpen('container');
}
echo getSnippet('contact', CORESNIPPET);
echo '</div>';
