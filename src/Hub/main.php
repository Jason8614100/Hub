<?php

declare(strict_types=1);

namespace Hub;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;

use pocketmine\world\World;


class main extends PluginBase implements Listener{

	public function onEnable(): void{

	}

	public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args): bool {

		switch($cmd->getName()){

			case "hub":
			 if($sender instanceof Player){//that means $sender = player

			    if ($sender->hasPermission("hub.cmd")){
			     //means if the player hasPermission hub.cmd so the player can  tp 
			    	     $world = $this->getServer()->getWorldManager()->getWorldByName("lobby"); //the "lobby" is ur want na tp back to the world
                         $sender->teleport($world->getSafeSpawn());
                         $sender->sendTitle("U are teleport to the lobby!!!"); //title
                         $sender->sendMessage("teleport to the lobby!!"); //chat

			    }
			 }
		}
	}
} 
