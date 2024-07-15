<?php
declare(strict_types=1);
namespace muqsit\invmenu;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase
{
//	just do nothing but enable library as a plugin
	protected function onEnable(): void
	{
		$this->getLogger()->info(TextFormat::GREEN."InvMenu by Muqsit Library is now available");
		parent::onEnable(); // TODO: Change the autogenerated stub
	}
}