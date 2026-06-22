<?php
variables([
	'no-site-widgets' => true,
	VAREmail => 'vidya+wisdom@awakentolife.org',
	VARDAWNMenu => 'no',
	'htmlReplaces' => [
		'ModuleIntroduction' => 'Please visit the points below and use the toolbox below to either send yourself whatsapp or emails. Email is best as it would help you consolidate your course findings. Write to us (as a paid service) or book 1-1 time with us.',
	],
	'siteRawReplaces' => [
		'$\to$' => ' &rarr; ',
	],
]);

addStyle('styles');

function site_before_render() {
	$settings = [
		VARDontOverwriteLogo => true,
		VARUseNodeIcons => true,
		VARLinkToNodeHome => true,
		VARLinkToSubnodeHome => true
	];

	if (sectionIs('courses')) {
		autosetPageMenu($settings);

		if (getPageParameterAt(1))
			variable('skip-directory', true);
	}

	if (getPageParameterAt(1) == 'learn') {
		$path = concatArgsWithSlash(SITEPATH, sectionValue(), nodeValue(), getPageParameterAt(1));
		nodeSettings::create($path, nodeSettings::two_page)->apply($settings);
		if ($two = getPageParameterAt(2)) {
			$third = concatArgsWithSlash($path, $two);
			if (disk_is_dir($third)) {
				nodeSettings::create($third, nodeSettings::level3)->apply($settings);
			}
		}
	}
}

function before_file() {
	if (getPageParameterAt() == 'learn')
		echo getCodeSnippet(concatStrings('-', nodeValue(), getPageParameterAt(), 'overview'));
}
