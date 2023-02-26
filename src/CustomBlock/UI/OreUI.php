<?php

namespace CustomBlock\UI;

use CustomBlock\Loader;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\block\VanillaBlocks;
use pocketmine\item\ItemFactory;
use pocketmine\player\Player;

class OreUI {

    public static function ore(Player $player){
        $orelist = new SimpleForm(function(Player $player, int $data=null){
           if($data === null){
               return;
           }
           switch ($data){
               case 0:
                   break;
               case 1:
                   $player->getInventory()->addItem(ItemFactory::getInstance()->get(VanillaBlocks::DIAMOND_ORE()->getId(), 0, 64));
                   $player->sendMessage(Loader::$prefix . "Hai ricevuto uno Stack di §bDiamond Ore§7!");
                   break;
               case 2:
                   $player->getInventory()->addItem(ItemFactory::getInstance()->get(VanillaBlocks::EMERALD_ORE()->getId(), 0, 64));
                   $player->sendMessage(Loader::$prefix . "Hai ricevuto uno Stack di §aEmerald Ore§7!");
                    break;
               case 3:
                   $player->getInventory()->addItem(ItemFactory::getInstance()->get(VanillaBlocks::GOLD_ORE()->getId(), 0, 64));
                   $player->sendMessage(Loader::$prefix . "Hai ricevuto uno Stack di §eGold Ore§7!");
                   break;
               case 4:
                   $player->getInventory()->addItem(ItemFactory::getInstance()->get(VanillaBlocks::IRON_ORE()->getId(), 0, 64));
                   $player->sendMessage(Loader::$prefix . "Hai ricevuto uno Stack di §fIron Ore§7!");
                   break;
           }
        });
        $orelist->setTitle("Ore UI");
        $orelist->addButton("§lClose", 0);
        $orelist->addButton("§lDiamond Ore", 0, "textures/blocks/diamond_ore");
        $orelist->addButton("§lEmerald Ore", 0, "textures/blocks/emerald_ore");
        $orelist->addButton("§lGold Ore", 0, "textures/blocks/gold_ore");
        $orelist->addButton("§lIron Ore", 0, "textures/blocks/iron_ore");
        $orelist->sendToPlayer($player);
    }
}