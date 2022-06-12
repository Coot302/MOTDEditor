<?php

namespace Coot\MOTDEditor;

use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\tile\Tile;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as tf;
use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\item\ItemIds;
use pocketmine\item\ItemFactory;
use pocketmine\item\Item;

class MOTDEditor extends PluginBase

  {
    
    public $config;

    public function onEnable(): void 
    {
      $this->getServer()->getNetwork()->setName($this->getConfig()->get("MOTD"));
    }
  }
