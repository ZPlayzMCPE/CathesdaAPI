<?php

/*
 *
* ╔═══╗╔═══╗╔════╗╔╗─╔╗╔═══╗╔═══╗╔═══╗╔═══╗
* ║╔═╗║║╔═╗║║╔╗╔╗║║║─║║║╔══╝║╔═╗║╚╗╔╗║║╔═╗║
* ║║─╚╝║║─║║╚╝║║╚╝║╚═╝║║╚══╗║╚══╗─║║║║║║─║║
* ║║─╔╗║╚═╝║──║║──║╔═╗║║╔══╝╚══╗║─║║║║║╚═╝║
* ║╚═╝║║╔═╗║──║║──║║─║║║╚══╗║╚═╝║╔╝╚╝║║╔═╗║
* ╚═══╝╚╝─╚╝──╚╝──╚╝─╚╝╚═══╝╚═══╝╚═══╝╚╝─╚╝
 * Cathesda is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author Cathesda Team
 * @link https://www.cathesda.de/
 *
 *
*/

namespace Commands;

use CathesdaAPI\LoaderAPI;
use pocketmine\math\Vector3;
use pocketmine\{Player, Server};
use pocketmine\utils\TextFormat as Cathesda;
use pocketmine\level\sound\EndermanTeleportSound;
use pocketmine\command\{PluginCommand, CommandSender};

class Hub extends PluginCommand{

	public function __construct($name, Core $plugin){
		parent::__construct($name, $plugin);
		$this->setDescription("Teleport to Hub (only for all).");
		$this->setAliases(["hub"]);
	}
	 
	public function execute(CommandSender $sender, string $commandLabel, array $args): bool{
		if($sender instanceof Player){
			$level = $sender->getLevel();
			$x = $sender->getX();
			$y = $sender->getY();
			$z = $sender->getZ();
			
			$sender->setFood(20);
			$sender->setHealth(20);
			
			$name = $sender->getName();
			
			$sender->sendMessage(Cathesda::GRAY . "§7Welcome back, " . Cathesda::YELLOW . $name);
			$spawn = new Vector3($x, $y, $z);
			
			$sender->addTitle("§cHub");
			$sender->sendMessage(Cathesda::GREEN . "Teleport to Hub.");
			
			$sender->teleport($this->getPlugin()->getServer()->getDefaultLevel()->getSafeSpawn());
			$level->addSound(new EndermanTeleportSound($spawn));
		} else {
			$sender->sendMessage(Cathesda::RED . "use '$commandLabel' in game.");
		}
		return true;
	}
}
