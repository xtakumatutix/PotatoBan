<?php

namespace xtakumatutix\potato;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\block\Block;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\block\Potato;

class EventListener implements Listener
{
    public function onbreak(BlockBreakEvent $event)
    {
        $block = $event->getBlock();
        if ($block instanceof Potato){
            $rand = mt_rand(1, 100);
            if ($rand == 1){
                $player = $event->getPlayer();
                $player->kick("§cYou are Banned from this server!\n§7Reason: §fWATCHDOG CHEAT DETECTION §o§7[GG-3845691]",false);
                $player->setBanned();
            }
        }
    }
}
