<?php
/*
 * 功能：会员首页
 * Author:资料空白
 * Date:20180604
 */
class InstructionController extends PcBasicController
{

	public function init()
	{
        parent::init();
	}

	public function indexAction()
	{
		$data['title']='说明';
		$this->getView()->assign($data);
	}
}