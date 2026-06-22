<?php
variables([
	'no-site-widgets' => true,
	VAREmail => 'vidya+wisdom@awakentolife.org',
	VARDAWNMenu => 'no',
	'siteRawReplaces' => [
		'$\to$' => ' &rarr; ',
	],
]);

addStyle('styles');

function site_before_render() {
	variable('htmlReplaces', [
			'ModuleIntroduction' => getSnippet('module-top'),
		],
	);

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
	if (getPageParameterAt() == 'learn' && !getQueryparameter('content'))
		echo getCodeSnippet(concatStrings('-', nodeValue(), getPageParameterAt(), 'overview'));
}

function enrichEngageNote($content, $where) {
	if (!getPageParameterAt() == 'learn') return $content;
	return replaceItems(getSnippet($where == VAREngageNoteAbove ? 'module-top' : 'append-to-engage'), ['original-note' => $content], WRAPREPLACE);
}
