<?php
/**
 * GmUI Created by TheBlitzCode
*/

namespace TheBlitzCode;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\PlayerJoinEvent;

class Main extends PluginBase implements Listener{
  public function onEnable(){
  }
  
  public function onDisable(){
  }
  
  public function GmUI($player){
  }
  
  public function onCommand(CommandSender $player, Command $cmd, string $label, array $args): bool{
    if ($cmd->getName() == "gm" or "g"){
      if ($player->hasPermission("command.gmui")){
        if ($player instanceof Player){
          $this->GmUI($player);
        }
      }
    }
    retuen false;
  }
}
?>
