<?php
	/**
	 * renders template
	 *
	 * @param string $tpl
	 * @param array $data
	 * @return string
	 */
	function render(string $tpl, ?array $data = []):string {
		// extreure dades
		if ($data) {
			extract($data, EXTR_OVERWRITE);
		}

		ob_start();
		require APPSRC.'/templates/'.$tpl.'.tpl.php';
		$rendered = ob_get_clean();
		
		return (string)$rendered;
	}
?>