<?php
/**
 * GmUI Created by TheBlitzCode
 * Twitter: TheBlitzCode
 * this pluig is for GhostRide
*/

namespace TheBlitzCode;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\PlayerJoinEvent;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getServer()->info(base64_decode("R21VSSBFbmFibGVkIHN1Y2Nlc3NmdWxseQ=="));
    $this->getLogger()->notice(base64_decode("R21VSSBjcmVhdGVkIGJ5IFRoZUJsaXR6Q29kZQ=="));
    @mkdir($this->getDataFolder());
    $this->saveDefaultConfig();
  }
  
  public function onDisable(){
  }
  
  public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    if ($player instanceof Player){
      $player->setGamemode(0);
    }
  }
  
  public function GmUI($player){
    if ($player instanceof Player){
      if ($this->getServer()->getPluginManager()->getPlugin() == "FormAPI"){
      } else {
        $player->sendMessage("§7§l»§r§4FormAPI plugin not found");
      }
    }
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
  
  public function gamemodes($player){
    if ($player instanceof Player){
      if ($player->getGamemode()  == 0){
        $this->sendMessage("§7§l»§r§e
      }
    }
  }
}
?>
