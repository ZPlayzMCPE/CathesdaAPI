<?php

namespace CathesdaAPI;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;

class LoaderAPI extends PluginBase implements Listener {

    public function onEnable(){
      $this->getLogger()->info("Loading CathesdaAPI");
     }
    }
   
