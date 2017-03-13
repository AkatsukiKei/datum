<?php
class MyTpl
{
	public $tempateDir = "templates";
	public $complieDir = "templates_c";
	public $left_delimiter = "{";
	public $right_delimiter = "}";
	private $templateVars = array();

	public function assign($name, $val='') {
		if ($name != "") {
			$this->templateVars[$name] = $val;
		}
	}

	public function display($templateName) {
		$templatePath = $this->tempateDir . '/' . $templateName;
		if (!file_exists($templatePath)) {
			exit("模板文件不存在：" . $templatePath);
		}

		$compliePath = $this->complieDir . '/' . $templateName . ".php";
		if (!file_exists($compliePath) || filemtime($templatePath) > filemtime($compliePath)) {
			$complied = $this->parseTemplate($templatePath);
			file_put_contents($compliePath, $complied);
		}

		include $compliePath;
	}

	private function parseTemplate($templatePath){
		$left = preg_quote($this->left_delimiter);
		$right = preg_quote($this->right_delimiter);

		$pattern = array(
				'/' . $left . '\s*\$([a-zA-Z_]\w*)\s*' . $right . '/i',
			);
		$replacement = array(
				'<?php echo $this->templateVars["\1"]; ?>'
			);
		return preg_replace($pattern, $replacement, file_get_contents($templatePath));
	}
}