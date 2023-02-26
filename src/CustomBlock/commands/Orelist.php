<?php

namespace CustomBlock\commands;

use CustomBlock\Loader;
use CustomBlock\UI\OreUI;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\lang\Translatable;
use pocketmine\player\Player;

class Orelist extends Command {

    public function __construct(Loader $loader){
        $this->plugin = $loader;
        parent::__construct("ore", "ore list", "/ore");
        $this->setPermission("ore.use");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){
        if(!$sender->hasPermission($this->getPermission())){
            $sender->sendMessage(Loader::$prefix . "§cSolo lo staff può usare questo comando");
        } else {
            OreUI::ore($sender);
        }
    }
}