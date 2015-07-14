<?php

// 例のマッチングシステム(results.)で次作コンポーネントを作る方法を調べた。
// PostsController.php から呼び出すサンプルを入れておきました。

namespace Cake\Controller\Component;

use Cake\Controller\Component;

class AtfxmlComponent extends Component
{
	public function LoadXmlFile()
	{
		$this->log('--- loadXmlFile ---', 'debug');
	}
}
?>
