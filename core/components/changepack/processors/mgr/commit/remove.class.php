<?php

/**
 * Remove an Commits
 */
class ChangePackCommitRemoveProcessor extends modObjectProcessor {
	public $objectType = 'ChangePackCommit';
	public $classKey = 'ChangePackCommit';
	public $languageTopics = array('changepack');
	//public $permission = 'remove';


	/**
	 * @return array|string
	 */
	public function process() {
		if (!$this->checkPermissions()) {
			return $this->failure($this->modx->lexicon('access_denied'));
		}

		$ids = $this->modx->fromJSON($this->getProperty('ids'));
		if (empty($ids)) {
			return $this->failure($this->modx->lexicon('changepack_commit_err_ns'));
		}

		foreach ($ids as $id) {
			/** @var ChangePackCommit $object */
			if (!$object = $this->modx->getObject($this->classKey, $id)) {
				return $this->failure($this->modx->lexicon('changepack_commit_err_nf'));
			}
			$this->delFile($object->filename);
			$object->remove();
		}

		return $this->success();
	}
	public function delFile($filename){
		$dir = rtrim($this->modx->getOption('assets_path'),"/");
		$attachment_path = $dir.'/'.'components/changepack/commit/';
		unlink($attachment_path.$filename);
	}
}

return 'ChangePackCommitRemoveProcessor';
