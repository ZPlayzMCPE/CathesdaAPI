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

namespace Cathesda;

use pocketmine\plugin\PluginBase;
use pocketmine\{Player, Server};
use pocketmine\utils\TextFormat as Cathesda;
use pocketmine\event\Listener;

class Cathesda extends PluginBase implements Listener{

  const PREFIX = "§bA§eP§cI §7|§r ";
  
  public function onEnable(){
    $this->getLogger()->info(self::PREFIX . Cathesda::GREEN . "CathesdaAPI Loaded");
    
    }
    
    
    
   }
