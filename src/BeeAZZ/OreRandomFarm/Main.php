<?php

namespace BeeAZZ\OreRandomFarm;

use pocketmine\plugin\PluginBase;
use pocketmine\math\Vector3;
use pocketmine\player\Player;
use pocketmine\event\block\BlockUpdateEvent;
use pocketmine\event\Listener;
use pocketmine\world\World;
use pocketmine\block\BlockFactory;
use pocketmine\block\Water;
use pocketmine\block\Fence;

class Main extends PluginBase implements Listener{
    
    public function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

        public function onBlockSet(BlockUpdateEvent $event): void{
        $block = $event->getBlock();
        $water = false;
        $fence = false;
        for ($i = 2; $i <= 5; $i++) {
      $Blocksize = $block->getSide($i);
           if ($Blocksize instanceof Water) {
                $water = true;
        
           } else if ($Blocksize instanceof Fence) {
                $fence = true;
            }
           if ($water && $fence) {
                $id = mt_rand(1, 20);
              switch ($id) {
                    case 2;
                        $BlockRamdom = BlockFactory::getInstance()->get(4,0);
                        break;
                    case 4;
                        $BlockRamdom = BlockFactory::getInstance()->get(4,0);
		    case 6;
                        $BlockRamdom = BlockFactory::getInstance()->get(16,0);
                        break;
                    case 8;
                        $BlockRamdom = BlockFactory::getInstance()->get(15,0);
                        break;
                    case 10;
                        $BlockRamdom = BlockFactory::getInstance()->get(14,0);
                        break;
                    case 12;
                        $BlockRamdom = BlockFactory::getInstance()->get(13,0);
                        break;
                    case 14;
                        $BlockRamdom = BlockFactory::getInstance()->get(4,0);
                        break;
                    case 16;
                        $BlockRamdom = BlockFactory::getInstance()->get(21,0);
                        break;
                    case 18;
                        $BlockRamdom = BlockFactory::getInstance()->get(56,0);
                        break;
                    case 20;
                        $BlockRamdom = BlockFactory::getInstance()->get(153,0);
                    default:
                        $BlockRamdom = BlockFactory::getInstance()->get(4,0);
                }
                $pos = $block->getPosition();
                $world = $pos->getWorld()->setBlock($pos, $BlockRamdom, false);

            }
        }
    }
}
