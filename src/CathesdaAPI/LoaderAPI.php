<?php

namespace CathesdaAPI;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;

# CATHESDAAPI COMMANDS #
use Commands\Hub;

class LoaderAPI extends PluginBase implements Listener {

    public function onEnable(){
      $this->getLogger()->info("Loading CathesdaAPI");
        $this->RegCommands();
     }
    
    public function RegCommands(){
        $this->getServer()->getCommandMap()->register("Hub", new HubCommand("Hub", $this));
        
    }
   
}
